<!doctype html>
<html>
<? include('headers.php')?>
	

	
<section class="seccion sec5 rel">
			<div class="copy copy3 mar9" data-aos="fade-up">
				<h5>Obtén tu línea de <br>crédito hoy mismo</h5>

				<button class="solicitar" onclick="location.href='contacto.php';">Quiero mi préstamo</button>
			</div>	
		<div class="prueba">
			<div class="textc1">Fácil <span>Sin trámites excesivos</span></div>
			<div class="textc2">Rápido<span>Te respondemos el mismo día</span></div>
			<div class="textc3">Seguro<span>No solicitamos dépositos previos para entregarte tu dinero</span></div>
			<img src="svg/line1.svg" width="100%" class="hidden-lg hidden-md">
			<img src="svg/line2.svg" width="100%" class="hidden-xs hidden-ms">
			
	</div>
	<div class="container">

	</div>	
</section>

<section class="inf rel normal3">
	<div class="container  back3">
		<div class="col-md-12 col-md-offset-1 h1l">
			<h1>Tu solución efectiva y conveniente</h1>
			<ul class="ul1">
				<li>Ofrecemos préstamos desde $50,000 hasta $5'000,000 de pesos.</li>
				<li>Tasas de interés accesibles.</li>
				<li>Condiciones altamente flexibles y diversas a otros instrumentos de préstamo.</li>
				<li>No solicitamos anticipos.</li>
				<li>Sin penalización por aportaciones adelantadas.</li>
			</ul>
		</div>
		<div class="bgi3 aos-init aos-animate" data-aos="zoom-out" data-aos-duration="3000">
			<img src="img/finet-prestamo-img1.png" width="100%">
		</div>
	</div>
</section>
	
<section class="form1">
	<div class="container">
	 	<div class="col-md-10 col-md-offset-1 col-xs-12 nopadxs">
			
			<div class="contwhite">
				<h1>Solicitar préstamo</h1>
				<form>
					<div class="col-md-6 col-md-offset-3">
						<label class="l1">Nombre Completo</label>
						<input type="text" class="input" style="text-transform: capitalize;"placeholder="Ramón Everardo Villegas López">
					</div>
					<div class="clearfix">
						<div class="col-md-3 col-md-offset-3">
							<label class="l1">Correo</label>
							<input type="email" class="input" placeholder="nombre@ejemplo.com">
						</div>	

						<div class="col-md-3">
							<label class="l1">Móvil</label>
							<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="input" placeholder="xxx-xxx-xxxx">
						</div>						
					</div>
					
					<div class="clearfix">
						<div class="col-md-4 col-md-offset-4">
							<label class="l2">Monto solicitado</label>
							<input type="number" class="input" placeholder="$xxx,xxx">
						</div>	
						</div>
						<button type="submit" class="btnenviar">Enviar</button>

						<p class="sub">Nuestros asesores entrarán en contacto contigo a la brevedad.</p>
				</form>
			</div>
		</div>
	</div>	
</section>


<section class="confia">
	<div class="container bgcon rel">
		<div class="abs1">
			<h2>Confía en Finet</h2>
			<h3>Activa el motor que te hace crecer.</h3>
		</div>	
	</div>	
</section>	
	
<? include('footer.php')?>
<? include('modal.php')?>	
	
<script type="text/javascript">
$(document).ready(function(){
     $(".carousel").carousel({
         interval : 100000,
         pause: false
     });
});
	
  AOS.init();
	
</script>

</body>

</html>
