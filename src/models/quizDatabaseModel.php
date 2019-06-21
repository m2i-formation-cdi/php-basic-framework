<?php

/**
 * Récupère la liste des quiz depuis la base de données
 * @param PDO $pdo : la connexion à la base de donnée
 * @return array : Un tableau ordinal de tableaux associatifs
 * @throws PDOEXEPTION
 */
function getAllQuiz(PDO $pdo){
   $sql = "SELECT * FROM quiz";
   $rs = $pdo->query($sql);
   return $rs->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Récupère un quiz en fonction de son id
 * @param PDO $pdo : la connexion à la base de donnée
 * @param int $id : la clef primaire du quiz à récupérer
 * @return array : Un tableau associatif
 * @throws PDOEXEPTION
 */
function getOneQuiz(PDO $pdo, int $id){
   $sql = "SELECT * FROM quiz WHERE id = ?";
   $statement = $pdo->prepare($sql);
   $statement->execute([$id]);
   return $statement->fetch(PDO::FETCH_ASSOC);
}

/**
 * Supprime un quiz en fonction de son id
 * @param PDO $pdo : la connexion à la base de donnée
 * @param int $id : la clef primaire du quiz à supprimer
 * @return bool : un booléen indiquant le succès ou l'échec de la                   suppression
 * @throws PDOEXEPTION
 */
function deleteOneQuiz(PDO $pdo, $id){
   $sql = "DELETE FROM quiz WHERE id = ?";
   $statement = $pdo->prepare($sql);
   return $statement->execute([$id]);
}

/**
 * Ajoute un nouveau quiz
 * @param PDO $pdo    : la connexion à la base de donnée
 * @param array $data : les données à insérer sous forme de
 *                      tableau associatif où les clefs 
 *                      correspondent aux noms de colonnes
 * @return bool       : un booléen indiquant le succès ou l'échec                         de l'insertion
 * @throws PDOEXEPTION
 */
function insertQuiz(PDO $pdo, array $data){
   $sql = "INSERT INTO quiz (name) VALUES (:name)";
   $statement = $pdo->prepare($sql);
   return $statement->execute($data);
}

/**
 * Met à jour un quiz
 * @param PDO $pdo    : la connexion à la base de donnée
 * @param array $data : les données à mettre à jour sous forme de
 *                      tableau associatif où les clefs 
 *                      correspondent aux noms de colonnes
 * @return bool       : un booléen indiquant le succès ou l'échec                         de la mise à jour
 * @throws PDOEXEPTION
 */
function updateQuiz(PDO $pdo, array $data){
   $sql = "UPDATE quiz SET name=:name WHERE id=:id";
   $statement = $pdo->prepare($sql);
   return $statement->execute($data);
}