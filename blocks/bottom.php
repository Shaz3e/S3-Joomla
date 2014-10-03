<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php
    if($this->countModules('bottom-1')){
        $bottoms["bottom1"] = '<jdoc:include type="modules" name="bottom-1" style="shaz3e" />';
    }
    if($this->countModules('bottom-2')){
        $bottoms["bottom2"] = '<jdoc:include type="modules" name="bottom-2" style="shaz3e" />';
    }
    if($this->countModules('bottom-3')){
        $bottoms["bottom3"] = '<jdoc:include type="modules" name="bottom-3" style="shaz3e" />';
    }
    if($this->countModules('bottom-4')){
        $bottoms["bottom4"] = '<jdoc:include type="modules" name="bottom-4" style="shaz3e" />';
    }
    if($this->countModules('bottom-5')){
        $bottoms["bottom5"] = '<jdoc:include type="modules" name="bottom-5" style="shaz3e" />';
    }
    if($this->countModules('bottom-6')){
        $bottoms["bottom6"] = '<jdoc:include type="modules" name="bottom-6" style="shaz3e" />';
    }

if(isset($bottoms)){
    $result = count($bottoms);
    foreach($bottoms as $bottom => $name){
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