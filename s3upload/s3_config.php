<?php
// Bucket Name
ini_set('display_errors', 'On');
$bucket="ballistic";
if (!class_exists('S3'))require_once('S3.php');
			
//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAIIN36VQPBJLYRZRQ');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');
			
//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey, 'v4');

$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>