@extends('layouts.admin')

@section('title', 'Halaman Laporan')

@section('header', 'Laporan Pengaduan')

@section('content')
<div class="grid grid-cols-12 gap-6 mt-4">
    <div class="intro-y box col-span-12 lg:col-span-4">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
            <h2 class="font-medium text-base mr-auto">Cari Berdasarkan Tanggal</h2>
        </div>
        <div class="p-5" id="bordered-table">
            <div class="preview">
                <div class="overflow-x-auto">
                    <form action="{{ route('laporan.getLaporan') }}" method="POST">
                        @csrf
                        <div>
                            <input id="tanggal_awal" name="from" type="text" class="form-control"
                                placeholder="Tanggal Awal" onfocusin="(this.type='date')"
                                onfocusout="(this.type='text')">
                        </div>
                        <div class="mt-3">
                            <input id="tanggal_akhir" name="to" type="text" class="form-control"
                                placeholder="Tanggal Akhir" onfocusin="(this.type='date')"
                                onfocusout="(this.type='text')">
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Cari Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box col-span-12 lg:col-span-8">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
            <h2 class="font-medium text-base mr-auto">Data Berdasarkan Tanggal</h2>
            <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                @if($pengaduan ?? '')
                <a href="{{ route('laporan.cetakLaporan', ['from'=> $from, 'to'=> $to]) }}" class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"><i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i>Export to PDF</a>
                @endif
            </div>
        </div>
        <div class="p-5" id="bordered-table">
            <div class="overflow-x-auto text-center">
                <div class="preview">
                    @if ($pengaduan ?? '')
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">NO</th>
                                <th class="whitespace-nowrap">TANGGAL</th>
                                <th class="text-center whitespace-nowrap">ISI LAPORAN</th>
                                <th class="text-center whitespace-nowrap">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $k => $v)
                            <tr>
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->tgl_pengaduan }}</td>
                                <td>{{ $v->isi_laporan }}</td>
                                <td>
                                    @if( $v->status == '0' )
                                      <a href="#" class="btn btn-rounded btn-pending-soft w -24 mr-1 mb-2">Pending</a>
                                    @elseif( $v->status == 'proses' )
                                      <a href="#" class="btn btn-rounded btn-dark-soft w-24 mr-1 mb-2">Proses</a>
                                    @else
                                      <a href="#" class="btn btn-rounded btn-success-soft w-24 mr-1 mb-2">Selesai</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="overflow-x-auto text-center">
                        Tidak ada data
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
