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
// $redis->rPush('list_key', 'a');
// $redis->rPush('list_key', 'b');
// $redis->lPush('list_key', 'c');
// $redis->lPush('list_key', 'd');

// 値をすべて取得する -1はすべて
$value = $redis->lRange('list_key', 0, -1);

// 表示
var_dump($value);

// セット型
$redis->sAdd('set_key', 'a', 'f', 'setdayo');

// セットを取得する
$value = $redis->sMembers('set_key');
var_dump($value);

// ソート済みセット型
$redis->zAdd('game_score', 1000, 'Yamada');
$redis->zAdd('game_score', 2000, 'Tanka');
$redis->zAdd('game_score', 5000, 'Sato');
$redis->zAdd('game_score', 3000, 'Suzuki');

// ランキングデータ表示
$ranking= $redis->zRevRange('game_score', 0, 9, true);
var_dump($ranking);

// ハッシュ型
echo 'Hash';
$redis->hSet('item_01', 'name', 'Apple');
$redis->hSet('item_01', 'price', '300円');
$redis->hSet('item_01', 'stock', 1000);
$redis->hSet('item_02', 'name', 'Pineapple');
$redis->hSet('item_02', 'price', '500円');
$redis->hSet('item_02', 'stock', 200);

// ハッシュ型の取得
echo $redis->hGet('item_01', 'name');
var_dump($redis->hGetAll('item_02'));

echo '</pre>';
?>
