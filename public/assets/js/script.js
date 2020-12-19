$(document).ready(function(){
    $('#cep').mask('99999-999');
    $('#number').mask('9999');
    $('#input_cep').mask('99999-999');
    $('#input_number').mask('9999');

    function removeIsValid(){
        $('#cep').removeClass('is-valid');
        $("#public_place").removeClass('is-valid');
        $("#district").removeClass('is-valid');
        $("#city").removeClass('is-valid');
        $("#state").removeClass('is-valid');
    }

    function removeAllFilter(){
        $(".name").hide();
        $(".email").hide();
        $(".zip_code").hide();
        $(".public_place").hide();
        $(".district").hide();
        $(".city").hide();
        $(".state").hide();
        $(".number").hide();
    }

    function blockName(){
        $(".name").show();
        $(".email").hide();
        $(".zip_code").hide();
        $(".public_place").hide();
        $(".district").hide();
        $(".city").hide();
        $(".state").hide();
        $(".number").hide();
    }

    function blockEmail(){
        $(".name").hide();
        $(".email").show();
        $(".zip_code").hide();
        $(".public_place").hide();
        $(".district").hide();
        $(".city").hide();
        $(".state").hide();
        $(".number").hide();
    }

    function blockZipCode(){
        $(".name").hide();
        $(".email").hide();
        $(".zip_code").show();
        $(".public_place").hide();
        $(".district").hide();
        $(".city").hide();
        $(".state").hide();
        $(".number").hide();
    }

    function blockPublicPlace(){
        $(".name").hide();
        $(".email").hide();
        $(".zip_code").hide();
        $(".public_place").show();
        $(".district").hide();
        $(".city").hide();
        $(".state").hide();
        $(".number").hide();
    }

    function blockDistrict(){
        $(".name").hide();
        $(".email").hide();
        $(".zip_code").hide();
        $(".public_place").hide();
        $(".district").show();
        $(".city").hide();
        $(".state").hide();
        $(".number").hide();
    }

    function blockCity(){
        $(".name").hide();
        $(".email").hide();
        $(".zip_code").hide();
        $(".public_place").hide();
        $(".district").hide();
        $(".city").show();
        $(".state").hide();
        $(".number").hide();
    }

    function blockState(){
        $(".name").hide();
        $(".email").hide();
        $(".zip_code").hide();
        $(".public_place").hide();
        $(".district").hide();
        $(".city").hide();
        $(".state").show();
        $(".number").hide();
    }

    function blockNumber(){
        $(".name").hide();
        $(".email").hide();
        $(".zip_code").hide();
        $(".public_place").hide();
        $(".district").hide();
        $(".city").hide();
        $(".state").hide();
        $(".number").show();
    }

    function removeValInputs(){
        $('#input_name').val('');
        $('#input_email').val('');
        $('#input_cep').val('');
        $('#input_public_place').val('');
        $('#input_district').val('');
        $('#input_city').val('');
        $('#input_number').val('');
        $(".select_state").val('');
    }

    $('#cep').keyup(function(e){
        var countCaracteres = $(this).val().length;
        var cep = $(this).val();
        if(countCaracteres == 9){
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados, textStatus) {
                if (!("erro" in dados)) {
                    $('.gif_loading').show();
                    $('.gif_error').hide();
                    setTimeout(function(){
                        $('#cep').addClass('is-valid');;
                        $("#public_place").val(dados.logradouro).addClass('is-valid');
                        $("#district").val(dados.bairro).addClass('is-valid');
                        $("#city").val(dados.localidade).addClass('is-valid');
                        $("#state").val(dados.uf).addClass('is-valid');
                        $('.gif_loading').hide();
                        $('.gif_error').hide();
                    }, 
                    500);
                }else {
                    $('.gif_loading').show();
                    setTimeout(function(){
                        $('.gif_error').show();
                        $('.gif_loading').hide();
                        $('#cep').removeClass('is-valid');
                        $("#public_place").removeClass('is-valid');
                        $("#district").removeClass('is-valid');
                        $("#city").removeClass('is-valid');
                        $("#state").removeClass('is-valid');
                    }, 
                    500);
                }
            });
        }else{
            $('.gif_error').hide();
            $('.gif_loading').hide();
            $('#cep').removeClass('is-valid');
            $("#public_place").val('').removeClass('is-valid');
            $("#district").val('').removeClass('is-valid');
            $("#city").val('').removeClass('is-valid');
            $("#state").val('').removeClass('is-valid');
        }
    });

    $('#public_place').keyup(function(){
        removeIsValid();
    });

    $('#district').keyup(function(){
        removeIsValid();
    });

    $('#city').keyup(function(){
        removeIsValid();
    });

    $('#state').change(function(){
        removeIsValid();
    });

    $("#voltar").click(function(){
        var base = window.location.origin;
        window.location.href = base+'/painel/users';
    });

    $("#adicionar").click(function(){
        var base = window.location.origin;
        window.location.href = base+'/painel/cadaster/user';
    });

    $('#filter').change(function(){
        var val = $(this).val();

        if(val == ''){
            removeAllFilter();
            removeValInputs();
        }else if(val == 'name'){
            blockName();
            removeValInputs();
        }else if(val == 'email'){
            blockEmail();
            removeValInputs();
        }else if(val == 'zip_code'){
            blockZipCode();
            removeValInputs();
        }else if(val == 'public_place'){
            blockPublicPlace();
            removeValInputs();
        }else if(val == 'district'){
            blockDistrict();
            removeValInputs();
        }else if(val == 'city'){
            blockCity();
            removeValInputs();
        }else if(val == 'state'){
            blockState();
            removeValInputs();
        }else if(val == 'number'){
            blockNumber();
            removeValInputs();
        }
    });
})