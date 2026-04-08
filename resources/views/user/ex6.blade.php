<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
@foreach ($users8 as $user )
    <div>
		<h2>{{ $user->name }}</h2>
		<div>
			{{ $user->email }}
		</div>
	</div>
@endforeach
</x-layout>
