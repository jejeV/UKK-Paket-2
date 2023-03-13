@extends('layouts.admin')

@section('title', 'Petugas')

@section('header', 'Data Petugas')

@section('content')
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Weekly Top Products
                    </h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <a href="{{ route('petugas.create') }}" class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"><i data-feather="plus" class="hidden sm:block w-4 h-4 mr-2"></i>Tambah Petugas</a>
                        <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">NO</th>
                                <th class="whitespace-nowrap">NAMA PETUGAS</th>
                                <th class="text-center whitespace-nowrap">USERNAME</th>
                                <th class="text-center whitespace-nowrap">TELP</th>
                                <th class="text-center whitespace-nowrap">LEVEL</th>
                                <th class="text-center whitespace-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($petugas as $k => $v)
                            <tr class="intro-x">
                                <td>{{ $k += 1 }}</td>
                                <td>{{ $v->nama_petugas }} </td>
                                <td class="text-center">{{ $v->username }}</td>
                                <td class="text-center">{{ $v->telp }}</td>
                                <td class="text-center">{{ $v->level }}</td>
                                <td class="text-center">
                                    <a href="{{ route('petugas.edit', $v->id_petugas) }}" class="btn btn-warning w-24 inline-block mr-1 mb-2 text-white">Show</a>
                                </td>
                                {{-- <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-danger" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                    <nav class="w-full sm:w-auto sm:mr-auto">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                            </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                            </li>
                        </ul>
                    </nav>
                    <select class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>
</div>
@endsection
