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

/**
 * Retourne la liste de tous les éditeurs
 * @param PDO $pdo une instance de PDO
 * @return array un tableau ordinal de tableaux associatifs
 * @throws PDOEXCEPTION
 */
function getAllPublishers(PDO $pdo){
   $sql = "SELECT * FROM editeurs";
   $rs = $pdo->query($sql);

   return $rs->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Retourne la liste de tous les auteurs
 * @param PDO $pdo une instance de PDO
 * @return array un tableau ordinal de tableaux associatifs
 * @throws PDOEXCEPTION
 */
function getAllAuthors(PDO $pdo){
   $sql = "SELECT * FROM auteurs";
   $rs = $pdo->query($sql);

   return $rs->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Retourne la liste de tous les roles
 * @param PDO $pdo une instance de PDO
 * @return array un tableau ordinal de tableaux associatifs
 * @throws PDOEXCEPTION
 */
function getAllRoles(PDO $pdo){
   $sql = "SELECT * FROM roles";
   $rs = $pdo->query($sql);

   return $rs->fetchAll(PDO::FETCH_ASSOC);
}