@extends('adminlte::page')

@section('title', 'Usuários')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Usuários</h3>
        </div>
        
        <div id="tbRelatorio">
            <div class="card-body">
                <button id="adicionar" type="button" class="btn btn-success mb-2"><i class="fas fa-user-plus"></i> Adicionar</button>
                <?php if(count($users) > 0) { ?> 
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nome</th>
                                <th>Cep</th>
                                <th>Logradouro</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Número</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->zip_code}}</td>
                                    <td>{{$user->public_place}}</td>
                                    <td>{{$user->district}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->state}}</td>
                                    <td>{{$user->number}}</td>
                                    <td class='text-center'>
                                        <a href="{{route('edit', $user->id)}}">
                                            <button type="button" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                                        </a>

                                        <a href="{{route('delete', $user->id)}}">
                                            <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                <?php } else { ?>
                    <div class="alert alert-primary alert-dismissible text-white">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="fas fa-exclamation-triangle"></i> Atenção!</h4>
                        Nenhum usuário foi cadastrado.
                      </div>
                <?php } ?>
            </div>
            @if($countUsers > 10)
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{$users->links()}}
                    </ul>
                </div>
            @endif
        </div>
  </div>
@endsection

@section('js')
    <script src="{{asset('assets/js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
@endsection