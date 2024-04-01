<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class data extends Component
{
    public $value = ''; 
    /**
     * Create a new component instance.
     */
    public function __construct($object, $branch)
    {   
        if ($object) {
            $nodes = explode('.', $branch);
            $objAux = $object;
            foreach ($nodes as $node) {
                if (isset ($objAux[$node])) {
                    $objAux = $objAux[$node];
                }
                else {
                    $objAux = null;
                }
            }
            if ($objAux) {
                $this->value = $objAux;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data');
    }
}
