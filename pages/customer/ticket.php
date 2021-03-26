							<div class="row">
							<?php 
							if($form_readonly=="")
							{
							?>
								<div class="col-lg-12">
							<?
								} else {
							?>
								<div class="col-lg-6">
							<?
								}
							?>
									<div class="main-box">
										<header class="main-box-header clearfix">
											<h2><?=$sub_title?></h2>
											<?=$sub_sub_title?>
										</header>
										
										<div class="main-box-body clearfix">
											
											<?php 
											$attributes = array('name' => 'ticketform','id'=>'ticketform','onsubmit'=>'return validate_ticket()');

											echo form_open_multipart($action,$attributes);?>	
												
												<div class="form-group">
													<?php
													if($form_readonly=="")
													{
													?>
														<label for="exampleTooltip">Judul</label>
													<?php
														$title_content = "";
													}
													else
													{
														$title_content = "Judul : ".$ticket_data['TICKET_TITLE'];
													}
													?>
													
													<input type="text" name="title" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="Judul" value="<?=htmlentities($title_content, ENT_QUOTES,'UTF-8')?>" <?=$form_readonly?>>
													<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
												</div>
												<div class="form-group">
													<?php
													if($form_readonly=="")
													{
													?>
														<label for="exampleTooltip">No Permintaan yang Berkaitan</label>
													<?php
														$request_number_content = "";
													}
													else
													{
														$request_number_content = "No Permintaan yang Berkaitan : ".$ticket_data['REQUEST_NUMBER'];
													}
													?>													
													<input type="text" name="request_number" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="Tuliskan no permintaan yang berkaitan jika ada" size="30" value="<?=$request_number_content?>" <?=$form_readonly?>>
												</div>
												<div class="form-group">
													<?php
													if($form_readonly=="")
													{
													?>											
													<label for="exampleTextarea">Pesan</label>
													<?php
														$pesan_content = "";
													}
													else
													{
														$pesan_content = "Pesan : ".$ticket_data['TICKET_MESSAGE'];
													}
													?>
													<textarea name="message" id="exampleTextarea" class="form-control" rows="5" <?=$form_readonly?>><?=$pesan_content?></textarea>
												</div>
												<div class="form-group">
													<label for="exampleTooltip">Lampiran : <a href="<?php echo $file_link?>" target="_blank"><?=$ticket_data['TICKET_ATTACHMENT_FILE_NAME']?></a></label>
													<?php
													if($form_readonly=="")
													{
													?>
													<input type="file" name="attachment_file" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="Tuliskan no permintaan yang berkaitan jika ada" size="10">
													<?php }?>
												</div>
												<div class="form-group">
												<?php
													if($form_readonly!="")
													{
														$type_content = "Jenis : ".$type;
														?>
														<input type="text" name="type" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="" size="30" value="<?=$type_content?>" <?=$form_readonly?>>
														<?php
													}
													else
													{
														?>
													<label for="exampleTooltip">Jenis</label>
													<? 
														echo form_dropdown('type', $opt_type, $ticket_data['TICKET_TYPE'] ,"class='sel2' id='address_prov_am' style=\"width:300px\"");
													?>														
														<?php
													}
												?>
												</div>
												<?php 
												if($this->session->userdata('group_phd') == 'p'||$this->session->userdata('group_phd') == '8')//heldesk
												{
													if($form_readonly!="")
													{
														$channel_content = "Channel : ".$channel;
														?>
														<div class="form-group">
														<input type="text" name="chanel" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="" size="30" value="<?=$channel_content?>" <?=$form_readonly?>>
														</div>
													<?php 
													}
													else
													{
														?>
														<div class="form-group">
															<label for="exampleTooltip">Channel</label>
															<? 
																echo form_dropdown('channel', $opt_channel, $ticket_data['TICKET_CHANNEL'] ,"class='sel2' id='address_prov_am' style=\"width:300px\"");
															?>
														</div>														
														<?php
													}
												}
												else
												{
													if($form_readonly!="")
													{
														$channel_content = "Channel : ".$channel;
														?>
														<div class="form-group">
														<input type="text" name="chanel" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="" size="30" value="<?=$channel_content?>" <?=$form_readonly?>>
														</div>
														<?php
													}
												}
												?>
												<?php 
												if($this->session->userdata('group_phd') == 'p'||$this->session->userdata('group_phd') == '8')//heldesk
												{
													if($form_readonly!="")
													{
												?>
													<div class="form-group">
														<?php
														$activity_content = "Activity : ".$ticket_data['TICKET_ACTIVITY'];
														?>
														<input type="text" name="activity" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="" size="30" value="<?=$activity_content?>" <?=$form_readonly?>>
													</div>
												<?php 
													}
													}
												?>
												<div class="form-group">
													<?=$submit_button?>
												</div>
											</form>
										</div>
									</div>
								</div>
							<?php 
							if($form_readonly!="")
							{
							?>
								<div class="col-lg-6">
									<div class="main-box">
										<header class="main-box-header clearfix">
											<h2>Percakapan</h2>
										</header>
										<div class="main-box-body clearfix">
											<div class="conversation-wrapper">
												<div class="conversation-content">
													<div class="conversation-inner">
														<?php
															$this_user_id = $this->session->userdata('uname_phd');
															$this_user_group = $this->session->userdata('group_phd');
															
															foreach ($ticket_message as $row)
															{
															//	if($this_user_group!='p')
																//{
																	//if($this_user_id!=$row['TICKET_USER_ID'])
																		//$item = "item-left";
																	//else if($this_user_id==$row['TICKET_USER_ID'])
																		//$item = "item-right";
																//}
																//else
																//{
																	if($this_user_id!=$row['TICKET_USER_ID'])
																		$item = "item-right";
																	else if($this_user_id==$row['TICKET_USER_ID'])
																		$item = "item-left";
																//}
														?>
																<div class="conversation-item <?=$item?> clearfix">
																	<div class="conversation-user">
																		<img src="img/samples/kunis.png" alt=""/>
																	</div>
																	<div class="conversation-body">
																		<div class="name">
																			<?=$row['NAME']?>
																		</div>
																		<div class="time hidden-xs">
																			<?=$row['CREATED_DATE']?>
																		</div>
																		<div class="text">
																			<?=$row['TICKET_MESSAGE']?>
																			<br>
																			<?php
																			$file_link = APP_ROOT.$folderfile."/".$row['TICKET_ATTACHMENT_FILE_NAME'];
																			?>
																			Download : <a href="<?php echo $file_link?>" target="_blank"><?=$row['TICKET_ATTACHMENT_FILE_NAME']?></a>
																		</div>
																	</div>
																</div>															
														<?php
															}
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
							</div>
							
							<?php 
							if($form_readonly!="")
							{
							?>
							<!-- reply message form-->
							<div class="row">
								<div class="col-lg-12">										
									<div class="main-box">
										<header class="main-box-header clearfix">
											<h2>Balas Pesan</h2>
										</header>
										
										<div class="main-box-body clearfix">
											
											<?php 
											$attributes = array('name' => 'messageform','id'=>'messageform','onsubmit'=>'return validate_message()','role'=>'form');
											echo form_open_multipart($action,$attributes);
											?>	

											<div class="form-group">
													<label for="exampleTextarea" style="display: none;">Pesan</label>
													<textarea name="message2" id="exampleTextarea" placeholder="Kirim Pesan" class="form-control" rows="5"></textarea>
													<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
												</div>
												<div class="form-group">
													<label for="exampleTooltip">Lampiran</label>
													<input type="file" name="attachment_file" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="Tuliskan no permintaan yang berkaitan jika ada" size="10">
												</div>
												<div class="form-group">
													<label for="exampleTooltip">Status</label>
													<? 
														echo form_dropdown('status', $opt_status, $ticket_data['TICKET_STATUS'] ,"class='sel2' id='address_prov_am' style=\"width:300px\"");
													?>
												</div>
												<?php 
												if($this->session->userdata('group_phd') == 'p'||$this->session->userdata('group_phd') == '8')//heldesk
												{
												?>
												<div class="form-group">
													<label for="exampleTooltip">Activity</label>
													<input type="text" name="activity" class="form-control" id="exampleTooltip" data-toggle="tooltip" data-placement="bottom" title="Aktivitas yang sedang dilakukan" size="30">

												</div>													
												<?}?>
												<div class="form-group">
													<button type="submit" class="btn btn-success">Simpan</button>
												</div>
											</form>
										</div>
									</div>
								</div>	
							</div>
							<?php
							}
							?>
							
						  <div class="row">
							  <div class="col-lg-12">
								<div class="main-box">
								  <div class="main-box clearfix">
									<header class="main-box-header clearfix">
									  <h2 class="pull-left">Search Ticket</h2>
									</header>
									<div class="main-box-body clearfix">
									<div class="form-group example-twitter-oss">
									  <label for="exampleAutocomplete">Kata Kunci</label>
									  <input type="text" class="form-control" id="search_input" name="search_input" value="" placeholder="" style="width:50%;" />
									</div>
									<div class="form-group example-twitter-oss">
									  <input type="button" onclick="load_table()" value="Search" id="search_reqs" name="search_reqs" class="btn btn-success"/>
									</div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
			
							<div class="row" id="gridTicket">
								<div class="col-lg-12">
									<div class="main-box clearfix">
										<header class="main-box-header clearfix">
											<h2 class="pull-left">Daftar Tiket</h2>
											
											<div id="reportrange" class="pull-right daterange-filter">
												<i class="icon-calendar"></i>
												<span></span> <b class="caret"></b>
											</div>
										</header>
										
										<div class="main-box-body clearfix">
											<div class="table-responsive">
												<?php
														$tmpl = array (
																			'table_open'          => '<table id="table-ticket" class="table table-hover">',
																			'heading_row_start'   => '<tr class=\'clickableRow\'>'
																	  );

														$this->table->set_template($tmpl);												
														echo $this->table->generate();
												?>
											</div>
										</div>
									</div>
								</div>
							</div>

		<!-- this page specific scripts -->
		<script src="<?=CUBE_;?>js/ipc/validation.js"></script>
		<script src="<?=CUBE_;?>js/jquery.slimscroll.min.js"></script>
		
		<script>
		
		$(document).ready(function() {
				var table2 = $('#table-ticket').dataTable({
					'info': false,
					"lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]]
				});
					
			//sql injection protection
			
			$(":input").keyup(function(event) {
				$(this).val($(this).val().replace(/[\*\'"~`$^+{}<>|\[\]\\]/gi, ''));
			});
			
			
			
			$('.conversation-inner').slimScroll({
				start: 'bottom',
				height: '280px',
				alwaysVisible: false,
				railVisible: true,
				wheelStep: 5,
				allowPageScroll: false
			});		
		});
		
		
		function load_table()
		{
		  //alert('test');
		  $.blockUI();
		  var url = "<?=ROOT?>customer/search_ticket";
		  var limit = $("#pagelimit").val();
		  var search_input = $("#search_input").val();
		  //alert(search_input);
		  $("#gridTicket").load(url,{'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
						search:search_input,
						page:1,limit:limit},function() {
						$.unblockUI();
					  });
		}
			
		function validate_ticket()
		{
			var names = ['title','request_number','message'];
			
			if(validateForm('#ticketform', names))
				return true;
			
			return false;
		}
		
		function validate_message()
		{
			var names = ['message2'];
			
			if(validateForm('#messageform', names))
				return true;
			
			return false;
		}					
		</script>