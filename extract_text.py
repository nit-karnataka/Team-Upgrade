import Image
import pytesseract
from subprocess import call  
a=pytesseract.image_to_string(Image.open('text.jpg'))
print(a)
with open('done.hl7', 'a') as the_file:
    the_file.write(a.encode('utf8') + '\n')
file = "/home/pi/Dropbox-Uploader/dropbox_uploader.sh upload /home/pi/python-ocr-master/done.hl7 done.hl7"   
call ([file], shell=True) 
with open('done.txt', 'a') as the_file:
    the_file.write(a.encode('utf8') + '\n')
file1 = "/home/pi/Dropbox-Uploader/dropbox_uploader.sh upload /home/pi/python-ocr-master/done.txt done.txt"   
call ([file1], shell=True)
file2 = "/home/pi/Dropbox-Uploader/dropbox_uploader.sh upload /home/pi/python-ocr-master/test.jpg test.jpg"   
call ([file2], shell=True)
