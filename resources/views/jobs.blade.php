<x-layout>
    <x-slot:heading>
        Jobs Listing Page
    </x-slot:heading>
    <h1>Available Jobs</h1>


    <ul>
        @foreach ($jobs as $job)
            <a class="text-blue-600 hover:underline" href="jobs/{{ $job['id'] }}">
                <li class="text-xl font-bold"><strong>{{ $job['title'] }}</strong> pays: {{ $job['salary'] }}</li>
            </a>
        @endforeach
    </ul>


</x-layout>
