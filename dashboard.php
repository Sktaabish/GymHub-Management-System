<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- BACK-END -->
<?php
include("config.php");
error_reporting(0);
$query = "SELECT * FROM register WHERE TYPE!='admin'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$query2 = "SELECT * FROM register WHERE TYPE ='admin'";
$data2 = mysqli_query($conn, $query2);

$total2 = mysqli_num_rows($data2);

$query1 = "SELECT * FROM member";
$data1 = mysqli_query($conn, $query1);

$total1 = mysqli_num_rows($data1);
?>

<!-- DASH_WRAPPER -->
<div class="dash_wrapper">
    <!-- CONTAINER -->
    <div class="container">
        <!-- WISHES -->
        <div class="wishes">
            <p class="p">Dashboard</p>
        </div>
        <!-- MAIN -->
        <div class="main">
            <!-- REGIST -->
            <div class="regist">
                <!-- REGISTID_WRAPPER -->
                <div class="registid_wrapper">
                    <!-- TOPIC -->
                    <div class="topic">
                        <!--HEAD -->
                        <div class="head">
                            <p>Total No.Of Users</p>
                            <p class="total" ><?php echo $total ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- APPOINT -->
            <div class="appoint">
                <!-- APPOINTID_WRAPPER -->
                <div class="aapointid_wrapper">
                    <!-- TOPIC -->
                    <div class="topic">
                        <!-- HEAD -->
                        <div class="head">
                            <p>Total No.Of Members</p>
                            <p class="total" ><?php echo $total1 ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADMIN -->
            <div class="admin">
                <!-- ADMINID_WRAPPER -->
                <div class="adminid_wrapper">
                    <!-- TOPIC -->
                    <div class="topic">
                        <!-- HEAD -->
                        <div class="head">
                            <p>Total No.Of Admin</p>
                            <p class="total" ><?php echo $total2 ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>