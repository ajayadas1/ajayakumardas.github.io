<?php include 'includes/common.php';
if (isset($_SESSION['email']) || isset($_SESSION['user_id'])) 
    {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>sigin</title>
        <link rel="stylesheet" type="text/css" href="css/signin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </head>
    <body>
      <div class="header">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.php">  <span class="glyphicon glyphicon-home"> </span> HOME </a>
                </div>  
            </div>                       
         </div>   
        <div class="login-form">
            <form action="login_submit.php" onsubmit="return validate(); method="post">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" id="emailText">
                        <span id="userError" style="color: red; display: none; margin-left: 5px">Email id must not empty</span><br>
                    </div>
                <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" id="passText">
                        <span id="passError" style="color: red;display: none;margin-left: 5px">Password must not empty</span><br>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>                       
            </form>
                <p class="text-center"><a href="#">Create an Account or <a href="signup.php"><b>signup</b></a></p>
        </div>
        <?php include 'includes/footer.php';?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $('#form').submit(function()
                {
                    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                    if(reg.test($('#emailText').val())==false)
                    {
                        userError.innerHTML='invalid Email';
                        $('#userError').show();
                        $('#emailText').focus();
                        return false;
                    }
                    userError.style.display='none';
                    if($('#passText').val()=='')
                    {
                        $('#passError').show();
                        $('#passText').focus();
                        return false;
                    }

                    passError.style.display='none';
                    if($('#passText').val().length<9)
                    {
                        $('#passError').html('Password must not be less than 9');
                        $('#passError').show();
                        $('#passText').focus();
                        return false;
                    }
                    return true;
                });
            });
        </script>
    </body>
</html>                                                                 