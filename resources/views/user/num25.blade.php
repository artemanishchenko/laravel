<x-layout>
    <x-slot:title>
    {{$title}} - site.com  
  </x-slot>
    @if(is_array($date))
    <ul>
		@foreach ($date as $elem)
			<li>{{ $elem}}</li>
		@endforeach
	</ul>
    @else
    {{ $date }}
    @endif
</x-layout>