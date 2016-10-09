<?php
/**
 * 使用Get的方式返回：challenge和capthca_id 此方式以实现前后端完全分离的开发模式 专门实现failback
 * @author Tanxu
 */
//error_reporting(0);
namespace limx\tools;
require_once '../../src/GeetestLib.php';
if ($_GET['type'] == 'pc') {
    $GtSdk = new GeetestLib('d302b753264fec3232d348bec90eaa12', '413fa78d6a3e91c664ec4aa17db183d3');
} elseif ($_GET['type'] == 'mobile') {
    $GtSdk = new GeetestLib('d302b753264fec3232d348bec90eaa12', '413fa78d6a3e91c664ec4aa17db183d3');
}
session_start();
$user_id = "test";
$status = $GtSdk->pre_process($user_id);
$_SESSION['gtserver'] = $status;
$_SESSION['user_id'] = $user_id;
echo $GtSdk->get_response_str();
?>