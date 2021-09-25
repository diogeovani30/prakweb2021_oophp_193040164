<?php

// define('NAMA', 'Aji');
// echo NAMA;

// echo '<br>';

// const UMUR = 20;
// echo UMUR;

//define tidak dapat disimpan di dalam kelas, disimpan diluar sebagai konstanta global.

// class Coba
// {
//   const NAMA = 'Dio';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba(){
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
