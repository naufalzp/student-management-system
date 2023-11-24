<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Add Student') }}
            </h2>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-100">
                {{ __('Add a new student to the system.') }}
            </p>
        </div>

    </x-slot>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-12">
                @livewire('student.create')
            </div>
        </div>
    </div>
</x-app-layout>
