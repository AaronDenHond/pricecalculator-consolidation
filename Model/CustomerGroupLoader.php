<?php

class CustomerGroupLoader
{
    private array $customerGroups;

    public function __construct()
    {
        $connection = Database::openConnection();
        $handle = $connection->prepare('SELECT * from customer_group');
        $handle->execute();
        $queriedCustomerGroups = $handle->fetchAll();

        foreach ($queriedCustomerGroups as $customerGroup) {
            $this->customerGroup = new Customergroup($customerGroup['id'], $customerGroup['name'], $customerGroup['parent_id'], $customerGroup['fixed_discount'], $customerGroup['variable_discount']);
        }
    }

   public function getAllCustomerGroup(){
       return $this->customerGroups;
   } 

   public function getCustomerGroupById($groupId){
       foreach ($this->customerGroups as $customerGroup) {
          if ($customerGroup->getCustomerID() === $groupId) {
              return $customerGroup;
          }
       }
   }
}

