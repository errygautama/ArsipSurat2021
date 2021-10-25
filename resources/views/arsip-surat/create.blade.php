@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section">
            <div class="section-header">
                <h1>Arsip Surat >> Unggah</h1>
            </div>
            <div class="section-body">
                <div class="card card-primary">
                    <div class="card-header flex-row justify-content-between">
                        <h4>Catatan: Gunakan file berformat PDF</h4>
                        <a href=" {{ route('arsip-surat.index') }} " class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('arsip-surat.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nomor_surat">Nomor Surat</label>
                                <input id="nomor_surat" type="text"
                                    class="form-control @error('nomor_surat'){{ 'is-invalid' }}@enderror"
                                        name="nomor_surat" value="{{ old('nomor_surat') ?? '' }}">
                                    @error('nomor_surat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori" id="kategori"
                                        class="form-control @error('kategori'){{ 'is-invalid' }}@enderror">
                                            <option value="" @if (old('kategori') == null) {{ 'selected' }} @endif disabled>-- Pilih kategori --
                                            </option>
                                            <option value="Undangan" @if (old('kategori') == 'Undangan') {{ 'selected' }} @endif>Undangan</option>
                                            <option value="Pengumuman" @if (old('kategori') == 'Pengumuman') {{ 'selected' }} @endif>Pengumuman</option>
                                            <option value="Nota Dinas" @if (old('kategori') == 'Nota Dinas') {{ 'selected' }} @endif>Nota Dinas</option>
                                            <option value="Pemberitahuan" @if (old('kategori') == 'Pemberitahuan') {{ 'selected' }} @endif>Pemberitahuan</option>
                                        </select>
                                        @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input id="judul" type="text"
                                            class="form-control @error('judul'){{ 'is-invalid' }}@enderror" name="judul"
                                                value="{{ old('judul') ?? '' }}">
                                            @error('judul')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="file_surat">File Surat (PDF)</label>
                                            <input id="file_surat" type="file" accept="application/pdf"
                                                class="form-control @error('file_surat'){{ 'is-invalid' }}@enderror"
                                                    name="file_surat">
                                                @error('file_surat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Kirim
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endsection
