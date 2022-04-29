<?php 
/*
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie
{
    private $title;
    private $genre;
    private $director;
    private $language;
    private $vote;
    private $votes = [];
    private $adult;

    public function __construct(string $title,string $genre,bool $adult)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->adult = $adult;
    }

    //Setters
    public function setDirector($_director)
    {
        $this->genre = $_director;
    }

    public function setLanguage($_language)
    {
        $this->language = $_language;
    }
    //Getters
    public function getTitle()
    {
        return $this->title;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getDirector()
    {
        return $this->director;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function getVote()
    {
        return $this->vote;
    }
    public function getAdult()
    {
        return $this->adult;
    }
    //Methods

    public function 
}

$movieSpiderMan = new Movie('Spider Man', 'Action', False);
var_dump($movieSpiderMan); 
echo $movieSpiderMan->getTitle();