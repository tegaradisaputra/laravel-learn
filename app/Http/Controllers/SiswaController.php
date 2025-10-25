<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Siswa::with('mentor')->orderBy('nilai', 'desc')->paginate(10);
        return view('siswa.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mentors = Mentor::all();
        return view('siswa.create', ['mentors' => $mentors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama' => ['required', 'string', 'min:3'],
            'tanggal_lahir' => ['required', 'date'],
            'jurusan' => ['required', 'string', 'min:3'],
            'nilai' => ['required', 'numeric','min:0', 'max:100'],
            'mentor_id' => ['required', 'exists:mentors,id'],
        ]);



        Siswa::create([
            'nama' => $validated['nama'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'jurusan' => $validated['jurusan'],
            'nilai' => $validated['nilai'],
            'mentor_id' => $validated['mentor_id'],
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dibuat');
    }
    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
        // $siswa = Siswa::with('mentor')->findorFail($id);
        $siswa->load('mentor');
        return view('siswa.show', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
        // $siswa = Siswa::findorFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
