@extends('layouts.master')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12 card-deck" style="display: none;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-left">Hasil Analisa</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Nama</th>
                                    @foreach($kriteria as $krit)
                                        <th class="text-center">{{$krit->nama}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($alternatif))
                                    @foreach($alternatif as $data)
                                        <tr>
                                            <td>{{$data->nama_alternatif}}</td>
                                            @foreach($data->crip as $crip)
                                                <td>{{$crip->nama_crip}}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="{{(count($kriteria)+1)}}" class="text-center">Data tidak ditemukan</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Kode</th>
                                    @foreach($kriteria as $krit)
                                        <th class="text-center">{{$krit->kode}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($alternatif))
                                    @foreach($alternatif as $data)
                                        <tr>
                                            <td>{{$data->kode_alternatif}}</td>
                                            @foreach($data->crip as $crip)
                                                <td>{{$crip->nilai_crip}}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="{{(count($kriteria)+1)}}" class="text-center">Data tidak ditemukan</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 card-deck mt-4" style="display: none;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-left">Normalisasi</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center">Kode</th>
                                    <?php $bobot = [] ?>
                                    @foreach($kriteria as $krit)
                                        <?php $bobot[$krit->id] = $krit->bobot ?>
                                        <th class="text-center">{{$krit->kode}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($alternatif))
                                    <?php $rangking = []; ?>
                                    @foreach($alternatif as $data)
                                        <tr>
                                            <td>{{$data->kode_alternatif}}</td>
                                            <?php $total = 0;?>
                                            @foreach($data->crip as $crip)
                                                @if($crip->kriteria->atribut == 'cost')
                                                    <?php $normalisasi = ($kode_krit[$crip->kriteria->id]/$crip->nilai_crip); ?>
                                                @elseif($crip->kriteria->atribut == 'benefit')
                                                    <?php $normalisasi = ($crip->nilai_crip/$kode_krit[$crip->kriteria->id]); ?>
                                                @endif
                                                    <?php $total = $total+($bobot[$crip->kriteria->id]*$normalisasi);?>
                                                    <td>{{$normalisasi}}</td>
                                            @endforeach
                                            <?php $rangking[] = [
                                                'kode'  => $data->kode_alternatif,
                                                'nama'  => $data->nama_alternatif,
                                                'total' => $total
                                            ]; ?>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="{{(count($kriteria)+1)}}" class="text-center">Data tidak ditemukan</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 card-deck mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>PERANGKINGAN</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Total</th>
                                        <th>Rangking</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $columns = array_column($rangking, 'total');
                                array_multisort($columns, SORT_DESC, $rangking);
                                $i = 1;
                                foreach($rangking as $key=>$values)
                                {
                                    echo "<tr>";
                                    $max = max($columns);
                                    echo "<td>" . $values['kode'] . "</td>";
                                    echo "<td>" . $values['nama'] . "</td>";
                                    echo "<td>" . $max . "</td>";
                                    echo "<td>" . $i . "</td>";
                                    $keys = array_search($max, $columns);    
                                    unset($columns[$keys]);
                                    if(sizeof($columns) >0)
                                    if(!in_array($max,$columns))
                                        $i++;
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection