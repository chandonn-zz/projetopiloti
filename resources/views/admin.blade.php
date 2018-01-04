@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painel de Administrador</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem vindo Adminstrador!
                    <div>
                        <h4>Lista de usuários</h4>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Nome</th>
                              <th scope="col">Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Nome 1</th>
                              <td>Email</td>
                            </tr>
                            <tr>
                              <th scope="row">Nome 2</th>
                              <td>Email</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
