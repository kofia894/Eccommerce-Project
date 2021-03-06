<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    
        <!-- title -->
        <title>Ameno</title>
    
        <!-- favicon -->
        <!-- <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"> -->
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <!-- fontawesome -->
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/bootstrap/css/validation.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="../assets/css/magnific-popup.css">
        <!-- animate css -->
        <link rel="stylesheet" href="../assets/css/animate.css">
        <!-- mean menu css -->
        <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="../assets/css/main.css">
        <!-- responsive -->
        <link rel="stylesheet" href="../assets/css/responsive.css">
    
    </head>

    <body style="background: #051922;">
    <div class="login-form">
        <form action="../Actions/registerprocess.php" method="post" id="login-form">
        <a class="btn btn-outline-success " href="../index.php" >Back</a>
            <h2 class="text-center">Log in</h2> 
            
            <div class="row no-gutters"><div id="error-block-email" class="error-block-message col-md-8 offset-md-4 text-left"></div></div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                <small></small>
            </div>

            <div class="row no-gutters"><div id="error-block-password" class="error-block-message col-md-8 offset-md-4 text-left"></div></div>
            <div class="form-group">
                <input type="password" class="form-control" id = 'password' placeholder="Password"  name="pword">
               <small></small>
            </div>

            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id= "submitbtn" name="login_user">Log in</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>   
            
            <p class="text-center mt-4"><a href="register.php">Create an Account</a></p>
        </form>
    
    </div>
    <script src="../assets/js/loginvalidation.js"></script>
    <script src="../assets/js/jquery-1.11.3.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   


</body>
</html>