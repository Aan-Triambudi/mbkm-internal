@extends('backend.Dash-Kaprodi.dashboard-kaprodi')
@section('title','Data Dosen')
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Program Studi</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosens as $dosen)
                        <tr>
                            <td>{{ $dosen->id }}</td>
                            <td>{{ $dosen->nama }}</td>
                            <td>{{ $dosen->notelp }}</td>
                            <td>{{ $dosen->prodi->nama }}</td>
                            <td>{{ $dosen->user->username }}</td>
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
