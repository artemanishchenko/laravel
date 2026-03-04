<x-layout>
	<x-slot:title>
		{{ $title }}
		</x-slot>
        @if(!$city)
        москва
        @else
        {{$city}}
        @endif
</x-layout>