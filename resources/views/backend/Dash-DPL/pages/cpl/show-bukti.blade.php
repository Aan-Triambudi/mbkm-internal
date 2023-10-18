@extends('backend.Dash-DPL.dashboard-dpl')

@section('title', 'Detail Ketercapaian CPL')
@section('second', 'Capaian Pembelajaran Lulusan')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-tools mt-2">
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
                            <th>Mahasiswa</th>
                            <th>Program Magang</th>
                            <th>CPL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ketercapaianCPLs as $ketercapaianCPL)
                        <tr>
                            <td>{{ $ketercapaianCPL->id }}</td>
                            <td>{{ $ketercapaianCPL->mahasiswa->nim }}</td>
                            <td>{{ $ketercapaianCPL->programMagang->kegiatan }}</td>
                            <td>
                                <!-- Formulir untuk menyimpan perubahan jenis_cpl -->
                                <form action="{{ route('ketercapaianCPL.update', ['id' => $ketercapaianCPL->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <!-- Gunakan PATCH request untuk pembaruan -->
                                    <select name="jenis_cpl" class="form-control">
                                        @foreach($listOfCPLs as $cpl)
                                        <option value="{{ $cpl->id }}"
                                            {{ $ketercapaianCPL->cpl->id == $cpl->id ? 'selected' : '' }}>
                                            {{ $cpl->jenis_cpl }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-sm"
                                        id="submitButton">Simpan</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
                <div class="box-footer">
                    <a href="/dpl/konvers/list-cpl/" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
</div>
@endsection