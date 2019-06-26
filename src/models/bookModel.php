<?php

/**
 * Retourne la liste de tous les livres avec les auteurs 
 * et les éditeurs
 * @param PDO $pdo une instance de PDO
 * @return array un tableau ordinal de tableaux associatifs
 * @throws PDOEXCEPTION
 */
function getAllBooks(PDO $pdo){
   $sql = "SELECT * FROM v_detail_livres";
   $rs = $pdo->query($sql);

   return $rs->fetchAll(PDO::FETCH_ASSOC);
}