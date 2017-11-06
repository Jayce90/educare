<?php
// pagina de conexao com o banco de dados
class DB {

    private static $instance;

    public static function getInstance() {

        if (!isset(self::$instance)) {

            try {
                self::$instance = new PDO("mysql:host=localhost; dbname=educacao", "root","");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return self::$instance;
    }

    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }

}

//self::$instance = new PDO("mysql:host=localhost; dbname=educacao", "root","");
//self::$instance = new PDO("mysql:host=mysql.hostinger.com.br; dbname=u357796814_educ", "u357796814_educ","ZzzcJ!q>9QYxO9R7]U");