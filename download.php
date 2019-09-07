<?php


 $fileName = $_GET['q'];
    
   $filePath = $_SERVER["DOCUMENT_ROOT"]."1418BECE30030/songs/".$fileName;

    if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);
        
        header("Pragma:cache");
        header("Expires: 0");
        header("Cache-Control: must-revalidate");                                                 
        header("Content-Type: audio/mpeg, audio/x-mpeg, audio/x-mpeg-3, audio/mpeg3");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);
        header("Content-Transfer-Encoding: binary");
		ob_clean();
		flush();
        readfile($filePath);                   
        header("Location:".$_GET["p"]."");
		
    }
    else {
        die('The provided file path is not valid.');
		header("Location:".$_GET["p"]."");
    }

?>