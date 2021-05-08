<?php

class Name
{
    public $_firstName;
    public $_lastName;

    public function Name($first_name, $last_name)
    {
        $this->_firstName = $first_name;
        $this->_lastName  = $last_name;
    }

    public function toString()
    {
        return ($this->_lastName . ", " . $this->_firstName);
    }
}
class NameSub1 extends Name
{
    public $_middleInitial;

    public function NameSub1($first_name, $middle_initial, $last_name)
    {
        Name::Name($first_name, $last_name);
        $this->_middleInitial = $middle_initial;
    }

    public function toString()
    {
        return (Name::toString() . " " . $this->_middleInitial);
    }
}
