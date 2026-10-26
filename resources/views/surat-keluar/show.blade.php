@extends('layouts.app')
@section('title', 'Detail Surat Keluar')
@section('content')
<div class="card shadow-sm p-4">
<h2 class="fw-bold mb-4">Detail Surat Keluar</h2>
<table class="table">
<tr><th>Nomor Surat</th><td>{{ $surat['nomor'] }}</td></tr>
<tr><th>Tanggal</th><td>{{ $surat['tanggal'] }}</td></tr>
<tr><th>Tujuan</th><td>{{ $surat['tujuan'] }}</td></tr>
<tr><th>Perihal</th><td>{{ $surat['perihal'] }}</td></tr>
</table>
<a href="{{ route('surat-keluar.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
