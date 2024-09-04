<?php

class Movie
{
    public $title;
    public $subtitle;
    public $description;
    public $genres = [];

    public $interpreters = [];
    public $directors = [];
    public $producers = [];
    public $production_companies = [];

    public $original_laguage;
    public $vote;
    public $poster_img_path;

    function __construct($_title, $_directors, $_original_laguage)
    {
        $this->title = $_title;
        $this->directors = $_directors;
        $this->original_laguage = $_original_laguage;
    }

    public function setSubtitle($_subtitle)
    {
        $this->subtitle = $_subtitle;
    }

    public function setDescription($_description)
    {
        $this->description = $_description;
    }

    public function addGenre($_genre)
    {
        $this->genres[] = $_genre;
    }

    public function addInterpreters($_interpreter)
    {
        $this->interpreters[] = $_interpreter;
    }

    public function addDirector($_director)
    {
        $this->directors[] = $_director;
    }

    public function addProducer($_producer)
    {
        $this->producers[] = $_producer;
    }

    public function addProductionCompanies($_production_company)
    {
        $this->production_companies[] = $_production_company;
    }

    public function getOriginalLanguage()
    {
        return $this->original_laguage;
    }

    public function printTitle()
    {
        echo $this->title;
    }

    public function printSubtitle()
    {
        echo $this->subtitle;
    }

    public function printDescription()
    {
        echo $this->description;
    }

    public function printOriginalLanguageImage()
    {
        echo '<img alt="' . $this->original_laguage . '" src="https://unpkg.com/language-icons/icons/' . $this->original_laguage . '.svg">';
    }
}
