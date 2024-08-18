Here’s an updated version of the README including the necessary import statements in `app.js` for the JavaScript and CSS files:

---

# Laravel Livewire Modal Package

[![Latest Version](https://img.shields.io/github/v/release/sagor110090/livewire-modal.svg?style=flat-square)](https://packagist.org/packages/sagor110090/livewire-modal)

A simple and flexible Laravel Livewire modal package that works seamlessly with any design framework like Bootstrap, Tailwind CSS, or even custom styles. This package allows you to quickly integrate modals into your Livewire projects without being tied to specific CSS libraries.

## Features

- **Framework-Agnostic**: Use with Bootstrap, Tailwind CSS, or custom designs.
- **Dynamic Modals**: Open and close modals using Livewire events.
- **Customizable**: Easily style your modals with your preferred CSS.

## Installation

You can install the package via Composer:

```bash
composer require sagor110090/livewire-modal
```

After installation, make sure to import the required JavaScript and CSS files in your `resources/js/app.js`:

```js
import '../../vendor/sagor110090/livewire-modal/resources/js/loader.js';
import '../../vendor/sagor110090/livewire-modal/resources/css/loader.css';
```

## Usage

### Opening a Modal

To open a modal, you can dispatch a Livewire event from any button or action:

```html
<button wire:click="$dispatch('openModal', { component: 'edit-user', data: { id: {{ $user->id }} } })">
    Open Modal
</button>
```

- **component**: The name of the Livewire component you want to load.
- **data**: The data you want to pass to the component (e.g., user ID).

### Closing a Modal

To close a modal, simply dispatch the close event:

```html
<button type="button" wire:click="$dispatch('closeModal')">
    Cancel
</button>
```

### Sample Livewire Component

Here’s an example of a Livewire component you might use with this package:

```php
<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user;

    public function mount($id)
    {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
```

### Blade View Example

The modal content is fully customizable within your Livewire component's view file:

```blade
<!-- resources/views/livewire/edit-user.blade.php -->
<div>
    <h2>Edit User: {{ $user->name }}</h2>
    <!-- Your form or content here -->
</div>
```

You can use any CSS framework or custom styles in this view file. The package does not impose any specific design restrictions.

## Example Styles

You can design the modal with any framework. Below is an example using Tailwind CSS:

```blade
<div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <!-- Modal Content -->
    </div>
</div>
```

Alternatively, use Bootstrap or any other CSS framework.

## Why Use This Package?

- **Flexibility**: Unlike many modal packages, this one doesn't enforce a specific CSS framework, giving you full control over your design.
- **Ease of Use**: Simple to implement with just a few Livewire events.
- **Dynamic Data Handling**: Pass data seamlessly to your modals, making them fully dynamic.

## SEO Considerations

This Laravel Livewire modal package is designed to be lightweight and versatile, providing developers with an easy way to implement customizable modals across different design frameworks. Whether you're using Bootstrap, Tailwind CSS, or custom styles, this package adapts to your needs without locking you into specific CSS libraries. Enhance your Laravel projects with a modular and framework-agnostic approach to modals.

## Support

For any issues or feature requests, feel free to [open an issue](https://github.com/sagor110090/livewire-modal/issues) on GitHub.

## License

This package is open-source software licensed under the [MIT license](LICENSE.md).
 
