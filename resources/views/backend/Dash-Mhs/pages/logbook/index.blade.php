@extends('backend.Dash-Mhs.dashboard-mhs')

@section('title', 'Logbook Mahasiswa')
@section('second', 'Mhs')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Logbook Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Form untuk input kegiatan dan unggah bukti -->
                <form action="{{ route('submit.logbook') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kegiatan">Kegiatan:</label>
                        <input type="text" name="kegiatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bukti">Unggah Bukti (PDF/JPG/PNG):</label>
                        <input type="file" name="bukti" class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
                    </div>
                    <div class="form-group">
                        <label for="id_program_magang">Program Magang:</label>
                        <select name="id_program_magang" class="form-control" required>
                            <option selected>Open this select menu</option>
                            @foreach($programMagangs as $programMagang)
                            <option value="{{ $programMagang->id }}">{{ $programMagang->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_mahasiswa">Mahasiswa:</label>
                        <select name="id_mahasiswa" class="form-control" required>
                            <option selected>Open this select menu</option>
                            @foreach($mahasiswas as $mahasiswa)
                            <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>



@endsection