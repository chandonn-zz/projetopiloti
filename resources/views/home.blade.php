@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painel de Usuário</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div>
                        <h3>Bem vindo!</h3>
                        <div>
                            Aqui é a área para usuários comuns
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
