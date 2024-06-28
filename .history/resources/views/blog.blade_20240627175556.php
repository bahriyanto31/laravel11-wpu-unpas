<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900"></h2>
            <div class="text-base text-gray-500">
                <a href="#">Bahri</a> | 1 January 2024
            </div>
            <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero perspiciatis
                doloremque temporibus tempora ab
                impedit quisquam corporis. Magni iure, accusamus adipisci tempora mollitia earum nesciunt obcaecati
                ullam
                illum exercitationem amet.</p>
            <a href="#" class="font-medium text-blue-500 hover:underline">Read More</a>
        </article>
    @endforeach
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 2</h2>
        <div class="text-base text-gray-500">
            <a href="#">Bahri</a> | 2 February 2024
        </div>
        <p class="my-4 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis eos pariatur
            doloremque. Nulla fuga quasi molestias tempora! Molestias reprehenderit et labore voluptatum doloremque
            itaque repudiandae, suscipit cupiditate quas delectus unde.</p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read More</a>
    </article>
</x-layout>
