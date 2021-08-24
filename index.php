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
    <?php require_once 'process.php'; ?>
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
        <button type="submit" class="btn btn-success" name="save">Save</button>
        </div>
       
        
        
    </form>
    </div>
    
</body>
</html>