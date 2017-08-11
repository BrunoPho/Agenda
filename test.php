<?php

  $am1 = ['nome'=>'Guilherme', 16, 'Joinville'];
  $am2 = ['nome'=>'Mayke', 16, 'São francisco'];
  $am3 = ['nome'=>'gabriela', 16, 'São francisco'];

  $amigos = [$am1, $am2, $am3];

  foreach ($amigos as $amigo){
  	echo $amigo[0];
  	echo "\n";
  	echo $amigo[1];
  	echo "\n";
  	echo $amigo[2];
  	echo "\n";


  sleep(3);
  }