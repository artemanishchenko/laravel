<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
    <ul>
    @foreach ($strs as $elem)
	<li>{{ $loop->iteration }}
	{{ $elem }}</li>
@endforeach
    </ul>
   </x-layout>