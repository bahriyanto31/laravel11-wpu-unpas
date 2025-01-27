<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/post/{{ $post['slug'] }}">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | {{ $post['created_at'] }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
        <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More</a>
    </article>
</x-layout>
