<x-layout>
    <x-slot:title>
    {{$title}} - site.com  
  </x-slot>
<ul>
  @foreach ($arr as $key => $elem)
	@if($elem%2==0)
    <li>{{ $elem }}</li>
  @endif
@endforeach
</ul>
</x-layout>