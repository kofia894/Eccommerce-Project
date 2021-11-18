<?php  

require ('../Settings/db_class.php');

class Favourite extends Connection{

    function add_to_favourite($product_id, $ip_address, $customer_id,$quantity){
		// return true or false
		return $this->query("insert into favourite(p_id,ip_add,c_id,qty) values('$product_id', '$ip_address', '$customer_id','$quantity')");
	}

	function view_favourite($ip_add, $cid)
    {
        // return array or false
        return $this->fetch("select * from favourite inner join products on favourite.p_id = products.product_id
                                                where ip_add='$ip_add' and c_id='$cid'");
    }

    function delete_from_favourite($id){
		// return true or false
		return $this->query("delete from favourite where p_id = '$id'");
	}



	





}
?>