<?php

  // php -q fetchPage.php
  //
  // Fetches the URL passed to the constructor and echos it out.

  require_once('Net/Curl.php');

  $curl = & new Net_Curl('http://www.example.com');
  $result = $curl->execute();
  if (!PEAR::isError($result)) {
      echo $result."\n";
  } else {
      echo $result->getMessage()."\n";
  }
  $curl->close();

?>
