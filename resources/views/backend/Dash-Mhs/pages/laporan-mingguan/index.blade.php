@extends('backend.Dash-Mhs.dashboard-mhs')

@section('title', 'Laporan Mingguan')
@section('second', 'Mhs')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Formulir Laporan Mingguan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('laporan.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM Mahasiswa:</label>
                        <select name="nim" id="nim" class="form-control">
                            <option selected>Open this select menu</option>
                            @foreach($mahasiswas as $mahasiswa)
                            <option value="{{ $mahasiswa->nim }}">{{ $mahasiswa->nim }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="program_magang">Program Magang:</label>
                        <select name="program_magang" id="program_magang" class="form-control">
                            <option selected>Open this select menu</option>
                            @foreach($programMagangs as $programMagang)
                            <option value="{{ $programMagang->id }}">{{ $programMagang->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kompetensi_lowongan">Kompetensi Lowongan:</label>
                        <select name="kompetensi_lowongan" id="kompetensi_lowongan" class="form-control">
                            <option selected>Open this select menu</option>
                            @foreach($kompetensiLowongans as $kompetensiLowongan)
                            <option value="{{ $kompetensiLowongan->id }}">{{ $kompetensiLowongan->kompetensi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan:</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection