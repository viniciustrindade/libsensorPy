'''
Created on 08/02/2015

@author: zeus
'''
import abc
from abstractclass.sensor import Sensor

class UltrasonicSensor(Sensor):
    '''
    classdocs
    '''
    __metaclass__ = abc.ABCMeta
    
      
    def __init__(self):
        '''
        Constructor
        '''
        Sensor.__init__(self)
        
    @staticmethod
    def getSensor(sensorType):
        pass

    @abc.abstractmethod
    def measure(sensor):
        """Retrieve data from the input source and return an object."""
        pass
