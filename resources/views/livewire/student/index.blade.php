<div class="flex flex-col">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-white dark:bg-gray-800 ">
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold  text-gray-800 dark:text-gray-200 sm:pl-6">
                                ID
                            </th>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold  text-gray-800 dark:text-gray-200 sm:pl-6">
                                Name
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold  text-gray-800 dark:text-gray-200">
                                Email
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold  text-gray-800 dark:text-gray-200">
                                Image
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold  text-gray-800 dark:text-gray-200">
                                Class
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold  text-gray-800 dark:text-gray-200">
                                Section
                            </th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6" />
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-800">
                        @foreach ($students as $student)
                            <tr>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium  text-gray-800 dark:text-gray-200 sm:pl-6">
                                    {{ $student->id }}
                                </td>
                                <td
                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium  text-gray-800 dark:text-gray-200 sm:pl-6">
                                    {{ $student->name }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $student->email }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-400">
                                    @if ($student && $student->getMedia()->isNotEmpty())
                                        <img src="{{ $student->getMedia()->last()->getUrl() }}" alt=""
                                            width="200px" height="200" />
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $student->class->name }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $student->section->name }}
                                </td>

                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a wire:navigate href="{{ route('students.edit', $student->id) }}"
                                        class="text-indigo-600 hover:text-indigo-900">
                                        Edit
                                    </a>
                                    <button wire:confirm="Are you sure?" wire:click="delete({{ $student->id }})"
                                        class="ml-2 text-indigo-600 hover:text-indigo-900">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                {{ $students->links() }}
            </div>
        </div>
    </div>
</div>
