<?php

namespace App\Http\Livewire;

use App\Models\Suggestion;
use Livewire\Component;

class ShowSuggestion extends Component
{
    public $showSuggestion = false;
    public Suggestion $suggestion;
    public $resource;
    public $route;

    public function render()
    {
        return view('livewire.show-suggestion');
    }

    public function toggle()
    {
        $this->showSuggestion = !$this->showSuggestion;
    }

    public function approve()
    {
        $this->resource = $this->suggestion->approve(auth()->user());
        if($this->resource) {
            $this->route = match($this->resource::class) {
                'App\Models\Family' => 'families',
                'App\Models\Genus' => 'genera',
                'App\Models\Species' => 'species',
                'App\Models\Variety' => 'varieties'
            };
            redirect()->route($this->route.'.edit', $this->resource);
        } else redirect()->route('suggestions.edit', $this->suggestion);
    }
}
