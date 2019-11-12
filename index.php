<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What2Watch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
    <style> 
        body {
            background-color: #e6f2ff;
            font-family: 'Arvo';
            color: #000000;
        }
        .a {
            padding-top: 30px;
            width: 100%;
        }
        .list {
            /*width: 1000px;*/
            display: inline-block;
            margin-top: 40px;
            margin-left: 30px;
        }
        .first {
            display: inline-block;
            width: 110%;
        }
    </style>


</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #FFCCCC">
        <a class="navbar-brand" href="#">What2Watch</a>
    </nav>

    <div class="page-row">
        <div id="descrip" class="col-md-offset-1 col-md6 hidden-sm hidden-xs" style="float:left;">
            <div class="a">
                <h1 class="welcome" style="text-align: center;">Welcome to What2Watch</h1>
            </div>

            <div class="b">
                    <h4 style="text-align: center;">Helping you find new  movies and tv shows</h4>
            </div>
            
            <div class = "list">
                <div class = "first"> 
                     <h5><img src="check.png" style= "width: 8%;height:8%; margin-right: 30px;">Movie sorting and recommendation service</h5>
                     <h5><img src="check.png" style= "width: 8%;height:8%; margin-right: 30px;">Tailored results based on your preferences</h5>
                     <h5><img src="check.png" style= "width: 8%;height:8%; margin-right: 30px;">Connect with others who have common watching interest</h5>
                </div>
            </div>   
        </div>

<!-- LOG IN -->
        <div id="login" class="col-md-5" style="float:right;">
            <form onsubmit="return validateLoginForm()" method="POST">
                <div class="panel-login">

                    <div class="sign-in-title">
                        <h1>Sign in</h1>
                    </div>
                    <div class="login-row" style="margin-left:30%">
                        <input name = "username" id="username" placeholder="Enter Email">
                    </div>
                    <div class="login-row" style="margin-left:30%;">
                        <input type="password" name="password" id="password" placeholder="Enter password" required>
                        <input type="submit" id="button" value="Submit" style = "background-color: #FFCCCC">
                    </div>

                </div>
            </form>

<!-- CREATE ACCOUNT -->
            <form onsubmit="return validateCreateForm()" method="POST">
                <div class="panel-login">
                    <div class="sign-in-title">
                        <h1>Create Account</h1>
                    </div>
                    <div class="login-row" style="margin-left:10%">
                        <input type="email" name= "cname" id="cname" placeholder="Enter UVa email" style="width: 76.5%;">
                    </div>
                    <div class="login-row" style="margin-left:10%">
                        <input name= "firstname" id="firstname" placeholder="Enter First Name" style="width: 76.5%;">
                    </div>
                    <div class="login-row" style="margin-left:10%">
                        <input name= "middlename" id="middlename" placeholder="Enter Middle Initial" style="width: 76.5%;">
                    </div>
                    <div class="login-row" style="margin-left:10%">
                        <input name= "lastname" id="lastname" placeholder="Enter Last Name" style="width: 76.5%;">
                    </div>

                    <div>
                        <div class="login-row" style="margin-left:10%;">
                        <input type="password" name= "cpass" id="cpass" placeholder="Enter password" required>
                        <input type="password" id="confirmpass" placeholder="Confirm password" required>
                        <input type="submit" name="create" id="button" value="Submit" style = "background-color: #FFCCCC"></div>
                    </div>
                    
                </div>
            </form>

        </div>
    </div>



</body>
    
<script>
    
    document.getElementById("button").addEventListener("click", function(e){
        var name = document.getElementById("username").value;
        var nameRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.edu$/;
        
        if (nameRegex.test(name) == true) {
            // alert('true');
            return true;
        } else {
            alert('Please enter an @virginia.edu email');
            e.preventDefault();
        }
    });
    function validateCreateForm(){
        var pass = document.getElementById("cpass");
        var pass2 = document.getElementById("confirmpass");
        if (pass.value != pass2.value){
            alert("Passwords do not match");
            return false;
        }
        if (pass.value.length < 2){
            alert("Password is too short. Must be at least 8 characters.")
            return false;
        }
        var name = document.getElementById("cname").value;
        // alert("hi");
        var nameRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.edu$/;
        if (nameRegex.test(name) == true) {
            // alert('true');
            return true;
        } else {
            alert('Please enter an @virginia.edu email');
            return false;
        }
    }
</script>

<?php
session_start();

if (isset($_SESSION['user']) && isset($_SESSION['password'])){
    echo "<script> location.href='https://www.cs.virginia.edu/~jmm4ye/what2watch/search.php'; </script>";
    exit;
}

//db access credentials

$dbusername = 'jmm4ye';
$dbpassword = 'Abcd!234';
$hostname = 'cs4750.cs.virginia.edu';
$dbname = 'jmm4ye_hounds';
$dsn = "mysql:host=$hostname;dbname=$dbname";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "posty";
  if (isset($_POST['username']) && isset($_POST['password']))

  {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $hashed_pass = md5($password);

      try 
      {
        $db = new PDO($dsn, $dbusername, $dbpassword);
          $query = "SELECT `password` FROM `User` WHERE `email` = '$username'";
          $statement = $db->prepare($query); 
          $statement->execute();
          $results = $statement->fetchAll();
          $statement->closeCursor();
          echo 'did it';
          if (empty($results)){
            echo '<p align="center">No user found, try again!!!!</p>';
          }
          else{
            $fetched_password = $results[0]['password'];
            echo "here";
            if ($hashed_pass === $fetched_password){
                $_SESSION['user'] = $username;
                $_SESSION['password'] = $hashed_pass;
                echo "nice";
                echo "<script> location.href='https://www.cs.virginia.edu/~jmm4ye/what2watch/search.php'; </script>";
                exit;
            }
            else{
                echo "there";
              echo '<p align="center">Incorrect password, try again!!!!</p>';
            }
         }

      }
      catch (PDOException $e)
      {
         $error_message = $e->getMessage();        
         echo '<p align="center">Incorrect db username or password, try again!!!!</p>';
      }
      catch (Exception $e)
      {
         $error_message = $e->getMessage();
         echo '<p align="center">Incorrect db username or password, try again!!!!</p>';
      }

  }
    if (isset($_POST['cname']) && isset($_POST['firstname'])&& isset($_POST['lastname'])&& isset($_POST['firstname'])&& isset($_POST['cpass']))

  {
      $username = $_POST['cname'];
      $password = $_POST['cpass'];
      $firstname = $_POST['firstname'];
      $middlename = $_POST['middlename'];
      $lastname = $_POST['lastname'];
      $hashed_pass = md5($password);
      $uid = strtotime("now");

      try 
      {
        
        $db = new PDO($dsn, $dbusername, $dbpassword);
        $query1 = "INSERT INTO User (userid, email, first_name, middle_ini, last_name, password) VALUES ('$uid', '$username', '$firstname', '$middlename', '$lastname', '$hashed_pass')";

        $statement1 = $db->prepare($query1); 
        $statement1->execute();
        $statement1->closeCursor();
        $_SESSION['user'] = $username;
        $_SESSION['password'] = $hashed_pass;
        echo "<script> location.href='https://www.cs.virginia.edu/~jmm4ye/what2watch/search.php'; </script>";

      }
      catch (PDOException $e)
      {
         $error_message = $e->getMessage();        
         echo '<p align="center">Incorrect db username or password, try again!!!!</p>';
      }
      catch (Exception $e)
      {
         $error_message = $e->getMessage();
         echo '<p align="center">Incorrect db username or password, try again!!!!</p>';
      }

  }
}
?>

</html>