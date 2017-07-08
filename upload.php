<?php
/**
 * 文件上传
 * $Author: Eno $
 * $Id: upload.php 2017-07-08 01:29:08 Z caoyangyang $
 */
    if ($_FILES['file']['name'] != "") {
        /**可限制上传文件大小**/
        // if ($_FILES['file']['size'] > 10240000) {
        //     $joson['success'] = false;
        //     $joson['message'] = '文件不能超过10M';
        //     echo json_encode($joson);exit;
        // }
        /**可限制上传文件格式**/
        // $type = $_FILES['file']['type'];
        // if ($type != "image/gif" && $type != "image/jpeg" && $type != "image/pjpeg" && $type != "image/jpg" && $type != "image/png") {
        //     $joson['success'] = false;
        //     $joson['message'] = '图片格式不对';
        //     echo json_encode($joson);exit;
        // }
        $type = strstr($_FILES['file']['name'], '.');
        $rand = rand(100, 9999);
        $dir = date("YmdHis") . $rand . $type;
         /**上传文件地址**/
        $file = "./uploads/".date("Y");
        if(!file_exists($file)){
            mkdir($file);
            chmod($file,0777);
        }
        $file = $file.'/'.date("m");
        if(!file_exists($file)){
            mkdir($file);
            chmod($file,0777);
        }
        $file = $file.'/'.$dir;
        move_uploaded_file($_FILES['file']['tmp_name'], $file);
        /**图片类型可以压缩处理**/
        //image_png_size_add($file,$file);
        /**文件地址**/
        // $ = $file; 
         /**上传成功后处理方法**/
        // $joson['success'] = true;
        // $joson['file'] = $path;
        // echo json_encode($joson);exit;
    }else{
        echo '上传失败';exit;
    }
    // file_put_contents("log.txt", "json信息：".var_export( $_FILES,TRUE)."\n", FILE_APPEND);
    ?>