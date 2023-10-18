@extends('backend.Dash-Kaprodi.dashboard-kaprodi')

@section('title', 'Program Magang')
@section('second', 'Kaprodi')
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
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kegiatan</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Akhir</th>
                            <th>Posisi Mahasiswa</th>
                            <th>Lowongan</th>
                            <th>PL Mitra</th>
                            <th>Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programMagangs as $programMagang)
                        <tr>
                            <td>{{ $programMagang->id }}</td>
                            <td>{{ $programMagang->kegiatan }}</td>
                            <td>{{ $programMagang->waktu_mulai }}</td>
                            <td>{{ $programMagang->waktu_akhir }}</td>
                            <td>{{ $programMagang->posisi_mahasiswa }}</td>
                            <td>{{ $programMagang->id_lowongan }}</td>
                            <td>{{ $programMagang->id_pl_mitra }}</td>
                            <td>
                                <form action="{{ route('program-magang.konfirmasi', ['id' => $programMagang->id]) }}"
                                    method="POST">
                                    @csrf
                                    <input type="checkbox" name="konfirmasi"
                                        {{ $programMagang->konfirmasi ? 'checked' : '' }}>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{ $programMagangs->links() }}
                <!-- Menampilkan link paginasi -->
            </div>
        </div>
        <!-- /.box -->
    </div>

</div>
@endsection