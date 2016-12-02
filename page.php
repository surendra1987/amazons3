<?php
ini_set('display_errors', 'On');
//include the S3 class              
if (!class_exists('S3'))require_once('S3.php');
 

//AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAIIN36VQPBJLYRZRQ');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');
 
//instantiate the class
//$s3 = new S3(array('key'=>awsAccessKey, 'secret'=>awsSecretKey, 'signature' => 'v4', 'region'=>'eu-central-1'));
$s3 = new S3(awsAccessKey, awsSecretKey, 'v4');
 
//we'll continue our script from here in step 4!
 //check whether a form was submitted
if(isset($_POST['Submit'])){
 
    //retreive post variables
    $fileName = $_FILES['theFile']['name'];
    $fileTempName = $_FILES['theFile']['tmp_name'];
     
    //we'll continue our script from here in the next step!
    //create a new bucket
  $s3->putBucket("ballistic", S3::ACL_PUBLIC_READ);
 
//move the file
if ($s3->putObjectFile($fileTempName, "ballistic", $fileName, S3::ACL_PUBLIC_READ)) {
    echo "We successfully uploaded your file.";
}else{
    echo "Something went wrong while uploading your file... sorry.";
}
}