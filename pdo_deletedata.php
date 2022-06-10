
<?php
$id = $_GET['id'];
$con = mysqli_connect("127.0.0.1", "root", "", "employeedetail");
$sql = "delete from employeedata where id=" . $id;
$result = mysqli_query($con, $sql);
header("Location:employee.php")

?>