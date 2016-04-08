<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Express Bus Packages v1.0 | Login | by ArielMax</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('includes.styles') {{-- incluir archivos con @include --}}
        <?php echo HTML::style('css/login.css'); ?> {{-- convirtiendo de style a php para laravel --}}
	     </head>    
         <body>
        <div id="container">
            <div id="logo">
                <img src="{{ asset('img/logo.png') }}" alt=""> {{-- funcion asset con la direccion de la imagen para subirla --}}
            </div>
            <div id="loginbox" class="wrapper">          

                <form id="loginform" action="login" method="post" > {{-- action es la ruta que va a ser tratada con el controlador que se le defina y pos el metodo con el qe se tratara la ruta --}}
    				
                    @if (Session::has('login_errors')) {{-- cuando da el error se guarda en session una variable con el nombre que se le asigne en el controlador --}}
                    <p style='color:#FB1D1D' >El nombre de usuario o la contraseña no son correctos.</p>
                    @else
                    <p>Introduzca usuario y contraseña para continuar.</p>
                    @endif
                                  
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="fa fa-user"></i></i></span><input class="form-control" id="username" placeholder="Usuario" type="text" name="username"> {{-- name es la variable que se envian a la ruta --}}
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" id="password" placeholder="Contraseña" type="password" name="password"> {{-- name es la variable que se envian a la ruta --}}
                    </div>
                    <div class="form-actions clearfix">                      
 <input class="btn btn-block btn-primary btn-default" value="Acceder" type="submit">
                    </div>
                    <div class="footer-login">
                        <div class="pull-left text">
                                <div id="loading"><img src="{{ asset('img/loading-icons/loader.gif')}}"></div>
                        </div>
    
                    </div>
                </form>
                </div>
                <span style="color:#FFF">@include('includes.footer') {{-- incluyendo el footer --}}</span>
        </div>

        <?php echo HTML::script('js/jquery.js'); ?> {{-- convirtiendo de script a php para laravel --}}
        <?php echo HTML::script('js/jquery-ui.js'); ?>
        <?php echo HTML::script('js/login.js'); ?>
</body>
</html>