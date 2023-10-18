@extends('backend.Dash-DPL.dashboard-dpl')

@section('title', 'Nilai')
@section('second', 'dpl')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nilai Angka</th>
                            <th>Nilai Huruf</th>
                            <th>Validasi Kaprodi</th>
                            <th>Mahasiswa</th>
                            <th>Mata Kuliah</th>
                            <th>Lowongan</th>
                            <th>Nilai Magang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nilaiKonversi as $nilai)
                        <tr>
                            <td>{{ $nilai->id }}</td>
                            <td>
                                <form action="{{ route('nilai.update', ['id' => $nilai->id]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="number" name="nilai_angka" value="{{ $nilai->nilai_angka }}" min="0"
                                        max="100" required>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('nilai.update', ['id' => $nilai->id]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="nilai_huruf" value="{{ $nilai->nilai_huruf }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </form>
                            </td>
                            <td><span
                                    class="label label-{{ $nilai->validasi_kaprodi == 'Setuju' ? 'success' : 'warning' }}">{{ $nilai->validasi_kaprodi }}</span>
                            </td>
                            <td>{{ $nilai->id_mahasiswa }}</td>
                            <td>{{ $nilai->id_matkul }}</td>
                            <td>{{ $nilai->id_lowongan }}</td>
                            <td>{{ $nilai->id_nilai_magang }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="box-footer">
                    <a href="/dpl/konvers/list-nilai/" class="btn btn-default">Kembali</a>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!--/.box -->
    </div>
</div>





@endsection