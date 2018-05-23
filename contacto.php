<?php /*
function breve(){
    crearJson($_POST);
    $archivo = 'datosFormulario.json';
    $archivojson = file_get_contents($archivo);
    $archivoArray = json_decode($archivojson, true);
    $archivoArray['pedido'][] = $_POST;
    $archivoJsonConMasInfo = json_encode($archivoArray);
    file_put_contents($archivo, $archivoJsonConMasInfo);
}*/

function guardarDato($datosFormulario) {
    $nombreColeccion = 'pedidos';
    crearJson($nombreColeccion);

    $archivo = $nombreColeccion.'.json';
    $archivojson = file_get_contents($archivo);
    $archivoArray = json_decode($archivojson, true);
    $archivoArray[$nombreColeccion][] = $datosFormulario;
    $archivoJsonConMasInfo = json_encode($archivoArray);
    file_put_contents($archivo, $archivoJsonConMasInfo);
}
/*
function crearJson($datosFormulario){
	$archivo = 'datosFormulario.json';

	if(!file_exists($archivo)){
        $template['pedido'] = [];
        $template = $datosFormulario;

		$json = json_encode($template);
		file_put_contents($archivo, $json);
	}
}*/

function crearJson($nombreColeccion){
  $archivo = $nombreColeccion.'.json';

  if(!file_exists($archivo)){
        $template = [];
        $template[$nombreColeccion] = [];

    $json = json_encode($template);
    file_put_contents($archivo, $json);
  }
}


if ($_POST) {

	guardarDato($_POST);

}


 ?>
<!DOCTYPE html>
<html>
	<?php 

		include_once('head.php'); 

	?>
	<body id="body-contacto">
		<?php 

			include_once('header.php');
			
		?>
		<div class="container" id="container-contacto">
		<h1 id="titulo-contacto">REALIZÁ TU PEDIDO DE FORMA ONLINE</h1>	
		<form method="post" action="" enctype="multipart/form-data">
			 <ul class="flex-outer">
		      <li>
		        <label for="first-name">Nombre</label>
		        <input type="text" id="first-name" name="nombre" placeholder="Ingrese su nombre">
		      </li>
		      <li>
		        <label for="last-name">Apellido</label>
		        <input type="text" id="last-name" name="apellido" placeholder="Ingrese su apellido">
		      </li>
		      <li>
		        <label for="email">Email</label>
		        <input type="email" id="email" name="mail" placeholder="Ingrese su email">
		      </li>
		      <li>
		        <label for="phone">Teléfono</label>
		        <input type="tel" id="phone" name="telefono" placeholder="Ingrese su teléfono">
		      </li>
  		      <li>
		        <label for="phone">Dirección</label>
		        <input type="tel" id="phone" name="direccion" placeholder="Ingrese su dirección">
		      </li>
		      <li>
		        <label for="message">Agregar adicionales</label>
		        <textarea rows="6" id="message" name="mensaje" placeholder="Agregar contenido"></textarea>
		      </li>
		      <li>
		        <p>Menú</p>
		        <ul class="flex-inner">
		          <li>
		            <input type="checkbox" id="twenty-to-twentynine" name="pedido[]" value="milanesa">
		            <label for="twenty-to-twentynine">Mila</label>
		          </li>
		          <li>
		            <input type="checkbox" id="thirty-to-thirtynine" name="pedido[]" value="pure">
		            <label for="thirty-to-thirtynine">Puré</label>
		          </li>
		          <li>
		            <input type="checkbox" id="fourty-to-fourtynine" name="pedido[]" value="paty">
		            <label for="fourty-to-fourtynine">Paty</label>
		          </li>
		          <li>
		            <input type="checkbox" id="fifty-to-fiftynine" name="pedido[]" value="pizza">
		            <label for="fifty-to-fiftynine">Pizza</label>
		          </li>
		          <li>
		            <input type="checkbox" id="sixty-to-sixtynine" name="pedido[]" value="pancho">
		            <label for="sixty-to-sixtynine">Pancho</label>
		          </li>
		        </ul>
		      </li>
		      <li>
		        <button type="submit" id="submit">Enviar</button>
		      </li>
		    </ul>
		</form>
		</div>

		<main class="container">
			<?php

				include_once('footer.php');

			?>
		</main>

	</body>
</html>
