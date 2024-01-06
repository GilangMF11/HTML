<?php

// Konstan pada PHP

class Goodbye {
  const LEAVING_MESSAGE = "Ini merupakan kode untuk menerapkan konstan!" . PHP_EOL;
  // LEAVING_MESSAGE = "Ini bukan konstan";
}

echo Goodbye::LEAVING_MESSAGE;
?>