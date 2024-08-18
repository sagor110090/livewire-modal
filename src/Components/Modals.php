<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Modals extends Component
{
    public bool $show = false;

    public $component = '';

    public $data = null;

    #[On('openModal')]
    public function openModal($component, $data)
    {
        // dd($data);
        $this->resetErrorBag();
        $this->show = true;
        $this->component = $component;
        $this->data = $data;
        $this->js('loadingStop()');

    }

    #[On('closeModal')]
    public function closeModal()
    {
        $this->show = false;
        $this->js('loadingStop()');
    }

    public function render()
    {
        return view('livewire-modal::modals');
    }
}
