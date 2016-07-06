<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Qualittá</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">



    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

    @include('base/header')
    @include('base/menu')
    <div class="col-lg-9 col-sm-9 col-md-9">
        @yield('content')
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script>
        $('#entrada').mask('00:00');
        $('#saida').mask('00:00');
        $('#hora').mask('00:00');
        $('#data').mask('00/00/0000');
        $('#cnpj').mask('00.000.000/0000-00');
        $('#telefone').mask('(00) 0000-0000');
    </script>
    <script src="{{ asset('js/jquery.maskMoney.min.js') }}"></script>
    <script>
        $('#valor').maskMoney({thousands:'.',decimal:','});
    </script>
    <script>
    $('select[name=estado_id]').change(function () {
            var id = $(this).val();
            $.ajax({
                url: "/getCidades/"+id+"/",
                type: "get",
                success: function (cidades) {
                    $('select[name=cidade_id]').empty();
                    $.each(cidades, function (key, value) {
                        $('select[name=cidade_id]').append('<option value=' + value.codigo_cidade + '>' + value.nome + '</option>');
                    });
                },

                error: function(data){
                    alert('Erro!');
                }
            });
        });
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
