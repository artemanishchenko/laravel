<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
<table border='1'>
    <tr>
        <th> name</th>
        <th> email</th>
    </tr>
@foreach ($users8 as $user )
    <tr>
        <td>{{ $user -> name }}</td>
        <td>{{ $user -> user_email }}</td>
    </tr>
@endforeach
</table>
</x-layout>
