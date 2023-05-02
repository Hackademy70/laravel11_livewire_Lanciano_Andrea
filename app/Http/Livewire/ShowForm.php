<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowForm extends Component
{
    public $title;
    public $subtitle;
    public $abstract;
    public $author;
    public $year;
    public $genre;

    public function store(){
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'abstract' => $this->abstract,
            'author' => $this->author,
            'year' => $this->year,
            'genre' => $this->genre,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.show-form');
    }
}
