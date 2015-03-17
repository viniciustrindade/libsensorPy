'''
Created on 16/03/2015

@author: zeus
'''
from abstractclass.altitudeSensor import AltitudeSensor
from abstractclass.pressureSensor import PressureSensor
from abstractclass.temperatureSensor import TemperatureSensor
from concretesensor.bmp085Altitude import BMP085Altitude
from concretesensor.bmp085Pressure import BMP085Pressure
from concretesensor.bmp085Temperature import BMP085Temperature

class BMP085Composite(AltitudeSensor,PressureSensor,TemperatureSensor):
    '''
    classdocs
    '''


    def __init__(self):
        '''
        Constructor
        '''
        AltitudeSensor.__init__(self)
        PressureSensor.__init__(self)
        TemperatureSensor.__init__(self)
        self.__bmp085Alt = BMP085Altitude()
        self.__bmp085Press = BMP085Pressure()
        self.__bmp085Temp = BMP085Temperature()


    def setup(self):
        pass

    def getAltitude(self,seaLevelPressure):
        """Retrieve data from the input source and return an object."""
        return self.__bmp085Alt.getAltitude(seaLevelPressure)


    def getPressure(self):
        """Retrieve data from the input source and return an object."""
        return self.__bmp085Press.getPressure()

    def getTemperature(self):
        """Retrieve data from the input source and return an object."""
        return self.__bmp085Temp.getTemperature()

    def getTemperatureInFahrenheit(self):
        """Retrieve data from the input source and return an object."""
        return self.__bmp085Temp.getTemperatureInFahrenheit()


    def getTemperatureInKelvin(self):
        """Retrieve data from the input source and return an object."""
        return self.__bmp085Temp.getTemperatureInKelvin()

    def add(self,sensor):
        if ( isinstance(sensor, BMP085Altitude)):
            self.__bmp085Alt = sensor
        elif ( isinstance(sensor, BMP085Pressure)):
            self.__bmp085Press = sensor
        elif ( isinstance(sensor, BMP085Temperature)):
            self.__bmp085Temp = sensor
        else:
            assert 0, "Bad sensor creation. "
