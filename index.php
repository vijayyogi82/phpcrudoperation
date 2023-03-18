<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

</head>
<body>

   <div class="container mt-4">
        <h1 class="text-center">Php Crud Operation</h1>
        <a href="user.php" class="btn btn-primary">Add+</a>
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <!-- show data -->
                <?php
                    $sql = "select * from crud";
                    $result=mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $mobile=$row['mobile']; 
                            $password=$row['password'];

                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$password.'</td>
                                <td>
                                    <a href="update.php?updateid='.$id.'" class="btn btn-primary">edit</a>
                                    <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">delete</a>
                                </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>