<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">

<x-layout::sidebar class="border-e border-zinc-200  dark:border-zinc-700 ">
    <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
        <x-app-logo />
    </a>

    <x-layout::nav-group>
        <x-layout::nav-item icon="lucide-pie-chart" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate class="mt-4">
            {{ __('Dashboard') }}
        </x-layout::nav-item>
    </x-layout::nav-group>

    <x-spacer />

    <x-layout::nav-group class="mb-4">
        <x-layout::nav-item icon="lucide-git-branch" href="https://github.com/medvind-dev/blueprint" target="_blank">
            {{ __('Repository') }}
        </x-layout::nav-item>

        <x-layout::nav-item icon="lucide-book-open" href="https://laravel.com/docs" target="_blank" class="">
            {{ __('Documentation') }}
        </x-layout::nav-item>
    </x-layout::nav-group>

</x-layout::sidebar>

<x-layout::header class="hidden lg:flex items-center px-4 pt-4">
    <x-layout::sidebar-toggle action="toggle">
        <x-lucide-panel-left class="size-4.5 text-white" />
    </x-layout::sidebar-toggle>

    {{ Breadcrumbs::render() }}

    <x-spacer />

    <x-dropdown variant="navigation" position="bottom-right">
        <x-slot:trigger>
            {{ auth()->user()->initials() }}
        </x-slot:trigger>
    </x-dropdown>
</x-layout::header>

{{ $slot }}

</body>
</html>
