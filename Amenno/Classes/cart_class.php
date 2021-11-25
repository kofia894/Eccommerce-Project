<?php  

require_once ('../Settings/db_class.php');

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

	function check_duplicate($product_id,$customer_id){
		return $this->fetchone("select * from cart where p_id = '$product_id' and c_id = '$customer_id'");
	}

	function add_order($customer_id, $invoice_number, $date, $status){

        return $this->query("insert into orders (customer_id, invoice_no, order_date, order_status) values('$customer_id', '$invoice_number', '$date', '$status')");

    }

	function select_cart($customer_id, $ip){
        return $this->fetch("select * from cart where c_id ='$customer_id' or ip_add = '$ip' ");
    }

	function add_order_details($order_id, $pid, $qty){

        return $this->query("insert into orderdetails (order_id, product_id, qty) values ('$order_id',  '$pid', '$qty')  ");

    }

	function select_order($customer_id){
        return $this->fetchOne("select * from orders where customer_id ='$customer_id'");
    }

	function make_payment($customer_id, $order_id, $amount, $currency, $paymentdate){

        return $this->query("insert into payment (amt, customer_id, order_id, currency, payment_date) values ('$amount',  '$customer_id', '$order_id', '$currency', '$paymentdate' )  ");
        
    }

	function clear_cart($customer_id, $ip){
        return $this->query("delete from cart where c_id = '$customer_id' or ip_add = '$ip' ");
    }
	/////


	function update_order_status($product_id, $order_id){
        return $this->query ("UPDATE orderdetails SET status='complete' WHERE order_id='$order_id' AND product_id='$product_id'");
        
    }

	function get_payment($order_id){
        return $this->query("SELECT amnt FROM payment WHERE order_id='$order_id'");
        
    }
	function get_order($order_id){
        return $this->fetch("SELECT customer.customer_name, orders.order_id, orders.invoice_no, orders.order_date, orders.order_status FROM orders JOIN customer ON (customer.customer_id = orders.order_id) WHERE orders.order_id='$order_id'");
        
    }

	function get_order_details($order_id){
        return $this->fetch("SELECT products.product_name, products.product_image, products.product_price, orderdetails.qty, orderdetails.qty * products.product_price as result FROM orderdetails JOIN products ON (orderdetails.product_id = products.product_id) WHERE order_id = '$order_id'");
        
    }

	function view_cart($customer_id){
        return $this->fetch("SELECT cart.p_id, cart.c_id, cart.qty, products.product_name, products.product_image, products.product_price FROM cart JOIN products ON (cart.p_id = products.product_id) WHERE cart.c_id = '$customer_id") ;
        
    }

	
	



	





}
?>