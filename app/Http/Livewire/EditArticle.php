<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditArticle extends Component
{
    public $article;
    public $articleId;
    public $title;
    public $subtitle;
    public $abstract;
    public $author;
    public $year;
    public $genre;


    public function mount(Article $article) {
        $article= Article::find($article->id);
        $this->articleId = $article->id;
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->abstract = $article->abstract;
        $this->year = $article->year;
        $this->author = $article->author;
        $this->genre = $article->genre;

    }

    public function update() {
        $article= Article::find($this->articleId);
        
        $article->update([
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'abstract'=>$this->abstract,
            'year' => $this->year,
            'author' => $this->author,
            'genre' => $this->genre
        ]);
        
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
