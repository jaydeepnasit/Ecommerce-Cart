<?php

session_start();

class Config{

	private $DBHOST='localhost';
	private $DBUSER='root';
	private $DBPASS='';
	private $DBNAME='anonymous';
	public $con;

	public function __construct(){
		$this->con = mysqli_connect($this->DBHOST, $this->DBUSER, $this->DBPASS, $this->DBNAME);
		if(!$this->con){
			return false;
		}
	}

	public function htmlvalidation($form_data){
		$form_data = trim( stripslashes( htmlspecialchars( $form_data ) ) );
		$form_data = mysqli_real_escape_string($this->con, trim(strip_tags($form_data)));
		return $form_data;
	}

  public function select_with_order($tblname, $condition, $order, $order_by='DESC', $op='AND'){

		$field_op = "";
		foreach ($condition as $q_key => $q_value) {
			$field_op = $field_op."$q_key='$q_value' $op ";
		}
		$field_op = rtrim($field_op,"$op ");

		$select = "SELECT * FROM $tblname WHERE $field_op ORDER BY $order $order_by";
		$select_fire = mysqli_query($this->con, $select);
		if(mysqli_num_rows($select_fire) > 0){
			$select_fetch = mysqli_fetch_all($select_fire, MYSQLI_ASSOC);
			if($select_fetch){
				return $select_fetch;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}

	public function select_where_cart($tblname, $condition, $op="AND"){

		$condition_data = "";
		foreach ($condition as $c_key => $c_value) {
			$condition_data = $condition_data."$c_key='$c_value' $op ";
		}
		$condition_data = rtrim($condition_data,"$op ");

		$select = "SELECT * FROM $tblname WHERE $condition_data";
		$select_fire = mysqli_query($this->con, $select);
		if(mysqli_num_rows($select_fire) > 0){
			$select_fetch = mysqli_fetch_array($select_fire);
			if($select_fetch){
				return $select_fetch;
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}	

	}

}
?>