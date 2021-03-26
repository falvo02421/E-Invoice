<style type="text/css">
.centered
{
    text-align:center;
}
</style>

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>Nota</li>
			<li class="active"><span>Barang</span></li>
		</ol>

		<h1>NOTA BARANG CREATE INVOICE</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<header class="main-box-header clearfix"></header>
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
						<form class="form-horizontal" action="javascript:void(0);">
							<div class="col-md-9">
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No PraNota</label>
											<div class="row">
												<div class="col-xs-3">
						                  			<input type="text" name="" id="PRANOTA" class="form-control" placeholder="No PraNota">
						                		</div>
					                		</div>
					             		</div>
				             		</div>

				             		<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No BPRP</label>
											<div class="row">
												<div class="col-xs-3">
						                  			<input type="text" name="" id="BPRP" class="form-control" placeholder="No BPRP">
						                		</div>
					                		</div>
					             		</div>
				             		</div>

				             		<div class="form-group">
					             		<div class="box-body">
					             			<label for="" class="col-sm-3 control-label">No Uper</label>
					                		<div class="row">
												<div class="col-xs-3">
							                  		<input type="text" name="" id="UPER" class="form-control" placeholder="No upper">
						                		</div>
					                		</div>
					             		</div>
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="box-body">
									<div class="form-group">
							            <div class="col-sm-offset-12 col-sm-10">
								              <button type="submit" class="btn btn-primary"> Clear</button>
								              <button type="" onclick="loaddata()"  class="btn btn-primary "><!-- <a href="<?php //echo base_url('');?>" > --><i class="fa fa-search"></i> Search<!-- </a> --></button>
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
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="main-box-body clearfix">
				<div class="table-responsive">
					<table id="tableBarang" class="table table-hover">
						<thead>
							<tr>
								<th>No PraNota</th>
								<th>Tanggal PraNota</th>
								<th>Costummer</th>
								<th>Jenis Layanan</th>
								<th>Nominal</th>
								<th>Keterangan</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="form_dtjk" class="modal fade" role="dialog" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div id="review">
		<div class="modal-content">
	        <div style="background-color:#B22222;" class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 style="color:white"; class="modal-title">Invoice <span class="text-help"></span></h4>
	        </div>
			<div class="modal-body" style="height:500px; ">
				<input type="text" id="ukk_ready" value="" class="hidden">
				<input type="text" id="cab_ready" value="" class="hidden">
				<input type="text" id="ppkb_ready" value="" class="hidden">
				<span class="text-me"></span>
			</div>

			<div class="modal-footer">
				<a href="javascript:void(0)"  class="btn btn-primary check_invoice" data-id="" onClick="create_invoice()" ><i class="fa fa fa-file-text-o"></i> Invoice</a>
			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
			</div>

	    </div>

	   </div>

	</div>

</div>


<div id="confirmModal" class="modal fade" role="dialog" data-backdrop="static">
	<div class="modal-dialog">
		
		<div class="modal-content">
	        <div style="background-color:#B22222;" class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 style="color:white"; class="modal-title">Confirmation</span></h4>
	        </div>
			<div class="modal-body" style="height:300px; ">
				<span class="convert_help">Apakah Anda yakin untuk  mengubah status nota ini menjadi 4A?</span>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onClick="confrimOK()"  id="ok">OK</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
			</div>

	    </div>


	</div>

</div>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

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
	var tableBarang ;
	var TRX_NUMBER ;
	var KODE_LAYANAN; 
	$( document ).ready(function() {
		// loaddata();
				var path = '';
		path = "<?php echo ROOT.'einvoice/cibarang/barangsearch';?>";

		// var ID_NOTA 	= $("#ID_NOTA").val();
		// var Costumer 	= $("#Costumer").val();
		// var MODULE 	= 'BARANG'; ///utk : KAPAL atau RUPA atau BARANG atau PETIKEMAS
		tableBarang = $('#tableBarang').DataTable({
				// "destroy": true,
            	"serverSide": true,
            	"ordering": false,
            	"processing": true,
	            "orderable": false,
			  	"dom" : "brtlp",
				"ajax": {
				    "url": path,
				    data : function ( d ) {
		          		d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
		          		d.PRANOTA = $("#PRANOTA").val() ;
		          		d.TRX_NUMBER = $("#PRANOTA").val() ;
		          		d.BPRP = $("#BPRP").val() ;
		          		d.UPER = $("#UPER").val() ;
		          		// d.ID_NOTA = ID_NOTA ;
						// d.CUSTOMER_NAME = Costumer ;
						// d.MODULE = MODULE ;
			        },
				    "type": "POST"
				  },
				  "columns": [
		                        { "data": "TRX_NUMBER" },
		                        { "data": "TANGGAL_PRANOTA" },
		                        { "data": "CUSTOMER_NAME" },
		                        { "data": "notaJenis" },
		                        { "data": "AMOUNT_TOTAL" },
		                        { "data": "action" },
		                    ],
			});
		// alert( "ready!" );
	});
	
	function loaddata(){
		tableBarang.draw();
        return false;
	}
	function create_invoice(){
		$('#confirmModal').modal('show');
	}
	function confrimOK(){
		// data = {
		//     '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		// 	"TRX_NUMBER" : TRX_NUMBER,
		// 	"KODE_LAYANAN" : KODE_LAYANAN
		// }
		$.ajax({
			// url: self.baseUrl+"ajaxAddQuotes", // Url to which the request is send
			url: "<?php echo ROOT.'einvoice/cibarang/createInvoice';?>", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: {
			    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
				"TRX_NUMBER" : TRX_NUMBER,
				"JENIS_NOTA" : KODE_LAYANAN
			}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			success: function(resp)   // A function to be called if request succeeds
			{
				// console.log(resp);
				location.reload();
				// try {
				// 	var result = JSON.parse(resp);
				// 	if (result.status == "success") {
				// 	} else {
				// 		alert("data gagal disimpan");
				// 	}
				// 	$('#add_entity').modal('hide');
				// } catch(e) {
				// 	console.log(e);
				// 	alert("data gagal disimpan");
				// }
			}
		});
	}
	function Cetak($id, kode){
		TRX_NUMBER = $id;
		KODE_LAYANAN = kode;
		// alert($id);
		// window.location.href="<?php echo ROOT;?>einvoice/nota/cetak_nota/"+$id;
		// idBarang = $id;
		$('.check_invoice').attr('disabled',true);
		$('#form_dtjk').modal('show');
		var url ='<?php echo ROOT;?>einvoice/cibarang/cetak_barang/barang/'+$id;
		$('.text-me').html('<iframe  class="the_pdf" style="height: 100%;width:100%;"  src= "'+url+'" onload="onMyFrameLoad(this)"/></iframe>');

	}
	function onMyFrameLoad(){
		$('.check_invoice').attr('disabled',false);
	}

	function link_barang(){
		window.location.href="<?php echo ROOT; ?>einvoice/nota/adv_barang";
	}
</script>
