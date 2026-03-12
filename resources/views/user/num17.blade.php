<x-layout>
    <x-slot:title>
    {{$title}} - site.com     
    </x-slot>
    @unless ($age>18)
    вы не достигли совершенолетия
    @endunless
</x-layout>