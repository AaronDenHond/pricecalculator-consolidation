<?php

class CustomerLoader
{
    private array $customers;


    public function __construct()
    {
        $connection = Database::openConnection();
        $handle = $connection->prepare('SELECT * from customer');
        $handle->execute();
        $queriedCustomers = $handle->fetchAll();

        foreach ($queriedCustomers as $queriedCustomer) {
            $this->customers = new Customer((int)$queriedCustomer['id'], (string)$queriedCustomer['firstname'], (string)$queriedCustomer['lastname'], (int)$queriedCustomer['group_id'], (int)$queriedCustomer['fixed_discount'], (int)$queriedCustomer['variable_discount']);
        }
    }


public function getAllCustomers(){

    return $this->customers;
}

public function getCustomerByID($customerID) {
    foreach ($this->customers as $customer) {
      if($customer->getCustomerID() === $customerID) {
          return $customer;
      }
    }
}

}