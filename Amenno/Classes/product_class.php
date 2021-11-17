<?php

require ('../Settings/db_class.php');

// inherit the methods from Connection
class Product extends Connection{


	function add_product($prod_cat,$prod_brand,$title, $price, $desc,$keywords){
		// return true or false
		return $this->query("insert into products(product_cat,product_brand,product_title, product_price, product_desc,product_keywords) 
								values('$prod_cat','$prod_brand','$title', '$price', '$desc', '$keywords')");
	}
	function add_brand($brand){
		// return true or false
		return $this->query("insert into brands(brand_name) 
								values('$brand')");
	}
	function add_category($category){
		// return true or false
		return $this->query("insert into categories(cat_name) 
								values('$category')");
	}

	function delete_one_product($id){
		// return true or false
		return $this->query("delete from products where product_id = '$id'");
	}

	function update_one_product($product_id,$product_cat,$product_brand,$product_title,$product_price,$product_description,$product_keyword)
    {
        // return true or false
        return $this->query(
            "update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',
							product_desc='$product_description',product_keywords='$product_keyword' where product_id = '$product_id'"
        );
    }

	function update_one_brand($id,$name){
		// return true or false
		return $this->query("update brands set brand_name ='$name' where brand_id = '$id'");
	}
	function update_one_category($id,$name){
		// return true or false
		return $this->query("update categories set cat_name ='$name' where cat_id = '$id'");
	}

	function select_all_products(){
		// return array or false
		return $this->fetch("select * from products");
		// return $this->fetch("Select * from products join brands on product_brand = brands.brand_id
								//  join categories on product_cat = categories.cat_id ");
	}

	function select_all_brands(){
		// return array or false
		return $this->fetch("select * from brands");
	}

	function select_all_categories(){
		// return array or false
		return $this->fetch("select * from categories");
	}


	function select_one_brand($id){
		// return associative array or false
		return $this->fetchOne("select * from brands where brand_id='$id'");
	}

	function select_one_category($id){
		// return associative array or false
		return $this->fetchOne("select * from categories where cat_id='$id'");
	}

    function select_one_product($product_id)
    {
        // return associative array or false
        return $this->fetchOne("select * from products inner join categories on products.product_cat = categories.cat_id
                                                        inner join brands on products.product_brand = brands.brand_id
                                                        where product_id='$product_id'");
    }

	function search_product($word)
    {
        // return associative array or false
        return $this->fetch("Select * From products where product_title Like '%$word%'  or product_keywords Like '%$word%' ");
    }

	

}

?>