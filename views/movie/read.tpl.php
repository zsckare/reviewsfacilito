<div class="card padding-largo">
	<?php foreach ($values as $row) {?>
		<div class="row">
			<h4 class="center-align"><?=$row['title_movie']?></h4>
		</div>
		<div class="row">
			<div class="col s12 m4 l4">
				<img src='<?=$row["cover_movie"]?>' alt="">
			</div>
			<div class="col s12 m8 l8">
				<div class="row"><div class="row">Valoracion</div></div>
				<div class="row ">
					<div class="row">Descripcion</div>
					<div class="row"><p class="padding-largo"><?=$row['desc_movie']?></p></div>
				</div>

				<div class="row">
					<div class="col s12 m6 l6">
						<div class="row">Director</div>
						<div class="row"><?=$row['director_movie']?></div>
					</div>
					<div class="col s12 m6 l6">
						<div class="row">Duracion</div>
						<div class="row"><?=$row['length_movie']?></div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>