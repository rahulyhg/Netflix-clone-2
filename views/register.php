<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TavoFlix</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/register.css">	
	<link href="../img/natflix.ico" type="image/x-icon" rel="shortcut icon" />
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
			<div class="logo col-xs-4 col-sm-2 col-md-1">
				<img src="../img/logo.png" width="140px" height="50px"></img>
			</div>
			  <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-8 col-md-1 col-md-offset-10">
			  	<a class="btn netf" data-toggle="modal" data-target="#login">Iniciar Sesion</a>
			  </div>
		</div>
	</div>
	<div class="modal fade" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" aria-hideden="true" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Iniciar Sesion</h2>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="user">Email</label>
							<input id="email" type="text" placeholder="Ingrese su email" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass">Contraseña</label>
							<input id="pass" type="password" placeholder="Ingrese su contraseña" class="form-control">
						</div>
						<div>
							<a href="#" class="lg-forgot">¿Olvidaste tu email o tu contraseña?</a>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-danger" value="Ingresar">
					<buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
				</div>
			</div>
		</div>
	</div>
	</header>
	<section>
	</div>
		<div class="container">
			<h1 class="col-xs-12">Seleciona el plan ideal para ti</h1>
			<h4 class="hidden-xs col-md-12">Cambia a un plan inferior o superior en cualquier momento</h4>
			
			<table class="table ">
    <thead>
        <tr>
        	<th class="text-center"></th>
            <th class="text-center">BASICO</th>
            <th class="text-center">ESTANDAR</th>
            <th class="text-center">PREMIUM</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        	<td class="text-center">El precio después de un mes gratis.</td>
            <td class="text-center">$7.99</td>
            <td class="text-center">$9.99</td>
            <td class="text-center">$11.99</td>
        </tr>
        <tr>
            <td class="text-center" >HD disponible.</td>
            <td class="text-center"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            <td class="text-center"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td class="text-center">Ultra HD</td>
            <td class="text-center"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            <td class="text-center"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            <td class="text-center"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
        </tr>
         <tr>
            <td class="text-center">Pantallas en las que puedes ver al mismo tiempo</td>
            <td class="text-center">1</span></td>
            <td class="text-center">2</span></td>
            <td class="text-center">4</span></td>
        </tr>
         
         <tr>
            <td class="text-center">Ve en tu laptop, TV, teléfono y tableta</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td class="text-center">Películas y series ilimitadas</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td class="text-center">Cancela en cualquier momento.</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
        </tr>
        <tr>
            <td class="text-center">El primer mes es gratis</td>
           <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
        </tr>
        <tr>
        	<td class="text-center">Suscribete para empezar tu mes gratis</td>
        	<td><button class="btn btn-danger center-block" data-toggle="modal" data-target="#register">Basico</button></td>
        	<td><button class="btn btn-danger center-block" data-toggle="modal" data-target="#register">Estandar</button></td>
        	<td><button class="btn btn-danger center-block" data-toggle="modal" data-target="#register">Premium</button></td>
        </tr>
    </tbody>
</table>
		<br>
		<small class="col-xs-12">*Ultra Hd solo esta disponible en plan de 4 pantallas +HD. La disponibilidad del contenido en alta deficinicion
		(HD) y Ultra Hd depende de tu proveedor de interner y de dispositivo de uso. No todo el contenido esta disponible en 
		Hd o Ultra HD.</small>
		<div class="modal fade" id="register">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" aria-hideden="true" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Crea tu cuenta</h2>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="user">Email</label>
							<input id="email" type="text" placeholder="Ingrese su email" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass">Crea una contraseña <small>(4-50 caracteres)</small></label>
							<input id="pass" type="password" placeholder="Ingrese su contraseña" class="form-control">
						</div>
						
					</form>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-danger" value="Registrarme">
					<buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
				</div>
			</div>
		</div>
		</div>
	</section>
	<footer>
		<footer>
	
    	<div class="container">
			 <div class="col-xs-12 col-md-4">¿Tienes preguntas? Llama al <a class="afoot" href=""> +1 (408) 600-1720 (USA)</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Preguntas Frecuentes</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Centro de ayuda</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Cuenta</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Prensa</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Relaciones con inversionistas</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Comprar/Canjear regalo</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Formas de ver</a></div>
			 <div class="col-xs-6 col-md-4"><a class="afoot" href="">Terminos de uso</a></div>


    		<div class="navbar-text pull-left col-xs-12">
    			<p>© 2016 TavoFlix.</p>
    		</div>
    	
    </div>
	</footer>
	<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="../js/vendor/jquery-1.11.2.min.js"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
</body>
</html>