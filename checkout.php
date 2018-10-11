<!DOCTYPE html>
<html lang="en">

    <head>
        <title>RAGA Checkout - Victoria Austin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    
    <body>
        
        <!--Include Header File-->
        <?php
            include("connect.php");
            include("header.php");
        ?>
        
        
        <div class="container">
           
            <div class="row">
                <div class="col col-lg-12">
                    <h1>Checkout</h1>
                </div>
            </div>
            
            <div class="row">
               
                <div class="col-sm-12 col-md-12 col-lg-9">
                   
                    <div class="row cart-sections">
                        <div class="col col-lg-12 col-md-12 col-sm-12">
                            <h2>Shipping Information</h2>
                        </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col col-lg-12 col-md-12 col-sm-12 form-spacing">

                            <form class="shipping-info">

                                <div class="form-row col-lg-12 col-md-12">

                                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                                        <label for="firstNameShip">First Name</label>
                                        <input type="text" class="form-control" id="firstNameShip" placeholder="First Name">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                                        <label for="lastNameShip">Last Name</label>
                                        <input type="text" class="form-control" id="lastNameShip" placeholder="Last Name">
                                    </div>

                                </div>

                                <div class="form-row col-lg-12 col-md-12">

                                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                                        <label for="streetName">Street</label>
                                        <input type="text" class="form-control" id="streetName" placeholder="Street Name">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                                        <label for="aptName">Apt or Suite #</label>
                                        <input type="text" class="form-control" id="aptName" placeholder="Apt or Suite #">
                                    </div>

                                </div>

                                <div class="form-row col-lg-12 col-md-12">

                                    <div class="form-group col-sm-12 col-lg-4 col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-4 col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" placeholder="State">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-4 col-md-4">
                                        <label for="zipCode">ZIP Code</label>
                                        <input type="text" class="form-control" id="zipCode" placeholder="ZIP Code">
                                    </div>

                                </div>

                            </form>  

                        </div>

                    </div>

                    <div class="row cart-sections">
                        <div class="col col-lg-12 col-md-12 col-sm-12">
                            <h2>Billing Information</h2>
                        </div>
                    </div>

                    <hr>

                    <div class="row cart-sections">
                        <div class="col col-lg-12 col-md-12 col-sm-12">
                            <h3>Billing Address</h3>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col col-lg-12 col-md-12 col-sm-12">

                            <div class="form-check form-spacing">
                                <input class="form-check-input" type="checkbox" value="" id="addressCheck">
                                <label class="form-check-label" for="addressCheck">
                                    Same as Shipping Address
                                </label>
                            </div>

                            <form class="billing-address form-spacing">

                                <div class="form-row col-lg-12 col-md-12">

                                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                                        <label for="streetName">Street</label>
                                        <input type="text" class="form-control" id="streetName" placeholder="Street Name">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                                        <label for="aptName">Apt or Suite #</label>
                                        <input type="text" class="form-control" id="aptName" placeholder="Apt or Suite #">
                                    </div>

                                </div>

                                <div class="form-row col-lg-12 col-md-12">

                                    <div class="form-group col-sm-12 col-lg-4 col-md-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-4 col-md-4">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" placeholder="State">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-4 col-md-4">
                                        <label for="zipCode">ZIP Code</label>
                                        <input type="text" class="form-control" id="zipCode" placeholder="ZIP Code">
                                    </div>

                                </div>

                            </form>

                            <div class="row cart-sections">
                                <div class="col col-lg-12 col-md-12 col-sm-12">
                                    <h3>Payment Information</h3>
                                </div>
                            </div>

                            <form class="payment-info">

                                <div class="form-row col-lg-12 col-md-12">

                                    <div class="form-group col-sm-12 col-lg-3 col-md-6">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-3 col-md-6">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-3 col-md-6">
                                        <label for="email">E-Mail</label>
                                        <input type="email" class="form-control" id="email" placeholder="E-Mail">
                                    </div>

                                    <div class="form-group col-sm-12 col-lg-3 col-md-6">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" class="form-control" id="phoneNumber" placeholder="Phone #">
                                    </div>

                                </div>

                                <div class="form-row col-lg-12 col-med-12">

                                    <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                        <label for="cardNumber">Card Number</label>
                                        <input type="number" class="form-control" id="cardNumber" placeholder="XXXXXXXXXXXXXXXX">
                                    </div>

                                    <div class="form-group col-sm-6 col-md-2 col-lg-2">
                                        <label for="expirMonth">Month</label>
                                        <select class="custom-select my-1 mr-sm-2" id="expirMonth">
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                            <option value="3">03</option>
                                            <option value="4">04</option>
                                            <option value="5">05</option>
                                            <option value="6">06</option>
                                            <option value="7">07</option>
                                            <option value="8">08</option>
                                            <option value="9">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6 col-md-2 col-lg-2">
                                        <label for="expirYear">Year</label>
                                        <select class="custom-select my-1 mr-sm-2" id="expirYear">
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6 col-md-2 col-lg-2">
                                        <label for="cvcCode">CVC</label>
                                        <input type="number" class="form-control" id="cvcCode" placeholder="XXX">
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-3">
                   
                    <div class="row price-info justify-content-end">
                       
                        <div class="col col-lg-6 col-md-6 col-sm-6">
                            <p>Item Total:</p>
                            <p>Tax:</p>
                            <p>Shipping:</p>
                            <h2 class="cart-total">Total:</h2>
                        </div>
                        
                        <div class="col col-lg-6 col-md-6 col-sm-6">
                            <p>$28.99</p>
                            <p>$3.75</p>
                            <p>$4.99</p>
                            <h2 class="cart-total">$37.84</h2>
                        </div>
                        
                    </div>

                    <div class="row justify-content-end">
                       
                        <div class="col col-lg-12 col-md-12 col-sm-12">
                            <button class="proceed btn btn-block">Confirm Order</button>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            
        </div>
        
        
        <?php
            include("footer.php");
        ?>    
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/script.js"></script>
    
    </body>

</html>