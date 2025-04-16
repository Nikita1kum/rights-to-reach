<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            Welcome to Rights to Reach
        </h2>
    </x-slot>

    <div class="p-8 bg-blue-200 rounded shadow mt-6 max-w-4xl mx-auto">
        <h3 class="text-xl font-semibold mb-4">What is Rights_to_Reach?</h3>
        <p class="text-gray-700 mb-4">
            <p class="text-white mb-4">
                Rights to Reach is a platform designed to empower individuals by providing a safe space to report violations of their rights, connect with support systems, and seek justice transparently.
            </p>

        </p>

        <h3 class="text-lg font-semibold mb-2">Why is it important?</h3>
        <ul class="list-disc list-inside text-white mb-4">
            <li>Raises awareness about fundamental rights</li>
            <li>Offers a secure complaint mechanism</li>
            <li>Connects citizens with NGOs and legal experts</li>
            <li>Tracks complaint progress transparently</li>
        </ul>

        <h3 class="text-lg font-semibold mb-2">Who can use it?</h3>
        <ul class="list-disc list-inside text-white mb-6">
            <li><strong>Citizens</strong> to file complaints and view their status</li>
            <li><strong>NGOs</strong> to assist and raise issues on behalf of communities</li>
            <li><strong>Admins</strong> to manage and resolve incoming complaints</li>
        </ul>

        @guest
            <a href="{{ route('register') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded mr-4">
                Get Started
            </a>
            <a href="{{ route('login') }}"
               class="inline-block bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-6 rounded">
                Already Have an Account?
            </a>
            <a href="{{ route('complaint.create') }}"
               class="inline-block bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-6 rounded">
                Raise Issue
            </a>
        @else
            <a href="{{ route('dashboard') }}"
               class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded">
                Go to Dashboard
            </a>
        @endguest
    </div>
</x-app-layout>
