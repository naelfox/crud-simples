<?php
include_once('connection.php');

//acessando o post para enviar os dados para banco

$data = $_POST;



if(!empty($data)){
    //inserindo dados
    if($data['type'] === 'insert'){
        $name = $data['name'];
        $phone = $data['phone'];
        $date = $data['date'];

        $query = "INSERT INTO clients (name, phone, since) VALUES (:name, :phone, :date)";
        $statement = $conn->prepare($query);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":date", $date);

        $statement->execute();

    }
    //atualizar os dados
    else if($data['type'] === 'update'){
        $name = $data['name'];
        $phone = $data['phone'];
        $date = $data['date'];
        $id = $data['id'];

        $query = "UPDATE clients SET name = :name, phone = :phone, since = :date WHERE id = :id";

        $statement = $conn->prepare($query);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":phone", $phone);
        $statement->bindParam(":date", $date);
        $statement->bindParam(":id", $id);

        $statement->execute();

        

    }

    else if ($data['type'] === 'delete'){
        $id = $data['id'];

        $query = "DELETE FROM clients WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }




    header("Location: ../../index.php");
}







//acessando o get para receber os dados do banco
$id;

if(!empty($_GET)){
    $id = $_GET['id'];
}

//retornando um cliente específico conforme passado pelo GET
if(!empty($id)){
    $query = "SELECT * FROM clients WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->bindParam(":id", $id);
    $statement->execute();

    $client = $statement->fetch();

}else{

//ver todos os cliente

$query = "SELECT * FROM clients";
$clients = [];
$statement = $conn->prepare($query);
$statement->execute();
$clients = $statement->fetchAll(PDO::FETCH_ASSOC);

}







