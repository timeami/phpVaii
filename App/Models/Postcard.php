<?php
namespace App\Models;

use App\Core\Model;
class Postcard extends Model
{
    protected ?int $id = null;
    protected string $name ;
    protected string $address_line1;
    protected ?string $address_line2 = null;
    protected string $city;
    protected string $zip_code;
    protected string $message;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getAddressLine1(): ?string
    {
        return $this->address_line1;
    }

    public function setAddressLine1(?string $address_line1): void
    {
        $this->address_line1 = $address_line1;
    }

    public function getAddressLine2(): ?string
    {
        return $this->address_line2;
    }

    public function setAddressLine2(?string $address_line2): void
    {
        $this->address_line2 = $address_line2;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(?string $zip_code): void
    {
        $this->zip_code = $zip_code;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }


}