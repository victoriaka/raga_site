<!DOCTYPE html>
<html lang="en">

    <head>
        <title>RAGA Store - Victoria Austin</title>
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
                <div class="col home-header">
                   
                    <img class="img-fluid header-image" src="img/store-header.png" alt="store header image">
                    
                    <div class="bottom-right">
                        <h1>STORE</h1>
                        <h2>Buy our products here</h2>   
                    </div>
        
                </div>
            </div>
        </div>
        
        <!--PUT FILTERS HERE AS DROPDOWNS WITH CHECKBOXES-->
        <div class="container">
            <div class="row filters">
               
                <div class="col">
                    <!--COLORS-->
                    <div class="dropdown">
                       
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonColor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            COLOR
                        </button>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonColor">
                            <a class="dropdown-item" href="#">Red</a>
                            <a class="dropdown-item" href="#">Blue</a>
                            <a class="dropdown-item" href="#">Yellow</a>
                            <a class="dropdown-item" href="#">White</a>
                            <a class="dropdown-item" href="#">Black</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col">
                    <!--ITEM TYPE-->
                    <div class="dropdown">
                       
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ITEM TYPE
                        </button>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonType">
                            <a class="dropdown-item" href="#">Top</a>
                            <a class="dropdown-item" href="#">Bottoms</a>
                            <a class="dropdown-item" href="#">Shoes</a>
                            <a class="dropdown-item" href="#">Accessories</a>
                            <a class="dropdown-item" href="#">Hoodies</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col">
                    <!--PRICE-->
                     <div class="dropdown">
                       
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonPrice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PRICE
                        </button>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonPrice">
                            <a class="dropdown-item" href="#">$0.00 - $4.99</a>
                            <a class="dropdown-item" href="#">$5.00 - $14.99</a>
                            <a class="dropdown-item" href="#">$15.00 - $24.99</a>
                            <a class="dropdown-item" href="#">$25.00 - $49.99</a>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col">
                    <!--SORT BY: make different color to differentiate-->
                    <div class="dropdown">
                       
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonSort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SORT BY:
                        </button>
                        
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSort">
                            <a class="dropdown-item" href="#">Rating</a>
                            <a class="dropdown-item" href="#">Most Recent</a>
                            <a class="dropdown-item" href="#">Price - Low to High</a>
                            <a class="dropdown-item" href="#">Price - High to Low</a>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <?php
                    $query = "SELECT * FROM items";
                    $result = mysqli_query($con, $query);
                    $count = 0;

                    while( $row = mysqli_fetch_array($result) ) {

                        echo '
                            <div class="col col-lg-3 catalog-item">

                                <img src="img/' . $row['productImage'] . '" alt="store product">
                                <h3>' . $row['productName'] . '</h3>
                                <p>$' . $row['price'] . '</p>
                                <button class="view-item">VIEW ITEM</button>

                            </div>
                        ';

                    }
                ?>
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