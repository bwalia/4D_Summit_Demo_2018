<?php
/* ini_set('max_execution_time', 3000);
ini_set('memory_limit','1024M');*/
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);

require ('aws/aws-autoloader.php');

use Aws\S3\S3Client;

$pathToFile = '/Users/balinderwalia/Desktop/FED162733C2D9D44A45DDC1F4970C193.txt';

// Instantiate the S3 client with your AWS credentials
$s3Client = S3Client::factory(array(
    'credentials' => array(
        'key'    => 'AKIAID3E5GTXIJ4J7G3Q',
        'secret' => '4ICrmCEv/ldIalUDwKGGU1dvufHgk/aw+8vm+kzP',
    ),

    	'region'  => 'eu-west-1',
		'version'  => '2006-03-01',
		'signature_version' => 'v4'
));

// Poll the bucket until it is accessible
//$s3Client->waitUntil('BucketExists', array('Bucket' => '4d-test'));

// Upload an object to Amazon S3
try {
$result = $s3Client->putObject(array(
    'Bucket' => 'dreamfurnishings',
    'Key'    => 'images/images_data_as_txt/FED162733C2D9D44A45DDC1F4970C193.txt',
    'SourceFile' => $pathToFile,
    'ACL' => 'public-read',
    'Metadata'   => array(

'Name 1' => 'Value 1',

'Name 2' => 'Value 2'

    )
));
} catch (Aws\Exception\S3Exception $e) {
    echo "{'responseCode' : 'ERR', 'responseTxt' : 'There was an error uploading the file'}\n" . $e;
}

/*
// Upload an object by streaming the contents of a file
// $pathToFile should be absolute path to a file on disk
$result = $s3Client->putObject(array(
    'Bucket'     => '4d-test',
    'Key'        => 'data_from_file.txt',
    'SourceFile' => $pathToFile,
    'Metadata'   => array(
        'Foo' => 'abc',
        'Baz' => '123'
    )
));
*/

/*
// We can poll the object until it is accessible
$s3Client->waitUntil('ObjectExists', array(
    'Bucket' => $this->bucket,
    'Key'    => 'data_from_file.txt'
));

*/
// Access parts of the result object
//return $result; //ObjectURL

print_r($result);

?>