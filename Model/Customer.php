<?php

class Customer
{

    private int $id;
    private string $firstname;
    private string $lastname;
    private int $groupId;
    private int $fixDiscount;
    private int $varDiscount;



    public function __construct(int $ide, string $firstnamee, string $lastnamee, int $groupIde, int $fixDiscounte, int $varDiscounte)
    {

        $this->id = $ide;
        $this->firstname = $firstnamee;
        $this->lastname = $lastnamee;
        $this->groupId = $groupIde;
        $this->fixDiscount = $fixDiscounte;
        $this->varDiscount = $varDiscounte;
    }

    public function getCustomerID(): int
    {

        return $this->id;
    }

    public function getCustomerFirstName(): string
    {

        return $this->firstname;
    }

    public function getCustomerLastName(): string
    {

        return $this->lastname;
    }

    public function getCustomerGroupID(): int
    {

        return $this->groupId;
    }

    public function getCustomerFixDiscount(): int
    {

        return $this->fixDiscount;
    }
    public function getCustomerVarDiscount(): int
    {

        return $this->varDiscount;
    }
}
