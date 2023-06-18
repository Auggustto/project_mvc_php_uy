<div class="row container">
    <div class="col s12">
        <h3 class="light">Pagina Consulta.</h3>
    </div>

    <div class="div col s12">
        <!-- Utilizando o foreach para remover os dados duplicados do array -->
        <?php foreach($consulta as $registro): ?>
            <p>
                Nome: <?php echo $registro['nome'] ?> <br>
                E-mail: <?php echo $registro['email'] ?> <br>
                
            </p>
        <?php endforeach; ?>
    </div>

</div>