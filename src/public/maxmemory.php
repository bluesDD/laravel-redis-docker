<?php
//Redis用のモジュールが入っているか確認
if(!class_exists('Redis')) return;
        
//Redisに接続する
$redis = new Redis();

//ホスト,ポート、タイムアウト時間を設定
if(!$redis->connect("redis",6379,1000)){
    echo "接続失敗";
    return;
}

//1MB分のデータ生成
$testData = "";

$maxdata = 1*1024*1024 ;
for($i = 0; $i < $maxdata; $i++){
    $testData = $testData  . "a";
}

//1000個分のデータを書き込む
for($i = 0; $i < 700; $i++){
    $key = "key_{$i}" ;
    
    //$redis->hSet("memtest",$key ,$testData);
    $code = $redis->set($key ,$testData);
    
    //code =1以外は、書き込み失敗
    echo "追加したキー " . $key . " status:" . $code . PHP_EOL;
    
}

?>
