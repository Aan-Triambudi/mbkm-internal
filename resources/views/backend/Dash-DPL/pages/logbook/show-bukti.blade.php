@extends('backend.Dash-DPL.dashboard-dpl')

@section('title', 'Detail Logbook')
@section('second', 'DPL')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Logbook</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Program Magang</th>
                            <th scope="col">Bukti</th>
                            <th scope="col">Kegiatan</th>
                            <th scope="col">Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupedLogbooks as $logbooks)
                        @foreach($logbooks as $logbook)
                        <tr>
                            <td scope="row">{{ $logbook->mahasiswa->id }}</td>
                            <td>{{ $logbook->mahasiswa->nim }}</td>
                            <td></td>
                            <td>{{ $logbook->programMagang->kegiatan }}</td>
                            <td><a href="#" target="#">{{ $logbook->bukti }}</a></td>
                            <td>{{ $logbook->kegiatan }}</td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="/dpl/laporan-mhs/list-logbook/" class="btn btn-default">Kembali</a>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection