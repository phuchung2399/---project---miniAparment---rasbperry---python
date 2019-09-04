import RPi.GPIO as GPIO
import time

channel = 17
GPIO.setmode(GPIO.BCM)
GPIO.setup(channel, GPIO.IN)

def callback(channel):
         if GPIO.input(channel):
		GPIO.setmode(GPIO.BCM)
                GPIO.setwarnings(False)
                GPIO.setup(18,GPIO.OUT)
                GPIO.output(18,GPIO.HIGH)
		time.sleep(0.1)
                GPIO.output(18,GPIO.LOW)
		time.sleep(0.1)
		print "dong dat"
         else:
                print "dong dat"
GPIO.add_event_detect(channel, GPIO.BOTH, bouncetime=300)
GPIO.add_event_callback(channel, callback)
while True:
     time.sleep(1)
