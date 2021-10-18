<?php 

namespace App\Controller;
require_once '../vendor/autoload.php';


use App\Model\FeedBack_Query;

class ActionsController{
    public function Search_Global($value_to_search){

    }

    public function FeedBack_Layout_Positive($order,$search){
        $Values_Query = new FeedBack_Query;
        $Datas = $Values_Query->Select_FeedBack_Positivo(null,null);
        $Total_Datas = count($Datas);
     
        $Layout ='
   

                    <div class="title">
                        <div class="title">
                            <div class="title_text">
                                <h6>Maiores chances de contratar</h6>
                            </div>
                            
                            <div class="title_number">
                                <h3>'.$Total_Datas.'</h3>
                            </div>
                            
                            <div class="title_input">
                                <input type="text" name="search_positive" id="search_positive" placeholder="faça uma busca">
                            </div>
                        </div>
                    </div>
                    <div class="sub_items">
      ';
        foreach($Datas as $values){
            $Layout .='
           
                <div class="item_box hight">
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
        print($Layout);
    
    }
    public function FeedBack_Layout_Negative($order,$search){
        $Values_Query = new FeedBack_Query;
        $Datas = $Values_Query->Select_FeedBack_Negative(null,null);
        $Total_Datas = count($Datas);
     
        $Layout ='
   

                    <div class="title">
                        <div class="title">
                            <div class="title_text">
                                <h6>Maiores chances de contratar</h6>
                            </div>
                            
                            <div class="title_number">
                                <h3>'.$Total_Datas.'</h3>
                            </div>
                            
                            <div class="title_input">
                                <input type="text" name="search_negative" id="search_negative" placeholder="faça uma busca">
                            </div>
                        </div>
                    </div>
                    <div class="sub_items">
      ';
        foreach($Datas as $values){
            $Layout .='
           
                <div class="item_box low">
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
        print($Layout);
    }
    public function FeedBack_Layout_Medium($order,$search){
        $Values_Query = new FeedBack_Query;
        $Datas = $Values_Query->Select_FeedBack_Medium(null,null);
        $Total_Datas = count($Datas);
     
        $Layout ='
   

                    <div class="title">
                        <div class="title">
                            <div class="title_text">
                                <h6>Maiores chances de contratar</h6>
                            </div>
                            
                            <div class="title_number">
                                <h3>'.$Total_Datas.'</h3>
                            </div>
                            
                            <div class="title_input">
                                <input type="text" name="search_medium" id="search_medium" placeholder="faça uma busca">
                            </div>
                        </div>
                    </div>
                    <div class="sub_items">
      ';
        foreach($Datas as $values){
            $Layout .='
           
                <div class="item_box medium">
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
        print($Layout);
    }
}


?>