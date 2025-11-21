<h1>Editar Categoria</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome</label>
    <input type="text" name="nome" value="{{ $category->nome }}" required>

    <label>Descrição</label>
    <textarea name="descricao">{{ $category->descricao }}</textarea>

    <button type="submit">Atualizar</button>
</form>
