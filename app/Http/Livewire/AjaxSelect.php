<?php

namespace App\Http\Livewire;

use App\Http\Controllers\SuggestionController;
use Livewire\Component;

class AjaxSelect extends Component
{
    public $chosenValue = '';

    public $options;
    public $name;
    public $selected;
    public $resource;

    public function render()
    {
        return view('livewire.ajax-select');
    }

    public function updatedChosenValue($value)
    {
            $this->resource->{$this->name} = $value;
            $this->resource->save();
    }
}
