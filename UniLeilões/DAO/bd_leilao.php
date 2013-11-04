<?php
class bd_leilao 
{
    protected $host="localhost";
    protected $usuario="root";
    protected $senha="";
    protected $banco="bd_leilao";
    protected $conn;
  
    protected $qtd;
    
    public function open()     
     {         
        $this->conn = mysql_connect($this->host, $this->usuario, $this->senha, $this->banco);
         if ($this->conn)
         {
                mysql_select_db($this->banco);
                return $this->conn;
         }
         else
         {
             die('erro durante a conexao com o banco de dados');
         }
         
     }
     
     public function close()
     {
       mysql_close($this->conn);    
     }
     
    public function execute($sql) 
      {
           if(!$this->conn) {
               $this->open();
           }
           $query = mysql_query($sql);
           if(!$query) {
               die('Código Inválido! <br>' . mysql_error());
           }
           $this->close();
           return TRUE;
       }
       
         public function select($sql) 
             {
                    if(!$this->conn) {
                        $this->open();
                    }
                    $query = mysql_query($sql);
                    if(!$query) {
                        die('Código inválido!<br>' . mysql_error());
                    }
                    $this->qtd = mysql_num_rows($query);

                    return $query;
                    $this->close();
            }
            
            public function qtd_rows()
            {
                return $this->qtd;
            }
         
}

?>
