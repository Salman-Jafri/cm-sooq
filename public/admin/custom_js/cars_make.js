$(document).ready(function(e){
	$('#dt').DataTable({
		destroy: true,
	    "sAjaxSource": base_url+'/showCarsMake',
	    "pageLength": 100,
	    "order": [],
	    responsive:true
	});	
	$('#make_logo_preview').on('click',function(e){
		$('#make_logo').trigger('click');
	});

	$('#make_logo').on('change',function(e){
		$('#make_logo_preview').attr('src', window.URL.createObjectURL(this.files[0]));
	});

	$('#btn-add').on('click',function(e){
		let frm = '#addForm';
		let addForm =$(frm)[0];
		if(generate_required(frm)=='yes'){return false;}
		ajax_insert(addForm,base_url+'/addCarsMake','','#dt');
		let newUrl = base_url.split('/').slice(0, -1).join('/');	
		$('#make_logo_preview').attr('src',newUrl+'/all_images/car-logo-placeholder.png');
	});

	$('#edit-modal').on('show.bs.modal',function(e){
		let unique_id = e.relatedTarget.id;
		fn_get_origin();
		fill_edit_fields(unique_id,'#edit-modal','/editCarsMake');
		
	});

	$('#edit-modal').on('shown.bs.modal',function(e){
		let unique_id = e.relatedTarget.id;
		
		$.ajax({
			url:base_url+'/editCarsFiles',
			type:'POST',
			data:{uid:unique_id,'_token':$('#token').val()},
			success:function(msg)
			{
				var res = $.parseJSON(msg);
				$('#e_make_logo_preview').attr('src',res[0]);
			}
		});
	});

	$('#e_make_logo_preview').on('click',function(e){
		$('#e_make_logo').trigger('click');
	});

	$('#e_make_logo').on('change',function(e){
		$('#e_make_logo_preview').attr('src', window.URL.createObjectURL(this.files[0]));
	});

	$('#btn-update').on('click',function(e){
		let frm = '#editForm';
		let editForm =$(frm)[0];
		if(generate_required(frm)=='yes'){return false;}
		ajax_update(editForm,'/updateCarsMake','#edit-modal','#dt');
	});


	$(document).on('click','#btn-delete',function(e){
		let unique_id  = $('#delete-id').val();
		let myFormSubmission = base_url+'/deleteCarsMake';
		ajax_delete(unique_id,myFormSubmission,'#dt');
	});

	$('#add-buyer-modal').on('shown.bs.modal',function(e){
		fn_get_origin();
	});

});

function isModalShown(modal) {
	
	let modalIsShown = (modal.data('bs.modal') || {})._isShown;
	return !(typeof modalIsShown === 'undefined' || !modalIsShown);
}
function fn_get_origin(origin_id)
{

	let uid=0;
	// if(isModalShown($('#add-buyer-modal')))
	// {
	// 	uid=0;
	// }
	// else if (isModalShown($('#edit-modal'))) 
	// {
	// 	uid=origin_id;
	// }

	let form_data = new FormData();
	form_data.append('uid',uid);
	form_data.append('_token',$('#token').val());

	$.ajax({
		url:base_url+'/getOrigin',
	      type:'POST',
	      processData:false,
	      contentType: false,
	      data:form_data,
		success:function(msg)
		{
			$('.origin_id').html('');
			$('.origin_id').html(msg);
		}
	});
	
}