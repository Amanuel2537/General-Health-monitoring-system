<?php

// php populate html table from mysql database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "phms";

// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT * FROM `patient_data";


// result for method one
$result1 = mysqli_query($connect, $query);

// result for method two 
$result2 = mysqli_query($connect, $query);

$dataRow = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $dataRow = $dataRow . "<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td></tr>";
}

?>



<head>
    <title>Doctor | Dashboard</title>

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


    <title>PHP DATA ROW TABLE FROM DATABASE</title>

    <!-- <meta charset="UTF-8"> -->

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->


</head>
<style>
    table,
    th,
    tr,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <div id="app">
        <?php include('include/sidebar.php'); ?>
        <div class="app-content">

            <?php include('include/header.php'); ?>

            <!-- end: TOP NAVBAR -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle"> Patient Table data</h1>
                            </div>

                            <ol class="breadcrumb">
                                <li>
                                    <span>User</span>
                                </li>
                                <li class="active">
                                    <span>Table page</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                </div>

                



                    <!DOCTYPE html>
                    <html>

                    <head>
                        <style>
                         

                            td {
                                border: 1px solid black;
                                text-align: center;
                                padding: 5px;
                            }

                            tr:nth-child(even) {
                                background-color: #00cf45;
                            }

                            h1 {
                                color: orange;
                            }

                           
                            #table-wrapper {
                                position: relative;
                            }

                            #table-scroll {
                                height: 800px;
                                overflow: auto;
                                margin-top: 20px;
                            }

                            #table-wrapper table {
                                width: 100%;

                            }

                            #table-wrapper table * {
                                background: orange;
                                color: black;
                            }

                            #table-wrapper table thead th .text {
                                position: absolute;
                                top: -20px;
                                z-index: 2;
                                height: 20px;
                                width: 35%;
                                border: 1px solid red;
                            }
                        </style>
                    </head>
                    <div id="app">
                       

                <body>
                    <div id="table-wrapper">
                        <div id="table-scroll">
                            <table style="background-color: white;">

                                <tr>
                                    <th>Id</th>
                                    <th>Temprature</th>
                                    <th>BPM</th>
                                    <th>oxygen_level</th>
                                    <th>Time_Stamp</th>
                                    <th>patient_ID</th>

                                </tr>

                                <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                    <tr>
                                        <td><?php echo $row1[0]; ?></td>
                                        <td><?php echo $row1[1]; ?></td>
                                        <td><?php echo $row1[2]; ?></td>
                                        <td><?php echo $row1[3]; ?></td>
                                        <td><?php echo $row1[4]; ?></td>
                                        <td><?php echo $row1[5]; ?></td>
                                    </tr>
                                <?php endwhile; ?>

                            </table>

                </body>









                <div id="app">
                    <?php include('include/sidebar.php'); ?>
                    <div class="app-content">

                        <?php include('include/header.php'); ?>

                        <!-- end: SELECT BOXES -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>



<!-- <?php include('include/footer.php'); ?> -->
<!-- start: SETTINGS -->
<?php include('include/setting.php'); ?>

<!-- end: SETTINGS -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/modernizr/modernizr.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="vendor/switchery/switchery.min.js"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="vendor/autosize/autosize.min.js"></script>
<script src="vendor/selectFx/classie.js"></script>
<script src="vendor/selectFx/selectFx.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src="assets/js/main.js"></script>
<!-- start: JavaScript Event Handlers for this page -->
<script src="assets/js/form-elements.js"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
<!-- start: FOOTER -->
<?php include('include/footer.php'); ?>
<!-- end: FOOTER -->

</html>