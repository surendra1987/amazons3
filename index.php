<form action="page.php" method="post" enctype="multipart/form-data">
  <input name="theFile" type="file" />
  <input name="Submit" type="submit" value="Upload">
</form>

<?php
// Get the contents of our bucket
//$bucket_contents = $s3->getBucket("jurgens-nettuts-tutorial");
// 
//foreach ($bucket_contents as $file){
// 
//    $fname = $file['name'];
//    $furl = "http://jurgens-nettuts-tutorial.s3.amazonaws.com/".$fname;
//     
//    //output a link to the file
//    echo "<a href=\"$furl\">$fname</a><br />";
//}
?>