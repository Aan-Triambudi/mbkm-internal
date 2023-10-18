@extends('backend.Dash-Kaprodi.dashboard-kaprodi')
@section('title','Konversi Nilai')
@section('second','Kaprodi')
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
                            <th>Matkul</th>
                            <th>Lowongan</th>
                            <th>Nilai Magang </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nilaiKonversis as $nilaiKonversi)
                        <tr>
                            <td>{{ $nilaiKonversi->id }}</td>
                            <td>{{ $nilaiKonversi->nilai_angka }}</td>
                            <td>{{ $nilaiKonversi->nilai_huruf }}</td>
                            <td>
                                <form action="{{ route('konversi-nilai.update', ['id' => $nilaiKonversi->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="validasi_kaprodi"
                                            value="Setuju"
                                            {{ $nilaiKonversi->validasi_kaprodi == 'Setuju' ? 'checked' : '' }}>
                                        <label class="form-check-label">Setuju</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="validasi_kaprodi"
                                            value="Tidak Setuju"
                                            {{ $nilaiKonversi->validasi_kaprodi == 'Tidak Setuju' ? 'checked' : '' }}>
                                        <label class="form-check-label">Tidak Setuju</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </form>
                            </td>
                            <td>{{ $nilaiKonversi->id_mahasiswa }}</td>
                            <td>{{ $nilaiKonversi->id_matkul }}</td>
                            <td>{{ $nilaiKonversi->id_lowongan }}</td>
                            <td>{{ $nilaiKonversi->id_nilai_magang }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="box-footer">
                    <a href="/kaprodi/laporan-mhs/list-konversinilai/" class="btn btn-default">Kembali</a>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!- - /.box -->
    </div>
</div>

@endsection