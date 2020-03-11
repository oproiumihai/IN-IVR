#!/usr/bin/python

import Adafruit_DHT
import time
sensor = Adafruit_DHT.DHT11

pin = 4

while True:
 time.sleep(2)
 humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)
 if humidity is not None and temperature is not None:
     f = open("/home/mihai/script/temp.txt", "w")
     f.write("{0:0.0f}".format(temperature))
     f = open("/home/mihai/script/umid.txt", "w")
     f.write("{1:0.0f}".format(temperature, humidity))
#     print('Temp={0:0.1f}*C  Humidity={1:0.1f}%'.format(temperature, humidity))
# else:
#     print('Failed to get reading. Try again!')
