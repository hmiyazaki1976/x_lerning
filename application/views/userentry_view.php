<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ユーザー登録画面</title>

    <!-- Bootstrap Core CSS -->
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?= session_id(); ?>
		<div class="container">
				<div class="row">
            <div class="col-md-3">
            </div>
						<div class="col-md-6">
								<div class="userentry-panel panel panel-default">
										<div class="panel-heading">
												<h3 class="panel-title">ユーザー登録</h3>
										</div>
										<div class="panel-body">
												<form role="form" id="values">
														<fieldset>
																<div class="form-group">
																		<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
																</div>
																<div class="form-group">
																		<input class="form-control" placeholder="Password" name="password" type="password" value="">
																</div>
                                <div class="form-group">
																		<input class="form-control" placeholder="rePassword" name="repassword" type="password" value="">
																</div>
                                <div class="form-group">
																		<input class="form-control" placeholder="名前" name="name" value="">
																</div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-md-6">
																		  <input class="form-control" placeholder="FastName" name="fastname" value="">
                                    </div>
                                    <div class="col-md-6">
																		  <input class="form-control" placeholder="LastName" name="lastname" value="">
                                    </div>
                                  </div>
																</div>
																<!-- Change this to a button or input when using this as a form -->
																<a class="btn btn-lg btn-success btn-block" id="entry_btn">登録</a>
														</fieldset>
												</form>
										</div>
								</div>
						</div>
            <div class="col-md-3">
            </div>
				</div>
		</div>
    <!-- jQuery -->
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

    <script src="./dist/js/x_userentry.js"></script>

</body>

</html>
