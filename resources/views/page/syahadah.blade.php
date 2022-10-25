<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>{{$peserta->name}}</title>
<link rel="stylesheet" type="text/css" href="{{asset('mobile_asset/styles/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('mobile_asset/styles/style.css')}}">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('mobile_asset/fonts/css/fontawesome-all.min.css')}}">    
<link rel="manifest" href="{{asset('mobile_asset/_manifest.json')}}" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('mobile_asset/app/icons/icon-192x192.png')}}">

<style>
    body, html {
      height: 100%;
      /* width: 100%; */
      margin: 0;
    }
    
    .bg {
      /* The image used */
      background-image: url("serti.jpg");
    
      /* Full height */
      height: 100%; 
      /* width: 100%; */

      z-index: 1;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    }

    .tables {
        /* top: 48%; */
        left: 12%;
        z-index: 9999;
        font-size: 3px;
        width: 70%;
        position: absolute;
        line-height: 7px;
    }

    table td, table td * {
        vertical-align: top;
    }

    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    .tanggalan {
        position: absolute;
        left: 65%;
        bottom: 32%;
        z-index: 9999;
        font-size: 5px;
        width: 70%;
    }

    .direktur {
        position: absolute;
        left: 65%;
        bottom: 24%;
        z-index: 9999;
        font-size: 5px;
        width: 70%;
    }

    .kacab {
        position: absolute;
        left: 65%;
        bottom: 22%;
        z-index: 9999;
        font-size: 5px;
        width: 70%;
    }

    .no_sertifikat {
        position: absolute;
        left: 15%;
        bottom: 22%;
        z-index: 9999;
        font-size: 4px;
        width: 70%;
        margin-top:5px;
    }

    .qrcode {
        position: absolute;
        left: 15%;
        bottom: 26%;
        z-index: 9999;
        font-size: 18px;
        width: 70%;
        margin-bottom: 1px;
    }

    .qrcode_display {
        position: absolute;
        left: 15%;
        /* bottom: 26%; */
        z-index: 9999;
        width: 70%;
        margin-bottom: 1px;
    }
    </style>

</head>
    
<body class="theme-light" data-highlight="blue2">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page" style="max-width: 420px; margin: 0 auto;">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app" style="max-width: 420px; margin: 0 auto;">
        <a href="#" data-back-button class="header-title header-subtitle">
            <img src="{{asset('nf_logo.png')}}" style="max-width: 90px" alt="">
        </a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-user"></i></a>
        {{-- <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a> --}}
    </div>
    <div id="footer-bar" class="footer-bar-5" style="max-width: 420px; margin: 0 auto;">
        {{-- <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a>
        <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a> --}}
        {{-- <a href="/"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a> --}}
        <a href="#"><img src="{{asset('logo-nf.png')}}" style="max-width: 30px" alt=""><span></span></a>
        {{-- <a href="index-pages.html" class="active-nav"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Pages</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a> --}}
    </div>
    
    <div class="page-content" >
        <input type="hidden" id="peserta_id" value="{{$peserta->id}}">
        <div class="page-title page-title-small">
            <h2><a href="/"><img src="{{asset('nf_logo_white.png')}}" style="max-width: 100px" alt=""></a></h2>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{asset('ngaji.jpg')}}" style="max-width: 450px; margin: 0 auto;"></div>
        </div>
        <div class="card card-style">
            <div class="content">
                <div class="d-flex mb-2">
                    <div>
                        <i class="far fa-check-circle color-green1-dark fa-3x pt-3 icon-size"></i>
                    </div>
                    <div>
                        <h5 class="font-16 font-600">SYAHADAH RESMI</h5>
                        <p style="line-height: 17px; font-size: 11px">
                           Standar sertifikasi metode pembelajaran Tilawati  <br><b> {{$peserta->kriteria}}</b>
                        </p>
                    </div>
                </div>            
            </div>
            <div class="divider divider-small mb-3 bg-highlight"></div>
        </div>

        <?php date_default_timezone_set('Asia/Jakarta');
            $date = $peserta->tgllahir; 
        ?>
        <div class="card card-style">
            <div class="content">
                <h3 class="font-600"> {{$peserta->name}} </h3>
                <input type="hidden" id="lembaga_id" value=" - ">
                <p class="font-11 mt-n2 text-capitalize">Program Pelatihan {{$peserta->program->name}} </p>
                <div class="image">
                    @if ($peserta->pelatihan->keterangan == 'guru' || $peserta->pelatihan->keterangan == 'instruktur')
                    <img src="{{asset('s_guru.jpg')}}" style="max-width: 100%" alt="">
                    @elseif($peserta->pelatihan->keterangan == 'santri')
                    <img src="{{asset('s_santri.jpg')}}" style="max-width: 100%" alt="">
                    @endif
                </div>
                <div class="isi-sertifikat">
                    @if ($peserta->pelatihan->keterangan == 'guru')
                    <table class="tables" style="margin-left: 11px; font-size:6px; top:46%">
                    @else
                    <table class="tables" style="margin-left: 11px; font-size:6px; top:48%">
                    @endif
                   
                        <tr>
                            <td style="width: 30%">Nama</td>
                            <td style="width: 2%">:</td>
                            <td style="font-weight:bold"> {{$peserta->name}} </td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Alamat</td>
                            <td style="width: 2%">:</td>
                            <td style="width: 75%; font-weight:bold"> {{$peserta->alamat}} 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Tempat Tanggal Lahir</td>
                            <td style="width: 2%">:</td>
                            <td style="width: 75%; font-weight:bold"> 
                                @if ($peserta->tmptlahir !== null && $peserta->tmptlahir2 == null)
                                    {{$peserta->tmptlahir}} {{ \Carbon\Carbon::parse($date)->format('d F Y')}}
                                @else
                                    {{$peserta->tmptlahir2}} {{ \Carbon\Carbon::parse($date)->format('d F Y')}}
                                @endif 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 30%">Dinyatakan</td>
                            <td style="width: 2%">:</td>
                            <td style="width: 75%; font-weight:bold"> {{$peserta->kriteria}} 
                            </td>
                        </tr>
                    </table>

                    <div class="qrcode">
                        <?php echo \QrCode::size(30)->generate('https://syahadah.nurulfalah.org/syahadah-peserta/'.$peserta_id) ?>
                    </div>
                    <div class="no_sertifikat" style="font-weight: bold"><u> No. Syahadah : {{$peserta->pelatihan_id}}/{{\Carbon\Carbon::parse($peserta->pelatihan->tanggal)->format('Y')}}/{{$peserta->id}} </u></div>
                    <div class="tanggalan" style="margin-left: 10px">Surabaya, {{\Carbon\Carbon::parse($peserta->pelatihan->tanggal)->format('d F Y')}} </div>
                    @if ($peserta->pelatihan->cabang->name == 'Cahaya Amanah' || $peserta->pelatihan->cabang->name == 'Tilawati Pusat' || $peserta->pelatihan->cabang->status == "RPQ")
                    <div class="direktur" style="margin-left: 10px"><u>Dr. KH. Umar Jaeni, M.Pd </u></div>
                    @else
                        
                        <div class="direktur" style="margin-left: 10px"><u>{{ $peserta->pelatihan->cabang->kepalacabang }} </u></div>
                    @endif

                    @if ($peserta->pelatihan->cabang->name == 'Cahaya Amanah' || $peserta->pelatihan->cabang->name == 'Tilawati Pusat' || $peserta->pelatihan->cabang->status == "RPQ")
                        <div class="kacab" style="margin-left: 10px">Direktur Utama</div>
                    @else
                        @if ($peserta->pelatihan->cabang->name == 'Cahaya Amanah' || $peserta->pelatihan->cabang->name == 'Tilawati Pusat' || $peserta->pelatihan->cabang->status == "RPQ")
                        <div class="kacab">Direktur Eksekutif</div>
                        @else
                            <?	$kabupaten 	= substr($peserta->pelatihan->cabang->kabupaten->nama, 5); $kab = strtolower($kabupaten);
                                $provinsi 	= strtolower($peserta->pelatihan->cabang->kabupaten->provinsi->nama); 
                                $data_kabupaten = App\Models\Kabupaten::where('id', $peserta->pelatihan->cabang->kabupaten->id)->first();
                                $jum_cabang		= $data_kabupaten->cabang->count();
                            ?>
                            @if ($jum_cabang > 1)
                                @if (substr($peserta->pelatihan->cabang->kabupaten->nama, 5, 3) == 'ADM')
                                    <div class="kacab"> {{ 'Kacab. ' . strtoupper(substr($provinsi, 0, 3)) . ' ' . ucfirst(substr($provinsi, 4)) }}</div>
                                @else
                                    @if ($peserta->pelatihan->cabang->name == 'Tilawati Gresik Al Hikmah')
                                        <div class="kacab">Kacab. Al Hikmah Gresik</div>
                                    @elseif ($peserta->pelatihan->cabang->name == 'Tilawati Citra Anak Sholeh')
                                        <div class="kacab">Kacab. CAS Surabaya Jawa Timur</div>
                                    @else
                                        <div class="kacab">{{ 'Kacab. ' . ucfirst($peserta->pelatihan->cabang->name) . ' ' . ucfirst($provinsi) }}</div>
                                    @endif
                                @endif
                            @else
                                @if (substr($peserta->pelatihan->cabang->kabupaten->nama, 5, 3) == 'ADM')
                                    <div class="kacab">{{ 'Kacab. ' . strtoupper(substr($provinsi, 0, 3)) . ' ' . ucfirst(substr($provinsi, 4)) }}</div>
                                @else
                                    @if ($peserta->pelatihan->cabang->name == 'Tilawati Gresik Al Hikmah')
                                        <div class="kacab">Kacab. Al Hikmah Gresik</div>
                                    @elseif ($peserta->pelatihan->cabang->name == 'Tilawati Citra Anak Sholeh')
                                        <div class="kacab">Kacab. CAS Surabaya Jawa Timur</div>
                                    @else
                                        <div class="kacab">{{ 'Kacab. ' . ucfirst($kab) . ' ' . ucfirst($provinsi) }}</div>
                                    @endif
                                @endif
                            @endif
                        @endif
                    @endif
                    
                </div>
                <div class="float-left">
                    <p class="font-10 opacity-80 mb-n1"><i class="far fa-calendar"></i> {{(\Carbon\Carbon::parse($peserta->pelatihan->tanggal)->format('d F Y'))}} 
                    <p class="font-10 opacity-80"><i class="fa fa-map-marker-alt"></i> {{$peserta->pelatihan->tempat}} </p>
                </div>
                @auth
                <a href="#" id="download_sertifikat" class="float-right btn btn-s bg-highlight rounded-s shadow-xl text-uppercase font-900 font-11 mt-2"><i class="fa fa-download"></i></a>
                @endauth
            </div>
        </div>
    
        @php
            $jumlah = $peserta->nilai->where("kategori","al-qur'an")->sum('nominal');
        @endphp
        
        <div class="card card-style">
            <div class="content mb-1">
                <h3><i class="fa fa-exclamation-triangle mr-3 mt-1 font-17 color-yellow1-dark"></i>PENILAIAN</h3>
                <p style="line-height: 18px;">
                    Berikut adalah rincian hasil nilai yang diperoleh oleh peserta program pelatihan
                </p>
            </div>
            <div class="content mb-1">
                <table class="table table-borderless rounded-lg shadow-l" style="overflow: hidden; line-height: 11px">
                    <thead class="text-uppercase" style="font-size: 12px">
                        <tr style="background-color: rgb(94, 172, 192)">
                            <th style="color: white" scope="col">Bidang Penilaian Baca Al - Qur'an</th>
                            <th style="color: white" scope="col" >Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta->nilai as $key=> $item)
                        <tr>
							@if ($item !== null)
								@if ($item->kategori !== 'skill')
                                    <td scope="col" style="width: 90%">{{$item->penilaian->name}}</td>
                                    <td scope="col" style="width: 10%">{{$item->nominal}}</td>
                                @endif
                            @endif
                        </tr>
                        @endforeach
                    </tbody>

                    @if ($peserta->pelatihan->keterangan !== 'santri')
                        <thead class="text-uppercase" style="font-size: 12px">
                            <tr style="background-color: rgb(94, 172, 192)">
                                <th style="color: white" scope="col">Bidang Penilaian Lainnya</th>
                                <th style="color: white" scope="col" >Nilai</th>
                            </tr>
                        </thead>
                    @endif
                   
                    <tbody>
                        @foreach ($peserta->nilai as $key=> $item)
                        <tr>
							@if ($item !== null)
								@if ($item->kategori == 'skill')
                                    <td scope="col" style="width: 90%">{{$item->penilaian->name}}</td>
                                    <td scope="col" style="width: 10%">{{$item->nominal}}</td>
                                @endif
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                    <thead class="text-uppercase" style="font-size: 12px">
                        <tr style="background-color: rgb(94, 192, 151)">
                            <th style="color: white" scope="col">Hasil Akhir</th>
                            <th style="color: white" scope="col" ></th>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($peserta->pelatihan->keterangan == 'guru')
                        <tr>
							<td scope="col" style="width: 90%">Rata - rata Nilai</td>
                            <td scope="col" style="width: 10%" class="color-green1-dark">
                                @if ($peserta->pelatihan->program->name=='munaqosyah santri')
									{{ $rata2 = $jumlah }}
								@elseif($peserta->program->name == 'Diklat Munaqisy Cabang')
									@php
										$x = $peserta->nilai->where("kategori","al-qur'an")->sum('nominal');
										$y = $peserta->nilai->where("kategori","skill")->sum('nominal');
										$z = $peserta->nilai->where("kategori","skill")->count();
										$satu  = $x;
										$dua   = round($y / $z);
										$rata2 = round(($satu+$dua)/2);
									@endphp
									{{round($rata2)}}
								@else
									{{ $rata2 = round(($jumlah+ $item->nominal)/2) }}
								@endif
                            </td>
                        </tr>
                    @else
                        <?php $rata2 = $jumlah ?>
                        <tr>
							<td scope="col" style="width: 90%">Rata - rata Nilai</td>
                            <td scope="col" style="width: 10%" class="color-green1-dark">
								{{ $rata2 = $jumlah }}
                            </td>
                        </tr>
                    @endif
                        <tr>
                            <td scope="col" style="width: 90%">Predikat</td>
                            <td scope="col" style="width: 10%" class="color-green1-dark">
                                @if ($rata2 >= 85)
									Baik
								@else
									Cukup
								@endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 

        <div class="card card-style" style="min-height: 300px">
            <div class="content">
                <center>
                    <h5>SCAN DISINI</h5>
                </center>
                <div class="divider divider-small mb-3 bg-highlight"></div>
                <div class="d-flex mb-2" style="text-align: center;">
                    <center>
                        <div class="qrcode_display" style="text-align: center">
                            <?php echo \QrCode::size(200)->generate('https://syahadah.nurulfalah.org/syahadah-peserta/'.$peserta_id) ?>
                        </div>
                    </center>
                </div>            
            </div>
            <div class="divider divider-small mb-3 bg-highlight"></div>
        </div>
        
        

           
        <!-- footer and footer card-->
        {{-- <div class="footer" data-menu-load="menu-footer.html"></div> --}}
    </div>
    <!-- end of page content-->
    
    
    {{-- <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu-main.html"
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">  
    </div> --}}
    


    
</div>    


<script type="text/javascript" src="{{asset('mobile_asset/scripts/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('mobile_asset/scripts/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mobile_asset/scripts/custom.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script>
    $('#download_sertifikat').on('click', function() {
        var peserta_id = $('#peserta_id').val();
        swal({
            title: "Valid",
            text: 'Tekan OK untuk mengunduh Syahadah',
            type: "success"
        }).then(okay => {
        if (okay) {
            window.location.href = "/unduh-syahadah/"+peserta_id;
            }
        });     
    })
</script>
</body>
