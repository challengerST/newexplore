<?php
header("Content-Type:text/html;charset=utf-8");
$qq = isset($_GET['qq']) ? trim($_GET['qq']) : '';
if(!$qq) {
	exit(date('Y-m-d H:i:s',time()));
}

$oop = new qq();
$json = $oop->qlogin($qq);
$arr = json_decode($json,true);
var_dump($arr);

class qq {

	public function qlogin($qq){
		$url='http://ptlogin2.qq.com/ptqrshow?qr_push_uin='.$qq.'&type=1&qr_push=1&appid=549000912&t=0.589945'.time().'&ptlang=2052&daid=5';
		$dev_mid_sig=$this->getrandnumstr(80);
		$data=$this->get_curl($url,0,'http://ptlogin2.qq.com/','dev_mid_sig='.$dev_mid_sig.';',1,0,0,1);
		if(preg_match("/ptui_qrcode_CB\((.*?)\)/", $data['body'], $match)){
			$arr=json_decode($match[1],true);
			if(array_key_exists('ec',$arr) && $arr['ec']==0){
				preg_match('/qrsig=(.*?);/',$data['header'],$match);
				if($qrsig=$match[1])
					exit('{"saveOK":0,"qrsig":"'.$qrsig.'","qrcode":"'.$arr['qrcode'].'","msg":"'.$arr['em'].'"}');
				else
					exit('{"saveOK":1,"msg":"qrsig获取失败"}');
			}else{
				exit('{"saveOK":1,"msg":"'.$arr['em'].'"}');
			}
		}else{
			exit('{"saveOK":1,"msg":"快捷登录获取失败"}');
		}
	}

    private function getrandnumstr($num)
	{
		$words = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');
		$str = "";
		for($i=0; $i<$num; $i++){
			$str .= $words[rand(0,15)];
		}
		return $str;
	}

	private function get_curl($url,$post=0,$referer=0,$cookie=0,$header=0,$ua=0,$nobaody=0,$split=0){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		$httpheader[] = "Accept:*/*";
		$httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
		$httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
		$httpheader[] = "Connection:keep-alive";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
		if($post){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		if($header){
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
		}
		if($cookie){
			curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		}
		if($referer){
			curl_setopt($ch, CURLOPT_REFERER, $referer);
		}
		if($ua){
			curl_setopt($ch, CURLOPT_USERAGENT,$ua);
		}else{
			curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36');
		}
		if($nobaody){
			curl_setopt($ch, CURLOPT_NOBODY,1);

		}
		curl_setopt($ch, CURLOPT_ENCODING, "gzip");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$ret = curl_exec($ch);
		if ($split) {
			$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
			$header = substr($ret, 0, $headerSize);
			$body = substr($ret, $headerSize);
			$ret=array();
			$ret['header']=$header;
			$ret['body']=$body;
		}
		curl_close($ch);
		return $ret;
	}
}
