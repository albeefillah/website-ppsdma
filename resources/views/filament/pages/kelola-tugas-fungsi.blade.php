<x-filament::page>
    <form wire:submit="save">
    <x-filament::section>
        {{ $this->form }}

        <x-slot name="footer">
            <div class="flex justify-end">
                <x-filament::button type="submit">
                    Simpan
                </x-filament::button>
            </div>
        </x-slot>
    </x-filament::section>
</form>
</x-filament::page>