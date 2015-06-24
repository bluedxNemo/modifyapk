<?php
        $token = '73d38db6ab9743a596b6a285a319bc4a';
        touch('./'.$token.'.txt');
        $zip = new ZipArchive;
	$res = $zip->open("./a.apk", ZipArchive::CREATE);
	//如果打开成功
	if ($res === TRUE) {
		$addRes = $zip->addFile('./'.$token.'.txt', 'META-INF/bdsc_'.$token);
		//如果打开失败
		if($addRes === TRUE){
			if(($zip->close ()) === TRUE){
				unlink('./'.$token.'.txt');
			}
		}else{
			echo 'fail';
		}
	}
	unlink('./'.$token.'.txt');
?>
