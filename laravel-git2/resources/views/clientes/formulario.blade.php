@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Informe abaixo as informações do cliente
                <a class="float-right" href="{{url('clientes')}}"> Listagem de Cliente </a>
                </div>

                <div class="card-body">

                	@if(Session::has('mensagem_sucesso'))
                	<div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}} </div>
                	@endif


                    {{ Form::open(['url' => 'clientes/salvar']) }}

                 {{ Form::label('nome', 'Nome') }}
                  {{ Form::input('text', 'nome', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) }}


                  {{ Form::label('endereco', 'Endereço') }}
                  {{ Form::input('text', 'endereco', '', ['class' => 'form-control', '', 'placeholder' => 'Endereço']) }}


                  {{ Form::label('numero', 'Número') }}
                  {{ Form::input('text', 'numero', '', ['class' => 'form-control', '', 'placeholder' => 'Número']) }}

                  {{ Form::submit('Salvar', ['class'=> 'btn btn-primary']) }}



                   	
                    {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection