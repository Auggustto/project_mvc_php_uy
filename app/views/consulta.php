<div class="row container">
    <div class="col s12">
        <h3 class="light">Consulta.</h3>
    </div>

    <div class="div col s12">
        <table>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Editar</th>
            </tr>

            <!-- Utilizando o foreach para remover os dados duplicados do array -->
            <?php foreach ($consulta as $registro) : ?>
                <tr>
                    <td><?php echo $registro['nome'] ?></td>
                    <td><?php echo $registro['email'] ?></td>
                    
                    <!-- Botão de editar, vamos pegar o id que desejamos editrar os dados -->
                    <td>
                        <a href="?router=Site/editar/&id=<?php echo $registro['id']?>">Editar</a> |
                        <a href="?router=Site/deletar/&id=<?php echo $registro['id']?>">Deletar</a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>