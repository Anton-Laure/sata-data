<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select2 extends Component
{
    public $id;
    public $name;
    public $lable;
    public function __construct($id = "1", $name = 'kec', $lable = 'Kecamatan')
    {
        $this->id = $id;
        $this->name = $name;
        $this->lable = $lable;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select2');
    }
}
