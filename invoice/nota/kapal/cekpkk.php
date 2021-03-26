
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
			<li class="active"><span>CEK PKK</span></li>
		</ol>

		<h1>CEK PKK</h1>
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
											<label for="" class="col-sm-4 control-label">Nota PKK</label>
											<div class="row">
												<div class="col-xs-4">
													<input type="input" name="" id="" class="form-control" placeholder="Nota PKK">

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-4 control-label">No PPKB</label>
											<div class="row">
												<div class="col-xs-4">
													<input type="input" name="" id="" class="form-control" placeholder="No PPKB">

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="col-lg-12">

								<div class="col-md-6">
									<div class="box-body">
										<div class="form-group">
								            <div class="col-sm-offset-12 col-sm-10">
								              <button type="submit" class="btn btn-primary" style="color:white;"> Clear</button>
								              <button type="" class="btn btn-primary"><!-- <a href="<?php //echo base_url('');?>" > --><i class="fa fa-search" style="color:white;"> </i> Search<!-- </a> --></button>
								            </div>
				      					</div>
				  					</div>
				          		</div>
		          			</div><!-- </div> -->
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
								<th>No</th>
								<th>No PKK</th>
								<th>Kode Kapal (Nama Kapal)</th>
								<th>Tanggal Jam Tiba</th>
								<th>Tanggal Jam Keluar</th>
								<th>Three Portied</th>
								<th>Kode Proses</th>


							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>BAJ00000</td>
								<td>KPL987 TANTO MANIS</td>
								<td>28/02/2018 20.00</td>
								<td>29/02/2018 17.00</td>
								<td>Upper</td>
								<td>3</td>
							</tr>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js">
</script>

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

<script>
function link_kapal(){
	window.location.href="<?php echo ROOT;?>einvoice/nota/adv_kapal";
}
</script>
