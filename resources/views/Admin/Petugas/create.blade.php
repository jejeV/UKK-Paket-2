@extends('layouts.admin')

@section('title', 'Form Tambah Petugas')

@section('header')
    <a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
    <a href="#" class="text-grey">></a>
    <a href="#" class="text-grey">Form Tambah Petugas</a>
@endsection

@section('content')
<div class="grid grid-cols-12 gap-6 mt-4">
    <div class="intro-y box col-span-12 lg:col-span-6">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
            <h2 class="font-medium text-base mr-auto">Form Tambah Petugas</h2>
        </div>
        <div class="p-5" id="bordered-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <form action="{{ route('petugas.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="nama_petugas" class="form-label">Nama Petugas</label>
                            <input id="nama_petugas" type="text" class="form-control" name="nama_petugas" required>
                        </div>
                        <div class="mt-3">
                            <label for="username" class="form-label">Username</label>
                            <input id="username" type="text" class="form-control" name="username" required`>
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required`>
                        </div>
                        <div class="mt-3">
                            <label for="telp" class="form-label">No Telp</label>
                            <input id="telp" type="number" class="form-control" name="telp" required`>
                        </div>
                        <div class="mt-3">
                            <label for="level">Level</label>
                            <div class="input-group mt-3">
                                <select name="level" id="level" class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                    <option value="petugas" selected>Pilih Level (Default Petugas)</option>
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-24 mr-1 mt-4">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-6">
        @if (Session::has('username'))
        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ Session::get('username') }}
            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $error }}
                <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </button>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
