<?php
    // restricted access
    defined('_JEXEC') or die;
?>
<?php
    if($this->countModules('footer-1')){
        $footers["footer1"] = '<jdoc:include type="modules" name="footer-1" style="shaz3e" />';
    }
    if($this->countModules('footer-2')){
        $footers["footer2"] = '<jdoc:include type="modules" name="footer-2" style="shaz3e" />';
    }
    if($this->countModules('footer-3')){
        $footers["footer3"] = '<jdoc:include type="modules" name="footer-3" style="shaz3e" />';
    }
    if($this->countModules('footer-4')){
        $footers["footer4"] = '<jdoc:include type="modules" name="footer-4" style="shaz3e" />';
    }
    if($this->countModules('footer-5')){
        $footers["footer5"] = '<jdoc:include type="modules" name="footer-5" style="shaz3e" />';
    }
    if($this->countModules('footer-6')){
        $footers["footer6"] = '<jdoc:include type="modules" name="footer-6" style="shaz3e" />';
    }
if(isset($footers)){
    $result = count($footers);
    foreach($footers as $footer => $name){
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