<?php

function drawOne($numberOfRrows, $symbol)
{
  //$i=$numberOfRows;
   for ($row=8;$row>=1;$row--){
     for($i=$row;$i>0;$i--){
       echo($symbol);
     }
     echo("\n");
   }
   echo("\n");
}

function drawTwo($numberOfRrows, $symbol)
{
  //$i=$numberOfRows;
   for ($row=1;$row<=8;$row++){
     for($i=$row;$i>0;$i--){
       echo($symbol);
     }
     echo("\n");
   }
   echo("\n");
}

function drawThree($numberOfRows, $symbol)
{
  $m = array(array());
  for ($row=1;$row<=4;$row++){
    $m[$row-1] = array((8-$row*2)/2,$row*2,(8-$row*2)/2);
  }
}

drawOne(8,"#");
drawTwo(8,"#");
drawThree(8,"#");
