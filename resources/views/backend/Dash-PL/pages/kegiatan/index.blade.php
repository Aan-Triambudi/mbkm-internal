@extends('backend.Dash-PL.dashboard-pl')

@section('title', 'Kegiatan')
@section('second', 'PL')
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
                            <th>Kegiatan</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Akhir</th>
                            <th>Posisi Mahasiswa</th>
                            <th>Validasi Kaprodi</th>
                            <th>Lowongan</th>
                            <th>PL Mitra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatans as $kegiatan)
                        <tr>
                            <td>{{ $kegiatan->id }}</td>
                            <td>
                                <form action="{{ route('update.kegiatan', ['id' => $kegiatan->id]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="kegiatan" class="form-control"
                                        value="{{ $kegiatan->kegiatan }}" required>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Simpan</button>
                                </form>
                            </td>
                            <td>{{ date('d-m-Y', strtotime($kegiatan->waktu_mulai)) }}</td>
                            <td>{{ date('d-m-Y', strtotime($kegiatan->waktu_akhir)) }}</td>
                            <td>
                                <form action="{{ route('update.posisi', ['id' => $kegiatan->id]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="posisi_mahasiswa" class="form-control"
                                        value="{{ $kegiatan->posisi_mahasiswa }}" required>
                                    <button type="submit" class="btn btn-primary btn-sm mt-2">Simpan</button>
                                </form>
                            </td>
                            <td><span
                                    class="label label-{{ $kegiatan->validasi_kaprodi == 'Setuju' ? 'warning' : 'success' }}">{{ $kegiatan->validasi_kaprodi }}</span>
                            </td>
                            <td>{{ $kegiatan->id_lowongan }}</td>
                            <td>{{ $kegiatan->id_pl_mitra }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection