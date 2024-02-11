<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\HTTPException;
use App\Core\Responses\Response;
use App\Models\Price;

class PriceController extends AControllerBase
{
    public function index(): Response
    {
        return $this->html([
            'prices' => Price::getAll(),
        ]);
    }

    public function edit(): Response
    {
        $id = (int) $this->request()->getValue('id');
        $price = Price::getOne($id);

        if (is_null($price)) {
            throw new HTTPException(404);
        }

        return $this->html(
            [
                'price' => $price
            ]
        );
    }

    public function save()
    {
        $id = (int)$this->request()->getValue('id');
        $oldFileName = "";

        if ($id > 0) {
            $price = Price::getOne($id);
            # $oldFileName = $Order->getPicture();
        } else {
            $price = new Price();
        }
        $price->setCategory($this->request()->getValue('category'));
        $price->setFee($this->request()->getValue('fee'));

        $price->save();
        return new RedirectResponse($this->url("home.price"));

    }

    public function delete()
    {
        $id = (int) $this->request()->getValue('id');
        $price = Price::getOne($id);

        if (is_null($price)) {
            throw new HTTPException(404);
        } else {
            #FileStorage::deleteFile($Order->getPicture());
            $price->delete();
            return new RedirectResponse($this->url("home.price"));
        }
    }
}