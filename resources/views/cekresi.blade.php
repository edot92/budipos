@extends('layouts.app')

@section('content')

<!--start resi-->
<div class="container">
    <h2 align="center">Cek Nomor Resi (JNE, TIKI, & POS INDONESIA)</h2>
    <hr>
    <div class="col-lg-4">
        <div class="panel panel-success">
            <div class="panel-heading">Cek Resi Anda</div>
            <div class="panel-body">
             {{ Form::open( array(
                'url'=>'http://ibacor.com/api/cek-resi?',
                'method' => 'get',
                'id' => 'form-add-setting',

                ) ) }}
                <div class="form-group">
                    <label for="" class="control-label" >Jasa Pengiriman</label>
                    <select name="jasa" id="jasa" class="form-control" required>
                        <option value="">-- Pilih Jasa Pengiriman -- </option>
                        <option value="jne">JNE</option>
                        <option value="tiki">TIKI</option>
                        <option value="pos">POS INDONESIA</option>
                    </select>
                </div>
                <div class="form-group">
                    {{ Form::label( 'resi', 'NOMOR RESI :',['class' => 'control-label'] ) }}
                    {{ Form::text( 'resi', '', array(  'class' => 'form-control','id' => 'resi','placeholder' => 'MASSUKAN NO RESI', 'maxlength' => 20,'required' => true,) ) }}
                </div>
                <div class="panel-footer">

                    {{ Form::submit( 'Add Setting', array(
                        'id' => 'btn-add-setting',
                        'class' => 'btn-primary') ) }}

                    </div>
                    {{ Form::close() }}
                </div>
            </div>

        </div>

        <!--end resi-->

        <!-- Modal (Pop up when detail button clicked) -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">HASIL PENCARIAN</h4>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">Hasil Pencarian Nomor Resi Anda</div>
                        <div class="panel-body">
                            <legend>Detail </legend>

                            <label for="" class="col-sm-3 control-label">Jenis Pengiriman:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="service" name="" readonly="true" value="">
                            </div>
                            <label for="" class="col-sm-3 control-label">Status:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="status" name=""  readonly="true" value="">
                            </div>
                            <label for="" class="col-sm-3 control-label">NO RESI:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_resi" name=""  readonly="true" value="">
                            </div>
                            <legend>Asal & Tujuan </legend>

                            <table class="table table-bordered" id="tb_asal">
                                <thead>
                                    <tr>
                                        <th>Pengirim</th>
                                        <th>Penerima</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Nama :   CHULNY<br>
                                            Dari :  0  12630                                                <br>
                                        </td>
                                        <td>
                                            Nama :   SELLA<br>
                                            Dari :  JL MILIRAN RT 11 RW 04 NO.167 A. UMBUL HARJO. KOTA YOGYAKARTA  55165                                                                    <br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <legend>Tracking Status</legend>
                            <table class="table table-bordered" id="tb_traking">
                                <thead>
                                    <tr>
                                        <th>Tanggal & Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>JKS-AGENPOS MELATI 9862614</td>
                                        <td>POSTING LOKET</td>
                                        <td>
                                            LAYANAN : POS KILAT KHUSUS  PENGIRIM : CHULNY 0 12630  PENERIMA : SELLA JL MILIRAN RT 11 RW 04 NO.167 A. UMBUL HARJO. KOTA YOGYAKARTA 55165 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>JAKARTASELATAN 12000</td>
                                        <td>MANIFEST SERAH</td>
                                        <td>KANTOR TUJUAN : </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> 
</div>

<meta name="_token" content="{!! csrf_token() !!}" />
<!--<p align="center">Code by <a href="http://ibacor.com/forum_fb/php-indonesia/35688476100_10154071765821101/share-update-cek-resi-pos-indonesia-sob-thanks-ibacor-dcek-resi-s" target="_BLANK">Pandu</a></p>-->
<p align="center" >BUDI SEPTIANTO</p> 
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script type="text/javascript">
    jQuery( document ).ready( function( $ ) {

       $( '#form-add-setting' ).on( 'submit', function() {

        //.....
        //show some spinner etc to indicate operation in progress
        //.....

        var jasa = "pos";

        var resi = $('#resi').val();
        var url = "http://ibacor.com/api/cek-resi?pengirim="+jasa+"&resi="+resi;

        $.get(
            $( this ).prop( 'action' ),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "pengirim": $( '#jasa' ).val(),
                "resi": $( '#resi' ).val(),

            },
            function( data ) {
                //do something with data/response returned by server


                var y=data.data;
                var detail=y.detail;
                var send_nama=detail.asal.nama;
                var send_alamat=detail.alamat;

                var tb_asal = document.getElementById('tb_asal');
                var tb_traking = document.getElementById('tb_traking');
                alert(y.riwayat.length);
                var val_tb_traking=[];
                    for(i=0;i<y.riwayat.length;i++){
                    val_tb_traking=y.riwayat[i];
                    tb_traking.rows[i+1].cells[0].innerHTML = val_tb_traking.tanggal;
                    tb_traking.rows[i+1].cells[1].innerHTML = val_tb_traking.lokasi;
                    tb_traking.rows[i+1].cells[2].innerHTML = val_tb_traking.status;
                    tb_traking.rows[i+1].cells[3].innerHTML = val_tb_traking.keterangan;
        
                    }
                var val_tb_traking1= JSON.stringify(y.riwayat[0]);
                var val_tb_traking2= JSON.stringify(y.riwayat[1]);
                $('#no_resi').val(detail.no_resi);
                $('#status').val(detail.status);
                $('#service').val(detail.service);
               // tb_traking.rows[1].cells[0].innerHTML =val_tb_traking1;

                // tb_traking.rows[1].cells[1].innerHTML =val_tb_traking2;
                $('#myModal').modal('show');

            },
            'json'
            );

        //.....
        //do anything else you might want to do
        //.....

        //prevent the form from actually submitting in browser
        return false;
    } );

   } );


</script>
@endsection
