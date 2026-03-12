<x-layout>
    <x-slot:title>
        {{$title}} - site.com
    </x-slot>
    @if ($age>=18)
    текст 18+
    @else 
    вы не подходите по возрасту
    @endif
</x-layout>