<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>CRUD PRACTICE</title>

</head>
<body>
    <div class="container">
    <?php require_once 'process.php'; ?>
    <?php 
       $mysqli = new mysqli('localhost','root','root', 'crud') or die(mysqli_error($mysqli));
       $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //    pre_r($result)
      //print_r($result);
    ?>
     

   
    <div class="d-flex justify-content-center">
        <form action="process.php" method="POST">
        <div class="form-group">
        <label>First Name</label>
        <input type="text" name="1stname" class="form-control" placeholder="Enter Your First Name">
        </div>
        <div class="form-group">
        <label>Second Name</label>
        <input type="text" name="2ndname" class="form-control" placeholder="Enter Your Second Name">

        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success" name="save" action="index.php">Save</button>
        </div>
        </form>
    </div>
    <div class="d-flex justify-content-center" >
         <table class="table">
             <thead>
                 <tr>
                     <th>First Name</th>
                     <th>Second Name</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <?php
             while ($row = $result->fetch_assoc()): ?>
                  <tr>
                      <td><?php echo $row['1stname'] ?></td>
                      <td><?php echo $row['2ndname'] ?></td>
                      <td>
                          <a href="index.php?edit=<?php echo $row['id'] ?>" class="btn btn-info">UPDATE</a>
                          <a href="process.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a>
                      </td>
                  </tr>
                  <?php endwhile; ?>
         </table>
       </div>
       <div class="d-flex justify-content-center">
       <?php
         if(isset($_SESSION['message'])):
         ?>
         <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
         <?php 
         echo $_SESSION['message'];
         unset( $_SESSION['message']);
         ?>

         </div>
         <?php endif; ?>
       </div>
   
    </div>
    
</body>
</html>