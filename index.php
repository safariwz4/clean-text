<?php
function cleanText($text) {
    $text = strip_tags($text); 
    $text = htmlspecialchars($text); 
    $text  = trim($text); 
    htmlentities($text); 
    return $text; 
}
$str = "<p>\"Lorem ipsum is\" a placeholder text commonly used to demonstrate the visual form of a document or a typeface</p>"; 
$cleanedText = cleanText(str); 
echo $cleanedText; 
?> 