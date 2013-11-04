<?php

class Cliente{
    
      /**
     * setcadastracliente
     * cadastra os clientes no banco
     * @return type Array
     */
    public function setcadastracliente($nome,$cpf,$email,$telefone,$idestado,$idcidade,$rua,$bairro,$numero,$cep,$login,$senha)
    {   
        $bdLeilao = new bd_leilao();
        $sql = "insert into cliente values("."NULL"."','".$nome."','".$cpf."','".$email."','".$telefone."','".$idestado."','".$idcidade."','".$rua."','".$bairro."','".$numero."','".$cep."','".$login."','".$senha.")";
        $bdLeilao->execute($sql);
    }   
}
?>
