<?php
require_once '../DAO/bd_leilao.php';

class Class_Cliente{
    public function GetCidadesporEstado($id_estado) {
        $bdLeilao = new bd_leilao();
        $sql = "select * from cidade where id_estado=" . $id_estado;
        $result = $bdLeilao->select($sql);
        $qtd = mysql_num_rows($result);
        $cidade = array();

        for ($i = 0; $i < $qtd; $i++) {
            $cidade[$i]['cidade'] = mysql_result($result, $i, "cidade");
            $cidade[$i]['idCidade'] = mysql_result($result, $i, "idCidade");
        }

        return $cidade;
    }
}

?>
