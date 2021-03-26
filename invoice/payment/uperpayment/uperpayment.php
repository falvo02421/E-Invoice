<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>Payment</li>
			<li class="active"><span>Payment Uper</span></li>
		</ol>

		<h1>PAYMENT UPER</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
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
													<select class="form-control select2" name="SLAYANAN" id="SLAYANAN"  style="width: 100%;">
														<option value="" disabled selected></option>
														<option value="KAPAL">KAPAL</option>
														<option value="PETIKEMAS">PETIKEMAS</option>
														<!-- <option value="BARANG">BARANG</option>
														<option value="RUPARUPA">RUPARUPA</option> -->
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
											<label for="" class="col-sm-3 control-label">No Uper</label>
											<div class="row">
												<div class="col-xs-5">
										  			<input type="text" name="SID_NOTA" id="SID_NOTA" class="form-control" placeholder="No Uper">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-9">
								<div class="box-body">
									<div class="form-group">
							            <div class="col-sm-offset-12 col-sm-10">
								              <button type="Clear" class="btn btn-primary btn-lg" onclick="ClearSearch()"> Clear</button>
								              <button type="button" onclick="loaddata()" class="btn btn-primary btn-lg" data-toggle="" data-target=""><i class="fa fa-search"></i> Search</a></button>
							          		<!-- </div> -->
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
</div>
<div class="row">
	<div class="clo-lg-12">
		<div class="main-box clearfix">
			<div class="main-box-body clearfix">
				<div class="table-responsive">
					<table id="table-example" class="table table-hover">
						<thead>
							<tr>
								<th>No.</th>
								<th width="15%">No Uper</th>
								<th>Layanan</th>
								<th>Tanggal Nota</th>
								<th>Customer</th>
								<th class="text-right">Jumlah Total</th>
								<th class="text-center">Status Bayar</th>
								<th class="text-center">Keterangan</th>
							</tr>
						</thead>
						<!-- <tbody  id="show_data">

						</tbody> -->
					</table>
					<div class="row"></div>
					<div class="col-md-6">
						<div class="box-body">
							<div class="form-group">
								<div class="col-sm-offset-10 col-sm-12">
									<!-- <button type="submit" onclick="cetak_all()" class="btn btn-primary btn-lg"> Print All in this List</button> -->
									<button class="btn_hapus btn btn-primary" onclick="cetak_all()" id="cetakTes"  data-dismiss="modal">Cetak</button>
									<!-- <button onclick="cetak_all()" id="submitPrintAll">tes</button> -->
									<a id="submitPrintAll" href="<?php echo ROOT;?>einvoice/payment/cetak_uper_all/uper/" target="_blank" class="btn btn-primary btn-lg" >Print All in this List</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="modal fade" id="confir" aria-hidden="true">
    <div class="modal-dialog">
	    <div class="modal-content">
		    <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Lunas Confirmation</h4>
		    </div>
		    <form class="form-horizontal">
		        <div class="modal-body">
		        	<input type="hidden" name="kode" id="textkode" value="">
                	<div class="alert alert-danger"><p>Data tidak bisa diedit</p></div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
					</div>
				</div>
		    </form>
	    </div>
    </div>
</div> -->

<!-- MODAL ADD -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
	    <div class="modal-content">
	    	<div style="background-color:#B22222;" class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 style="color:white"; class="modal-title">Uper Payment Confirmation</h4>
		    </div>
		    <!-- <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Uper Payment Confirmation</h4>
		    </div> -->

		    <form id="form" class="form-horizontal" action="javascript:void(0);">
		        <div class="modal-body">
		          <div class="form-group">
						<label for="" class="col-sm-3 control-label">No Uper</label>
						<div class="row">
							<div class="col-xs-7">
								<input type="text" name="ID_NOTA" id="ID_NOTA" class="form-control" placeholder="No Uper" readonly="readonly">
							</div>
						  </div>
		            </div>

		            <div class="form-group">
						<label for="" class="col-sm-3 control-label">Layanan</label>
						<div class="row">
							<div class="col-xs-7">
								<input type="text" id="KD_MODUL" name="KD_MODUL"   class="form-control" placeholder="Layanan" readonly="readonly">

							</div>
						</div>

		            </div>

		            <div class="form-group">
						<label for="" class="col-sm-3 control-label">Uper Payment Date</label>
						<div class="row">
							<div class="col-xs-7">
								<input type="date"  class="form-control"  id="" name=""  placeholder="Jenis">
							</div>
						</div>
		            </div>

		            <div class="form-group">
						<label for="" class="col-sm-3 control-label">Metode Pembayaran</label>
						<div class="col-xs-7">
								<input type="text" class="form-control" id="click" name="KD_METHOD" placeholder="Bank"  readonly="readonly">
								<!-- <select class="form-control select2" name="KD_METHOD" style="width: 100%;" required>
									<option disabled selected></option>
									<option value="Bank">Bank</option>
									<option value="Cash">Cash</option>
								</select> -->
						</div>
		            </div>
		            <div class="form-group">
						<label class="col-sm-3 control-label">Bank</label>
						<div class="row">
							<div class="col-xs-7">
								<select class="form-control select2" id="KD_BANK" name="KD_BANK" style="width: 100%;">
									<option disabled selected></option>
									<?php foreach($bank as $bankid) { ?>
										<option value="<?php echo $bankid->BANK_ID ?>"><?php echo  ($bankid->BANK_ACCOUNT_NAME.': '.$bankid->RECEIPT_METHOD);?></option>
									<?php } ?>
								</select>
							</div>
						</div>
		            </div>
		            <div class="form-group">
						<label for="" class="col-sm-3 control-label">Nominal Uper</label>
						<div class="row">
							<div class="col-xs-7">
								<input type="text"  class="form-control"  id="TOTAL" name="TOTAL"  placeholder="Jenis" readonly="readonly">
							</div>
						</div>
		            </div>
		            <div class="form-group">
						<label for="" class="col-sm-3 control-label">Jumlah Yang Dibayarkan</label>
							<div class="row">
								<div class="col-xs-7">
									<input type="text"  step="any" name="TOTALPAY" id="TOTALPAY" class="form-control currency " placeholder="Jumlah Yang Dibayarkan">
								</div>
							</div>
						</div>
		            </div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-primary" id="btn_simpan" onclick="pay()" >Bayar</button>
						</div>
				</div>
		    </form>
	    </div>
    </div>
</div>
        <!--END MODAL ADD-->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // $('#click').change(function(){
        //     $(this).val() == "Bank" ? $('#hide').show() : $('#hide').hide();
        // });
    });
</script>


<script type="text/javascript">
    //Date picker
    $('#tgl_nota').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });

    $('#keluar_nota').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy',
      startDate: '-3d'
    });
</script>

<script>
	$( "#cetakTes" ).click(function() {
	  $( "#submitPrintAll" ).click();
	});
	// $(document).ready(function() {
	// 	// $('#mastertable').DataTable( {
	// 	// 		"pageLength": 10,
	// 	// 		"destroy": true
	// 	var table = $('#table-example').dataTable({
	// 		'pageLength' : 10,
	// 		'destroy' : true,
	// 		'info': false,
	// 		"lengthChange": true,
	// 		'sDom': 'lTr<"clearfix">tip',
	// 		'oTableTools': {
	//             'aButtons': [
	//                 {
	//                     'sExtends':    'collection',
	//                     'sButtonText': '<i class="fa fa-cloud-download"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>',
	//                     'aButtons':    [ 'csv', 'xls', 'pdf', 'copy', 'print' ]
	//                 }
	//             ]
	//         }
	// 	});
	// });

</script>

<script type="text/javascript">
	function oke(){
		alert('Data Tidak bisa diedit');
		 //$('#confir').modal('show');
	}
</script>

<script type="text/javascript">
	function cari(){
		$('[name="SLAYANAN"]').val('');
		$('[name="SID_NOTA"]').val('');
	}

	function ClearSearch(){
		$('[name="SLAYANAN"]').val('');
		$('[name="SID_NOTA"]').val('');
		loaddata()
	}

	function paymentshow($id)
	{
            // var id=$(this).attr('data');
            $('#myModal').modal('show');
				$('[name="ID_REQ"]').val($id);
            // $('[name="kode"]').val($id);
	}


	function Cetak($id)
	{
		alert('Cetak Uper: '+$id);
	}


 	function paymentupdate($id)
	{
			$('#form')[0].reset();
			var path = '';
			//path = "<?php //echo base_url('ibis_qa/index.php/einvoice/payment/uperedit');?>";
			path = "<?php echo ROOT.'einvoice/payment/uperedit';?>";
			var ID_NOTA 	= $id;
			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
			,NO_NOTA:ID_NOTA,
			}).done(function( data ) {
				// alert(data);
				var data1 = JSON.parse(data);
				for(i=0; i<Object.keys(data1).length; i++){
					// $('[name="ID_REQ"]').val(data1[i].ID_REQ);
					$('[name="ID_NOTA"]').val(data1[i].NO_UPER);
					$('[name="KD_MODUL"]').val(data1[i].KD_MODUL);
					$('[name="KD_JENIS"]').val(data1[i].LAYANAN);
					$('[name="KD_METHOD"]').val("BANK");
					$tot =addCommas(data1[0].TOTAL);
					$('[name="TOTAL"]').val($tot);
					$('[name="TOTALPAY"]').val($tot);
				}
				$('#myModal').modal('show');
			});

			return false;
	}

	function pay()
	{
		// alert(1234);
		var TOTAL = $("#TOTAL").val();
		var TOTALPAY = $("#TOTALPAY").val();
		if(TOTAL<=TOTALPAY){
			var path = '';
			path = "<?php echo ROOT.'einvoice/payment/upersave';?>";

			var NO_UPER 	= $("#ID_NOTA").val();
			var KD_METHOD 	= $("#click").val();
			var KD_BANK 	= $("#KD_BANK").val();
			var LAYANAN 	= $("#KD_JENIS").val();
			TOTAL 		= $("#TOTALPAY").val();

			// alert(KD_METHOD);

			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
				NO_UPER:NO_UPER,
				RECEIPT_METHOD:KD_METHOD,
				LAYANAN:LAYANAN,
				RECEIPT_ACCOUNT:KD_BANK,
				TOTAL:TOTAL
			}).done(function( data ) {
				//alert(data)
				// paymentload();
				loaddata();
	        });
		}else{
			alert("Jumlah yang dibayarkan tidak boleh kurang dari Nominal Uper");
		} 
        return false;
	}

	function paymentload(){
		var path = '';
		path = "<?php echo ROOT.'einvoice/payment/paymentcash';?>";
		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		}).done(function( data ) {
			// alert(data)
        });
	}

	function addCommas(x)
	{
		var parts = x.toString().split(".");
		parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		return parts.join(".");
	}

	$( document ).ready(function() {
		 loaddata();
		 // alert( "ready!" );
	});
	function cetak_all(){
		cetak_all()
		// alert("tesssssssssssss");
		// if ($("$submitPrintAll").hide()){
		// 	$("#submitPrintAll").show()
		// }else{
		// 	$("#submitPrintAll").hide()
		// }
		// $("#submitPrintAll").click();
		// return false
	}
	function loaddata(){
		// alert('1234');
		
  		path = "<?php echo ROOT.'einvoice/payment/upersearch';?>";

		var ID_NOTA 	= $("#SID_NOTA").val();
		var LAYANAN 		= $("#SLAYANAN").val();
		var KD_MODUL 		= $("#SKD_MODUL").val();
		//var MODUL 		=$("#SLAYANAN").val();

		$('#table-example').dataTable({
			"destroy": true,
		  	"dom" : "brtlp",
			"ajax": {
			    "url": path,
			    data : function ( d ) {
	          		d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
	          		d.NO_UPER = ID_NOTA;
					d.LAYANAN = LAYANAN;
					d.KD_MODUL = KD_MODUL;
		        },
			    "type": "POST"
			  },
			  "columns": [
	                        { "data": "num" },
	                        { "data": "NO_UPER" },
	                        { "data": "MODUL" },
	                        { "data": "TGL_SIMPAN" },
	                        { "data": "EMKL" },
	                        { "data": "TTL" },
	                        { "data": "STAT" },
	                        { "data": "action" },
	                    ],
		
        });
        return false;
	}
</script>
 