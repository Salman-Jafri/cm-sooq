$(document).ready(function(e){
	var fileList = [];
	var efileList= [];

	$('#browse-files').on('click',function(e){
		$('#image_uploads').trigger('click');
	});

	$('#image_uploads').on('change',function(e){
		var files = e.target.files;
		if(fileList.length >0){
			show_notification('warning','One Image allowed');
			return false;
		}
		$.each(files,function(i,file){
			var ve = fn_check_extension(file);
			if(ve!='dont')
			{
				fileList.push(file);
				$('#file-tbody').append('<tr><th>'+ve+'</td><th class="tr-files" id="'+file+'">'+file.name+'</th><th><a href="javascript:void(0);" class="rmv-file text-danger"><i class="fas fa-times"></i></a></th></tr>');
			}
		});
	});

	$(document).on('click','.rmv-file',function(e){
		fileList=[];
		efileList=[];
		$(this).closest('tr').remove();
	});

	$('#dt').DataTable({
		destroy: true,
		"sAjaxSource":'/showBanner',
		"pageLength": 100,
		"order": [],
		responsive:true
	});

	$('#btn-add').on('click',function(e){
		var frm = '#addForm';
		var addForm =$(frm)[0];
		var form_data    = new FormData();
		if($('.tr-files').length>0)
		{
			fileList.forEach(function (file) {
				$('.tr-files').each(function(e){
					if($.trim($(this).text())==file.name)
					{
						form_data.append('image_uploads',file);
					}
				});
			});
			form_data.append('_token',$('input[name="_token"]').val());

		}
		else
		{
			$('#image_uploads').val(null);
			fileList=[];
		}
		
		$.ajax({
			url:'addBanner',
			type:'POST',
			processData:false,
			contentType: false,
			data:form_data,
			success:function(msg)
			{
				var res=$.parseJSON(msg)
				if(res[1]=='success')
				{	
					show_notification('success','Image Added Successfully');
					addForm.reset();
					$('#image_uploads').val(null);
					fileList=[];

					$('#file-tbody').html("");
					$('#dt').DataTable().ajax.reload();
					$('#new-modal').modal('hide');

				}
				else if(res[1]=='error')
				{
					show_notification('error','Unexpeced Error Try Again');
				}
				else
				{
					show_notification('warning',res[1]);	
				}
			}
		});
	});

	$('#edit-modal').on('shown.bs.modal',function(e){
		var unique_id = e.relatedTarget.id;
		$.ajax({
			url:'/editBannerGetFiles',
			type:'POST',
			data:{banner_id:unique_id,_token:$('#token').val()},
			success:function(msg)
			{
				var res=$.parseJSON(msg);
				$('#e-file-tbody').html(res[0]);
				$('.hid').val(res[1]);

			}
		});
	});



	$('#e_browse-files').on('click',function(e){
		$('#e_image_uploads').trigger('click');
	});

	$('#e_image_uploads').on('change',function(e){
		var files = e.target.files;
		if(efileList.length >0){
			show_notification('warning','One Image allowed');
			return false;
		}
		$.each(files,function(i,file){
			var ve = fn_check_extension(file);
			if(ve!='dont')
			{
				efileList.push(file);
				$('#e-file-tbody').html('');
				$('#e-file-tbody').append('<tr><th>'+ve+'</td><th class="e-tr-files" id="'+file+'">'+file.name+'</th><th><a href="javascript:void(0);" class="rmv-file text-danger"><i class="fas fa-times"></i></a></th></tr>');
			}
		});
	});


	$('#btn-update').on('click',function(e){
		var uid = $('.hid').val();
		var frm = '#editForm';
		var addForm =$(frm)[0];
		var form_data    = new FormData();
		if($('.e-tr-files').length>0)
		{
			efileList.forEach(function (file) {
				$('.e-tr-files').each(function(e){
					if($.trim($(this).text())==file.name)
					{
						form_data.append('e_image_uploads',file);
					}
				});
			});
			form_data.append('uid',uid);  
			form_data.append('_token',$('input[name="_token"]').val());
		}
		else
		{
			$('#e_image_uploads').val(null);
			efileList=[];
		}
		
		$.ajax({
			url:'updateBanner',
			type:'POST',
			processData:false,
			contentType: false,
			data:form_data,
			success:function(msg)
			{
				var res=$.parseJSON(msg)
				if(res[1]=='success')
				{	
					show_notification('success','Image Updated Successfully');
					addForm.reset();
					$('#e_image_uploads').val(null);
					efileList=[];

					// $('#e-file-tbody').html("");
					$('#dt').DataTable().ajax.reload();
					$('#new-modal').modal('hide');
				}
				else if(res[1]=='error')
				{
					show_notification('error','Unexpeced Error Try Again');
				}
				else
				{
					show_notification('warning',res[1]);	
				}
			}
		});
	});	

	$(document).on('click','#btn-delete',function(e){
		var unique_id  = $('#delete-id').val();
		var myFormSubmission = '/deleteBanner';
		ajax_delete(unique_id,myFormSubmission,'#dt');
	});

});