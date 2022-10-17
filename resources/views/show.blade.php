@extends('layouts.default')

@section('content')
    <section>
        <div class="container-fluid mt-5">
            <h2 class="text-center mb-5 fw-bold">Update Data Mahasiswa</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="{{ url('/update/'. $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <input type="number" name="nim" class="form-control" placeholder="NIM" value="{{$data->nim}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea class="form-control" name="alamat" placeholder="Alamat">{{$data->alamat}}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary btn-block mb-4">Update Mahasiswa</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{url('/')}}">
                                << Kembali ke Halaman Utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
