<?php 

namespace App\Model;
require_once '../vendor/autoload.php';



use App\Model\GetConection;


class FeedBack_Query{
    public function Select_FeedBack_Positivo($order,$search){
        $feedBack = 3;
        $sql =  $this->Return_a_SQL($order,$search,$feedBack);
         print($sql);
        $stmt = GetConection::Conection()->prepare($sql);
 
        $stmt->execute();
 
        if($stmt->rowCount()>0){
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
            foreach($result as $values){
             print($values['name_user']);
            }
        }
     }
     public function Select_FeedBack_Negative($order,$search){
        $feedBack = 1;
     }

     public function Select_FeedBack_Medium($order,$search){
         $feedBack = 2;
     }

 
     private function Return_a_SQL($order,$search,$feedBack){
         if(!is_null($order) && ($order === 'ASC' || $order === 'DESC') ){
             $sql = "SELECT FROM data_users where feedback = '{$feedBack}' ORDER BY name_user '{$order}'";
             return $sql;
         }
 
         if(!is_null($search)){
             $sql = "SELECT FROM data_users where feedback = '{$feedBack}' AND ( name_user = '{$search}'
             or name_employe = '{$search}' or address_user = '{$search}' 
             or contact_user = '${$search}'  or visit_date = '{$search}')";
             return $sql;
         }
         return $sql = "SELECT * FROM data_users where feedback = '{$feedBack}' ";
     }
}

print('ola');
?>