<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index() {
        $alumnis = Alumni::all();
        return view('alumnis.index', compact('alumnis'));
    }
    
    public function create() {
        return view('alumnis.create');
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:alumnis',
            'tahun_lulus' => 'required|integer',
            'jurusan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
    
        Alumni::create($validated);
        return redirect()->route('alumnis.index')->with('success', 'Data alumni berhasil ditambahkan.');
    }
    
    public function edit($id) {
        $alumni = Alumni::findOrFail($id);
        return view('alumnis.edit', compact('alumni'));
    }
    
    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:alumnis,email,'.$id,
            'tahun_lulus' => 'required|integer',
            'jurusan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
    
        Alumni::whereId($id)->update($validated);
        return redirect()->route('alumnis.index')->with('success', 'Data alumni berhasil diperbarui.');
    }
    
    public function destroy($id) {
        Alumni::destroy($id);
        return redirect()->route('alumnis.index')->with('success', 'Data alumni berhasil dihapus.');
    }
    
}
