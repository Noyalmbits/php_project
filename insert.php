
<?php
$conn = new mysqli("localhost", "root", "", "sample_db");
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO student (name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    if ($stmt->execute()) {
        echo "Student Added Successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
<html>
<body>
<h2>Student Registration</h2>
<form method="POST">
    Enter Name:
    <input type="text" name="name" required>
    <input type="submit" name="submit" value="Save">
</form>
</body>
</html>
