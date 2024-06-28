<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Halaman Contact<h3>
            <p>Ini adalah halaman contact</p>
            <p>Anda bisa menghubungi kami melalui email: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            <p>nama: {{ $name }}</p>
            <p>Terima kasih</p>
</x-layout>
