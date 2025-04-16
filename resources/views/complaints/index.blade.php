<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">
            My Complaints
        </h2>
    </x-slot>

    <div class="p-6">
        @if ($complaints->isEmpty())
            <p class="text-gray-500">You haven't submitted any complaints yet.</p>
        @else
            <table class="min-w-full bg-white border border-gray-300 rounded-md shadow">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Title</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Description</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($complaints as $complaint)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $complaint->title }}</td>
                            <td class="px-4 py-2">{{ Str::limit($complaint->description, 50) }}</td>
                            <td class="px-4 py-2">
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-white
                                    @if($complaint->status === 'Pending') bg-yellow-500
                                    @elseif($complaint->status === 'In Progress') bg-blue-500
                                    @else bg-green-600 @endif rounded">
                                    {{ $complaint->status }}
                                </span>
                            </td>
                            <td class="px-4 py-2">{{ $complaint->created_at->format('d M, Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
