<?php

class PostcardData
{
    protected ?int $id = null;
    protected ?string $name ;
    protected ?string $address_line1;
    protected ?string $address_line2;
    protected ?string $city;
    protected ?int $zip_code;
    protected ?string $postcard_message;

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

    public function getZipCode(): ?int
    {
        return $this->zip_code;
    }

    public function setZipCode(?int $zip_code): void
    {
        $this->zip_code = $zip_code;
    }

    public function getPostcardMessage(): ?string
    {
        return $this->postcard_message;
    }

    public function setPostcardMessage(?string $postcard_message): void
    {
        $this->postcard_message = $postcard_message;
    }


}