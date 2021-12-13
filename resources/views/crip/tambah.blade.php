@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Tambah Nilai Crips</h2>
                    </form>
                </div>

                <div class="card-body">
                    <div class="row">
                        <form action="{{route('crip.simpan')}}" method="POST" class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label for="kriteria">Kriteria <span class="text-danger">*</span></label>
                                <select name="kriteria" class="form-control @error('kriteria') is-invalid @enderror" class="form-control" value="{{old('kriteria')}}">
                                    <option value="">-- Pilih Kriteria --</option>
                                    @foreach($kriteria as $k)
                                    <option value="{{$k->id}}">{{$k->kode." - ".$k->nama}}</option>
                                    @endforeach
                                </select>
                                @error('kriteria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_crip">Keterangan Crips <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nama_crip') is-invalid @enderror" name="nama_crip" class="form-control" value="{{old('nama_crip')}}">
                                @error('nama_crip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nilai_crip">Nilai <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nilai_crip') is-invalid @enderror" name="nilai_crip" class="form-control" value="{{old('nilai_crip')}}">
                                @error('nilai_crip')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="float-right">
                                <a href="{{route('crip')}}" class="btn btn-secondary">Kembali</a>
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