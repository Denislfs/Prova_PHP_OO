<?php
//criaçao da classe 
class Database{

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "cadastro";
    //Criando a conexao ao banco
        public function Conectar_Banco(){
            $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            if(mysqli_connect_error()) {
                die("Falha na conexão: " . mysqli_connect_error());
            }
        }
    //funçao construct para conectar ao banco
        function __construct(){
            $this->Conectar_Banco();
        }

    //funçao destruct para fechar a conexao
        public function __destruct(){
            mysqli_close($this->connection);
        }
    //funçao de cadastro de alunos
        public function Cadastrar_Aluno($ra,$nome,$sobrenome,$idade){
            $sql = "INSERT INTO `alunos` (ra, nome, sobrenome, idade) VALUES ('$ra', '$nome', '$sobrenome', '$idade')";
            $res = mysqli_query($this->connection, $sql);
            if($res){
                 return true;
            }else{
                return false;
            }
        }

       /* function alert($message){
           echo "<script>alert('$message');</script>";
        }*/

    //funçao de consultar(selecionar todos os dados) alunos
        public function Consulta_alunos($id=null){
            $sql = "SELECT * FROM `alunos`";
            if($id){ $sql .= " WHERE id=$id";}
             $res = mysqli_query($this->connection, $sql);
             return $res;
        }

    //funçao de atulizar dados de alunos
        public function Atualizar_aluno($ra,$nome,$sobrenome,$idade,$id){
            $sql = "UPDATE `alunos` SET ra='$ra', nome='$nome', sobrenome='$sobrenome', idade='$idade' WHERE id=$id";
            $res = mysqli_query($this->connection, $sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    //gunçao para exclusao de alunos
        public function Excluir_aluno($id){
            $sql = "DELETE FROM `alunos` WHERE id=$id";
             $res = mysqli_query($this->connection, $sql);
             if($res){
                 return true;
             }else{
                 return false;
             }
        }

    }
 

 
$database = new Database();
$database->Conectar_Banco();

 
?>