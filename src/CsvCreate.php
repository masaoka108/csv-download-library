<?php namespace Okamok\CsvDownloadLibrary;

class CsvCreate {

    public static function getCsvData($data, $csvHeader, $fileName)
    {

         // CSV出力
         array_unshift($data, $csvHeader);
         $stream = fopen('php://temp', 'r+b');
         foreach ($data as $user) {

             if (!is_array($user)) {
                 // StdClassとなっているのでArryaに変換
                 $user = (array) $user;
             }

             fputcsv($stream, $user);
         }
         rewind($stream);
         $csv = str_replace(PHP_EOL, "\r\n", stream_get_contents($stream));
         $csv = mb_convert_encoding($csv, 'SJIS-win', 'UTF-8');
         $headers = array(
             'Content-Type' => 'text/csv',
             'Content-Disposition' => 'attachment; filename="'.$fileName.'"',
         );

         return ['csv' => $csv, 'headers' => $headers];
    }

    public static function testFunc() {
        return 'test-stringをreturnします。';
    }
}
