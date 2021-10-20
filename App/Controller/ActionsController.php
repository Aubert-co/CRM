<?php 

namespace App\Controller;
require_once '../vendor/autoload.php';


use App\Model\FeedBack_Query;

class ActionsController{
    public function Search_Global($value_to_search){

    }

    public function FeedBack_Layout_Positive($order,$search){
        $Values_Query = new FeedBack_Query;
        $Datas = $Values_Query->Return_a_SQL(null,null,3);

        $feedBackType = "positive";
        $title = "Maiores chances de contratar";

        $Layout = $this->Layout($Datas,$feedBackType,$title);
     
        
        print($Layout);
    
    }
    public function FeedBack_Layout_Negative($order,$search){
        $Values_Query = new FeedBack_Query;
        $Datas = $Values_Query->Return_a_SQL(null,null,1);
        $Total_Datas = count($Datas);
        $feedBackType = "negative";
        $title = "Menores chances de contratar";
        $Layout = $this->Layout($Datas,$feedBackType,$title);
        print($Layout);
    }
    public function FeedBack_Layout_Medium($order,$search){
        $Values_Query = new FeedBack_Query;
        $Datas = $Values_Query->Return_a_SQL(null,null,2);
        $title = "Chances medias de contratar";
        $feedBackType = "medium";
        $Layout = $this->Layout($Datas,$feedBackType,$title);
        
        print($Layout);
    }
    public function All_Datas($order,$search){
        $Values_Query = new FeedBack_Query;
        $Datas = $Values_Query->All_Datas(null,null);
        $title = "Todos os resultados";
        $feedBackType = "all_datas";
        $Layout = $this->Layout($Datas,$feedBackType,$title);

        print($Layout);
    }
    private function Layout($Datas,$feedBackType,$title){
        $data_types_feedbacks = array(
            1=>"negative",
            2=>"medium",
            3=>"positive"
        );
        $Total_Datas = count($Datas);
        $Layout ='
                    <div class="title">
                        <div class="title">
                            <div class="title_text">
                                <h6>'.$title.'</h6>
                            </div>
                            
                            <div class="title_number">
                                <h3>'.$Total_Datas.'</h3>
                            </div>
                            
                            <div class="title_input">
                                <input type="text" name="search_'.$feedBackType.'" id="search_'.$feedBackType.'" placeholder="faça uma busca">
                            </div>
                        </div>
                    </div>
                    <div class="sub_items">
      ';
        foreach($Datas as $values){
            $Layout .='
           
                <div class="item_box '.$data_types_feedbacks[$values['feedback']].'">
                    <h4>Nome    :'.$values['name_user'].'</h4>
                    <h4>Funcionario : '.$values['name_employe'].'</h4>
                    <h4>Endereço : '.$values['address_user'].'</h4>
                    <h4>Contato : '.$values['contact_user'].' </h4>
                    <h4>FeedBack : '.$values['feedback'].'</h4>
                    <h4>Data de Visita : '.$values['visit_date'].'</h4>
                </div>

           ';
    
        }
        $Layout .="</div>"; 
        return $Layout;
    }
}


?>