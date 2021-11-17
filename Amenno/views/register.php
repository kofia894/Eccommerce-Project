
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
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/validation.css">

        <!-- owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- animate css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- mean menu css -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- main style -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- responsive -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    
    </head>
    <body style="background: #051922;">
    <div class="login-form">
        <form action="registerprocess.php" method="post" id="form">
            <h2 class="text-center">Sign Up</h2>     

            <div class="form-group">
                <input type="text" class="form-control" id = "fullname" placeholder="Full Name"  name="fname">

                <small></small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id = "email" placeholder="Email" name="email">
    
                <div class="error"><small></small></div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id = "password" placeholder="Password"  name="pword">

                <div class="error"><small></small></div>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id = "cpassword" placeholder="Confirm Password"  name="cpword">

                <div class="error"><small></small></div>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" id = "contact" placeholder="Contact Number"  name="ctt">
    
                <div class="error"><small></small></div>
            </div>


            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id= "submitbtn" name="add_user"> Sign Up</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>        

            <p class="text-center mt-4"><a href="login.html"> Sign in</a></p>
        </form>

        <!-- <?php
            if($errors){
                foreach($errors as $error){
                        echo "<div class='alert alert-danger' role='alert'>".
                            $error."</div>";
                        }
                    }
       ?> -->


        
    </div>
    <script src="../Amenno/assets/js/validation.js"></script>
    <script src="../Amenno/assets/js/jquery-1.11.3.min.js"></script>
    <script src="../Amenno/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>