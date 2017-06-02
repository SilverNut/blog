<?php
class Upload{




    public function uploadFile($file,$allow,& $error,$path,$maxsize=1024*1024){
        #验证系统错误
        switch ($file['error']) {
            case 1 : $error = '上传错误,超出了文件限制大小!';
                return false;
            case 2 : $error = '上传错误,超出了浏览器表单允许的大小!';
                return false;
            case 3 : $error = '上传错误,上传文件不完整!';
                return false;
            case 4 : $error = '上传错误,请选择要上传的文件!';
                return false;
            case 6 :
            case 7 : $error = '对不起,服务器繁忙,请稍后再试!';
                return false;
        }
        #判断逻辑错误
        //1.判断文件大小是否超出限制
        if ($file['size']>$maxsize) {
            $error = "上传错误,超出了文件限制的大小了";
            return false;
        }
        //2.判断文件类型是否符合要求
        if (!in_array($file['type'], $allow)) {
            $error = "上传错误,上传的文件类型不正确,允许上传的类型有:".implode(',', $allow);
            return false;
        }


        #移动临时文件
        $newname = $this->randName($file['name']);
        $target = $path.'/'.$newname;
        $result = move_uploaded_file($file['tmp_name'], $target);
        if ($result) {
            return $newname;//上传成功
        } else {
            echo "发生未知错误,上传失败";
            return false;
        }


    }

    #生成随机文件名字 文件名 = 时间 + 随机数
    public  function randName($filename){
        //当前时间
        $newname = date('YmdHis');
        //随机字符串
        $randStr = "0123456789";
        for ($i=0; $i < 6; $i++) {
            $newname.= $randStr[mt_rand(0,strlen($randStr)-1)];
        }
        //加上后缀名
        $newname.= strrchr($filename, '.');
        return $newname;
    }

}