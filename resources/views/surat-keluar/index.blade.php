@extends('layouts.app')
@section('title', 'Surat Keluar')
@section('content')
<h2 class="fw-bold">Data Surat Keluar</h2>
<p class="text-secondary">Daftar surat yang dikirim.</p>
<div class="card shadow-sm p-3">
<div class="table-responsive">
<table class="table table-hover align-middle">
<thead><tr><th>No.</th><th>Nomor Surat</th><th>Tanggal</th><th>Tujuan</th><th>Perihal</th><th>Aksi</th></tr></thead>
<tbody>
@forelse ($surat as $item)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $item['nomor'] }}</td>
<td>{{ $item['tanggal'] }}</td>
<td>{{ $item['tujuan'] }}</td>
<td>{{ $item['perihal'] }}</td>
<td><a class="btn btn-sm btn-success" href="{{ route('surat-keluar.show', $item['id']) }}">Detail</a></td>
</tr>
@empty
<tr><td colspan="6" class="text-center">Belum ada surat.</td></tr>
@endforelse
</tbody>
</table>
</div>
</div>
@endsection
