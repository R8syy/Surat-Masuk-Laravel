@extends('layouts.app')
@section('title', 'Surat Masuk')
@section('content')
<h2 class="fw-bold">Data Surat Masuk</h2>
<p class="text-secondary">Daftar surat yang diterima.</p>
<div class="card shadow-sm p-3">
<div class="table-responsive">
<table class="table table-hover align-middle">
<thead><tr><th>No.</th><th>Nomor Surat</th><th>Tanggal</th><th>Pengirim</th><th>Perihal</th><th>Aksi</th></tr></thead>
<tbody>
@forelse ($surat as $item)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $item['nomor'] }}</td>
<td>{{ $item['tanggal'] }}</td>
<td>{{ $item['pengirim'] }}</td>
<td>{{ $item['perihal'] }}</td>
<td><a class="btn btn-sm btn-primary" href="{{ route('surat-masuk.show', $item['id']) }}">Detail</a></td>
</tr>
@empty
<tr><td colspan="6" class="text-center">Belum ada surat.</td></tr>
@endforelse
</tbody>
</table>
</div>
</div>
@endsection
