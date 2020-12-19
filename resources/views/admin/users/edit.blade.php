
@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edição de Usuários</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="col-sm-12">
                    @if(session('warning'))
                        <div class="box-body">
                            <div class="alert alert-danger alert-dismissible text-white">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="fas fa-exclamation-triangle"></i> Atenção!</h4>
                                {{session('warning')}}
                            </div>
                        </div>
                    @elseif(session('success'))
                        <div class="box-body">
                            <div class="alert alert-success alert-dismissible text-white">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="fas fa-check"></i> Sucesso!</h4>
                                {{session('success')}}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-10">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulário</h3>
                        </div>
                        
                        <form action="" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nome*</label>
                                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Nome Completo" value="{{old('name', $user->name) }}">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Email*</label>
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="email@email.com" value="{{old('email', $user->email) }}" {{$idLogged != $user->id ? 'disabled' : ''}}>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class='' for="">CEP*</label>
                                            <span class='gif_loading'>
                                                <img src="{{asset('assets/img/spinner_gif.gif')}}" alt="" width="30" height="30"> 
                                                <i class='cep_loading'>Carregando...</i>
                                            </span>
                                            <span class='gif_error'>
                                                <i class="far fa-frown"></i> 
                                                <i class='cep_invalid'>&nbsp; CEP Inválido.</i>
                                            </span>

                                            <input type="text" name="zip_code" class="form-control {{ $errors->has('zip_code') ? 'is-invalid' : '' }}" id="cep" placeholder="XXXXX-XXX" value="{{{old('zip_code', $user->zip_code) }}}">
                                            @if($errors->has('zip_code'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('zip_code') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <label for="">Logradouro*</label>
                                            <input type="text" name="public_place" class="form-control {{ $errors->has('public_place') ? 'is-invalid' : '' }}" id="public_place" placeholder="Logradouro" value="{{old('public_place', $user->public_place) }}">
                                            @if($errors->has('public_place'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('public_place') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Bairro*</label>
                                            <input type="text" name="district" class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" id="district" placeholder="Bairro" value="{{old('district', $user->district) }}">
                                            @if($errors->has('district'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('district') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Cidade*</label>
                                            <input type="text" name="city" class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" id="city" placeholder="Cidade" value="{{old('city', $user->city) }}">
                                            @if($errors->has('city'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Estado*</label>
                                            <select name="state" class='form-control {{ $errors->has('state') ? 'is-invalid' : '' }}' id="state">
                                                <option value="" {{$user->state  == '' ? 'selected' : ''}}><< Selecione >></option>
                                                @foreach($states as $state_table)
                                                    <option value="{{$state_table->uf}}" {{old('state', $user->state) == $state_table->uf ? 'selected' : ''}}>{{$state_table->name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('state'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Número*</label>
                                            <input type="text" name="number" class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" id="number" placeholder="Número" value="{{old('number', $user->number) }}">
                                            @if($errors->has('number'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('number') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                @if($idLogged == $user->id)
                                    <div class="form-group">
                                        <label for="">Nova Senha</label>
                                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" placeholder="****" value="">
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirmar Senha</label>
                                        <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="password_confirmation" placeholder="****" value="">
                                        @if($errors->has('password_confirmation'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                
                            </div>
                            <div class="card-footer">
                                <div class="" style="float:right">
                                    <button id="voltar" type="button" class="btn btn-primary"><i class="fas fa-undo"></i> Voltar</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('assets/js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
@endsection