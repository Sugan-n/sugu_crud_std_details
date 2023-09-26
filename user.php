<?php
include 'connect.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $feespaid = $_POST["feespaid"];
    $feespending = $_POST["feespending"];
    $course = $_POST["course"];

    $sql = "INSERT INTO `task` (name, email, mobile, feespaid, feespending, coursename) 
    VALUES ('$name', '$email', '$mobile', '$feespaid', '$feespending', '$course')";


    $result = mysqli_query($con, $sql);
    if ($result) {
        header("location:display.php");
    }
    else{
        die(mysqli_error($con));
    }
}

mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>crud task</title>
    <style>
        body {
            background-color: #f4f4f4; 
        }

        .container {
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            background-color: #f0f0f0; 
        }

        .btn-primary {
            background-color: #005b9f; 
            border-color: #005b9f; 
            border-radius: 10px;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #003f80; 
            border-color: #003f80; 
        }

        .form-label {
            color: #005b9f; 
        }
    </style>
</head>

<body>
    <h3 style="text-align: center; margin-top: 10px; color: #005b9f;">Jiametric Students</h3>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="course" name="course">
            </div>
            <div class="mb-3">
                <label for="feespaid" class="form-label">Fees Paid</label>
                <input type="text" class="form-control" id="feespaid" name="feespaid">
            </div>
            <div class="mb-3">
                <label for="feespending" class="form-label">Fees Pending</label>
                <input type="text" class="form-control" id="feespending" name="feespending">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

