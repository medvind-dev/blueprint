@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <x-heading size="xl">{{ $title }}</x-heading>
    <x-subheading>{{ $description }}</x-subheading>
</div>
