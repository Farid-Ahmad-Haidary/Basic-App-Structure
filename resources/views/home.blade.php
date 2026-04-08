<x-layout>
    {{-- This is the heading page --}}
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1>{{$greeting}} From Home Page</h1>
    <h1>
        My name is {{$name}} and I am {{$age}} years old.
    </h1>
</x-layout>   




