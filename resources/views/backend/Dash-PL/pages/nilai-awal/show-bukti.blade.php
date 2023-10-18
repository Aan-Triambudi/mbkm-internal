@extends('backend.Dash-PL.dashboard-pl')

@section('title', 'Nilai Awal')
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
                            <th>Nilai Angka</th>
                            <th>Nilai Huruf</th>
                            <th>Mahasiswa</th>
                            <th>Kompetensi Program</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>85</td>
                            <td>A</td>
                            <td>Mahasiswa A</td>
                            <td>Kompetensi Program A</td>
                            <td>2023-10-15 14:30:00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>78</td>
                            <td>B</td>
                            <td>Mahasiswa B</td>
                            <td>Kompetensi Program B</td>
                            <td>2023-10-16 10:15:00</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
                <div class="box-footer">
                    <a href="/master-program/list-niwal/" class="btn btn-default">Kembali</a>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection