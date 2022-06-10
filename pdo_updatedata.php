
<?php
$con = mysqli_connect("127.0.0.1", "root", "", "employeedetail");
// $id = $_GET["id"];
// $fn = $_POST["first_name"];
// $ln = $_POST["last_name"];
// $e = $_POST["contact_no"];
// $sql = "update employeedata set first_name='" . $fn ."', last_name='" . $ln . "',contact_no='" . $e . "' WHERE id=" . $id;
// $result = mysqli_query($con, $sql);
// $query = "SELECT * FROM employeedata ORDER BY id DESC";
// $sql = mysqli_query($con, $query);
// $sql = "SELECT * FROM employeedata WHERE id='" . $id . "'";

// // Process the query so that we will save the date of birth
// $results = $mysqli->query($sql);

// // Fetch Associative array
// $row = $results->fetch_assoc();

// // Free result set
// $results->free_result();

// // Close the connection after using it
// $mysqli->close();

// echo json_encode($row);
// if (isset($_GET['editId'])) {
//     $id = $_GET['editId'];
//     edit_data($con, $id);
// }
// if (isset($_POST['updateId'])) {
//     $id = $_POST['updateId'];
//     update_data($con, $id);
// }
// // edit data query
// function edit_data($con, $id)
// {
//     $query = "SELECT * from employeedata WHERE id=$id";
//     $exec = mysqli_query($con, $query);
//     $row = mysqli_fetch_assoc($exec);
//     echo json_encode($row);
// }
// function update_data($con, $id)
// {
//     $first_name = legal_input($_POST['first_name']);
//     $last_name = legal_input($_POST['last_name']);
//     $contact_no = legal_input($_POST['contact_no']);
//     $query = "UPDATE employeedata 
//               SET fullName='$first_name',
//                   emailAddress='$last_name',
//                   city= '$contact_no' WHERE id=$id";
//     mysqli_query($con, $query);

//     $query1 = "SELECT * FROM employeedata WHERE id = $id";
//     $sql = mysqli_query($con, $query1);

//     if ($sql->num_rows > 0) {
//         while ($row = $sql->fetch_assoc()) {
//             echo "<tr>";
//             echo "<td>" . $row['id'] . "</td>";
//             echo "<td>" . $row['first_name'] . "</td>";
//             echo "<td>" . $row['last_name'] . "</td>";
//             echo "<td>" . $row['contact_no'] . "</td>";
//             echo "<td><a class='btn btn-success' href='pdo_deletedata.php?id=" . $row['id'] . "' >Delete</a></td><td><a class='btn btn-success'href='pdo_editdata.php?id=" . $row['id'] . "'>Edit</a></td> </tr>";
//         }
//     }
// }


// if (isset($_POST["update_id"])) {
//     $id = $_POST['update_id'];
    
//         $first_name = $_POST['first_name'];
//         $last_name = $_POST['last_name'];
//         $contact_no = $_POST['contact_no'];
//         $query = "update employeedata set first_name='" . $first_name . "', last_name='" . $last_name . "',contact_no='" . $contact_no . "' WHERE id=" . $id;
//         mysqli_query($con, $query);
//         $query1 = "SELECT * FROM employeedata WHERE id = '".$id."'";
//         $sql = mysqli_query($con, $query1);
//         if ($sql->num_rows > 0) {
//             while($row = mysqli_fetch_row($sql)) {
//                 echo "<tr>";
//                 echo "<td>" . $row['id'] . "</td>";
//                 echo "<td>" . $row['first_name'] . "</td>";
//                 echo "<td>" . $row['last_name'] . "</td>";
//                 echo "<td>" . $row['contact_no'] . "</td>";
//                 echo "<td><a class='btn btn-success' href='pdo_deletedata.php?id=" . $row['id'] . "' >Delete</a></td><td><a class='btn btn-success'href='pdo_editdata.php?id=" . $row['id'] . "'>Edit</a></td> </tr>";
//             }
      
//     }
// }

//  if(!empty($_POST))  
//  {  
//       $output = '';  
//       $message = '';
//     $first_name = $_POST["first_name"];
//     $last_name = $_POST["last_name"];
//     $contact_no = $_POST["contact_no"];  
      
//       if($_POST["employee_id"] != '')  
//       {  
//            $query = "  
//            UPDATE employeedata   
//            SET first_name='$first_name',   
//            last_name='$last_name',   
//            contact_no='$contact_no' 
//            WHERE id='".$_POST["employee_id"]."'";  
//            $message = 'Data Updated';  
//       }  
//       else  
//       {  
//            $query = "  
//            INSERT INTO employeedata(first_name, last_name, contact_no)  
//            VALUES('$first_name', '$last_name', '$contact_no');  
//            ";  
//            $message = 'Data Inserted';  
//       }  
//       if(mysqli_query($con, $query))  
//       {
//         $query1 = "SELECT * FROM employeedata WHERE id = '" . $_POST["employee_id"] . "'";
//         $sql = mysqli_query($con, $query1);
//            while($row = mysqli_fetch_array($sql))  
//            {
//             echo "<tr>";
//             echo "<td>" . $row['id'] . "</td>";
//             echo "<td>" . $row['first_name'] . "</td>";
//             echo "<td>" . $row['last_name'] . "</td>";
//             echo "<td>" . $row['contact_no'] . "</td>";
//             echo "<td><a class='btn btn-success' href='pdo_deletedata.php?id=" . $row['id'] . "' >Delete</a></td><td><a class='btn btn-success'href='pdo_editdata.php?id=" . $row['id'] . "'>Edit</a></td> </tr>";
//            }  
          
//       }  
    
//  }  
 if (isset($_POST["employee_id"])) {
  $query = "SELECT * FROM employeedata WHERE id = '" . $_POST["employee_id"] . "'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  echo json_encode($row);
}
 ?>
 
