<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Models\Contact;
use App\Models\Order;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function contact(): Response
    {
        return $this->html();
    }

    public function save()
    {
        $id = (int)$this->request()->getValue('id');
        //$oldFileName = "";

        if ($id > 0) {
            $contact = Contact::getOne($id);
            # $oldFileName = $contact->getPicture();
        } else {
            $contact = new Contact();
        }
        $contact->setName($this->request()->getValue('name'));
        $contact->setEmail($this->request()->getValue('email'));
        $contact->setSubject($this->request()->getValue('subject'));
        $contact->setMessage($this->request()->getValue('message'));
        //$contact->setName($this->app->getAuth()->getLoggedUserName());
        //$contact->save();

        $formErrors = $this->formErrors();
        if (count($formErrors) > 0) {
            return $this->html(
                [
                    'contact' => $contact,
                    'errors' => $formErrors
                ], 'add'
            );
        } else {
            //if ($oldFileName != "") {
            //    FileStorage::deleteFile($oldFileName);
            //}
            //$newFileName = FileStorage::saveFile($this->request()->getFiles()['picture']);
            #$contact->setPicture($newFileName);
            $contact->save();
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

    public function add(): Response
    {
        return $this->html();
    }

    public function order(): Response
    {
        return $this->html();
    }

    public function about(): Response
    {
        return $this->html();
    }


    public function admin() : Response
    {
        return $this->html(
            [
                'contacts' => Contact::getAll()
                #'#postcards' => Order::getAll()
            ]
        );
    }
}
