name  = input("enter name: ")
print("hello " + name + " time to play hagnman!")

secret_word ="METALLİCA"

guess_string = ""

lives=10

while lives>10:
	character_left = 0
	for character in secret_word:
		if character in guess_string:
			print(character)
		else:
			print("-")
			character_left += 1
	if character_left == 0:
		print("you won")
		break

	guess = input("guess a word:")
	guess_string += guess

	if guess not in secret_word:
		lives=-1
		print("wrong")
		print(f"you have {lives} left")

	if lives == 0:
		print("you died")
		