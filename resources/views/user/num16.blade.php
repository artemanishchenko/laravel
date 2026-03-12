<x-layout>
    <x-slot:title>
    {{$title}} - site.com
    </x-slot>
    @if ($age>18)
    текст для 18+
    @elseif ($age==18)
    текст кому 18
    @else 
    текст кому меньше 18
    @endif
</x-layout>