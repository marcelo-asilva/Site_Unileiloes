<?php
require_once '../../DAO/bd_leilao.php';

class Unileiloes{
   
    /**
     * getCategorias
     * Retorna todas as categorias cadastradas
     * @return type Array
     */
    public function getCategorias()
    {
        $bdLeilao = new bd_leilao();
        $sql = "Select * from categorias order by descricao";
        $retornoconsulta=$bdLeilao->select($sql);
        $qtdRetorno= mysql_num_rows($retornoconsulta);
        
        $arrayCategorias= array();
        for($i=0;$i<$qtdRetorno;$i++)
        {
            $arrayCategorias[$i]["idCategoria"]= mysql_result($retornoconsulta, $i,'idCategorias');
            $arrayCategorias[$i]["descricao"]= mysql_result($retornoconsulta, $i,'descricao');
        }
        
        return $arrayCategorias;
    }
    
  /**
    * GetCidadesporEstado
    * Retorna todas as cidades de um estado para o ajax
    * @param type $id_estado
    * @return type Array
    */
    public function GetCidadesporEstado($id_estado) {
        $bdLeilao = new bd_leilao();
      //  $sql="Insert into cidade values(".$id_estado.",".$cidade.",";
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
    
    /**
    * GetEstado
    * Retorna todos os estados
    * @return type aray
    */
    public function GetEstado() {
        $bdLeilao = new bd_leilao();
        $sql = "select * from estado order by estado";
        $result = $bdLeilao->select($sql);
        $qtd = mysql_num_rows($result);
        $estado = array();

        for ($i = 0; $i < $qtd; $i++) {
            $estado[$i]['estado'] = mysql_result($result, $i, "estado");
            $estado[$i]['idEstado'] = mysql_result($result, $i, "idEstado");
        }

        return $estado;
    }
    
}
?>
