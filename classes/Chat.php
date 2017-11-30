<?php

require_once '../conexao/Crud.php';

class Chat extends Crud{
    private $assunto_chat;
    private $texto_chat;
    private $avatar_chat;
    private $perfil_chat;
    private $data_chat;
    private $id_usuario;
    
    function setAssunto_chat($assunto_chat) {
        $this->assunto_chat = $assunto_chat;
    }
    
    function setTexto_chat($texto_chat) {
        $this->texto_chat = $texto_chat;
    }
    
    function setAvatar_chat($avatar_chat) {
        $this->avatar_chat = $avatar_chat;
    }
    
    function setPerfil_chat($perfil_chat) {
        $this->perfil_chat = $perfil_chat;
    }
    
    function setData_chat($data_chat) {
        $this->data_chat = $data_chat;
    }
    
    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    
    public function inserir_chat() {
        try {
            $sql = "INSERT INTO chat (assunto_chat, texto_chat, avatar_chat, perfil_chat, data_chat, usuario_id_usuario) "
                    . "VALUES (:assunto_chat, :texto_chat, :avatar_chat, :perfil_chat, :data_chat, :id_usuario)";

            $stmt = DB::prepare($sql);
            $stmt->bindParam(':assunto_chat', $this->assunto_chat);
            $stmt->bindParam(':texto_chat', $this->texto_chat);
            $stmt->bindParam(':avatar_chat', $this->avatar_chat);
            $stmt->bindParam(':perfil_chat', $this->perfil_chat);
            $stmt->bindParam(':data_chat', $this->data_chat);
            $stmt->bindParam(':id_usuario', $this->id_usuario);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir Chat<br>';
            echo $ex->getMessage();
        }
    }
    
    public function ler_todas_msg() {
        try {
            $sql = "SELECT U.nome_usuario, C.* FROM usuario U INNER JOIN chat C ON U.id_usuario = C.usuario_id_usuario ORDER BY id_chat DESC";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todas as mensagens <br>';
            echo $exc->getMessage();
        }

    }
}
