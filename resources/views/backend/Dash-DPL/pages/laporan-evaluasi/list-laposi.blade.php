@extends('backend.Dash-DPL.dashboard-dpl')

@section('title', 'List Laporan Evaluasi Mahasiswa')
@section('second', 'DPL')
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
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($groupedLogbooks as $nim => $logbooks)
                        @php
                        // Ambil satu logbook dari grup ini
                        $logbook = $logbooks->first();
                        @endphp
                        <tr>
                            <td>{{ $logbook->mahasiswa->id }}</td>
                            <td>{{ $nim }}</td>
                            <td>

                            </td>
                            <td>
                                <a href="/dpl/laporan-evaluasi/{{ $logbook->mahasiswa->id }}" class="btn-dark">view</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

                <!-- Menampilkan link paginasi -->
            </div>
        </div>
        <!-- /.box -->
    </div>



    <style>
    .bukti-column {
        max-width: 200px;
        /* Tentukan lebar maksimum kolom bukti di sini */
        overflow: hidden;
        text-overflow: ellipsis;
        /* Menyembunyikan teks yang berlebihan dan menampilkan elipsis (...) */
        white-space: nowrap;
        /* Mencegah teks melanjutkan baris */
    }
    </style>
    @endsection