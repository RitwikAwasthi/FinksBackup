

<?php
include_once("db.php");
$db = new db();

function _check_name($_string){
    if($_string==""){
        //echo "missing name<br>\n";
        $_POST[name_error]='missing name';
        return false;
    } 
}
function _check_pass($_string){
    if($_string==""){
        //echo "missing name<br>\n";
        $_POST[pass_error]='missing password';
        return false;
    } 
}
function _check_pass_repeat($_string){
    if($_string==""){
        //echo "missing name<br>\n";
        $_POST[pass_repeat_error]='missing password';
        return false;
    } 
}
function _check_phone($_string){
    if($_string==""){
        //echo "missing name<br>\n";
        $_POST[phone_error]='missing phone number.';
        return false;
    } 
}
if(isset($_POST['insert'])) {
    
    $name_valid = _check_name($_POST['name']);
    $pwd_valid = _check_pass($_POST['pwd']);
    $pwd_valid_1 = _check_pass_repeat($_POST['pwd1']);
    $phone_valid = _check_phone($_POST['phone']);
    if($name_valid && $pwd_valid) {

    } else {
      echo "<script type='text/javascript'>window.location.href='registration.php';</script>";
    }
}
?>
<!DOCTYPE html> 
<html>
<head>

	  <title>Members</title>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
     <link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
    <link rel="stylesheet" type="text/css" href="Signup.css"> 
    <style type="text/css">
      .form-group .form-control {
          width: 90%;
          display: inline-block;
      }
    </style>
</head>


<body>




<div> 

 <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <svg class="logo__shape" width="25px" viewBox="0 0 634 479" xmlns="http://www.w3.org/2000/svg"><g><path d="        "/></g></svg>
      <h1 class="logo__text"></h1>
    </div>


    <div class="thumbnail__content text-center">
      <h1 class="heading- -primary"> Welcome to Finks! </h1>
      <h2 class="heading- -secondary"> Join us by creating a free account</h2>
    </div>


    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
   
        <li><a href="https://www.facebook.com/GloryLinda" target="_blank"><fa class="fa fa-facebook"></fa></a></li>
        <li><a href="https://instagram.com/glorylinda" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>

    <div class="signup__overlay"></div>
</div>



<!-- Sign Up/Registration Form -->
  <div class="container__child signup__form">
    <form action="register.php" method="POST">
       <!--- username: text box -->
      <div class="form-group">
        <label for="name">USERNAME</label>
        <input type="text" class="form-control" id="name" id="username" placeholder="Please enter a username" name="name" required />
        <?php echo $_POST[name_error]?>
      </div>
  
      
     
     <!-- Password text box -->
      <div class="form-group">
        <label for="pwd">PASSWORD</label>
        <input type="password" class="form-control" id="pwd" placeholder="Please enter a password"  name="pwd" required />
        <?php echo $_POST[pass_error_repeat]?>
      </div>


   <!-- Confirm/repeat Password text box-->
      <div class="form-group">
        <label for="pwd1">CONFIRM PASSWORD</label>
        <input type="password" class="form-control" id="pwd1" placeholder="Reenter password"  name="pwd1"  required />
        <?php echo $_POST[pass_error_repeat]?>
      </div>
       <div class="form-group">
     <!--phone number: text box-->
      <label for="phone">PHONE NUMBER:</label>
      <input type="text" class="form-control" id="phone" placeholder="Please enter your phone number" name="phone">
      <?php echo $_POST[phone_error]?>
    </div>

      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Sign Up" />
          </li>
          <li><a class="signup__link" href="Login.html">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>

</div>




  <div class="navbar">
  <ul class="navs">
  <li class="logo">
        <!--NAVIGATION-->
    <i class="iconfont icon-daocha"></i>
  </li>
  <li class="active fr"><a  href="registration.php">REGISTER</a></li>
  <li class="fr"><a href="ranking.php">RANKING</a></li>
   <li class="fr"><a  href="results_sample.php">PHOTOS</a></li>
  <li class="fr"><a  href="submission.php">UPLOAD</a></li>

  <li class="fr"><a  href="search.php">SEARCH</a></li>
</ul>
  </div>


<script type="text/javascript" src="js/script.js?v=005"></script>




</body>
</html>
