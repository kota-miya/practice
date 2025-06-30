<?php

$filePath = 'CLM.csv';
$rowData = [];

if (($handle = fopen($filePath, 'r')) !== FALSE) {
    // ヘッダー行を読み込み、キーとして使用
    $headers = fgetcsv($handle, 1000, ",");

    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $rowData[] = array_combine($headers, $row); // ヘッダーをキーとして連想配列を作成
        //var_dump($rowData);
        //echo $rowData[0]["名前"];
    }
    fclose($handle);
} else {
    echo "ファイルを開けませんでした。\n";
}
//echo $rowData[1]["名前"];
//echo "背番号" . $rowData[10]["背番号"] . "は" . $rowData[10]["名前"] . "です。";

//echo '<pre>';
//print_r($rowData);
//echo '</pre>';
