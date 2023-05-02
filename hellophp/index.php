<?php
    $emailinput = 'trantuan16042003@gmail.com';
    $endEmail = strstr($emailinput, '@');

    $userName = str_replace($endEmail,'',$emailinput);
  $strInput = 'Hoc lap trinh tai unicode';
  $endstr = substr($strInput, -5);
  echo $endstr;