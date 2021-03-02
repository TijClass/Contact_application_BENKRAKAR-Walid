<?php  
include('db.php');
include('validations.php');

                        if(isset($_POST['submit'])){
                            $email = santEmail($_POST['email']);
                            $password = santString($_POST['password']);

                            // $sql = "INSERT INTO `login` (`email`,`phone`)
                            // VALUES ('$email','$phone')  ";
                            $sql = "SELECT * from `login` WHERE `login`.`Email`='$email'  LIMIT 1";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($result);
                            if( $row['Password']=== $password){
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['id'] = $row['id'];

                                header('Location: index.php');
                            } else{
                                header('Location: login.php');
                            }
                        }
                        ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page2</title>
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
        


        <div class="row">
            <div class="col-lg-4 col-md-2"></div>
            <div class="col-lg-6 col-md-8 ">
                <div class="col-lg-7 mt-5  text-center ">
                   <h1 ><img class="logo" src="./assets/img/browser.svg" alt="">WELCOME TITLE</h1>
                </div>
            </div>
        </div>






        <div class="start-login row ">
            <div class=" col-lg-1 col-md-1 mt-5"></div>

<!---------------------------------------------------------------------------------------------------------------------------------------
--------------------------------start first colum--------------------------------------------------------------------------------------->
            <div class=" col-lg-4 col-md-12 mt-5">
                <h2 class="text-center" >WELCOME sub_title</h2>
            <div class="mt-5"></div>
                        <div class="mt-5 text-center">Lorem Ipsum Dolor Sit Amet, Consectetur 
                            Adipisicing Elit, Sed Do Eiusmod Tempor 
                            Incididunt Ut Labore Et Dolore Magna Aliqua
                            Ut Enim Ad Minim Veniam, Quis Nostrud 
                            Exercitation Ullamco Laboris Nisi Utaliquip Ex
                            Ea Commodo Consequat. Duis Aute Irure Dolor In 
                            Reprehenderit In Voluptate Velit Esse Cillum Dolore
                            Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat 
                            Cupidatat Non Proident, Sunt In Culpa Qui Officia 
                            Deserunt Mollit Anim Id Est Laborum.</div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class=" btn btn-light mt-3 " data-mdb-ripple-color="dark">Read More</button>
                            </div>
            </div>

<!-------------------------------------------------------------------------------------------------------------------------------------
--------------------------------end first colum--------------------------------------------------------------------------------------->



<!--------------------------------------------------------------------------------------------------------------------------------
--------------------------------start line--------------------------------------------------------------------------------------->

             <div class=" col-lg-1 col-md-0  mt-5 line"></div>

<!------------------------------------------------------------------------------------------------------------------------------
--------------------------------end line--------------------------------------------------------------------------------------->


<!-----------------------------------------------------------------------------------------------------------------------------------------
--------------------------------start second  colum--------------------------------------------------------------------------------------->

             <div class="col-lg-6 col-md-12 mt-5  ">
                 <h2 class="text-center">Login</h2>
                 <div class="mt-5  login-informations p-5">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                        <div class=" d-flex justify-content-between mt-5 " >
                                <button name="submit" type="submit" class="btn btn-light" data-mdb-ripple-color="dark">Login</button>
                            <div>
                                <input type="checkbox" name="remember_me" id="remember_me"  class="">
                                <label class="" for="remember_me"> Remember Me!</label>
                            </div>
                        </div>
                    </form>
                    <div class=" col-lg-1 col-md-8 "></div>
                </div>
             </div>
        </div>

<!--------------------------------------------------------------------------------------------------------------------------------------
--------------------------------end second colum--------------------------------------------------------------------------------------->


    </div>
    
<!-------------------------------------------------------------------------------------------------------------------------------------
-------------------------------- end login page--------------------------------------------------------------------------------------->
</body>
</html>