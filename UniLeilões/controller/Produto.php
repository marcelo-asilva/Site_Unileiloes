<?php
require_once '../DAO/bd_leilao.php';

class Produto {

/*
 * Copia a imagem para a pasta e retorna o caminho p/ salvar no banco
 * carrega_imagem
 * entrada:
 */
    public function carrega_imagem($file,$nome) {
        $texto = "";
        $nome = $nome;
        $_FILES=$file;
       
// Pasta onde o arquivo vai ser salvo
        $_UP['pasta'] = utf8_decode('D:\\Site_Unileiloes\\UniLeilões\\Template\\images\\Produtos\\');

// Tamanho mÃ¡ximo do arquivo (em Bytes)
        $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb
// Array com as extensÃµes permitidas
        $_UP['extensoes'] = array('jpeg', 'jpg', 'png');

// Renomeia o arquivo? (Se true, o arquivo serÃ¡ salvo como .jpg e um nome Ãºnico)
        $_UP['renomeia'] = true;

// Array com os tipos de erros de upload do PHP
        $_UP['erros'][0] = 'NÃ£o houve erro';
        $_UP['erros'][1] = 'O arquivo no upload Ã© maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'NÃ£o foi feito o upload do arquivo';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
        if ($_FILES['error'] != 0) {
            die("NÃ£o foi possÃ­vel fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['error']]);
            exit; // Para a execuÃ§Ã£o do script
        }

// Caso script chegue a esse ponto, nÃ£o houve erro com o upload e o PHP pode continuar
// Faz a verificaÃ§Ã£o da extensÃ£o do arquivo

        $extensao = strtolower(end(explode('.', $_FILES['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            $texto = "Por favor, envie arquivos com as seguintes extensÃµes: doc, docx ou pdf";
        }

// Faz a verificaÃ§Ã£o do tamanho do arquivo
        else if ($_UP['tamanho'] < $_FILES['size']) {
            $texto = "O arquivo enviado Ã© muito grande, envie arquivos de atÃ© 2Mb.";
        }

// O arquivo passou em todas as verificaÃ§Ãµes, hora de tentar movÃª-lo para a pasta
        else {
// Primeiro verifica se deve trocar o nome do arquivo
            if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensÃ£o original
                $nome_final = $nome . ' - ' . time() . '.' . $extensao;
            } else {
// MantÃ©m o nome original do arquivo
                $nome_final = $_FILES['name'];
            }

// Depois verifica se Ã© possÃ­vel mover o arquivo para a pasta escolhida
            if (move_uploaded_file($_FILES['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
                $texto = "Seu curriculo foi adicionado a nossa base de dados com sucesso!";
                return $nome;
//echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
            } //else {
// NÃ£o foi possÃ­vel fazer o upload, provavelmente a pasta estÃ¡ incorreta
//echo "NÃ£o foi possÃ­vel enviar o arquivo, tente novamente";
//}
            
        }
        
      return false;  
}

public function salvar_produto($idCliente,$nome,$descricao,$id_categoria,$id_cidade,$id_estado,$imagem1,$imagem2,$imagem3){
  $bd_leilao = new bd_leilao();

  $sql="Insert into produto values("."NULL".",".$idCliente.",'".$nome."','".$descricao."',".$id_categoria.",".$id_cidade.",".$id_estado.",'".$imagem1."','".$imagem2."','".$imagem3."')";
  $bd_leilao->execute($sql);       
    
}

}
?>
