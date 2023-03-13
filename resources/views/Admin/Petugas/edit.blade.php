@extends('layouts.admin')

@section('title', 'Form Edit Petugas')

@section('header')
    <a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
    <a href="#" class="text-grey">></a>
    <a href="#" class="text-grey">Form Edit Petugas</a>
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
                    <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div>
                            <label for="nama_petugas" class="form-label">Nama Petugas</label>
                            <input id="nama_petugas" value="{{ $petugas->nama_petugas }}" type="text" class="form-control" name="nama_petugas" required>
                        </div>
                        <div class="mt-3">
                            <label for="username" class="form-label">Username</label>
                            <input id="username" value="{{ $petugas->username }}" type="text" class="form-control" name="username" required`>
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required`>
                        </div>
                        <div class="mt-3">
                            <label for="telp" class="form-label">No Telp</label>
                            <input id="telp" type="number" value="{{ $petugas->telp }}" class="form-control" name="telp" required`>
                        </div>
                        <div class="mt-3">
                            <label for="level">Level</label>
                            <div class="input-group mt-3">
                                <select name="level" id="level" class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                    @if ($petugas->level == 'admin')
                                    <option selected value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                    @else
                                    <option value="admin">Admin</option>
                                    <option selected value="petugas">Petugas</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-white w-24 mr-1 mt-4">Update</button>
                        <form action="{{ route('petugas.destroy', $petugas->id_petugas) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-24 mr-1 mt-2">Delete</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y box col-span-12 lg:col-span-6">
        <div
            class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
            <div class="dropdown ml-auto sm:hidden">
                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                    data-tw-toggle="dropdown">
                    <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                </a>
                <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                    <ul class="dropdown-content">
                        <li>
                            <a id="latest-tasks-mobile-new-tab" href="javascript:;"
                                data-tw-toggle="tab" data-tw-target="#latest-tasks-new"
                                class="dropdown-item" role="tab" aria-controls="latest-tasks-new"
                                aria-selected="true">New</a>
                        </li>
                        <li>
                            <a id="latest-tasks-mobile-last-week-tab" href="javascript:;"
                                data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week"
                                class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist">
                <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                    <a href="javascript:;" class="nav-link py-5 active"
                        data-tw-target="#latest-tasks-new" aria-controls="latest-tasks-new"
                        aria-selected="true" role="tab">
                        New
                    </a>
                </li>
                <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                    <a href="javascript:;" class="nav-link py-5"
                        data-tw-target="#latest-tasks-last-week" aria-selected="false" role="tab">
                        Last Week
                    </a>
                </li>
            </ul>
        </div>
        <div class="p-5">
            <div class="tab-content">
                <div id="latest-tasks-new" class="tab-pane active" role="tabpanel"
                    aria-labelledby="latest-tasks-new-tab">
                    <div class="flex items-center">
                        <div class="border-l-2 border-primary dark:border-primary pl-4">
                            <a href="" class="font-medium">Create New Campaign</a>
                            <div class="text-slate-500">10:00 AM</div>
                        </div>
                        <div class="form-check form-switch ml-auto">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="border-l-2 border-primary dark:border-primary pl-4">
                            <a href="" class="font-medium">Meeting With Client</a>
                            <div class="text-slate-500">02:00 PM</div>
                        </div>
                        <div class="form-check form-switch ml-auto">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                    <div class="flex items-center mt-5">
                        <div class="border-l-2 border-primary dark:border-primary pl-4">
                            <a href="" class="font-medium">Create New Repository</a>
                            <div class="text-slate-500">04:00 PM</div>
                        </div>
                        <div class="form-check form-switch ml-auto">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
