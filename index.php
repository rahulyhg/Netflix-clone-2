<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta class="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">	
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
	<title>GusFlix</title>
</head>
<body>
	<div class="view">
	<div class="container">
		<div class="row">
		  <div class="col-xs-4 col-xs-offset-8">
		  	<a class="btn netf" data-toggle="modal" data-target="#login">Iniciar Sesion</a>
		  </div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		  <div class="col-xs-12">
		  	<h4 class="text-center">Ve Peliculas y series cuando quieras y donde quieras.</h4>
		  	<h5 class="text-center">Planes desde $7.99 al mes.</h5>
		  	<a class="btn netf center-block" href="index.haaa">Comienza tu mes Gratis</a>
		  </div>
		</div>
	</div>
	<div class="carousel slide" id="myslider" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/Family_Tablet_InHome.jpg" alt="img1">
			</div>
			<div class="item "><img src="img/Family_TV_InHome.jpg" alt="img1"></div>
			<div class="item "><img src="img/Solo_Laptop_InHome.jpg" alt="img1"></div>
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
					<input type="submit" class="btn btn-primary" value="Ingresar">
					<buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
				</div>
			</div>
		</div>
	</div>

<div class="container">
<h5 class="text-center">Escoge un plan y ve lo quieras en Netflix.</h5>
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
            <td class="text-center">7.99</td>
            <td class="text-center">9.99</td>
            <td class="text-center">11.99</td>
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
    </tbody>
</table>
</div>
</div>
</div>
<footer>
	<div class="navbar " role="navigation">
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
    			<p>© 2016 GusFlix.</p>
    		</div>
    	</div>
    </div>
    </footer>
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>