<?php

  class MovieModel{

    protected $consult;
    public $rows;

    public function __construct()
    {
        $this->consult = new Querys();
    }


    public function get($value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM movie
            WHERE id_movie = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }

    public function getAll()
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM movie
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
    public function create($values = array())
    {
      extract($values);
      if($this->consult->getConsultar("
              INSERT INTO movie
              (id_movie, title_movie, desc_movie,  director_movie, length_movie, id_user, cover_movie) VALUES (null,'$title_movie','$desc_movie','$director_movie','$length_movie','$id_user', '$cover_movie');
          "))
      {
         Redirection::go("movie");
      }else{
         Redirection::go("home");
      }
    }

    public function update($values=array())
    {
      if($this->consult->getConsultar("
          UPDATE movie
          SET name = '$name'
          WHERE name_user = '$user'
      "))
      {
        Redirection::go("user");
      }else{
        Redirection::go("user");
      }   
    }

    public function destroy($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM movie
            WHERE id_user = '$id'
        ")){
           Redirection::go("user");
        }else
        {
          Redirection::go("user");
        }
    }
  }