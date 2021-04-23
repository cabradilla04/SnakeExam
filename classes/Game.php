<?php

namespace SnakeGameExam;

class SnakeGame {
  public function __construct() {
    echo "SnakeGameTest";

    stream_set_blocking(STDIN, false);
    $stdin = fopen('php://stdin', 'r');

    readline_callback_handler_install('', function() { });
    while (true) {
      $r = array(STDIN);
      $w = NULL;
      $e = NULL;
      $n = stream_select($r, $w, $e, null);
      if ($n) {
        $char = ord(stream_get_contents(STDIN, 1));
        echo "test input: $char\n";
        readline_callback_handler_remove();
      }
    }
  }
}