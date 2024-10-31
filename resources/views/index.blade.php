@extends('layouts.app') @section('content') <div class="container">
  <h1>Daftar Alumni</h1>
  <a href="{{ route('alumnis.create') }}" class="btn btn-primary mb-3">Tambah Alumni</a> @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Tahun Lulus</th>
        <th>Jurusan</th>
        <th>Pekerjaan</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody> @foreach($alumnis as $alumni) <tr>
        <td>{{ $alumni->nama }}</td>
        <td>{{ $alumni->email }}</td>
        <td>{{ $alumni->tahun_lulus }}</td>
        <td>{{ $alumni->jurusan }}</td>
        <td>{{ $alumni->pekerjaan }}</td>
        <td>{{ $alumni->alamat }}</td>
        <td>
          <a href="{{ route('alumnis.edit', $alumni->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('alumnis.destroy', $alumni->id) }}" method="POST" style="display:inline;"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
          </form>
        </td>
      </tr> @endforeach </tbody>
  </table>
</div> @endsection