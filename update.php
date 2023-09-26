<?php
include 'connect.php';

if(isset($_GET["id"])){
    $id = $_GET["id"];
    
    $sql = "SELECT * FROM `task` WHERE id = $id";
    
    $result = mysqli_query($con, $sql);
    
    if (!$result) {
        die(mysqli_error($con));
    }
    
    $row = mysqli_fetch_assoc($result);
    
    mysqli_close($con);
}

if(isset($_POST["update"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $feespaid = $_POST["feespaid"];
    $feespending = $_POST["feespending"];
    $course = $_POST["course"];

    $sql = "UPDATE `task` SET name='$name', email='$email', mobile='$mobile', feespaid='$feespaid', feespending='$feespending', coursename='$course' WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: display.php");
        exit();
    }
    else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Details</title>
</head>

<body>
<div class="container" style="margin-top: 5%; text-transform: capitalize;">
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>">
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Course Name</label>
            <input type="text" class="form-control" id="course" name="course" value="<?php echo $row['coursename']; ?>">
        </div>
        <div class="mb-3">
            <label for="feespaid" class="form-label">Fees Paid</label>
            <input type="text" class="form-control" id="feespaid" name="feespaid" value="<?php echo $row['feespaid']; ?>">
        </div>
        <div class="mb-3">
            <label for="feespending" class="form-label">Fees Pending</label>
            <input type="text" class="form-control" id="feespending" name="feespending" value="<?php echo $row['feespending']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>

</body>

</html>
