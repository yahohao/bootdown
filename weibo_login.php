<?php
session_start();

include_once( 'lib/sina_weibo/config.php' );
include_once( 'lib/sina_weibo/saetv2.ex.class.php' );
include_once( 'lib/sina_weibo/weibo_orx.class.php' );
$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
    $keys = array();
    $keys['code'] = $_REQUEST['code'];
    $keys['redirect_uri'] = WB_CALLBACK_URL;
    try {
        $token = $o->getAccessToken( 'code', $keys ) ;
    } catch (OAuthException $e) {
    }
}

if ($token) {
    $_SESSION['token'] = $token;
    setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
    ?>
    授权完成,<a href="weibolist.php">进入你的微博列表页面</a><br />
    <?php  var_dump($token);

    $lo = new weibo_token($token);
    echo $lo->get_uid();

    ?>
<?php
} else {
    ?>
    授权失败。
<?php
}
?>
