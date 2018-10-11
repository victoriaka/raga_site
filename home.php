<!DOCTYPE html>
<html lang="en">

    <head>
        <title>RAGA Home - Victoria Austin</title>
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
                   
                    <img class="img-fluid header-image" src="img/johannes-andersson-139350-unsplash_bw.jpg" alt="home header image">
                    
                    <div class="bottom-right">
                        <h1>Deal of the Week</h1>
                        <h2>50% Off Surfing Gear</h2>   
                    </div>
        
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
               
                <div class="col col-sm-12 col-lg-6 col-md-12 feature-section">
                   
                    <h1>Featured Product</h1>
                    
                    <div class="featured-product">
                    
                        <?php

                            $query = "SELECT * FROM items WHERE productID=9";
                            $result = mysqli_query($con, $query);
                            $row = mysqli_fetch_array($result);

                            echo '

                                <img src="img/' . $row['productImage'] . '" alt="featured product">
                                <h2>' . $row['productName'] . '</h2>
                                <h3>$' . $row['price'] . '</h3>
                            ';

                        ?>
                    
                    </div>
                    
                </div>
                
                <div class="col col-sm-12 col-lg-6 col-md-12 recent-section">
                   
                    <h1>New Items</h1>
                  
                    <div class="row">
                   
                        <?php

                            $query = "SELECT * FROM items LIMIT 6";
                            $result = mysqli_query($con, $query);

                            while( $row = mysqli_fetch_array($result) ) {

                                echo '
                                    <div class="col recent-item">

                                        <img src="img/' . $row['productImage'] . '" alt="featured product">
                                        <h3>' . $row['productName'] . '</h3>
                                        <p>$' . $row['price'] . '</p>
                                        <button class="view-item">VIEW ITEM</button>
                                    </div>
                                ';

                            }

                        ?>
                        
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