@extends('adminlte::page')

@section('title', 'Usuários')

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Lista de Usuários</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
        </div>
  </div>
@endsection