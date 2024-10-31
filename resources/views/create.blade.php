@extends('layouts.app') @section('content') <div class="container">
  <h1>Tambah Data Alumni</h1> @if ($errors->any()) <div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
  </div> @endif <form action="{{ route('alumnis.store') }}" method="POST"> @csrf <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
      <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
    </div>
    <div class="mb-3">
      <label for="jurusan" class="form-label">Jurusan</label>
      <input type="text" class="form-control" id="jurusan" name="jurusan" required>
    </div>
    <div class="mb-3">
      <label for="pekerjaan" class="form-label">Pekerjaan</label>
      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea class="form-control" id="alamat" name="alamat" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('alumnis.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div> @endsection