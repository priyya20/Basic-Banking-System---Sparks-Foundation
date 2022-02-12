<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>

<?php
  include 'navbar.php';
?>
<div class="container">
        <h2 class="text-center pt-4">Customer Details</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Balance</th>
            </tr>
        </thead>
        <tbody>

          <?php
          include 'config.php';
          $selectquery = " select * from users";
          $query = mysqli_query($conn,$selectquery);
          $numofrows = mysqli_num_rows($query);

           while($rows = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
              <td><a href="transfermoney.php?idtransfer=<?php  echo $rows['ID']; ?>" ><i class=" fa fa-user-circle large" aria-hidden="true" style="color:rgb(172, 9, 158);"></i></a></td>
               </tr>
             <?php
          }
           ?>
</tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
</body>
</html>