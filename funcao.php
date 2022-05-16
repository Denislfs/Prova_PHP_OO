<?php
 
class Database{

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "cadastro";

        public function Conectar_Banco(){
            $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            if(mysqli_connect_error()) {
                die("Falha na conexão: " . mysqli_connect_error());
            }
        }

        function __construct(){
            $this->Conectar_Banco();
        }

        
        public function __destruct(){
            mysqli_close($this->connection);
        }

        public function Cadastrar_Aluno($ra,$nome,$sobrenome,$idade){
            $sql = "INSERT INTO `alunos` (ra, nome, sobrenome, idade) VALUES ('$ra', '$nome', '$sobrenome', '$idade')";
            $res = mysqli_query($this->connection, $sql);
            if($res){
                 return true;
            }else{
                return false;
            }
        }
        public function Consulta_alunos($id=null){
            $sql = "SELECT * FROM `alunos`";
            if($id){ $sql .= " WHERE id=$id";}
             $res = mysqli_query($this->connection, $sql);
             return $res;
        }


        public function Atualizar_aluno($ra,$nome,$sobrenome,$idade,$id){
            $sql = "UPDATE `alunos` SET ra='$ra', nome='$nome', sobrenome='$sobrenome', idade='$idade' WHERE id=$id";
            $res = mysqli_query($this->connection, $sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }

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