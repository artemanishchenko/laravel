<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
 <ul>
    @foreach ($arr as $elem)
	@if ($loop->remaining=3)
    <li><i>{{ $elem }}</i></li>
    @else 
    <li><b>{{ $elem }}</b></li>
    @endif
@endforeach
    </ul>
   </x-layout>