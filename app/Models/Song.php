<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    // Add fillable fields corresponds to database columns
    protected $fillable=['sr', 'title', 'artist', 'album', 'duration'];
    
    // public function sr() {
    //     return $this->sr;
    // }


    // public function setSr($sr) {
    //     $this->sr = $sr;
    // }
    
    public function title() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function artist() {
        return $this->artist;
    }


    public function setArtist($artist) {
        $this->artist = $artist;
    }
    
    // public function album() {
    //     return $this->album;
    // }
    
    // public function setAlbum($album) {
    //     $this->album = $album;
        
    // }
    
    // public function duration() {
    //     return $this->duration;
    // }
    
    // public function setDuration($duration) {
    //     $this->duration = $duration;
    // }

    public function genre() {
        return $this->genre;
    }


    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function tempo() {
        return $this->tempo;
    }


    public function setTempo($tempo) {
        if (!is_numeric($tempo) || is_float($tempo)) {
            throw new \InvalidArgumentException("inputs must be numeric.");
        }
        $this->tempo = $tempo;
    }
}
