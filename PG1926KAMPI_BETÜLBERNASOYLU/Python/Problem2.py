#mail adresi doğrulama kodu
def kontrol(string):
  count = 0
  for char in string:
    if char == '@':
      count = count + 1
#count değerinin doğruluğu
  if count == 1 :
    return True
  else:
    return False

#mail adresinin doğrulama yazdırması
mail = input('Mail Adresinizi Giriniz : ')
if (kontrol(mail)==True):
      print('Mail Adresiniz Doğrudur.')
else :
      print('Mail Adresiniz Yanlıştır!!!!')