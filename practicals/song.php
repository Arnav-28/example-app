<?php
namespace Practicals;
/**
 * Class Song
 *
 * Represents a musical song with properties such as title, artist, genre, and tempo.
 */
class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    /**
     * Song constructor.
     *
     * @param string $title  The title of the song.
     * @param string $artist The artist of the song.
     * @param string $genre  The genre of the song.
     * @param int    $tempo  The tempo of the song.
     */
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    /**
     * Get the title of the song.
     *
     * @return string The title of the song.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the title of the song.
     *
     * @param string $title The title of the song.
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get the artist of the song.
     *
     * @return string The artist of the song.
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Set the artist of the song.
     *
     * @param string $artist The artist of the song.
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Get the genre of the song.
     *
     * @return string The genre of the song.
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Set the genre of the song.
     *
     * @param string $genre The genre of the song.
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Get the tempo of the song.
     *
     * @return int The tempo of the song.
     */
    public function getTempo() {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song.
     *
     * @param int $tempo The tempo of the song.
     */
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

?>
