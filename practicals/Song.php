<?php
namespace Practicals;

use InvalidArgumentException;

class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    /**
     * Constructor to initialize the Song object.
     */
    public function __construct() {
    $this->sr = '';
        $this->title = '';
        $this->artist = '';
        $this->genre = '';
        $this->album = '';
        $this->duration = '';
        $this->tempo = 0;
    }

    /**
     * Getter for the title property.
     * @return string The title of the song.
     */
    public function title() {
        return $this->title;
    }

    /**
     * Setter for the title property.
     * @param string $title The title of the song.
     */


    /**
     * Getter for the artist property.
     * @return string The artist of the song.
     */
    public function sr() {
        return $this->sr;
    }
    
     public function artist() {
        return $this->artist;
    }
        public function album() {
        return $this->album;
    }
    
    public function setAlbum($album) {
        $this->album = $album;
        
    }
    
    public function duration() {
        return $this->duration;
    }

        public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setDuration($duration) {
        $this->duration = $duration;
    }

    /**
     * Setter for the artist property.
     * @param string $artist The artist of the song.
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Getter for the genre property.
     * @return string The genre of the song.
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Setter for the genre property.
     * @param string $genre The genre of the song.
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Getter for the tempo property.
     * @return int The tempo of the song.
     */
    public function getTempo() {
        return $this->tempo;
    }

    /**
     * Setter for the tempo property.
     * @param int $tempo The tempo of the song.
     */
    public function setTempo($tempo) {
        if (!is_numeric($tempo) || floatval($tempo) != intval($tempo)) {
            throw new \InvalidArgumentException('Tempo must be an integer or an integer string.');
        }
    
        $this->tempo = (int) $tempo;
    }
    
    
}
/*
// Example usage:
$song = new Song();

$song->setTitle("Bohemian Rhapsody");
$song->setArtist("Queen");
$song->setGenre("Rock");
$song->setTempo("70 BPM");

echo "Title: " . $song->getTitle() . "\n";
echo "Artist: " . $song->getArtist() . "\n";
echo "Genre: " . $song->getGenre() . "\n";
echo "Tempo: " . $song->getTempo() . "\n";
*/
?>
