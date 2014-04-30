<?php
    if($this->countModules('showcase-1')){
        $showcases["showcase1"] = '<jdoc:include type="modules" name="showcase-1" style="shaz3e" />';
    }
    if($this->countModules('showcase-2')){
        $showcases["showcase2"] = '<jdoc:include type="modules" name="showcase-2" style="shaz3e" />';
    }
    if($this->countModules('showcase-3')){
        $showcases["showcase3"] = '<jdoc:include type="modules" name="showcase-3" style="shaz3e" />';
    }
    if($this->countModules('showcase-4')){
        $showcases["showcase4"] = '<jdoc:include type="modules" name="showcase-4" style="shaz3e" />';
    }
    if($this->countModules('showcase-5')){
        $showcases["showcase5"] = '<jdoc:include type="modules" name="showcase-5" style="shaz3e" />';
    }
    if($this->countModules('showcase-6')){
        $showcases["showcase6"] = '<jdoc:include type="modules" name="showcase-6" style="shaz3e" />';
    }
if(isset($showcases)){
    $result = count($showcases);
    foreach($showcases as $showcase => $name){
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