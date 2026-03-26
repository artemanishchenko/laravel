<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
@foreach ($posts as $post )
    <div>
		<div>{{ $post->title }}</div>
		<div>
			{{ $post->slug }}
		</div>
        <div>
			{{ $post->age }}
		</div>
        <div>
			{{ $post->salary }}
		</div>
	</div>
@endforeach
</x-layout>