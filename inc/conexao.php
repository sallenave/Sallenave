
    
<?php


// classe conexao para ser estanciada em outras classes
class conexao {

    var $query;
    var $link;
    var $resultado;
    

    // Instancia o Objeto para podermos usar
    function MySQL(){
    
    }
  

  // função para efetuar conexão ao Banco MySQL 
    function conecta(){
        $this->link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    // Conecta ao Banco de Dados
        if(!$this->link){
      // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro na conexão MySQL:";
            print "<b>".mysql_error()."</b>";
      die();
    
        }

        //setando caracteres especiais scorretamente
        if (false === $this->link->set_charset('utf8')) {
            printf('Error ao usar utf8: %s', $mysqli->error);
            exit;
        }
    }

  // Cria a função para "query" no Banco de Dados
    function sql_query($query){
        $this->conecta();
        $this->query = $query;

    // Conecta e faz a query no MySQL
        if($this->resultado = mysqli_query($this->link, $this->query)){
            $this->desconecta();
            return $this->resultado;
        }else{
      // Caso ocorra um erro, exibe uma mensagem com o Erro
            print "Ocorreu um erro ao executar a Query MySQL: <b>$query</b>";
            print "<br><br>";
            print "Erro no MySQL: <b>".mysql_error()."</b>";
      die();
            $this->desconecta();
        }        
    }

  // Cria a função para Desconectar do Banco MySQL
    function desconecta(){
        return mysqli_close($this->link);
    }
}
?>
