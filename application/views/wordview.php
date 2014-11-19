<?php
//    echo '<words>';
    $root = new DOMDocument;
    $rootelement = $root->createElement('words');
    $root->appendChild($rootelement);
    foreach ($words as $w) {
        $rootelement->appendChild($root->createElement('br', $w));
//        echo '<br>',$w,'</br>';
    }
//    echo '</words>';
    echo $root->saveXML();
?>