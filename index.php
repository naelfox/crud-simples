<?php include_once('templates/header.php') ?>

<main>


    <div id="home">
        <div class="content"></div>

        <h1>Clientes</h1>


        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Desde</td>
                <td>Telefone</td>
                <td colspan="3" class="actions">Ações</td>

            </tr>

            <?php foreach ($clients as $client) : ?>
                <tr>
                    <td><?= $client['id'] ?></td>
                    <td><?= $client['name'] ?></td>
                    <td><?=date("d/m/Y", strtotime($client['since'])) ?></td>
                    <td><?= $client['phone'] ?></td>
                    <td><a href="show.php?id=<?=$client['id']?>">Ver</a></td>
                    <td><a href="update.php?id=<?=$client['id']?>">Editar</a></td>
                    <td><a href="delete.php?id=<?=$client['id']?>">Deletar</a></td>
                </tr>

            <?php endforeach; ?>

        </table>



    </div>




</main>




<?php include_once('templates/footer.php') ?>