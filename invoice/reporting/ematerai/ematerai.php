<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>Reporting</li>
			<li class="active"><span>Laporan Penggunaan e-Materai</span></li>
		</ol>
		
		<h1>Laporan Penggunaan e-Materai</h1>
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
									<div class="box-body">
											<label for="" class="col-sm-3 control-label">Organizational Unit</label>
											<div class="row">
												<div class="col-xs-5">
													<select class="form-control select2" style="width: 100%;">
														<option>All</option>
														<option>Terminal 1</option>
														<option>Terminal 2</option>
													</select>
												</div>
											</div>
										</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Periode</label>
											<div class="row">
												<div class="col-xs-3">
						                  			<input type="text" name="" id="tgl_nota" class="form-control" placeholder="Tanggal">
						                		</div>
						                		<div class="col-xs-3">
						                  			<input type="text" nama="" id="keluar_nota" class="form-control" placeholder="Tanggal">
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
								              <button type="button" onclick="#" class="btn btn-primary btn-lg"> Clear</button>
								              <button type="button" onclick="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#"><i class="fa fa-search"></i> Search</a></button>
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
								<th>No</th>
								<th>No Nota</th>
								<th>No Doc</th>
								<th>Customer</th>
								<th>Curr</th>
								<th>Layanan</th>
								<th>Jenis Layanan</th>
								<th>No Pajak</th>
								<th>Pendapatan</th>
								<th>PPn</th>
								<th>Total</th>
								<th>Materai</th>
								<th>Area</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>12345643</td>
								<td>Doc.12345</td>
								<td>PT.ABC</td>
								<td>Tes</td>
								<td>Delivery</td>
								<td>Tes</td>
								<td>12345643</td>
								<td>10.000.000</td>
								<td>2%</td>
								<td>10.100.0000</td>
								<td>6000</td>
								<td>Tj Priok</td>
							</tr>
							<tr>
								<td>1</td>
								<td>12345643</td>
								<td>Doc.12345</td>
								<td>PT.ABC</td>
								<td>Tes</td>
								<td>Delivery</td>
								<td>Tes</td>
								<td>12345643</td>
								<td>10.000.000</td>
								<td>2%</td>
								<td>10.100.0000</td>
								<td>6000</td>
								<td>Tj Priok</td>
							</tr>
							<tr>
								<td>1</td>
								<td>12345643</td>
								<td>Doc.12345</td>
								<td>PT.ABC</td>
								<td>Tes</td>
								<td>Delivery</td>
								<td>Tes</td>
								<td>12345643</td>
								<td>10.000.000</td>
								<td>2%</td>
								<td>10.100.0000</td>
								<td>6000</td>
								<td>Tj Priok</td>
							</tr>
							<tr>
								<td>1</td>
								<td>12345643</td>
								<td>Doc.12345</td>
								<td>PT.ABC</td>
								<td>Tes</td>
								<td>Delivery</td>
								<td>Tes</td>
								<td>12345643</td>
								<td>10.000.000</td>
								<td>2%</td>
								<td>10.100.0000</td>
								<td>6000</td>
								<td>Tj Priok</td>
							</tr>
						</tbody>
					</table>
					<div class="col-md-6">
						<div class="box-body">
							<div class="form-group">
								<div class="col-sm-offset-10 col-sm-12">
									<button type="submit" class="btn btn-info btn-lg" data-toggle="" data-target="">Export To Excel</button>
									<a type="submit" class="btn btn-info btn-lg" data-toggle="model" data-target="_blank" href="<?php echo ROOT;?>einvoice/reporting/cetak_ematerai/ematerai">Print Report</a>
								</div>
							</div>
						</div>
					</div>
				</div>
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
</script>