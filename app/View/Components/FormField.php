<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormField extends Component
{
    public $attributes;
    public $type;
    public $id;
    public $name;
    public $label;
    public $required;
    public $textarea;
    public $value;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name, 
        string $label,
        ?string $type = 'text',
        ?string $id = null,
        ?bool $required = false,
        ?bool $textarea = false,
        ?string $value = ''
    )
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->id = $id ?? $this->name;
        $this->required = $required;
        $this->textarea = $textarea;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-field');
    }
}
