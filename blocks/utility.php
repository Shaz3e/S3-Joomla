<?php
    if($this->countModules('utility-1')){
        $utilitys["utility1"] = '<jdoc:include type="modules" name="utility-1" style="shaz3e" />';
    }
    if($this->countModules('utility-2')){
        $utilitys["utility2"] = '<jdoc:include type="modules" name="utility-2" style="shaz3e" />';
    }
    if($this->countModules('utility-3')){
        $utilitys["utility3"] = '<jdoc:include type="modules" name="utility-3" style="shaz3e" />';
    }
    if($this->countModules('utility-4')){
        $utilitys["utility4"] = '<jdoc:include type="modules" name="utility-4" style="shaz3e" />';
    }
    if($this->countModules('utility-5')){
        $utilitys["utility5"] = '<jdoc:include type="modules" name="utility-5" style="shaz3e" />';
    }
    if($this->countModules('utility-6')){
        $utilitys["utility6"] = '<jdoc:include type="modules" name="utility-6" style="shaz3e" />';
    }
if(isset($utilitys)){
    $result = count($utilitys);
    foreach($utilitys as $utility => $name){
        if($result == 6){
            echo '<div class="dc-modules6">';
            echo $name;
            echo '</div>';
        }
        if($result == 5){
            echo '<div class="dc-modules5">';
            echo $name;
            echo '</div>';
        }
        if($result == 4){
            echo '<div class="dc-modules4">';
            echo $name;
            echo '</div>';
        }
        if($result == 3){
            echo '<div class="dc-modules3">';
            echo $name;
            echo '</div>';
        }
        if($result == 2){
            echo '<div class="dc-modules2">';
            echo $name;
            echo '</div>';
        }
        if($result == 1){
            echo '<div class="dc-modules1">';
            echo $name;
            echo '</div>';
        }
    }
}

?>