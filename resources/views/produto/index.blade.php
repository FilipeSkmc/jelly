@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href='{{ route('vendedor.create') }}'>Adicionar</a>
                    <table class="table">
                        <tbody>
                            <th>Nome</th>
                            <th>Email</th>
                            <th colspan='2'>Ações</th>
                            
                        </tbody>
                        @foreach ($vendedores as $vendedor)
                            <tr>
                                <td>{{ $vendedor->nome }}</td>
                                <td>{{ $vendedor->email }}</td>
                                <td><a href="{{ route('vendedor.edit', ['vendedor' => $vendedor->id]) }}">editar</a></td>
                                
                                    <form method='post' id='form_{{ $vendedor->id }}' action='{{ route('vendedor.destroy', ['vendedor' => $vendedor->id]) }}'>
                                        @csrf
                                        @method('DELETE')
                                        <td><a href='#' onclick='submit({{ $vendedor->id }})'>excluir</a></td>
                                    <form>
                                
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
