<?php
include_once './config/conexao.php';
function usuario ()
{
    $conn=conectar();
    $lista= $conn->query ('SELECT * FROM cliente ORDER BY idcliente DESC ;');
    $lista->execute();
    if($lista->rowCount()>0){
        return $lista->fetchAll(PDO::FETCH_OBJ);
    }else {
        return'Vazio';
     }
}
function inserir ($nome,$cpf, $email, $senha){
    $conn=conectar();
    $lista= $conn->prepare ("INSERT INTO cliente (nome, cpf, email, senha) VALUES ('$nome','$cpf', '$email', '$senha')");
    $lista->execute();
    if($lista->rowCount()>0){
        return "Gravado";
    }else {
        return"NGravado";
     }
    }
 


function inserirp ($nproduto, $quant, $desc){
    $conn=conectar();
    $lista= $conn->prepare ("INSERT INTO produtos (produto, quantidade, descricao) VALUES ('$nproduto', '$quant', '$desc');");
    $lista->execute();
    if($lista->rowCount()>0){
        return "Gravado";
    }else {
        return"NGravado";
     }
    }
    function inserirpa ($tipopag){
        $conn=conectar();
        $lista= $conn->prepare ("INSERT INTO tipopag (tipopag) VALUES ('$tipopag');");
        $lista->execute();
        if($lista->rowCount()>0){
            return "Gravado";
        }else {
            return"NGravado";
         }
        }
    function inserirpe ($idcliente, $idproduto, $idtipopag){
        $conn=conectar();
        $lista= $conn->prepare ("INSERT INTO pedido( idcliente, idproduto, idtipopag, dataa) VALUES ('$idcliente', '$idproduto', '$idtipopag',  NOW())");
        $lista->execute();
        if($lista->rowCount()>0){
            return "Gravado";
        }else {
            return"NGravado";
         }
        }
    function Listar ($tabela)
{
    $conn=conectar();
    $lista= $conn->prepare("SELECT * FROM ($tabela)" );
    $lista->execute();
    if($lista->rowCount()>0){
        return $lista->fetchAll(PDO::FETCH_OBJ);
    }else {
        return'Vazio';
     }
    }
  /*  function ListarTodosRegistros(){
        $conn=conectar();
        try{$sqlLista= $conn->prepare("SELECT idbanner, img, titulo, descricao, video, cadastro, alteracao, ativo FROM banner b " );
            $sqlLista->execute();
            if($sqlLista->rowCount()>0){
                return $sqlLista->fetchAll(PDO::FETCH_OBJ);
            }else {
                return'Vazio';
        };}catch
        (PDOExecption $e) {
            echo 'Exception -> ';
            return ($e->getMessage());
        };
        $conn =   null;
    } *//* $sth->bindValue(1, $calories, PDO::PARAM_INT);
$sth->bindValue(2, $colour, PDO::PARAM_STR);
$sth->execute(); */
        
     function listarTodosRegistros( $campos, $tabela, $ativo){
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ? ");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    }catch
    (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    };
    $conn = null;
}
 

function listarTodosRegistrosPar($campos, $tabela, $ativo, $param2, $val2){
    $conn = conectar();
    try {
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela WHERE ativo = ? AND $param2 = ?");
        $sqlLista->bindValue(1, $ativo, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $val2, PDO::PARAM_INT);
        
        $sqlLista->execute();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    }catch
    (PDOExecption $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
    };
    $conn = null;
}

?>