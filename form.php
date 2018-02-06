<?php
include './common/conn.php';

$Name = $_POST['name'];
$Marks = $_POST['email'];

$sql = "INSERT INTO STUDENTS (Name,Marks) VALUES('$Name', $Marks)";

if ($link->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

?>

<html>
<body>

    <form method="post" name="f" enctype="">
Name: <input type="text" name="name"><br>
Marks: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
