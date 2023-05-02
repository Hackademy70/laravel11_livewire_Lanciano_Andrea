<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowArticle extends Component
{

    public function delete(Article $article){
        $article->delete();
    }

    public function render()
    {
        return view('livewire.show-article', [
            'articles' => Article::all(),
        ]);
    }
}
