<x-layout>
    <!-- Form diubah untuk Lebar Maksimal (max-w-6xl) dan menghilangkan shadow/border -->
    <h1 class="text-3xl mb-8 font-extrabold text-gray-800 border-b pb-4">Create Siswa Baru</h1>
    <form action="{{ route('siswa.store') }}" method="POST" class="bg-white px-8 pt-6 pb-8 mb-4 max-w-6xl mx-auto sm:px-12">
        @csrf
        
        <!-- Input Nama Lengkap -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="nama">
            Nama Lengkap
            </label>
            <!-- Styling Input diubah menjadi minimal (garis bawah) -->
            <input
            class="appearance-none border-b-2 border-gray-300 bg-gray-50 w-full py-3 px-0 text-gray-700 leading-tight focus:outline-none focus:border-blue-600 transition duration-300 text-lg"
            id="nama"
            name="nama"
            type="text"
            placeholder="Masukkan Nama Lengkap"
            value="{{ old('nama') }}"
            >
            @error('nama')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Tanggal Lahir -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="tanggal_lahir">
            Tanggal Lahir
            </label>
            <input
            class="appearance-none border-b-2 border-gray-300 bg-gray-50 w-full py-3 px-0 text-gray-700 leading-tight focus:outline-none focus:border-blue-600 transition duration-300 text-lg"
            id="tanggal_lahir"
            name="tanggal_lahir"
            type="date"
            value="{{ old('tanggal_lahir') }}"
            >
            </div>
            @error('tanggal_lahir')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror

        <!-- Input Jurusan (Teks Biasa) -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="jurusan">
            Jurusan
            </label>
            <input
            class="appearance-none border-b-2 border-gray-300 bg-gray-50 w-full py-3 px-0 text-gray-700 leading-tight focus:outline-none focus:border-blue-600 transition duration-300 text-lg"
            id="jurusan"
            name="jurusan"
            type="text"
            placeholder="Masukkan Nama Jurusan"
            value="{{ old('jurusan') }}"
            >
            @error('jurusan')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input Nilai Ujian -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="nilai">
            Nilai Ujian
            </label>
            <input
            class="appearance-none border-b-2 border-gray-300 bg-gray-50 w-full py-3 px-0 text-gray-700 leading-tight focus:outline-none focus:border-blue-600 transition duration-300 text-lg"
            id="nilai"
            name="nilai"
            type="number"
            placeholder="Masukkan Nilai (0-100)"
            value="{{ old('nilai') }}"
            >
            @error('nilai')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Dropdown Mentor (Menggunakan sintaks Blade) -->
        <div class="mb-8">
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="mentor_id">
            Pilih Mentor
            </label>
            <select
            class="appearance-none border-b-2 border-gray-300 bg-gray-50 w-full py-3 px-0 text-gray-700 leading-tight focus:outline-none focus:border-blue-600 transition duration-300 text-lg"
            id="mentor_id"
            name="mentor_id"
            >
            <option value="" disabled selected>-- Pilih Mentor --</option>
            @foreach ( $mentors as $mentor )
                <option value="{{ $mentor->id }}">{{ $mentor->nama }}</option>
            @endforeach
            </select>

            @error('mentor_id')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tombol Simpan -->
        <div class="flex items-center justify-start">
            <button
            class="bg-teal-600 hover:bg-teal-800 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out shadow-lg shadow-blue-300/50"
            type="submit"
            >
            Simpan Data Siswa
            </button>
        </div>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form> --}}
    <x-slot:footer>
        <strong>siswa page</strong>
    </x-slot:footer>
</x-layout>