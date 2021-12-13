@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="float-left">Edit Kriteria</h2>
                    </form>
                </div>

                <div class="card-body">
                    <div class="row">
                        <form action="{{route('kriteria.update',['id' => Request::segment(3)])}}" method="POST" class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label for="kode">Kode <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" class="form-control" value="{{$data->kode}}">
                                @error('kode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Kriteria <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" class="form-control" value="{{$data->nama}}">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="atribut">Atribut <span class="text-danger">*</span></label>
                                <select name="atribut" class="form-control @error('atribut') is-invalid @enderror" class="form-control">
                                    <option value="">-- Pilih Atribut --</option>
                                    <option value="cost" {{($data->atribut=='cost')?'selected':''}}>Cost</option>
                                    <option value="benefit" {{($data->atribut=='benefit')?'selected':''}}>Benefit</option>
                                </select>
                                @error('atribut')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bobot">Bobot <span class="text-danger">*</span></label>
                                <input type="text" name="bobot" class="form-control @error('bobot') is-invalid @enderror" class="form-control" value="{{$data->bobot}}">
                                @error('bobot')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="float-right">
                                <a href="{{route('kriteria')}}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection