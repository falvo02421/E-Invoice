<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css" type="text/css" />
<style>.dt-buttons{display:none}</style>
<style>.custom {
    /*font-size: 8px;*/
    /*font-family: Arial;*/
</style>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>Reporting</li>
			<li class="active"><span>Laporan Periodik</span></li>
		</ol>
		
		<h1>Laporan Periodik</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<header class="main-box-header clearfix"></header>
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
				  		<form class="form-horizontal" action="#" method="post" id="form2">
							<div class="col-md-6">
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Layanan</label>
											<div class="row">
												<div class="col-xs-5">
													<select name="INV_NOTA_LAYANAN" id="INV_NOTA_LAYANAN" class="form-control select2" style="width: 100%;">
														<option value="">All</option>
														<option value="KPL">KAPAL</option>
														<option value="BRG">BARANG</option>
														<option value="PTKM">PETIKEMAS</option>
														<option value="RUPA">RUPA-RUPA</option>
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
	                                                            <option value="TAGIHAN JASA BARANG">NOTA TAGIHAN JASA BARANG</option>
																<option value="DERMAGA PENUMPUKAN">NOTA DERMAGA PENUMPUKAN</option>
																<option value="ANGKUTAN LANGSUNG">NOTA ANGKUTAN LANGSUNG</option>
																<option value="PELAYARAN DALAM NEGERI">PELAYARAN DALAM NEGERI</option>
																<option value="PELAYARAN LUAR NEGERI">PELAYARAN LUAR NEGERI</option>
																<option value="RECEIVING">RECEIVING</option>
																<option value="DELIVERY">DELIVERY</option>
																<option value="BONGKAR MUAT">BONGKAR MUAT</option>
																<option value="BEHANDLE">BEHANDLE</option>
																<option value="PERPANJANGAN DELIVERY">PERPANJANGAN DELIVERY</option>
																<option value="BATAL MUAT">BATAL MUAT</option>
																<option value="LISTRIK">NOTA LISTRIK</option>
																<option value="TANAH DAN BANGUNAN">NOTA TANAH DAN BANGUNAN</option>
																<option value="PAS PELABUHAN">NOTA PAS PELABUHAN</option>
																<option value="RETRIBUSI ALAT">NOTA RETRIBUSI ALAT</option>
																<option value="LAIN MANUAL">NOTA LAIN MANUAL</option>
																<option value="SEWA ALAT USTER">NOTA SEWA ALAT USTER</option>

	                                                        </select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Status Bayar</label>
											<div class="row">
												<div class="col-xs-5">
													<select name="STATUS_BAYAR" id="STATUS_BAYAR" class="form-control select2" style="width: 100%;">
														<option value="">All</option>
														<option value="BELUM_LUNAS">BELUM LUNAS</option>
														<option value="P">LUNAS</option>
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
											<label for="" class="col-sm-3 control-label">Customer</label>
											<div class="row">
												<div class="col-xs-5">
						                  			<input type="text" name="CUSTOMER" id="CUSTOMER" class="form-control" placeholder="CUSTOMER">
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

							<div class="col-md-9">
								<div class="box-body">
									<div class="form-group">
							            <div class="col-sm-offset-12 col-sm-10">
								              <button type="button" onclick="ClearSearch()" class="btn btn-primary btn-lg" data-toggle="" data-target=""> Clear</button>
								              <button type="button" class="btn btn-primary"  onclick="loaddata()" ><i class="fa fa-search" style="color:white;"> </i> Search</button>
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
					<table  class="table table-hover custom" id="dynamic-table">
						<thead>
							<tr>
								<th class="all">No</th>
								<th class="all">No Nota</th>
								<th class="none col-md-2">No Doc</th>
								<th class="all">Customer</th>
								<th class="all">Curr</th>
								<th class="all">Layanan</th>
								<th class="all">Jenis Nota</th>
								<th class="all col-md-2">No Pajak</th>
								<th class="all">Pendapatan</th>
								<th class="all">PPN</th>
								<th class="all">Total</th>
								<th class="all">Status Transfer</th>
								<th class="all">Status Lunas</th>
								<th class="all">Tgl Lunas</th>
								<th class="all">Bank</th>
							</tr>
						</thead>
					</table>
					<div class="margin3">
	            <div class="col-sm-8">
					<div class="box-body">
						<div class="form-group">
							<div class="col-sm-12 col-sm-8">
								<button id="excelexport" class="btn btn-primary btn-lg" >Export To Excel</button>
								<button id="pdfexport"   class="btn btn-primary btn-lg" >Print Report</button>
								<!--
								<button type="submit" class="btn btn-info btn-lg" data-toggle="" data-target="">Print Report</button>
								-->
 							</div>
 						</div>
 					</div>
 				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>

<script type="text/javascript">
    //Date picker
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
	$(document).ready(function() {
		loaddata();
		/*
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
		*/
	});
	function ClearSearch(){
			$('[name="LAYANAN"]').val('');
			$('[name="JENIS_NOTA"]').val('');
			$('[name="STATUS_BAYAR"]').val('');
			$('[name="CUSTOMER"]').val('');
			$('[name="TGL_START"]').val('');
			$('[name="TGL_END"]').val('');
			//$('[name="TGL_END"]').val('');
	}
		$("#excelexport").click(function(){
			$(".dt-button.buttons-excel.buttons-html5").click(); 
		return false;
		});

		$("#pdfexport").click(function(){
			$(".dt-button.buttons-pdf.buttons-html5").click(); 
		return false;
		});


	function loaddata(){
		// alert('1234');
		// alert(1234);
		var path = '';
		path = "<?php echo ROOT.'einvoice/nota/periodiksearch';?>";

		var CUSTOMER_NAME		= $('#CUSTOMER').val();
		var INV_NOTA_JENIS		= $('#INV_NOTA_JENIS').val();
		var HEADER_CONTEXT	 	= $("#INV_NOTA_LAYANAN").val();
		var STATUS 				= $("#STATUS_BAYAR").val();

		$('#dynamic-table').DataTable( {
				"pageLength": 10,
				"fixedHeader": true,
				"autoWidth": true,
				"destroy": true, responsive: true,
				dom: 'Bfrtip',
        buttons: [ {
			       extend: 'pdfHtml5',
			       filename: 'Laporan Periodik',
			       orientation: 'landscape',
			       pageSize: 'A4',
					customize: function(doc) {
						doc.defaultStyle.fontSize = 8; //<-- set fontsize to 16 instead of 10 
						doc.defaultStyle.alignment = 'left';
						doc.styles.title.fontSize = 20;
						doc.styles.tableHeader.fontSize = 10;
						doc.pageMargins = [20,60,20,30];
						doc['header']=(function() {
							return {
								columns: [
									{
										alignment: 'left',
										italics: true,
										text: 'Laporan : All',
										fontSize: 10,
										margin: [ 10, 35, 0, 0 ],
									},

									{
										alignment: 'Center',
										italics: true,
										text: 'Laporan Periodik',
										fontSize: 16,
										margin: [73,0]
									},
									{
										alignment: 'right',
										fontSize: 10,
										margin: [ 10, 35, 0, 0 ],
										text: 'Periode : All'
									}
								],
								margin: 10
							}
						});
					}

			     },
			     {
			     	extend: 'excel'
			     } ],
				"ajax": {
					"url": path,
					data : function ( d ) {
								d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
								/*d.INV_NOTA_JENIS	= INV_NOTA_JENIS;*/
								
								d.INV_NOTA_JENIS	= INV_NOTA_JENIS;
								d.CUSTOMER_NAME		= CUSTOMER_NAME;
								d.HEADER_CONTEXT	= HEADER_CONTEXT;
								d.STATUS 			= STATUS;
						},
					"type": "POST"
				},
				"columns": [
										{ "data": "num" },
										{ "data": "BILLER_REQUEST_ID" },
										{ "data": "DOC_NUM" },
										{ "data": "CUSTOMER_NAME"},
										{ "data": "CURRENCY_CODE"},
										{ "data": "INV_NOTA_LAYANAN" },
										{ "data": "INV_NOTA_JENIS"},
										{ "data": "CUSTOMER_NPWP"},
										{ "data": "AMOUNT_DASAR_PENGHASILAN" },
										{ "data": "PPN_DIPUNGUT_SENDIRI"},
										{ "data": "AMOUNT"},
										{ "data": "STATUS_TRANSFER"},
										{ "data": "STATUS_LUNAS"},
										{ "data": "TGL_PELUNASAN"},	
										{ "data": "INV_BANK_NAME"},
				],} );

		return false;
	}
</script>