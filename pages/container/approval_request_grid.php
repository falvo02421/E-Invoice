
<script>
$(document).ready(function() {
	//sql injection protection
	$(":input").keyup(function(event) {
		// $(this).val($(this).val().replace(/[@\*\-#=,;:'"()\[\]/\\]/gi, ''));
		$(this).val($(this).val().replace(/[\*\-#=,;:'"()?%~`$^&+{}|<>\[\]/\\]/gi, ''));
	});
});

	var table2 = $('#table-approval-request').dataTable({
		'info': false,
		'sDom': 'lTfr<"clearfix">tip',
		'oTableTools': {
			'aButtons': [
				{
					'sExtends':    'collection',
					'sButtonText': '<i class="fa fa-cloud-download"></i>&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>',
					'aButtons':    [ 'csv', 'xls', 'pdf', 'copy', 'print' ]
				}
			]
		},
		"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
	});

	var tt2 = new $.fn.dataTable.TableTools(table2);
	$( tt2.fnContainer() ).insertBefore('div.dataTables_wrapper');		

	function clickDialog1(a){
		$('#dialogViewReq').load("<?=ROOT?>/approval_request/view_request/"+a).dialog({modal:false, height:500,width:650,title: 'View Content'});
	}
	
	function clickDialogDoc(a,b){
		if((b=='NPE') ||(b=='DO'))
		{
			$('#frameDoc1').attr('src', a);
			$("#dialogDoc1").dialog({modal:false, height:500,width:650,title: 'View '+b+' file'});
			
		}
		else if((b=='PEB')||(b=='SPPB'))
		{
			$('#frameDoc2').attr('src', a);
			$("#dialogDoc2").dialog({modal:false, height:500,width:650,title: 'View '+b+' file'});
		}
		else if(b=='BKS')
		{
			$('#frameDoc3').attr('src', a);
			$("#dialogDoc3").dialog({modal:false, height:500,width:650,title: 'View Booking Shipping file'});
		}
	}
	
   function approveD(z,a,b)
   {
		
	    var txt;
		var r = confirm("Do you want to approve?");
		if (r == true) {
			$.blockUI();
			if (z=='RECEIVING')
			{
				var url = "<?=ROOT?>/container_receiving/submit_request";
			}
			else if (z=='DELIVERY')
			{
				var url = "<?=ROOT?>/container/save_request_delivery";
			}
			else if (z=='PERPANJANGAN DELIVERY')
			{
				var url = "<?=ROOT?>/container/save_request_deliveryperp";
			}
			else if ((z=='CALBG') || (z=='CALAG') || (z=='CALDG'))
			{
				var url = "<?=ROOT?>/container_alihkapal/save_request_alihkapal";
			}
			
			$.post(url,{'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',request_no:a,port:b},function(data){
				 $.unblockUI();
             var obj = jQuery.parseJSON(data);
             if ((obj.rc=="S") || (obj.rc=="OK")){
                 var notification = new NotificationFx({
                        message : '<p>Approve successfully</p>',
                        layout : 'growl',
                        effect : 'jelly',
                        type : 'success', // notice, warning, error or success 
                        onClose : function() {
						  window.open("<?=ROOT?>/approval_request/main_approval","_self");
					   }
                });
                 notification.show();
             }
             else {
                 var notification = new NotificationFx({
                        message : '<p>Failed</p><br/>'+obj.rcmsg,
                        layout : 'growl',
                        effect : 'jelly',
                        type : 'error' // notice, warning, error or success 
						,
						onClose : function() {
						  window.open("<?=ROOT?>/approval_request/main_approval","_self");
					   }
                });
             }
        });
		} else {
			alert("cancel");
		}
   }
	
	function rejectD()
   {
	    var txt;
		var r = confirm("Do you want to reject?");
		if (r == true) {
			alert("yes");
		} else {
			alert("cancel");
		}
   }
	
</script>


<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<header class="main-box-header clearfix">
				<h2 class="pull-left">List Request</h2>
				
				<div id="reportrange" class="pull-right daterange-filter">
					<i class="icon-calendar"></i>
					<span></span> <b class="caret"></b>
				</div>
			</header>
			
			<div class="main-box-body clearfix">
				<div class="table-responsive">
					<?php
						$tmpl = array (
										'table_open'          => '<table id="table-approval-request" class="table table-hover">'
									  );

						$this->table->set_template($tmpl);
						echo $this->table->generate();
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="dialogDoc1" style="display:none">
    <div>
    <iframe id="frameDoc1" style="position: absolute; width:100%;height: 100%; border: none"></iframe>
    </div>
</div> 
<div id="dialogDoc2" style="display:none">
    <div>
    <iframe id="frameDoc2" style="position: absolute; width:100%;height: 100%; border: none"></iframe>
    </div>
</div> 
<div id="dialogDoc3" style="display:none">
    <div>
    <iframe id="frameDoc3" style="position: absolute; width:100%;height: 100%; border: none"></iframe>
    </div>
</div> 
<div id="dialogViewReq"></div>


