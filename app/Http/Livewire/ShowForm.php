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


    protected $rules = [
        'title' => 'required|min:10|max:200',
        'subtitle' => 'required|min:10|max:255',
        'author' => 'required|min:10',
        'year' => 'required|min:4',
        'genre' => 'required',
        'abstract' => 'required|min:200',
    ];


    protected $messages = [
        'title.required' => 'Il titolo è di importanza rilevante!',
        'subtitle.required' => 'Il sotto titolo è di importanza rilevante!',
        'author.required' => "L'autore è di importanza rilevante!",
        'year.required' => "l'anno è di importanza rilevante",
        'year.min' => "l'anno va inserito secondo questo formato: YYYY",
        'genre.required' => 'Il genere è di importanza rilevante!',
        'abstract.required' => 'La trama è di importanza rilevante!',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){

        $validatedForm = $this->validate();

        Article::create($validatedForm);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.show-form');
    }
}
