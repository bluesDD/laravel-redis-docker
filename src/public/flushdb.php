<?php

if(!class_exists('Redis')) return;

$redis = new Redis();

if(!$redis->connect("redis", 6379, 1000)) {
  echo "接続失敗";
  return;
}

if($redis->flushAll()) {
  echo "削除完了";
  return;
} else {
  echo "削除失敗！！";
  return;
}

?>
