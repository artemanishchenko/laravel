<x-layout>
    <x-slot:title>
    {{$title}} - site.com  
  </x-slot>

  <ul>
		@foreach ($arr as $elem)
			<li>{{ $elem*$elem }}</li>
		@endforeach
	</ul>

</x-layout>