@extends('backend.Dash-Mhs.dashboard-mhs')

@section('title', 'Laporan Akhir')
@section('second', 'Mhs')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Unggah File PDF</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Form untuk mengunggah file PDF -->
                <form action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="pdf_file">Pilih File PDF:</label>
                        <input type="file" name="pdf_file" class="form-control" accept=".pdf" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Unggah</button>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection