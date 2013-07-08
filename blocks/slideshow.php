<?php
    if($this->countModules('slideshow-1')){
        $slideshows["slideshow1"] = '<jdoc:include type="modules" name="slideshow-1" style="shaz3e" />';
    }
    if($this->countModules('slideshow-2')){
        $slideshows["slideshow2"] = '<jdoc:include type="modules" name="slideshow-2" style="shaz3e" />';
    }
    if($this->countModules('slideshow-3')){
        $slideshows["slideshow3"] = '<jdoc:include type="modules" name="slideshow-3" style="shaz3e" />';
    }
    if($this->countModules('slideshow-4')){
        $slideshows["slideshow4"] = '<jdoc:include type="modules" name="slideshow-4" style="shaz3e" />';
    }
    if($this->countModules('slideshow-5')){
        $slideshows["slideshow5"] = '<jdoc:include type="modules" name="slideshow-5" style="shaz3e" />';
    }
    if($this->countModules('slideshow-6')){
        $slideshows["slideshow6"] = '<jdoc:include type="modules" name="slideshow-6" style="shaz3e" />';
    }
if(isset($slideshows)){
    $result = count($slideshows);
    foreach($slideshows as $slideshow => $name){

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