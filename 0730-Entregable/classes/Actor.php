<?php

class Actor
{
    private $created_at;
    private $favorite_movie_id;
    private $first_name;
    private $id;
    private $last_name;
    private $rating;
    private $updated_at;    

    public function __construct($first_name, $last_name, $rating)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->rating = $rating;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($date)
    {
        $this->created_at = $date;
    }
    
    public function getFavoriteMovieId()
    {
        return $this->favorite_movie_id;
    }

    public function setFavoriteMovieId($id)
    {
        $this->favorite_movie_id = $id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($name)
    {
        $this->first_name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($name)
    {
        $this->last_name = $name;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }
    
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($date)
    {
        $this->updated_at = $date;
    }
}
