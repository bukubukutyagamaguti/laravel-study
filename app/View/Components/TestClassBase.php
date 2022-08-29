<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $classBaseMessage;
    public $defaltMessage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($classBaseMessage, $defaltMessage = '初期値だよ')
    {
        $this->classBaseMessage = $classBaseMessage;
        $this->defaltMessage = $defaltMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tests.test-class-base');
    }
}
