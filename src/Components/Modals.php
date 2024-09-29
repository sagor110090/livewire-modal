<?php

namespace Sagor110090\LivewireModal\Components;

use Livewire\Component;
use Livewire\Attributes\On;

class Modals extends Component
{
    public bool $show = false;

    public $component = '';

    public $data = null;

    #[On('openModal')]
    public function openModal($component, $data = null)
    {

        $this->resetModal(); // Ensure previous modal is closed and data reset
        $this->resetErrorBag(); // Reset error bag in case of validation errors
        $this->show = true; // Open the modal
        $this->component = $component; // Assign the new component
        $this->data = $data; // Assign new data (if any)
        $this->js('loadingStop()'); // Stop any loading animations

    }

    #[On('closeModal')]
    public function closeModal()
    {
        $this->resetModal(); // Reset the modal state before closing it
        $this->js('loadingStop()');
    }

    // Function to reset modal state
    public function resetModal()
    {
        $this->show = false;
        $this->component = '';
        $this->data = null;
    }

    public function render()
    {
        return view('livewire-modal::modals');
    }
}
