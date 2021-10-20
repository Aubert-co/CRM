<?php 

namespace App\Model;
require_once '../vendor/autoload.php';

use App\Model\GetConection;


class FeedBack_Query{
    

 
     public function Return_a_SQL($order,$search,$feedBack){
         /*$sql = "SELECT FROM data_user WHERE feedback = '{feedback}'
         and visit date beetwen '{$dateone} and '{datetwo}''"
         */
        if(is_null($order) ){
            $order = "ASC";
         }
 
         if(!is_null($search) ){
             $sql = "SELECT * FROM data_users where feedback = '{$feedBack}' AND ( name_user = '{$search}'
             or name_employe = '{$search}' or address_user = '{$search}' 
             or contact_user = '${$search}'  or visit_date = '{$search}') ORDER BY name_user {$order}";
           
         }else{
            $sql = "SELECT * FROM data_users where feedback = '{$feedBack}' ORDER BY name_user {$order}";
         }
         
         
         $stmt = GetConection::Conection()->prepare($sql);
  
         $stmt->execute();
  
         if($stmt->rowCount()>0){
             $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
             
             return $result;
         }
         
     }
     public function All_Datas($order,$search){
         if(is_null($order)){
             $order = "ASC";
         }
         $sql = "SELECT * FROM data_users  ORDER BY visit_date {$order}";

         $stmt = GetConection::Conection()->prepare($sql);
  
         $stmt->execute();
  
         if($stmt->rowCount()>0){
             $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
             
             return $result;
         }
     }
}
/*function FeedBack_Layout_Medium($order,$search,$feedback){
    $Values_Query = new FeedBack_Query;
    $Datas = $Values_Query->Select_FeedBack_Positivo(null,null);
  
    $Layout ='
    <div class="box_itens">

                <div class="title">
                    <div class="title">
                        <div class="title_text">
                            <h6>Maiores chances de contratar</h6>
                        </div>
                        
                        <div class="title_number">
                            <h3>5</h3>
                        </div>
                        
                        <div class="title_input">
                            <input type="text" placeholder="faça uma busca">
                        </div>
                        </div>
  ';
    foreach($Datas as $values){
        $Layout .='
        <div class="sub_items">
        <div class="item_box hight">
            <h4>'.$values['name_user'].'</h4>
            <h4>'.$values['name_employe'].'</h4>
            <h4>'.$values['address_user'].'</h4>
            <h4>'.$values['contact_user'].' </h4>
            <h4>'.$values['feedback'].'</h4>
            <h4>'.$values['visit_date'].'</h4>
        </div>

        </div>
        ';
        $Layout .=' </div>';
        
    }
    return $Layout;
}*/

?>