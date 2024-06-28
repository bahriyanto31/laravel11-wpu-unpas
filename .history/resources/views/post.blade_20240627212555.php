<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->username }}" class="hover:underline"><b>by</b>
                {{ $post['author']['name'] }}</a>
            |
            <a href="/kategori/blogs/{{ $post->kategori->id }}"
                class="hover:underline">{{ $post->kategori->nama_kategori }}</a>
            |
            {{ $post['created_at']->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
    </article>
</x-layout>
