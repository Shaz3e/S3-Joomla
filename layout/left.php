<?php
    if($this->countModules('left')){
        $leftModules["left"] = '<jdoc:include type="modules" name="left" style="s3_sidebar" />';
    }
if(isset($leftModules)){
    $result = count($leftModules);
    foreach($leftModules as $leftModule => $name){
        if($result == 1){
            echo '<div class="dc-sidebar">';
            echo $name;
            echo '</div>';
        }
    }
}
?>
