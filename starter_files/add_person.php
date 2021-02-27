<?php  include('db.php'); ?>

<?php
if(isset($_POST['submiit'])){
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $group = $_POST['notes'];



    $sql = "INSERT INTO `contact list` (`Firstname`,`Lastname`,`email`,`adress`,`phone`,`groupe`)
    VALUES ('$Fname','$Lname','$email','$adress' ,'$phone', '$group')  ";

mysqli_query($con,$sql);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<!--------------------------------------------------------------------------------------------------------------------------------------
--------------------------------start login page--------------------------------------------------------------------------------------->
    <div class="container-fluid mt-5 login-section">
        


        <div class="row mb-2">
            <div class="col-lg-4 col-md-2"></div>
            <div class="col-lg-6 col-md-8 ">
                <div class="col-lg-7 mt-5  text-center ">
                   <h1 ><img class="logo" src="./assets/img/browser.svg" alt="">CONTACT LIST</h1>
                </div>
            </div>
        </div>

        <div class="text-center col-md-6 offset-md-3 login-informations p-5">
            <h4>ADD PERSON</h4>
            <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div>
                <input type="text" class="form-control" placeholder="Firstname" name="Fname">
            </div> <div>
                <input type="text" class="form-control" placeholder="Lastname" name="Lname">
            </div> <div>
                <input type="text" class="form-control" placeholder="Email" name="email">
            </div> <div>
                <input type="text" class="form-control" placeholder="Adress" name="adress">
            </div> <div>
                <input type="text" class="form-control" placeholder="Phone" name="phone">
            </div> <div>
                <input type="text" class="form-control" placeholder="Notes" name=notes>
            </div>
            <button name="submiit" type="button" class="btn btn-info " data-mdb-ripple-color="dark">ADD</button>
            </form>

        </div>




<!-------------------------------------------------------------------------------------------------------------------------------------
-------------------------------- end login page--------------------------------------------------------------------------------------->
</body>
</html>