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
			<li class="active"><span>DKK</span></li>
		</ol>

		<h1>NOTA DATA KAPAL KELUAR</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<header class="main-box-header clearfix"></header>
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
						<form class="form-horizontal" id="search_form" name="search_form" href="javascript:void(0)" >
							<div class="col-md-10">
								<div class="box-body">

									<div class="form-group">
										<div class="box-body">
											<label for="" class="col-sm-3 control-label">Periode Tgl Keluar Kapal</label>
											<div class="row">
											<div class="row">
												<div class="col-xs-4">
													<div class='input-group date' id='datetimepicker2'>
														<input type='text' class="form-control" name="TGL_JAM_TIBA" id="tgl_tiba"  placeholder="TGL TIBA" data-error="requied" required />
														<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
													<div class="help-block with-errors"></div>

												</div>

												<div class="col-xs-4">
													<div class='input-group date' id='datetimepicker2'>
														<input type='text' class="form-control" name="TGL_JAM_BERANGKAT" id="tgl_berangkat" placeholder="TGL BERANGKAT" data-error="required" required />
														<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</div>
													<div class="help-block with-errors"></div>
												</div>
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
								              <a href="javascript:void(0)" class="btn btn-primary" style="color:white;" onclick="refresh()"> Clear</a>
								             <button  type="submit" id="submit" name="submit"  class="btn btn-primary btn_user_save" > Search</button>
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
								<th>No PPKB</th>
								<th>Costummer</th>
								<th>Kapal</th>
								<th class="col-md-2">Tanggal Berangkat</th>
								<th>Pukul</th>
								<th class="col-md-2">Keterangan</th>

							</tr>
						</thead>
						<tbody>
							

						</tbody>
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
		        <h4 style="color:white"; class="modal-title">DTJK DPJK <span class="text-help"></span></h4>
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
	$('#tgl_tiba').datepicker({
		autoclose: true,
		format: 'dd-mm-yyyy',
	});
	$('#tgl_berangkat').datepicker({
		autoclose:true,
		format: 'dd-mm-yyyy',
	});
</script>

<script>
var table;
$( document ).ready(function() {
var 
KD_CABANG 			= 10,		
TGL_JAM_TIBA 		= $("#tgl_tiba").val();
TGL_JAM_BERANGKAT 	= $("#tgl_berangkat").val();
		var path = "<?php echo ROOT.'einvoice/nota/masterdkksearch';?>";
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
					       data.KD_CABANG = KD_CABANG;
					       data.TGL_JAM_TIBA = $("#tgl_tiba").val();;
					       data.TGL_JAM_BERANGKAT = $("#tgl_berangkat").val();;
					       data.UNIT_CODE = '<?php echo $this->session->userdata('unit_id') ?>';
					     },
		},
		//Set column definition initialisation properties.
			});
	});
</script>

<script>
function link_kapal(){
	window.location.href="<?php echo ROOT;?>einvoice/nota/adv_kapal";
}
$('#search_form').validator().on('submit', function (e) {
		if (e.isDefaultPrevented()) {
			return false;
		// handle the invalid form...
		} else {
			table.ajax.reload(null,false); //reload datatable ajax 
			return false;
		}
});
function refresh(){
	//$('#search_form').reset[0];
	$('#search_form')[0].reset();
	table.ajax.reload(null,false); //reload datatable ajax 
}


  $(document).on('click','.btn-ok',function(e){
               
                 var ukk = $(this).attr('data-id');
                 var cab = $(this).attr('data-cabang');
                 var ppkb = $(this).attr('data-ppkb');
                 // alert(ukk + ' ' + cab);
                 $('#form_dtjk').modal({

						show:true,
						backdrop:'static'



				});
                 $('.text-help').text(ukk);
    
                 // $( "#review" ).load(window.location.href + " #review" );

                 jQuery.ajax({

	           		url: '<?php echo ROOT;?>dashboard_invoice/cetak_dpjk/'+ukk+'/'+cab+'/'+ppkb,
	                type: "POST",
		               data: {
		               	'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
	                  	NO_UKK:ukk,
	                  	KD_CABANG:cab,
	                  	KD_PPKB:ppkb
	                  },
	            
	                beforeSend: function() {
	                       $('.text-me').text('  Loading data... Please wait');
	                       $('.check_invoice').attr('disabled',true);
	                        
	                 		},
	                success:function(data){
	                	$('.text-help').text(ukk);
						var url ='<?php echo ROOT;?>dashboard_invoice/cetak_dpjk/'+ukk+'/'+cab+'/'+ppkb;
	                	$('.text-me').html('<iframe  class="the_pdf" style="height: 100%;width:100%;"  src= "'+url+'" /></iframe>')
						$('#ukk_ready').val(ukk);
						$('#cab_ready').val(cab);
						$('#ppkb_ready').val(ppkb);
						 $('.check_invoice').attr('disabled',false);
	     //            	$('.modal-body').load(location.href );
	     //            	$('.the_pdf').attr('src', url);

	                	

	                },
	                 error: function (jqXHR, textStatus, errorThrown){
				 	  	alert('False Exeption while request..');
				 	 	 return false;
				 	 }

	                
	                          
	                           
	              
	        	});


                 
        });


function create_invoice(){
$('.convert_help').text('Apakah Anda yakin untuk  mengubah status nota ini menjadi 4A?');
var ukk_ready = $('#ukk_ready').val();
var cab_ready = $('#cab_ready').val();
var ppkb_ready = $('#ppkb_ready').val();

$('#confirmModal').modal("show");

$('#ok').on('click', function (e) {
           
                $.ajax(
                 {
                     url: "<?php echo ROOT;?>einvoice/nota_dkk/convert_invoice/",
                     type: "POST",
                     data: {
                     	'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
                        NO_UKK	: ukk_ready,
                        ORG_ID 	: 89, //masih statis nanti diganti session
                        NO_PPKB : ppkb_ready
                     },
                    beforeSend: function() {

                    $('.convert_help').text('Updating...');

                     },
                    

                    success: function (e) { 

                    	$('.convert_help').text(e);
                    	$('.convert_help').text('Success!');
                    	table.ajax.reload(null,false); //reload datatable ajax 


                     },
	                error: function (jqXHR, textStatus, errorThrown){
				 	  	alert('False Exeption while request..');
				 	 	 return false;
				 	 }

                 });
               


       });

     
}
</script>