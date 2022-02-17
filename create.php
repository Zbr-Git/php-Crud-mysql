<?php

include "./connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];



    $sql = "INSERT INTO users(name, email, password, address, city,country, phone) VALUES ('$name','$email','$password','$address','$city', '$country', '$phone')";

    $result = $conn->query($sql);

    if ($result == true) {
        echo header("location:frontpage.php");
    } else {
        echo "Error creating new record" . $conn->error;
    }
} else {
    $conn->close();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrap {
            width: 600px;
            margin: 0 auto;
           
        }
        label.error{
            color: red;
        }

        
    </style>


</head>

<body>
    <div class="wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create User Record</h2>
             

                    <form id="myform" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">

                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control ">

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"></input>

                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control ">

                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control ">

                        </div>
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="text" name="phone" class="form-control">

                        </div>
                        <input type="submit" class="btn btn-primary" value="submit" name="submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         
    <script>
        

            $('#myform').validate({
                rules: {
                    name: {
                        required: true,
                        minlength:5,
                    },
                    email: {
                        required: true,
                        email:true
                    },
                    password: {
                        required: true,
                        minlength:5
                    },
                    address:{
                        required: true,
                    },
                    city:{
                        required:true
                    },
                    country:{
                        required:true
                    },
                    phone:{
                        required:true,
                        number:true,
                        minlength:11,
                        maxlength:11

                    }


                },
                messages: {

                    name: {
                        required: "*Name Required",
                        minlength: "Name must be 5 chars long"
                    },
                    email: "*Please Enter a Valid Email",
                    password: {
                        required: "*Password Required",
                        minlength: "Password at least 5 chars"
                    },
                    address: "*Please Enter your Address",
                    city: "*Please enter your City",
                    country: "*Please Enter your Country",
                    phone: {
                        required:"*Please enter your phone number",
                        minlength: "*Number must be 11 ditgits long",
                        maxlength: "*Your Phone No. is too long"
                    }

                },

                submithandler: function(form){
                    from.submit();
                }
            });


      
        </script>

</body>

</html>