<!DOCTYPE html>
<html lang="en">

@include('website.frontend.layouts.head')

<body>
@include("website.frontend.layouts.header")

    <!-- Cart Modal -->
    <div class="modal fade modal-sm" id="cartModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="heading">YOUR CART</h6>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p>Your shopping cart is empty</p>
                        <a href="./product.html">Start shopping</a>
                    </div>
                    <div class="total">
                        <p class="sub-total">Total:</p>
                        <p class="amount">0.00</p>
                    </div>
                    <div class="modal-buttons">
                        <div class="cart-shopping">
                            <a href="./cart.html">VIEW CART</a>
                        </div>
                        <div class="checkout-shopping">
                            <a href="./checkout.html">CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Modal -->

    <!-- Modal -->
    <div class="modal fade" id="login-modal" data-toggle="modal">
        <div class="modal-dialog" role="document">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="./assets/images/user2.svg" />
                        <p>Sign in to make the most out of your shopping experience.</p>
                        <div id="div-forms">
                            <form id="login-form" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-auto text-muted">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Remember me</label>
                                        </div>
                                        <button id="login_lost_btn" type="button" class="btn btn-link"><a href="./invalid-password.html">Lost your password?</a></button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><a href="./account.html">LOGIN</a></button>
                                <div class="create-account">
                                    <button id="login_register_btn" type="button" class="btn btn-link">Don't have an account? create one now <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                            <form id="sign-form" enctype="multipart/form-data" method="POST" style="display: none;">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary"><a href="./account.html">REGISTER</a></button>
                                <div class="back-login">
                                    <button id="register_login_btn" type="button" class="btn btn-link">Back to login<i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="cart-home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">Cart</h1>
                <p class="lead"><a href="./index.html">Home</a> <i class="fas fa-angle-right"></i> <a href="./checkout.html">Cart</a></p>
            </div>
        </div>
    </section>

    <section class="checkout-summary">
        <div class="container">
            <div class="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <table class="shop_table cart">
                            <thead>
                                <tr>
                                    <th colspan="2" class="product-name mr-2">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><img src="images/products/1.png" alt=""></td>

                                    <td class="product-name"><a href="./product-info.html">Violette</a></td>
                                    <td>&#8358;3500.00</td>
                                    <td><input class="qty" type="number" value="1"></td>
                                    <td>&#8358;3500.00</td>
                                    <td class="product-remove" data-role="removeBtn"><a href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><img src="images/products/1.png" alt=""></td>

                                    <td class="product-name"><a href="./product-info.html">Noir</a></td>
                                    <td>&#8358;3500.00</td>
                                    <td><input class="qty" type="number" value="1"></td>
                                    <td>&#8358;3500.00</td>
                                    <td class="product-remove"><a href="#" data-role="removeBtn"><i class="fa fa-close"></i></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><img src="images/products/1.png" alt=""></td>

                                    <td class="product-name"><a href="./product-info.html">Nuit</a></td>
                                    <td>&#8358;3500.00</td>
                                    <td><input class="qty" type="number" value="1"></td>
                                    <td>&#8358;3500.00</td>
                                    <td class="product-remove" data-role="removeBtn"><a href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                            </tbody>

                        </table>
                        <hr>
                        <button class="button medium">UPDATE CART</button>
                        <button class="button btn-primary medium checkout-button">CONTINUE TO SHOPPING</button>
                    </div>
                </div>
            </div>
            <div class="sub-content">
                <div class="col-md-12">
                    <div class="box-cart-total">
                        <h2 class="title">CART TOTALS</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td><span class="price my-1">&#8358;10,500.00</span></td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>
                                        <label>
                                            <input name="shipping" class="my-2" type="radio"> In-State Delivery
                                            <span class="price my-1">0</span>
                                        </label>
                                        <label>
                                        <input name="shipping" class="my-2" type="radio"> Out-Of-State Delivery
                                        <span class="price my-1">0</span>
                                    </label>
                                        <label>
                                        <input name="shipping" class="my-2" type="radio"> International Delivery
                                        <span class="price my-1">0</span>
                                    </label>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <td>Toal</td>
                                    <td><span class="price my-1">&#8358;10,5000.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <button class="button medium btn-update">UPDATE CART</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="newsletter">
        <div class="container mt-5">

            <div class="row mt-5">
                <div class="col-md-5">
                    <p class="contact-txt grey-txt">Stay connected to lithos</p>
                </div>
                <div class="col-md-7">
                    <form action="#">
                        <div class="row align-items-center">
                            <div class="col-md-10 col-9">
                                <div class="form-group">
                                    <input type="email" class="form-control subscribe" id="email" name="email" placeholder="Your Email Address" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="col-md-2 col-3">
                                <button type="submit" class="btn "> 
                                    <img src="./assets/images/send-icon.jpg" alt="" class=" img-fluid"></button>
                            </div>
                        </div>
                        <small id="emailHelp" class="form-text mt-3 form-txt grey-txt">Get the latest products, updates,
                            special offers and much more</small>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <footer class="dark-area mt-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-5">
                    <div class="row pt-2">
                        <div class="col-md-2 col">
                            <a href="./faq.html">
                                <p class="foot-txt my-2 bor-txt">Faq</p>
                            </a>
                        </div>
                        <div class="col-md-6 col">
                            <a href="./terms.html">
                                <p class="foot-txt my-2 bor-txt">Terms and conditions</p>
                            </a>
                        </div>
                        <div class="col-md-4 col">
                            <a href="./privacy-policy.html">
                                <p class="foot-txt my-2">Privacy Policy</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 col">
                    <img src="./assets/images/footer-logo.svg" alt="logo" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <div class="row  align-items-center">
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/paypal.ico" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/visa.ico" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/paypal.ico" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-3 payment my-2 col">
                            <img src="./assets/images/mastercard.ico" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--Custom JS-->
    <script src="./assets/js/custom.js"></script>
    <script src="./assets/js/login.js"></script>
    <!--<script src="./assets/js/cart.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Order Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>