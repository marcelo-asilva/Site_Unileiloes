<?php

class Cliente{
    
      /**
     * setcadastracliente
     * cadastra os clientes no banco
     * @return type Array
     */
    public function setcadastracliente($nome,$cpf,$email,$telefone,$rua,$bairro,$numero,$cep,$login,$senha)
    {   
        $id = 'null';
        $bdLeilao = new bd_leilao();
        $sql = "insert into cliente values(".id.",".$nome.",".$cpf.",".$email.",".$telefone.",".$rua.",".$bairro.",".$numero.",".$cep.",".$login.",".$senha.")";
        $bdLeilao->execute($sql);
    }   
}
?>
