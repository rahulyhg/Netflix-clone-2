<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta class="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="img/natflix.ico" type="image/x-icon" rel="shortcut icon" />
	<link rel="stylesheet" href="css/main.css">	
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
	<title>TavoFlix</title>
</head>
<body>
	<!--Contenedor view: donde se visualiza  todo el contenido de la pagina -->
	<div class="view">
	<!--Container: encapsula la parte del logo y el btn inisiar sesion-->
	<div class="container">
		<div class="row">
		<div class="logo">
			<img src="img/logo.png" width="130px" height="40px"></img>
		</div>
		  <div class="col-xs-4 col-xs-offset-8 col-sm-2 col-sm-offset-10 col-md-1 col-md-offset-11 col-lg-1 col-lg-offset-11">
		  	<a class="btn netf" data-toggle="modal" data-target="#login">Iniciar Sesion</a>
		  </div>
		</div>
	</div>
	<!-- menutop: contiene los titulos y el btn mes gratis, para luego cambiar la posisicion a todo el div-->
	<div class="container menutop">
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
		  	<h4 class="text-center">Ve peliculas y series cuando quieras y donde quieras.</h4>
		  	<h5 class="text-center">Planes desde $7.99 al mes.</h5>
		  </div>
		</div>
		<div class="row">
		 <div class="col-xs-12 col-sm-4 col-sm-offset-1 col-md-4  col-md-offset-1 col-lg-4  col-lg-offset-1">
			<a class=" btn netf center-block " href="views/register.php">Comienza tu mes Gratis</a>
			</div>
		</div>
	</div>
	<!-- slider automatico -->
	<div class="carousel slide" id="myslider" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active"><img src="img/Solo_Phone.jpg" alt="img1"></div>
			<div class="item "><img src="img/Solo_Laptop_InHome.jpg" alt="img2"></div>
			<div class="item "><img src="img/Family_Tablet_InHome.jpg" alt="img3"></div>
			<div class="item "><img src="img/Family_TV_InHome.jpg" alt="img4"></div>
		</div>
	</div>	
<!-- modal del formulario de inisiar sesion-->
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

<!-- contenedor encargado de las cartas de presentacion de dispositivos-->
<div class="container">
	<div class="row">
	<h3 class="text-center">Ve desde donde quieras</h3>
	  <div class="col-xs-12 col-sm-4 col-md-4">
	    <div class="thumbnail">
	      <img src="img/tv.png" alt="tv">
	      <div class="caption">
	        <h3 class="text-center">Ve Netflix en tu TV</h3>
	        <p class="text-center">Smart TV, PlayStation, Xbox, Chromecast, Apple TV, reproductores Blu-ray y más.</p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xs-12 col-sm-4 col-md-4">
	    <div class="thumbnail">
	      <img src="img/whatever.png" alt="tv">
	      <div class="caption">
	        <h3 class="text-center">Donde vayas</h3>
	        <p class="text-center">iPhone, iPad, Android, teléfonos Windows y tabletas.</p>
	      </div>
	    </div>
	  </div>
	  <div class="col-xs-12 col-sm-4 col-md-4">
	    <div class="thumbnail">
	      <img src="img/laptop.png" alt="tv">
	      <div class="caption">
	        <h3 class="text-center">Usa cualquier computadora</h3>
	        <p class="text-center">Ve directamente en Netflix.com.</p>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<!-- contenedor encargado de mostrar los planes disponible-->
<div class="container">
<h3 class="text-center">Escoge un plan y ve lo quieras en Netflix.</h3>
<table class="table">
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
    </tbody>
</table>
<div class="container btnver">
	<h3 class="text-center">Ahora Streaming a nivel mundial </h3>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-sm-offset-5">
			<button class=" btn netf center-block " id="vervideo" href="">Mostrar Video</button>	
		</div>
	</div>
</div>
</div>
</div>


<div class="container videos">
	<div class="embed-responsive embed-responsive-4by3">
			<video id="player2" src="img/video/ComboBox.mp4" type="video/mp4" controls="controls">        
			</video>      	
	</div>
</div>

</div>
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
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>