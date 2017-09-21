<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>ORIENTACION VOCACIONAL | INSCRIPCIONES</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="ORIENTACION VOCACIONAL | INSCRIPCIONES | OFICINA CENTRAL DE ADMISION" name="description" />
        <meta content="OFICINA CENTRAL DE ADMISION" name="author" />
        
        {!! Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') !!}
        {!! Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') !!}
        {!! Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') !!}
        {!! Html::style('assets/global/css/components.min.css') !!}
        {!! Html::style('assets/global/css/plugins.min.css') !!}
        {!! Html::style('assets/pages/css/login-3.min.css') !!}
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" /> </head>

    <body class=" login">

        <div class="logo">
            <a href="">
                <img src="{!! asset('assets/pages/img/logo-big.jpg') !!}" alt="" /> </a>
        </div>

        <div class="content">
            @if ($errors->any())
                <div class="alert alert-danger display-show">
                    <button class="close" data-close="alert"></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Session::get('message') !!}

            {!! Form::open(['method' => 'POST', 'url' => 'registrar']) !!}
                <h3 class="form-title"><b>INSCRIPCIONES</b></h3>
                <div class="alert alert-success display-show">
                    <button class="close" data-close="alert"></button>
                    <span> TODOS LOS DATOS SON OBLIGATORIOS </span>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        {!! Form::text('paterno',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Apellido Paterno', 'maxlength' => '50']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        {!! Form::text('materno',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Apellido Materno', 'maxlength' => '50']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        {!! Form::text('nombres',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Nombres', 'maxlength' => '80']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-keyboard-o"></i>
                        {!! Form::text('dni',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'DNI', 'maxlength' => '8']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-level-up"></i>
                        {!! Form::text('edad',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Edad', 'maxlength' => '2']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-diamond"></i>
                        {!! Form::text('colegio',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Institucion Educativa', 'maxlength' => '200']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-phone"></i>
                        {!! Form::text('telefono',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Telefono o Celular', 'maxlength' => '12']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-at"></i>
                        {!! Form::email('email',null,['class' => 'form-control placeholder-no-fix', 'placeholder' => 'Correo Electronico', 'maxlength' => '70']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        {!! Form::label('DEBE SELECCIONAR LA FACULTAD QUE DESEA ASISTIR') !!}
                    </div>
                </div>
                @foreach($facultad as $row)
                    @if($row->activo == true)
                    <div class="form-group">
                        <div class="input-icon">
                            {!! Form::label($row->nombre.' '.$row->fecha) !!}
                            {!! Form::checkbox($row->sigla,'true',false,['id' => 'facultad']) !!}
                        </div>
                    </div>
                    @endif           
                @endforeach
                <div class="form-group">
                    <div class="input-icon">
                        {!! Form::submit('REGISTRAR',['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>

        {!! Html::script('assets/global/plugins/jquery.min.js') !!}
        {!! Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('assets/global/plugins/js.cookie.min.js') !!}
        {!! Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}
        {!! Html::script('assets/global/plugins/jquery.blockui.min.js') !!}
        {!! Html::script('assets/global/scripts/app.min.js') !!}
    </body>

</html>