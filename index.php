<!doctype html>
<html>
	
	<div class="initdisclaim">
		<p class="initdisclaim">
	        Al navegar dentro de nuestro sitio web, usted acuerda haber leído y aceptado nuestras <a href="aviso_de_privacidad.php">Políticas de privacidad</a>
	    </p>
	</div>
	<? include('headers.php')?>

	<!-- AVISO FRAUDE MODAL -->
	<div class="modal fade" style="z-index: 9000;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">AVISO DE FRAUDE</h4>
				</div>
				<div class="modal-body">
					<p>No te dejes sorprender.</p>
					<p>En FINETJAL nunca te solicitaremos ningún tipo de pago de anticipo como condición o requisito previo para el otorgamiento de líneas de crédito.</p>
					<p>En nuestra operación, no otorgamos líneas inferiores a los $50,000.00 M.N. ni mayores a $5´000,000.00 M.N.  como tampoco utilizamos a empresas o personas físicas como representantes para el otorgamiento de nuestros productos financieros.</p>
					<p>Recomendamos NO efectuar depósito alguno, ni entregar información a ninguna persona que se ostente como representante de FINETJAL sin una debida identificación y en caso de ser necesario, dar conocimiento a las autoridades competentes.</p>
					<p>Por lo anterior, “FINETJAL SAPI DE CV SOFOM ENR”, informa que la única página oficial de la marca en México es <a href="https://finet.mx/">https://finet.mx</a> y nuestro teléfono de servicio es: <a href="tel:+523323149510">33 2314 9510</a>, y no asume responsabilidad alguna por la contratación de productos y/o servicios sin su debida representación y autorización.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- AVISO FRAUDE MODAL ENDS-->


	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel" data-slide-to="1"></li>
	        <li data-target="#carousel" data-slide-to="2"></li>
	        <li data-target="#carousel" data-slide-to="3"></li>
	    </ol>

	    <!-- Carousel items -->
	    <div class="carousel-inner">
	    	<div class="active item">
	    		<div class="copy copy2" data-aos="fade-up">
	    			<h1>Potencializa el poder de tu empresa</h1>
	    			<p>Solicita tu préstamo hoy mismo</p>
	    			<button class="solicitar" onclick="location.href='contacto.php';">Solicitar préstamo</button>
	    		</div>
	    	</div>

	    	<div class="item">
	    		<div class="copy copy2" data-aos="fade-up">
	    			<h1>Asegura tu crecimiento</h1>
	    			<p>Solicita tu préstamo hoy mismo</p>
	    			<button class="solicitar" onclick="location.href='contacto.php';">Solicitar préstamo</button>
	    		</div>
	    	</div>

	    	<div class="item">
	    		<div class="copy copy2" data-aos="fade-up">
	    			<h1>No dejes que nada te detenga</h1>
	    			<p>Resolvemos rápidamente tu necesidad de flujo de efectivo</p>
	    			<button class="solicitar" onclick="location.href='contacto.php';">Solicitar préstamo</button>
	    		</div>
	    	</div>

	    	<div class="item">
	    		<div class="copy copy1" data-aos="fade-up">
	    			<h1>Juntos podemos reactivar tu negocio</h1>
	    			<p>Estrategias enfocadas en llevarte más lejos</p>
	    			<button class="solicitar" onclick="location.href='sumate.php';">Solicitar asesoría</button>
	    		</div>
	    	</div>
	    </div>
	</div>

	<section class="normal rel">
		<div class="imgb1">
			<img src="svg/finet-fig_1_landing.svg">
		</div>

		<div class="container">
			<div class="col-md-6">
				<div class="central" data-aos="fade-up">
					<h1>Conócenos</h1>
					<p>Somos una financiera regulada que se caracteriza por ofrecer los mejores esquemas de préstamo bajo un modelo de confiable y transparente en todas nuestras operaciones.</p>
					<p>Luego de 5 años, nos hemos consolidado como una empresa de préstamos especializada en el crecimiento de capitales y el apoyo al sector emprendedor.</p>
					<p><a class="leer" href="nosotros.php">Leer más <img class="flecha" src="svg/arrow.svg" width="17px"></a></p>
				</div>
			</div>
		</div>

		<div class="bg1" data-aos="zoom-out" data-aos-duration="3000">
			<img src="img/finet-landing-conocenos.png" width="100%">
		</div>
	</section>

		<section class="seccion sec1">
			<div class="container">
				<div class="seccionc" data-aos="flip-up" data-aos-duration="2000">
					<h1>PRÉSTAMOS PARA NEGOCIO</h1>
					<h2>Encendemos tu pontencial emprendedor</h2>
					<p>Obtén desde $50,000 hasta $5'000,000 con la mejor tasa.</p>
					<button class="solicitar" onclick="location.href='contacto.php';">Solicitar préstamo</button>
				</div>
			</div>
		</section>

		<section class="juntos">
			<div class="container nopadxs">
				<div class="col-xs-6 textl tb hidden-xs">
					Resolvámoslo juntos
				</div>
				<div class="textr">
					<button class="contactanos btnf" target="_blank">Contáctanos por Whatsapp <img src="svg/finet-icon_wapp.svg" width="30px"></button>
				</div>
			</div>
		</section>

		<section class="normal2 rel">
			<div class="container">
				<div class="col-md-6 col-md-offset-7">
					<h6>SÚMATE</h6>
					<div class="central22" data-aos="fade-down">
						<h1>Impulsamos tu estrategia</h1>
						<p>Te asesoramos en las mejores prácticas de diversificación de portafolios de forma segura.</p>
						<p><a class="leer" href="contacto-incremento.php">Deseo asesoría <img class="flecha" src="svg/arrow.svg" width="17px"></a></p>
					</div>
				</div>
			</div>
			<div class="bg2" data-aos="zoom-out" data-aos-duration="3000">
				<img src="img/finet-landing-invierte.png" width="100%">
			</div>
		</section>

		<section class="seccion sec2">
			<div class="seccionbody">
				<h2>¿Estás listo para comenzar?</h2>
				<h3>Nuestros asesores están listos para diseñar tu plan de reinicio. </h3>
				<button class="solicitar3" onclick="location.href='contacto.php';">Iniciar la conversación</button>
			</div>
		</section>	

<div class="modalw" id="modalindex">
	<div class="modalb">
		<div class="modalbcont">
							<div class="ventanaclose"><button class="btnc btnclose"><img src="svg/cerrarw.svg" width="23px"></button></div>
			<div class="ventana">
				<h1>AVISO DE FRAUDE</h1>
				<div class="modal-body">
					<p>No te dejes sorprender.</p>
					<p>En FINETJAL nunca te solicitaremos ningún tipo de pago de anticipo como condición o requisito previo para el otorgamiento de líneas de crédito.</p>
					<p>En nuestra operación, no otorgamos líneas inferiores a los $50,000.00 M.N. ni mayores a $5´000,000.00 M.N.  como tampoco utilizamos a empresas o personas físicas como representantes para el otorgamiento de nuestros productos financieros.</p>
					<p>Recomendamos NO efectuar depósito alguno, ni entregar información a ninguna persona que se ostente como representante de FINETJAL sin una debida identificación y en caso de ser necesario, dar conocimiento a las autoridades competentes.</p>
					<p>Por lo anterior, “FINETJAL SAPI DE CV SOFOM ENR”, informa que la única página oficial de la marca en México es <a style="color:#0000ff" href="https://finet.mx/">https://finet.mx</a> y nuestro teléfono de servicio es: <a style="color:#0000ff" href="tel:+523323149510">33 2314 9510</a>, y no asume responsabilidad alguna por la contratación de productos y/o servicios sin su debida representación y autorización.</p>
				</div>
			</div>
		</div>
	</div>	
</div>


		<? include ('footer.php')?>			
		<? include ('modal.php')?>			

		<script type="text/javascript">
$(document).ready(function(){
     $(".carousel").carousel({
         interval : 100000,
         pause: false
     });
});
	
  AOS.init();
			
$(".btnf").click(function(){
  $("#modalindex").fadeIn(400);
});	
			
$(".btnclose").click(function(){
  $("#modalindex").fadeOut(400);
});				
			
			
var is_modal_show = sessionStorage.getItem('alreadyShow');
if(is_modal_show != 'alredy shown'){
  $("#modalindex").show()
  sessionStorage.setItem('alreadyShow','alredy shown');
}			
			
</script>


</body>
</html>
