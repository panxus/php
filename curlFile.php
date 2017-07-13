<?php

class PanText{

    public function test_3(){

        $url= "http://e.cn:8080/Tests/test_2";
        $data = [
            'img_0'=>new \CurlFile('F:\wamp64\www\erp_c\Public\Images\addPic.png'),
            'img_1'=>new \CurlFile('F:\wamp64\www\erp_c\Public\Images\corner.png'),
            'img_2'=>new \CurlFile('F:\wamp64\www\erp_c\Public\Images\corner2.png'),
            'name'=>'panxu'
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERPWD, 'joe:secret' );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $return_data = curl_exec($ch);
        curl_close($ch);
        echo  $return_data;

    }

    public function test_2(){
        var_dump($_POST);
        var_dump(66);
        var_dump($_FILES);
    }
}
/**

返回示例

F:\wamp64\www\erp_c\Application\Admin\Controller\TestsController.class.php:26:
array (size=1)
  'name' => string 'panxu' (length=5)
F:\wamp64\www\erp_c\Application\Admin\Controller\TestsController.class.php:27:int 66
F:\wamp64\www\erp_c\Application\Admin\Controller\TestsController.class.php:28:
array (size=3)
  'img_0' =>
    array (size=5)
      'name' => string 'addPic.png' (length=10)
      'type' => string 'application/octet-stream' (length=24)
      'tmp_name' => string 'F:\wamp64\tmp\php267D.tmp' (length=25)
      'error' => int 0
      'size' => int 9706
  'img_1' =>
    array (size=5)
      'name' => string 'corner.png' (length=10)
      'type' => string 'application/octet-stream' (length=24)
      'tmp_name' => string 'F:\wamp64\tmp\php267E.tmp' (length=25)
      'error' => int 0
      'size' => int 3145
  'img_2' =>
    array (size=5)
      'name' => string 'corner2.png' (length=11)
      'type' => string 'application/octet-stream' (length=24)
      'tmp_name' => string 'F:\wamp64\tmp\php267F.tmp' (length=25)
      'error' => int 0
      'size' => int 1292


**/