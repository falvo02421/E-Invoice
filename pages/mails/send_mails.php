<style type="text/css">
.centered
{
    text-align:center;
}
.margin{
	margin-top: 5%;
}
.margin2{
	margin-left: 5%;
}
.margin3{
	margin-left: 29%;
}
.margin4{
	margin-left: 40%;
}
</style>

        <!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>Nota</li>
            <li class="active"><span>Send Email to Customer</span></li>
        </ol>

    <h1>Send Email to Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <div class="panel-body">
                <div class="main-box clearfix">
                <header class="main-box-header clearfix"></header>
	                <div class="box box-primary">
	                    <div class="box-body">
	                        <div class="row">
	                            <form class="form-horizontal">
	                                <div class="col-md-6">
	                                    <div class="box-body">
	                                        <div class="form-group">
	                                            <div class="box-body">
	                                                <label for="" class="col-sm-3 control-label">Layanan</label>
	                                                <div class="row">
	                                                    <div class="col-xs-5">
	                                                        <select for="" class="form-control select" style="width: 100%;" name="INV_NOTA_LAYANAN" id="INV_NOTA_LAYANAN">
		                                                        <option value="">All</option>
																<option value="KPL">KAPAL</option>
																<option value="PTKM">PETIKEMAS</option>
																<option value="BRG">BARANG</option>
																<option value="RP2">RUPARUPA</option>
	                                                        </select>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="box-body">
	                                                <label for="" class="col-sm-3 control-label">Jenis Nota</label>
	                                                <div class="row">
	                                                    <div class="col-xs-5">
	                                                        <select for="" class="form-control select" style="width: 100%;" name="INV_NOTA_JENIS" id="INV_NOTA_JENIS">
	                                                        	<option value="">All</option>
	                                                            <option value="NOTA TAGIHAN JASA BARANG">NOTA TAGIHAN JASA BARANG</option>
																<option value="NOTA DERMAGA PENUMPUKAN">NOTA DERMAGA PENUMPUKAN</option>
																<option value="NOTA ANGKUTAN LANGSUNG">NOTA ANGKUTAN LANGSUNG</option>
																<option value="PELAYARAN DALAM NEGERI">PELAYARAN DALAM NEGERI</option>
																<option value="PELAYARAN LUAR NEGERI">PELAYARAN LUAR NEGERI</option>
																<option value="RECEIVING">RECEIVING</option>
																<option value="DELIVERY">DELIVERY</option>
																<option value="BONGKAR MUAT">BONGKAR MUAT</option>
																<option value="BEHANDLE">BEHANDLE</option>
																<option value="PERPANJANGAN DELIVERY">PERPANJANGAN DELIVERY</option>
																<option value="BATAL MUAT">BATAL MUAT</option>
																<option value="NOTA LISTRIK">NOTA LISTRIK</option>
																<option value="NOTA TANAH DAN BANGUNAN">NOTA TANAH DAN BANGUNAN</option>
																<option value="NOTA PAS PELABUHAN">NOTA PAS PELABUHAN</option>
																<option value="NOTA RETRIBUSI ALAT">NOTA RETRIBUSI ALAT</option>
																<option value="NOTA LAIN MANUAL">NOTA LAIN MANUAL</option>
																<option value="NOTA SEWA ALAT USTER">NOTA SEWA ALAT USTER</option>
 
	                                                        </select>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>  
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="box-body">
	                                        <div class="form-group">
	                                            <div class="box-body">
	                                                <label for="" class="col-sm-3 control-label">Costumer</label>
	                                                <div class="row">
	                                                    <div class="col-xs-5">
	                                                        <input type="text" name="customer_mail" id="customer_mail" class="form-control" placeholder="Costumer">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <div class="form-group">
	                                            <div class="box-body">
	                                                <label for="" class="col-sm-3 control-label">Tanggal Nota</label>
	                                                <div class="row">
	                                                    <div class="col-xs-4">
	                                                        <input type="text" name="" id="tgl_nota" class="form-control" placeholder="dd/mm/yy">
	                                                    </div>
	                                                    <div class="col-xs-4">
	                                                        <input type="text" name="" id="tgl_nota2" class="form-control" placeholder="dd/mm/yy">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!-- <div class="row"> -->
	                                <div class="col-lg-12">
	                                    
	                                    <div class="col-md-6">
	                                        <div class="box-body">
	                                            <div class="form-group">
	                                                <div class="col-sm-offset-12 col-sm-10">
	                                                	<div class="margin3">
		                                                	<button type="submit" onclick="ClearSearch()" class="btn btn-primary" style="color:white;"> Clear</button>
		                                                  	<button type="button" class="btn btn-primary"  onclick="loaddata()" ><i class="fa fa-search" style="color:white;"> </i> Search</button>
		                                                  	<!-- <button type="button" class="btn btn-primary" id="btn1">Tambah Email</button> -->
	                                                  	</div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
           		</div>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <div class="panel-body">
            <div class="adv-table">
            <table  class="table table-hover" id="dynamic-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Nota</th>
                        <th>Tanggal Nota</th>
                        <th>Layanan</th>
                        <th>Jenis Nota</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                
            </table>
            </div>
            </div>
        </section>
    </div>
</div>
<!-- Modal Send Email-->
<div id="modal_main" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="background-color:#B22222;" class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color:white"; class="modal-title">Kirim Nota Ke Customer</h4>
            </div>
            <div class="modal-body">
                <form id="form1">
                    <div class="form-group">
                        <div class="box-body">
                            <div class="main-box-body clearfix">
                                <div class="tabs-wrapper">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-home">
                                            <form class="form-horizontal">
                                                <div class="box-body">
                                                    <p>Kirim Nota ke</p>
                                                    <div class="margin">
	                                                    <div class="form-group">
	                                                    	<div class="margin2">
	                                                        	<label for="" class="col-sm-3 control-label">Customer</label>
	                                                        </div>
	                                                        <div class="row">
	                                                            <div class="col-xs-5">
	                                                                <input type="text" value="" name="customer_" id="customer_" class="form-control" placeholder="Customer"/>
	                                                            </div>
	                                                        </div>
	                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                    	<div class="margin2">
                                                        	<label for="" class="col-sm-3 control-label">Customer Email</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <input type="text" name="mail_customer" id="mail_customer" class="form-control" placeholder="Customer Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="row">
                                        </div>
                                    </div>
                                    <form role="form" method="post" action="<?php echo ROOT.'invoice/nota/send_mail';?>" >
	                                    <div class="modal-footer">
	                                        <input type="submit" class="btn btn-primary" value="SEND MAIL">
	                                    </div>
                                	</form>
                                </div>
                            </div>
                        </div>
                    </div>      
                </form>
            </div>
        </div>
    </div>
</div>
        <!-- page end-->
  

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js">	
</script>

<script type="text/javascript">
	$('#tgl_nota').datepicker({
		autoclose: true,
		format: 'dd/mm/yyyy',
		startDate: '-20y'
	});
	$('#tgl_nota2').datepicker({
		autoclose: true,
		format: 'dd/mm/yyyy',
		startDate: '-20y'
		
	});
</script>

<script>
	function getRandom() {
	  return Math.floor((Math.random() * 1000000000) + 1);
	}	
	$(document).ready(function(){
		loaddata();
	    /*$("#btn1").click(function(){
	    	var nonota = getRandom();
	        $('#show_data').append('<tr class="No"><td><center>1</center></td> <td><center>'+nonota+'</center></td><td><center>Kapal</center></td> <td><center>LISTRIK</center></td><td><center>IPC PELINDO</center></td> <td><center>Belum Kirim</center></td><td><center><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_main" onclick="kirim(\''+nonota+'\',\'IPC PELINDO\',\'jefiegeofani@gmail.com\')" data-dismiss="modal"><i class="fa fa-envelope fa-1" aria-hidden="true"></i></button></center></td></tr>');
	    });*/
	});
	function kirim(a,b,c){
		$("#customer_").val(b);
		$("#mail_customer").val(c);
		
	}	
	function loaddata(){
		// alert('1234');
		// alert(1234);
		var path = '';
		path = "<?php echo ROOT.'einvoice/nota/allsearch';?>";
		 	
		var CUSTOMER_NAME		= $('#customer_mail').val();
		var INV_NOTA_JENIS		= $('#INV_NOTA_JENIS').val();
		var HEADER_CONTEXT	 	= $("#INV_NOTA_LAYANAN").val();
		
		$('#dynamic-table').DataTable( {
				"pageLength": 5,
				"destroy": true,
				"dom" : "brtlp",
				"ajax": {
					"url": path,
					data : function ( d ) {
								d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
								/*d.INV_NOTA_JENIS	= INV_NOTA_JENIS;*/
								d.HEADER_CONTEXT	= HEADER_CONTEXT;
								d.INV_NOTA_JENIS	= INV_NOTA_JENIS;
								d.CUSTOMER_NAME		= CUSTOMER_NAME;
						},
					"type": "POST"
				},
				"columns": [
										{ "data": "num" },
										{ "data": "BILLER_REQUEST_ID" },
										{ "data": "CREATION_DATE" },
										{ "data": "INV_NOTA_LAYANAN" },
										{ "data": "INV_NOTA_JENIS"},
										{ "data": "CUSTOMER_NAME"},
										{ "data": "SOURCE_INVOICE"},
										{ "data": "action"},
				],} );
		
		return false;
	}
	/*function loaddata(){
		path = "<?php echo ROOT.'einvoice/nota/mailsearch';?>";
		var LAYANAN 			= $("#LAYANAN").val();
		var JENIS_NOTA	 		= $("#JENIS_NOTA").val();
		var CUSTOMER 			= $("#CUSTOMER").val();
		
		$('#dynamic-table').dataTable({
			"columnDefs": [
			    { 
			    	"searchable": false, 
			    	"targets": [0,1,2,3,4,5] 
			    }
			  ],
			"destroy": true,
		  	"dom" : "brtlp",
			"ajax": {
			    "url": path,
			    data : function ( d ) {
	          		d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
	          		d.LAYANAN 		= LAYANAN;
	          		d.JENIS_NOTA 	= JENIS_NOTA;
	          		d.CUSTOMER 		= CUSTOMER;
		        },
			    "type": "POST"
			},
			  "columns": [
	                        { "data": "num" },
	                        { "data": "NO_NOTA" },
	                        { "data": "TANGGAL_NOTA" },
	                        { "data": "LAYANAN" },
	                        { "data": "JENIS_NOTA" },
	                        { "data": "CUSTOMER" },
	                        { "data": "STATUS" },
	                        { "data": "action" },
	                    ],
		});
        return false;
	}*/
</script>


<script type="text/javascript">
	function ClearSearch(){
			$('LAYANAN').val('');
			$('JENIS_NOTA').val('');
			$('CUSTOMER').val('');	
	}	
</script>
