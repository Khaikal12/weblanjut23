@extends('layout.be.template')
@section('title', 'Tambah Ujian ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Tambah Data Ujian</strong>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('ujianuts-store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Judul Ujian</label>
                                <input type="text" name="judul_ujian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Isi Ujian</label>
                                <input type="text" name="isi_ujian" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Penulis Soal</label>
                                <input type="text" name="penulis_soal" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Keterangan</label>
                                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Tahun Ujian</label>
                                <input type="number" name="tahun_ujian" class="form-control">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('ujianuts-index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
