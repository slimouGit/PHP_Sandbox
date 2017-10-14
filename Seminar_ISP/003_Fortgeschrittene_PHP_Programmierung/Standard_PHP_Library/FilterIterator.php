<?php
class CapitalTextIterator extends FilterIterator
 {
     public function accept()
     {
         $letter = $this->getInnerIterator()->current();
         return ereg("/[A-Z]/", $letter);
     }
 }

 $text = "Internet Programmierung";
 $textIterator = new CapitalTextIterator(new TextIterator($text));
 $textExporter = new TextExporter();

 foreach ($textIterator as $textPosition => $textPart) {
     //exportiert Zeichen als Grafik mit der Position als Name
     $textExporter->exportCharacterToPicture($textPosition, $textPart);
 }
?>