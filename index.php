<?php

include_once("config.php");
$result = mysqli_query($conn,"SELECT * FROM crud");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="title py-3" style="background-color: #000; color: #fff;" >
            <h2 class="text-center">CRUD Application</h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto mt-4">
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="fname"  class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">class</label>
                <input type="text" name="class" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">school</label>
                <input type="text" name="school" class="form-control" id="">
            </div>
            <div class="form-group mt-3 text-center">
               
                <input type="submit" class="btn btn-primary" name="save" id="save">
            </div>
        </form>
        </div>
     
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto mt-3" style="height: 220px; overflow: auto;">
        <?php
if (mysqli_num_rows($result) > 0) {
?>
            <table class="table">
            <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">class</th>
      <th scope="col">school</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>
  <?php
  $i=0;
while($row = mysqli_fetch_array($result)) {
?>

  <tbody>

  <!-- <?php echo $row["id"]; ?> -->
    <tr>
      <th scope="row"><?php $i+=1 ; echo $i; ?></th>
      <td><?php echo $row["first_name"]; ?></td>
      <td><?php echo $row["last_name"]; ?></td>
      <td><?php echo $row["st_class"]; ?></td>
      <td><?php echo $row["st_school"]; ?></td>
      <td> 
          <button class="btn btn-warning"> <a href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a> </button> 
           <button class="btn btn-warning"> <a href="delete.php?id=<?php echo $row ['id']; ?>"> Delete</a></button>
     </td>
    </tr>
    
   
  
  
  </tbody>
  <?php
}
?>
</table>
<?php
}
else{
    echo "No result found";
}
?>
        </div>
    </div>
</div>
    
</body>
</html>