<h1>Criar Categoria</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <label>Nome</label>
    <input type="text" name="nome" required>

    <label>Descrição</label>
    <textarea name="descricao"></textarea>

    <button type="submit">Salvar</button>
</form>
