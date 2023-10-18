@extends('backend.Dash-DPL.dashboard-dpl')

@section('title', 'Laporan evaluasi')
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
                            <th>Komentar</th>
                            <th>File Sertifikat</th>
                            <th>Mahasiswa Magang ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($evaluasiMagangs as $evaluasiMagang)
                        <tr>
                            <td>{{ $evaluasiMagang->id }}</td>
                            <td>
                                {{ $evaluasiMagang->komentar }}
                                <a href="#comment-form-{{ $evaluasiMagang->id }}">Tambah Komentar</a>
                                <div id="comment-form-{{ $evaluasiMagang->id }}" class="comment-form">
                                    <form action="{{ route('evaluasi.add.comment', ['id' => $evaluasiMagang->id]) }}"
                                        method="POST">
                                        @csrf
                                        <textarea name="comment" class="form-control"
                                            placeholder="Masukkan komentar Anda"> {{ $evaluasiMagang->komentar }}</textarea>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="cancel"
                                                class="btn btn-secondary cancel-comment">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td>
                                @if($evaluasiMagang->file_sertifikat)
                                <a
                                    href="{{ route('download.certificate', ['file' => $evaluasiMagang->file_sertifikat]) }}">Unduh
                                    Sertifikat</a> |
                                <a href="{{ route('view.certificate', ['file' => $evaluasiMagang->file_sertifikat]) }}"
                                    target="_blank">Lihat Sertifikat</a>
                                @else
                                N/A
                                @endif
                            </td>
                            <td>{{ $evaluasiMagang->id_mahasiswa_magang }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="box-footer">
                    <a href="/dpl/laporan-evaluasi" class="btn btn-default">Kembali</a>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<style>
.comment-form {
    display: none;
}

.comment-form:target {
    display: block;
}
</style>



@endsection