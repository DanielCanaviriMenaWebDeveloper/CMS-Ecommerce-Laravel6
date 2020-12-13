@extends('connect.master')

@section('title', 'Login')

@section('content')

    <div class="box box-login shadow">
        
        {!! Form::open(['url' => '/login']) !!}

            {{-- Campo Correo Electrónico --}}
            {!! Form::label('email', 'Correo electrónico')!!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text" id="basic-addon1">
                        <i class="far fa-envelope-open"></i>
                    </div>
                </div>
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese correo electrónico']) !!}
            </div>
            {{-- Campo Password --}}
            {!! Form::label('password', 'Contraseña', ['class' => 'mtop16'])!!}
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text" id="basic-addon1">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese contraseña']) !!}
            </div>

            {!! Form::submit('Ingresar' , ['class' => 'btn btn-success mtop16']) !!}

        {!! Form::close() !!}

    </div>

@stop

