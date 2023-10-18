@extends('backend.Dash-Mitra.dashboard-mitra')

@section('title', 'Daftar PL')
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
                            <th>Nama</th>
                            <th>No. Telepon</th>
                            <th>Email</th>
                            <th>Id Mitra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mitras as $mitra)
                        <tr>
                            <td>{{ $mitra->id }}</td>
                            <td>{{ $mitra->nama }}</td>
                            <td>{{ $mitra->notelp }}</td>
                            <td>{{ $mitra->email }}</td>
                            <td>{{ $mitra->id_mitra }}</td>
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
