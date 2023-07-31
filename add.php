<?php
require_once "dbcon.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone_no = $_POST['phone_no'];
    $subject_name = $_POST['subject_name'];

    $sql = "INSERT INTO class_teacher (name, age, phone_no, subject_name) VALUES ('$name', $age, '$phone_no', '$subject_name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
</head>
<body>
    <h1>Add New Teacher</h1>
    <form method="post">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        Phone No: <input type="text" name="phone_no" required><br>
        Subject Name: <input type="text" name="subject_name" required><br>
        <input type="submit" value="Add Teacher">
    </form>
</body>
</html>
