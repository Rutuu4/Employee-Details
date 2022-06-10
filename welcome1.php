<?php
$con = mysqli_connect("127.0.0.1", "root", "", "employeedetail");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact_no = $_POST['contact_no'];
$sql2 = "insert into employeedata(first_name,last_name,contact_no)values('" . $first_name . "
','" . $last_name . "','" . $contact_no . "')";
mysqli_query($con, $sql2);

$query = "SELECT * FROM employeedata ORDER BY id DESC";
$sql = mysqli_query($con, $query);

if ($sql->num_rows > 0) {
    while ($row = $sql->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['contact_no'] . "</td>";
        echo "<td><a class='btn btn-success' href='pdo_deletedata.php?id=" . $row['id'] . "' >Delete</a></td><td><a class='btn btn-success'href='pdo_editdata.php?id=" . $row['id'] . "'>Edit</a></td> </tr>";
    }
}
?>
