<x-layout>
    <x-slot:title>
    {{ $title }} - site.com
    </x-slot>
<form action="/post/new/" method="POST">
	<input name="title" value="{{ $post->title }}">
	<input name="desc" value="{{ $post->desc }}">
	<input name="date" value="{{ $post->date }}">
	<textarea name="text">{{ $post->text }}</textarea>
	<input name="submit" type="submit">
</form>
</x-layout>


