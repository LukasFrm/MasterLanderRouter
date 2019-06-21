<?php 

//echo "string"; die;

$query = trim($_SERVER['REQUEST_URI'], '/');

//echo $query; die;

$curl_h = curl_init('162.253.42.186/randomlander/get/' . $query);

// curl_setopt($curl_h, CURLOPT_HTTPHEADER,
//     array(
//         'User-Agent: NoBrowser v0.1 beta',
//     )
// );

# do not output, but store to variable
curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl_h);

$httpcode = curl_getinfo($curl_h, CURLINFO_HTTP_CODE);
// echo $httpcode; die;

if ($httpcode === 404) {
	die("<h1 style='text-align:center'>404 Not Found</h1>");
} 

$landerData = json_decode($response);


// echo $response; die;

$template =  $landerData->template->name;

// var_dump($template); die;

switch ($template) {
	case 'base':
		require_once 'base/index.php';
		break;
	case 'imgbackgroundtemp':
		require_once 'imgbackgroundtemp/index.php';
		break;
	case 'scratch':
		require_once 'scratch/index.php';
		break;	
	default:
		require_once 'base/index.php';
		break;
}

?>