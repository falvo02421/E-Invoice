<script src="<?=CUBE_?>js/jquery.nanoscroller.min.js"></script>
<script src="<?=CUBE_?>js/modernizr.custom.js"></script>
<script src="<?=CUBE_?>js/snap.svg-min.js"></script> <!-- For Corner Expand and Loading circle effect only -->
<script src="<?=CUBE_?>js/classie.js"></script>
<script src="<?=CUBE_?>js/notificationFx.js"></script>

<script src="<?=CUBE_;?>js/ipc/addressloading.js"></script>
<script src="<?=CUBE_;?>js/ipc/validation.js"></script>
<script src="<?=CUBE_?>js/hogan.js"></script>
<script src="<?=CUBE_?>js/typeahead.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-default.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-growl.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-bar.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-attached.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-other.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/libs/ns-style-theme.css"/>
<link rel="stylesheet" type="text/css" href="<?=CUBE_?>css/bootstrap/searchbt.css"/>

<style type="text/css">
.upload_info {
    font-size: small;
    font-style: italic;
    float: right;
}
.hidden_content {
	display: none;
}
#component_type {
	float: left;
}
#component_reefer {
	float: left;
	margin-left: 10px;
}
</style>

<script>
$(document).ready(function() {
	//sql injection protection
	$(":input").keyup(function(event) {
		// $(this).val($(this).val().replace(/[@\*\-#=,;:'"()\[\]/\\]/gi, ''));
		$(this).val($(this).val().replace(/[\*\#=,;:'"()?%~`$^&+{}|<>\[\]/\\]/gi, ''));
	});
	
	$("#start_shift, #end_shift, #eta, #etb, #etd, #openstack, #closing, #start_stack")
		.datetimepicker({
				format:'d/m/Y H:i'
				, step:30
			}
		);
	
	$('#port').on('change', function(){

		$("#receiving_type option[value='TL']").removeAttr("disabled");

		var terminal = ( $(this).val().split('-') )[1];
		if (terminal == 'T009D'){
			if ($("#receiving_type").val() == "TL"){
				$("#receiving_type").val("");
			}
			$("#receiving_type option[value='TL']").prop('disabled',true);
			$('#nolnol9_content').removeClass('hidden_content');
			$('#pjg_domestik_content').addClass('hidden_content');
		} else if (terminal == 'PNJD'){
			$('#pjg_domestik_content').removeClass('hidden_content');
			$('#nolnol9_content').addClass('hidden_content');
		} else {
			$('#pjg_domestik_content').addClass('hidden_content');
			$('#nolnol9_content').addClass('hidden_content');
			$("#receiving_type option[value='TL']").prop('disabled',false);
		}

		if (terminal == 'T3I' || terminal == 'PNJI' || terminal == 'PNJD'){
			$('#receiving_type').val('LAP');
			$("#receiving_type option[value='TL']").attr("disabled", "disabled");
		}

	});

	// Validasi Container
	$("#container_size").on('change', function(){
		if($('#container_size').val() == '21') {
			$('#container_height').val('9.6');
			$("#container_type").val('DRY');
			document.getElementById("container_height").disabled=true;
			document.getElementById("container_type").disabled=true;
		} else {
			$('#container_height').val('8.6');
			document.getElementById("container_height").disabled=false;
			document.getElementById("container_type").disabled=false;
		}
		
		getIsoCode($("#container_size").val(),$("#container_type").val(),$("#container_height").val(),$("#port").val());
	});
	
	// Validasi tipe
	$("#container_type").on('change', function(){
		if ($(this).val() == 'RFR'){
			$('#container_temperature').prop('disabled', false);
			$('#component_reefer').removeClass('hidden_content');
		}
		else {
			$('#container_temperature').prop('disabled', true);
			$('#component_reefer').addClass('hidden_content');
		}
		
		if ($(this).val() == 'HQ'){
			$('#container_height').val('9.6');
		}
		else {
			$('#container_height').val('8.6');
		}
		getIsoCode($("#container_size").val(),$("#container_type").val(),$("#container_height").val(),$("#port").val());
	});

	$("#reefer_nor").on('change', function(){
		if ($(this).val() == 'Y'){
			$('#container_temperature').prop('disabled', true);
		} else if ($(this).val() == 'N'&&$("#container_type").val() == 'RFR') {
			$('#container_temperature').prop('disabled', false);
		}
	});

	$("#container_height").on('change', function(){
		getIsoCode($("#container_size").val(),$("#container_type").val(),$("#container_height").val(),$("#port").val());
	});
	
});		
</script>
<script>

$(function() {
	$("#container_data").attr('class', 'row hidden');
	$("#container_excel").attr('class', 'row hidden');
});

</script>
<script>

    function submitheader() {

        var port = $("#port").val();
        var vessel_autocomplete = $("#vessel_autocomplete").val();
        var ukk = $("#ukk").val();

        var pod_name = $( "#comboPOD option:selected" ).text();
        var fpod_name = $( "#comboFPOD option:selected" ).text();

        var pod = $( "#comboPOD option:selected" ).val();
        var fpod = $( "#comboFPOD option:selected" ).val();
        //alert(pod_name+pod+fpod_name+fpod);
        var trading_type = $("#trading_type").val();
        var receiving_type = $("#receiving_type").val();
		var voyin=$("#voyage_in").val();
		var voyout=$("#voyage_out").val();
		
		var eta = $('#eta').val();
		var etb = $('#etb').val();
		var etd = $('#etd').val();
		var start_stack = $('#start_stack').val();
		var openstack = $('#openstack').val();
		var closing = $('#closing').val();
		
        //optional
        var peb = $("#peb_no").val();
        var npe = $("#npe_no").val();
        var booking_ship = $("#booking_ship_no").val();
        var request_no = $("#request_no").val();
		var nospp = $("#nospp").val();
		var nosppdom = $("#nosppdom").val();
        var nosuratjalan = $("#nosuratjalan").val();
		var bookingship009 = $("#bookingship009").val();
		var bookingshipdom = $("#bookingshipdom").val();
		var start_shift=$("#start_shift").val();
		var end_shift=$("#end_shift").val();
		var peb_dt=$("#peb_dt").val();
		var valid_eta=$("#valid_eta").val();

        if(port==""){
            alert("Terminal harus diisi");
            $( "#port" ).focus();
            return false;
        }

        if(trading_type==""){
            alert("Jenis Perdagangan harus diisi");
            $( "#trading_type" ).focus();
            return false;
        }
		var submit_header = '1';
		var postvals = {
					'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
					submit_header:submit_header,
					eta:eta,
					etb:etb,
					etd:etd,
					peb_no: peb,
					npe_no: npe,
					booking_ship_no: booking_ship,
					port: port,
					ukk: ukk,
					pod: pod,
					fpod: fpod,
					pod_name: pod_name,
					fpod_name: fpod_name,
					trading_type: trading_type,
					request_no: request_no,
					receiving_type: receiving_type,
					vessel:vessel_autocomplete,
					voy_in:voyin,
					voy_out:voyout,
					nospp:nospp,
					nosppdom:nosppdom,
					nosuratjalan:nosuratjalan,
					bookingship009:bookingship009,
					bookingshipdom:bookingshipdom,
					start_shift:start_shift,
					end_shift:end_shift,
					peb_dt:peb_dt,
					start_stack:start_stack,
					openstack:openstack,
					closing:closing
				}
				
		console.log(postvals);
		
		$(':button').attr('disabled','disabled');

		var url = "<?=ROOT?>misc_tools/add_receiving_header";
        $.blockUI();
        $.post(url, postvals,
				function(data){
					console.log(data);
					var obj = jQuery.parseJSON(data);
					console.log(obj);
					$.unblockUI();
					if(obj.data.data==null){
						alert("Request Gagal. Hubungi sistem administrator: "+obj.rcmsg);
					} 
					else {
						var x = document.getElementById("container_size");

						if(port=="IDJKT-T3I" || port=="IDPNJ-PNJI" || port=="IDPNJ-PNJD"){
							var opt = document.createElement('option');
							opt.value = '20';
							opt.innerHTML = '20';
							x.appendChild(opt);
							var opt = document.createElement('option');
							opt.value = '40';
							opt.innerHTML = '40';
							x.appendChild(opt);
							var opt = document.createElement('option');
							opt.value = '45';
							opt.innerHTML = '45';
							x.appendChild(opt);
						}
						else
						{
							var opt = document.createElement('option');
							opt.value = '20';
							opt.innerHTML = '20';
							x.appendChild(opt);
							var opt = document.createElement('option');
							opt.value = '21';
							opt.innerHTML = '21';
							x.appendChild(opt);
							var opt = document.createElement('option');
							opt.value = '40';
							opt.innerHTML = '40';
							x.appendChild(opt);
							var opt = document.createElement('option');
							opt.value = '45';
							opt.innerHTML = '45';
							x.appendChild(opt);
						}

						document.getElementById('submit_header').style.display = "none";
						alert("Simpan request berhasil");
						$("#container_data").attr('class', 'row');
						$("#container_excel").attr('class', 'row');
						$("#req_excel").val(obj.data.data.request_no);
						$("#request_no").val(obj.data.data.request_no);
						$("#port_excel").val($("#port").val());
						$("#trading_type_excel").val($("#trading_type").val());

						var notification = new NotificationFx({
							message : '<p>Anda mendapatkan no request </p>('+obj.data.data.request_no+')',
							layout : 'growl',
							effect : 'jelly',
							type : 'success' // notice, warning, error or success

						});

						// show the notification
						notification.show();
						getIsoCode($("#container_size").val(),$("#container_type").val(),$("#container_height").val(),$("#port").val());
					}
					$(':button').removeAttr('disabled');
				}
			);
    }

	function delete_cont(nocont,noreq,carrier_cont) {
        var url = "<?=ROOT?>container_receiving/delete_container";
        var str = $("#port").val();
		var res = str.split("-");
		var port = res[0];
		var terminal = res[1];

		var vessel_code = $( "#vessel_code" ).val();
		var call_sign = $( "#call_sign" ).val();
		var voyage = $( "#voyage" ).val();
        $.post(url,{'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',NO_CONT:nocont,NO_REQ:noreq,PORT:port,TERMINAL:terminal,VESSEL_CODE:vessel_code,CALL_SIGN:call_sign,VOYAGE:voyage,CARRIERCONT:carrier_cont},function(data){
			//alert( "Data Loaded: " + data );
			var obj = jQuery.parseJSON(data);

			if(obj.rc=="F")
			{
				var notification = new NotificationFx({
					message : '<p>Delete Container Gagal </p><br/>'+obj.rcmsg,
					layout : 'growl',
					effect : 'jelly',
					type : 'error' // notice, warning, error or success

				});
			}
			else if(obj.data.info=="OK")
			{
				var notification = new NotificationFx({
					message : '<p>Delete Container Sukses</p>',
					layout : 'growl',
					effect : 'jelly',
					type : 'success' // notice, warning, error or success

				});

			}
			else{
				var notification = new NotificationFx({
					message : '<p>Delete Container Gagal </p><br/>'+obj.data,
					layout : 'growl',
					effect : 'jelly',
					type : 'error' // notice, warning, error or success

				});
			}

			// show the notification
			notification.show();

            var url = "<?=ROOT?>container_receiving/getListContainer";
			var request_no = $("#request_no").val();
			$("#detailreq").load(url,{'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',request_no:request_no,port:str},function(data){ });

        });

    }

	function submit_container() {

        var request_no = $("#request_no").val();
        var container_qty = $("#container_qty").val();
		
		
		var bookingshipdom = $("#bookingshipdom").val();
		var booking_ship_no = $("#booking_ship_no").val();
        var container_autocomplete = $("#container_autocomplete").val();
        var container_size = $("#container_size").val();
        var container_type = $("#container_type").val();
        var container_status = $("#container_status").val();
        var container_height = $("#container_height").val();
        //optional
        var container_dangerous = $("#container_dangerous").val();
		var container_transit = $("#container_transit").val();
        var container_temperature = $("#container_temperature").val();
        var trading_type = $("#trading_type").val();
		var tl_type = $("#receiving_type").val();
		var nor = $("#reefer_nor").val();
		var vgm = $("#container_vgm").val();
		var is_vgm = $('#is_vgmterminal:checked').val();
		var kode_perdagangan = $("#port").val().slice(-1);

        if(request_no=="")
        {
            alert("Simpan data permintaan dan dapatkan no request");
            $( "#request_no" ).focus();
            return false;
        }
		
        if(container_qty=="")
        {
            alert("Jumlah Kontainer harus diisi");
            $( "#container_qty" ).focus();
            return false;
        }
		
        if(container_size=="")
        {
            alert("Ukuran Container harus diisi");
            $( "#container_size" ).focus();
            return false;
        }
        if(container_type=="")
        {
            alert("Tipe Container harus diisi");
            $( "#container_type" ).focus();
            return false;
        }
        if(container_status=="")
        {
            alert("Status Container harus diisi");
            $( "#container_status']" ).focus();
            return false;
        }
        if(container_height=="")
        {
            alert("Tinggi Container harus diisi");
            $( "select[name='container_high']" ).focus();
            return false;
        }

        //VALIDASI TIPE CONTAINER

		if(container_type=="RFR" && container_temperature=="" && nor=="N")
		{
			alert("Temperature harus diisi");
			$( "#container_temperature" ).focus();
			return false;
		}
		
		$.blockUI();
		$(':button').attr('disabled','disabled');
		var url="<?=ROOT?>misc_tools/add_receiving_detail";
        $.post(url, {'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
						submit_container:true, request_no:request_no, container_qty:container_qty,
						container_no:container_no, 
						container_size:container_size, container_type:container_type, container_status:container_status,
						container_height:container_height, container_weight:container_weight, container_operator:container_operator,
						container_dangerous:container_dangerous, container_transit:container_transit, number_booking_ship:number_booking_ship, 
						container_imo:container_imo, container_un:container_un,
						container_temperature:container_temperature, container_excess_width:container_excess_width,
						container_excess_height:container_excess_height, container_excess_length:container_excess_length,
						trading_type:trading_type, carrier:carrier,port:port,commodity:commodity, tl_type:tl_type, nor: nor, vgm:vgm, is_vgm:is_vgm
				})
		.done(function( data ) {
			$.unblockUI();
			//alert( "Data Loaded: " + data );
			var obj = jQuery.parseJSON(data);

			if(obj.rc=="F")
			{
				var notification = new NotificationFx({
					message : '<p>Tambah Container Gagal </p><br/>'+obj.rcmsg,
					layout : 'growl',
					effect : 'jelly',
					type : 'error' // notice, warning, error or success

				});

				// show the notification
				notification.show();
			}
			else if(obj.data=="OK")
			{
			   // $('#table-container tr:last').after('<tr><td>'+container_autocomplete+'</td><td>'+container_size+'</td><td>'+container_type+'</td><td>'+container_status+'</td><td>'+container_height+'</td><td>'+container_dangerous+'</td><td>'+container_operator+'</td></tr>');
				// create the notification
				var notification = new NotificationFx({
					message : '<p>Tambah Container Sukses</p>',
					layout : 'growl',
					effect : 'jelly',
					type : 'success' // notice, warning, error or success

				});

				// show the notification
				notification.show();

				var url = "<?=ROOT?>misc_tools/getListContainer";
				var request_no = $("#request_no").val();
				$("#detailreq").load(url,{'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',request_no:request_no,port:port},function(data){ });
				$("#container_autocomplete").val("");
				$("#container_weight").val("");
				$("#container_imo").val("");
				$("#container_un").val("");
				$("#container_temperature").val("");
				$("#container_excess_width").val("");
				$("#container_excess_height").val("");
				$("#container_excess_length").val("");
			}
			else {
				$('#submit_container').removeAttr('disabled');
				var res = obj.data.split(".");
				var remark = res[1];

				var notification = new NotificationFx({
					message : '<p>Tambah Container Gagal </p><br/>'+remark,
					layout : 'growl',
					effect : 'jelly',
					type : 'error' // notice, warning, error or success

				});

				// show the notification
				notification.show();
			}
			$(':button').removeAttr('disabled');
        })
		.fail(function() {
            alert("error, simpan container gagal");
			$(':button').removeAttr('disabled');
        });

        return false;
    }

    function getIsoCode(size,type,height,terminal){
    		var url = "<?=ROOT?>container_receiving/get_isocode";
    		$.post(url,
					{'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
					SC:size,TC:type,HGC:height,PORT:terminal}, 
					function(data){
						//alert(data);
						$("#isocodevalue").html(data);
					});
    }
	
    function updqty(type){
        var request_no = $("#request_no").val();
        $.post("<?=ROOT?>container_receiving/update_qty_cont",
					{'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
					request_no:request_no,type:type},
					function(data){
						return;
					}
				);
    }
</script>

					<!--  HEADER  -->
					<div class="row">
						<div class="col-lg-6 ">
							<div class="main-box">
								<header class="main-box-header clearfix">
									<h2>Tariff Simulation</h2>
								</header>

									<div class="main-box-body clearfix">
										<div class="form-group example-twitter-oss">
											<label for="exampleAutocomplete">Request Number</label>
											<input type="text" class="form-control" id="request_no" name="request_no" placeholder="" title="didapatkan setelah berhasil melakukan proses simpan" readonly>
										</div>
										<div class="form-group">
											<label>Terminal</label>
											<select id="port" name="port" class="form-control">
												<option> -- Please Choose Terminal -- </option>
									<?php foreach($terminal as $term){	?>
												<option value="<?=$term["PORT"]?>-<?=$term["TERMINAL"]?>"><?=$term["TERMINAL_NAME"]?></option>
									<?php } ?>
											</select>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group example-twitter-oss">
													<div class="form-group col-xs-6">
														<label for="exampleAutocomplete">Estimate Time Arrival (ETA)</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="text" class="form-control" id="eta" name="eta">
														</div>
													</div>
													<div class="form-group col-xs-6">
														<label for="exampleAutocomplete">Estimate Time Berth (ETB)</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="text" class="form-control" id="etb" name="etb">
														</div>
													</div>
													<div class="form-group col-xs-6">
														<label for="exampleAutocomplete">Estimate Time Departure (ETD)</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="text" class="form-control" id="etd" name="etd">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group example-twitter-oss">
											<div class="form-group col-xs-6">
												<label>Start Shift Reefer</label>
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													<input class="form-control" id="start_shift" name='start_shift' type="text" placeholder="Untuk Reefer Klik Disini">
												</div>
											</div>
											<div class="form-group col-xs-6">
												<label>End Shift Reefer</label>
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													<input class="form-control" id="end_shift" name='end_shift' type="text" placeholder="Untuk Reefer Klik Disini">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group example-twitter-oss">
													<div class="form-group col-xs-6">
														<label for="exampleAutocomplete">Open Stack</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="text" class="form-control" id="openstack" name="openstack">
														</div>
													</div>
													<div class="form-group col-xs-6">
														<label for="exampleAutocomplete">Closing Time</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="text" class="form-control" id="closing" name="closing">
														</div>
													</div>
													<div class="form-group col-xs-6">
														<label for="exampleAutocomplete">Start Stack</label>
														<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
															<input type="text" class="form-control" id="start_stack" name="start_stack">
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
												<label>Type of Trade</label>
												<!--input class="form-control" id="trading_type2" name='trading_type2' type="text" readonly-->
												<!--input class="form-control" id="trading_type" name='trading_type' type="hidden"-->
												<select id="trading_type" name="trading_type" class="form-control">
													<option></option>
													<option value="O">International</option>
													<option value="I">Domestic</option>
												</select>
										</div>
										
										<div class="form-group">
												<label>Receiving Type</label>
												<select id="receiving_type" name="receiving_type" class="form-control">
													<option></option>
													<option value="LAP">Yard</option>
													<option value="TL">Truck Loosing</option>
												</select>
										</div>
										<button id="submit_header" onclick="submitheader();" class="btn btn-success"/>Save</button>
								</div>
							</div>
						</div>
					</div>
					<!--  HEADER  -->					
					
					<!--  DETAILS  -->
					<div class="row" id="container_data" name="container_data">
						<div class="col-lg-12">
							<div class="main-box">
								<header class="main-box-header clearfix">
									<h2>Container Data</h2>
								</header>

								<div class="main-box-body clearfix">

									<div id="error_message" class="alert alert-danger hidden_content" role="alert">
									  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									  <span class="sr-only">Error:</span>
									  <span id="error_text"></span>
										<input type="hidden" id="invalid_container" name="invalid_container" value="false"/>
									</div>

									<div style="width:30%; float:left;">
										<div class="form-group has-feedback">
											<label for="container_autocomplete">Container Quantity</label>
											<div class="input-group">
												<input type="text" class="form-control" id="container_qty" name="container_qty" placeholder="" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kontainer">
												<span id="cont_status_icon" class="glyphicon form-control-feedback" aria-hidden="true"></span>
											</div>
										</div>
										<div class="form-group">
											<label for="container_size">Size</label>
											<div class="input-group">
											<select id="container_size" name="container_size" class="form-control">
											</select>
											</div>
										</div>
										<div class="form-group">
											<div id='component_type'>
												<label for="container_type">Type</label>
												<div class="input-group">
												<select id="container_type" name="container_type" class="form-control">
													<option value="DRY">Dry</option>
													<option value="HQ">High Cube</option>
													<option value="RFR">Reefer</option>
													<option value="OT">Open Top</option>
													<option value="TNK">Tank</option>
													<option value="FLT">Flat Rack</option>
												</select>
											</div>
											</div>
											<div id='component_reefer' class='hidden_content'>
												<label for="container_type">Reefer NOR</label>
												<div class="input-group">
												<select id="reefer_nor" name="reefer_nor" class="form-control">
													<option value="Y">Yes</option>
													<option value="N" selected="selected">No</option>
												</select>
												</div>
											</div>
											<div style="clear:both"></div>
										</div>
										<div class="form-group">
											<label for="container_status">Status</label>
											<div class="input-group">
											<select id="container_status" name="container_status" class="form-control">
												<option value="F">Full</option>
												<option value="E">Empty</option>
											</select>
											</div>
										</div>
										<div class="form-group">
											<label for="container_height">Height</label>
											<div class="input-group">
											<select id="container_height" name="container_height" class="form-control">
												<option value="8.6">8,6</option>
												<option value="9.6">9,6</option>
												<option value="OOG">Not Standart (OOG)</option>
											</select>
											</div>
										</div>
									<div class="form-group alert alert-success" style="width:175px">
										<span id="isocode_text">ISO Code: <b id="isocodevalue"></b></span>
									</div>
								</div>
								<div style="width:30%;float:left">
									<div class="form-group" id="field_vgm_weight">
										<label for="container_vgm">Weight VGM (Kg)</label>
										<div class="input-group">
											<div style="color:#e84e40" title="Centang, Jika Anda Bersedia Menunjuk Terminal Sebagai Penyedia VGM Container Anda">
											<input type="checkbox" id="is_vgmterminal" value="Y"/> * VGM Terminal</div>
										</div>
									</div>
									<div class="form-group">
										<label for="container_dangerous">Hazard</label>
										<div class="input-group">
										<select id="container_dangerous" name="container_dangerous" class="form-control">
											<option value="N">No</option>
											<option value="Y">Yes</option>
										</select>
										</div>
									</div>
									 </div>
									 <div style="width:30%; float:right">
										<div class="form-group">
											<label for="exampleTooltip">Temperature*</label>
											<div class="input-group">
											   <input type="text" class="form-control" id="container_temperature" name="container_temperature" data-toggle="tooltip" data-placement="bottom" title="Temperatur, isi jika kontainer adalah Reefer" disabled="disabled">
											</div>
										</div>
										<div class="form-group" id='div_container_transit'>
											<label for="container_transit">Transit</label>
											<div class="input-group">
											<select id="container_transit" name="container_transit" class="form-control">
												<option value="T">T</option>
												<option value="Y">Y</option>
											</select>
											</div>
										</div>
										<div>
											<input type="button" id="submit_container" name="submit_container" onclick="submit_container();" value="Add Container" class="btn btn-success"/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--  DETAILS  -->

					
					<div id="detailreq"></div>
					<div id="modalplaceholder"></div>
					<input type="hidden" id="valid_eta" />

<link rel="stylesheet" href="<?=CUBE_?>css/libs/datepicker.css" type="text/css" />
<link rel="stylesheet" href="<?=CUBE_?>css/libs/daterangepicker.css" type="text/css" />
<link rel="stylesheet" href="<?=CUBE_?>css/libs/bootstrap-timepicker.css" type="text/css" />
<link rel="stylesheet" href="<?=CUBE_?>css/libs/select2.css" type="text/css" />
