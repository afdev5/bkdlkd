<html>

<head>
    <title>Cetak Kesimpulan Kewajiban Khusus</title>
    <style>
        .page-break {
            page-break-after: always;
        }

        .text-red {
            color: red;
        }

    </style>
</head>

<body>
    <!-- <body onLoad="window.print();"> -->
    <div class="page-landscape">

        <div class="nobreak">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="table-header">
                <tbody>
                    <tr>
                        <td width="120px" rowspan="6" align="center"><img src="{{ asset('assets/logounima.png') }}"
                                width="100px"></td>
                    </tr>
                </tbody>
            </table>

            <table width="100%" border="0">
                <tbody>
                    <tr>
                        <td colspan="4" align="center">
                            <label class="headtitlekop"><b>LEMBAR KOREKSI ASESOR DAN PENGESAHAN PIMPINAN</b><br>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table width="10%" border="0" align="center">
                <tbody>
                    <tr>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('upload/'.Auth::guard('dosen')->user()->foto.'') }}"
                                                width="86px" height="100px"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td nowrap="nowrap">Nama</td>
                                        <td nowrap="nowrap">:</td>
                                        <td nowrap="nowrap">
                                            {{ $dosen->gelar_depan. ' '. $dosen->nama . ', ' .$dosen->gelar_belakang}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">NIDN</td>
                                        <td nowrap="nowrap">:</td>
                                        <td nowrap="nowrap">{{ $dosen->nidn }}</td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">Jurusan/Prodi</td>
                                        <td nowrap="nowrap">:</td>
                                        <td nowrap="nowrap">{{ $dosen->jurusan['nama'] }}</td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">Fakultas</td>
                                        <td nowrap="nowrap">:</td>
                                        <td nowrap="nowrap">{{ $dosen->jurusan->fakultas['nama'] }}</td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">Perguruan Tinggi</td>
                                        <td nowrap="nowrap">:</td>
                                        <td nowrap="nowrap">{{ $dosen->pt }}</td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">Semester-Tahun Laporan</td>
                                        <td nowrap="nowrap">:</td>
                                        <td nowrap="nowrap">{{ $dosen->semester .' - '. $dosen->thn_akademik}}</td>
                                    </tr>
                                    <tr>
                                        <td nowrap="nowrap">Status</td>
                                        <td nowrap="nowrap">:</td>
                                        <td nowrap="nowrap">{{ $dosen->jenis_dosen }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                    </tr>


                </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>

            <table width="100%" border="1">
                <tbody>

                    <tr>
                        <td align="center"><b>No</b></td>
                        <td align="center"><b>Tahun</b></td>
                        <td align="center"><b>Judul Karya</b></td>
                        <td align="center"><b>Jenis Karya</b></td>
                        <td align="center"><b>Forum Publikasi</b></td>
                        <td align="center"><b>Bukti Dokumen</b></td>
                        <td align="center"><b>Kesimpulan</b></td>
                    </tr>
                    @php
                     $no = 0;
                     $kesimpulan = true;
                    @endphp
                    @foreach($kewajiban_khusus as $kewajiban_khusus)
                    @php
                        $no += 1;  
                    @endphp
                    <tr>
                        <td>{{ $no }}<&nbsp;</td> 
                        <td>{{ $kewajiban_khusus->tahun }}&nbsp;</td>
                        <td>{{ $kewajiban_khusus->judul_karya }}&nbsp;</td>
                        <td>{{ $kewajiban_khusus->jenis_karya }}&nbsp;</td>
                        <td>
                            @if($kewajiban_khusus->jenis_karya == 'Jurnal Internasional Bereputasi')
                                @php
                                $ab = App\jurnal_internasional_bereputasi::where('kewajiban_khususes_id',$kewajiban_khusus->id)->first();
                                @endphp
                                    <p>{{ $ab->nama_jurnal }}</p>
                                    <p>{{ $ab->volume }}</p>
                                    <p>{{ $ab->nomor }}</p>
                                    <p>{{ $ab->impact_factor }}</p>
                                    <p>{{ $ab->almt_url }}</p>

                            @elseif($kewajiban_khusus->jenis_karya == 'Jurnal Internasional')
                                @php
                                $abc = App\jurnal_internasional::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                <p>{{ $abc->nama_jurnal }}</p>
                                <p>{{ $abc->volume }}</p>
                                <p>{{ $abc->nomor }}</p>
                                <p>{{ $abc->impact_factor }}</p>
                                <p>{{ $abc->almt_url }}</p>

                            @elseif($kewajiban_khusus->jenis_karya == 'Seminar Internasional Terindeks')
                                @php
                                $abcd = App\seminar_internasional_terindeks::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                <p>{{ $abcd->nama_seminar }}</p>
                                <p>{{ $abcd->tmpt_seminar }}</p>
                                <p>{{ $abcd->penyelenggara }}</p>
                                <p>{{ $abcd->almt_url}}</p>
                            @elseif($kewajiban_khusus->jenis_karya == 'Jurnal Nasional Terakreditasi')
                                @php
                                $abcde = App\jurnal_nasional_terakreditas::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                <p>{{ $abcde->nama_jurnal }}</p>
                                <p>{{ $abcde->bahasa_jurnal }}</p>
                                <p>{{ $abcde->akreditasi }}</p>
                                <p>{{ $abcde->almt_url }}</p>
                                <p>{{ $abcde->status_doaj }}</p>
                            @elseif($kewajiban_khusus->jenis_karya == 'Jurnal Nasional')
                                @php
                                $abcdef = App\jurnal_nasional::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                <p>{{ $abcdef->nama_jurnal }}</p>
                                <p>{{ $abcdef->terindeks }}</p>
                                <p>{{ $abcdef->standart_tatakelola }}</p>
                                <p>{{ $abcdef->almat_url }}</p>
                            @elseif($kewajiban_khusus->jenis_karya == 'Paten')
                                @php
                                $abcdefg = App\paten::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                <p>{{ $abcdefg->jenis_hki }}</p>
                                <p>{{ $abcdefg->no_sertifikat }}</p>
                                <p>{{ $abcdefg->almat_url }}</p>
                            @elseif($kewajiban_khusus->jenis_karya == 'Karya Monumental')
                                @php
                                $a = App\karya_monumental::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                <p>{{ $a->lingkup_kegiatan }}</p>
                                <p>{{ $a->tempat_publikasi }}</p>
                            @endif
                        </td>
                        <td>
                            @if($kewajiban_khusus->jenis_karya == 'Jurnal Internasional Bereputasi')
                                @php
                                $ab = App\jurnal_internasional_bereputasi::where('kewajiban_khususes_id',$kewajiban_khusus->id)->first();
                                @endphp
                                @if($ab->artikel != null)
                                    <p>jurnal_internasional_bereputasi.pdf</p>
                                @endif
                                @if($ab->cover_depan != null)
                                    <p>jurnal_internasional_bereputasi.pdf</p>
                                @endif
                                @if($ab->daftar_isi != null)
                                    <p>jurnal_internasional_bereputasi.pdf</p>
                                @endif
                                @if($ab->lain_lain != null)
                                    <p>jurnal_internasional_bereputasi.pdf</p>
                                @endif

                            @elseif($kewajiban_khusus->jenis_karya == 'Jurnal Internasional')
                                @php
                                $abc = App\jurnal_internasional::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                @if($abc->artikel != null)
                                    <p>jurnal_internasional.pdf</p>
                                @endif
                                @if($abc->cover_depan != null)
                                    <p>jurnal_internasional.pdf</p>
                                @endif
                                @if($abc->daftar_isi != null)
                                    <p>jurnal_internasional.pdf</p>
                                @endif
                                @if($abc->lain_lain != null)
                                    <p>jurnal_internasional.pdf</p>
                                @endif

                            @elseif($kewajiban_khusus->jenis_karya == 'Seminar Internasional Terindeks')
                                @php
                                $abcd = App\seminar_internasional_terindeks::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                @if($abcd->artikel != null)
                                    <p>seminar_internasional_terindeks.pdf</p>
                                @endif
                                @if($abcd->cover_depan_prosiding != null)
                                    <p>seminar_internasional_terindeks.pdf</p>
                                @endif
                                @if($abcd->daftar_isi_prosiding != null)
                                    <p>seminar_internasional_terindeks.pdf</p>
                                @endif
                                @if($abcd->lain_lain != null)
                                    <p>seminar_internasional_terindeks.pdf</p>
                                @endif

                            @elseif($kewajiban_khusus->jenis_karya == 'Jurnal Nasional Terakreditasi')
                                @php
                                $abcde = App\jurnal_nasional_terakreditas::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                @if($abcde->artikel != null)
                                    <p>jurnal_nasional_terakreditas.pdf</p>
                                @endif
                                @if($abcde->cover_depan != null)
                                    <p>jurnal_nasional_terakreditas.pdf</p>
                                @endif
                                @if($abcde->daftar_isi != null)
                                    <p>jurnal_nasional_terakreditas.pdf</p>
                                @endif
                                @if($abcde->lain_lain != null)
                                    <p>jurnal_nasional_terakreditas.pdf</p>
                                @endif
                            @elseif($kewajiban_khusus->jenis_karya == 'Jurnal Nasional')
                                @php
                                $abcdef = App\jurnal_nasional::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                @if($abcdef->artikel != null)
                                    <p>jurnal_nasional.pdf</p>
                                @endif
                                @if($abcdef->cover_depan != null)
                                    <p>jurnal_nasional.pdf</p>
                                @endif
                                @if($abcdef->daftar_isi != null)
                                    <p>jurnal_nasional.pdf</p>
                                @endif
                                @if($abcdef->lain_lain != null)
                                    <p>jurnal_nasional.pdf</p>
                                @endif
                            @elseif($kewajiban_khusus->jenis_karya == 'Paten')
                                @php
                                $abcdefg = App\paten::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                @if($abcdefg->sertifikat != null)
                                    <p>paten.pdf</p>
                                @endif
                                @if($abcdefg->deskripsi_paten != null)
                                    <p>paten.pdf</p>
                                @endif
                                @if($abcdefg->lain_lain != null)
                                    <p>paten.pdf</p>
                                @endif
                            @elseif($kewajiban_khusus->jenis_karya == 'Karya Monumental')
                                @php
                                $a = App\karya_monumental::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                @endphp
                                @if($a->bukti_karya != null)
                                    <p>karya_monumental.pdf</p>
                                @endif
                                @if($a->peer_reviewer != null)
                                    <p>karya_monumental.pdf</p>
                                @endif
                                @if($a->lain_lain != null)
                                    <p>karya_monumental.pdf</p>
                                @endif
                            @endif
                        </td>
                        <td>
                            @if($kewajiban_khusus->status == 'Terima')
                                Memenuhi&nbsp;
                            @else
                                @php
                                    $kesimpulan = false;
                                @endphp
                                <p class="text-red">Tidak Memenuhi</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="12">
                            <label class="headtitlekop"><b>Kesimpulan: </b>
                                @if($kesimpulan == true)
                                <b>Memenuhi</b> Syarat PERMEN RISETDIKTI No.20 Tahun 2017
                                @else
                                <b class="text-red">Tidak Memenuhi</b> Syarat PERMEN RISETDIKTI No.20 Tahun 2017
                                @endif
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="page-break"></div>

            <p align="center"><b>PERNYATAAN DOSEN</b> <br>Saya dosen yang membuat laporan kinerja ini menyatakan bahwa
                semua
                aktifitas dan bukti pendukungnya aktifitas saya dan saya sanggup menerimasanksi apapun termasuk
                penghentian
                tunjangan dan mengembalikan yang sudah saya terima apabila pernyataan ini dikemudian hari terbukti tidak
                benar</p>

            <table class="tabelFooter" width="100%" border="0">
                <tbody>
                    <tr>
                        <td width="1%" valign="top">
                        </td>

                        <td>
                            <table width="500" align="center">
                                <tbody>
                                    <tr>

                                        <td align="center">
                                            <span>Dosen Yang Membuat</span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="bottom" nowrap="nowrap" height="81">
                                            <<span>
                                                <u>{{ $dosen->gelar_depan. ' '. $dosen->nama . ', ' .$dosen->gelar_belakang}}</u></span><br>
                                                <span>NIDN. {{ $dosen->nidn }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </td>
                        <td width="10%">

                            <table width="1%">
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            <br>
                                            <br>
                                            <span id=""></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="bottom" nowrap="nowrap" height="81"> <span
                                                id=""></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="25%">
            </table>



            <p align="center"><b>PERNYATAAN ASESOR</b> <br>Saya sudah memeriksa kebenaran kebenaran dokumen yang
                ditunjukan
                dan bisa menyetujui laporan evaluasi ini</p>

            <table class="tabelFooter" width="100%" border="0">
                <tbody>
                    <tr>
                        <td width="1%" valign="top">
                        </td>

                        <td width="1%">
                            <table width="1%" border="0">
                                <tbody>
                                    <tr>
                                        <td align="left">
                                            <span>Asesor I</span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="bottom" nowrap="nowrap" height="81">
                                            <span><u>{{ $asesor->asesor1['nama'] }}</u></span><br>
                                            <span>NIDN. {{ $asesor->asesor1['nidn'] }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </td>
                        <td width="10%">

                            <table width="1%">
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            <br>
                                            <br>
                                            <span id=""></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="bottom" nowrap="nowrap" height="81"> <span
                                                id=""></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="12%">

                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td align="left">
                                            <span id="" style="display:none"></span>
                                            <span>Asesor II</span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="bottom" nowrap="nowrap" height="81">
                                            <span><u>{{ $asesor->asesor2['nama'] }}</u></span><br>
                                            <span>NIDN. {{ $asesor->asesor2['nidn'] }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>

                        <br>
                        <br>
                        <table width="500" align="center">
                            <tbody>
                                <tr>

                                    <td align="center">
                                        <span>Mengtahui</span><br>
                                        <span>{{ $dosen->jurusan['nama'] }}</span><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="bottom" nowrap="nowrap" height="81">
                                        <<span>
                                            <u>{{ $dosen->jurusan['nip_kajur'] }}</u></span><br>
                                            <span>NIDN. </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>
