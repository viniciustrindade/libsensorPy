'''
Created on 11/02/2015

@author: zeus
'''

from abstractclass.abstractSensorFactory import AbstractSensorFactory
from concretesensor.dht11Temperature import DHT11Temperature

class TemperatureSensorFactory(AbstractSensorFactory):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
    @staticmethod
    def createSensor(sensorType):
        if (sensorType == "DHT11Temperature"):
            return DHT11Temperature()
        elif(sensorType == "DHT22"):
            return DHT11Temperature()
        else:
            ''' assert 0, "Bad sensor creation: " + type '''
            ''' retornando dht11 por default, por enquanto'''
            return DHT11Temperature()

    @staticmethod
    def createEvent(sensorType):
        pass
