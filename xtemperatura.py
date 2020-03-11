#!/usr/bin/python
import sys
import Adafruit_DHT
humidity, temperature = Adafruit_DHT.read_retry(11, 4)
print '{0:0.1f} '.format(temperature)
