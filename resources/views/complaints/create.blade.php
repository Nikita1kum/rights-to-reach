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
@endsection
