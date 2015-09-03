<div class="card padding-largo">
<div class="row">
	<h4 class="center-align">Nueva Pelicula</h4>
</div>
	<form action="" method="post" enctype="multipart/form-data" class="row padding-largo">
		<div class="row">
			<div class="input-field col s12 m12 l12">
				<input type="text" name="title" id="title">
				<label for="title">Titulo</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m12 l12">
				<textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
          		<label for="textarea1">Descripcion</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6 m6 l6">
				<input type="text" name="director" id="title">
				<label for="title">Director</label>
			</div>
		
			<div class="input-field col s6 m6 l6">
				<input type="text" name="duracion" id="title">
				<label for="title">Duracion</label>
			</div>
		</div>
	
		<div class="file-field input-field row">
            <div class="btn primary-dark">
              <span>Cover</span>
              <input type="file" name="url">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
         </div>

		<div class="row">
			<div class="center-align">
				<input name="add" type="submit" value="Agregar Pelicula" class="btn primary-dark">
			</div>
		</div>
	</form>
</div>