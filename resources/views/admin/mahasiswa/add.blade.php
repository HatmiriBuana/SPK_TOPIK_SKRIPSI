@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Mahasiswa</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Mahasiswa</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.mahasiswa.store') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" name="role_id" value="1">
                                <div class="form-group col-md-6">
                                    <label>Nama</label>
                                    <input name="name" type="text" class="form-control" placeholder="Siti Khasanah">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nim</label>
                                    <input name="nim" type="text" class="form-control" placeholder="2023445888">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Prodi</label>
                                    {{-- <input name="study_program" type="text" class="form-control" placeholder="Informatika"> --}}
                                    <select name="study_program" class="form-control">
                                        <option value="">Pilih Prodi</option>
                                        <option value="D4 Teknologi Informasi">D4 Teknologi Informasi</option>
                                        <option value="D4 Sistem Informasi Bisnis">D4 Sistem Informasi Bisnis</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jurusan</label>
                                    <input name="major" type="text" class="form-control" placeholder="Fakultas Teknik">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kelas</label>
                                    {{-- <input name="class" type="text" class="form-control" placeholder="Informatika"> --}}
                                    <select name="class" class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        <option value="TI 4A">TI 4A</option>
                                        <option value="TI 4B">TI 4B</option>
                                        <option value="TI 4C">TI 4C</option>
                                        <option value="TI 4D">TI 4D</option>
                                        <option value="TI 4E">TI 4E</option>
                                        <option value="TI 4F">TI 4F</option>
                                        <option value="TI 4G">TI 4G</option>
                                        <option value="TI 4H">TI 4H</option>
                                        <option value="TI 4I">TI 4I</option>
                                        <option value="SI 4A">SI 4A</option>
                                        <option value="SI 4B">SI 4B</option>
                                        <option value="SI 4C">SI 4C</option>
                                        <option value="SI 4D">SI 4D</option>
                                        <option value="SI 4E">SI 4E</option>
                                        <option value="SI 4F">SI 4F</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input name="username" type="text" class="form-control" placeholder="username">
                                </div>
                                {{-- <div class="form-group col-md-6">
                                    <label>email</label>
                                    <input name="email" type="text" class="form-control" placeholder="email">
                                </div> --}}
                                {{-- <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input name="phone" type="text" class="form-control" placeholder="Informatika">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>jenis kelamin</label>
                                    <select name="gender" class="form-control">
                                        <option value="">Choose your gender</option>
                                        <option value="Laki-laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div> --}}
                                <div class="form-group col-md-12">
                                    <label>Password</label>
                                    <input name="password" type="text" class="form-control" placeholder="Informatika">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection