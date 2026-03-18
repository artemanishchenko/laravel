<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
    <ul>
    @foreach ($strs as $elem)
	@if ($loop->first)
    <li style="{{$first}}">{{ $elem }} </li>
    @elseif ($loop->last)
    <li style="{{$last}}">{{ $elem }} </li>
    @else 
    <li>{{ $elem }}</li>
    @endif
@endforeach
    </ul>
   </x-layout>