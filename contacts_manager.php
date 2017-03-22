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
		viewContacts();
		break;
	case 2:
		newContact();
		break;
	case 3:
		searchContacts();
		break;
	case 4:
		deleteContact();
		break;
	case 5:
		exitApplication();
		break;
	}
}

// Your contacts should be saved to that same file when exiting the command line application.

// The user interface for your application must include a main menu like the following, where the user will need to enter a number between 1 and 5. ```

// function to add contacts

// View contacts.
function viewContacts()
{
	clearstatcache();
	$filename = "contacts.txt";

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	echo "-----------------------" . PHP_EOL;
	echo "Name	| Phone Number" . PHP_EOL;
	echo "-----------------------" . PHP_EOL;
	echo $contents . PHP_EOL;

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
		$correctInfo = trim(fgets(STDIN));
	} while ($correctInfo == "N" || $correctInfo == "n");

	fwrite($handle, "$firstName $lastName|$phoneNumber" . PHP_EOL);

	fclose($handle);

	mainMenu();
	
}

// Search a contact by name.
function searchContacts()
{
	echo "blah blah" . PHP_EOL;
}

// Delete an existing contact.
function deleteContact()
{
	echo "blah blah blah" . PHP_EOL;
}

// Exit. Enter an option (1, 2, 3, 4 or 5):
function exitApplication()
{
	exit();
}

mainMenu();

?>