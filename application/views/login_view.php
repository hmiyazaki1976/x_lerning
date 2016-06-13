<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$email = "";
$password = "";
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}
if (isset($_SESSION['password'])) {
  $password = $_SESSION['password'];
}

?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>x-lerning login</title>

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
<?= session_id(); ?><br>
<br>
		<div class="container">
				<div class="row">
						<div class="col-md-4 col-md-offset-4">
								<div class="login-panel panel panel-default">
										<div class="panel-heading">
												<h3 class="panel-title">ログイン</h3>
										</div>
										<div class="panel-body">
												<form role="form" id="values">
														<fieldset>
																<div class="form-group">
																		<input class="form-control" placeholder="E-mail" name="email" type="email" value="<?=$email?>" autofocus>
																</div>
																<div class="form-group">
																		<input class="form-control" placeholder="Password" name="password" type="password" value="<?=$password?>">
																</div>
																<div class="checkbox">
																		<label>
																				<input name="remember" type="checkbox" value="Remember Me">メールアドレスとパスワードを記憶する
																		</label>
																</div>
																<!-- Change this to a button or input when using this as a form -->
																<a class="btn btn-lg btn-success btn-block" id="login_btn">ログイン</a>
																<a class="btn btn-lg btn-primary btn-block" id="singup_btn">新規登録</a>
														</fieldset>
												</form>
										</div>
								</div>
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

    <script src="./dist/js/x_login.js"></script>

</body>

</html>
