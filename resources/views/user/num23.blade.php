<x-layout>
    <x-slot:title>
    {{$title}} - site.com  
  </x-slot>
<ul>
  @foreach ($arr as $key => $elem)
	<li>{{ $key+1 }}-{{ $elem }}</li>
@endforeach
</ul>


</x-layout>