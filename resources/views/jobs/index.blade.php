<x-layout>
    <x-slot:heading>Jobs page</x-slot:heading>
    @foreach($jobs as $job)
        <a href="/jobs/{{$job['id']}}/" class="block p-4 border border-gray-300 rounded-lg mb-2 hover:bg-gray-200">
            <div class="text-blue-400">{{ $job->employer->name }}</div>
            <strong>{{ $job['title'] }}</strong>, Pays ${{ $job['salary'] }} per year
        </a>
    @endforeach
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
