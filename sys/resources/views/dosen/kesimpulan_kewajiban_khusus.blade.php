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
                                            <td><img src="{{ asset('upload/'.Auth::guard('dosen')->user()->foto.'') }}" width="86px" height="100px"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>

                    <td>

                    <tr>
                        <td nowrap="nowrap">Nama</td>
                        <td nowrap="nowrap">:</td>
                        <td nowrap="nowrap">{{ $dosen->gelar_depan. ' '. $dosen->nama . ', ' .$dosen->gelar_belakang}}
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
                            @foreach($kewajiban_khusus as $kewajiban_khusus)
                            <tr>
                                <td>1<&nbsp;</td>
                                <td>{{ $kewajiban_khusus->tahun }}&nbsp;</td>
                                <td>{{ $kewajiban_khusus->judul_karya }}&nbsp;</td>
                                <td>{{ $kewajiban_khusus->jenis_karya }}&nbsp;</td>
                                <td>
                                    @if($kewajiban_khusus->jenis_karya == 'Jurnal Internasional Bereputasi')
                                        @php 
                                            $ab = App\jurnal_internasional_bereputasi::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                        @endphp
                                        @if($ab->nama_jurnal != null)
                                            <p>{{ $ab->nama_jurnal }}</p><br>
                                        @endif
                                        @if($ab->volume != null)
                                            <p>{{ $ab->volume }}</p><br>
                                        @endif
                                        @if($ab->nomor != null)
                                            <p>{{ $ab->nomor }}</p><br>
                                        @endif
                                        @if($ab->impact_factor != null)
                                            <p>{{ $ab->impact_factor }}</p><br>
                                        @endif
                                        @if($ab->alamat_url != null)
                                            <p>{{ $ab->almat_url }}</p><br>
                                        @endif
                                    @elseif($kewajiban_khusus->jenis_karya == 'Jurnal Internasional')
                                    @php 
                                            $ab = App\jurnal_internasional::where('kewajiban_khususes_id', $kewajiban_khusus->id)->first();
                                        @endphp
                                        @if($ab->artikel != null)
                                            <p>{{ $ab->artikel }}</p><br>
                                        @endif
                                        @if($ab->cover_depan != null)
                                            <p>{{ $ab->cover_depan }}</p><br>
                                        @endif
                                        @if($ab->daftar_isi != null)
                                            <p>{{ $ab->daftar_isi }}</p><br>
                                        @endif
                                        @if($ab->lain_lain != null)
                                            <p>{{ $ab->lain_lain }}</p><br>
                                        @endif
                                    
                                    @endif
                                </td>
                                <td>dokumen.pdf&nbsp;</td>
                                <td>Memenuhi&nbsp;</td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="12">
                                    <label class="headtitlekop"><b>Kesimpulan: </b>
                                        Memenuhi Syarat PERMEN RISETDIKTI No.20 Tahun 2017
                                </td>
                            </tr>
                        </tbody>
                    </table>
            
                    <div class="page-break"></div>

                    <p align="center"><b>PERNYATAAN DOSEN</b> <br>Saya dosen yang membuat laporan kinerja ini menyatakan bahwa semua
                        aktifitas dan bukti pendukungnya aktifitas saya dan saya sanggup menerimasanksi apapun termasuk penghentian
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
                                                <td align="center" valign="bottom" nowrap="nowrap" height="81"> <span id=""></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td width="25%">
                    </table>
            
            
            
                    <p align="center"><b>PERNYATAAN ASESOR</b> <br>Saya sudah memeriksa kebenaran kebenaran dokumen yang ditunjukan
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
                                                <td align="center" valign="bottom" nowrap="nowrap" height="81"> <span id=""></span>
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
            