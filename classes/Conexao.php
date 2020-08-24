<?php

/**
 * Classe Conexão
 * Desenvolvida em aulas no Curso Técnico em Informática do CIMOL
 * @author Adriel Muller adriel-muller@hotmail.com
 * @author Cândido candido.cimol@gmail.com
 * @version 0.1
 * @access public
 * @copyright GPL 2020, Inf63
 * @since 09/07/2020
*/
class Conexao {
    static public function getConexao(){
        return new PDO (SGBD.":host=".HOST_DB.";dbname=".DB."",USER_DB, PASS_DB);
    }

}