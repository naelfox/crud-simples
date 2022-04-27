<?php include_once('templates/header.php');

if(empty($_GET)){

    header("Location: index.php");
}

?>

<main>




<div class="container">
<h1>Ver</h1>




<ul>
    <li>Identificação do cliente: <?=$id?></li>
    <li>Nome do cliente: <?=$client['name']?></li>
    <li>Cliente desde de: <?=date("d/m/Y", strtotime($client['since'])) ?></li>
    <li>Telefone para contato: <?=$client['phone']?></li>
</ul>


<button> <a href="index.php">Voltar</a></button>




</div>




</main>




<?php include_once('templates/footer.php') ?>