<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
<table border='1'>
    <tr>
        <th> id</th>
        <th> name</th>
        <th> email</th>
        <th> age</th>
        <th> salary</th>
    </tr>
@foreach ($users8 as $user )
    <tr>
        <td>{{ $user -> id }}</td>
        <td>{{ $user -> name }}</td>
        <td>{{ $user -> email }}</td>
        <td>{{ $user -> age }}</td>
        <td>{{ $user -> salary }} рублей</td>
    </tr>
@endforeach
</table>
</x-layout>
