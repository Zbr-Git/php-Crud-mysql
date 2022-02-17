

<?php


    
    require_once "connection.php";

    $sql = "SELECT * FROM users WHERE id = ?";
    
    if($stmt = $conn->prepare($sql)){
      
        $stmt->bind_param("i", $my_id);
        $my_id =  $_GET["id"];
        
       
        if($stmt->execute()){
           $result = $stmt->get_result();
            
            if($result->num_rows == 1){
            
                $row = $result->fetch_assoc();
                
             
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
                $address = $row['address'];
                $city = $row['city'];
                $country = $row['country'];
                $phone = $row['phone'];
            } else{
                
                exit();
            }
            
        } else{
            echo "error";
        }
    }
     
    
    $stmt->close();
    
    
    $conn->close();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">User Detail</h1>
                    <div class="form-group">
                        <label>user id</label>
                        <p><b><?php echo $row['id'] ;?> </b></p>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row['name']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p><b><?php echo $row['email']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <p><b><?php echo $row['password']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p><b><?php echo $row['address']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <p><b><?php echo $row['city']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <p><b><?php echo $row['country']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <p><b><?php echo $row['phone']; ?></b></p>
                    </div>
                    <p><a href="frontpage.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>