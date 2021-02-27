<?php  include('db.php'); ?>


<?php
$sql = "SELECT * FROM `contact list`";
$result = mysqli_query($con,$sql);
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
        


        <div class="row">
            <div class="col-lg-4 col-md-2"></div>
            <div class="col-lg-6 col-md-8 ">
                <div class="col-lg-7 mt-5  text-center ">
                   <h1 ><img class="logo" src="./assets/img/browser.svg" alt="">WELCOME TITLE</h1>
                </div>
            </div>
        </div>





        <div class="start-login row col-lg-12 ">
                <div class="ml-2 mt-5 col-lg-12">
                    
                    <div class="d-flex justify-content-between ml-5 mr-5 mb-3 "><h2>Contact list</h2>
                    <a href="add_person.php">
                    <button type="button" class="btn btn-info " data-mdb-ripple-color="dark"" >ADD</button>
                    </a>
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
                            <a class="btn btn-info" href="edit.php?id=<?php echo $row['user_id']; ?>"> <i class="fa fa-edit"></i> </a>
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
                <button type="button" class="float-right ml-5 mt-4 btn  btn-light" data-mdb-ripple-color="dark">Logout</button>

                </div>
            </div>







    </div>
    
<!-------------------------------------------------------------------------------------------------------------------------------------
-------------------------------- end login page--------------------------------------------------------------------------------------->
</body>
</html>