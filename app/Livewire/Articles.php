<?php

namespace App\Livewire;
use App\Models\Article;

use Livewire\Component;

class Articles extends Component
{
    public $cambiante = 'aprendible';

    public function render()
    {
        return view('livewire.articles',[
            'articles' => Article::all(),
        ]);
    }
}
