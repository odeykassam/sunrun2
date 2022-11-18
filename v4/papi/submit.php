<?php
header( 'Content-type: application/json' );

$email                   = $_POST['email_address'];
$firstName               = $_POST['first_name'];
$lastName                = $_POST['last_name'];
$fullAddress             = $_POST['full_address'];
$phone                   = $_POST['phone_home'];
$interestedInElectric    = $_POST['interested_in_solar_electric'];
$interestedInHotWater    = $_POST['interested_in_solar_hot_water'];
$interestedInPoolHeating = $_POST['interested_in_solar_pool_heating'];
$street                  = $_POST['street_number'];
$country                 = $_POST['country'];
$postalCode              = $_POST['postal_code'];
$provider                = $_POST['utility_provider'];
$propertyOwnership       = $_POST['property_ownership'];
$roofShade               = $_POST['roof_shade'];
$bill                    = $_POST['electric_bill'];
$tag                     = $_POST['tag'];

$apiPayload                = [
	'email'     => $email,
	'firstName' => $firstName,
	'lastName'  => $lastName,
	'phone'     => $phone,
	'country'   => $country,
	'name'      => sprintf( '%s %s', $firstName, $lastName ),
	'address1'  => $fullAddress,

	'postalCode' => $postalCode
];
$customsFields             = [
	'B3GKqU2XFgdhb8siAteJ' => $propertyOwnership,
	'kHeujw6yVJ9xmKX6Bov9' => $provider,
	'O2IUfZPmaPtmlHBGlKQO' => $bill,
	'tMePGVaTrWbFjYLYFJ3z' => $roofShade

];
$apiPayload['customField'] = $customsFields;
if ( $tag ) {
	$apiPayload['tags'] = [ $tag ];
}

$curl = curl_init();

curl_setopt_array( $curl, [
	CURLOPT_URL            => "https://rest.gohighlevel.com/v1/contacts/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING       => "",
	CURLOPT_MAXREDIRS      => 10,
	CURLOPT_TIMEOUT        => 30,
	CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST  => "POST",
	CURLOPT_POSTFIELDS     => json_encode( $apiPayload ),
	CURLOPT_HTTPHEADER     => [
		"Authorization: Bearer 86943f3a-46ad-4b32-8865-5311b4b93ac1",
		"Content-Type: application/json"
	],
] );

$response = curl_exec( $curl );
$err      = curl_error( $curl );

curl_close( $curl );

if ( $err ) {
	echo "cURL Error #:" . $err;
	die();
}
echo json_encode( [ 'code' => 200, 'body' => true, 'tag' => $tag ] );
die();