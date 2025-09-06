<x-layout>
    <x-slot:heading>Job page</x-slot:heading>
    <div class="mb-5">
        <strong>{{ $job->employer->name }}</strong>
        <br>
        <strong> {{ $job['title'] }}</strong> Pays ${{ $job['salary'] }} pear year
    </div>
    <x-button href="/jobs/{{ $job->id}}/edit/">Edit Job</x-button>
</x-layout>
