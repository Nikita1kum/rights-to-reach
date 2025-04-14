<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            File Complaint
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto mt-6 p-6 bg-white rounded-lg shadow">
        @extends('layouts.app')

        @section('content')
        <div class="max-w-md mx-auto mt-10">
            <h2 class="text-xl font-bold mb-4">File a Complaint</h2>
            <form method="POST" action="{{ route('complaint.store') }}">
                @csrf
                <div class="mb-4">
                    <label class="block">Title</label>
                    <input type="text" name="title" class="w-full border p-2" required>
                </div>
                <div class="mb-4">
                    <label class="block">Description</label>
                    <textarea name="description" class="w-full border p-2" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2">Submit</button>
            </form>
        </div>
        @endsection    <form method="POST" action="{{ route('complaint.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block font-medium text-sm text-gray-700">Title</label>
                <input type="text" name="title" class="w-full border rounded p-2 mt-1" required>
            </div>

            <div class="mb-4">
                <label class="block font-medium text-sm text-gray-700">Description</label>
                <textarea name="description" class="w-full border rounded p-2 mt-1" rows="5" required></textarea>
            </div>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit Complaint
            </button>
        </form>
    </div>
</x-app-layout>
