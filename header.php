<?php

global $cart_data;

if(isset($_SESSION['product_cart']) && !empty($_SESSION['product_cart'])){
    $cart_data = $_SESSION['product_cart'];
}

?>
<div class="container-fluid bg-danger" id="header123">
    <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand header-text" href="#!">PHP Tutorial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="color:white !important;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link header-text" href="index.php">Add To Cart In PHP</a>
                </li>
            </ul>
            <div class="my-2 my-lg-0 text-center">
                <a href="cart.php">
                    <button class="btn btn-light" type="button" id="ref">
                        <span><i class="fas fa-shopping-cart"></i></span>
                        <span class="badge badge-danger"><?php echo @count($cart_data); ?></span>
                    </button>
                </a>
            </div>
        </div>
    </nav>
</div>