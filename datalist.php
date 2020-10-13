<?php
session_start();
if($_POST['citizan'] && $_POST['titleen'] && $_POST['nameen']  && $_POST['nationality']=="Burmese" && $_POST['country'] && $_POST['school'] && $_POST['email']  && $_POST['code']=="+95 (Myanmar)" && $_POST['mobile']){
	$citizan=$_POST['citizan'];
	$titleen=$_POST['titleen'];
	$nameen=$_POST['nameen'];
	$nationality=$_POST['nationality'];
	$country=$_POST['country'];
	$school=$_POST['school'];
	$email=$_POST['email'];
	$code=$_POST['code'];
	$mobile=$_POST['mobile'];
	$myanmar=new Datalist($citizan,$titleen,$nameen,$nationality,$country,$school,$email,$code,$mobile);
	$myanmar->set_data1("$citizan");
	//echo $myanmar->get_data1();
	$myanmar->set_data2("$titleen");
	//echo $myanmar->get_data2();
	$myanmar->showdata();

}
else{
	echo "The studet is not Myanmar";
}
	class Datalist{
		private $data1;
		private $data2;
		private $data3;
		private $data4;
		private $data5;
		private $data6;
		private $data7;
		private $data8;
		private $data9;
		function showdata(){
		echo "<h1>Datalist are as following:</h1><br>";
		echo $this->data1."<br>";
		echo $this->data2."<br>";
		echo $this->data3."<br>";
		echo $this->data4."<br>";
		echo $this->data5."<br>";
		echo $this->data6."<br>";
		echo $this->data7."<br>";
		echo $this->data8."<br>";
		echo $this->data9."<br>";
		}
		function __construct($data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9){
			$this->data1=$data1;
			$this->data2=$data2;
			$this->data3=$data3;
			$this->data4=$data4;
			$this->data5=$data5;
			$this->data6=$data6;
			$this->data7=$data7;
			$this->data8=$data8;
			$this->data9=$data9;
		}
		function set_data1($data1){
			$this->data1=$data1;
		}
		function get_data1(){
			return $this->data1; 
		}
		function set_data2($data2){
			$this->data2=$data2;
		}
		function get_data2(){
			return $this->data2; 
		}
		function set_data3($data3){
			$this->data3=$data3;
		}
		function get_data3(){
			return $this->data3; 
		}
		function set_data4($data4){
			$this->data4=$data4;
		}
		function get_data4(){
			return $this->data4; 
		}
		function set_data5($data5){
			$this->data5=$data5;
		}
		function get_data5(){
			return $this->data5; 
		}
		function set_data6($data6){
			$this->data6=$data6;
		}
		function get_data6(){
			return $this->data6; 
		}
		function set_data7($data7){
			$this->data7=$data7;
		}
		function get_data7(){
			return $this->data7; 
		}
		function set_data8($data8){
			$this->data8=$data8;
		}
		function get_data8(){
			return $this->data8; 
		}

		function set_data9($data9){
			$this->data9=$data9;
		}
		function get_data9(){
			return $this->data9; 
		}
		
	}
	

?>