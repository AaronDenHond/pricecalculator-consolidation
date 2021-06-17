<?php

class Product
{
    private int $id;
    private string $name;
    private int $price;



    public function __construct(int $idu, string $namu, int $pricu)
    {
        $this->id = $idu;
        $this->name = $namu;
        $this->price = $pricu;
    }

    public function getProductId(): int
    {

        return $this->id;
    }
    public function getProductName(): string
    {

        return $this->name;
    }
    public function getProductPrice(): int
    {

        return $this->price;
    }
}
