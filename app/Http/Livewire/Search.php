<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;


class Search extends Component
{
    use WithPagination;
    public $searchArea;
    public $searchCity;
    public $searchBrand;

    public function render()
    {
        $searchArea = '%'. $this->searchArea .'%';
        $searchCity = '%'. $this->searchCity .'%';
        $searchBrand = '%'. $this->searchBrand .'%';
        $posts = Post::where('area', 'LIKE',  $searchArea)->where('city', 'LIKE',  $searchCity)->where('brand', 'LIKE',  $searchBrand)->paginate(2);
        return view('livewire.search', ['posts' => $posts]);
    }
}
