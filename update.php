<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql="select * from crud where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];
    

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="update crud set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Data Updated Successfully";
            header('location:index.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center">Edit Data</h1>
        <a href="index.php" class="btn btn-dark">Back</a>
        <form method="POST" action="">

            <div class="form-group my-2">
                <label for="Name">Name</label>
                <input type="text" class="form-control" autocomplete="off" value="<?php echo $name;?>" name="name" placeholder="Enter name">
            </div>

            <div class="form-group my-2">
                <label for="Email1">Email address</label>
                <input type="email" class="form-control" autocomplete="off" value="<?php echo $email;?>" name="email" placeholder="example@gmail.com">
            </div>

            <div class="form-group my-2">
                <label for="Mobile">Mobile</label>
                <input type="tel" class="form-control" autocomplete="off" value="<?php echo $mobile;?>" name="mobile" pattern="[0-9]{10}" placeholder="12345679890">
            </div>

            <div class="form-group my-2">
                <label for="Password">Password</label>
                <input type="password" class="form-control" autocomplete="off" value="<?php echo $password;?>" name="password" placeholder="********">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>

        </form>

    </div>
    
</body>
</html>
