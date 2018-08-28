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
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <form action="login.php" autocomplete="on" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your mobile number" name="name" required><br>
                        <input type="password" class="form-control" placeholder="Enter your password" name="pwd" required><br>
                        <input type="submit" class="form-control" value="Submit" name="submit" required>
                    </div>
                </form>
                <div>
                    Haven't Registerd yet <a data-target="#signup_modal" data-toggle="modal">signup</a>.
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
                        <div class="modal-body">
                            <form action="register.php" autocomplete="on" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required><br>
                                <input type="text" class="form-control" placeholder="Enter mobile phone number" name="mobile" required><br>
                                <input type="email" class="form-control" placeholder="Enter email" name="email" required><br>
                                <input type="password" class="form-control" placeholder="Type a password" name="pwd1" required><br>
                                <input type="password" class="form-control" placeholder="Confirm password" name="pwd2" required><br>
                                <input type="submit" class="form-control" value="Submit" name="submit" required>
                                <select name="role" id="role">
                                    <option value="3">Worker</option>
                                    <option value="2">Supplier</option>
                                    <option value="1">Company</option>
                                </select>
                            </div>
                          </form>
  
                          
                        </div>
                                                  
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
    </body>
</html>