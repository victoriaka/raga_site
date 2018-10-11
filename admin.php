<!DOCTYPE html>
<html lang="en">

    <head>
        <title>RAGA Search - Victoria Austin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="js/script.js"></script> 
        <link rel="stylesheet" href="css/styles.css">
    </head>
    
    <body>
        

        <?php
            include("connect.php");
            include("header.php");
        ?>
        
        
        <div class="container">
           
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <h1>Administrator Dashboard</h1> 
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 cart-sections">
                    <h2>Sales Statistics</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="chart_div"></div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-3 cart-sections">
                    <h2>Items</h2>
                </div>
            </div>
            
            <div class="row item-options">
                
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <button class="add-item btn-fluid">Add New Item</button>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-9">
                    <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search for Items">
                </div>

                <div class="col-lg-2 col-md-2 col-sm-3">
                    <button class="btn-padding btn-dark btn btn-lg" type="submit">Search</button>
                </div>
                
            </div>
            
            <div class="row item-labels">
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <h3>Image</h3>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <h3>SKU</h3>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <h3>Product Name</h3>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <h3>Stock</h3>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <h3>Color</h3>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <h3>Price</h3>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <h3>Cost</h3>
                </div>
                
            </div>
            
            <div class="row admin-item">
                
                <div class="col-lg-2 col-md-2 col-sm-12 catalog-item">
                    <img alt="product image" class="img-fluid" src="img/Anvil-100-Ring-Spun-Cotton-Tank-Top-986_Heather-Grey.png">
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <p>8275830</p>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <p>Heather Grey Tank</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>24</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>Grey</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>9.99</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>3.99</p>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <button class="view-item btn-block">Update Info</button>
                    <button class="remove-item-admin btn-block">Remove Item</button>
                </div>
                
            </div>
            
            <div class="row admin-item">
                
                <div class="col-lg-2 col-md-2 col-sm-12 catalog-item">
                    <img alt="product image" class="img-fluid" src="img/ComfortSoft-100-Cotton-T-Shirt-5280_Deep-Red.png">
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <p>8274360</p>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <p>Red T-Shirt</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>50</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>Red</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>14.99</p>
                </div>
                
                <div class="col-lg-1 col-md-1 col-sm-12">
                    <p>5.99</p>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <button class="view-item btn-block">Update Info</button>
                    <button class="remove-item-admin btn-block">Remove Item</button>
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