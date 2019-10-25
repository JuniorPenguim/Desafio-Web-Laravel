@extends('adminlte::page')

@section('title', 'Listagem')

@section('content_header')
    <h1>Listagem de Usuários</h1>
@stop

@section('content')

    <table border= '1'>
    <tr>  
    <td> ID </td>
    <td> NOME </td>
    <td> EMPREGO </td>
    <td> EMAIL </td>
    <td> EDITAR </td>
    <td> EXCLUIR </td>
    </tr>

    @foreach($users as $users)
    
        <tr>
        <td> {{ $users->id }} &ensp; </td>
        <td> {{ $users->name }} &ensp; </td>
        <td> {{ $users->emprego }} &ensp; </td>
        <td> {{ $users->email }} &ensp; </td>
        <td> <a href= "{{ url ('/admin/editar/'.$users->id) }}" class= "btn btn-default">Editar</a> </td>
        <td> <a href= "{{ url ('/admin/excluir/'.$users->id) }}" class= "btn btn-default">Excluir</a> </td>
        </tr> 
    
    @endforeach
    

    </table>
    
@stop