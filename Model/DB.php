<?php 

namespace App\Model;


class GetConection {
    private static $instance=null;

    public static function Conection()
    {
        try
        {
            self::$instance = new \PDO('mysql:host=localhost;dbname=CRM;','root','');
        }catch(\Error $e)
        {
            throw $e->getMessage();
        }
    }
    public static function DesConection(){
        return self::$instance = null;
    }
}
?>