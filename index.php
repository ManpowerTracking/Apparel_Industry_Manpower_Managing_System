<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Manpower Finding</title>
        <link rel="shortcut icon" href="Assests/logo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/home.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-inverse  navbar-fixed-top">
                   
                    <ul class="nav navbar-nav">
                        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                          <li><a data-toggle="modal" data-target="#signup_modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                          <li><a data-target="#login_modal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </nav>
                
            </div>
            <div class="row">
                <div class="modal fade" id="login_modal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" class="close">&times;</button>
                                <h4 class="modal-title">login</h4>
                            </div>
                            <ul class="nav nav-tabs">
                                
                                <li class="active"><a href="#worker" data-toggle="tab">worker</a></li>
                                <li><a href="#supplier" data-toggle="tab">supplier</a></li>
                                <li><a href="#company" data-toggle="tab">company</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="worker">
                                    <form action="login.php" autocomplete="on" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your mobile number Or email" name="nameWL" required><br>
                                            <input type="password" class="form-control" placeholder="Enter your password" name="pwdWL" required><br>
                                            <input type="submit" class="form-control" value="Submit" name="submitWL" required>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="tab-pane" id="supplier">
                                    <form action="login.php" autocomplete="on" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your mobile number Or email" name="nameSL" required><br>
                                            <input type="password" class="form-control" placeholder="Enter your password" name="pwdSL" required><br>
                                            <input type="submit" class="form-control" value="Submit" name="submitSL" required>
                                        </div>
                                    </form>
                                
                                </div>
                                <div class="tab-pane" id="company">
                                    <form action="login.php" autocomplete="on"method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter company email" name="nameCL" required><br>
                                            <input type="password" class="form-control" placeholder="Enter your password" name="pwdCL" required><br>
                                            <input type="submit" class="form-control" value="Submit" name="submitCL" required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-danger">close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="modal fade" id="signup_modal" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">signup</h4>
                        </div>
                        <ul class="nav nav-tabs" id="tabContent">
                            <li class="active"><a href="#worker" data-toggle="tab">worker</a></li>
                            <li><a href="#company" data-toggle="tab">company</a></li>
                            <li><a href="#supplier" data-toggle="tab">supplier</a></li>
                        </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="worker">
                                <form action="register.php" autocomplete="on" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your name" name="nameWR" required><br>
                                        <input type="text" class="form-control" placeholder="Enter mobile phone number" name="mobileWR" required><br>
                                        <input type="email" class="form-control" placeholder="Enter email" name="emailWR" required><br>
                                        <input type="password" class="form-control" placeholder="Type a password" name="pwd1WR" required><br>
                                        <input type="password" class="form-control" placeholder="Confirm password" name="pwd2WR" required><br>
                                        <input type="submit" class="form-control" value="Submit" name="submitWR" required>
                                    </div>
                                    
                                </form>
                            </div>

                            <div class="tab-pane" id="company">
                                <form action="register.php" autocomplete="on" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your name" name="nameCR" required><br>
                                        <input type="text" class="form-control" placeholder="Enter mobile phone number" name="mobileCR" required><br>
                                        <input type="email" class="form-control" placeholder="Enter email" name="emailCR" required><br>
                                        <input type="password" class="form-control" placeholder="Type a password" name="pwd1CR" required><br>
                                        <input type="password" class="form-control" placeholder="Confirm password" name="pwd2CR" required><br>
                                        <input type="submit" class="form-control" value="Submit" name="submitCR" required>
                                    </div>
                                    
                                </form>
                            </div> 
                            <div class="tab-pane" id="supplier">
                                <form action="register.php" autocomplete="on" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter your name" name="nameSR" required><br>
                                        <input type="text" class="form-control" placeholder="Enter mobile phone number" name="mobileSR" required><br>
                                        <input type="email" class="form-control" placeholder="Enter email" name="emailSR" required><br>
                                        <input type="password" class="form-control" placeholder="Type a password" name="pwd1SR" required><br>
                                        <input type="password" class="form-control" placeholder="Confirm password" name="pwd2SR" required><br>
                                        <input type="submit" class="form-control" value="Submit" name="submitSR" required>
                                    </div>
                                    
                                </form>
                            </div> 
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div id="content" class="col-md-12"></div>
            </div>
            <div class="row">
                
                <div id="footer" class="col-md-12">
                    
                   
                
                </div>
            </div>
    </body>
</html>