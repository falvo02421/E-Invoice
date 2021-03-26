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
			<li class="active"><span>Rupa-Rupa</span></li>
		</ol>

		<h1>NOTA RUPA-RUPA</h1>
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
							<div class="box-body">
							</div>
							<div class="col-md-6">
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No Nota</label>
											<div class="row">
												<div class="col-xs-5">
													<input type="text" name="TRX_NUMBER" id="TRX_NUMBER" class="form-control" placeholder="No Nota">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Status Bayar</label>
											<div class="row">
												<div class="col-xs-5">
					                  		<select for="" name="STATUS" id="STATUS" class="form-control select" style="width: 100%;">
					                  			<option value="">All</option>
					                  			<option value="0">Belum Lunas</option>
					                  			<option value="1">Lunas</option>
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
					                  		<select for="" name="KODE_LAYANAN" id="KODE_LAYANAN" class="form-control select" style="width: 100%;">
					                  			<option value="">ALL</option>
					                  			<option value="RUPA04">NOTA LISTRIK</option>
					                  			<option value="RUPA05">NOTA TANAH DAN BANGUNAN</option>
					                  			<option value="RUPA06">NOTA PAS PELABUHAN</option>
					                  			<option value="RUPA07">NOTA RETRIBUSI ALAT</option>
					                  			<option value="RUPA12">NOTA LAIN MANUAL</option>
					                  			<option value="RUPA13">NOTA SEWA ALAT USTER</option>
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
													<input type="text" name="CUSTOMER_NAME" id="CUSTOMER_NAME" class="form-control" placeholder="Costumer">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Tanggal Nota</label>
											<div class="row">
												<div class="col-xs-4">
													<input type="text" name="tgl_nota" id="tgl_nota" class="form-control" placeholder="dd/mm/yy">
												</div>
												<div class="col-xs-4">
													<input type="text" name="tgl_nota2" id="tgl_nota2" class="form-control" placeholder="dd/mm/yy">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="box-body">
									<div class="form-group">
							            <!-- <div class="col-sm-offset-2 col-sm-10"> -->
							            <div class="col-sm-offset-2 col-sm-10">
							            	<button type="button" id="" onclick="link_rupa();" class="btn btn-primary" class="col-sm-6" style="color:white;"> Advanced Search</a></button>
							              <button type="button" class="btn btn-primary" onclick="cleardata()" style="color:white;"> Clear</button>
							              <button type="button" class="btn btn-primary" onclick="loaddata()"><!-- <a href="<?php //echo base_url('');?>" > --><i class="fa fa-search" style="color:white;"> </i> Search<!-- </a> --></button>
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
			<div class="table-responsive" id="tables">
				<table id="dttable" class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>No PraNota</th>
							<th>Tanggal Pranota</th>
							<th>Customer</th>
							<th>Jenis Layanan</th>
							<th>Nominal</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>12346789</td>
							<td>20 Feb 2018</td>
							<td>PT. ABCXYZ</td>
							<td>Sampah Kapal</td>
							<td>Nominal</td>
							<td>
								<center>
								 <a target="_blank" href="<?php echo ROOT;?>einvoice/nota/cetak_nota/kapal/<?php echo $no_invoice ?>"><i class="fa fa-print"></i> </a>
									<a target="" href=""><i class="button">Invoice</i></a>
								</center>
							</td>
						</tr> -->
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>

<div id="confirmModal" class="modal fade" role="dialog" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		
		<div class="modal-content">
	        <div style="background-color:#B22222;" class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 style="color:white"; class="modal-title">Invoice</span></h4>
	        </div>
			<div class="modal-body" style="height:500px; ">
				<span class="iframerupa"></span>
				<span class="text-me"></span>
			</div>

			<div class="modal-footer">
				<button type="button" data-orgid="" data-trxnumber="" data-jenisnota="" class="btn btn-primary" id="ok">Invoice</button>
			</div>

	    </div>


	</div>

</div>

<script type="text/javascript">
	$('#tgl_nota').datepicker({
		autoclose: true,
		format: 'dd/mm/yyyy',
		startDate: '-3d'

	});
	$('#tgl_nota2').datepicker({
		autoclose:true,
		format: 'dd/mm/yyyy',
		startDate: '-3d'

	});

</script>

<script>
	$(document).ready(function() {
		/*var table = $('#table-example').dataTable({
			'info': false,
			"lengthChange": false,
			'sDom': 'lTr<"clearfix">tip',
			'oTableTools': {
	            'aButtons': [
	                {
	                    'sExtends':    'collection',
	                    'sButtonText': '<i class="fa fa-cloud-download"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>',
	                    'aButtons':    [ 'csv', 'xls', 'pdf', 'copy', 'print' ]
	                }
	            ]
	        }
		});*/
		loaddata();
		// loaddata(0);
	});
	function print_rupa(a,b){
		$(".iframerupa").html('<iframe width="100%" height="400px" src="http://localhost/ibis_qa/index.php/einvoice/nota/priview_create_nota/'+a+'/'+b+'"></iframe>');
		$(".text-me").text("");
		$("#ok").attr('disabled',false);
		$("#ok").data("orgid","89");
		$("#ok").data("trxnumber",a);
		$("#ok").data("jenisnota",b);
		$('#confirmModal').modal("show");
	}
	$("#ok").click(function(){
		var orgid = $("#ok").data("orgid");
		var trxnumber = $("#ok").data("trxnumber");
		var jenisnota = $("#ok").data("jenisnota");
		path = "<?php echo ROOT.'einvoice/nota/invoicerupa';?>";
		/*$.post(path, {
			'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
		}, function(data){
			$("img[class=checktick][data-noreq="+c+"][data-flag="+b+"]").attr("src", "<?=IMAGES_?>/cr/small_tick.png").attr('data-valid', 'Y');
			toggleActivateApproveButton(c);
			this_obj.dialog("close");
		});*/
		jQuery.ajax({
       		url: '<?php echo ROOT;?>einvoice/nota/invoicerupa/',
            type: "POST",
            data: {
               	'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
              	TRX_NUMBER:trxnumber,
              	ORG_ID:orgid,
              	JENIS_NOTA:jenisnota
            },
        
            beforeSend: function() {
                   $('.text-me').text('  Loading data... Please wait');
                   $('.check_invoice').attr('disabled',true);
                    
     		},
            success:function(data){
            	if(data=="1"){
            		// window.location.href = "<?php echo ROOT;?>einvoice/nota/createrupa/createruparupa";
            	}
            },
            error: function (jqXHR, textStatus, errorThrown){
		 	  	alert('False Exeption while request..');
		 	 	return false;
		 	}
    	});
	});
	// function loaddata(data){
	function loaddata(){
		path = "<?php echo ROOT.'einvoice/nota/ruparupasearch';?>";
		panjang = 20;
		data = 0;
		if(data==1){
			if($("select[name=dttable_length]").val()!=undefined){
				panjang = $("select[name=dttable_length]").val();
			}
		}

		var TRX_NUMBER		= $("#TRX_NUMBER").val();
		var STATUS			= $("#STATUS").val();
		var KODE_LAYANAN	= $("#KODE_LAYANAN").val();
		var CUSTOMER_NAME	= $("#CUSTOMER_NAME").val();
		var tgl_nota		= $("#tgl_nota").val();
		var tgl_nota2		= $("#tgl_nota2").val();
		var panjang			= panjang;
		var KD_CABANG		= 10;
		var PAGE			= 1;
		var datenota = "-";

		$('#dttable').dataTable({
			"destroy": true,
		  	"dom" : "brtlp",
			"ajax": {
			    "url": path,
			    data : function ( d ) {
	          		d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
	          		d.KD_CABANG 	= KD_CABANG;
	          		d.TRX_NUMBER 	= TRX_NUMBER;
	          		d.STATUS 		= STATUS;
	          		d.KODE_LAYANAN 	= KODE_LAYANAN;
	          		d.CUSTOMER_NAME = CUSTOMER_NAME;
	          		d.tgl_nota 		= tgl_nota;
	          		d.tgl_nota2 	= tgl_nota2;
	          		d.panjang 		= panjang;
	          		d.PAGE 			= PAGE;
		        },
			    "type": "POST"
			  },
			  "columns": [
	                        { "data": "RNUM" },
	                        { "data": "TRX_NUMBER" },
	                        { "data": "TGL_PRANOTA" },
	                        { "data": "CUSTOMER_NAME" },
	                        { "data": "KODE_LAYANAN" },
	                        { "data": "AMOUNT_TOTAL" },
	                        { "data": "action" },
	                    ],
		});

        return false;
	}
	function cleardata(){

	}



	/* endang */
	function clickDialogDoc(a,b,c){
		console.log('a: ' + a);
		console.log('b: ' + b);
		console.log('c: ' + c);

		if((b=='NPE') ||(b=='DO')) {
			$('#frameDoc1').attr('src', a);
			$("#dialogDoc1").dialog({
				modal:false,
				height:550,
				width:950,//position:['middle',20],
				title: 'View '+b+' file test',
				buttons: { "Valid": function() {
					if (b=="NPE"){
						var flag_code = "npe_file_flag";
					} else if (b=="DO"){
						flag_code = "do_file_flag";
					}
					var this_obj = $(this);
					var url = "<?=ROOT?>approval_request/validate_doc/"+c+"/"+flag_code+"/Y";
					$.post(url, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'}, function(data){
						$("img[class=checktick][data-noreq="+c+"][data-flag="+b+"]").attr("src", "<?=IMAGES_?>/cr/small_tick.png").attr('data-valid', 'Y');
						toggleActivateApproveButton(c);
						this_obj.dialog("close");
					});
				}, "Not Valid": function() {
					if (b=="NPE"){
						var flag_code = "npe_file_flag";
					} else if (b=="DO"){
						flag_code = "do_file_flag";
					}
					var this_obj = $(this);
					var url = "<?=ROOT?>approval_request/validate_doc/"+c+"/"+flag_code+"/N";
					$.post(url, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'}, function(data){
						$("img[class=checktick][data-noreq="+c+"][data-flag="+b+"]").attr("src", "<?=IMAGES_?>/cr/small_help.png").attr('data-valid', 'N');
						toggleActivateApproveButton(c);
						this_obj.dialog("close");
					});
				}}
			});

		}
		else if((b=='PEB')||(b=='SPPB')) {
			$('#frameDoc2').attr('src', a);
			$("#dialogDoc2").dialog({
				modal:false,
				height:550,
				width:950,//position:['middle',20],
				title: 'View '+b+' file',
				buttons: { "Valid": function() {
					if (b=="PEB"){
						var flag_code = "peb_file_flag";
					} else if (b=="SPPB"){
						flag_code = "sppb_file_flag";
					}
					var this_obj = $(this);
					var url = "<?=ROOT?>approval_request/validate_doc/"+c+"/"+flag_code+"/Y";
					$.post(url, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'}, function(data){
						$("img[class=checktick][data-noreq="+c+"][data-flag="+b+"]").attr("src", "<?=IMAGES_?>/cr/small_tick.png").attr('data-valid', 'Y');
						toggleActivateApproveButton(c);
						this_obj.dialog("close");
					});
				}, "Not Valid": function() {
					if (b=="PEB"){
						var flag_code = "peb_file_flag";
					} else if (b=="SPPB"){
						flag_code = "sppb_file_flag";
					}
					var this_obj = $(this);
					var url = "<?=ROOT?>approval_request/validate_doc/"+c+"/"+flag_code+"/N";
					$.post(url, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'}, function(data){
						$("img[class=checktick][data-noreq="+c+"][data-flag="+b+"]").attr("src", "<?=IMAGES_?>/cr/small_help.png").attr('data-valid', 'N');
						toggleActivateApproveButton(c);
						this_obj.dialog("close");
					});
				}}
			});
		}
		else if(b=='BKS'||b=='SPC') {
			$('#frameDoc3').attr('src', a);
			$("#dialogDoc3").dialog({
				modal:false,
				height:550,
				width:950,//position:['middle',20],
				title: 'View Booking Shipping file',
				buttons: { "Valid": function() {
					if (b=="BKS"){
						var flag_code = "bookship_file_flag";
					} else if (b=="SPC"){
						flag_code = "sp_custom_file_flag";
					}
					var this_obj = $(this);
					var url = "<?=ROOT?>approval_request/validate_doc/"+c+"/"+flag_code+"/Y";
					$.post(url, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'}, function(data){
						$("img[class=checktick][data-noreq="+c+"][data-flag="+b+"]").attr("src", "<?=IMAGES_?>/cr/small_tick.png").attr('data-valid', 'Y');
						toggleActivateApproveButton(c);
						this_obj.dialog("close");
					});
				}, "Not Valid": function() {
					if (b=="BKS"){
						var flag_code = "bookship_file_flag";
					} else if (b=="SPC"){
						flag_code = "sp_custom_file_flag";
					}
					var this_obj = $(this);
					var url = "<?=ROOT?>approval_request/validate_doc/"+c+"/"+flag_code+"/N";
					$.post(url, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'}, function(data){
						$("img[class=checktick][data-noreq="+c+"][data-flag="+b+"]").attr("src", "<?=IMAGES_?>/cr/small_help.png").attr('data-valid', 'N');
						toggleActivateApproveButton(c);
						this_obj.dialog("close");
					});
				}}
			});
		}
		$('a').removeAttr('disabled');
	}
	/* endang */

</script>

<script>
	function link_rupa(){
		window.location.href="<?php echo ROOT; ?>einvoice/nota/adv_rupa";
	}
</script>
