@extends('adminlte::page')

@section('content')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>
                    <?= !empty($countUsers) ? $countUsers : 0; ?>
                </h3>
                <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
                <i style='font-size: 50px;' class="fas fa-user-plus"></i>
            </div>
            <a href="{{route('users')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
@endsection