#!/usr/bin/python
import sys
import Adafruit_DHT
humidity, temperature = Adafruit_DHT.read_retry(11, 4)
u='{1:0.1f} '.format(temperature, humidity)
print u
