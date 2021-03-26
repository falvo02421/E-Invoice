
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

		<h1>NOTA BARANG</h1>
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
											<label for="" class="col-sm-3 control-label">No Nota</label>
											<div class="row">
												<div class="col-xs-5">
													<input type="text" name="ID_NOTA" id="ID_NOTA" class="form-control" placeholder="No Nota">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No BBRP</label>
											<div class="row">
												<div class="col-xs-5">
													<input type="text" name="NO_BPRP" id="NO_BPRP" class="form-control" placeholder="No BPRP">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No Uper</label>
											<div class="row">
												<div class="col-xs-5">
													<input type="text" name="NO_UPER" id="NO_UPER" class="form-control" placeholder="No Uper">
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
													<input type="text" name="Costumer" id="Costumer" class="form-control" placeholder="Costumer">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Status Bayar</label>
											<div class="row">
												<div class="col-xs-5">
					                  		<select for="" class="form-control select" style="width: 100%;">
					                  			<option></option>
					                  			<option>Bayar 1</option>
					                   		</select>
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
                            <input type="text" name="" class="form-control form_datetime" placeholder="dd/mm/yy">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          </div>
												</div>
												<div class="col-xs-4">
                          <div class="input-group">
                            <input type="text" name="" class="form-control form_datetime" placeholder="dd/mm/yy">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

              <!--ceritanya ini toggle-->
              <div id="adv_barang" class="collapse">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-md-6">
                      <!--kiri-->
                      <div class="form-group">
                        <div class="box-body">
                          <label for="" class="col-sm-3 control-label">No Pranota</label>
                          <div class="row">
                            <div class="col-xs-5">
                              <input type="text" name="NO_PRANOTA" id="NO_PRANOTA" class="form-control" placeholder="No Pranota">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="box-body">
                          <label for="" class="col-sm-3 control-label">Jenis Nota</label>
                          <div class="row">
                            <div class="col-xs-5">
                              <select for="" class="form-control select" style="width: 100%;">
                                <option>Receiving</option>
                                <option>Tes</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--kiri-->
                    </div>
                    <div class="col-md-6">
                      <!--kanan-->
                      <div class="form-group">
                        <div class="box-body">
                          <label for="" class="col-sm-3 control-label">Jenis Pelayaran</label>
                          <div class="row">
                            <div class="col-xs-5">
                                    <select for="" class="form-control select" style="width: 90%;">
                                      <option>All</option>
                                      <option>Express</option>
                                      <option>Slow</option>
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
                                    <select for="" class="form-control select" style="width: 90%;">
                                      <option>T01 Domestik</option>
                                      <option>T02 Domestik</option>
                                      <option>T03 Domestik</option>
                                      <option>T04 Domestik</option>
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
                                    <select for="" class="form-control select" style="width: 90%;">
                                      <option>Belum Lunas</option>
                                      <option>Lunas</option>
                                    </select>
                                    </div>
                                  </div>
                                 </div>
                      </div>
                      <!--kanan---->
                    </div>
                  </div>
                </div>
              </div>
              <!--ceritanya ini toggle-->
							<div class="row">
							<div class="col-lg-12">

								<div class="col-md-6">
									<div class="box-body">
										<div class="form-group">
								            <div class="col-sm-offset-12 col-sm-10">
								              <button data-toggle="collapse" type="button" class="btn btn-primary" class="col-sm-6" data-target="#adv_barang"> Advanced Search</button>
								              <button type="submit" class="btn btn-primary" onclick="clearsearch()"> Clear</button>
								              <button type="button" class="btn btn-primary"  onclick="loaddata()" ><!-- <a href="<?php //echo base_url('');?>" > --><i class="fa fa-search"> </i> Search<!-- </a> --></button>
								            </div>
				      					</div>
				  					</div>
				          		</div>
		          			</div></div>
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
								<th>No Nota</th>
								<!-- <th>Area</th> -->
								<th>Jenis Nota</th>
								<th>Tanggal Nota</th>
								<th>Customer</th>
								<th>Jumlah Total</th>
								<th>Status Bayar</th>
								<th>Status Nota</th>
								<th>Pernah Cetak</th>
								<th>Pernah Kirim</th>
								<th>Keterangan</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="col-md-6">
					<div class="box-body">
						<div class="form-group">
						<!-- <div class="box -body"> -->
				            <div class="col-sm-offset-10 col-sm-10">
				              <button type="submit" class="btn btn-primary">Print All in this List</button>
				            </div>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- <div class="md-modal md-effect-4" id="modal-4"> -->
<div id="kapalpreview" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
	        <div style="background-color:#B22222;" class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 style="color:white"; class="modal-title">Preview DPJK</h4>
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
	        <div class="modal-footer">
		        <div class="centered">
	              <button type="submit" class="btn btn-primary">Ubah Status ke A4</button>
	            </div>
		    </div>
	    </div>
	</div>
</div>

<div id="kapalprint" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
	        <div style="background-color:#B22222;" class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 style="color:white"; class="modal-title">Preview Print DPJK</h4>
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
				<button type="button" class="btn btn-primary" id="ok">OK</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
			</div>

	    </div>


	</div>

</div>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-3.1.1.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js">
</script>

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

    function clearsearch(){
		location.reload();
	}


</script>


<script type="text/javascript">

var idBarang ;
function link_kapal(){
	window.location.href="<?php echo ROOT;?>einvoice/nota/adv_kapal";
}

function onMyFrameLoad(){

	$('.check_invoice').attr('disabled',false);

}
function create_invoice(){
	var url ='<?php echo ROOT;?>einvoice/nota/cetak_barang/barang/'+idBarang;
	window.location.href= url;
}
function Cetak($id){
	// window.location.href="<?php echo ROOT;?>einvoice/nota/cetak_nota/"+$id;
	idBarang = $id;
	$('.check_invoice').attr('disabled',true);
	$('#form_dtjk').modal('show');
	var url ='<?php echo ROOT;?>einvoice/nota/cetak_barang/barang/'+$id;
	$('.text-me').html('<iframe  class="the_pdf" style="height: 100%;width:100%;"  src= "'+url+'" onload="onMyFrameLoad(this)"/></iframe>');

}



	$( document ).ready(function() {
		loaddata();
		// alert( "ready!" );
	});

	function loaddata(){
		// alert('1234');
		// alert(1234);
		var path = '';
		path = "<?php echo ROOT.'einvoice/nota/barangsearch';?>";

		var ID_NOTA 	= $("#ID_NOTA").val();
		var Costumer 	= $("#Costumer").val();
		var MODULE 	= 'BARANG'; ///utk : KAPAL atau RUPA atau BARANG atau PETIKEMAS
		$('#tableBarang').DataTable({
				"destroy": true,
			  	"dom" : "brtlp",
				"ajax": {
				    "url": path,
				    data : function ( d ) {
		          		d.<?php echo $this->security->get_csrf_token_name(); ?> = '<?php echo $this->security->get_csrf_hash(); ?>';
		          		// d.ID_NOTA = ID_NOTA ;
		          		d.TRX_NUMBER = $("#ID_NOTA").val();
						d.CUSTOMER_NAME = Costumer ;
						d.MODULE = MODULE ;
			        },
				    "type": "POST"
				  },
				  "columns": [
		                        { "data": "TRX_NUMBER" },
		                        // { "data": "HEADER_CONTEXT" },
		                        { "data": "JENIS" },
		                        { "data": "TRX_DATE" },
		                        { "data": "CUSTOMER_NAME" },
		                        { "data": "AMOUNT" },
		                        { "data": "STATUS_LUNAS" },
		                        { "data": "STATUS" },
		                        { "data": "PC" },
		                        { "data": "PK" },
		                        { "data": "action" },
		                    ],
			});
		/*$.post( path, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
			ID_NOTA:ID_NOTA,
			CUSTOMER_NAME:Costumer,
			MODULE:MODULE
		}).done(function( data ) {
			var data1 = JSON.parse(data);
			// alert (Object.keys(data1).length);	die;
			var html = '';
			var i;
			for(i=0; i<Object.keys(data1).length; i++){
				var $id = data1[i].TRX_NUMBER;
				var $enable1='';
				var $enable2=''; //hide
				html += '<tr>'+
						'<td>'+data1[i].TRX_NUMBER+'</td>'+
						'<td>'+data1[i].HEADER_CONTEXT+'</td>'+
						'<td>'+data1[i].HEADER_SUB_CONTEXT+'</td>'+
						'<td>'+data1[i].TRX_DATE+'</td>'+
						'<td>'+data1[i].CUSTOMER_NAME+'</td>'+
						'<td>'+data1[i].AMOUNT+'</td>'+
						'<td>'+data1[i].STATUS+'</td>'+
						'<td><input type=checkbox name=c1 checked></td>'+
						'<td><input type=checkbox name=c1 checked></td>'+
						'<td><center>'+
									'<button type="button" class="btn btn-primary '+$enable1+'" onclick="Cetak(\''+$id+'\')" > '+
									'<i class="fa fa-table" ></i></button>'+
									// '<button type="button" class="btn btn-link '+$enable2+'" onclick="Cetak(\''+$id+'\')" > '+
									// '<i class="fa fa-print" ></i></button>'+
									'<a target="_blank" class="btn btn-primary '+$enable2+'" href="<?php echo ROOT;?>einvoice/nota/cetak_barang/barang/'+data1[i].TRX_NUMBER+'"> '+
									'<i class="fa fa-print" ></i></a>'+
						'</center></td>'+
						'</tr>';
			}
			// alert(html);die;
			// $('#show_data').html(html);

        });
*/
        return false;
	}


</script>
