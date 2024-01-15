$(document).ready(function () {
    $('.Rezaer_btn').click(function (e) {
        e.preventDefault();

        //for validation
            var name =$('.name').val();
            var lastname =$('.lastname').val();
            var email =$('.email').val();
            var number =$('.number').val();
            var slocation =$('.slocation').val();
            var altlocation =$('.altlocation').val();
            var county =$('.county').val();
            var consti =$('.consti').val();
            var ward =$('.ward').val();
            var markland =$('.markland').val();

            if(!name)
            {
            firstname_error = "requeired";
                    $('#firstname_error').html('');
                    $('#firstname_error').html(firstname_error);
                }
                else{
                    firstname_error = "";
                $('#firstname_error').html('');
            }
                if (!lastname) {
                    lname_error = "location is required";
                    $("#lname_error").html("");
                    $("#lname_error").html(lname_error);
                } else {
                    lname_error = " ";
                    $("#lname_error").html("");
                }
                if (!email) {
                    email_error = "email is required";
                    $("#email_error").html("");
                    $("#email_error").html(email_error);
                } else {
                    email_error = " ";
                    $("#email_error").html("");
                }
                if (!number) {
                    number_error = "phone number is required";
                    $("#number_error").html("");
                    $("#number_error").html(number_error);
                } else {
                    number_error = " ";
                    $("#number_error").html("");
                }
                if (!slocation) {
                    slocation_error = "specific location is required";
                    $("#slocation_error").html("");
                    $("#slocation_error").html(slocation_error);
                } else {
                    slocation_error = " ";
                    $("#slocation_error").html("");
                }
                if (!altlocation) {
                    altlocation_error = "Alternetive is required";
                    $("#altlocation_error").html("");
                    $("#altlocation_error").html(altlocation_error);
                } else {
                    altlocation_error = " ";
                    $("#altlocation_error").html("");
                }
                if (!county) {
                    county_error = "County is required";
                    $("#county_error").html("");
                    $("#county_error").html(county_error);
                } else {
                    county_error = " ";
                    $("#county_error").html("");
                }
                if (!consti) {
                    consti_error = "Contituency is required";
                    $("#consti_error").html("");
                    $("#consti_error").html(consti_error);
                } else {
                    consti_error = " ";
                    $("#consti_error").html("");
                }
                if (!ward) {
                    ward_error = 'Ward is required';
                    $('#ward_error').html(' ');
                    $('#ward_error').html(ward_error);
                } else {
                    ward_error = " ";
                    $('#ward_error').html('');
                }
                if (!markland) {
                    markland_error = "Landmark is required";
                    $("#markland_error").html("");
                    $("#markland_error").html(markland_error);
                } else {
                    markland_error = " ";
                    $('#markland_error').html('');
                }

            if(firstname_error != '' || lname_error != '' || email_error != '' || number_error != '' || slocation_error != '' || altlocation_error != '' || county_error != '' || consti_error != '' || ward_error != '' || markland_error !='')
            {
                return false;
            }
            else
            {
            var data = {
                            'name':name,
                            'lastname':lastname,
                            'email':email,
                            'number':number,
                            'slocation':slocation,
                            'altlocation':altlocation,
                            'county':county,
                            'consti':consti,
                            'ward':ward,
                            'markland':markland
                        }

                $.ajax({
                    method:"POST",
                    url: "/proceed-to-pay",
                    data: {
                            'name':name,
                            'lastname':lastname,
                            'email':email,
                    },
                    data: data,
                    success: function (response) {
                        alert(response.total_price)
                    }
                });
            }
        });
});
