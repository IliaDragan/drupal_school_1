<?php

phpinfo();

echo "output 1.";

echo "output 2.";

try {

  $a = 100 - 5;
  echo $a;
} catch(Exception $c) {
  echo "Fuck you.";
}
