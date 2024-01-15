    $("#formvalidation").validate({
        rules:{
            firstname:{
                minlength: 3,
            }
        },
        messages: {
            required: "please enter you name",
            minlength: "name atleat 3 characters"
          },
        submitHandler: function(div) {
        div.submit();
        }
    });
