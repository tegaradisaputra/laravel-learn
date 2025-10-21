<x-layout>
    <h1 class="text-xl mb-5 font-bold">daftar siswa</h1>

    <div class="overflow-x-auto">
    <table class="min-w-full divide-y-2 divide-gray-200">
        <thead class="ltr:text-left rtl:text-right">
            <tr class="*:font-medium *:text-gray-900">
                <th class="px-3 py-2 whitespace-nowrap">Nama</th>
                <th class="px-3 py-2 whitespace-nowrap">Tanggal lahir</th>
                <th class="px-3 py-2 whitespace-nowrap">Jurusan</th>
                <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @foreach ($data as $item)
            <tr class="*:text-gray-900 *:first:font-medium">
                <td class="px-3 py-2 whitespace-nowrap">{{$item['nama']}}</td>
                <td class="px-3 py-2 whitespace-nowrap">04/06/1262</td>
                <td class="px-3 py-2 whitespace-nowrap">Vampire Warrior</td>
                <td class="px-3 py-2 whitespace-nowrap">{{$item['nilai']}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

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