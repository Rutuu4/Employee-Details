
<?php
// $con=mysqli_connect("127.0.0.1","root","","studentinfo");
// $id=$_GET["id"];
// $sql="select * from info where s_id=".$id;
// $r=mysqli_query($con,$sql);
// $row=mysqli_fetch_row($r);
$con = mysqli_connect("127.0.0.1", "root", "", "employeedetail");

if (isset($_POST["employee_id"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$contact_no = $_POST["contact_no"];
	$query =
		"update employeedata set first_name='" . $first_name . "', last_name='" . $last_name . "',contact_no='" . $contact_no . "' WHERE id=" . $_POST["employee_id"];

	mysqli_query($con, $query);
	$query = "SELECT * FROM employeedata ORDER BY id DESC";
	$result = $con->query($query);
	if ($result) {
			if ($result->num_rows > 0) {
				echo "<table  class='table-responsive-sm table mt-3 table-success table-striped' style='border:hidden'>";
                   echo "<thead>";
                    echo"  <td>Id</td>";
                       echo " <td>First name</td>";
                       echo " <td>Last name</td>";
                        echo "<td>Contact No</td>";
                        echo "<td>Actions</td>";
                       echo "<td>Actions</td>";
						echo "</thead>";
						echo "<tbody>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td>" . $row['first_name'] . "</td>";
					echo "<td>" . $row['last_name'] . "</td>";
					echo "<td>" . $row['contact_no'] . "</td>";
					echo "<td><a class='btn btn-success' href='pdo_deletedata.php?id=" . $row['id'] . "' >Delete</a></td><td> <button type='button' id=" .$row['id']." class='toggle-model btn btn-success edit_data' data-toggle='modal' data-target='#editexampleModal'>Edit</button></td> </tr>";
				}
				echo "</tbody>";
				echo "</table>";
			}
	
	}
}
	
	
	


// if (isset($_POST['employee_id'])) {
// $first_name = $_POST["first_name"];
// $last_name = $_POST["last_name"];
// $contact_no = $_POST["contact_no"];
// $query =
// "UPDATE employeedata set first_name='" . $first_name . "', last_name='" . $last_name . "',contact_no='" . $contact_no . "' WHERE id=" . $_POST['employee_id'];

// mysqli_query($con, $query);
// // print_r($_POST['employee_id']);
// $select = "SELECT * FROM employeedata WHERE id =" . $_POST['employee_id'] . " LIMIT 1";
// $result = mysqli_query($con, $select);
// if ($result->num_rows > 0) {
// while ($row = $result->fetch_assoc()) {
// echo "<tr>";
	// echo "<td>" . $row['id'] . "</td>";
	// echo "<td>" . $row['first_name'] . "</td>";
	// echo "<td>" . $row['last_name'] . "</td>";
	// echo "<td>" . $row['contact_no'] . "</td>";
	// echo "<td><a class='btn btn-success' href='pdo_deletedata.php?id=" . $row[' id'] . "' >Delete</a></td><td><a class='btn btn-success'href='pdo_editdata.php?id=" . $row['id'] . "'>Edit</a></td> </tr>" ; // } // } // } 
