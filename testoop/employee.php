<?php
/**
 * 
 */
class Employee
{
	private $firstName;
	private $lastName;
	private $eid;
	private $address;
	function showinfo()
	{
		echo $this->firstName;
		echo $this->lastName;
		echo $this->address;
		//echo $this->eid;
	}
	function __construct($firstName,$lastName){
		$this->firstName=$firstName;
		$this->lastName=$lastName;
	}
	function set_eid($eid){
		$this->eid=$eid;
	}
	function set_address($address){
		$this->address=$address;
	}
	function get_eid(){
		return $this->eid;
		//echo $emp1->set_eid();
	}


}
$emp1=new Employee("Mg","Mg");
//$emp1->firstName="Mg";
//$emp1->lastName="Mg";
//$emp1->eid="1";
$emp1->set_eid("0099");
echo $emp1->get_eid();
$emp1->set_address("Kawlin");
//$emp1->address="kawlin";
//echo $emp1->firstName;
$emp1->showinfo();

?>