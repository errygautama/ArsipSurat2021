@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section">
            <div class="section-header">
                <h1>About</h1>
            </div>
            <div class="section-body">
                    <div class="card card-primary">
                        <div class="card-header flex-row-reverse">
                            <a href=" {{ route('arsip-surat.index') }} " class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="d-flex justify-content-around">
                            <img alt="image" src="{{asset('assets/img/foto.jpg')}}" class="rounded-corners profile-widget-picture" width="150px" height="179px">
                            <div>
                                <h4>Aplikasi ini dibuat oleh:</h4>
                                <h4>Nama: Erry Anggi Nanda Gautama</h4>
                                <h4>NIM: 1831710125</h4>
                                <h4>Tanggal: 25 Oktober 2021</h4>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </section>
@endsection
