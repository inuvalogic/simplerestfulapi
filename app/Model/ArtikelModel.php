<?php

namespace Api\Model;

use Api\Core\Database;
use \PDO;

class ArtikelModel
{
    const TABLE_NAME = 'artikel';

    public static function all()
    {
        $sql = "SELECT * FROM `".self::TABLE_NAME."` ORDER BY `id` DESC";
        $q = Database::$pdo->prepare($sql);
        $q->execute();
        $row = $q->fetchAll();
        return $row;
    }

    public static function one($id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $sql = "SELECT * FROM `".self::TABLE_NAME."` WHERE `id` = ?";
        $q = Database::$pdo->prepare($sql);
        $q->execute(array($id));
        $row = $q->fetch();
        return $row;
    }

    public static function insert($data)
    {
        try
        {
            $sql_insert = "INSERT INTO `".self::TABLE_NAME."` (`judul`, `isi`) VALUES (?,?)";
            $q = Database::$pdo->prepare($sql_insert);
            $q->bindValue(1, $data['judul'], PDO::PARAM_STR);
            $q->bindValue(2, $data['isi'], PDO::PARAM_STR);
            $q->execute();
            $id = Database::$pdo->lastInsertId();
            return $id;
        } catch(\PDOException $e){
            return false;
        }
    }

    public static function update($data)
    {
        try
        {
            $sql_update = "UPDATE `".self::TABLE_NAME."` SET `judul` = ?, `isi` = ? WHERE `id` = ?";
            $q = Database::$pdo->prepare($sql_update);
            $q->bindValue(1, $data['judul'], PDO::PARAM_STR);
            $q->bindValue(2, $data['isi'], PDO::PARAM_STR);
            $q->bindValue(3, $data['id'], PDO::PARAM_INT);
            $q->execute();
            return true;
        } catch(\PDOException $e){
            return false;
        }
    }

    public static function delete($id)
    {
        try
        {
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $sql = "DELETE FROM `".self::TABLE_NAME."` WHERE `id` = ?";
            $q = Database::$pdo->prepare($sql);
            $q->execute(array($id));
            return true;
        } catch(\PDOException $e){
            return false;
        }
    }
}

