@extends('backend.layouts.master')

@section('content')
<div class="col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h4 class="card-title">
                <span class="fa fa-edit mr-3"></span>
                Form Input Edit Data Barang
            </h4>

            <div class="card-tools">
                <a href="{{ route('backend.barang.index') }}" class="btn btn-danger btn-xs px-3">
                    <span class="fa fa-arrow-left mr-3"></span>
                    Kembali Ke Halaman Daftar Data
                </a>
            </div>
        </div>
        <div class="card-body py-2">
            <form action="{{ route('backend.barang.update', $barang->FK_BRG) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang : <i class="text-danger">*</i></label>
                            <input type="text" name="kode_barang" id="kode_barang" class="form-control {{ $errors->has('kode_barang') }}" placeholder="Masukan Kode Barang" value="{{ $barang->FK_BRG }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('kode_barang') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang : <i class="text-danger">*</i></label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control {{ $errors->has('nama_barang') }}" placeholder="Masukan Nama Jenis" value="{{ $barang->FN_BRG }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('nama_barang') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="jenis_barang">Jenis Barang : <i class="text-danger">*</i></label>
                            <select name="jenis_barang" id="jenis_barang" class="form-control {{ $errors->has('jenis_barang') ? 'is-invalid':'' }}">
                                <option value="">- Pilih Data</option>
                                @foreach ($dataJenis as $item)
                                    <option value="{{ $item->FK_JENIS }}" {{ $barang->FK_JENIS == $item->FK_JENIS ? 'selected':'' }}>{{ $item->FN_JENIS }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('nama_barang') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="satuan_barang">Satuan Barang : <i class="text-danger">*</i></label>
                            <select name="satuan_barang" id="satuan_barang" class="form-control {{ $errors->has('satuan_barang') ? 'is-invalid':'' }}">
                                <option value="">- Pilih Data</option>
                                @foreach ($dataSatuan as $item)
                                    <option value="{{ $item->FK_SAT }}" {{ $barang->FK_SAT == $item->FK_SAT ? 'selected':'' }}>{{ $item->FN_SAT }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="harga_hna">Harga HNA : <i class="text-danger">*</i></label>
                            <input type="number" name="harga_hna" id="harga_hna" class="form-control {{ $errors->has('harga_hna') }}" placeholder="Masukan Harga HNA" value="{{ $barang->FHARGA_HNA }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('harga_hna') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual : <i class="text-danger">*</i></label>
                            <input type="number" name="harga_jual" id="harga_jual" class="form-control {{ $errors->has('harga_jual') }}" placeholder="Masukan Harga Jual" value="{{ $barang->FHARGA_JUAL }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('harga_jual') }}
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <hr class="mt-0 mb-2">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-block btn-success">
                            <span class="fa fa-check mr-3"></span>
                            Simpan Perubahan
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