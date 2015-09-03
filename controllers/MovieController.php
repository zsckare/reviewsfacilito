<?php

class MovieController{

    public function indexAction()
    {
        return new View("movie/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }
    public function newAction()
    {
		if (isset($_POST['add'])) {
				$dir_destino = $_SERVER['DOCUMENT_ROOT']."/assets/img/";
				$imagen_subida = $dir_destino . basename($_FILES['url']['name']);
				$imagen_lista = ROOT_RUTA. "/assets/img/" . basename($_FILES['url']['name']);
				$rutaimagen ="/assets/img/" . basename($_FILES['url']['name']);
				

				if(!is_writable($dir_destino)){
					echo "no tiene permisos";
				}else{
					if(is_uploaded_file($_FILES['url']['tmp_name'])){
						if (move_uploaded_file($_FILES['url']['tmp_name'], $imagen_subida)) {
							$consulta = new MovieModel();
							$consulta->create([
							"title_movie"=>$_POST['title'],
							"desc_movie"=>$_POST['description'],						
							"cover_movie"=>$rutaimagen,
							"director_movie"=>$_POST['director'],
							"length_movie"=>$_POST['duracion'],
							"id_user"=>"1"
						]);

						}else{
							echo "<script>alert('Algun error en la carga intenta de Nuevo. Disculpa las molestias.')</script>";
						}
					}
					else{
						echo "<script>alert('Error al guardar el archivo probablemente muy pesado')</script>";
					}
				}
		}

    	return new View("movie/new", ["title" => "Agregar Nueva Pelicula", "layout" => "on", "nameLayout" => "layout"]);	
    }
    public function readAction()
    {
    	$id_movie=$_GET['id'];
    	$movie= new MovieModel();
    	$values=$movie->get($id_movie);    	
    	
    	return new View("movie/read", ["title" => "Reviews Facilito", "layout" => "on", "nameLayout" => "layout", "values" =>$values]);	
    }
}
