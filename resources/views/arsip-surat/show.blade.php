@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section">
            <div class="section-header">
                <h1>Arsip Surat >> Lihat</h1>
            </div>
            <div class="section-body">
                <div class="card card-primary">
                    <div class="card-header d-flex justify-content-between">
                        <a href=" {{ route('arsip-surat.index') }} " class="btn btn-primary">Kembali</a>
                        <a href=" {{ route('arsip-surat.download', ['arsip_surat' => $surats->id]) }} " class="btn btn-success">Unduh</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <h5>Nomor : {{ $surats->nomor_surat }}</h5>
                            <h5>Kategori : {{ $surats->kategori }}</h5>
                            <h5>Judul : {{ $surats->judul }}</h5>
                            <h5>Waktu Pengarsipan : {{ $surats->created_at }}</h5>

                            <embed src="{{asset('storage/'.$surats->file_surat)}}"
                                type="application/pdf" frameBorder="0" scrolling="auto" height="1500px" width="985px"></embed>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
