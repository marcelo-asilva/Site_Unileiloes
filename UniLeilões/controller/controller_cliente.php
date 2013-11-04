<?php
require_once 'ClassCliente.php';

extract($_POST);

$cliente = new Cliente();
$cliente->setcadastracliente($nome, $cpf, $email, $telefone, $estado, $cidade, $rua, $bairro, $numero, $cep, $login, $senha);

//echo $nome;
//die();
//switch ($acao) {
//    case "salvar":
//
//        break;
//     case "update":
//
//        break;
//
//    default:
//        break;
//}
?>
<script>
    document.location = "view/index/index.php";
</script>