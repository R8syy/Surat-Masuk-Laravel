@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="bg-white rounded-4 shadow-sm p-4 p-md-5 mb-4">
    <h1 class="fw-bold">Dashboard</h1>
    <p class="text-secondary">Selamat datang di Sistem Informasi Surat Masuk dan Surat Keluar.</p>
    <p>Kelola data surat melalui menu di bawah ini.</p>
</div>
<div class="row g-4">
    <div class="col-md-6">
        <div class="card shadow-sm p-4 h-100">
            <h4>Surat Masuk</h4>
            <p class="text-secondary">Lihat daftar surat yang diterima.</p>
            <a href="{{ route('surat-masuk.index') }}" class="btn btn-primary">Buka Surat Masuk</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm p-4 h-100">
            <h4>Surat Keluar</h4>
            <p class="text-secondary">Lihat daftar surat yang dikirim.</p>
            <a href="{{ route('surat-keluar.index') }}" class="btn btn-success">Buka Surat Keluar</a>
        </div>
    </div>
</div>
@endsection
