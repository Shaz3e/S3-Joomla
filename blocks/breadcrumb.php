<?php
    if($this->countModules('breadcrumb-1')){
        $breadcrumbs["breadcrumb1"] = '<jdoc:include type="modules" name="breadcrumb-1" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-2')){
        $breadcrumbs["breadcrumb2"] = '<jdoc:include type="modules" name="breadcrumb-2" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-3')){
        $breadcrumbs["breadcrumb3"] = '<jdoc:include type="modules" name="breadcrumb-3" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-4')){
        $breadcrumbs["breadcrumb4"] = '<jdoc:include type="modules" name="breadcrumb-4" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-5')){
        $breadcrumbs["breadcrumb5"] = '<jdoc:include type="modules" name="breadcrumb-5" style="shaz3e" />';
    }
    if($this->countModules('breadcrumb-6')){
        $breadcrumbs["breadcrumb6"] = '<jdoc:include type="modules" name="breadcrumb-6" style="shaz3e" />';
    }
if(isset($breadcrumbs)){
    $result = count($breadcrumbs);
    foreach($breadcrumbs as $breadcrumb => $name){

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