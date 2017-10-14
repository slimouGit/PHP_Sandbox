<?php
require_once  ' HTML/QuickForm2.php ';
$form = new HTML_QuickForm2('frmTest', 'get');
 $fieldset = $form->addFieldset('TestHeader')->setLabel('Dies ist ein Test f&uuml;r QuickForm2');
 $fieldset->addElement('text', 'Eingabezeile')->setLabel('Bitte Namen eingeben:');
 $fieldset->addElement('submit', 'btnSubmit', array('value' => 'OK'));
 echo $form;
?>