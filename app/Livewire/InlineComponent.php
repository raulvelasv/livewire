<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComponent extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- The best athlete wants his opponent at his best. --}}
        </div>
        HTML;
    }
}
