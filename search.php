<!DOCTYPE html>
<html lang="en">

    <head>
        <title>RAGA Search - Victoria Austin</title>
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
                <div class="col-12 col-md-12 col-lg-10">
                    <form class="card card-md">
                        <div class="card-body row no-gutters align-items-center">
                           
                            <div class="col-auto">
                                <img src="img/zoom-out-6x.png" alt="search image" class="icon img-fluid">
                            </div>

                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                            </div>
                            
                            <div class="col-auto">
                                <button class="btn-padding btn-dark btn btn-lg" type="submit">Search</button>
                            </div>

                        </div>
                    </form>
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