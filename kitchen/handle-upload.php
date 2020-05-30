<?php
if( isset($_POST) )
{
    $data = $_POST;
    $uploadDir = '/var/www/html/kitchen/printerdata/';

    foreach($data as $row)
    {
        // Save uploaded file
        file_put_contents(
            $uploadDir. $row['fileName'],
            base64_decode($row['fileData'])
        );

        $str = "\n\nPost, handlePost ".date('Y-m-d H:i')."============\n";
        updateLog($str);
    }
}

// 
function updateLog($str)
{
	$fileName = 'log-handle-upload.txt';
	$filePath = dirname(__DIR__).'/kitchen/';

	$fp = fopen($filePath.$fileName, 'a');
	fwrite($fp, print_r($str, true));
	fclose($fp);
}
?>
