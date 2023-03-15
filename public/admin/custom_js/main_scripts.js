	function isNumber(evt, element)
	{
	  var charCode = (evt.which) ? evt.which : event.keyCode
	  if ((charCode != 45 || $(element).val().indexOf('-') != -1) && (charCode != 46 || $(element).val().indexOf('.') != -1) && ((charCode < 48 && charCode != 8) || charCode > 57))
	  {
	    return false;
	  }
	  else 
	  {
	    return true;
	  }
	}

	function recalcId() 
	{           
	    $.each($(".sr tr:not(:first)"), function (i, el) {
	        $(this).find("td:first").text(i + 1);     
	    })
	}

	function recalcId2() 
	{           
	    $.each($(".sr2 tr:not(:first)"), function (i, el) {
	        $(this).find("td:first").text(i + 1);     
	    })
	}

	function recalcId3() 
	{           
	    $.each($(".sr3 tr:not(:first)"), function (i, el) {
	        $(this).find("td:first").text(i + 1);     
	    })
	}

	function recalcId4() 
	{           
	    $.each($(".sr4 tr:not(:first)"), function (i, el) {
	        $(this).find("td:first").text(i + 1);     
	    })
	}

	function prevent_tabs_on_refresh()
	{
		if (location.hash) {
		  $('a[href=\'' + location.hash + '\']').tab('show');
		}
		var activeTab = localStorage.getItem('activeTab');
		if (activeTab) {
		  $('a[href="' + activeTab + '"]').tab('show');
		}

		$('body').on('click', 'a[data-toggle=\'tab\']', function (e) {
		  e.preventDefault()
		  var tab_name = this.getAttribute('href')
		  if (history.pushState) {
		    history.pushState(null, null, tab_name)
		  }
		  else {
		    location.hash = tab_name
		  }
		  localStorage.setItem('activeTab', tab_name)

		  $(this).tab('show');
		  return false;
		});
		$(window).on('popstate', function () {
		  var anchor = location.hash ||
		    $('a[data-toggle=\'tab\']').first().attr('href');
		  $('a[href=\'' + anchor + '\']').tab('show');
		});
	}

	function show_notification(type,msgtxt)
	{
	    Lobibox.notify(type, {
	    // soundPath: base_url+'admin/custom_vendors/lobibox/sounds/',
	    // soundExt: '.ogg',
	    sound:true,
	    size: 'mini',
	    rounded: false,
	    delay: 5000,
	    pauseDelayOnHover: true,
	    continueDelayOnInactiveTab: false,
	    position: 'center top', //or 'center bottom'
	    msg: msgtxt
	    });
	}

	function preview_image(input,container) 
	{
		if (input.files && input.files[0]) 
		{
	    	var reader = new FileReader();
	    	reader.onload = function(e) {
	      	$(container).attr('src', e.target.result);
	    }
	   	reader.readAsDataURL(input.files[0]);
	  }
	}

	function generate_required(form)
	{
		
		var flag=0;
		$(form+' .clrreq').remove();
		$(form+' .ifrequired').each(function(){
			var id = $(this).attr('	id');
			var selector = '#'+id;
			if($(selector).val()=="")
			{
				$('<p class="clrreq help-block text-red" style="color:red;">*Required</p>').hide().fadeIn('slow').insertAfter(selector);
				flag++;
			}	
		});
		if(flag>0)
		{
			return 'yes';
		}
	}

	function check_length(form)
	{
		var flag=0;
		$(form+' .clrreq').remove();
		$(form+' .iflen').each(function(){
			var id = $(this).attr('id');
			var selector = '#'+id;
			if($(selector).val().length<3)
			{
				$('<p class="clrreq help-block text-red" style="color:red;">*Length must be 3 or more</p>').hide().fadeIn('slow').insertAfter(selector);
				flag++;
			}	
		});
		if(flag>0)
		{
			return 'yes';
		}
	}

	function check_clength(form)
	{
		var flag=0;
		$(form+' .clrreq').remove();
		$(form+' .iflenc').each(function(){
			var id = $(this).attr('id');
			var selector = '#'+id;
			if($(selector).val().length<8)
			{
				$('<p class="clrreq help-block text-red" style="color:red;">*Length must be 8 or more</p>').hide().fadeIn('slow').insertAfter(selector);
				flag++;
			}	
		});
		if(flag>0)
		{
			return 'yes';
		}
	}

	function check_email(form)
	{
		var flag=0;
		$(form+' .clrreq').remove();
		$(form+' .ifemail').each(function(){
			var id = $(this).attr('id');
			var selector = '#'+id;
			if(IsEmail($(selector).val())==false)
			{
				$('<p class="clrreq help-block text-red" style="color:red;">* Invalid Email address</p>').hide().fadeIn('slow').insertAfter(selector);
				flag++;
			}	
		});
		if(flag>0)
		{
			return 'yes';
		}
	}

	function IsEmail(email) 
	{
	  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  if(!regex.test(email)) {
	    return false;
	  }else{
	    return true;
	  }
	}

	function show_ifmsgs(selector,error_msg,type)
	{
		if(type=='success')
		{
			$('<p class="iferrors help-block text-success" style="color:green;">'+error_msg+'</p>').hide().fadeIn('slow').insertAfter(selector);
		}
		if(type=='info')
		{
			$('<p class="iferrors help-block text-info" style="color:blue;">'+error_msg+'</p>').hide().fadeIn('slow').insertAfter(selector);
		}
		if(type=='warning')
		{
			$('<p class="iferrors help-block text-warning" style="color:orange;">'+error_msg+'</p>').hide().fadeIn('slow').insertAfter(selector);
		}
		if(type=='error')
		{
			$('<p class="iferrors help-block text-danger" style="color:red;">'+error_msg+'</p>').hide().fadeIn('slow').insertAfter(selector);
		}
	}

	function hide_ifmsgs()
	{
		$('.iferrors').remove();
	}
	function ajax_insert(fd,submission,md,dt)
	{

	  var len = arguments.length;
	  var form_data = new FormData(fd);
	  form_data.append('_token',$('input[name="_token"]').val());
	  $.ajax({
	      url:submission,
	      type:'POST',
	      processData:false,
	      contentType: false,
	      async:false,
	      data:form_data,
	      success:function(msg)
	      {
	      		var res = $.parseJSON(msg);
		      	// $('#my_csrf').val(res[0]);
		      	if(res[1]=='success')
		      	{
		      		if(md!=0)
			      	{
			      		$(md).modal('toggle');	
			      	}
			      	if(dt!=0)
			      	{
			      		$(dt).DataTable().ajax.reload();
			      	}
			      	show_notification('success',' Added successfully');
		      		fd.reset();
		      		return false;
		      	}
		      	if(res[1]=='error')
		      	{
		      		show_notification('error',' Unexpected Error Try again');
		      		$('#btn-next').fadeOut('slow');
		      		return false;
		      	}
		      	show_notification('warning', res[1]);
		      	// $('#btn-next').fadeOut('slow');
	      	
      	  },
      	  error:function(err)
      	  {
      	  	 if(err.status==422)
      	  	 {
      	  	 	show_notification('warning',err.responseJSON.message);
      	  	 }
      	  }


	  });
	}
	
	function ajax_update(fd,submission,md,dt)
	{
	  var len = arguments.length;
	  var unique_id = $(fd).find('.hid').val();	
	  var form_data = new FormData(fd);
	  // var token_name   = csrf_token_name;
	  // var token_value  = $('#my_csrf').val();
	  // form_data.append(token_name,token_value);
	  form_data.append('unique_id',unique_id);
	  $.ajax({
	      url:base_url+submission,
	      type:'POST',
	      processData:false,
	      contentType: false,
	      data:form_data,
	      success:function(msg)
	      {

		      	if(md!=0)
		      	{
		      		$(md).modal('toggle');
		      	}
		      	if(dt!=0)
		      	{
		      		$(dt).DataTable().ajax.reload();
		      	}
		      	
		      	var res = $.parseJSON(msg)
		      	$('#my_csrf').val(res[0]);
		      	if(res[1]=='success')
		      	{
		      		show_notification('success',' Updated');
		      		return false;
		      	}
		      	if(res[1]=='error')
		      	{
		      		show_notification('error', ' Nothing to update');
		      		return false;
		      	}
	      		show_notification('warning',res[1]);
      	  },
      	  error:function(err)
      	  {
      	  	 if(err.status==422)
      	  	 {
      	  	 	show_notification('warning',err.responseJSON.message);
      	  	 }
      	  }
	  });
	}
	
	function ajax_delete(unique_id,submission,dt)
	{
		var len = arguments.length;
		var form_data = new FormData();
	  	var token_name   = '_token';
	  	var token_value  = $('#token').val();
	  	form_data.append(token_name,token_value);
	  	form_data.append('unique_id',unique_id);
	  	$.ajax({
	      url:submission,
	      type:'POST',
	      processData:false,
	      contentType: false,
	      data:form_data,
	      success:function(msg)
	      {
	      	$('#delete-modal').modal('toggle');
	      	var res = $.parseJSON(msg)
	      	if(res[1]=='success')
	      	{
	      		if(len==3)
	      		{
	      			$(dt).DataTable().ajax.reload();
	      		}
	      		show_notification('success',' Deleted');
	      		return false;
	      	}
	      	if(res[1]=='error')
	      	{
	      		show_notification('error', 'Unexpected error try again');
	      		return false;
	      	}
	      }
	  	});
	}

	function fill_edit_fields(unique_id,selector,submission,file_path,fselector)
	{
		var editForm = $(selector).find('form');
		editForm.find('.hid').val(unique_id);
		var form_data = new FormData();
		form_data.append('unique_id',unique_id);
		form_data.append('_token',$('input[name="_token"]').val());
		$.ajax({
	      url:base_url+submission,
	      type:'POST',
	      processData:false,
	      contentType: false,
	      data:form_data,
	      success:function(msg)
	      {
	      	var res = $.parseJSON(msg)
	      	if(res[1]!='no results found')
	      	{
	      		$(fselector).attr('src',base_url+'all_images/car-logo-placeholder.png');
	      		$(selector).find('input,select,textarea').each(function(){
	      			var inputs =$(this);
	      			var input_name=inputs.prop('name');
	      			var input_id  =inputs.prop('id');

  			      	$.each(res[1], function(key, value){
  			      		
  			      		if(key==input_name)
  			      		{
  			      			// if(value==null){value='';}
  			  //     			var extension =  value.substr( ( value.lastIndexOf('.') +1) );
  			  //     			extension = extension.toLowerCase();
  			  //     			if(extension=='jpg' || extension=='jpeg' || extension=='png' || extension=='gif')
  			  //     			{
  			  //     				$(fselector).attr('src',file_path+value);
							// }
							// else
							// {
  			      				$('#'+input_id).val(value);
							// }
  			      		}
  					});
	      		});
	      	}
	      }
	  	});
	}
	
function fn_check_extension(file)
{
	var validExtensions = ['jpg','jpeg','png','gif','bmp','pdf','doc','docx','xls','xlsx','ppt','pptx','txt'];
	var ext  = file.name.split('.').pop().toLowerCase();
	if (validExtensions.indexOf(ext) == -1) {
		show_notification('warning',"Only formats are allowed : "+validExtensions.join(', '));
		return 'dont';
	}
	else
	{
		if(ext=='jpg' || ext=='jpeg' || ext=='png' || ext=='bmp' || ext=='gif')
		{
			var icon = '<i class="fas fa-file-image fa-lg" style="color:#0754f9;"></i>';
		}
		else if(ext=='pdf')
		{
			var icon = '<i class="fas fa-file-pdf fa-lg" style="color:#EC0F01;"></i>';
		}
		else if(ext=='doc' || ext=='docx')
		{
			var icon = '<i class="fas fa-file-word fa-lg" style="color:#2A5395;"></i>';
		}
		else if(ext=='xls' || ext=='xlsx')
		{
			var icon = '<i class="fas fa-file-excel fa-lg" style="color:#1C6C40;"></i>';
		}
		else if(ext=='ppt' || ext=='pptx')
		{
			var icon = '<i class="fas fa-file-powerpoint fa-lg" style="color:#CB4424;"></i>';
		}
		else if(ext=='txt')
		{
			var icon = '<i class="fas fa-file fa-lg"></i>';
		}
		else
		{
			var icon = '<i class="fas fa-infinity fa-lg"></i>';
		}
		return icon;
	}
}
	
	function system_notifications()
	{
		$.ajax({
			url:base_url+'notifications/get_notifications',
			type:'POST',
			success:function(msg)
			{
				var res = $.parseJSON(msg);
				if(res[0]!=0)
				{
					$('#icon-notification').show();
					$('#unread-notifications').html("");
					$('#unread-notifications').html(res[0]);
				}
				else
				{
					$('#icon-notification').hide();
				}
				
				$('#notifications-body').html("");
				$('#notifications-body').html(res[1]);
			
			}
		});
	}
	$(document).ready(function(e){
		//Number only
		$(document).on('keypress','.isnumber',function(e){
	 	 return isNumber(e, this);
		});
		
		// $('.modal-dialog').addClass('draggable');
		
		// $('.draggable').draggable();
		

		$('#delete-modal').on('show.bs.modal',function(e){
			var unique_id =e.relatedTarget.id;
			var btn = e.relatedTarget.getAttribute('lbl');
			$('#delete-id').val(unique_id);
			$('#btn-delete').attr('id',btn);
		});

		$('#btn-change-password').on('click',function(e){
			$('#change-password-msg').fadeOut('slow');
			var current_password = $('#current_password').val();
			var new_password 	 = $('#new_password').val();
			var confirm_password = $('#confirm_password').val();
			if(current_password==""){
				$('#change-password-msg').html('');
				$('#change-password-msg').html('<p class="text-warning"><i class="fa fa-exclamation"></i> Current Password Required </p>');
				$('#change-password-msg').fadeIn('slow');
				$('#current_password').focus();
				return false;
			}
			if(new_password==""){
				$('#change-password-msg').html('');
				$('#change-password-msg').html('<p class="text-warning"><i class="fa fa-exclamation"></i> New Password Required </p>');
				$('#change-password-msg').fadeIn('slow');
				$('#new_password').focus();
				return false;
			}
			if(confirm_password==""){
				$('#change-password-msg').html('');
				$('#change-password-msg').html('<p class="text-warning"><i class="fa fa-exclamation"></i> Confirm Password Required </p>');
				$('#change-password-msg').fadeIn('slow');
				$('#confirm_password').focus();
				return false;
			}
			if(confirm_password!=new_password){
				$('#change-password-msg').html('');
				$('#change-password-msg').html('<p class="text-warning"><i class="fa fa-exclamation"></i> New &amp; Confirm Password Do Not Match </p>');
				$('#change-password-msg').fadeIn('slow');
				return false;
			}
			var form_data = new FormData();
			form_data.append('current_password',current_password);
			form_data.append('new_password',new_password);
			$.ajax({
				url:base_url+'welcome/change_password',
				type:'POST',
				processData:false,
				contentType: false,
				data:form_data,
				success:function(response)
				{
					$('#change-password-msg').html('');
					$('#change-password-msg').html(response);
					$('#change-password-msg').fadeIn('slow');
					$('#current_password').val('');
					$('#new_password').val('');
					$('#confirm_password').val('');
				}
			});
		});
		// system_notifications();
		$body = $("body");
		$(document).on('click','.read-notification',function(e){
			e.preventDefault();
			var notify_id = $(this).attr('id');
			$body.removeClass("loading");
			$.ajax({
				url:base_url+'notifications/read_notification',
				type:'POST',
				data:{'notify_id':notify_id},
				success:function(msg)
				{
					$body.removeClass("loading");
					setTimeout(function(){$body.removeClass("loading");system_notifications();$body.removeClass("loading");},1000)
				}
			});
			$body.removeClass("loading");
		});

	   
	    // $(document).on({
	    //    ajaxStart: function() { $body.addClass("loading");},
	    //    ajaxStop: function() { $body.removeClass("loading");}    
	    // });

	});


