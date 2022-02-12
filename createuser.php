<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    
</head>

<body>
<style>

body{

  
  justify-content: center;
  align-items: center;
  

}
img{
  width: 100px;
  position: center;
  border-radius:10px;
  display:block;
  margin:auto;
}
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
} 
form{
padding-top: 15px;
padding-bottom: 30px;
line-height: 10px;
padding-left:20px;
}
input[type=text], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 12px 0;  
  display: inline-block;  
  border: none; 
  background: transparent;
    border-bottom: 0.5px solid #000000; 
    
}  
input[type=email], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;
  background: transparent;
    border-bottom: 0.5px solid #000000;
}
}  
input[type=text], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: transparent;
  border-bottom: 0.5px solid #000000;
  outline: none;
  border: none;
  appearance: textfield;
}

.container{
	max-width: 500px;
  
 height:550px;
  padding: 50px;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  border-color:rgb(148, 4, 136);
  outline-style:solid;
  outline-color:rgb(148, 4, 136);
  background:rgba(155, 9, 143, 0.137);
}
.app-form-button{  
  background-color: rgb(148, 4, 136);
  color: white;  
  padding:  14px 14px;  
  margin: 10px;  
  border: none;  
  cursor: pointer;  
  width: 50%;  
  opacity: 0.9;  
  border-radius:10px;
} 
.app-form-button:hover { 
/* transform: scale(0.99); */
  background-color: yellowgreen; 
  
}

</style>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
	echo"<br>";
    $email=$_POST['email'];
	echo"<br>";
    $balance=$_POST['balance'];

    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               /*echo "<script> alert('Hurray! User created');
                               window.location='moneytransfer.php';
                     </script>";*/
                     echo '<script type="text/javascript">';
			echo ' alert("Hurray! User created.")';  
			echo '</script>';
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color:black">Create User Account</h2>
        <hr><br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="user.jpg" style="border: none; border-radius: 40% align-items:center;size:30px">
        </div>
       
	   <div class="screen-body-item">
          <form  class="app-form" method="post">
            <div class="app-form-group">
			<label ></label>
            <input class="app-form-control" type="text"  name="name" placeholder= "Name" size="15" required >
             
            </div>
            <div class="app-form-group">
			    <label ></label>
              <input class="app-form-control"   placeholder="Email" type="email" name="email" required>
            </div>
            <div class="app-form-group">
			<label ></label>
              <input class="app-form-control" placeholder="Balance" type="text" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>