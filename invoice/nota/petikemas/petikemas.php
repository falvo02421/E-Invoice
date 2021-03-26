<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>Nota</li>
			<li class="active"><span>Petikemas</span></li>
		</ol>
		<h1>NOTA PETIKEMAS</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<header class="main-box-header clearfix">
			</header>
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
				  		<form class="form-horizontal">
							<div class="col-md-6">
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No Nota</label>
											<div class="row">
												<div class="col-xs-5">
						                  		<input type="text"  name="ID_NOTA" id="ID_NOTA" class="form-control" placeholder="No Nota">
						                		</div>
					                		</div>
					             		</div>
				             		</div>

				             		<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No Pranota</label>
											<div class="row">
												<div class="col-xs-5">
						                  		<input type="text" name="ID_REQ" id="ID_REQ" class="form-control" placeholder="No Pronota">
						                		</div>
					                		</div>
					             		</div>
				             		</div>

					             	<div class="form-group">
					             		<div class="box-body">
					             			<label for="" class="col-sm-3 control-label">Status Bayar</label>
					                		<div class="row">
												<div class="col-xs-5">
							                  		<select  name="STATUS" id="STATUS"  class="form-control select2" style="width: 100%;">
														<option></option>
														<option>Lunas</option>
													</select>
						                		</div>
					                		</div>
					             		</div>
									</div>

									<div id="peti_adv1" class="collapse">
										<div class="form-group">
											<div class="box-body">
													<label for="" class="col-sm-3 control-label">Jenis Nota</label>
												<div class="row">
													<div class="col-xs-5">
															<select class="form-control select2" style="width: 100%;">
																<option></option>
																<option>Jenis 1</option>
															</select>
													</div>
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
											<label for="" class="col-sm-3 control-label">Customer</label>
											<div class="row">
												<div class="col-xs-5">
						                  			<input type="text" name="CUSTOMER_NAME" id="CUSTOMER_NAME" class="form-control" placeholder="Customer">
						                		</div>
				                			</div>
										</div>
									</div>

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Tanggal Nota</label>
											<div class="row">
												<div class="col-xs-4">
													<div class="input-group">
														<input type="text" name="tgl_nota" class="form-control form_datetime" placeholder="dd/mm/yy">
														<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
													</div>
						             </div>
						             <div class="col-xs-4">
													 <div class="input-group">
														 <input type="text" name="keluar_nota" class="form-control form_datetime" placeholder="dd/mm/yy">
														 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
													 </div>
						              </div>
				               </div>
										</div>
									</div>

									<div id="peti_adv2"class="collapse">
										<div class="form-group">
														<div class="box-body">
															<label for="" class="col-sm-3 control-label">Jenis Pelayaran</label>
																<div class="row">
													<div class="col-xs-5">
																			<select class="form-control select2" style="width: 100%;">
															<option></option>
															<option>Jenis Pelayaran 1</option>
														</select>
																	</div>
																</div>
														</div>
										</div>

										<div class="form-group">
														<div class="box-body">
															<label for="" class="col-sm-3 control-label">Area</label>
																<div class="row">
													<div class="col-xs-5">
																			<select class="form-control select2" style="width: 100%;">
															<option></option>
															<option>Area 1</option>
														</select>
																	</div>
																</div>
														</div>
										</div>

										<div class="form-group">
														<div class="box-body">
															<label for="" class="col-sm-3 control-label">Penerbit Nota</label>
																<div class="row">
													<div class="col-xs-5">
																			<select class="form-control select2" style="width: 100%;">
															<option></option>
															<option>Penerbit Nota 1</option>
														</select>
																	</div>
																</div>
														</div>
										</div>

									</div>

							</div>
							</div>

							<div class="col-lg-12">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div class="box-body">
										<div class="form-group">
											<!-- <div class="box -body"> -->
													<div class="col-sm-offset-2 col-sm-10">
													<button data-toggle="collapse" type="button" class="btn btn-primary" data-target="#peti_adv1,#peti_adv2">Advance Search</button>
													<button type="button" onclick="ClearSearch()" class="btn btn-primary" data-toggle="" data-target=""> Clear</button>
													<button type="button" onclick="loaddata();" class="btn btn-primary"><!-- <a href="<?php echo base_url('');?>" > --><i class="fa fa-search"></i> Search<!-- </a> --></button>
															</div>
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
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="main-box-body clearfix">
				<div class="table-responsive">
					<table id="table-example" class="table table-hover">
						<thead>
							<tr>
								<th>No.</th>
								<th width="15%">No Nota</th>
								<!-- <th>Area</th> -->
								<th>Jenis Nota</th>
								<th>Tanggal Nota</th>
								<th>Customer</th>
								<th>Jumlah Total</th>
								<th>Status Bayar</th>
								<th>Pernah Cetak</th>
								<th>Pernah Kirim</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<!-- <tbody id="show_data">

						</tbody> -->
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="petisend" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
	        <div style="background-color:#B22222;" class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 style="color:white"; class="modal-title">Kirim Nota ke Customer</h4>
	        </div>
	        <div class="modal-body">
		        <form action="" id="form">
		            <div class="form-group">
	                	<div class="box-body">
							<label for="exampleTextarea"></label>
							<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf"></textarea>
						</div>
				    </div>
				    <div class="form-group">
	                	<p>Kirim Nota Ke:</p>
	                </div>
	                <div class="form-group">
	                	<div class="box-body">
			                <label for="" class="col-sm-3 control-label">Customer</label>
							<div class="row">
								<div class="col-xs-8">
									<input type="text" name="" id="" class="form-control" placeholder="Customer">
								</div>
							</div>
		                </div>
	                </div>
	                <div class="form-group">
	                	<div class="box-body">
			                <label for="" class="col-sm-3 control-label">Email Cutomer</label>
			                <div class="row">
				                <div class="col-xs-8">
				                  <input type="text" name="nama" id="" placeholder="email customer" class="form-control">
				                </div>
			            	</div>
		            	</div>
	                </div>
		        </form>
	        </div>
		    <div class="modal-footer">
		        <button type="button"  id="" onclick="send()" class="btn btn-default">Send</button>
		       <!--  <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button> -->
		    </div>
	    </div>
	</div>
</div>

<div id="petiprint" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
	        <div style="background-color:#B22222;" class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 style="color:white"; class="modal-title">Halaman Print Petikemas</h4>
	        </div>
	        <div class="modal-body">
		        <form action="" id="form">
		            <div class="form-group">
	                	<div class="box-body">
							<label for="exampleTextarea"></label>
							<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf nanti isi halaman print pdf"></textarea>
						</div>
				    </div>
		        </form>
	        </div>
	    </div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- <script src="<?=CUBE_?>js/jquery.js"></script> -->

<!-- <script src="<?=CUBE_?>js/jquery.dataTables.js"></script>
 --><!-- <script src="<?//=CUBE_?>js/dataTables.fixedHeader.js"></script> -->
<!-- <script src="<?=CUBE_?>js/dataTables.tableTools.js"></script> -->
<!-- <script src="<?=CUBE_?>js/jquery.dataTables.bootstrap.js"></script> -->
<!-- <script>
	function show_advanced() {
		var x = document.getElementById("myDIV");
		if(x.style.display === "none"){
		   x.style.display = "block";

	}else{
		x.style.display = "none";
	}
}
</script> -->
<script type="text/javascript">
    $(".form_datetime").datepicker({
        format: "dd/mm/yyyy",
        todayBtn: true,
        autoclose: true,
    });
</script>

<script>
	$(document).ready(function() {
		var table = $('#table-example').dataTable({
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
		});
	});
	function ClearSearch(){
			location.reload();
	}
</script>

<script type="text/javascript">

	$( document ).ready(function() {
		loaddata();
		// alert( "ready!" );
	});

	function loaddata(){
		// // alert('1234');
		// // alert(1234);
		// var path = '';
		// path = "<?php echo ROOT.'einvoice/nota/adv_petikemas';?>";

		// var ID_NOTA 		= $("#ID_NOTA").val();
		// var ID_REQ 			= $("#ID_REQ").val();
		// // var STATUS 		= $("#STATUS").val();
		// var STATUS 			= 'P';
		// var CUSTOMER_NAME 	= $("#CUSTOMER_NAME").val();
		// var CREATION_DATE 	= $("#tgl_nota").val();
		// var TRX_DATE 		= $("#keluar_nota").val();

		// $.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		// 	TRX_NUMBER:ID_NOTA,
		// 	BILLER_REQUEST_ID:ID_REQ,
		// 	STATUS:STATUS,
		// 	CUSTOMER_NAME:CUSTOMER_NAME,
		// 	CREATION_DATE:CREATION_DATE,
		// 	TRX_DATE:TRX_DATE
		// }).done(function( data ) {
		// 	var data1 = JSON.parse(data);
		// 	var html = '';
		// 	var i;
		// 	for(i=0; i<Object.keys(data1).length; i++){
		// 		html += '<tr>'+
		// 				'<td>'+data1[i].TRX_NUMBER+'</td>'+
		// 				'<td>'+data1[i].TERMINAL+'</td>'+
		// 				//'<td>'+data1[i].KD_MODUL+'</td>'+
		// 				'<td>'+data1[i].HEADER_SUB_CONTEXT+'</td>'+
		// 				'<td>'+data1[i].TRX_DATE+'</td>'+
		// 				'<td>'+data1[i].CUSTOMER_NAME+'</td>'+
		// 				'<td>'+data1[i].AMOUNT+'</td>'+
		// 				'<td>'+data1[i].STATUS+'</td>'+
		// 				'<td><center><input type="checkbox"></center></td>'+
		// 				'<td><center><input type="checkbox"></center></td>'+
		// 				'<td><center><a target="_blank" class="btn btn-primary fa-lg" href="<?php echo ROOT;?>einvoice/nota/cetak_nota/petikemas/'+data1[i].TRX_NUMBER+'"><i class="fa fa-print"></i></a></center></td>'+
		// 				'</tr>';
		// 	}
		// 	//alert(html);die;
		// 	$('#show_data').html(html);
		path = "<?php echo ROOT.'einvoice/nota/adv_petikemas';?>";
		
		var ID_NOTA 		= $("#ID_NOTA").val();
		var ID_REQ 			= $("#ID_REQ").val();
		// var STATUS 		= $("#STATUS").val();
		var STATUS 			= 'P';
		var CUSTOMER_NAME 	= $("#CUSTOMER_NAME").val();
		var CREATION_DATE 	= $("#tgl_nota").val();
		var TRX_DATE 		= $("#keluar_nota").val();
		var MODULE 	= 'PETIKEMAS'; ///utk : KAPAL atau RUPA atau BARANG atau PETIKEMAS


		$('#table-example').dataTable({
			"destroy": true,
		  	"dom" : "brtlp",
			"ajax": {
			    "url": path,
			    data : function ( d ) {
	          		d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
	          		d.ID_NOTA = ID_NOTA; 
					d.ID_REQ = ID_REQ;
					d.STATUS = STATUS;
					d.CUSTOMER_NAME = CUSTOMER_NAME;
					d.CREATION_DATE = CREATION_DATE;
					d.TRX_DATE = TRX_DATE;
					d.MODULE = MODULE;

					//alert(KD_MODUL);
		        },
			    "type": "POST"
			  },
			  "columns": [
	                        { "data": "num" },
	                        { "data": "TRX_NUMBER" },
	                        // { "data": "TERMINAL" },
	                        { "data": "JENIS" },
	                        { "data": "TRX_DATE" },
	                        { "data": "CUSTOMER_NAME" },
	                        { "data": "AMOUNT" },
	                        { "data": "STATUS"},
	                        { "data": "cetak" },
	                        { "data": "kirim" },
	                        { "data": "action" },
	                    ],
        });

        return false;
	}
</script>
