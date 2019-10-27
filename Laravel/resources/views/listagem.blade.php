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
        <td> <a href= "#" class= "btn btn-danger" data-catid={{$users->id}} data-toggle="modal" data-target="#excluir">Excluir</a> </td>
        </tr> 
    
    @endforeach
    

    </table>
    

    

    <div class="modal modal-danger fade" id="excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Confirmação de Exclusão</h4>
                </div>
                <form action="{{route('cadastrar.destroy','test')}}" method="post">
      		            {{method_field('delete')}}
      		            {{csrf_field()}}
	                <div class="modal-body">
				        <p class="text-center">
					    Deseja confirmar a exclusão do usuário??
				        </p>
	      		        <input type="hidden" name="usuario_id" id="users_id" value="">

	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-success" data-dismiss="modal">Não, Cancelar</button>
	                    <button type="submit" class="btn btn-warning">Sim, Confirmar</button>
	                </div>
                </form>
            </div>
        </div>
    </div>


    <script src="{{asset('js/app.js')}}"></script>
    
    <script>
  
    $('#excluir').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var users_id = button.data('catid') 
        var modal = $(this)
        modal.find('.modal-body #users_id').val(users_id);
    })
    </script>



@stop