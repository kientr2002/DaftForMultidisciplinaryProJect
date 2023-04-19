<?php
// session_start();
// error_reporting(0);
// include_once('includes/config.php');
// include_once("includes/functions.php");
// if (strlen($_SESSION['userlogin']) == 0) {
//     header('location:login.php');
// } elseif (isset($_GET['delid'])) {
//     $rid = intval($_GET['delid']);
//     $sql = "DELETE from employees where id=:rid";
//     $query = $dbh->prepare($sql);
//     $query->bindParam(':rid', $rid, PDO::PARAM_STR);
//     $query->execute();
//     echo "<script>alert('Employee Has Been Deleted');</script>";
//     echo "<script>window.location.href ='employees.php'</script>";
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin template</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="../assets/css/line-awesome.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="../assets/css/select2.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/style1.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    <style type="text/css">
        body {
            margin-top: 20px;
        }

        /* USER LIST TABLE */
        .user-list tbody td>img {
            position: relative;
            max-width: 50px;
            float: left;
            margin-right: 15px;
        }

        .user-list tbody td .user-link {
            display: block;
            font-size: 1.25em;
            padding-top: 3px;
            margin-left: 60px;
        }

        .user-list tbody td .user-subhead {
            font-size: 0.875em;
            font-style: italic;
        }

        /* TABLES */
        .table {
            border-collapse: separate;
        }

        .table-hover>tbody>tr:hover>td,
        .table-hover>tbody>tr:hover>th {
            background-color: #eee;
        }

        .table thead>tr>th {
            border-bottom: 1px solid #c2c2c2;
            padding-bottom: 0;
        }

        .table tbody>tr>td {
            font-size: 0.875em;
            background: #f5f5f5;
            border-top: 10px solid #fff;
            vertical-align: middle;
            padding: 12px 8px;
        }

        .table tbody>tr>td:first-child,
        .table thead>tr>th:first-child {
            padding-left: 20px;
        }

        .table thead>tr>th span {
            border-bottom: 2px solid #c2c2c2;
            display: inline-block;
            padding: 0 5px;
            padding-bottom: 5px;
            font-weight: normal;
        }

        .table thead>tr>th>a span {
            color: #344644;
        }

        .table thead>tr>th>a span:after {
            content: "\f0dc";
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
            margin-left: 5px;
            font-size: 0.75em;
        }

        .table thead>tr>th>a.asc span:after {
            content: "\f0dd";
        }

        .table thead>tr>th>a.desc span:after {
            content: "\f0de";
        }

        .table thead>tr>th>a:hover span {
            text-decoration: none;
            color: #2bb6a3;
            border-color: #2bb6a3;
        }

        .table.table-hover tbody>tr>td {
            -webkit-transition: background-color 0.15s ease-in-out 0s;
            transition: background-color 0.15s ease-in-out 0s;
        }

        .table tbody tr td .call-type {
            display: block;
            font-size: 0.75em;
            text-align: center;
        }

        .table tbody tr td .first-line {
            line-height: 1.5;
            font-weight: 400;
            font-size: 1.125em;
        }

        .table tbody tr td .first-line span {
            font-size: 0.875em;
            color: #969696;
            font-weight: 300;
        }

        .table tbody tr td .second-line {
            font-size: 0.875em;
            line-height: 1.2;
        }

        .table a.table-link {
            margin: 0 5px;
            font-size: 1.125em;
        }

        .table a.table-link:hover {
            text-decoration: none;
            color: #2aa493;
        }

        .table a.table-link.danger {
            color: #fe635f;
        }

        .table a.table-link.danger:hover {
            color: #dd504c;
        }

        .table-products tbody>tr>td {
            background: none;
            border: none;
            border-bottom: 1px solid #ebebeb;
            -webkit-transition: background-color 0.15s ease-in-out 0s;
            transition: background-color 0.15s ease-in-out 0s;
            position: relative;
        }

        .table-products tbody>tr:hover>td {
            text-decoration: none;
            background-color: #f6f6f6;
        }

        .table-products .name {
            display: block;
            font-weight: 600;
            padding-bottom: 7px;
        }

        .table-products .price {
            display: block;
            text-decoration: none;
            width: 50%;
            float: left;
            font-size: 0.875em;
        }

        .table-products .price>i {
            color: #8dc859;
        }

        .carousel-item {
            height: 65vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .navbar-brand img {
            width: 120px;
        }

        .navbar .navbar-expand-lg .navbar-light .bg-light .fixed-top {
            margin-bottom: 30px;
        }

        .row {
            margin-top: 50px !important;
            margin: 30px;
        }

        .main-box .clearfix {
            width: 880px;
        }

        .contai {
            font-size: 15px;
        }

        .table-products .warranty {
            display: block;
            text-decoration: none;
            width: 50%;
            float: left;
            font-size: 0.875em;
        }

        .table-products .warranty>i {
            color: #f1c40f;
        }

        .table tbody>tr.table-line-fb>td {
            background-color: #9daccb;
            color: #262525;
        }

        .table tbody>tr.table-line-twitter>td {
            background-color: #9fccff;
            color: #262525;
        }

        .table tbody>tr.table-line-plus>td {
            background-color: #eea59c;
            color: #262525;
        }

        .table-stats .status-social-icon {
            font-size: 1.9em;
            vertical-align: bottom;
        }

        .table-stats .table-line-fb .status-social-icon {
            color: #556484;
        }

        .table-stats .table-line-twitter .status-social-icon {
            color: #5885b8;
        }

        .table-stats .table-line-plus .status-social-icon {
            color: #a75d54;
        }
    </style>
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php include_once("../includes/headeradmin.php"); ?>
        <!-- /Header -->

        <!-- Sidebar -->
        <?php include_once("../includes/sidebaradmin.php"); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">User</h3>
                            <!-- <ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Employee</li>
								</ul> -->
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add User</a>
                            <!-- <div class="view-icons">
									<a href="employees.php" title="Grid View" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="employees-list.php" title="Tabular View" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
								</div> -->
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <!-- Search Filter -->
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">User ID</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">User Name</label>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Select Designation</option>
									<option>Web Developer</option>
									<option>Web Designer</option>
									<option>Android Developer</option>
									<option>Ios Developer</option>
								</select>
								<label class="focus-label">Designation</label>
							</div>
						</div> -->
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <!-- Search Filter -->
                <!-- user profiles list starts her -->


                <!-- <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="profile.html" class="avatar"><img src="employees/<?php 
                                    // echo htmlentities($row->Picture); 
                                    ?>" alt="picture"></a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div>
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html"><?php 
                                // echo htmlentities($row->FirstName) . " " . htmlentities($row->LastName); 
                                ?></a></h4>
								<div class="small text-muted"><?php 
                                // echo htmlentities($row->Designation); 
                                ?></div>
							</div>
						</div>	 -->
                <div class="contai">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-box clearfix">
                                <div class="table-responsive">
                                    <table class="table user-list">
                                        <thead>
                                            <tr>
                                                <th><span>Người dùng</span></th>
                                                <th><span>Khu vực</span></th>
                                                <th class="text-center"><span>Status</span></th>
                                                <th><span>Email</span></th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                    <a href="#" class="user-link">Khải</a>
                                                </td>
                                                <td>Khu vực 1</td>
                                                <td class="text-center">
                                                    <span class="label label-default">Inactive</span>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="__cf_email__" data-cfemail="05686c6964456e706b6c762b666a68">khaiganhteam@gmail.com</span></a>
                                                </td>
                                                <td style="width: 20%">
                                                    <a href="#" class="table-link">
                                                        <span class="fa-stack">
                                                            <!-- <i class="fa fa-square fa-stack-2x"></i> -->
                                                            <i class="bi bi-trash"></i>

                                                        </span>
                                                    </a>
                                                    <a href="#" class="table-link">
                                                        <span class="fa-stack">
                                                            <i class="bi bi-pencil"></i>

                                                        </span>
                                                    </a>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination pull-right">
                                    <li>
                                        <a href="#"><i class="fa fa-chevron-left"></i></a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- /Page Content -->

        <!-- Add Employee Modal -->
        <?php include_once("includes/modals/employee/add_employee.php"); ?>
        <!-- /Add Employee Modal -->

        <!-- Edit Employee Modal -->
        <?php include_once("includes/modals/employee/edit_employee.php"); ?>
        <!-- /Edit Employee Modal -->

        <!-- Delete Employee Modal -->
        <?php include_once("includes/modals/employee/delete_employee.php"); ?>
        <!-- /Delete Employee Modal -->

    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="../assets/js/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="../assets/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/app.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>

</body>

</html>