<?php
    if($this->countModules('feature-1')){
        $features["feature1"] = '<jdoc:include type="modules" name="feature-1" style="shaz3e" />';
    }
    if($this->countModules('feature-2')){
        $features["feature2"] = '<jdoc:include type="modules" name="feature-2" style="shaz3e" />';
    }
    if($this->countModules('feature-3')){
        $features["feature3"] = '<jdoc:include type="modules" name="feature-3" style="shaz3e" />';
    }
    if($this->countModules('feature-4')){
        $features["feature4"] = '<jdoc:include type="modules" name="feature-4" style="shaz3e" />';
    }
    if($this->countModules('feature-5')){
        $features["feature5"] = '<jdoc:include type="modules" name="feature-5" style="shaz3e" />';
    }
    if($this->countModules('feature-6')){
        $features["feature6"] = '<jdoc:include type="modules" name="feature-6" style="shaz3e" />';
    }
if(isset($features)){
    $result = count($features);
    foreach($features as $feature => $name){

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