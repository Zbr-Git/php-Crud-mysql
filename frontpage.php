<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <title>CRUD Operations</title>
    <style>
        body{
            background-color: white;    
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">User Details</h2>
                        <a href="create.php" class="btn btn-primary pull-right" /> Add User</a>
                    </div>

                    <?php require_once './connection.php';

                    $sql = "SELECT * FROM users";

                    if ($result = $conn->query($sql)) {

                        if ($result->num_rows > 0) {
                            echo '<table class="table ">';
                            echo "<thead>";
                            echo "<tr>";
                            echo '<th scope="col">id</th>';
                            echo '<th scope="col">Name</th>';
                            echo '<th scope="col">Email</th>';
                            echo  '<th scope="col">Password</th>';
                            echo  '<th scope="col">Address</th>';
                            echo '<th scope="col">City</th>';
                            echo  '<th scope="col">Country</th>';
                            echo '<th scope="col">Phone</th>';
                            echo  ' <th scope="col">Crud op</th>';
                            echo  "</tr>";

                            while ($row = $result->fetch_assoc()) {

                                echo "<tbody>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['password'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['city'] . "</td>";
                                echo "<td>" . $row['country'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                    ?>
                                <td>
                                    <a href="update.php?id=<?php echo $row['id']; ?>" class="px-1"><li class="fa fa-edit"></li></a>
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="px-1"><li class="fa fa-trash"></li></a>
                                    <a href="read.php?id=<?php echo $row['id']; ?>" class="px-1">
                                        <li class="fa fa-eye"></li>
                                    </a>

                                </td>
                    <?php
                            }
                            echo "</tbody>";
                            echo "</table>";
                        } else {
                            echo "No Record Found";
                        }
                    } else {
                        "Error cannot Fetching the result from Table";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>