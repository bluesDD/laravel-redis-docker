<?php 
$redis = new Redis();
$redis->connect('redis', 6379);
echo '<pre class="log">';
echo 'Redis接続' . PHP_EOL;
echo $redis->ping() . PHP_EOL;

// string_keyというkey  にhugaという値をセット
$redis->set('string_key', 'huga');
// 値を取得する
$value = $redis->get('string_key');
// 表示
echo $value . PHP_EOL; // huga

// lPushは先頭、rPushは末尾に値をpush
$redis->rPush('list_key', 'a');
$redis->rPush('list_key', 'b');
$redis->lPush('list_key', 'c');
$redis->lPush('list_key', 'd');

// 値をすべて取得する -1はすべて
$value = $redis->lRange('list_key', 0, -1);

// 表示
var_dump($value);
echo '</pre>';
?>
