<?php
    if($this->countModules('content-top-1')){
        $modules["mod1"] = '<jdoc:include type="modules" name="content-top-1" style="shaz3e" />';
    }
    if($this->countModules('content-top-2')){
        $modules["mod2"] = '<jdoc:include type="modules" name="content-top-2" style="shaz3e" />';
    }
    if($this->countModules('content-top-3')){
        $modules["mod3"] = '<jdoc:include type="modules" name="content-top-3" style="shaz3e" />';
    }
if(isset($modules)){
    $result = count($modules);
    foreach($modules as $module => $name){
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