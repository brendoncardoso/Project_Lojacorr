$(document).ready(function(){
    $('#cep').mask('99999-999');
    $('#number').mask('9999');

    function removeIsValid(){
        $('#cep').removeClass('is-valid');
        $("#public_place").removeClass('is-valid');
        $("#district").removeClass('is-valid');
        $("#city").removeClass('is-valid');
        $("#state").removeClass('is-valid');
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
})