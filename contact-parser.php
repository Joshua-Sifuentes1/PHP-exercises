<?php
// 	// todo - read file and parse contacts
// 	$file = 'contacts.txt';
// 	$handle = fopen($file, 'r');
// 	$contacts = fread($handle, filesize($file));

// 	$contacts = trim($contacts);

// function parseContacts($filename)
// {
// 	$contacts = [];

// 	$contacts = explode("\n", $filename);

// 	foreach($contacts as $key => $contactInformation) {
// 		$emptyArray = [];
// 		$contactInformation = explode("|", $contactInformation);

// 		foreach ($contactInformation as $key => $value) {

// 			if ($key == 0) {
// 				$emptyArray["Name"] = $value;
// 			} else {
// 				$emptyArray["Number"] = $value;
// 			}

// 		}

// 		$contacts[$person] = $emptyArray;

// 	}

// 	print_r($contacts);
	
// 	return $contacts;
// }

// var_dump(parseContacts($file));


// instructor example

function parseContacts($filename) 
{
	$contacts = [];

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
// important. Do not forget to close the file. So data is not lost. 
	fclose($handle);
// converts string from filename to an array.
	$listOfContacts = explode("\n", $contents);
	foreach ($listOfContacts as $key => $contact) {
		$tempArray = explode("|", $contact);
		$contacts[$key]["name"] = $tempArray[0];

		$phone = substr($tempArray[1], 0, 3) . '-' . substr($tempArray[1], 3, 3) . '-' . substr($tempArray[1], 6);

		$contacts[$key]["number"] = $phone;
	}

	return $contacts;
}

print_r(parseContacts('contacts.txt'));














