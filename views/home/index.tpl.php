<div class="row">
	<?php  foreach ($values as $row) {?>
		<div class="col s12 m3 l3 card padding-largo">
			<div class="row">
				<div class="center-align">
					<a href='/movie/read/?id=<?=$row["id_movie"]?>' class="be-black"><?=$row['title_movie']?></a>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12">
					<a href='/movie/read/?id=<?=$row["id_movie"]?>'><img src='<?=$row["cover_movie"]?>' alt=""  class="responsive-img"></a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>