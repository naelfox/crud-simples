<?php include_once('templates/header.php');
if (empty($_GET)) {

    header("Location: index.php");
} ?>

<main>




    <div class="container">
        <h1>Deletar</h1>

        <h2>Deseja realmente deletar <?= $client['name'] ?></h2>



        <form action="templates/db/process.php" method="POST">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?= $client['id'] ?>">
            <button type="submit">Sim</button>
        </form>

        <button> <a href="index.php">Voltar</a></button>




    </div>




</main>




<?php include_once('templates/footer.php') ?>