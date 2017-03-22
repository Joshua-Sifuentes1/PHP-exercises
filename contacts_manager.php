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

	do {
		fwrite(STDOUT, "Select an option (1-5): ");
		$userInput = trim(fgets(STDIN));
	} while (!is_numeric($userInput) || ($userInput > 5) || ($userInput == 0));

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

// View contacts.
function viewContacts()
{
	echo "Hello!" . PHP_EOL;
}
// Add a new contact.
function newContact()
{
	echo "blah" . PHP_EOL;
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