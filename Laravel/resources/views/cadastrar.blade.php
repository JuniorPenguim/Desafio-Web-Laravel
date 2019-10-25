@extends('adminlte::page')

@section('title', 'Cadastrar')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    
    <h1> Cadastrar Usuário </h1>
    {!! Form::open(['action' => 'CadastrarController@store', 'method' => 'POST'])  !!}
        <div class="form-group">
            {{Form::label('nome', 'Nome')}}
            {{Form::text('nome', '',['class' => 'form-control', 'placeholder' => 'Nome'])}}            
        </div>
        <div class="form-group">
            {{Form::label('emprego', 'Emprego')}}
            {{Form::text('emprego', '',['class' => 'form-control', 'placeholder' => 'Emprego'])}}            
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-mail')}}
            {{Form::email('email', '',['class' => 'form-control', 'placeholder' => 'E-mail'])}}            
        </div>
        <div class="form-group">
            {{Form::label('senha', 'Senha')}}
            {{Form::text('senha', '',['class' => 'form-control', 'placeholder' => 'Senha'])}}            
        </div>
        {{Form::submit('Cadastrar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@stop