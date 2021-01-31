n = 0  #döngü için gerekli sayaç
num = 0  #kullanıcının değer girebilmesi için gerekli
maxnum = 0   #maximum sayıyı bulabilmek için atılan max sayı
list = []

while n<10:  #10 tane değer alır
    num = int(input("Enter your number: "))  # kullanıcı değer girer

    if num%2 != 0:  #eğer sayı 2 ye bölünmüyorsa
        if num > maxnum: # girilen sayı maximum sayıdan büyükse
           maxnum = num   #maximum  sayı girilen sayı oluyor
    list.append(num) #listeye girilen sayılar eklendi
    print(n) # girilen sayılar yazdırılır
    n+=1  # bir sonraki index'e bakabilmesi için döngü artırılır ve bu indexler yazdırılır
print("The list of numbers you have entered = " + str(list))  #girilen sayıları listeler
print("The maximum number :",maxnum)  #Bulunan max sayı yazdırılır.