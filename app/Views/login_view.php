<?php
	//defined('BASEPATH') OR exit('No direct script access allowed');
	//$system_title = $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php //echo $system_title;?> | Iniciar sesión</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/png" href="template/img/favicon.png" />
	<link rel="stylesheet" href="template/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="template/css/AdminLTE.min.css">
	<link rel="stylesheet" href="template/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="#"><b><?php //echo $system_title;?>Sys Asistencia</b> 1.0</a>
			<img src="template/img/logo.png" width="200">
		</div>
		<div class="login-box-body">
			<p class="login-box-msg">Regístrese para iniciar su sesión</p>
			<form action="<?php //echo base_url(); ?>index.php/login/ajax_login" method="post">
				<div class="text-center">
				<?php
				if (isset($page_error)) {
				?>
					<div class = "alert alert-danger">
					<strong> Error! </strong> <?php echo $page_error;?>.
					</div>
				<?php
				}
				?>
					<div class="form-group has-feedback">
						<input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email" required>
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" name="pass_user" id="pass_user" placeholder="Password" required>
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="form-group">
				<label class="checkbox">
					<a href="">Olvidaste tu Contraseña?</a>
				</label>
				</div>
				<button type="submit" class="btn btn-default">Iniciar sesión</button>
				</div>
			</form>
			<div class="social-auth-links text-center">
				<p>----</p>
			</div>
			<a href="#">Olvidé mi contraseña</a><br>
			<a href="#" class="text-center">Registrarme</a>
		</div>
	</div>
</body>
</html>