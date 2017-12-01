<?php
  require("check_form.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="check_form.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="page-header">Teste Formulário PHP</h1>

      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if (!$erro): ?>
          <div class="alert alert-success">
            Dados recebidos com sucesso:
            <ul>
              <li><strong>Nome</strong>: <?php echo $nome ?>;</li>
              <li><strong>Email</strong>: <?php echo $email ?>;</li>
              <li><strong>Data de Nascimento</strong>: <?php echo $data ?>;</li>
              <li><strong>Senha</strong>: <?php echo $pass ?>;</li>
              <li><strong>Confirme sua Senha</strong>: <?php echo $repass ?>;</li>
              <li><strong>Imagem do Usuário</strong>: <?php echo $upload ?>;</li>
              <?php // limpa o formulário.
                $nome = "";
                $email = "";
                $data = "";
                $pass = "";
                $repass = "";
                $upload = "";
              ?>
            </ul>
          </div>
        <?php else: ?>
          <div class="alert alert-danger">
            Erros no formulário.
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <form enctype="multipart/form-data" id="form-test" class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


                <div class="form-group <?php if(!empty($erro_nome)){echo "has-error";}?>">
                  <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                      <input required type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                    <div id="erro-nome">
                      <?php if (!empty($erro_nome)): ?>
                        <span class="help-block"><?php echo $erro_nome ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="form-group <?php if(!empty($erro_email)){echo "has-error";} ?>">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input required type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
                      <div id"erro-email">
                        <?php if (!empty($erro_email)): ?>
                          <span class="help-block"><?php echo $erro_email ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                </div>

                <div class="form-group <?php if(!empty($erro_data)){echo "has-error";} ?>">
                  <label for="inputData" class="col-sm-2 control-label">Data de Nascimento</label>
                    <div class="col-sm-10">
                      <input required type="date" class="form-control" name="data" placeholder="Data de Nascimento" value="<?php echo $data; ?>">
                      <div id"erro-data">
                        <?php if (!empty($erro_data)): ?>
                          <span class="help-block"><?php echo $erro_data ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                </div>

                <div class="form-group <?php if(!empty($erro_pass)){echo "has-error";} ?>">
                  <label for="inputPass" class="col-sm-2 control-label">Senha</label>
                    <div class="col-sm-10">
                      <input required type="password" class="form-control" name="pass" placeholder="Senha" value="<?php echo $pass; ?>">
                      <div id"erro-pass">
                        <?php if (!empty($erro_pass)): ?>
                          <span class="help-block"><?php echo $erro_pass ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                </div>

                <div class="form-group <?php if(!empty($erro_repass) or !empty($notequalpass)){echo "has-error";} ?>">
                  <label for="inputRepass" class="col-sm-2 control-label">Confirmação de Senha</label>
                    <div class="col-sm-10">
                      <input required type="password" class="form-control" name="repass" placeholder="Confirmação de Senha" value="<?php echo $repass; ?>">
                      <div id"erro-repass">
                        <?php if (!empty($notequalpass)): ?>
                          <span class="help-block"><?php echo $notequalpass ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                </div>

                <div class="form-group <?php if(!empty($erro_upload)){echo "has-error";} ?>">
                  <label for="inputUpload" class="col-sm-2 control-label">Imagem de usuário</label>
                    <div class="col-sm-10">
                      <input required type="file" class="form-control" name="file" placeholder="Imagem de usuário" value="<?php echo $upload; ?>">
                      <div id"erro-upload">
                        <?php if (!empty($erro_upload)): ?>
                          <span class="help-block"><?php echo $erro_upload ?></span>
                        <?php endif; ?>
                      </div>
                    </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Enviar</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
        </body>
        </html>
