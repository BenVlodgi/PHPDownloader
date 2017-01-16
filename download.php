

<?php

//Create lookup list of code, sourcefilename, outputfilename
$files = array
(
//  the code for download | the filepath to download     | the filename that is downloaded
    'Wooooooott' => array('downloads\woot.zip'          , 'pictures-woot.zip')
   ,'hallo'      => array('downloads\annoyingperson.zip', 'pictures-2017.zip')
   ,'crisscross' => array('downloads\cc.zip'            , 'pictures-cc.zip'  )
   ,'guidelines' => array('downloads\guidelines.pdf'    , 'rules.pdf'        )
);

// Get the code parameter
$code = $_GET['code'];

// If the code exists, download the file
if (array_key_exists($code,$files))
{
    $sourcefilename = $files[$code][0];
    $outputfilename = $files[$code][1];
    
    // Define the content type of the downloading file.
    // This uses the sourcefile type, so hopefully the outputfile type matches
    header('Content-type: ' . mime_content_type($sourcefilename));
    
    // Define the download's name
    header('Content-Disposition: attachment; filename="' . $outputfilename . '"');
    
    // Choose the source
    readfile($sourcefilename);
}
else
{
    echo 'No code with that value';
}

?> 