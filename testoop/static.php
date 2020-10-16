<?php
class Employee{
    private $firstname;
    private $lastname;
    private $eid;
    private $address;
    static public $count=0;
    function showInfo(){
        echo $this->firstname."<br>";
        echo $this->lastname."<br>";
        echo $this->eid."<br>";
        echo $this->address."<br>";
    }
    static function showCount(){
        echo "number of employee are ".self::$count;
    }
    function __construct($firstname,$lastname){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        self::$count;
    }
    function get_firstname(){
        return $this->firstname;
    }
    function get_lastname(){
        return $this->lastname;
    }
    function set_eid($eid){
        $this->eid=$eid;
    }
    function get_eid(){
        return $this->eid;
    }
    function set_address($address){
        $this->address=$address;
    }
}
$emp1=new Employee("David","Sam");
echo $emp1->get_firstname();
echo $emp1->get_lastname();
$emp1->set_eid("0098");
echo $emp1->get_eid();
$emp1->set_address("yangon");
Employee::$count ++;
$emp1->showInfo();
echo Employee::$count;
Employee::showCount();
?>