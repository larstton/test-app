<?php

namespace App\Livewire;

use App\Services\PexelsAPIClient;
use Livewire\Component;

class SearchImage extends Component
{
    public $searchQuery;
    public $photoUrl;
    public $photos = [];
    public $oldSearchQuery;
    public $page;

    public function mount()
    {
        $this->page = 1;
    }

    public function render()
    {
        return view('livewire.search-image');
    }

    public function searchImage()
    {
        if(!empty($this->searchQuery)){
            $this->oldSearchQuery = $this->searchQuery;
            $pexelAPIClient = new PexelsAPIClient();
            $response = $pexelAPIClient->getRandomImage($this->searchQuery, $this->page);
            $this->photoUrl = data_get($response, 'photos.0.src.large');
            $this->page = $this->page + 1;
            array_push($this->photos, $this->photoUrl);
        }
    }

    public function prevImage()
    {
        if(count($this->photos)){
            array_pop($this->photos);
            $this->photoUrl = array_pop($this->photos);
        }
    }
}
