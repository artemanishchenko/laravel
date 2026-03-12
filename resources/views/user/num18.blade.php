<x-layout>
    <x-slot:title>
    {{$title}} - site.com     
    </x-slot>

    @if (count($arr)>0)
    @php
    @endphp
    @else
    кол-во элементов в массиве = 0
    @endif
</x-layout>