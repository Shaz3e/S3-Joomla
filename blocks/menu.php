<?php
    if($this->countModules('menu-1')){
        $menus["menu1"] = '<jdoc:include type="modules" name="menu-1" style="s3_none" />';
    }
    if($this->countModules('menu-2')){
        $menus["menu2"] = '<jdoc:include type="modules" name="menu-2" style="s3_none" />';
    }
    if($this->countModules('menu-3')){
        $menus["menu3"] = '<jdoc:include type="modules" name="menu-3" style="s3_none" />';
    }
    if($this->countModules('menu-4')){
        $menus["menu4"] = '<jdoc:include type="modules" name="menu-4" style="s3_none" />';
    }
    if($this->countModules('menu-5')){
        $menus["menu5"] = '<jdoc:include type="modules" name="menu-5" style="s3_none" />';
    }
    if($this->countModules('menu-6')){
        $menus["menu6"] = '<jdoc:include type="modules" name="menu-6" style="s3_none" />';
    }
if(isset($menus)){
    $result = count($menus);
    foreach($menus as $menu => $name){

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