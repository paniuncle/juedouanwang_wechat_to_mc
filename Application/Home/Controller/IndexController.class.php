<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$code = $_GET['code'];
		$base_userinfo = file_get_contents('https://api.weixin.qq.com/sns/oauth2/access_token'.$code.'&grant_type=authorization_code');
		$decode_base_userinfo = json_decode($base_userinfo, true);
		$more_userinfo = file_get_contents('https://api.weixin.qq.com/sns/userinfo?access_token='.$decode_base_userinfo['access_token'].'&openid='.$decode_base_userinfo['openid'].'&lang=zh_CN');
		$end_userinfo = json_decode($more_userinfo, true);
		$this->assign('openid',$end_userinfo['openid']);
        $this->display();
    }
	public function binding(){
		$openid = I('get.openid');
		$me = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?a=msg&openid='.$openid;
		$sso_secret = '';
		$discourse_url = 'https://ygobbs.com';
		if(!empty($_GET) and isset($_GET['sso'])){
			$sso = $_GET['sso'];
			$sig = $_GET['sig'];

			// validate sso
			if(hash_hmac('sha256', urldecode($sso), $sso_secret) !== $sig){
				header("HTTP/1.1 404 Not Found");
				die();
			}


			$sso = urldecode($sso);
			$query = array();
			parse_str(base64_decode($sso), $query);

			// login user
			set_key('login', $query);
			header("Access-Control-Allow-Origin: *");
			die();
		}
		$info = '';
		// user is logged on
		$nonce = hash('sha512', mt_rand());
		$payload =  base64_encode( http_build_query( array (
			'nonce' => $nonce,
			'return_sso_url' => $me
			)
		) );
		$request = array(
			'sso' => $payload,
			'sig' => hash_hmac('sha256', $payload, $sso_secret )
			);
		$query = http_build_query($request);

		echo "<meta http-equiv='refresh' content='0;url=$discourse_url/session/sso_provider?$query'>";

	}
	public function msg(){
			$a=base64_decode($_GET['sso']);
			$a=urldecode($a);
			parse_str($a,$b);
			$openid = I('get.openid');
			$username = $b['username'];
			$User = M("user"); // 实例化User对象
			$data['mycardid'] = $username;
			$data['openid'] = $openid;
			$User->data($data)->add();
			$this->display();
	}
}