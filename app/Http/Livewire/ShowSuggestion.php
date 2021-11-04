<?php

namespace App\Http\Livewire;

use App\Models\Suggestion;
use Livewire\Component;

class ShowSuggestion extends Component
{
    public $showSuggestion = false;
    public Suggestion $suggestion;
    public $resource;
    public $success = false;
    public $status = '';
    protected $listeners = ['modalClose' => 'toggle'];

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
        
        $this->success = true;
        $this->route = match($this->resource::class) {
            'App\Models\Family' => 'families',
            'App\Models\Genus' => 'genera',
            'App\Models\Species' => 'species',
            'App\Models\Variety' => 'varieties'
        };
        $this->status = 'Succes in approval! You can edit this addition immediately by clicking ';
    }
}
