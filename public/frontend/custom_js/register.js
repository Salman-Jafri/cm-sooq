$(document).ready(function(e){
	$('#btn-register').on('click',function(e){
		$('#error-msg-div').addClass('d-none');
		var registration_form = $("#registration-form")[0];
		if (registration_form.checkValidity())
		{
			let contact_number = $('#member_contact').val().length;
			if(contact_number!=8)
			{
                setUnsetErrors("set", 'Contact Number should be 8 characters only');
				return false;
			}

			let form_data = new FormData(registration_form);
			// form_data.append(csrf_token_name,csrf_token_value);
		  	$.ajax({
		      url:base_url+'register/pro',
		      type:'POST',
		      processData:false,
		      contentType: false,
		      data:form_data,
              async : false,
		      success:function(msg)
		      {
		      	 var res = $.parseJSON(msg);
		      	 // csrf_token_value = res[0];
		      	 if(res[0]=='success')
		      	 {
                    window.location.href = base_url;
		      	 }
		      	 else if(res['errors'] !== undefined)
		      	 {
                    setUnsetErrors("set", res['errors'].toString());
		      	 }
		      	 else
		      	 {
                    setUnsetErrors("set", res[0]);

		      	 }
	      	  }
		  	});
		}
		else
		{
		   registration_form.reportValidity()
		}
		       //Validate Form
	});

	$('#member_contact').on('paste',function(e){
		if (e.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
		       e.preventDefault();
		   }
	});



	$('#username').on('paste',function(e){
		if (e.originalEvent.clipboardData.getData('Text').match(/\s/g)) {
		       e.preventDefault();
		   }
	});


    $('#country_code').select2({
        width : "100%",
	});

    $('#country_code').select2({
        templateResult: function (data, container) {
            if (!data.id) {
                return data.text;
            }
            var iso = $(data.element).data('iso');
            var $option = $(
                '<span><i class="flag-icon flag-icon-' + iso.toLowerCase() + '"></i> ' + data.text + '</span>'
            );
            return $option;
        }
    });

}); // END OF READY FUNCTION

function setUnsetErrors(type = "set", msg = "")
{
    if(type == "set")
    {
        $('#error-msg-div').removeClass('d-none');

    }
    else
    {
        $('#error-msg-div').addClass('d-none');
    }

    $('#response-msg').html(msg);
    $('#response-msg').css('color','red');
}
$(document).ready(function(){




    $("#registration-form").multiStepForm(
    {
        // defaultStep:0,
        callback : function(){

        },

    }
    ).navigateTo(0);


});
function sendOTP(currentIndex)
{
    setUnsetErrors("unset","");
    if(currentIndex == 0)
    {
        var phone   = $('#member_contact').val();
        var emptySet   = $('#set_value').val();

        // var total_length   = $('#country_code').attr('data-tnumber');
        var selectedOption = $('#country_code option:selected');
        var total_length = selectedOption.attr('data-tnumber');
        var country_code   = selectedOption.val();

        var errors = false;
        if(phone.length <= 0 && country_code.length <= 0 )
        {
            errors = "Phone Number and Country Code are required";
        }
        else if (phone.length != total_length)
        {
            errors = "Phone Number must be " + total_length + " numbers in length";
        }

        if(errors)
        {
            setUnsetErrors("set",errors);
            return false;
        }

        var data = new FormData();
        data.append("phone",phone);
        data.append("country",country_code);
        data.append("emptySet",emptySet);

        var status = false;
        $.ajax({
            url:base_url+'member/send-otp',
            type:'POST',
            processData:false,
            contentType: false,
            data: data,
            async : false,
            success:function(msg)
            {
                var res = $.parseJSON(msg);
		      	 // csrf_token_value = res[0];
		      	 if(res[0]=='success')
		      	 {
		      	 	status = true;
		      	 }
		      	 else
		      	 {
                    setUnsetErrors("set",res[0]);
                    status = false;
		      	 }
            }
        });

        return status;
    }
    else
    {
        return true;
    }
}
function checkOTP(currentIndex)
{
    setUnsetErrors("unset","");

    if(currentIndex == 1)
    {
        var otp   = $('#member_otp').val();
        var phone   = $('#member_contact').val();
        if((otp.length == 0) || (phone.length == 0))
        {
            setUnsetErrors("set","OTP is required");
            return false;
        }
        var data = new FormData();
        data.append("phoneNumber",phone);
        data.append("otp",otp);
        var status = false;
        $.ajax({
            url:base_url+'member/check-otp',
            type:'POST',
            processData:false,
            contentType: false,
            data: data,
            async : false,
            success:function(msg)
            {
                var res = $.parseJSON(msg);
		      	 // csrf_token_value = res[0];
		      	 if(res[0]=='success')
		      	 {
		      	 	status = true;
		      	 }
		      	 else
		      	 {
                    setUnsetErrors("set",res[0]);
                    status = false;
		      	 }
            }
        });

        return status;
    }
    else
    {
        return true;
    }
}
(function ( $ ) {
    $.fn.multiStepForm = function(args) {
        if(args === null || typeof args !== 'object' || $.isArray(args))
          throw  " : Called with Invalid argument";
        var form = this;
        var tabs = form.find('.tab');
        var steps = form.find('.step');
        steps.each(function(i, e){
          $(e).on('click', function(ev){
            form.navigateTo(i);
          });
        });
        form.navigateTo = function (i) {/*index*/
          /*Mark the current section with the class 'current'*/
          tabs.removeClass('current').eq(i).addClass('current');
          // Show only the navigation buttons that make sense for the current section:
        //   form.find('.previous').toggle(i > 0);
          atTheEnd = i >= tabs.length - 1;
          form.find('.Next').toggle(!atTheEnd);
          // console.log('atTheEnd='+atTheEnd);
          form.find('.submit').toggle(atTheEnd);
          fixStepIndicator(curIndex());
          return form;
        }
        function curIndex() {
          /*Return the current index by looking at which section has the class 'current'*/
          return tabs.index(tabs.filter('.current'));
        }
        function fixStepIndicator(n) {
          steps.each(function(i, e){
            i == n ? $(e).addClass('active') : $(e).removeClass('active');
          });
        }
        /* Previous button is easy, just go back */
        // form.find('.previous').click(function() {
        //   form.navigateTo(curIndex() - 1);
        // });

        /* Next button goes forward iff current block validates */
        form.find('.Next').click(function() {

            //managing otp
            send_otp_response =  sendOTP(curIndex());

            if(send_otp_response == false)
            {
                return false;
            }
            check_otp_response = checkOTP(curIndex());
            if(check_otp_response == false)
            {
                return false;
            }

          if('validations' in args && typeof args.validations === 'object' && !$.isArray(args.validations)){
            if(!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args.noValidate)){
              form.validate(args.validations);
              if(form.valid() == true){
                form.navigateTo(curIndex() + 1);
                return true;
              }
              return false;
            }
          }
          form.navigateTo(curIndex() + 1);
        });
        form.find('.submit').on('click', function(e){
          if(typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
            args.beforeSubmit(form, this);
          /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/
          if(typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)){
            // form.submit();
          }
          return form;
        });
        /*By default navigate to the tab 0, if it is being set using defaultStep property*/
        typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;

        form.noValidate = function() {

        }
        return form;
    };
  }( jQuery ));
