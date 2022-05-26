@if(isset($vendedor->id))
    <form method='post' action='{{ route('vendedor.update', ['vendedor' => $vendedor->id]) }}'>
        @csrf
        @method('PUT')
@else
    <form method='post' action='{{ route('vendedor.store') }}'>
        @csrf

@endif
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name='nome' value='{{ $vendedor->nome ?? '' }}'>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name='email' value='{{ $vendedor->email ?? '' }}'>
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>