@extends('backend.Dash-Mitra.dashboard-mitra')

@section('title', 'Pendamping Lapang')
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
                            <th>Dosen</th>
                            <th>Mahasiswa</th>
                            <th>PL Mitra</th>
                            <th>Lowongan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendampingLapangMahasiswas as $pendampingLapangMahasiswa)
                        <tr>
                            <td>{{ $pendampingLapangMahasiswa->id }}</td>
                            <td>{{ $pendampingLapangMahasiswa->dosen->nama }}</td>
                            <td>{{ $pendampingLapangMahasiswa->mahasiswa->id }}</td>
                            <td>
                                <form
                                    action="{{ route('updatePendampingLapang', ['id' => $pendampingLapangMahasiswa->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="id_pl_mitra" required>
                                        @foreach($plMitraList as $plMitra)
                                        <option value="{{ $plMitra->id }}"
                                            {{ $pendampingLapangMahasiswa->id_pl_mitra == $plMitra->id ? 'selected' : '' }}>
                                            {{ $plMitra->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </form>
                            </td>

                            <td>{{ $pendampingLapangMahasiswa->lowongan->nama }}</td>
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