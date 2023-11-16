<?php
$bilanganacak=rand(1,4);
echo '<img src="images/'.$bilanganacak.'.jpg" width="100px" height="100px">';
echo '<audio controls autoplay>
       <source src="mp3/'.$bilanganacak.'.mp3" type="audio/mpeg"></audio>';
?>