<?php
    header("content-Type:text/html;charset=utf-8");
    // 关闭报错
    error_reporting(0);
//上传文件类型列表
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

$picname=array(
    'jpg',
    'jpeg',
    'png',
    'pjpeg',
    'gif',
    'bmp',
    'x-png'
);

$max_file_size=2000000;     //上传文件大小限制, 单位BYTE
$destination_folder="../image/"; //上传文件路径
$imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);
$imgpreviewsize=1/2;    //缩略图比例
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // if (!is_uploaded_file($_FILES["upfile"]))
    // 是否存在文件
    // {
    //      echo "图片不存在!";
    //      exit;
    // }
    $file = $_FILES["upfile"];
    if ($_POST['sub1']) {
        $lastname = substr(strrchr($file['name'], '.'), 1);
       for ($i=0; $i < 7 ; $i++) {
            if (file_exists("../image/1.".$picname[$i])) {
                 unlink("../image/1.".$picname[$i]);
            }
        }
        $file['name']="1.".$lastname;
    }

    if ($_POST['sub2']) {
        $lastname = substr(strrchr($file['name'], '.'), 1);
       for ($i=0; $i < 7 ; $i++) {
            if (file_exists("../image/2.".$picname[$i])) {
                 unlink("../image/2.".$picname[$i]);
            }
        }
        $file['name']="2.".$lastname;
    }

    if ($_POST['sub3']) {
        $lastname = substr(strrchr($file['name'], '.'), 1);
       for ($i=0; $i < 7 ; $i++) {
            if (file_exists("../image/3.".$picname[$i])) {
                 unlink("../image/3.".$picname[$i]);
            }
        }
        $file['name']="3.".$lastname;
    }


    if($max_file_size < $file["size"])
    //检查文件大小
    {
        echo "文件太大!";
        exit;
    }

    if(!in_array($file["type"], $uptypes))
    //检查文件类型
    {
        echo "文件类型不符!".$file["type"];
        exit;
    }

    if(!file_exists($destination_folder))
    {
        mkdir($destination_folder);
    }

    $filename=$file["tmp_name"];
    $image_size = getimagesize($filename);
    $pinfo=pathinfo($file["name"]);
    $ftype=$pinfo['extension'];
    // $destination = $destination_folder.time().".".$ftype;
     $destination =$destination_folder.$file['name'];
    if (file_exists($destination) && $overwrite != true)
    {
        echo "同名文件已经存在了";
        exit;
    }

    if(!move_uploaded_file ($filename, $destination))
    {
        echo "移动文件出错";
        exit;
    }

    if($imgpreview==1)
    {
    //echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
   // echo " alt=\"图片预览\">";
   // echo '<script>setTimeout(function(){window.location.assign("../manage.php")},3000);</script> ';
        echo '<script>alert("上传成功！！'.$destination.'");window.location.assign("../manage.php");</script> ';
    }else{
        echo '<script>alert("上传失败！！")</script> ';
    }
}
?>
