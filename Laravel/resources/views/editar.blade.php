@extends('adminlte::page')

@section('title', 'Cadastrar')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    
    <h1> Editar Usuário </h1>
    {!! Form::open(['action' => ['CadastrarController@update', $usuario->id], 'method' => 'POST'])  !!}
        <div class="form-group">
            {{Form::label('nome', 'Nome')}}
            {{Form::text('nome', $usuario->name, array('disabled'),['class' => 'form-control', 'placeholder' => 'Nome'])}}            
        </div>
        <div class="form-group">
            {{Form::label('emprego', 'Emprego')}}
            {{Form::text('emprego', $usuario->emprego,['class' => 'form-control', 'placeholder' => 'Emprego'])}}            
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-mail')}}
            {{Form::email('email', $usuario->email, array('disabled'),['class' => 'form-control', 'placeholder' => 'E-mail'])}}            
        </div>
        <div class="form-group">
            {{Form::label('senha', 'Senha')}}
            {{Form::text('senha', $usuario->password,['class' => 'form-control', 'placeholder' => 'Senha'])}}            
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Editar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@stop