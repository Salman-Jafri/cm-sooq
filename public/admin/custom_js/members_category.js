$(document).ready(function(e){

	$('#dt').DataTable({
		destroy: true,
	    "sAjaxSource":base_url+'/showMemberCategory',
	    "pageLength": 100,
	    "order": [],
	    responsive:true
	});	
	
	$('#btn-add').on('click',function(e){
		let frm = '#addForm';
		let addForm =$(frm)[0];
		if(generate_required(frm)=='yes'){return false;}
		ajax_insert(addForm,base_url+'/addMemberCategory','','#dt');
	});

	$('#edit-modal').on('show.bs.modal',function(e){
		let unique_id = e.relatedTarget.id;
		fill_edit_fields(unique_id,'#edit-modal','/editMemberCategory');
	});
	
	$('#btn-update').on('click',function(e){
		let frm = '#editForm';
		let editForm =$(frm)[0];
		if(generate_required(frm)=='yes'){return false;}
		ajax_update(editForm,'/updateMemberCategory','#edit-modal','#dt');
	});


	$(document).on('click','#btn-delete',function(e){
		let unique_id  = $('#delete-id').val();
		let myFormSubmission = base_url+'/deleteMemberCategory';
		ajax_delete(unique_id,myFormSubmission,'#dt');
	});

});