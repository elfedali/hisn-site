<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white dark:bg-gray-800 mt-5">
        @include('_table')
    </div>
</x-app-layout>
