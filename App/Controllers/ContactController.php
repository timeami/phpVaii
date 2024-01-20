<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Helpers\FileStorage;
use App\Models\Contact;

class ContactController extends AControllerBase
{

    public function index(): Response
    {
        return $this->html();
    }

    public function authorize(string $action)
    {
        switch ($action) {
            case 'edit' :
            case 'delete' :
                // get id of post to check
                $id = (int)$this->request()->getValue("id");
                // get contact from db
                $contactToCheck = Contact::getOne($id);
                // check if the logged login is the same as the post author
                // if yes, he can edit and delete post
                return $contactToCheck->getName() == $this->app->getAuth()->getLoggedUserName();
            case 'save':
                // get id of post to check
                $id = (int)$this->request()->getValue("id");
                if ($id > 0 ) {
                    // only author can save the edited post
                    $contactToCheck = Contact::getOne($id);
                    return $contactToCheck->getName()() == $this->app->getAuth()->getLoggedUserName();
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
        $contact = Contact::getOne($id);

        if (is_null($contact)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'contacts' => $contact
            ]
        );
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

    public function delete()
    {
        $id = (int) $this->request()->getValue('id');
        $contact = Contact::getOne($id);

        if (is_null($contact)) {
            throw new HTTPException(404);
        } else {
            #FileStorage::deleteFile($contact->getPicture());
            $contact->delete();
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