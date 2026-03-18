<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
    @if (count($arr)>0)
     {{ array_sum($arr) }}
     @endif
     @if (count($arr)==0)
     В массиве нет элементов
     @endif
</x-layout>