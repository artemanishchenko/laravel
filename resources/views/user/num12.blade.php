<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
	</x-slot>
    <p>  Год: @if (!$year)
		@php echo date('Y')
		@endphp
		@else
		{{$year}}
		@endif
	</p>
	<p> Месяц: @if (!$month)
		@php echo date('m')
		@endphp
		@else
		{{$month}}
		@endif
	</p>
	<p>
		День: @if (!$day)
		@php echo date('d')
		@endphp
		@else 
		{{$day}}
		@endif

</x-layout>