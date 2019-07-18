<?php get_header(); ?>

<div class="wrap">
	<center><h1>Registro</h1></center>
	<?php if(isset($_GET['errormsg'])): ?>
	<div>
		<p><?php echo $_GET['errormsg'] ?></p>
	</div>
	
	<?php endif; ?>
	<form action="<?php echo esc_url( admin_url('admin-post.php')) ?>" method="post" style="font-family: 'Raleway', sans-serif;">

		
		<?php 

		global $wpdb;
		$results = $wpdb->get_results ("SELECT * FROM universidades ORDER BY universidad;");
		$result_car = $wpdb->get_results ("SELECT * FROM carreras ORDER BY carrera;");
		/*foreach ( $results as $result ) {
		    echo '<option>'.$result->adres.'</option>';
		}*/
		?>
		</select>
		<label for="txtNombre">Nombre Completo:</label>
		<input type="text" name="txtnombre" id="txtnombre">
		<label for="txtAlias">Alias:</label>
		<input type="text" name="txtalias" id="txtalias">
		<label for="txtCorreo">Correo Electronico:</label>
		<input type="text" name="txtemail" id="txtemail">
		<label for="txtCelular">Telefono Celular:</label>
		<input type="text" name="txtcelular" id="txtcelular">
		<label for="txtCarrera">Carrera:</label>

		<select id="txtcarrera" name="txtcarrera" style="width: 100%">
			<option>Seleccionar Carrera</option>
			<?php 
			foreach ( $result_car as $car ) {
		    echo '<option value="'.$car->carrera.'">'.$car->carrera.'</option>';
			}
			?>
		</select>

		<label for="txtSemestre">Semestre:</label>
		<input type="text" name="txtsemestre" id="txtsemestre">
		<label for="txtUniversidad">Universidad:</label>

		<select id="txtuniversidad" name="txtuniversidad" style="width: 100%">
			<option>Seleccionar</option>
			<?php 
			foreach ( $results as $result ) {
		    echo '<option value="'.$result->universidad.'">'.$result->universidad.'</option>';
			}
			?>
		</select>

		<label for="txtAcercade">Queremos conocerte más, comparte algo de ti</label>
		<textarea name="txtacercade" id="txtacercade" cols="10" rows="3"></textarea>
		<label for="txtPorque">¿Por qué quieres sumarte a Maratón Ideósfera 2019?</label>
		<textarea name="txtporque" id="txtporque" cols="10" rows="3"></textarea>
		<label for="txtReto">Elige un reto</label>
		<select name="txtreto" style="width: 100%">
			<option value="">Selecciona un reto</option>
		    <option value="Reto 1: Mejorar la calidad de vida de los Adultos Mayores">Reto 1: Mejorar la calidad de vida de los Adultos Mayores</option>
		    <option value="Reto 2: Fomentar el empleo digno y bien remunerado">Reto 2: Fomentar el empleo digno y bien remunerado</option>
		    <option value="Reto 3: Incrementar la identidad y las prácticas culturales">Reto 3: Incrementar la identidad y las prácticas culturales</option>
		    <option value="Reto 4: Mejorar la salud infantil">Reto 4: Mejorar la salud infantil</option>
		    <option value="Reto 5: Dignificar el tránsito de inmigrantes en el Estado">Reto 5: Dignificar el tránsito de inmigrantes en el Estado</option>
		    <option value="Reto 6: Dignificar la vivienda">Reto 6: Dignificar la vivienda</option>
		</select>
		<label for="txtCualidades">Desde tus cualidades y conocimientos, ¿Qué consideras que puede ser tu principal aportación a la solución de este reto?</label>
		<textarea name="txtcualidades" id="txtcualidades" cols="10" rows="3"></textarea>
		<br>
		<input type="submit" name="" value="Registro" style="">
		<input type="hidden" name="action" value="contactform">
		
	</form>
</div>


<?php get_footer(); ?>
