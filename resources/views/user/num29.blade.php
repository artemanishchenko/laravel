<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
    @if (count($users)>0)
    @foreach ( $users as $elem )
        <p>{{ $elem }}</p>
    @endforeach 
        @else
    Массив пустой    
    @endif
   
</x-layout>