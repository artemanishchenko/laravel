<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
<ul>
    @foreach ($employees as $employe)
        <li>{{ $employe['name'] }} {{ $employe['surname'] }} {{ $employe['salary'] }}</li> 
    @endforeach
</ul>
    
</x-layout>