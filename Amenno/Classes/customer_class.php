<?php  

require ('../Settings/db_class.php');

class Customer extends Connection{

    function add_customer($name, $email, $password,$contact){
		// return true or false
		return $this->query("insert into customer(customer_name, customer_email, customer_pass,customer_contact) values('$name', '$email', '$password','$contact')");
	}

	function delete_customer($id){
		// return true or false
		return $this->query("delete from customer where customer_id = '$id'");
	}

	function update_customer($id, $name, $email, $password,$contact){
		// return true or false
		return $this->query("update customer set customer_name='$name', customer_email='$email', customer_pass='$password',
                                 customer_contact='$contact' where customer_id = '$id'");
	}
	function select_all_customer(){
		// return array or false
		return $this->fetch("select * from customer");
	}

	function select_one_customer($id){
		// return associative array or false
		return $this->fetchOne("select * from customer where customer_id='$id'");
	}

	function login_customer($email){
		// return associative array or false
		return $this->fetchOne("select * from customer where customer_email='$email'");
	}
}
?>