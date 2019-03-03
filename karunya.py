from picamera import PiCamera
from time import sleep
import os 
camera = PiCamera()
camera.start_preview()
sleep(10)
camera.capture('/home/pi/python-ocr-master/test.jpg')
sleep(10)
camera.stop_preview()

print("processing")
os.system('python process_image.py test.jpg text.jpg')
sleep(5)
os.system('python extract_text.py')
print("Completed")