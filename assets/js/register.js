    $(document).ready(function() {  
    /*$('#login').on('click', function() {
        $("#login_form").show();
        $("#register_form").hide();
    });
    $('#register').on('click', function() {
        $("#register_form").show();
        $("#login_form").hide();
    });*/

    // Register user account to use bank
    $('#btnreg').on('click', function(){
        $("#btnreg").attr("disabled", "disabled");
        var name = $('#name').val();
        var email = $('#email').val();
        var ssn = $('#ssn').val();
        var password = $('#password').val();

        if(name != "" && email != "" && ssn != "" && password != "" ){
            $.ajax({
                url: "save.php",
                type: "POST",
                data: {
                    type: 1,
                    name: name,
                    email: email,
                    ssn: ssn,
                    password: password                      
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $('#register_form').find('input:text').val('');

                        $("#error").hide();
                        $("#success").show();
                        $('#success').html('Registration successful.');
                    }
                    else if(dataResult.statusCode==201){
                    	$("#btnreg").removeAttr("disabled");

                        $("#success").hide();
                        $("#error").show();
                        $('#error').html('E-mail address already exists. Try another address.');
                    }
                }
            });
        }
        else{
            alert('Please fill all the fields!');
        }
    });

    // Create financial account
    $('#btncreateacc').on('click', function() { 
        $("#btncreateacc").attr("disabled", "disabled");
        var accountname = $("#accountname").val();
        var accounttype = $("#accounttype").val();

        if(accountname != "" && accounttype != ""){
            $.ajax({
                url: "../save.php",
                type: "POST",
                data: {
                    type: 3,
                    accountname: accountname,
                    accounttype: accounttype
                },
                cache: false,
                success: function(dataResult){
                    console.log(dataResult);
                    var ing = JSON.parse(dataResult);

                    //console.log(JSON.stringify(dataResult));

                    if(ing.statusCode == 200) {
                        $("#succ").show();
                        $('#succ').html('Account successfully created.');
                    }
                    else if(ing.statusCode == 201) {
                        $("#btncreateacc").removeAttr("disabled");

                        $("#err").show();
                        $('#err').html('Something went wrong.');
                    }
                }
            });
        }
        else{
            alert('Please fill all the fields!');
        }
    });

    // Transfer money
    $('#btntransfer').on('click', function() {
        $("#btntransfer").attr("disabled", "disabled");
        var accountfrom = $('#transferfrom').val();
        var accountto = $('#transferto').val();
        var message = $('#transfermessage').val();
        var quantity = $('#transferquantity').val();

        if(accountfrom != "" && accountto != ""){
            $.ajax({
                url: "../save.php",
                type: "POST",
                data: {
                    type: 4,
                    accountfrom: accountfrom,
                    accountto: accountto,
                    message: message,
                    quantity: quantity
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $('#transfer_form').find('input:text').val('');

                        $("#err").hide();
                        $("#trsuccess").show();
                        $('#trsuccess').html('Success');
                    }
                    else if(dataResult.statusCode==201){
                        $("#btntransfer").removeAttr("disabled");

                        $("#trsuccess").hide();
                        $("#trerror").show();
                        $('#trerror').html('Something went wrong.');
                    }
                }
            });
        }
        else{
            alert('Please fill all the fields!');
        }
    });

    // Send money
    $('#btnsendmoney').on('click', function() {
        $("#btnsendmoney").attr("disabled", "disabled");
        var accountfrom = $('#sendaccountfrom').val();
        var accountnumber = $('#sendaccountto').val();
        var message = $('#sendmessage').val();
        var quantity = $('#sendquantity').val();

        if(accountfrom != "" && accountnumber != ""){
            $.ajax({
                url: "../save.php",
                type: "POST",
                data: {
                    type: 5,
                    accountfrom: accountfrom,
                    accountnumber: accountnumber,
                    message: message,
                    quantity: quantity
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $('#sendmoney_form').find('input:text').val('');

                        $("#seerror").hide();
                        $("#sesuccess").show();
                        $('#sesuccess').html('Success');
                    }
                    else if(dataResult.statusCode==201){
                        $("#btnsendmoney").removeAttr("disabled");

                        $("#sesuccess").hide();
                        $("#seerror").show();
                        $('#seerror').html('Something went wrong.');
                    }
                }
            });
        }
        else{
            alert('Please fill all the fields!');
        }
    });
    $('#btnlogin').on('click', function() {
        var email = $('#email').val();
        var ssn = $('#ssn').val();
        var password = $('#password').val();

        if(email!="" && password!="" ){
            $.ajax({
                url: "save.php",
                type: "POST",
                data: {
                    type: 2,
                    email: email,
                    ssn: ssn,
                    password: password
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        location.href = "portal/home.php";
                    }
                    else if(dataResult.statusCode==201){
                        $("#error").show();
                        $('#error').html('Invalid e-mail address, password or ssn');
                    }
                }
            });
        }
        else{
            alert('Please fill all the fields.');
        }
    });
});