<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- BACK-END -->
<?php
include("config.php");
error_reporting(0);
$query = "SELECT * FROM member";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
    <!-- DISPLAY1_WRAPPER -->
    <div class="display1_wrapper">
        <h1 class="record" align="center">Member Records</h1>
        <center>
            <table border="1" cellspacing="15" width="75%">
                <tr>
                    <th width="3%">ID</th>
                    <th width="10%">Name</th>
                    <th width="10%">Address</th>
                    <th width="10%">Phone No</th>
                    <th width="8%">Email</th>
                    <th width="15%">Amount</th>
                    <th width="8%">Aadhar</th>
                    <th width="8%">Operation</th>
                </tr>

                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                    <td>" . $result['id'] . "</td>
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['address'] . "</td>
                    <td>" . $result['phoneno'] . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['amount'] . "</td>
                    <td>" . $result['aadhar'] . "</td>
                    <td><a href='delete1.php?id=$result[id]'><input type='submit'
                        value='Delete' class='delete'></a></td>
                        </tr>";
                }
} else {
    echo '<div class="sorry"><h2>Sorry! No data found</h2></div>';
}

?>
</div>
</table>
</center>

</html>