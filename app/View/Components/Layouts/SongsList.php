<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SongList extends Component
{
    public string $pageName;
    public string $title = "Playlist App";
    //add an attribute songs
    public $songs = [];
    public function __construct(string $pageName = '') {
        $this->pageName = $pageName;
    }  

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if($this->pageName){
            $this->title = $this->title.' | '.$this->pageName;
        }
        return view('components.layouts.main');
    }
}