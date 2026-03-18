<x-layout>
    <x-slot:title>
    {{$title}} - site.com  
  </x-slot>

  <ul>
		@foreach ($arr as $elem)
			<li>{{Sqrt($elem)  }} </li>
		@endforeach
	</ul>

</x-layout>