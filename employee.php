<?php
require_once "db.php";
session_start();
if (isset($_SESSION['id']) == "") {
    header("Location: home_employee.php");
}
// }

?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<head>
    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 68%;
            left: 76%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>

</head>

<body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <header>
        <div class="m-4">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">Employee Details</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="dd_user.php" class="nav-link">Profile</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav" style="margin-left:800px;">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name'] ?></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="dd_logout.php" class="dropdown-item">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <!-- <div class='alert alert-success'>
        <span class='pl-4 glyphicon glyphicon-ok'></span>&nbsp;<?php echo $_GET['message']; ?><br>
    </div> -->
    <div id="res"></div>

    <div class="container py-5 h-100">
        <div style="padding-left:850px">
            <button type="button" class="toggle-model btn btn-success" data-toggle="modal" data-target="#exampleModal">
                ADD
            </button>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="px-md-2" id="form">

                            <div class=" form-outline mb-4">
                                <input type="text" id="first_name" name="first_name" class="form-control" />
                                <label class="form-label" for="form3Example1q">First name</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="last_name" name="last_name" class="form-control" />
                                <label class="form-label" for="form3Example1q">Last name</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="number" id="contact_no" name="contact_no" class="form-control" />
                                <label class="form-label" for="form3Example1q">Contact No</label>
                            </div>

                            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">

                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" href='employee.php' class="btn btn-success" data-dismiss="modal">Close</button>
                        <input type="button" id='submit' value="Add" class="btn btn-success" />
                    </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-lg-8 col-xl-6 mx-auto" class="overflow-auto">
            <div id="bidders" class="card" style="width: 40rem;">
                <table class='table-responsive-sm table mt-3 table-success table-striped' style='border:hidden'>
                    <thead>
                        <td>Id</td>
                        <td>First name</td>
                        <td>Last name</td>
                        <td>Contact No</td>
                        <td>Actions</td>
                        <td>Actions</td>
                    </thead>
                    <tbody>

                        <?php
                        $con = mysqli_connect("127.0.0.1", "root", "", "employeedetail");
                        $sql = "select * from employeedata ORDER BY id DESC";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<tr>";
                            echo "<td>" . $row[0] . "</td>";
                            echo "<td>" . $row[1] . "</td>";
                            echo "<td>" . $row[2] . "</td>";
                            echo "<td>" . $row[3] . "</td>";
                        ?>
                            <td><a class='btn btn-success' href='pdo_deletedata.php?id=" . $row[0] . "'>Delete</a></td>
                            <td>
                                <button type='button' id='<?php echo $row[0]; ?>' class='toggle-model btn btn-success edit_data' data-toggle='modal' data-target='#editexampleModal'>Edit</button>

                            </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        // $(document).ready(function() {

        //     $("#submit").click(function() {

        //     });


        // });
    </script>
    <script>
        $(document).on('click', '.edit_data', function() {
            var employee_id = $(this).attr("id");
            console.log(employee_id);
            $.ajax({
                url: "pdo_updatedata.php",
                method: "POST",
                data: {
                    employee_id: employee_id
                },
                dataType: "json",
                success: function(data) {
                    $('#first_name').val(data.first_name);
                    $('#last_name').val(data.last_name);
                    $('#contact_no').val(data.contact_no);
                    $('#submit').addClass(data.id);
                    $('#exampleModal').modal('show');
                    $('#submit').val('Update');

                }
            });
        });
        $("#submit").click(function() {
            if ($('#submit').val() == 'Update') {
                console.log($('#submit').val() == 'Update', 'Update');
                var employee_id = $('#submit').attr('class').split(' ')[2];
                console.log(employee_id, 'id');

                var first_name = $("#first_name").val();
                var last_name = $("#last_name").val();
                var contact_no = $("#contact_no").val();
                console.log(first_name, last_name, contact_no);
                $.ajax({
                    method: "POST",
                    url: "update.php",
                    data: {
                        employee_id: $('#submit').attr('class').split(' ')[2],
                        first_name: first_name,
                        last_name: last_name,
                        contact_no: contact_no

                    },
                    success: function(response) {
                        console.log(response);
                        $('#exampleModal').modal('hide');
                        $('#exampleModal').on('hidden.bs.modal', function() {
                            $(this).find('form').trigger('reset');
                        });
                        // $("#editexampleModal").modal(toggle); 
                        $('#submit').val('Add');
                        $('#bidders').html(response);


                    }
                });

            }
            if ($('#submit').val() == 'Add') {
                console.log($('#submit').val() == 'Add', 'add');
                var firstName = $("#first_name").val();
                var lastName = $("#last_name").val();
                var contact_no = $("#contact_no").val();

                if (firstName == '' || lastName == '' || contact_no == '') {
                    alert("Please fill all fields.");
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "welcome1.php",
                    data: $('#form').serialize(),
                    success: function(response) {
                        $('#exampleModal').modal('hide');
                        $('#exampleModal').on('hidden.bs.modal', function() {
                            $('#exampleModal form')[0].reset();
                        });
                        // console.log(response);
                        $('#bidders tbody').html(response);
                    }


                });
            }

        });
    </script>
</body>

</html>