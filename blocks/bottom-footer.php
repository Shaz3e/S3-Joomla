<?php
    if($this->countModules('bottom-footer-1')){
        $bottomFooters["bottom-footer1"] = '<jdoc:include type="modules" name="bottom-footer-1" style="shaz3e" />';
    }
    if($this->countModules('bottom-footer-2')){
        $bottomFooters["bottom-footer2"] = '<jdoc:include type="modules" name="bottom-footer-2" style="shaz3e" />';
    }
    if($this->countModules('bottom-footer-3')){
        $bottomFooters["bottom-footer3"] = '<jdoc:include type="modules" name="bottom-footer-3" style="shaz3e" />';
    }
    if($this->countModules('bottom-footer-4')){
        $bottomFooters["bottom-footer4"] = '<jdoc:include type="modules" name="bottom-footer-4" style="shaz3e" />';
    }
    if($this->countModules('bottom-footer-5')){
        $bottomFooters["bottom-footer5"] = '<jdoc:include type="modules" name="bottom-footer-5" style="shaz3e" />';
    }
    if($this->countModules('bottom-footer-6')){
        $bottomFooters["bottom-footer6"] = '<jdoc:include type="modules" name="bottom-footer-6" style="shaz3e" />';
    }
if(isset($bottomFooters)){
    $result = count($bottomFooters);
    foreach($bottomFooters as $bottomFooter => $name){

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