<!DOCTYPE html>
<html lang="en">

    <head>
        <title>RAGA Customer Profile - Victoria Austin</title>
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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1>Profile</h1>
                    <hr>
                </div>
            </div>
                        
            
            <div class="row profile-section-name">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2>Personal Information</h2>
                </div>
            </div>
            
            <div class="row profile-info">
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <p>First Name:</p>
                    <input type="text" class="form-control" id="profileFN" placeholder="Victoria" value="">
                </div>
                
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <p>Last Name:</p>
                    <input type="text" class="form-control" id="profileLN" placeholder="Austin" value="">
                </div>
                
            </div>
            
            <div class="row profile-info">
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <p>E-Mail:</p>
                    <input type="text" class="form-control" id="profileEmail" placeholder="victoriaka@knights.ucf.edu" value="">
                </div>
                
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <p>Phone:</p>
                    <input type="text" class="form-control" id="profilePhone" placeholder="443-248-1946" value="">
                </div>
               
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="save-info">Save</button>
                </div>
            </div>
            
            <div class="row profile-section-name">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="profile-section-name">Shipping Address</h2>
                </div>
            </div>
            
            <div class="row profile-info">
               
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <p>Address Line 1:</p>
                    <input type="text" class="form-control" id="profileAddL1" placeholder="3965 Ashton Dr" value="">
                </div>
                
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <p>Address Line 2:</p>
                    <input type="text" class="form-control" id="profileAddL2" placeholder="Apt. 405" value="">
                </div>
                
            </div>
            
            <div class="row profile-info">
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <p>City:</p>
                    <input type="text" class="form-control" id="profileCity" placeholder="Oviedo" value="">
                </div>
                
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <p>State:</p>
                    <input type="text" class="form-control" id="profileState" placeholder="FL" value="">
                </div>
                
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <p>ZIP:</p>
                    <input type="text" class="form-control" id="profileZIP" placeholder="29068" value="">
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="save-info">Save</button>
                </div>
            </div>
            
            <div class="row profile-section-name">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="profile-section-name">Billing Info</h2>
                </div>
            </div>
            
            <div class="row profile-section-name">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3 class="profile-section-name">Billing Address</h3>
                </div>
            </div>
            
            <div class="row profile-info">
               
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <p>Address Line 1:</p>
                    <input type="text" class="form-control" id="profileAddL1Bill" placeholder="3965 Ashton Dr" value="">
                </div>
                
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <p>Address Line 2:</p>
                    <input type="text" class="form-control" id="profileAddL2Bill" placeholder="Apt. 405" value="">
                </div>
                
            </div>
            
            <div class="row profile-info">
               
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <p>City:</p>
                    <input type="text" class="form-control" id="profileCityBill" placeholder="Oviedo" value="">
                </div>
                
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <p>State:</p>
                    <input type="text" class="form-control" id="profileStateBill" placeholder="FL" value="">
                </div>
                
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <p>ZIP:</p>
                    <input type="text" class="form-control" id="profileZIPBill" placeholder="29068" value="">
                </div>
            
            </div>
            
            <div class="row profile-section-name">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3 class="profile-section-name">Payment Information</h3>
                </div>
            </div>
            
            <form class="payment-info">

                <div class="form-row col-lg-8 col-md-8">

                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                        <p>First Name</p>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                    </div>

                    <div class="form-group col-sm-12 col-lg-6 col-md-6">
                        <p>Last Name</p>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                    </div>

                </div>

                <div class="form-row col-lg-8 col-med-8">

                    <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <p>Card Number</p>
                        <input type="number" class="form-control" id="cardNumber" placeholder="XXXXXXXXXXXXXXXX">
                    </div>

                    <div class="form-group col-sm-6 col-md-2 col-lg-2">
                        <p>Month</p>
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
                        <p>Year</p>
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
                        <p>CVC</p>
                        <input type="number" class="form-control" id="cvcCode" placeholder="XXX">
                    </div>

                </div>

            </form>
            
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="save-info">Save</button>
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