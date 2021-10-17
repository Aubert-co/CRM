<?php 

namespace App\Model;
require_once '../vendor/autoload.php';



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
   
}

print('h3');
?>