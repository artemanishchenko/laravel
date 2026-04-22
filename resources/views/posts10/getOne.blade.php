<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
<table border='1'>
    <tr>
        <th> id</th>
        <th> title</th>
        <th> desc</th>
        <th> text</th>
    </tr>
@foreach ($posts10 as $post )
    <tr>
        <td>{{ $post -> id }}</td>
        <td>{{ $post -> title }}</td>
        <td>{{ $post -> desc }}</td>
        <td>{{ $post -> text }}</td>
    </tr>
@endforeach
</table>
</x-layout>
