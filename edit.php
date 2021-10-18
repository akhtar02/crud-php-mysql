<?php
include_once("config.php");

$id = $_GET['id'];
if(isset($_POST['update']))
{
$first_name = $_POST['fname'];
$last_name =  $_POST['lname'];
$st_class =$_POST['class'];	
$st_school =$_POST['school'];	
$result = mysqli_query($conn, "UPDATE crud SET first_name='$first_name', last_name='$last_name',st_class='$st_class', st_school='$st_school', WHERE id=$id");
header("Location: index.php");
}

$result = mysqli_query($conn, "SELECT * FROM crud WHERE id= $id");
while($res = mysqli_fetch_assoc($result))
{
$first_name = $res['first_name'];
$last_name = $res['last_name'];
$st_class = $res['st_class'];
$st_school = $res['st_school'];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="title py-3" style="background-color: #000; color: #fff;" >
            <h2 class="text-center">Update</h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto mt-4">
        <form  action="edit.php" method="post">
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="fname" value="<?php echo $first_name;?>"; class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="lname" value="<?php echo $last_name;?>";  class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">class</label>
                <input type="text" name="class" value="<?php echo $st_class;?>";  class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">school</label>
                <input type="text" name="school" value="<?php echo $st_school;?>";  class="form-control" id="">
            </div>
            <div class="form-group mt-3 text-center">
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button type="submit" class="btn btn-primary" name="update" id="edit">update</button>
               
            </div>
        </form>
        </div>
     
    </div>
    </div>
    
</body>
</html>