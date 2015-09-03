<?php

class HomeController{

    public function indexAction($hola="hola")
    {
    	$movie= new MovieModel();
    	$values=$movie->getAll();
        return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout", "values"=>$values]);
    }

}
