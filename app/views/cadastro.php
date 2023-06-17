<div class="row container">
    <div class="col s12">
        <h3 class="light">Pagina Cadastro.</h3>
    </div>

    <!-- Criando formulario -->
    <div class="cols 12">
        <form action="?router=Site/cadastro/" method="post">
            <div class="input-field col s12 m6">
                <iput type="text" name="nome" id="nome" required></iput>
                <label for="nome">Digite seu nome</label>
            </div>

            <div class="input-field col s12 m6">
                <iput type="email" name="email" id="email" required></iput>
                <label for="email">Digite seu e-mail</label>
            </div>

            <div class="input-field col s12 m6">
                <iput type="tel" name="tel" id="tel" required></iput>
                <label for="tel">Digite seu telefone</label>
            </div>

            <div class="input-field col s12 m6">
                <input type="submit" value="enviar" class="btn-small">
                <input type="reset" value="limpar" class="btn-small red">
            </div>
        </form>
    </div>

</div>