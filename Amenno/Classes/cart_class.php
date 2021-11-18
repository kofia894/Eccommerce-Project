<?php  

require ('../Settings/db_class.php');

class Cart extends Connection{

    function add_to_cart($product_id, $ip_address, $customer_id,$quantity){
		// return true or false
		return $this->query("insert into cart(p_id,ip_add,c_id,qty) values('$product_id', '$ip_address', '$customer_id','$quantity')");
	}

	function view_products($ip_add, $cid)
    {
        // return array or false
        return $this->fetch("select * from cart inner join products on cart.p_id = products.product_id
                                                where ip_add='$ip_add' and c_id='$cid'");
    }

    function delete_from_cart($id){
		// return true or false
		return $this->query("delete from cart where p_id = '$id'");
	}

  function update_product_quantity($id,$c_id,$qty){
		// return true or false
		return $this->query("update cart set qty='$qty' where p_id = '$id' and c_id = '$c_id'");
	}

	function sum_price($ip_add,$c_id){
		// return true or false
		return $this->fetch("select SUM(product_price) as total from cart inner join products on cart.p_id = products.product_id
																where ip_add='$ip_add' and c_id='$c_id'");
		// return $this->query("Select SUM() as total from cart where c_id = '$c_id'");
	}
	





}
?>