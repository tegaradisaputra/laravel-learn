<x-layout>
    <h1>daftar siswa</h1>
    <ul>
        @foreach ($data as $item)
            <li>
                <h3>{{$item['nama']}} - {{$item['nilai']}}</h3>
            </li>
        @endforeach

    <x-slot:footer>
        <strong>siswa page</strong>
    </x-slot:footer>
</x-layout>