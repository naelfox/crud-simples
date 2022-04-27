<?php include_once('templates/header.php');
date_default_timezone_set('America/Sao_Paulo');


?>

<main>

    <div class="container">
        <h1>Inserir</h1>

        <form action="templates/db/process.php" method="POST">
            <input type="hidden" name="type" value="insert">

            <div>
                <label for="name">Nome do cliente: </label>
                <input type="text" id="name" name="name" placeholder="nome" required>
            </div>

            <div>
                <label for="phone">Telefone do cliente: </label>
                <input type="text" id="phone" name="phone" placeholder="Telefone" required>
            </div>
            <div>
                <label for="name">Cliente desde: </label>
                <input type="date" id="date" name="date" placeholder="Data" value="<?php echo date("Y-m-d");?>" required>
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>

        </form>

        <button> <a href="index.php">Voltar</a></button>



    </div>




</main>




<?php include_once('templates/footer.php') ?>