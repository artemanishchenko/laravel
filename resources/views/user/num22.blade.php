<x-layout>
    <x-slot:title>
    {{$title}} - site.com  
  </x-slot>
<ul>
  @foreach ($arr as $key => $elem)
	<li>{{ $key }}-{{ $elem }}</li>
@endforeach
</ul>


</x-layout>