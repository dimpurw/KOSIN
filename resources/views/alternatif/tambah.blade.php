@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Tambah Alternatif</h2>
                    </form>
                </div>

                <div class="card-body">
                    <div class="row">
                        <form action="{{route('alternatif.simpan')}}" method="POST" class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label for="kode">Kode <span class="text-danger">*</span></label>
                                <input type="text" name="kode_alternatif" class="form-control @error('kode_alternatif') is-invalid @enderror" class="form-control" value="{{old('kode_alternatif')}}">
                                @error('kode_alternatif')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama <span class="text-danger">*</span></label>
                                <input type="text" name="nama_alternatif" class="form-control @error('nama_alternatif') is-invalid @enderror" class="form-control" value="{{old('nama_alternatif')}}">
                                @error('nama_alternatif')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="float-right">
                                <a href="{{route('alternatif')}}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection