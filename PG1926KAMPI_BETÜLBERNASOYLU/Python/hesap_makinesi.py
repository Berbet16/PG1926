def cal(x, y, ops):
 	if ops not in '+-/*':
 		return 'choose operator: "+. -, /, *"'

 	if ops == '+':
 		return(str(x) + ' ' + ops + ' ' + str(y) + '=' + str(x+y))

 	if ops == '-':
 		return(str(x) + ' ' + ops + ' ' + str(y) + '=' + str(x-y))

 	if ops == '*':
 		return(str(x) + ' ' + ops + ' ' + str(y) + '=' + str(x*y))

 	if ops == '/':
 		return(str(x) + ' ' + ops + ' ' + str(y) + '=' + str(x/y))
	
 	while True:
 		x= int(input("enter the number x: "))
 		y = int(input("enter the number y:"))
 		ops = input("chooes between +, - , * , /")
		print(calc(x, y, ops))

 		