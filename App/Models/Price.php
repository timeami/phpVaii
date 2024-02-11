<?php

namespace App\Models;

class Price
{
    protected ?int $id = null;
    protected string $category;
    protected int $fee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getCategory(): ?string
    {
        return $this->id;
    }

    public function setCategory(?string $id): void
    {
        $this->id = $id;
    }

    public function getFee(): ?int
    {
        return $this->id;
    }

    public function setFee(?int $id): void
    {
        $this->id = $id;
    }
}