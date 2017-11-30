<?php

require_once '../conexao/Crud.php';

class Feed extends Crud{
    private $titulo_feed;
    private $texto_feed;
    private $imagem_feed;
    private $data_feed;
    private $perfil_feed;
    private $id_escola;
    
    function setTitulo_feed($titulo_feed) {
        $this->titulo_feed = $titulo_feed;
    }
    
    function setTexto_feed($texto_feed) {
        $this->texto_feed = $texto_feed;
    }
    
    function setImagem_feed($imagem_feed) {
        $this->imagem_feed = $imagem_feed;
    }
    
    function setData_feed($data_feed) {
        $this->data_feed = $data_feed;
    }
    
    function setPerfil_feed($perfil_feed) {
        $this->perfil_feed = $perfil_feed;
    }
    
    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }
    
    public function inserir_feed() {
        try {
            $sql = "INSERT INTO feed(titulo_feed, texto_feed, imagem_feed, data_feed, perfil_feed, escola_id_escola) "
                    . "VALUES (:titulo_feed, :texto_feed, :imagem_feed, :data_feed, :perfil_feed, :id_escola)";

            $stmt = DB::prepare($sql);
            $stmt->bindParam(':titulo_feed', $this->titulo_feed);
            $stmt->bindParam(':texto_feed', $this->texto_feed);
            $stmt->bindParam(':imagem_feed', $this->imagem_feed);
            $stmt->bindParam(':perfil_feed', $this->perfil_feed);
            $stmt->bindParam(':data_feed', $this->data_feed);
            $stmt->bindParam(':id_escola', $this->id_escola);
            $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir Feed<br>';
            echo $ex->getMessage();
        }
    }
    
    public function ler_todos_feed() {
        try {
            $sql = "SELECT * FROM feed ORDER BY id_feed DESC";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todas as mensagens <br>';
            echo $exc->getMessage();
        }

    }
    
}
