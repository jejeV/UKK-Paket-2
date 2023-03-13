@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('header')
    <a href="{{ route('pengaduan.index') }}" class="text-primary">Data Pengaduan</a>
    <a href="#" class="text-grey">></a>
    <a href="#" class="text-grey">Detail Pengaduan</a>
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
                                <td>{{ $pengaduan->nik }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengaduan</th>
                                <td>{{ $pengaduan->tgl_pengaduan }}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td><img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Pengaduan" class="embed-responsive"></td>
                            </tr>
                            <tr>
                                <th>Isi Laporan</th>
                                <td>{{ $pengaduan->isi_laporan }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if( $pengaduan->status == '0' )
                                        <a href="#" class="text-danger">Pending</a>
                                    @elseif( $pengaduan->status == 'proses' )
                                        <a href="#" class="text-warning">Proses</a>
                                    @else
                                        <a href="#" class="text-success">Selesai</a>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box col-span-12 lg:col-span-6">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
            <h2 class="font-medium text-base mr-auto">Tanggapan Petugas</h2>
        </div>
        <div id="input" class="p-5">
            <form action="{{ route('tanggapan.createOrUpdate') }}" method="POST">
                @csrf
                <div>
                    <input id="regular-form-1" type="hidden" name="id_pengaduan" class="form-control" value="{{ $pengaduan->id_pengaduan }}">
                </div>
                <div class="mt-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                        @if ($pengaduan->status == '0')
                            <option selected value="0">Pending</option>
                            <option value="proses">Progress</option>
                            <option value="selesai">Done</option>
                        @elseif($pengaduan->status == 'proses')
                            <option value="0">Pending</option>
                            <option selected value="proses">Progress</option>
                            <option value="selesai">Done</option>
                        @else
                            <option value="0">Pending</option>
                            <option value="proses">Progress</option>
                            <option selected value="selesai">Done</option>
                        @endif
                    </select>
                </div>
                <div class="mt-4">
                    <label for="tanggapan" class="form-label">Tanggapan</label>
                    <textarea id="tanggapan" class="form-control" name="tanggapan" placeholder="Belum ada tanggapan" minlength="10">{{ $tanggapan->tanggapan ?? '' }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Kirim</button>
            </form>
            @if (Session::has('status'))
            <div class="alert alert-success show mt-2 text-white" role="alert">
                {{ Session::get('status') }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
