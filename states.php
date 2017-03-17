<?php  
$states = [
	'AL' => 'Alabama',
	'AK' => 'Alaska',
	'AZ' => 'Arizona',
	'AR' => 'Arkansas',
	'CA' => 'California',
	'CO' => 'Colorado',
	'CT' => 'Connecticut',
	'DE' => 'Delaware',
	'DC' => 'District of Columbia',
	'FL' => 'Florida',
	'GA' => 'Georgia',
	'HI' => 'Hawaii',
	'ID' => 'Idaho',
	'IL' => 'Illinois',
	'IN' => 'Indiana',
	'IA' => 'Iowa',
	'KS' => 'Kansas',
	'KY' => 'Kentucky',
	'LA' => 'Louisiana',
	'ME' => 'Maine',
	'MD' => 'Maryland',
	'MA' => 'Massachusetts',
	'MI' => 'Michigan',
	'MN' => 'Minnesota',
	'MS' => 'Mississippi',
	'MO' => 'Missouri',
	'MT' => 'Montana',
	'NE' => 'Nebraska',
	'NV' => 'Nevada',
	'NH' => 'New Hampshire',
	'NJ' => 'New Jersey',
	'NM' => 'New Mexico',
	'NY' => 'New York',
	'NC' => 'North Carolina',
	'ND' => 'North Dakota',
	'OH' => 'Ohio',
	'OK' => 'Oklahoma',
	'OR' => 'Oregon',
	'PA' => 'Pennsylvania',
	'PR' => 'Puerto Rico',
	'RI' => 'Rhode Island',
	'SC' => 'South Carolina',
	'SD' => 'South Dakota',
	'TN' => 'Tennessee',
	'TX' => 'Texas',
	'VI' => 'US Virgin Islands',
	'UT' => 'Utah',
	'VT' => 'Vermont',
	'VA' => 'Virginia',
	'WA' => 'Washington',
	'WV' => 'West Virginia',
	'WI' => 'Wisconsin',
	'WY' => 'Wyoming'
];

// ------------------------------------------------------------
// -
// ------------------------------------------------------------

// Outputs only the states with an "x" character in the state name
echo "All States witH the letter X:" . PHP_EOL;
echo PHP_EOL;

$letterX = 'x';

foreach($states as $key => $state){
	if (strstr($state, $letterX)){
		echo $state . PHP_EOL;
	}
}

echo PHP_EOL;

// ------------------------------------------------------------
// -
// ------------------------------------------------------------

// Outputs all the states without the letter "a" in their name
echo "All States without the letter A:" . PHP_EOL;
echo PHP_EOL;

$letterA = 'a';

foreach($states as $key => $state){
	if (!strstr($state, $letterA)){
		echo $state . PHP_EOL;
	}
}

echo PHP_EOL;

// ------------------------------------------------------------
// -
// ------------------------------------------------------------

// Outputs the states and abbreviations of all the states starting with vowels.
echo "All states that start with a vowel:" .PHP_EOL;
echo PHP_EOL;
foreach($states as $key => $state){
	if (substr($state, 0, 1) == 'A' || substr($state, 0, 1) == 'E' || substr($state, 0, 1) == 'I' || substr($state, 0, 1) == 'O' || substr($state, 0, 1) == 'U'){

		echo "$key: $state" . PHP_EOL;
	}
}

echo PHP_EOL;

// ------------------------------------------------------------
// -
// ------------------------------------------------------------

$statesStartingAndEndingWithVowels = [];
echo "States Starting and Ending with vowels:" . PHP_EOL;
echo PHP_EOL;
foreach($states as $key => $state){
	$vowelA = substr($state, 0, 1);
	$vowelE = substr($state, 0, 1);
	$vowelI = substr($state, 0, 1);
	$vowelO = substr($state, 0, 1);
	$vowelU = substr($state, 0, 1);

	$vowelSmalla = substr($state, -1, 1);
	$vowelSmalle = substr($state, -1, 1);
	$vowelSmalli = substr($state, -1, 1);
	$vowelSmallo = substr($state, -1, 1);
	$vowelSmallu = substr($state, -1, 1);


	if ( ($vowelA =='A' || $vowelE =='E' || $vowelI =='I' || $vowelO =='O' || $vowelU =='U') && ($vowelSmalla == 'a' || $vowelSmalle == 'e' || $vowelSmalli == 'i' || $vowelSmallo == 'o' || $vowelSmallu == 'u')){

		array_push($statesStartingAndEndingWithVowels, $state);

	}
}

foreach($statesStartingAndEndingWithVowels as $state) {
	echo "$state" . PHP_EOL;
}

echo PHP_EOL;

// ------------------------------------------------------------
// -
// ------------------------------------------------------------

$statesWithMoreThanOneWordNames = [];

foreach ($states as $key => $state) {
	
	if (is_int(strpos($state, " "))){

			array_push($statesWithMoreThanOneWordNames, $state);
	}
}

echo "States with more than one word names:" . PHP_EOL;
echo PHP_EOL;
foreach ($statesWithMoreThanOneWordNames as $state) {
	echo "$state" . PHP_EOL;	
}



?>