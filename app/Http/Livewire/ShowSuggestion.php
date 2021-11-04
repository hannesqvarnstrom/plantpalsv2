<?php

namespace App\Http\Livewire;

use App\Models\Suggestion;
use Livewire\Component;

class ShowSuggestion extends Component
{
    public $showSuggestion = false;
    public Suggestion $suggestion;

    protected $listeners = ['modalClose' => 'toggle'];

    public function render()
    {
        return view('livewire.show-suggestion');
    }

    public function toggle()
    {
        $this->showSuggestion = !$this->showSuggestion;
    }
}
