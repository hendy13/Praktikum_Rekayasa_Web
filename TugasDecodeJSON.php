<?php
$json = '{"nama": "Hendy", "umur": 20, "kota": "Kendal"}';

$object = json_decode($json);

$array = json_decode($json, true);

echo "Nama (dari Object): " . $object->nama . "\n";
echo "Umur (dari Object): " . $object->umur . "\n";
echo "Kota (dari Object): " . $object->kota . "\n";

echo "Nama (dari Array): " . $array['nama'] . "\n";
echo "Umur (dari Array): " . $array['umur'] . "\n";
echo "Kota (dari Array): " . $array['kota'] . "\n";
?>