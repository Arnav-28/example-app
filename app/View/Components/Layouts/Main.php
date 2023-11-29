<?php

namespace App\View\Components\Layouts;

public string $title = "Playlist App";
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
public string $pageName;

class Main extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.main');
    }
    
    public function __construct(string $pageName = '') {
        $this->pageName = $pageName;
    }   
}
