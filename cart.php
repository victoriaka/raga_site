<!DOCTYPE html>
<html lang="en">

    <head>
        <title>RAGA Cart - Victoria Austin</title>
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
                    <h1>Cart</h1>
                </div>
            </div>
            
            <div class="row">
               
                <div class="col col-sm-12 col-md-12 col-lg-9">
                    
                    <div class="row cart-sections">
                        <div class="col col-lg-10">
                            <h2>Item Description</h2>
                        </div>
                        <div class="col col-lg-2">
                            <h2>Price</h2>
                        </div>
                    </div>

                    <hr>

                    <div class="row cart-item">
                       
                        <div class="col col-lg-3 col-md-3">
                            <img src="img/ComfortSoft-100-Cotton-T-Shirt-5280_Black.png" alt="item image" class="catalog-image">
                        </div>
                        
                        <div class="col col-lg-7 col-md-7">
                            <h3>Black T-Shirt</h3>
                            <p class="cart-item-info">Color: Black</p>
                            <p class="cart-item-info">Size: M</p>
                            <button class="remove-cart">Remove from Cart</button>
                        </div>
                        
                        <div class="col col-lg-2 col-md-2">
                            <h3 class="cart-item-price">$9.99</h3>
                        </div>
                        
                    </div>

                    <div class="row cart-item">
                        <div class="col col-lg-3 col-md-3">
                            <img src="img/JERZEES-Dri-Power-Active-50-50-Cotton-Poly-Long-Sleeve-T-Shirt-29LS_True-Red.png" alt="item image" class="catalog-image">
                        </div>
                        <div class="col col-lg-7 col-md-7">
                            <h3>True Red Long Sleeve Shirt</h3>
                            <p class="cart-item-info">Color: Red</p>
                            <p class="cart-item-info">Size: S</p>
                            <button class="remove-cart">Remove from Cart</button>
                        </div>
                        <div class="col col-lg-2 col-md-2">
                            <h3 class="cart-item-price">$14.99</h3>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col col-sm-12 col-md-12 col-lg-3">
                    
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
                            <button class="proceed btn btn-block">Proceed to Checkout</button>
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
    
    </body>

</html>