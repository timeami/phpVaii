<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Helpers\FileStorage;
use App\Models\Order;

class OrderController extends AControllerBase
{
    public function index(): Response
    {
         return $this->html([
             'orders' => Order::getAll(),
         ]);
    }

    public function authorize(string $action)
    {
        switch ($action) {
            case 'edit' :
            case 'delete' :
                // get id of post to check
                $id = (int)$this->request()->getValue("id");
                // get Order from db
                $postcardToCheck = Order::getOne($id);
                // check if the logged login is the same as the post author
                // if yes, he can edit and delete post
                return $postcardToCheck->getName() == $this->app->getAuth()->getLoggedUserName();
            case 'save':
                return true;
                // get id of post to check
                $id = (int)$this->request()->getValue("id");
                if ($id > 0 ) {
                    // only author can save the edited post
                    $postcardToCheck = Order::getOne($id);
                    return $postcardToCheck->getName()() == $this->app->getAuth()->getLoggedUserName();
                } else {
                    // anyone can add a new post
                    return $this->app->getAuth()->isLogged();
                }
            default:
                return $this->app->getAuth()->isLogged();
        }
    }

    public function add(): Response
    {
        return $this->html();
    }

    public function edit(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $postcard = Order::getOne($id);

        if (is_null($postcard)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'postcard' => $postcard
            ]
        );
    }

    public function save()
    {
        $id = (int)$this->request()->getValue('id');
        $oldFileName = "";

        if ($id > 0) {
            $postcard = Order::getOne($id);
            # $oldFileName = $Order->getPicture();
        } else {
            $postcard = new Order();
        }
        $postcard->setName($this->request()->getValue('name'));
        $postcard->setAddressLine1($this->request()->getValue('address_line1'));
        $postcard->setAddressLine2($this->request()->getValue('address_line2'));
        $postcard->setCity($this->request()->getValue('city'));
        $postcard->setZipCode($this->request()->getValue('zip_code'));
        $postcard->setOrder($this->request()->getValue('order'));
//        $postcard->setName($this->app->getAuth()->getLoggedUserName());

        $postcard->save();
        return new RedirectResponse($this->url("home.index"));

    }

    public function delete()
    {
        $id = (int) $this->request()->getValue('id');
        $postcard = Order::getOne($id);

        if (is_null($postcard)) {
            throw new HTTPException(404);
        } else {
            #FileStorage::deleteFile($Order->getPicture());
            $postcard->delete();
            return new RedirectResponse($this->url("home.index"));
        }
    }

    private function formErrors(): array
    {
        $errors = [];
        if ($this->request()->getValue('name') == "") {
            $errors[] = "Meno musí byť vyplnené!";
        }
        if ($this->request()->getValue('email') == "") {
            $errors[] = "Pole email musí byť vyplnené!";
        }
        return $errors;
    }



}