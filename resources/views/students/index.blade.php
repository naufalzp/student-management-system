<x-app-layout>
    <x-slot name="header">
        <div class="sm:flex sm:justify-between sm:items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Students') }}
                </h2>
                <p class="mt-2 text-sm text-gray-700 dark:text-gray-100">
                    A list of all the Students.
                </p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('students.create') }}" as="button"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                    Add Student
                </a>
            </div>
        </div>
    </x-slot>
    <div class=" py-10">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                @livewire('student.index')
            </div>
        </div>
    </div>
</x-app-layout>
