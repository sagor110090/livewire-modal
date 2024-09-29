<div>
    @if ($show)

            @livewire($component, $data, key($component)) <!-- Use $component as a stable key -->

    @endif

    <!-- Loader -->
    <div :style="`display: ${isLoading ? 'flex' : 'none'};`" style="display: none;" class="loader-container">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
