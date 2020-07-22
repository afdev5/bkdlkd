@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Bidang Pengabdian Masyarakat
        <small>Edit Bidang Pengabdian Masyarakat</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bidang Pengabdian Masyarakat</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Bidang Pengabdian Masyarakat</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ route('pengabdian.update', $data->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nama_kegiatan">Nama Kegiatan</label>
                                    <input type="text"
                                        class="form-control{{ $errors->has('nama_kegiatan') ? ' is-invalid' : '' }}"
                                        id="nama_kegiatan" name="nama_kegiatan" value="{{ $data->nama_kegiatan}}">
                                    @if ($errors->has('nama_kegiatan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama_kegiatan') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="jenis_kegiatan">Jenis Kegiatan</label>
                                    <select
                                        class="form-control{{ $errors->has('jenis_kegiatan') ? ' is-invalid' : '' }}"
                                        id="jenis_kegiatan" name="jenis_kegiatan">
                                        <option>Pilih</option>
                                        <option value="A" {{ $data->jenis_kegiatan == 'A' ? 'selected' : '' }}>Menduduki Jabatan Pimpinan</option>
                                        <option value="B" {{ $data->jenis_kegiatan == 'B' ? 'selected' : '' }}>Melaksanakan Pengembangan Hasil Pendidikan dan Penelitian
                                        </option>
                                        <option value="C" {{ $data->jenis_kegiatan == 'C' ? 'selected' : '' }}>Memberi Latihan/Penyuluhan/Penataran/Ceramah pada Masyarakat
                                        </option>
                                        <option value="D" {{ $data->jenis_kegiatan == 'D' ? 'selected' : '' }}>Memberi Pelayanan Kepada Masyarakat atau Kegiatan Lain yang
                                            Menunjang Pelaksanaan Tugas Umum Pemerintah </option>
                                        <option value="E" {{ $data->jenis_kegiatan == 'E' ? 'selected' : '' }}>Membuat/Menulis Karya Pengabdian</option>
                                        @if ($errors->has('jenis_kegiatan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('jenis_kegiatan') }}</strong>
                                        </span>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="buktipenugasan_bebankerja">Bukti Penugasan</label>
                                    <input type="file"
                                        class="form-control{{ $errors->has('buktipenugasan_bebankerja') ? ' is-invalid' : '' }}"
                                        id="buktipenugasan_bebankerja" name="buktipenugasan_bebankerja"
                                        value="{{ $data->buktipenugasan_bebankerja}}">
                                    @if ($errors->has('buktipenugasan_bebankerja'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buktipenugasan_bebankerja') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="buktipenugasan_bebankerja_ket">Keterangan</label>
                                    <input type="text"
                                        class="form-control{{ $errors->has('buktipenugasan_bebankerja_ket') ? ' is-invalid' : '' }}"
                                        id="buktipenugasan_bebankerja_ket" name="buktipenugasan_bebankerja_ket"
                                        value="{{ $data->buktipenugasan_bebankerja_ket}}">
                                    @if ($errors->has('buktipenugasan_bebankerja_ket'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buktipenugasan_bebankerja_ket') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="sks_bebankerja">SKS Beban Kerja</label>
                                    <input type="text"
                                        class="form-control{{ $errors->has('sks_bebankerja') ? ' is-invalid' : '' }}"
                                        id="sks_bebankerja" name="sks_bebankerja" value="{{ $data->sks_bebankerja }}">
                                    @if ($errors->has('sks_bebankerja'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sks_bebankerja') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="masa_penugasan">Masa Penugasan</label>
                            <input type="text"
                                class="form-control{{ $errors->has('masa_penugasan') ? ' is-invalid' : '' }}"
                                id="masa_penugasan" name="masa_penugasan" value="{{ $data->masa_penugasan }}">
                            @if ($errors->has('masa_penugasan'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('masa_penugasan') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="buktidokumen_kinerja">Bukti Dokumen</label>
                                    <input type="file"
                                        class="form-control{{ $errors->has('buktidokumen_kinerja') ? ' is-invalid' : '' }}"
                                        id="buktidokumen_kinerja" name="buktidokumen_kinerja"
                                        value="{{ $data->buktidokumen_kinerja }}">
                                    @if ($errors->has('buktidokumen_kinerja'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buktidokumen_kinerja') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="buktidokumen_kinerja_ket">Keterangan</label>
                                    <input type="text"
                                        class="form-control{{ $errors->has('buktidokumen_kinerja_ket') ? ' is-invalid' : '' }}"
                                        id="buktidokumen_kinerja_ket" name="buktidokumen_kinerja_ket"
                                        value="{{ $data->buktidokumen_kinerja_ket}}">
                                    @if ($errors->has('buktidokumen_kinerja_ket'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('buktidokumen_kinerja_ket') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="sks_kinerja">SKS Kinerja</label>
                                    <input type="text"
                                        class="form-control{{ $errors->has('sks_kinerja') ? ' is-invalid' : '' }}"
                                        id="sks_kinerja" name="sks_kinerja" value="{{ $data->sks_kinerja }}">
                                    @if ($errors->has('sks_kinerja'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sks_kinerja') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rekomendasi">Rekomendasi</label>
                            <select class="form-control{{ $errors->has('rekomendasi') ? ' is-invalid' : '' }}"
                                id="rekomendasi" name="rekomendasi">
                                <option>Pilih</option>
                                <option value="Selesai" {{ $data->rekomendasi == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="Lanjutkan" {{ $data->rekomendasi == 'Lanjutkan' ? 'selected' : '' }}>Lanjutkan</option>
                                <option value="Gagal" {{ $data->rekomendasi == 'Gagal' ? 'selected' : '' }}>Gagal</option>
                                <option value="Lainnya" {{ $data->rekomendasi == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                <option value="Beban Lebih" {{ $data->rekomendasi == 'Beban Lebih' ? 'selected' : '' }}>Beban Lebih</option>
                                @if ($errors->has('rekomendasi'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('rekomendasi') }}</strong>
                                </span>
                                @endif
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection
