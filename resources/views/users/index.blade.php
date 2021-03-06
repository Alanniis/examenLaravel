<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Styles -->
       
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">

                    <div class="card border-0 shadow col-sm-8">
                        <div class="card-body">

                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                - {{$error}} <br>
                                @endforeach

                            </div>
                            @endif


                                <form action="" method="GET">
                                    <div class="form-row">

                                        <h1>Login</h1>
                                        <p><strong>Ingrese sus datos</strong></p>
                                        <div class="col-sm-4">
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}"/>

                                        </div>
                                        <div class="col-sm-3">
                                            <input type="password" name="password" class="form-control" placeholder="Contraseña"/>

                                        </div>
                                        <div class="col-auto">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>

                                    </div>

                                </form>
                                <a href="/">¿No tienes una cuenta? Registrate</a>
                    </div>

                    </div>
                    

                </div>

            </div>

        </div>
       
    </body>
</html>
