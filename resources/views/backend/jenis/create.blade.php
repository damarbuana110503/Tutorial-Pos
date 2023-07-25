@extends('backend.layouts.master')

@section('content')
<div class="col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h4 class="card-title">
                <span class="fa fa-edit mr-3"></span>
                Form Input Tambah Data Jenis
            </h4>

            <div class="card-tools">
                <a href="{{ route('backend.jenis.index') }}" class="btn btn-danger btn-xs px-3">
                    <span class="fa fa-arrow-left mr-3"></span>
                    Kembali Ke Halaman Daftar Data
                </a>
            </div>
        </div>
        <div class="card-body py-2">
            <form action="{{ route('backend.jenis.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kode_jenis">Kode Jenis : <i class="text-danger">*</i></label>
                            <input type="text" name="kode_jenis" id="kode_jenis" class="form-control {{ $errors->has('kode_jenis') }}" placeholder="Masukan Kode jenis" value="{{ old('kode_jenis') }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('kode_jenis') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nama_jenis">Nama Jenis : <i class="text-danger">*</i></label>
                            <input type="text" name="nama_jenis" id="nama_jenis" class="form-control {{ $errors->has('nama_jenis') }}" placeholder="Masukan Nama Jenis" value="{{ old('nama_jenis') }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('nama_jenis') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-block btn-success">
                            <span class="fa fa-check mr-3"></span>
                            Buat Data Jenis
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="reset" class="btn btn-block btn-danger">
                            <span class="fa fa-undo mr-3"></span>
                            Reset Input
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection