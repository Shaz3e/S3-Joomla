<?php
    if($this->countModules('bottom-feature-1')){
        $bottomFeatures["bottom-feature1"] = '<jdoc:include type="modules" name="bottom-feature-1" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-2')){
        $bottomFeatures["bottom-feature2"] = '<jdoc:include type="modules" name="bottom-feature-2" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-3')){
        $bottomFeatures["bottom-feature3"] = '<jdoc:include type="modules" name="bottom-feature-3" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-4')){
        $bottomFeatures["bottom-feature4"] = '<jdoc:include type="modules" name="bottom-feature-4" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-5')){
        $bottomFeatures["bottom-feature5"] = '<jdoc:include type="modules" name="bottom-feature-5" style="shaz3e" />';
    }
    if($this->countModules('bottom-feature-6')){
        $bottomFeatures["bottom-feature6"] = '<jdoc:include type="modules" name="bottom-feature-6" style="shaz3e" />';
    }
if(isset($bottomFeatures)){
    $result = count($bottomFeatures);
    foreach($bottomFeatures as $bottomFeature => $name){

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