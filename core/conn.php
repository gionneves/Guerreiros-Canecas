<?php
/**
 * Conexão com o banco de dados para ver informações das canecas já cadastradas ou
 * cadastrar mais cadanecas para poeder ser obtidas.
 * 
 * PHP version 7
 * 
 * @category Database_Connectionm
 * @package  PHP_Core
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/   
 */

//'wIoi1-Wf-hIU!9-0'
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=dbcaneca', 'root', ''); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>