@extends('layouts.app')
@section('title', 'Detail Surat Masuk')
@section('content')
<div class="card shadow-sm p-4">
<h2 class="fw-bold mb-4">Detail Surat Masuk</h2>
<table class="table">
<tr><th>Nomor Surat</th><td>{{ $surat['nomor'] }}</td></tr>
<tr><th>Tanggal</th><td>{{ $surat['tanggal'] }}</td></tr>
<tr><th>Pengirim</th><td>{{ $surat['pengirim'] }}</td></tr>
<tr><th>Perihal</th><td>{{ $surat['perihal'] }}</td></tr>
</table>
<a href="{{ route('surat-masuk.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
