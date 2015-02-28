// Guess the number game
#include <iostream>
#include <ctime>
#include <stdlib.h>
#include <cstdio>
using namespace std;

int main ()
{
// Declare variables and secret number
srand (time(NULL));
int number = (rand() % 100) + 1;
int guess = 0;
int counter = 0;	
// Start game message
cout << "You have 10 attempts to guess the secret number (1-100): ";
	// Get continous input from user until number is guessed
	while (guess != number)
	{
		cin >> guess;
		// input validation
		while (guess > 100 || guess < 1)
		{
		cout << "Your guess must be a number between 1 and 100!" << endl;
		cout << "Try again: ";
		cin >> guess;
		}
		// Increase counter if input is correct
		counter++;
			// Check counter/guess and report
			if (counter <9 && number != guess)
			{ 
			cout << "You have " << 10 - counter << " attempts left." << endl;
			}
			else if (counter == 10 && guess != number)
			{
			cout << "You have reached the maximum number of attempts. Better luck next time!";
			return 0;
			}
			else if (counter == 9 && guess != number)
			{
			cout << "Warning: This is your last attempt!" << endl;
			}
			else if (counter == 1 && guess == number)
			{
			cout << "Amazing!" << endl;
			cout <<"You needed only one attempt to guess the secret number!" << endl;
			return 0;
			}
			else if (counter < 10 && guess == number)
			{
			cout << "Congratulations!" << endl;
			cout <<"You needed " << counter << " attempts to guess the secret number." << endl;
			return 0;
			}
			else
			{
			cout << "Congratulations!" << endl;
			cout << "You made it in your last attempt!" << endl;
			}
		// Give a hint if guess is wrong
		if (guess > number)
		{
		cout << "Hint: The secret number is smaller than " << guess << "." << endl;
		cout << "Try again: ";
		}
		else if (guess < number)
		{
		cout << "Hint: The secret number is bigger than " << guess << "." << endl;
		cout << "Try again: ";
		}
		else 
		{
		return 0;
		}
	}
}






















































