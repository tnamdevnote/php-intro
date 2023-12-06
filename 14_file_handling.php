<?php
  /** 
   * File handling is the ability to read and write files on the server.
   * PHP has built in functions for reading and writing files
   */
  $file = 'extras/example.txt';

  if(file_exists($file)) {
    $handle = fopen($file, 'r'); // declare pointer variable that reads a file.
    $contents = fread($handle, filesize($file)); // reading files based on the length fo byte size
    fclose($handle);
    echo $contents;
  } else {
    $handle = fopen($file, 'w'); // declare pointer. Open for writing only. If it does not exist, attempt to create it.
    $contents = 'Hello' . PHP_EOL . 'World' . PHP_EOL . '?';
    fwrite($handle, $contents);
    fclose($handle);
  }