<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
    <ul>
    @foreach ($strs as $elem)
	<li>{{ $loop->index }}
	{{ $elem }}</li>
@endforeach
    </ul>
   
</x-layout>