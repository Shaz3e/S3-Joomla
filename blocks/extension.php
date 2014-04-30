<?php
    if($this->countModules('extension-1')){
        $extensions["extension1"] = '<jdoc:include type="modules" name="extension-1" style="shaz3e" />';
    }
    if($this->countModules('extension-2')){
        $extensions["extension2"] = '<jdoc:include type="modules" name="extension-2" style="shaz3e" />';
    }
    if($this->countModules('extension-3')){
        $extensions["extension3"] = '<jdoc:include type="modules" name="extension-3" style="shaz3e" />';
    }
    if($this->countModules('extension-4')){
        $extensions["extension4"] = '<jdoc:include type="modules" name="extension-4" style="shaz3e" />';
    }
    if($this->countModules('extension-5')){
        $extensions["extension5"] = '<jdoc:include type="modules" name="extension-5" style="shaz3e" />';
    }
    if($this->countModules('extension-6')){
        $extensions["extension6"] = '<jdoc:include type="modules" name="extension-6" style="shaz3e" />';
    }
if(isset($extensions)){
    $result = count($extensions);
    foreach($extensions as $extension => $name){

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