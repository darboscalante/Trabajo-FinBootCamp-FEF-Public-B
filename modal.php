<!-- The overlay -->
<div id="myNav" class="overlay visible-xs visible-sm">

	<!-- Button to close the overlay navigation -->
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="svg/cerrar.svg" width="38px;"> </a>

	<!-- Overlay content -->
	<div class="overlay-content">
		<a href="index.php"><img src="svg/finet-logo_institutional.svg" width="100px"></a>
		<a href="index.php">Inicio</a>
		<a href="servicios.php">Te prestamos</a>
		<!--<a href="sumate.php">Súmate</a>-->
		<a href="nosotros.php">Quiénes somos</a>
		<a href="preguntas_frecuentes.php">Preguntas Frecuentes</a>
		<a href="contacto.php">Contacto</a>
		<button class="btnxs"><a href="https://api.whatsapp.com/send?l=es&phone=523333225233&text=%C2%A1Hola!%20Estoy%20interesado%20en%20recibir%20Información" target="_blank">Contáctanos por Whatsapp <img src="svg/finet-icon_wapp_white.svg" width="30px"></a></button>
		<div class="make"> Make it happen®</div>
	</div>
</div>

<div class="modalw" id="modal">
	<div class="modalb">
		<div class="modalbcont">
							<div class="ventanaclose"><button class="btnc btnclose"><img src="svg/cerrarw.svg" width="23px"></button></div>
			<div class="ventana">
				<h1>¿Qué necesitarás para iniciar un trámite con nosotros?</h1>
				<ul class="ul1">
					<li>Identificación Oficial (no foto)</li>
					<li>Comprobante de domicilio no mayor a 3 meses (CFE, Telmex o Estado de Cuenta)</li>
					<li>Comprobación de ingresos (Últimos 3 meses)</li>
					<li>Constancia de Situación Fiscal</li>
					<!--<li>Factura del vehículo (Consecutivo, si aplica)</li>
					<li>Último refrendo</li>
					<li>Duplicado de llave</li>
					<li>Instalación de GPS</li>-->
					<li>2 referencias personales</li>
					<li>Estudio socioeconómico</li>
					<li>Solicitud de crédito</li>
				</ul>
				<button class="btnventana"><a href="https://api.whatsapp.com/send?l=es&phone=523333225233&text=%C2%A1Hola!%20Estoy%20interesado%20en%20recibir%20Información" target="_blank">Comenzar Trámite</a></button>
			</div>
		</div>
	</div>	
</div>
<script>
$(".btnf").click(function(){
  $("#modal").fadeIn(400);
});	
			
$(".btnclose").click(function(){
  $("#modal").fadeOut(400);
});	
	
/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}	
	
</script>
