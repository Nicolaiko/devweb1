<?php
  function verifica_campo($texto){
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    return $texto;
  }

      $nome = "";
      $email = "";
      $data = "";
      $pass = "";
      $repass = "";
      $upload = "";

  $erro = false;


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["nome"])){
      $erro_nome = "Campo obrigatório.";
      $erro = true;
    }
    else{
      $nome = verifica_campo($_POST["nome"]);
    }
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["email"])){
      $erro_email = "Campo obrigatório.";
      $erro = true;
    }
    else{
      $email = verifica_campo($_POST["email"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["data"])){
      $erro_data = "Campo obrigatório.";
      $erro = true;
    }
    else{
      $data = verifica_campo($_POST["data"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["pass"])){
      $erro_pass = "Campo obrigatório.";
      $erro = true;
    }
    else{
      $pass = verifica_campo($_POST["pass"]);
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["repass"])){
      $erro_repass = "Campo obrigatório.";
      $erro = true;
    }
    else{
      $repass = verifica_campo($_POST["repass"]);
    }
  }

  if ($_POST["password"] != $_POST["repass"]) {
    $erro = true;
    $notequalpass = "Senha ou Confirmação diferentes.";
  }

  if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == true){
    $erro_email = "Email inválido.";
    $erro = true;
  }

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_tempname = $_FILES['file']['tmp_name'];
    $file_destination = "images/".$file_name;
    move_uploaded_file ($file_tempname, $file_destination);

  if ($_FILES['file']['size'] > 1000000) {
    $erro_upload = "O arquivo é muito grande";
    $erro = true;
  }

  if($file_type != "image/jpg" && $file_type != "image/png") {
    $erro_upload = "Somente Arquivos com a extensão .jpg ou .png";
    $erro = true;
  }
?>
