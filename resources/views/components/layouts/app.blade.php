<x-layouts.app.sidebar :title="$title ?? null">
    <x-layout::main>
        {{ $slot }}
    </x-layout::main>
</x-layouts.app.sidebar>
