@extends('backend.Dash-Mitra.dashboard-mitra')

@section('title', 'Logbook Mahasiswa')
@section('second', 'Mitra')
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
                            <th>Bukti</th>
                            <th>Program Magang</th>
                            <th>Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logbooks as $logbook)
                        <tr>
                            <td>{{ $logbook->id }}</td>
                            <td>{{ $logbook->kegiatan }}</td>
                            <td><a href="/laporan-mhs/logbook/{{ $logbook->id }}">{{ $logbook->bukti }}</a></td>
                            <td>{{ $logbook->programMagang->kegiatan }}</td>
                            <td>{{ $logbook->mahasiswa->nim }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                {{ $logbooks->links() }}
                <!-- Menampilkan link paginasi -->
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection