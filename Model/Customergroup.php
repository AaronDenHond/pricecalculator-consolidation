<?php

class Customer
{

    private int $groupId;
    private string $groupName;
    private int $parentId;
    private int $groupFixDiscount;
    private int $groupVarDiscount;



    public function __construct(int $groupIdi, string $groupNamei, int $parentIdi, int $groupFixDiscounti, int $groupVarDiscounti)
    {

        $this->groupId = $groupIdi;
        $this->groupName = $groupNamei;
        $this->parentId = $parentIdi;
        $this->groupFixDiscount = $groupFixDiscounti;
        $this->groupVarDiscount = $groupVarDiscounti;
    }

    public function groupID(): int
    {

        return $this->groupId;
    }

    public function getGroupName(): string
    {

        return $this->groupName;
    }

    public function getParentID(): int
    {

        return $this->parentId;
    }

    public function getGroupFixDiscount(): int
    {

        return $this->groupFixDiscount;
    }

    public function getGroupVarDiscount(): int
    {

        return $this->groupVarDiscount;
    }
   
    
}