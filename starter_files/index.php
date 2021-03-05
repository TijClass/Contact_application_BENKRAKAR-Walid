<?php
  include('db.php'); 
  include('validations.php');
  session_start(); 
if ( !$_SESSION['login']){
    header('Location: login.php');
    die;
}
?>


<?php

$sql = "SELECT * FROM `contact list`"; 
$result = mysqli_query($con,$sql);
if(isset($_POST['submit'])){
    $Fname =  santString($_POST['Fname']);
    $Lname = santString($_POST['Lname']);
    $email = santEmail($_POST['email']);
    $adress = santString($_POST['adress']);
    $phone = santString($_POST['phone']);
    $group = santString($_POST['notes']);



    $sql = "INSERT INTO `contact list` (`Firstname`,`Lastname`,`email`,`adress`,`phone`,`groupe`)
    VALUES ('$Fname','$Lname','$email','$adress' ,'$phone', '$group')  ";

    if(mysqli_query($con, $sql)){
        header('Location: index.php');
    } else{
        echo "err";
    }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>

<!--------------------------------------------------------------------------------------------------------------------------------------
--------------------------------start modal-------------------------------------------------------------------------------------------->
<div class="modal fade  " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


    
  <div class="modal-dialog" role="document">
    <div class="modal-content login-informations ">

      <div class="modal-body ">
            <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                </button>
                <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">


                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">First name:</label>
                        <input type="text"  name="Fname" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Last name:</label>
                        <input type="text" name="Lname" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Addreess:</label>
                        <input type="address" name="adress" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Phone:</label>
                        <input type="phone" name="phone" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="notes" value="family" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" required>
                            <label class="custom-control-label" for="customRadioInline1">Family</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="notes" value="friend" id="customRadioInline2" name="customRadioInline2" class="custom-control-input" required>
                            <label class="custom-control-label" for="customRadioInline2">Friend</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="notes" value="businness" id="customRadioInline3" name="customRadioInline3" class="custom-control-input" requireds>
                            <label class="custom-control-label" for="customRadioInline3">Businness</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Notes:</label>
                        <textarea name="" class="form-control" id="message-text" required></textarea>
                    </div>
                                <button name="submit" type="submit" class="btn btn-info " data-mdb-ripple-color="dark">ADD</button>
                </form>


      </div>
   
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------
--------------------------------end modal----------------------------------------------------------------------------------------------->
    



<!--------------------------------------------------------------------------------------------------------------------------------------
--------------------------------start informations page-------------------------------------------------------------------------------->
    <div class="container-fluid mt-5 login-section">
        


        <div class="row">
            <div class="col-lg-4 col-md-2"></div>
            <div class="col-lg-6 col-md-5 ">
                <div class="col-lg-7 mt-5  text-center ">
                   <h1 ><img class="logo" src="./assets/img/browser.svg" alt="">WELCOME TITLE</h1>
                </div>
            </div>
        </div>





        <div class="start-login row col-lg-12 ">
                <div class="ml-2 mt-5 col-lg-12">
                    
                    <div class="d-flex justify-content-between ml-5 mr-5 mb-3 "><h2>Contact list</h2>
                    <button type="button" class="btn btn-info " data-mdb-ripple-color="dark" data-toggle="modal" data-target="#exampleModal" >ADD</button>
                </div>
                    <div class="login-informations p-5">
                    <table class="table ">
                        <thead>
                            <tr >
                            <th scope="col">ID</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">adress</th>
                            <th scope="col">Phone</th>
                            <th scope="col">groupe</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  if(mysqli_num_rows($result) > 0): ?>
                    <?php  while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th><?php echo $row['ID']; ?></th>
                        <td><?php echo $row['Firstname']; ?></td>
                        <td><?php echo $row['Lastname']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['adress']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['groupe']; ?></td>
                        <td>
                            <a class="btn btn-info" name="edit" href="index.php?id=<?php echo $row['ID'];  ?>" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#exampleModal"  > <i class="fa fa-edit"></i> </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['user_id']; ?>"> <i class="fa fa-close"></i> </a>
                        </td>
                    </tr>

                    <?php endwhile; ?>
                <?php endif; ?>
                            
                        
                        </tbody>
                    </table>
                    
                </div>
                <a href="login.php">
                    <button type="button" class="float-right ml-5 mt-4 btn  btn-light" data-mdb-ripple-color="dark">Logout</button>
                </a>
                </div>
            </div>







    </div>
    
<!-------------------------------------------------------------------------------------------------------------------------------------
-------------------------------- end informations page-------------------------------------------------------------------------------->
</body>
</html>