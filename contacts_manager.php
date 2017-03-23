<?php  

// Add 10 more contacts to your contacts.txt file.

// user input

// Your information should be retrieved from your file when the application starts.
function mainMenu()
{

	fwrite(STDOUT, "1.) View contacts." . PHP_EOL);
	fwrite(STDOUT, "2.) Create a contact" . PHP_EOL);
	fwrite(STDOUT, "3.) Search for a contact." . PHP_EOL);
	fwrite(STDOUT, "4.) Delete a contact." . PHP_EOL);
	fwrite(STDOUT, "5.) Exit" . PHP_EOL);

	optionSelected();
}

function optionSelected()
{
	do {
		fwrite(STDOUT, "Select an option (1-5): ");
		$userInput = trim(fgets(STDIN) . PHP_EOL);
	} while (!is_numeric($userInput) || ($userInput > 5) || ($userInput <= 0));

	switch ($userInput) {
	case 1:
		echo PHP_EOL;
		viewContacts();
		break;
	case 2:
		echo PHP_EOL;
		newContact();
		break;
	case 3:
		echo PHP_EOL;
		searchContacts();
		break;
	case 4:
		echo PHP_EOL;
		deleteContact();
		break;
	case 5:
		echo PHP_EOL;
		echo "Goodbye!" . PHP_EOL;
		echo PHP_EOL;
		exitApplication();
		break;
	default:
		mainMenu();
	}
}

// View contacts.
function viewContacts()
{
	$contacts = [];

	clearstatcache();
	$filename = "contacts.txt";

	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);

	$listOfContacts = explode("\n", $contents);
	foreach ($listOfContacts as $key => $contact) {
		$tempArray = explode("|", $contact);
		
		$contacts[$key]["name"] = $tempArray[0];

		$phone = substr($tempArray[1], 0, 3) . '-' . substr($tempArray[1], 3, 3) . '-' . substr($tempArray[1], 6);

		$contacts[$key]["number"] = $phone;
	}

	fwrite(STDOUT, PHP_EOL . "Name | Phone Number" . PHP_EOL . (str_pad("", 20, '-')) . PHP_EOL);
	foreach ($contacts as $key => $contact) {
		echo $contact["name"] . "|" . $contact["number"] . PHP_EOL;
	}
	echo PHP_EOL;
	mainMenu();
}
// Add a new contact.
function newContact()
{
	do {
		$filename = "contacts.txt";

		$handle = fopen($filename, "a");

		do {

		fwrite(STDOUT, "Enter the first name:" . PHP_EOL);
		$firstName = trim(fgets(STDIN));

		} while (!is_string($firstName) || $firstName == "");

		do {

		fwrite(STDOUT, "Enter the last name:" . PHP_EOL);
		$lastName = trim(fgets(STDIN));

		} while (!is_string($lastName) || $lastName == "");

		do{
			fwrite(STDOUT, "Enter the phone number:" . PHP_EOL);
			$phoneNumber = trim(fgets(STDIN));

			if (!is_numeric($phoneNumber)) {
				echo "Please enter numbers only." . PHP_EOL;
			} elseif (strlen($phoneNumber) < 10 || strlen($phoneNumber) > 10) {
				echo "Please enter the the correct 10 digit number." . PHP_EOL;
			}
		} while (!is_numeric($phoneNumber) || strlen($phoneNumber) < 10 || strlen($phoneNumber) > 10);

		fwrite(STDOUT, "Is the information correct (y/n)?" . PHP_EOL);
		fwrite(STDOUT, "$firstName $lastName|$phoneNumber" . PHP_EOL);
		$correctInfo = trim(strtolower(fgets(STDIN)));

	} while ($correctInfo == "n");

	fwrite(STDOUT, "Contact created!" . PHP_EOL);

	fwrite($handle, "$firstName $lastName|$phoneNumber" . PHP_EOL);

	fclose($handle);

	echo PHP_EOL;
	mainMenu();
	
}

// Search a contact by name.
function searchContacts()
{
	$filename = "contacts.txt";

	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);

	$tempArray = explode("\n", $contents);
	fwrite(STDOUT, "Please enter contact name: ");
	$contactName = trim(strtolower(fgets(STDIN)));

	fwrite(STDOUT, PHP_EOL . "Name | Phone Number" . PHP_EOL . (str_pad("", 20, '-')) . PHP_EOL);
	foreach ($tempArray as $key => $contact) {
		if(preg_match("($contactName)", strtolower($contact))) {
			echo $contact . PHP_EOL;
		}
		
	}

	echo PHP_EOL;
	mainMenu();

}

// Delete an existing contact.
function deleteContact()
{
	$filename = "contacts.txt";

	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);

	$tempArray = explode("\n", $contents);
	fwrite(STDOUT, "Please enter contact name to delete: ");
	$contactName = trim(strtolower(fgets(STDIN)));

	fwrite(STDOUT, PHP_EOL . "Name | Phone Number" . PHP_EOL . (str_pad("", 20, '-')) . PHP_EOL);
	foreach ($tempArray as $key => $contact) {
		if(preg_match("($contactName)", strtolower($contact))) {
			array_splice($tempArray, $key, 1);
			echo $contact . PHP_EOL;
		}
	}

	$file = implode("\n", $tempArray);

	$handle = fopen($filename, 'w');
	$contents = fwrite($handle, $file);
	fclose($handle);

	echo PHP_EOL;
	mainMenu();

}

function exitApplication()
{
	exit();
}

mainMenu();

?>