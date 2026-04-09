<x-layout>
    <x-slot:heading>
        Job Details Page
    </x-slot:heading>


    <h1 class="font-bold">{{ $job['title'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>

</x-layout>