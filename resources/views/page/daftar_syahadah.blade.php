@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="{{ URL::asset('tilawatipusat/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

    <style>
        table.dataTable.peserta td:nth-child(3) {
        width: 50px;
        word-break: break-all;
        white-space: pre-line;
        text-align: center;
        }
        table.dataTable.peserta th:nth-child(3) {
        width: 50px;
        word-break: break-all;
        white-space: pre-line;
        text-align: center;
        }
        table.dataTable.peserta td:nth-child(1) {
        width: 60px;
        word-break: break-all;
        white-space: pre-line;
        text-align: center;
        }
        table.dataTable.peserta th:nth-child(1) {
        width: 50px;
        word-break: break-all;
        white-space: pre-line;
        text-align: center;
        }
    </style>
@endsection

@section('content')
    <section class="recipe-section-two" style="background-image: url({{ asset('tilawatipusat/landing/images/background/7.jpg') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">E Syahadah</div>
                <?php date_default_timezone_set('Asia/Jakarta');?>
                <h2 class="text-capitalize">{{ $diklat->program->name }}</h2>
                <p>( {{ \Carbon\Carbon::parse($diklat->tanggal)->format('l, d F Y') }} - {{ $diklat->peserta->where('bersyahadah','1')->count() }} {{$diklat->keterangan}}) </p>
                <div class="separate"></div>
            </div>
        </div>
        <div class="card">
            <input type="hidden" value="{{$pelatihan_id}}" id="diklat">
            <div class="card-body">
                <div class="auto-container">
                    <!-- Sec Title Two -->
                    <div class="table-responsive">
                        <center>
                        <p class="sec-title-two" style="margin-bottom: 20px">
                            <a 
                            
                                class="title" 
                            >
                            Daftar penerima syahadah
                            </a>
                        </p>
                        </center>
                        <table id="data" class="table peserta table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; margin-top:20px;">
                            <thead style="text-transform: capitalize" class="text-success">
                                <tr>
                                    <th></th>
                                    <th>nama</th>
                                    <th>...</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 12px">
                            </tbody>
                        </table>
                    </div>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
    </section>

    
@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('tilawatipusat/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('tilawatipusat/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('tilawatipusat/libs/pdfmake/pdfmake.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('tilawatipusat/js/pages/datatables.init.js')}}"></script>

    <!-- Toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>
        $(document).ready(function(){
            var id = $('#diklat').val();
            console.log(id);
            $('#data').DataTable({
                //karena memakai yajra dan template maka di destroy dulu biar ga dobel initialization
                destroy: true,
                processing: true,
                serverSide: true,
                info:false,
                ajax: {
                    url: '/daftar-syahadah/'+id,
                },
                columns: [
                    {
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {data:'name',name:'name'},
                    {data:'download',name:'download'},
                   
                ]
            });
        });
    </script>
@endsection