<?php
include 'connect.php';

$sql = "SELECT * FROM `task`";
$result = mysqli_query($con, $sql);

if (!$result) {
    die(mysqli_error($con));
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Display Details</title>
</head>

<body>
    <div class="container" style="margin-top: 5%;text-transform: capitalize;">
        <button style="border: none; margin-bottom:20px;box-shadow:none;"><a href="user.php" class="btn btn-primary text-light">Add user</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">feespaid</th>
                    <th scope="col">feespending</th>
                    <th scope="col">coursename</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['feespaid']; ?></td>
                        <td><?php echo $row['feespending']; ?></td>
                        <td><?php echo $row['coursename']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>