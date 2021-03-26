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
			<li class="active"><span>Kapal</span></li>
		</ol>

		<h1>NOTA KAPAL</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<header class="main-box-header clearfix"></header>
			<form  class="form-horizontal" name="form_search" id="form_search">
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
						
							<div class="col-md-6">
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No PPKB</label>
											<div class="row">
												<div class="col-xs-5">
													<input type="text" name="NO_PPKB" id="NO_PPKB" class="form-control" placeholder="No PPKB">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">No PKK</label>
											<div class="row">
												<div class="col-xs-5">
													<input type="text" name="NO_PKK" id="NO_PKK" class="form-control" placeholder="No PKK">
												</div>
											</div>
										</div>
									</div>

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
								</div>
							</div>
							<div class="col-md-6">
								<div class="box-body">
									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Costumer</label>
											<div class="row">
												<div class="col-xs-5">
													<input type="text" name="CUSTOMER" id="CUSTOMER" class="form-control" placeholder="Costumer">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Status Bayar</label>
											<div class="row">
												<div class="col-xs-5">
					                  		<select for="" name="STATUS_BAYAR" id="STATUS_BAYAR" class="form-control select" style="width: 100%;">
					                  			
					                  			<option value="Y">LUNAS</option>
					                  			<option value="X">KOREKSI</option>
					                  			<option value="XY">BELUM LUNAS</option>
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
                            <input type="text" name="TGL_NOTA_START" id="TGL_NOTA_START" class="form-control form_datetime" placeholder="dd/mm/yy">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          </div>
												</div>
												<div class="col-xs-4">
                          <div class="input-group">
                            <input type="text" name=""  name="TGL_NOTA_FINISH" id="TGL_NOTA_FINISH"  class="form-control form_datetime" placeholder="dd/mm/yy">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                          </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
              <!--ininih-->
              <div id="adv_search" class="collapse">
                <!--awal ceritanya toggle-->
                <div class="row">

                  <div class="col-lg-12">

                    <div class="col-md-6">
                      <!--kiri-->
                      <div class="form-group">
                        <div class="box-body">
                          <label for="" class="col-sm-3 control-label">Jenis Pelayaran</label>
                          <div class="row">
                            <div class="col-xs-5">
                                <select for="" name="JENIS_PELAYARAN" id="JENIS_PELAYARAN" class="form-control select" style="width: 100%;">
                                  <option value=""> AFLL</option>
                                  <option value="DALAM NEGERI">DALAM NEGERI</option>
                                  <option value="LUAR NEGERI">LUAR NEGERI</option>
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
                                    <select for="" class="form-control select" style="width: 100%;">
                                      <option>TO1 Domestik</option>
                                      <option>Area 1</option>
                                    </select>
                                  </div>
                                  </div>
                                </div>
                      </div>
                      <!--kanan-->
                    </div>

                    <div class="col-md-6">
                      <!--kanan-->
                      <div class="form-group">
                        <div class="box-body">
                          <label for="" class="col-sm-3 control-label">Status Nota</label>
                          <div class="row">
                            <div class="col-xs-5">
                                    <select for="" class="form-control select" style="width: 100%;">
                                      <option></option>
                                      <option>Nota 1</option>
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
                                    <select for="" class="form-control select" style="width: 100%;">
                                      <option>All</option>
                                      <option>Nota 1</option>
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
                              <select for="" class="form-control select" style="width: 100%;">
                                <option></option>
                                <option>Penerbit 1</option>
                              </select>
                              </div>
                            </div>
                            </div>
                      </div>
                      <!--kanan-->
                    </div>
                  </div>
                  </div>
                  <!--akhir ceritanya toggle-->
              </div>
              <!--ininih-->
                <div class="row">
                <div class="col-lg-12">

                  <div class="col-md-6">
                    <div class="box-body">
                      <div class="form-group">
                              <div class="col-sm-offset-12 col-sm-10">
                                <button data-toggle="collapse" type="button" class="btn btn-primary" data-target="#adv_search" class="col-sm-6"> Advanced Search</button>
                                <a href="javascript:void(0)" class="btn btn-primary btn_clear" onclick="clearsearch()"> Clear</a>
                                <a href="javascript:void(0)" class="btn btn-primary"  onclick="loaddata()" ><!-- <a href="<?php //echo base_url('');?>" > --><i class="fa fa-search"> </i> Search<!-- </a> --></a>
                              </div>
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
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="main-box-body clearfix">
				<div class="table-responsive">
					<table id="table-example" class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>No Nota</th>
								<th>Jenis Nota</th>
								<th>Tanggal Nota</th>
								<th>Customer</th>
								<th>Jumlah Total</th>
								<th>Status Bayar</th>
								<th>Pernah Cetak</th>
								<th>Pernah Kirim</th>
								<th>Keterangan</th

							</tr>
						</thead>
						<tbody>
							

						</tbody>
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


<script type="text/javascript">
    $(".form_datetime").datepicker({
        format: "dd/mm/yyyy",
        todayBtn: true,
        autoclose: true,
    });


    function clearsearch(){
		location.reload();
	}

</script>



<script>
	var table ;
	$(document).ready(function() {
		var path = '';
		path = "<?php echo ROOT.'einvoice/nota/kapalsearch';?>";



		table = $('#table-example').DataTable({
		"processing": true, //Feature control the processing indicator.
		"order": [], //Initial no order.	
		"dom" :"brtlp",
		"ajax": {
					"url": path,
					"type": "POST",
					"dom":"brtlp",
					"data":function (data){
					       data.<?php echo $this->security->get_csrf_token_name(); ?> ='<?php echo $this->security->get_csrf_hash(); ?>';
					       data.MODULE 			= 'KAPAL';
					       data.TRX_NUMBER 		= $("#ID_NOTA").val();
					       data.CUSTOMER_NAME 	= $("#CUSTOMER").val();
					       data.NO_PKK			= $("#NO_PKK").val();
					       data.NO_PPKB			= $("#NO_PPKB").val();
					       data.TGL_NOTA_START	= $("#TGL_NOTA_START").val();
					       data.TGL_NOTA_FINISH	= $('#TGL_NOTA_FINISH').val();
					       data.STATUS_LUNAS	= $("#STATUS_BAYAR").val();

					     },
		},
		//Set column definition initialisation properties.
			});
		});

	function loaddata(){
		table.ajax.reload(null,false); //reload datatable ajax 
	}
</script>


<script type="text/javascript">

function link_kapal(){
	window.location.href="<?php echo ROOT;?>einvoice/nota/adv_kapal";
}

function Cetak($id){
	window.location.href="<?php echo ROOT;?>einvoice/nota/cetak_nota/"+$id;
}







</script>
