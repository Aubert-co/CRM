<?php 

namespace App\Model;
require_once './vendor/autoload.php';




use App\Model\GetConection;

class Actions {
    public function Insert_Datas()
    {

    }

    public function Select_Datas()
    {

    }
    public function Find_Dates($Date_Start, $Date_End){
       $sql =  "SELECT * FROM data_users where visit_date BETWEEN '{$Date_Start}'  AND '{$Date_End}'";
    }

    public function Find_Global($Data){

    }
    public function Select_FeedBack($order,$search,$feedBack){
        if(!is_null($order) && ($order === 'ASC' || $order === 'DESC') ){
            
                $sql = "SELECT FROM data_users where feedback = '{$feedBack}' ORDER BY name_user '{$order}'";
                return ;
            
            
        }

        if(!is_null($search)){
            $sql = "SELECT FROM data_users where feedback = '{$feedBack}' AND ( name_user = '{$search}'
            or name_employe = '{$search}' or address_user = '{$search}' 
            or contact_user = '${$search}'  or visit_date = '{$search}')";
            return;
        }
        $sql = "SELECT * FROM data_users where feedback = '{$feedBack}' ";
    }
}

?>