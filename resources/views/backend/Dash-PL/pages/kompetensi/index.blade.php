@extends('backend.Dash-PL.dashboard-pl')

@section('title', 'Kompetensi')
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
                            <th>Kompetensi</th>
                            <th>Lowongan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kompetensiLowongans as $kompetensiLowongan)
                        <tr>
                            <td>{{ $kompetensiLowongan->id }}</td>
                            <td>
                                <form action="{{ route('update.kompetensi', ['id' => $kompetensiLowongan->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="kompetensi" class="form-control"
                                        value="{{ $kompetensiLowongan->kompetensi }}" required>
                                    <button type="submit" class="btn btn-primary btn-sm d-flex">Simpan</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('update.kompetensi', ['id' => $kompetensiLowongan->id]) }}"
                                    method="POST" class="d-flex">
                                    @csrf
                                    @method('PATCH')
                                    <select name="id_lowongan" class="form-control mr-2">
                                        @foreach($lowongans as $lowongan)
                                        <option value="{{ $lowongan->id }}"
                                            {{ $kompetensiLowongan->id == $lowongan->id ? 'selected' : '' }}>
                                            {{ $lowongan->nama_lowongan }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>

            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

@endsection
