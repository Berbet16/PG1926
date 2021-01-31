#continue kullanmamızın amacı 3 e geldiğinde fizz yazsa da devamında 3 gösteriyor fakat eğer continue
#kullanırsak 3 ü atlayarak sıradaki sayıya devam ediyor.

# 1-100 arasındaki sayılar için
for number in range(1, 100):
    #ilk 15 i yazıyor çünkü program ilk yazılana bakıyor , ben en sonda yazdım önce olmayınca başa aldım :)
    if (number % 3 == 0 and number % 5 == 0): 
        print("FizzBuzz")                                         
        continue

    #3'e bölünen sayılar için
    elif number % 3 == 0:
        print("Fizz")
        continue

    #5'e bölünenler
    elif number % 5 == 0:
        print("Buzz")
        continue

    #sayıları yazdırıyoruz
    print(number)