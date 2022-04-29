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
    private $voteCount;
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
    
    public function setVote($_vote) //Put vote into array of votes and count increase total vote number
    {
        $this->votes[] = $_vote;
        $this->voteCount++;
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
     
    public function getVotesAverage() // Get Average Votes
    {
        $totalVote = array_sum($this->votes);
        return round($totalVote / $this->voteCount);
    }

    public function getVoteCount()
    {
        return $this->voteCount;
    }
   
    public function getAgeCheck()   // Age Check
    {
        if ($this->adult == true) {
            return '+18';
        }
        return 'For All Age';
    }
    //Methods

}

$movieSpiderMan = new Movie('Spider Man', 'Action', False);
$movieSpiderMan->setVote(4);
$movieSpiderMan->setVote(5);
$movieSpiderMan->setVote(4);
$movieSpiderMan->setVote(1);
$movieSpiderMan->setVote(1);
$movieSpiderMan->setVote(1);
$movieSpiderMan->setVote(1);
var_dump($movieSpiderMan); 
echo $movieSpiderMan->getTitle() . ' -> ' . 'Movie Title';
echo '<br><br>';
echo $movieSpiderMan->getVotesAverage() . ' -> ' . 'Movie Average Vote';
echo '<br><br>';
echo $movieSpiderMan->getVoteCount() . ' -> ' . 'Vote Count';
echo '<br><br>';
echo $movieSpiderMan->getAgeCheck();