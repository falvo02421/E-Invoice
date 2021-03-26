<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>Administrasi</li>
			<li class="active"><span>Log Nota</span></li>
		</ol>

		<h1>LOG NOTA</h1>
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
											<label for="" class="col-sm-3 control-label">Customer</label>
											<div class="row">
												<div class="col-xs-6">
						                  			<input type="text" name="customer" id="customer" class="form-control" placeholder="Customer">
						                		</div>
					                		</div>
					             		</div>
				             		</div>

				             		<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Periode</label>
											<div class="row">
												<div class="col-xs-3">
						                 <input type="text" name="start_periode" id="start_periode" class="form-control" placeholder="Start Date">
						              </div>
						              <div class="col-xs-3">
						                 <input type="text" name="end_periode" id="end_periode" class="form-control" placeholder="End Date">
						               </div>
					                		</div>
					             		</div>
				             		</div>

				             		<!-- <div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Layanan</label>
											<div class="row">
												<div class="col-xs-6">
													<select class="form-control select2" name="SLAYANAN" id="SLAYANAN"  style="width: 100%;"> -->
														<!-- <option value="" disabled selected>All</option> -->
													<!-- 	<option value="all">All</option>
														<option value="kapal">KAPAL</option>
														<option value="barang">BARANG</option>
														<option value="petikemas">PETIKEMAS</option>
														<option value="ruparupa">RUPARUPA</option>
													</select>
												</div>
											</div>
					             		</div>
				             		</div> -->
								</div>
							</div>

							<div class="col-md-9">
								<div class="box-body">
									<div class="form-group">
							            <div class="col-sm-offset-12 col-sm-10">
								              <button type="button" onclick="ClearSearch()"  class="btn btn-primary btn-sm" data-toggle="" data-target=""> Clear</button>
								              <button type="button" onclick="loaddata()" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i> Search</a></button>
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
<!-- <div class="row">
	<div class="box-body">
		<div class="form-group">
			<div class="text-right">

			    <button  type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#add_entity"><i class="fa fa-plus"></i></button>
			</div>
		</div>
	</div>
</div> -->
<!-- <button type="Clear" class="btn btn-info btn-lg" data-toggle="modal" data-target="#add_entity" style="float: right;"><i class="fa fa-plus-square"></i></button> -->

<div class="row">
	<div class="clo-lg-12">
		<div class="main-box clearfix">
			<div class="main-box-body clearfix">
				<div class="table-responsive">

				</div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" value="" name="ID" id="ID" class="form-control" placeholder="Kode Entity"/>



<input type="hidden" value="" name="ROWID" id="ROWID" class="form-control" placeholder="Kode Entity"/>
<input type="hidden" value="" name="ROWID1" id="ROWID1" class="form-control" placeholder="Kode Entity"/>
<input type="hidden" value="" name="ROWID2" id="ROWID2" class="form-control" placeholder="Kode Entity"/>
<input type="hidden" value="" name="ROWID3" id="ROWID3" class="form-control" placeholder="Kode Entity"/>
<input type="hidden" value="" name="ROWID4" id="ROWID4" class="form-control" placeholder="Kode BANK"/>
<input type="hidden" value="" name="ROWID5" id="ROWID5" class="form-control" placeholder="Kode SIGNBANK"/>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("INV_ENTITY_LOGO").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>

<script type="text/javascript">
function PreviewEdit() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("INV_ENTITY_LOGO1").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>




<script>
 $('#start_periode').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    });

    $('#end_periode').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
      // startDate: '-3d'
    });
$( document ).ready(function() {

	loaddata();


		//table-materai

	// $('#table-materai').({
	// 	"responsive": true,
	// 	"bPaginate": true,
	// 	"bLengthChange": false,
	// 	"bFilter": false,
	// 	"bInfo": false,
	// 	"pageLength": 5,
	// 	"iDisplayLength": 5,
	// 	"bAutoWidth": false });
	// $('#myTable').dataTable({
	// 	"responsive": true,
	// 	"bPaginate": true,
	// 	"bLengthChange": false,
	// 	"bFilter": false,
	// 	"bInfo": false,
	// 	"pageLength": 10,
	// 	"iDisplayLength": 5,
	// 	"bAutoWidth": false });
	});

	function editall($id)
	{
		// alert($id); INV_ENTITY_NAME2
		$('[name="ROWID"]').val($id);
		// $('[name="INV_ENTITY_NAME2"]').val($id);
		editentity($id);
		loaddatamaterai($id);
		loaddatafaktur($id);
		// $('#update_entity').modal('show');
	}

	function saveallnew()
	{
		saveentity();
		savematerai();
		savefaktur();
		// $('#update_entity').modal('show');
	}

	function updateall($id)
	{
		updateentity($id);
		// savematerai($id);
		// savefaktur($id);
		// $('#update_entity').modal('show');
	}

	function loaddata(){
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterlognotasearch';?>";

		$(".table-responsive").html('<table id="myTable" class="table table-hover"><thead><tr><th>No</th><th>Tanggal</th><th>Customer</th><th>Layanan</th><th>Jenis Nota</th></tr></thead><tbody id=show_data></tbody></table>');

		var log_customer	= $("#customer").val();
		var start_periode  	= $("#start_periode").val();
		var end_periode  	= $("#end_periode").val();

		var ID_NOTA 	= $("#ID_NOTA").val();
		var Costumer 	= $("#Costumer").val();

		var MODULE 		= '';
		/*var tanggal = [{no:"01",tgl:"JAN"},{no:"02",tgl:"FEB"},{no:"03",tgl:"MAR"},{no:"04",tgl:"APR"},{no:"05",tgl:"MAY"},{no:"06",tgl:"JUN"},{no:"07",tgl:"JUL"},{no:"08",tgl:"AUG"},{no:"09",tgl:"SEP"},{no:"10",tgl:"OCT"},{no:"11",tgl:"NOV"},{no:"12",tgl:"DEC"}];*/
		// alert(INV_ENTITY_CODE);
		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			// log_customer:log_customer,
			CREATION_DATE:start_periode,
			TRX_DATE:end_periode,
			ID_NOTA:ID_NOTA,
			CUSTOMER_NAME:log_customer,
			MODULE:MODULE

		}).done(function( data ) {
			var data1 = JSON.parse(data);
			// alert(data1);die;
			var html = '';
			var i;
			var $no=0;
			for(i=0; i<Object.keys(data1).length; i++){
				/*var m = data1[i].TRX_DATE.split("-");
				for (var j = 0; j < tanggal.length; j++) {
					if(m[1]==tanggal[j].tgl){
						data1[i].TRX_DATE = m[0]+"-"+tanggal[j].no+"-"+m[2];
					}
				}*/
				$no++;
				html += '<tr>'+
						'<td>'+$no+'</td>'+
						// '<td>'+data1[i].TRX_NUMBER+'</td>'+
						'<td>'+data1[i].TRX_DATE+'</td>'+
						'<td>'+data1[i].CUSTOMER_NAME+'</td>'+
						'<td>'+data1[i].INV_NOTA_LAYANAN+'</td>'+
						'<td>'+data1[i].INV_NOTA_JENIS+'</td>'+
						'</tr>';
			}
			// alert(html);die;
			$('#show_data').html(html);

			$('#myTable').dataTable({
				"responsive": true,
				"bPaginate": true,
				"bLengthChange": true,
				"bFilter": false,
				"bInfo": false,
				"iDisplayLength": 5,
				"pageLength": 10 });
	        });

        return false;
	}

	function ClearAddNew(){
		$('[name="INV_ENTITY_CODE"]').val('');
		$('[name="INV_ENTITY_NAME"]').val('');
		$('[name="INV_ENTITY_ALAMAT"]').val('');
		$('[name="INV_ENTITY_NAME"]').val('');
		$('[name="INV_ENTITY_STATUS"]').val('');

	}

$( document ).ready(function() {
		//loaddata();
		// alert( "ready!" );
	});

	function ClearSearch(){
		$('[name="customer"]').val('');
		$('[name="start_periode"]').val('');
		$('[name="end_periode"]').val('');
	}

	function saveentity()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterentitysave';?>";

		// var INV_ENTITY_ID 		= $("#INV_ENTITY_CODE").val();
		var INV_ENTITY_CODE 	= $("#INV_ENTITY_CODE").val();
		var INV_ENTITY_NAME 	= $("#INV_ENTITY_NAME").val();
		var INV_ENTITY_ALAMAT	= $("#INV_ENTITY_ALAMAT").val();
		var INV_ENTITY_NPWP 	= $("#INV_ENTITY_NPWP").val();
		var INV_ENTITY_LOGO 	= $("#INV_ENTITY_LOGO").val();
		var INV_ENTITY_STATUS = $("#INV_ENTITY_STATUS").val();;

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			// INV_ENTITY_ID:INV_ENTITY_ID,
			INV_ENTITY_CODE:INV_ENTITY_CODE,
			INV_ENTITY_NAME:INV_ENTITY_NAME,
			INV_ENTITY_ALAMAT:INV_ENTITY_ALAMAT,
			INV_ENTITY_NPWP:INV_ENTITY_NPWP,
			INV_ENTITY_LOGO:INV_ENTITY_LOGO,
			INV_ENTITY_STATUS:INV_ENTITY_STATUS
		}).done(function( data ) {
			loaddata();
        });

        return false;
	}

	function updateentity()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterentityupdate';?>";

		var INV_ENTITY_ID = $("#ROWID").val();
		var INV_ENTITY_CODE = $("#INV_ENTITY_CODE1").val();
		var INV_ENTITY_NAME = $("#INV_ENTITY_NAME1").val();
		var INV_ENTITY_ALAMAT = $("#INV_ENTITY_ALAMAT1").val();
		var INV_ENTITY_NPWP = $("#INV_ENTITY_NPWP1").val();
		var INV_ENTITY_LOGO = $("#INV_ENTITY_LOGO1").val();
		var INV_ENTITY_STATUS = $("#INV_ENTITY_STATUS1").val();

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		INV_ENTITY_ID:INV_ENTITY_ID,
		INV_ENTITY_CODE:INV_ENTITY_CODE,
		INV_ENTITY_NAME:INV_ENTITY_NAME,
		INV_ENTITY_ALAMAT:INV_ENTITY_ALAMAT,
		INV_ENTITY_NPWP:INV_ENTITY_NPWP,
		INV_ENTITY_LOGO:INV_ENTITY_LOGO,
		INV_ENTITY_STATUS:INV_ENTITY_STATUS
		}).done(function( data ) {
			loaddata();
        });

        return false;
	}


	function editentity($id)
	{
			var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/masterentityedit';?>";
			var INV_ENTITY_ID 	= $id;

			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
			,INV_ENTITY_ID:INV_ENTITY_ID
			}).done(function( data ) {
				var data1 = JSON.parse(data);
				// alert(data1.INV_ENTITY_CODE);die;
				$('[name="INV_ENTITY_CODE1"]').val(data1.INV_ENTITY_CODE);
				$('[name="INV_ENTITY_NAME1"]').val(data1.INV_ENTITY_NAME);
				$('[name="INV_ENTITY_ALAMAT1"]').val(data1.INV_ENTITY_ALAMAT);
				$('[name="INV_ENTITY_NPWP1"]').val(data1.INV_ENTITY_NPWP);
				//$('[name="INV_ENTITY_FAKTUR_PAJAK1"]').val(data1.INV_ENTITY_FAKTUR_PAJAK);
				$('[name="INV_ENTITY_LOGO1"]').val(data1.INV_ENTITY_LOGO);
				$('[name="INV_ENTITY_STATUS1"]').val(data1.INV_ENTITY_STATUS);
				//$('[name="INV_ENTITY_MATERAI1"]').val(data1.INV_ENTITY_MATERAI);
				//$('[name="INV_ENTITY_RDK_MATERAI1"]').val(data1.INV_ENTITY_RDK_MATERAI);
				$('#update_entity').modal('show');
			});
			return false;
	}

	function loaddatamaterai($id){
		// alert('1234');
		var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/mastermateraisearch';?>";

		var INV_ENTITY_ID 	= $id;
		// var INV_ENTITY_CODE 	= $("#INV_ENTITY_CODE2").val();
		// var INV_ENTITY_NAME 		= $("#INV_ENTITY_NAME2").val();

		// alert(INV_ENTITY_CODE);
		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			INV_ENTITY_ID:INV_ENTITY_ID
		}).done(function( data ) {
			var data2 = JSON.parse(data);
			// alert(data2);die;
			var html = '';
			var i;
			var $no=0;
			for(i=0; i<Object.keys(data2).length; i++){
				$no++;
				html += '<tr>'+
						'<td>'+data2[i].INV_EMATERAI_NUMBER+'</td>'+
						'<td>'+data2[i].INV_EMATERAI_REDAKSI+'</td>'+
						'<td>'+data2[i].INV_EMATERAI_EFECTIVE+'</td>'+
						'<td>'+data2[i].INV_EMATERAI_END+'</td>'+
						'<td><button type="button" id="btnmaterai1"  onclick="editmaterai(\''+data2[i].INV_EMATERAI_ID+'\')"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#update-materai"><i class="fa fa-pencil-square"></i></button></td>'+
						'</tr>';
			}
			// alert(html);die;
			$('#show_materai').html(html);
        });

        return false;
	}

	function savematerai()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/mastermateraisave';?>";
		// var INV_EMATERAI_ID 		= $("#INV_EMATERAI_NUMBER2").val();
		var INV_EMATERAI_NUMBER 	= $("#INV_EMATERAI_NUMBER").val();
		var INV_EMATERAI_REDAKSI 	= $("#INV_EMATERAI_REDAKSI").val();
		var INV_EMATERAI_EFECTIVE1	= $("#INV_EMATERAI_EFECTIVE").val();
		var INV_EMATERAI_END1 		= $("#INV_EMATERAI_END").val();
		var INV_ENTITY_CODE 		= $("#INV_ENTITY_CODE").val();

		INV_EMATERAI_EFECTIVE	= SetDate(INV_EMATERAI_EFECTIVE1);
		INV_EMATERAI_END		= SetDate(INV_EMATERAI_END1);

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			// INV_EMATERAI_ID:INV_EMATERAI_ID,
			INV_EMATERAI_NUMBER:INV_EMATERAI_NUMBER,
			INV_EMATERAI_REDAKSI:INV_EMATERAI_REDAKSI,
			INV_EMATERAI_EFECTIVE:INV_EMATERAI_EFECTIVE,
			INV_EMATERAI_END:INV_EMATERAI_END,
			INV_ENTITY_ID:INV_ENTITY_CODE
		}).done(function( data ) {

        });

        return false;
	}

	function savematerai1()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/mastermateraisave';?>";
		// var INV_EMATERAI_ID 		= $("#INV_EMATERAI_NUMBER2").val();
		var INV_EMATERAI_NUMBER 	= $("#INV_EMATERAI_NUMBER1").val();
		var INV_EMATERAI_REDAKSI 	= $("#INV_EMATERAI_REDAKSI1").val();
		var INV_EMATERAI_EFECTIVE1	= $("#INV_EMATERAI_EFECTIVE1").val();
		var INV_EMATERAI_END1 		= $("#INV_EMATERAI_END1").val();
		var INV_ENTITY_CODE 			= $("#INV_ENTITY_CODE1").val();

		INV_EMATERAI_EFECTIVE	= SetDate(INV_EMATERAI_EFECTIVE1);
		INV_EMATERAI_END		= SetDate(INV_EMATERAI_END1);

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			// INV_EMATERAI_ID:INV_EMATERAI_ID,
			INV_EMATERAI_NUMBER:INV_EMATERAI_NUMBER,
			INV_EMATERAI_REDAKSI:INV_EMATERAI_REDAKSI,
			INV_EMATERAI_EFECTIVE:INV_EMATERAI_EFECTIVE,
			INV_EMATERAI_END:INV_EMATERAI_END,
			INV_ENTITY_ID:INV_ENTITY_CODE
		}).done(function( data ) {

        });

        return false;
	}

	function updatematerai()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/mastermateraiupdate';?>";

		//var INV_ENTITY_ID 	= $("#INV_ENTITY_ID").val();
		var INV_EMATERAI_ID 		= $("#ROWID1").val();
		var INV_EMATERAI_NUMBER 	= $("#INV_EMATERAI_NUMBER2").val();
		var INV_EMATERAI_REDAKSI 	= $("#INV_EMATERAI_REDAKSI2").val();
		var INV_EMATERAI_EFECTIVE1 	= $("#INV_EMATERAI_EFECTIVE2").val();
		var INV_EMATERAI_END1	 	= $("#INV_EMATERAI_END2").val();

		INV_EMATERAI_EFECTIVE 	= SetDate(INV_EMATERAI_EFECTIVE1);
		INV_EMATERAI_END	 	= SetDate(INV_EMATERAI_END1);

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		INV_EMATERAI_ID:INV_EMATERAI_ID,
		INV_EMATERAI_NUMBER:INV_EMATERAI_NUMBER,
		INV_EMATERAI_REDAKSI:INV_EMATERAI_REDAKSI,
		INV_EMATERAI_EFECTIVE:INV_EMATERAI_EFECTIVE,
		INV_EMATERAI_END:INV_EMATERAI_END
		}).done(function( data ) {
        });

        return false;
	}

	function editmaterai($id)
	{
			// alert($id);
			var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/mastermateraiedit';?>";
			var INV_EMATERAI_ID 	= $id;
			$('[name="ROWID1"]').val($id);

			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
			,INV_EMATERAI_ID:INV_EMATERAI_ID
			}).done(function( data ) {
				var data2 = JSON.parse(data);
				$('[name="INV_EMATERAI_NUMBER2"]').val(data2.INV_EMATERAI_NUMBER);
				$('[name="INV_EMATERAI_REDAKSI2"]').val(data2.INV_EMATERAI_REDAKSI);
				$('[name="INV_EMATERAI_EFECTIVE2"]').val(GetDate(data2.INV_EMATERAI_EFECTIVE));
				$('[name="INV_EMATERAI_END2"]').val(GetDate(data2.INV_EMATERAI_END));
				// $('#update-materai').modal('show');
			});

			return false;
	}


	function loaddatafaktur($id){
		// alert('1234');
		var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/masterfaktursearch';?>";

		var INV_ENTITY_ID 	= $id;

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			INV_ENTITY_ID:INV_ENTITY_ID
		}).done(function( data ) {
			var data2 = JSON.parse(data);
			// alert(data2);die;
			var html = '';
			var i;
			var $no=0;
			for(i=0; i<Object.keys(data2).length; i++){
				$no++;
				html += '<tr>'+
						'<td>'+data2[i].INV_FAKTUR_NOTE+'</td>'+
						'<td>'+data2[i].INV_FAKTUR_EFECTIVE+'</td>'+
						'<td>'+data2[i].INV_FAKTUR_EXPIRED+'</td>'+
						'<td><button type="button" id="" name="" onclick="editfaktur(\''+data2[i].INV_FAKTUR_ID+'\')" class="btn btn-info btn-lg" data-toggle="modal" data-target="#update-faktur"><i class="fa fa-pencil-square"></i></button></td>'+
						'</tr>';
			}
			// alert(html);die;
			$('#show_faktur').html(html);
        });

        return false;
	}

	function savefaktur()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterfaktursave';?>";
		var INV_ENTITY_CODE 			= $("#INV_ENTITY_CODE").val();
		var INV_FAKTUR_NOTE 		= $("#INV_FAKTUR_NOTE").val();
		var INV_FAKTUR_EFECTIVE1 	= $("#INV_FAKTUR_EFECTIVE").val();
		var INV_FAKTUR_EXPIRED1		= $("#INV_FAKTUR_EXPIRED").val();
		var INV_FAKTUR_STATUS 		= 'Active';

		INV_FAKTUR_EFECTIVE	= SetDate(INV_FAKTUR_EFECTIVE1);
		INV_FAKTUR_EXPIRED	= SetDate(INV_FAKTUR_EXPIRED1);

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			// INV_FAKTUR_ID:INV_FAKTUR_ID,
			INV_FAKTUR_NOTE:INV_FAKTUR_NOTE,
			INV_FAKTUR_EFECTIVE:INV_FAKTUR_EFECTIVE,
			INV_FAKTUR_EXPIRED:INV_FAKTUR_EXPIRED,
			INV_FAKTUR_STATUS:INV_FAKTUR_STATUS,
			INV_ENTITY_ID:INV_ENTITY_CODE

		}).done(function( data ) {

        });

        return false;
	}

	function savefaktur1()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterfaktursave';?>";
		var INV_ENTITY_CODE 			= $("#INV_ENTITY_CODE1").val();
		var INV_FAKTUR_NOTE 		= $("#INV_FAKTUR_NOTE1").val();
		var INV_FAKTUR_EFECTIVE1 	= $("#INV_FAKTUR_EFECTIVE1").val();
		var INV_FAKTUR_EXPIRED1		= $("#INV_FAKTUR_EXPIRED1").val();
		var INV_FAKTUR_STATUS 		= 'Active';

		INV_FAKTUR_EFECTIVE	= SetDate(INV_FAKTUR_EFECTIVE1);
		INV_FAKTUR_EXPIRED	= SetDate(INV_FAKTUR_EXPIRED1);

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			// INV_FAKTUR_ID:INV_FAKTUR_ID,
			INV_FAKTUR_NOTE:INV_FAKTUR_NOTE,
			INV_FAKTUR_EFECTIVE:INV_FAKTUR_EFECTIVE,
			INV_FAKTUR_EXPIRED:INV_FAKTUR_EXPIRED,
			INV_FAKTUR_STATUS:INV_FAKTUR_STATUS,
			INV_ENTITY_ID:INV_ENTITY_CODE

		}).done(function( data ) {

        });

        return false;
	}

	function updatefaktur()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterfakturupdate';?>";

		//var INV_ENTITY_ID 	= $("#INV_ENTITY_ID").val();
		var INV_FAKTUR_ID 		= $("#ROWID2").val();
		var INV_FAKTUR_NOTE 	= $("#INV_FAKTUR_NOTE2").val();
		var INV_FAKTUR_EFECTIVE1 = $("#INV_FAKTUR_EFECTIVE2").val();
		var INV_FAKTUR_EXPIRED1 	= $("#INV_FAKTUR_EXPIRED2").val();
		// var INV_FAKTUR_STATUS 	= $("#INV_FAKTUR_STATUS2").val();

		INV_FAKTUR_EFECTIVE = SetDate(INV_FAKTUR_EFECTIVE1);
		INV_FAKTUR_EXPIRED = SetDate(INV_FAKTUR_EXPIRED1);

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		INV_FAKTUR_ID:INV_FAKTUR_ID,
		INV_FAKTUR_NOTE:INV_FAKTUR_NOTE,
		INV_FAKTUR_EFECTIVE:INV_FAKTUR_EFECTIVE,
		INV_FAKTUR_EXPIRED:INV_FAKTUR_EXPIRED
		// INV_FAKTUR_STATUS:INV_FAKTUR_STATUS
		}).done(function( data ) {
        });

        return false;
	}

	function editfaktur($id)
	{
			// alert('123');
			var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/masterfakturedit';?>";
			var INV_FAKTUR_ID 	= $id;
			$('[name="ROWID2"]').val($id);


			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
			,INV_FAKTUR_ID:INV_FAKTUR_ID
			}).done(function( data ) {
				var data2 = JSON.parse(data);
				$('[name="INV_FAKTUR_NOTE2"]').val(data2.INV_FAKTUR_NOTE);
				$('[name="INV_FAKTUR_EFECTIVE2"]').val(GetDate(data2.INV_FAKTUR_EFECTIVE));
				$('[name="INV_FAKTUR_EXPIRED2"]').val(GetDate(data2.INV_FAKTUR_EXPIRED));
				// $('#update_faktur').modal('show');
			});

			return false;
	}

	function loaddatabank($id){
		//  alert($id);
		var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/masterbanksearch';?>";

		var INV_SOURCE_ID 	= $id;
		$('[name="ROWID"]').val($id);

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			INV_SOURCE_ID:INV_SOURCE_ID
		}).done(function( data ) {
			var data1 = JSON.parse(data);
			// alert(data1);die();
			var html = '';
			var i;
			var $no=0;
			for(i=0; i<Object.keys(data1).length; i++){
				$no++;
				html += '<tr>'+
						'<td>'+$no+'</td>'+
						'<td>'+data1[i].INV_BANK_NAME+'</td>'+
						'<td>'+data1[i].INV_BANK_REKENING+'</td>'+
						'<td><button type="button" id="" name="" onclick="editsignall(\''+data1[i].INV_BANK_ID+'\')" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sigin_bank">Assign Bank</button></td>'+
						'<td><button type="button" id="" name="" onclick="editbank(\''+data1[i].INV_BANK_ID+'\')" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit_bank"><i class="fa fa-pencil-square"></i></button></td>'+
						'</tr>';
			}
			$('#show_bank').html(html);
        });

        return false;
	}

	function savebank()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterbanksave';?>";
		var INV_SOURCE_ID 			= $("#ROWID").val();
		var INV_BANK_REKENING 		= $("#INV_BANK_REKENING").val();
		var INV_BANK_NAME		 	= $("#INV_BANK_NAME").val();
		var INV_BANK_STATUS 		= 'Active';


		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			INV_SOURCE_ID:INV_SOURCE_ID,
			INV_BANK_REKENING:INV_BANK_REKENING,
			INV_BANK_NAME:INV_BANK_NAME
			//INV_ENTITY_ID:INV_ENTITY_ID

		}).done(function( data ) {

        });

        return false;
	}

	function updatebank()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/masterbankupdate';?>";

		//var INV_ENTITY_ID 	= $("#INV_ENTITY_ID").val();
		var INV_BANK_ID 		= $("#ROWID2").val();
		var INV_BANK_REKENING 	= $("#INV_BANK_REKENING1").val();
		var INV_BANK_NAME 		= $("#INV_BANK_NAME1").val();
		// var INV_BANK_STATUS 	= $("#INV_BANK_STATUS1").val();


		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
		INV_BANK_ID:INV_BANK_ID,
		INV_BANK_REKENING:INV_BANK_REKENING,
		INV_BANK_NAME:INV_BANK_NAME
		// INV_BANK_STATUS:INV_BANK_STATUS
		}).done(function( data ) {
			//loaddatabank();
        });

        return false;
	}

	function editbank($id)
	{
			// alert('123')
			var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/masterbankedit';?>";
			var INV_BANK_ID 	= $id;
			$('[name="ROWID2"]').val($id);

			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
			,INV_BANK_ID:INV_BANK_ID
			}).done(function( data ) {
				var data2 = JSON.parse(data);
				// alert(data1.INV_ENTITY_CODE);die;
				$('[name="INV_BANK_ID1"]').val(data2.INV_BANK_ID);
				$('[name="INV_BANK_REKENING1"]').val(data2.INV_BANK_REKENING);
				$('[name="INV_BANK_NAME1"]').val(data2.INV_BANK_NAME);
				// $('[name="INV_BANK_STATUS1"]').val(data2.INV_BANK_STATUS);
				// $('#update_bank').modal('show');
			});

			return false;
	}

	function editsignall($id)
	{
		editsignbank1($id);
		loaddatasignbank1($id)
	}
	function editsignbank1($id)
	{
			// alert('123')
			var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/masterbankedit';?>";
			var INV_BANK_ID 	= $id;
			$('[name="ROWID4"]').val($id);

			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
			,INV_BANK_ID:INV_BANK_ID
			}).done(function( data ) {
				var data2 = JSON.parse(data);
				$('[name="INV_BANK_NAME2"]').val(data2.INV_BANK_NAME);
				// $('#update_bank').modal('show');
			});

			return false;
	}

	function savesignbank()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/mastersignbanksave';?>";
		var INV_BANK_ID 			= $("#ROWID4").val();
		var INV_UNIT_CODE 		= $("#INV_UNIT_CODE").val();
		var INV_BANK_NAME		 	= $("#INV_BANK_NAME2").val();


		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			INV_BANK_ID:INV_BANK_ID,
			INV_UNIT_CODE:INV_UNIT_CODE,
			INV_BANK_NAME:INV_BANK_NAME

		}).done(function( data ) {

        });

        return false;
	}

	function loaddatasignbank1($id){
		//  alert($id);
		var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/mastersignbanksearch';?>";

		var INV_BANK_ID 	= $id;

		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			INV_BANK_ID:INV_BANK_ID
		}).done(function( data ) {
			var data1 = JSON.parse(data);
			// alert(data1);die();
			var html = '';
			var i;
			var $no=0;
			for(i=0; i<Object.keys(data1).length; i++){
				$no++;
				html += '<tr>'+
						'<td>'+$no+'</td>'+
						'<td>'+data1[i].INV_UNIT_CODE+'</td>'+
						'<td><button type="button" id="" name="" onclick="editsignbank2(\''+data1[i].INV_SIGNBANK_ID+'\')" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edit_sigin_bank"><i class="fa fa-pencil-square"></i></button></td>'+
						'</tr>';
			}
			$('#show_signbank').html(html);
        });

        return false;
	}

	function editsignbank2($id)
	{
			// alert('123')
			var path = '';
			path = "<?php echo ROOT.'einvoice/administrasi/mastersignbankedit';?>";
			var INV_SIGNBANK_ID 	= $id;
			$('[name="ROWID5"]').val($id);

			$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'
			,INV_SIGNBANK_ID:INV_SIGNBANK_ID
			}).done(function( data ) {
				var data2 = JSON.parse(data);
				$('[name="INV_UNIT_CODE3"]').val(data2.INV_UNIT_CODE);
				$('[name="INV_BANK_NAME3"]').val(data2.INV_BANK_NAME);
				// $('#update_bank').modal('show');
			});

			return false;
	}

	function updatesignbank()
	{
		var path = '';
		path = "<?php echo ROOT.'einvoice/administrasi/mastersignbankupdate';?>";
		var INV_SIGNBANK_ID 			= $("#ROWID5").val();
		var INV_UNIT_CODE 		= $("#INV_UNIT_CODE3").val();
		var INV_BANK_NAME		 	= $("#INV_BANK_NAME3").val();


		$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			INV_SIGNBANK_ID:INV_SIGNBANK_ID,
			INV_UNIT_CODE:INV_UNIT_CODE,
			INV_BANK_NAME:INV_BANK_NAME

		}).done(function( data ) {

        });

        return false;
	}
	function SetDate($date){
		var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
							"Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
		var dt1;
		var formattedDate1 = new Date($date);
		var d1 = formattedDate1.getDate();
		var m1 = monthNames[formattedDate1.getMonth()];
		var y1 = formattedDate1.getFullYear();
		dt1  = d1+'-'+m1+'-'+y1;

		return dt1;
	}

	function GetDate(str)
	{
		var arr = str.split("-");
		var months = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];

		var month = (1+months.indexOf(arr[1].toLowerCase())).toString();
		if(month.length==1) month='0'+month;
		var year = '20' + parseInt(arr[2]);
		var result = year + '-' + month + '-' + parseInt(arr[0]);
		return result;
	}

</script>
