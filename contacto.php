<!doctype html>
<html>

<? include('headers.php')?>
	

	
<section class="seccion sec9 rel contacto">
	<div class="container">
		<h2>Resolvemos todas tus dudas</h2>
		<h3>¡Empecemos la conversación!</h3>
	
			<form class="formcon">
			<div class="clearfix">
				<div class="col-md-3 col-md-offset-3">
					<label class="lcon">Nombre(s)</label>
					<input type="text" class="input2" placeholder="Juan Antonio">
				</div>
				
				<div class="col-md-3">
					<label class="lcon">Apellidos</label>
					<input type="text" class="input2" placeholder="Velasco Padrés">
				</div>	
			</div>
				<div class="clearfix">
				<div class="col-md-3  col-md-offset-3">
					<label class="lcon">Teléfono Oficina</label>
					<input type="tel" class="input2" placeholder="xxx xxx xxxx">
				</div>
				
				<div class="col-md-3">
					<label class="lcon">Whatsapp</label>
					<input type="tel" class="input2"placeholder="xxx xxx xxxx">
				</div>					
				</div>
				
				<div class="clearfix">
				<div class="col-md-6  col-md-offset-3">
					<label class="lcon">Correo</label>
					<input type="email" class="input2" placeholder="nombre@ejemplo.com">
				</div>			
				</div>
				
				<div class="col-md-9 col-md-offset-3">
					<h5>¿Por qué nos contactas?</h5>	
				</div>
				
				<div class="row clearfix">
					<div class="col-md-3 col-md-offset-3 checkf">
						<input name="cssCheckbox" id="demo_opt_1" type="checkbox" class="css-checkbox">
						<label for="demo_opt_1">Solicitud de Crédito Personal</label>
					</div>

					<div class="col-md-3 checkf">
						<input name="cssCheckbox" id="demo_opt_2" type="checkbox" class="css-checkbox">
						<label for="demo_opt_2">Solicitud de Crédito para Negocio</label>
					</div>	
				</div>	
				
				<div class="row clearfix">
					<div class="col-md-3 col-md-offset-3 checkf">
						<input name="cssCheckbox" id="demo_opt_3" type="checkbox" class="css-checkbox">
						<label for="demo_opt_3">Crédito sobre mi auto</label>
					</div>

					<div class="col-md-3 checkf">
						<input name="cssCheckbox" id="demo_opt_4" type="checkbox" class="css-checkbox">
						<label for="demo_opt_4">Preguntas sobre mi crédito actual</label>
					</div>
				</div>		
				
				
				<div class="row clearfix">
					<div class="col-md-3 col-md-offset-3 checkf">
						<input name="cssCheckbox" id="demo_opt_5" type="checkbox" class="css-checkbox">
						<label for="demo_opt_5">Deseo asesoría</label>
					</div>

					<div class="col-md-3 checkf">
						<input name="cssCheckbox" id="demo_opt_6" type="checkbox" class="css-checkbox">
						<label for="demo_opt_6">Otra solicitud</label>
					</div>
				</div>	
				
				<div class="clearfix">
				<div class="col-md-6  col-md-offset-3">
					<label class="lcon">Mensaje</label>
					<textarea class="input2area "></textarea>
				</div>
									
				</div>				
				
				<button type="submit" class="btnenviar2">Enviar</button>

				<div class="visible-xs col-xs-12">
					<hr class="gray">
				</div>				
			</form>
		</div>	
		
		
</section>

<? include ('footer.php')?>	
<? include ('modal.php')?>	


</body>

</html>
