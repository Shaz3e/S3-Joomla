<?php
    if($this->countModules('scroller-1')){
        $scrollers["scroller1"] = '<jdoc:include type="modules" name="scroller-1" style="shaz3e" />';
    }
    if($this->countModules('scroller-2')){
        $scrollers["scroller2"] = '<jdoc:include type="modules" name="scroller-2" style="shaz3e" />';
    }
    if($this->countModules('scroller-3')){
        $scrollers["scroller3"] = '<jdoc:include type="modules" name="scroller-3" style="shaz3e" />';
    }
    if($this->countModules('scroller-4')){
        $scrollers["scroller4"] = '<jdoc:include type="modules" name="scroller-4" style="shaz3e" />';
    }
    if($this->countModules('scroller-5')){
        $scrollers["scroller5"] = '<jdoc:include type="modules" name="scroller-5" style="shaz3e" />';
    }
    if($this->countModules('scroller-6')){
        $scrollers["scroller6"] = '<jdoc:include type="modules" name="scroller-6" style="shaz3e" />';
    }
if(isset($scrollers)){
    $result = count($scrollers);
    foreach($scrollers as $scroller => $name){
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