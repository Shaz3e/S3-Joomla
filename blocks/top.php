<?php
    if($this->countModules('top-1')){
        $tops["top1"] = '<jdoc:include type="modules" name="top-1" style="shaz3e" />';
    }
    if($this->countModules('top-2')){
        $tops["top2"] = '<jdoc:include type="modules" name="top-2" style="shaz3e" />';
    }
    if($this->countModules('top-3')){
        $tops["top3"] = '<jdoc:include type="modules" name="top-3" style="shaz3e" />';
    }
    if($this->countModules('top-4')){
        $tops["top4"] = '<jdoc:include type="modules" name="top-4" style="shaz3e" />';
    }
    if($this->countModules('top-5')){
        $tops["top5"] = '<jdoc:include type="modules" name="top-5" style="shaz3e" />';
    }
    if($this->countModules('top-6')){
        $tops["top6"] = '<jdoc:include type="modules" name="top-6" style="shaz3e" />';
    }
if(isset($tops)){
    $result = count($tops);
    foreach($tops as $top => $name){
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