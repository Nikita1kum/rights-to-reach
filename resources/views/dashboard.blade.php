<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 text-center">
        <a href="{{ route('complaint.create') }}"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
           File Complaint
        </a>

        <a href="{{ route('complaint.index') }}"
           class="inline-block bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">
           View My Complaints
        </a>
    </div>
</x-app-layout>
