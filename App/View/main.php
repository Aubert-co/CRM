<?php 
require_once '../vendor/autoload.php';
use App\Controller\ActionsController;

$values = new ActionsController;
    
  
?>   
<main>
    <div class="container">
        <div class="box_itens">
            <?php  $Medium =  $values->FeedBack_Layout_Positive(null,null);  ?>
        </div>

        <div class="box_itens">
            <?php   $Positive = $values->FeedBack_Layout_Medium(null,null);?>
        </div>

        <div class="box_itens">
            <?php $Negative = $values->FeedBack_Layout_Negative(null,null); ?>
        </div>
    </div>
</main>