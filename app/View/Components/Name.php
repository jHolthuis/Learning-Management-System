<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Name extends Component
{
    public string $name;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->name = Auth::user()->name;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.name');
    }
}
