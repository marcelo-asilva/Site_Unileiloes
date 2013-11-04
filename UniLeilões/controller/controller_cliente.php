<?php
require_once '../../controller/ClassCliente.php';

$cliente = new Cliente();
extract($_POST);

$cliente->setcadastracliente($nome, $cpf, $email, $telefone, $rua, $bairro, $numero, $cep, $login, $senha);

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