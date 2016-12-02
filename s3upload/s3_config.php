<?php
// Bucket Name
$bucket="9lessonsDemos";
if (!class_exists('S3'))require_once('S3.php');
			
//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', '7890-45330889');
if (!defined('awsSecretKey')) define('awsSecretKey', '7777777777777777777777777777777777777');
			
//instantiate the class
$s3 = new S3(awsAccessKey, awsSecretKey);

$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);

?>