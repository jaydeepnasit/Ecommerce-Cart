<?php

require_once '../config/Config.php';
$user_function = new Config;

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if((isset($_POST['product_num']) && !empty(trim($_POST['product_num']))) && (isset($_POST['product_qty']) && !empty(trim($_POST['product_qty'])))){

        $product_num = $user_function->htmlvalidation($_POST['product_num']);
        $product_qty = $user_function->htmlvalidation($_POST['product_qty']);

        if(isset($_SESSION['product_cart'])){

            $cart_val = $_SESSION['product_cart'];

            if(!in_array($product_num, $cart_val)){

                $counter_no = $_SESSION['counter'] + 1;
                $_SESSION['product_cart'][$counter_no] = $product_num;
                $_SESSION['product_qty_cart'][$counter_no] = $product_qty;
                $_SESSION['counter'] = $counter_no;

                $json['status'] = 100;
                $json['msg'] = "Product SuccessFully Added In Cart";

            }
            else{

                //repeat Product
                $json['status'] = 103;
                $json['msg'] = "This Product Already In Cart";

            }

        }
        else{
            $_SESSION['product_cart'][1] = $product_num;
            $_SESSION['product_qty_cart'][1] = $product_qty;
            $_SESSION['counter'] = 1;

            $json['status'] = 100;
            $json['msg'] = "Product SuccessFully Added In Cart";

        }

    }
    elseif(isset($_POST['rm_val']) && !empty(trim($_POST['rm_val']))){
        $rm_key = $_POST['rm_val'];    
        unset($_SESSION['product_cart'][$rm_key]);
        unset($_SESSION['product_qty_cart'][$rm_key]);

        $json['status'] = 102;
        $json['msg'] = "Product SuccessFully Removed";
    }
    else{

        $json['status'] = 104;
        $json['msg'] = "Invalid Data Values Not Allow";

    }

}
else{

    $json['status'] = 105;
    $json['msg'] = "Invalid Request Found";

}


echo json_encode($json);

?>