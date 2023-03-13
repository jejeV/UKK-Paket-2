@extends('layouts.admin')

@section('title', 'Detail Masyarakat')

@section('header')
    <a href="{{ route('masyarakat.index') }}" class="text-primary">Data Masyarakat</a>
    <a href="#" class="text-grey">></a>
    <a href="#" class="text-grey">Detail Masyarakat</a>
@endsection

@section('content')
<div class="grid grid-cols-12 gap-6 mt-4">
    <div class="intro-y box col-span-12 lg:col-span-6">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
            <h2 class="font-medium text-base mr-auto">Pengaduan Masyarakat</h2>
        </div>
        <div class="p-5" id="bordered-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>NIK</th>
                                <td>{{ $masyarakat->nik }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $masyarakat->nama }}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{ $masyarakat->username }}</td>
                            </tr>
                            <tr>
                                <th>No Telp</th>
                                <td>{{ $masyarakat->telp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
