<x-layout>
    <h1>Hello form about view, I am {{$data}}</h1>
    <p>Age: {{$age}}</p>

    @if ($age > 17)
        <h3>calon mahasiswa itb</h3>
    @else
        <h3>siswa</h3>
    @endif

    <x-slot:footer>
        <strong>about page</strong>
    </x-slot:footer>
</x-layout>