<?php
require_once "dbcon.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone_no = $_POST['phone_no'];
    $subject_name = $_POST['subject_name'];

    $sql = "UPDATE class_teacher SET name='$name', age=$age, phone_no='$phone_no', subject_name='$subject_name' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM class_teacher WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
</head>
<body>
    <h1>Edit Teacher</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
        Age: <input type="number" name="age" value="<?php echo $row['age']; ?>" required><br>
        Phone No: <input type="text" name="phone_no" value="<?php echo $row['phone_no']; ?>" required><br>
        Subject Name: <input type="text" name="subject_name" value="<?php echo $row['subject_name']; ?>" required><br>
        <input type="submit" value="Update Teacher">
    </form>
</body>
</html>
