<?php include_once('templates/header.php');
if (empty($_GET)) {

    header("Location: index.php");
} ?>


<main>




    <div class="container">
        <h1>atualizar</h1>

 

        <form action="templates/db/process.php" method="POST">
            <input type="hidden" name="type" value="update">
            <input type="hidden" name="id" value="<?=$client['id']?>">
            <div>
                <label for="name">Nome do cliente: </label>
                <input type="text" id="name" name="name" placeholder="nome" value="<?=$client['name']?>">
            </div>

            <div>
                <label for="phone">Telefone do cliente: </label>
                <input type="text" id="phone" name="phone" placeholder="Telefone" value="<?=$client['phone']?>">
            </div>
            <div>
                <label for="name">Cliente desde: </label>
                <input type="date" id="date" name="date" placeholder="Data" value="<?=$client['since']?>">
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>

        </form>

        <button> <a href="index.php">Voltar</a></button>

    </div>




</main>




<?php include_once('templates/footer.php') ?>