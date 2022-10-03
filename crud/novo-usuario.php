<div class="card text-bg-dark">
    <div class="card-header">
        <h1>Novo Usuario</h1>
    </div>
    <div class="card-body">
        <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="cadastar">
            <div class="mb-3">
                <input type="text" name="nome" class="form-control" placeholder="Nome Completo" aria-label="Nome Completo">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email@exemplo.com" aria-label="Email">
            </div>
            <div class="mb-3">
                <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Senha">
            </div>
            <div class="mb-3">
                <input type="date" name="data_nascimento" class="form-control" placeholder="Data de Nascimento">
            </div>
            <div class="modal-footer mb-3">
                <button type="submit" class="btn btn-light">Enviar</button>
            </div>
        </form>
    </div>
</div>