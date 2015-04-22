<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.concretesensor.dht22Humidity</title>
  <link rel="stylesheet" href="<?=$siteUrl?>/css/epydoc.css" type="text/css" />
  <script type="text/javascript" src"<?=$siteUrl?>/js/epydoc.js"></script>
</head>

<body bgcolor="white" text="black" link="blue" vlink="#204080"
      alink="#204080">
<!-- ==================== NAVIGATION BAR ==================== -->
<table class="navbar" border="0" width="100%" cellpadding="0"
       bgcolor="#a0c0ff" cellspacing="0">
  <tr valign="middle">
  <!-- Home link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="libsensorPy-module.html">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.html">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.html">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.html">Help</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Project homepage -->
      <th class="navbar" align="right" width="100%">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr><th class="navbar" align="center"
            >libsensorPy</th>
          </tr></table></th>
  </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td width="100%">
      <span class="breadcrumbs">
        <a href="libsensorPy-module.html">Package&nbsp;libsensorPy</a> ::
        <a href="libsensorPy.concretesensor-module.html">Package&nbsp;concretesensor</a> ::
        Module&nbsp;dht22Humidity
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.concretesensor.dht22Humidity-pysrc.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.concretesensor.dht22Humidity-module.html">Module libsensorPy.concretesensor.dht22Humidity</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno">  1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno">  2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 16/03/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno">  3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno">  4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno">  5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno">  6</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">RPi</tt><tt class="py-op">.</tt><tt class="py-name">GPIO</tt> <tt class="py-keyword">as</tt> <tt class="py-name">GPIO</tt> </tt>
<a name="L7"></a><tt class="py-lineno">  7</tt>  <tt class="py-line"><tt class="py-keyword">from</tt> <tt id="link-0" class="py-name" targets="Package libsensorPy.abstractclass=libsensorPy.abstractclass-module.html"><a title="libsensorPy.abstractclass" class="py-name" href="#" onclick="return doclink('link-0', 'abstractclass', 'link-0');">abstractclass</a></tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Module libsensorPy.abstractclass.humiditySensor=libsensorPy.abstractclass.humiditySensor-module.html"><a title="libsensorPy.abstractclass.humiditySensor" class="py-name" href="#" onclick="return doclink('link-1', 'humiditySensor', 'link-1');">humiditySensor</a></tt> <tt class="py-keyword">import</tt> <tt id="link-2" class="py-name" targets="Class libsensorPy.abstractclass.humiditySensor.HumiditySensor=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.html"><a title="libsensorPy.abstractclass.humiditySensor.HumiditySensor" class="py-name" href="#" onclick="return doclink('link-2', 'HumiditySensor', 'link-2');">HumiditySensor</a></tt> </tt>
<a name="L8"></a><tt class="py-lineno">  8</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">atexit</tt> </tt>
<a name="L9"></a><tt class="py-lineno">  9</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">pigpio</tt> </tt>
<a name="L10"></a><tt class="py-lineno"> 10</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">time</tt> </tt>
<a name="L11"></a><tt class="py-lineno"> 11</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity"></a><div id="DHT22Humidity-def"><a name="L12"></a><tt class="py-lineno"> 12</tt> <a class="py-toggle" href="#" id="DHT22Humidity-toggle" onclick="return toggle('DHT22Humidity');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html">DHT22Humidity</a><tt class="py-op">(</tt><tt class="py-base-class">HumiditySensor</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity-collapsed" style="display:none;" pad="+++" indent="++++"></div><div id="DHT22Humidity-expanded"><a name="L13"></a><tt class="py-lineno"> 13</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L14"></a><tt class="py-lineno"> 14</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L15"></a><tt class="py-lineno"> 15</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L16"></a><tt class="py-lineno"> 16</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity.__init__"></a><div id="DHT22Humidity.__init__-def"><a name="L17"></a><tt class="py-lineno"> 17</tt> <a class="py-toggle" href="#" id="DHT22Humidity.__init__-toggle" onclick="return toggle('DHT22Humidity.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity.__init__-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT22Humidity.__init__-expanded"><a name="L18"></a><tt class="py-lineno"> 18</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L19"></a><tt class="py-lineno"> 19</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L20"></a><tt class="py-lineno"> 20</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L21"></a><tt class="py-lineno"> 21</tt>  <tt class="py-line">        <tt id="link-3" class="py-name"><a title="libsensorPy.abstractclass.humiditySensor.HumiditySensor" class="py-name" href="#" onclick="return doclink('link-3', 'HumiditySensor', 'link-2');">HumiditySensor</a></tt><tt class="py-op">.</tt><tt id="link-4" class="py-name" targets="Method libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__()=libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory-class.html#__init__,Method libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__()=libsensorPy.abstractclass.abstractEvent.AbstractEvent-class.html#__init__,Method libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__()=libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory-class.html#__init__,Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#__init__,Method libsensorPy.abstractclass.actuator.Actuator.__init__()=libsensorPy.abstractclass.actuator.Actuator-class.html#__init__,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.html#__init__,Method libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__()=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.html#__init__,Method libsensorPy.abstractclass.eventObserver.EventObserver.__init__()=libsensorPy.abstractclass.eventObserver.EventObserver-class.html#__init__,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.html#__init__,Method libsensorPy.abstractclass.lightSensor.LightSensor.__init__()=libsensorPy.abstractclass.lightSensor.LightSensor-class.html#__init__,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.html#__init__,Method libsensorPy.abstractclass.motionSensor.MotionSensor.__init__()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.html#__init__,Method libsensorPy.abstractclass.motorActuator.MotorActuator.__init__()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.html#__init__,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.html#__init__,Method libsensorPy.abstractclass.sensor.Sensor.__init__()=libsensorPy.abstractclass.sensor.Sensor-class.html#__init__,Method libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__()=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.html#__init__,Method libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__()=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.html#__init__,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.html#__init__,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.html#__init__,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.html#__init__,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.html#__init__,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.html#__init__,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.html#__init__,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.html#__init__,Method libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__()=libsensorPy.concreteevent.temperatureEvent.TemperatureEvent-class.html#__init__,Method libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__()=libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__()=libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__()=libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__()=libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory-class.html#__init__,Method libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__()=libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__()=libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__()=libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__()=libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__()=libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory-class.html#__init__,Method libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__()=libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory-class.html#__init__,Method libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__()=libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory-class.html#__init__,Method libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__()=libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay-class.html#__init__,Method libsensorPy.concretesensor.adxl345.ADXL345.__init__()=libsensorPy.concretesensor.adxl345.ADXL345-class.html#__init__,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.html#__init__,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.html#__init__,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.html#__init__,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.html#__init__,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.html#__init__,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__init__,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.html#__init__,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.html#__init__,Method libsensorPy.concretesensor.hysrf05.HYSRF05.__init__()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.html#__init__,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.html#__init__,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.html#__init__,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.html#__init__,Method libsensorPy.concretesensor.pir.PIR.__init__()=libsensorPy.concretesensor.pir.PIR-class.html#__init__,Method libsensorPy.concretesensor.srf04.SRF04.__init__()=libsensorPy.concretesensor.srf04.SRF04-class.html#__init__,Method libsensorPy.concretesensor.srf05.SRF05.__init__()=libsensorPy.concretesensor.srf05.SRF05-class.html#__init__,Method libsensorPy.concretesensor.tcs34725.TCS34725.__init__()=libsensorPy.concretesensor.tcs34725.TCS34725-class.html#__init__,Method libsensorPy.concretesensor.urm37.URM37.__init__()=libsensorPy.concretesensor.urm37.URM37-class.html#__init__,Method libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__()=libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory-class.html#__init__,Method libsensorPy.extension.hcsr04.HCSR04.__init__()=libsensorPy.extension.hcsr04.HCSR04-class.html#__init__,Method libsensorPy.utils.pycomms.PyComms.__init__()=libsensorPy.utils.pycomms.PyComms-class.html#__init__"><a title="libsensorPy.abstractclass.abstractActuatorFactory.AbstractActuatorFactory.__init__
libsensorPy.abstractclass.abstractEvent.AbstractEvent.__init__
libsensorPy.abstractclass.abstractSensorFactory.AbstractSensorFactory.__init__
libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__init__
libsensorPy.abstractclass.actuator.Actuator.__init__
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__init__
libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__init__
libsensorPy.abstractclass.eventObserver.EventObserver.__init__
libsensorPy.abstractclass.humiditySensor.HumiditySensor.__init__
libsensorPy.abstractclass.lightSensor.LightSensor.__init__
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__init__
libsensorPy.abstractclass.motionSensor.MotionSensor.__init__
libsensorPy.abstractclass.motorActuator.MotorActuator.__init__
libsensorPy.abstractclass.pressureSensor.PressureSensor.__init__
libsensorPy.abstractclass.sensor.Sensor.__init__
libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__init__
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__init__
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__init__
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__init__
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.__init__
libsensorPy.compositesensor.dht11Composite.DHT11Composite.__init__
libsensorPy.compositesensor.dht22Composite.DHT22Composite.__init__
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.__init__
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.__init__
libsensorPy.concreteevent.temperatureEvent.TemperatureEvent.__init__
libsensorPy.concretefactory.accelerometerSensorFactory.AccelerometerSensorFactory.__init__
libsensorPy.concretefactory.altitudeSensorFactory.AltitudeSensorFactory.__init__
libsensorPy.concretefactory.compositeSensorFactory.CompositeSensorFactory.__init__
libsensorPy.concretefactory.humiditySensorFactory.HumididtySensorFactory.__init__
libsensorPy.concretefactory.lightSensorFactory.LightSensorFactory.__init__
libsensorPy.concretefactory.magnetometerSensorFactory.MagnetometerSensorFactory.__init__
libsensorPy.concretefactory.motionSensorFactory.MotionSensorFactory.__init__
libsensorPy.concretefactory.pressureSensorFactory.PressureSensorFactory.__init__
libsensorPy.concretefactory.stepperMotorActuatorFactory.StepperMotorActuatorFactory.__init__
libsensorPy.concretefactory.temperatureSensorFactory.TemperatureSensorFactory.__init__
libsensorPy.concretefactory.ultrasonicSensorFactory.UltrasonicSensorFactory.__init__
libsensorPy.concreteobserver.currentConditionDisplay.CurrentConditionDisplay.__init__
libsensorPy.concretesensor.adxl345.ADXL345.__init__
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.__init__
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.__init__
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.__init__
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.__init__
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.__init__
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__init__
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__init__
libsensorPy.concretesensor.hmc5883l.HMC5883L.__init__
libsensorPy.concretesensor.hysrf05.HYSRF05.__init__
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.__init__
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.__init__
libsensorPy.concretesensor.parallaxPing.ParallaxPing.__init__
libsensorPy.concretesensor.pir.PIR.__init__
libsensorPy.concretesensor.srf04.SRF04.__init__
libsensorPy.concretesensor.srf05.SRF05.__init__
libsensorPy.concretesensor.tcs34725.TCS34725.__init__
libsensorPy.concretesensor.urm37.URM37.__init__
libsensorPy.extension.extendedUltrasonicSensorFactory.ExtendedUltrasonicSensorFactory.__init__
libsensorPy.extension.hcsr04.HCSR04.__init__
libsensorPy.utils.pycomms.PyComms.__init__" class="py-name" href="#" onclick="return doclink('link-4', '__init__', 'link-4');">__init__</a></tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">)</tt> </tt>
<a name="L22"></a><tt class="py-lineno"> 22</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-5" class="py-name" targets="Method libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup()=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#setup,Method libsensorPy.abstractclass.actuator.Actuator.setup()=libsensorPy.abstractclass.actuator.Actuator-class.html#setup,Method libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup()=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.html#setup,Method libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup()=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.html#setup,Method libsensorPy.abstractclass.lightSensor.LightSensor.setup()=libsensorPy.abstractclass.lightSensor.LightSensor-class.html#setup,Method libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup()=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.html#setup,Method libsensorPy.abstractclass.motionSensor.MotionSensor.setup()=libsensorPy.abstractclass.motionSensor.MotionSensor-class.html#setup,Method libsensorPy.abstractclass.motorActuator.MotorActuator.setup()=libsensorPy.abstractclass.motorActuator.MotorActuator-class.html#setup,Method libsensorPy.abstractclass.pressureSensor.PressureSensor.setup()=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.html#setup,Method libsensorPy.abstractclass.sensor.Sensor.setup()=libsensorPy.abstractclass.sensor.Sensor-class.html#setup,Method libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup()=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.html#setup,Method libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup()=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.html#setup,Method libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup()=libsensorPy.compositesensor.bmp085Composite.BMP085Composite-class.html#setup,Method libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup()=libsensorPy.compositesensor.dht11Composite.DHT11Composite-class.html#setup,Method libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup()=libsensorPy.compositesensor.dht22Composite.DHT22Composite-class.html#setup,Method libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup()=libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite-class.html#setup,Method libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup()=libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48-class.html#setup,Method libsensorPy.concretesensor.adxl345.ADXL345.setup()=libsensorPy.concretesensor.adxl345.ADXL345-class.html#setup,Method libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup()=libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude-class.html#setup,Method libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup()=libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure-class.html#setup,Method libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup()=libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature-class.html#setup,Method libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup()=libsensorPy.concretesensor.dht11Humidity.DHT11Humidity-class.html#setup,Method libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup()=libsensorPy.concretesensor.dht11Temperature.DHT11Temperature-class.html#setup,Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#setup,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.html#setup,Method libsensorPy.concretesensor.hmc5883l.HMC5883L.setup()=libsensorPy.concretesensor.hmc5883l.HMC5883L-class.html#setup,Method libsensorPy.concretesensor.hysrf05.HYSRF05.setup()=libsensorPy.concretesensor.hysrf05.HYSRF05-class.html#setup,Method libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup()=libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer-class.html#setup,Method libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup()=libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer-class.html#setup,Method libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup()=libsensorPy.concretesensor.parallaxPing.ParallaxPing-class.html#setup,Method libsensorPy.concretesensor.pir.PIR.setup()=libsensorPy.concretesensor.pir.PIR-class.html#setup,Method libsensorPy.concretesensor.srf04.SRF04.setup()=libsensorPy.concretesensor.srf04.SRF04-class.html#setup,Method libsensorPy.concretesensor.srf05.SRF05.setup()=libsensorPy.concretesensor.srf05.SRF05-class.html#setup,Method libsensorPy.concretesensor.tcs34725.TCS34725.setup()=libsensorPy.concretesensor.tcs34725.TCS34725-class.html#setup,Method libsensorPy.concretesensor.urm37.URM37.setup()=libsensorPy.concretesensor.urm37.URM37-class.html#setup,Method libsensorPy.extension.hcsr04.HCSR04.setup()=libsensorPy.extension.hcsr04.HCSR04-class.html#setup,Module libsensorPy.setup=libsensorPy.setup-module.html"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.setup
libsensorPy.abstractclass.actuator.Actuator.setup
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.setup
libsensorPy.abstractclass.humiditySensor.HumiditySensor.setup
libsensorPy.abstractclass.lightSensor.LightSensor.setup
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.setup
libsensorPy.abstractclass.motionSensor.MotionSensor.setup
libsensorPy.abstractclass.motorActuator.MotorActuator.setup
libsensorPy.abstractclass.pressureSensor.PressureSensor.setup
libsensorPy.abstractclass.sensor.Sensor.setup
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.setup
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.setup
libsensorPy.compositesensor.bmp085Composite.BMP085Composite.setup
libsensorPy.compositesensor.dht11Composite.DHT11Composite.setup
libsensorPy.compositesensor.dht22Composite.DHT22Composite.setup
libsensorPy.compositesensor.lsm303dComposite.LSM303DComposite.setup
libsensorPy.concreteactuator.stepper28BJY48.Stepper28BJY48.setup
libsensorPy.concretesensor.adxl345.ADXL345.setup
libsensorPy.concretesensor.bmp085Altitude.BMP085Altitude.setup
libsensorPy.concretesensor.bmp085Pressure.BMP085Pressure.setup
libsensorPy.concretesensor.bmp085Temperature.BMP085Temperature.setup
libsensorPy.concretesensor.dht11Humidity.DHT11Humidity.setup
libsensorPy.concretesensor.dht11Temperature.DHT11Temperature.setup
libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.setup
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.setup
libsensorPy.concretesensor.hmc5883l.HMC5883L.setup
libsensorPy.concretesensor.hysrf05.HYSRF05.setup
libsensorPy.concretesensor.lsm303dAccelerometer.LSM303DAccelerometer.setup
libsensorPy.concretesensor.lsm303dMagnetometer.LSM303DMagnetometer.setup
libsensorPy.concretesensor.parallaxPing.ParallaxPing.setup
libsensorPy.concretesensor.pir.PIR.setup
libsensorPy.concretesensor.srf04.SRF04.setup
libsensorPy.concretesensor.srf05.SRF05.setup
libsensorPy.concretesensor.tcs34725.TCS34725.setup
libsensorPy.concretesensor.urm37.URM37.setup
libsensorPy.extension.hcsr04.HCSR04.setup
libsensorPy.setup" class="py-name" href="#" onclick="return doclink('link-5', 'setup', 'link-5');">setup</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div><a name="L23"></a><tt class="py-lineno"> 23</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity.setup"></a><div id="DHT22Humidity.setup-def"><a name="L24"></a><tt class="py-lineno"> 24</tt> <a class="py-toggle" href="#" id="DHT22Humidity.setup-toggle" onclick="return toggle('DHT22Humidity.setup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#setup">setup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity.setup-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT22Humidity.setup-expanded"><a name="L25"></a><tt class="py-lineno"> 25</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L26"></a><tt class="py-lineno"> 26</tt>  <tt class="py-line"><tt class="py-docstring">        Setup the board and GPIO  </tt> </tt>
<a name="L27"></a><tt class="py-lineno"> 27</tt>  <tt class="py-line"><tt class="py-docstring">        @return: void</tt> </tt>
<a name="L28"></a><tt class="py-lineno"> 28</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L29"></a><tt class="py-lineno"> 29</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">setmode</tt><tt class="py-op">(</tt><tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">BCM</tt><tt class="py-op">)</tt> </tt>
<a name="L30"></a><tt class="py-lineno"> 30</tt>  <tt class="py-line">        <tt class="py-name">GPIO</tt><tt class="py-op">.</tt><tt class="py-name">setwarnings</tt><tt class="py-op">(</tt><tt class="py-name">False</tt><tt class="py-op">)</tt> </tt>
<a name="L31"></a><tt class="py-lineno"> 31</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt> <tt class="py-op">=</tt> <tt class="py-number">23</tt> </tt>
<a name="L32"></a><tt class="py-lineno"> 32</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__data</tt> <tt class="py-op">=</tt> <tt class="py-op">[</tt><tt class="py-op">]</tt> </tt>
<a name="L33"></a><tt class="py-lineno"> 33</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__crc</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L34"></a><tt class="py-lineno"> 34</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__humidity</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L35"></a><tt class="py-lineno"> 35</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__temperature</tt> <tt class="py-op">=</tt> <tt class="py-string">""</tt> </tt>
<a name="L36"></a><tt class="py-lineno"> 36</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">cb</tt> <tt class="py-op">=</tt> <tt class="py-name">None</tt> </tt>
<a name="L37"></a><tt class="py-lineno"> 37</tt>  <tt class="py-line"> </tt>
<a name="L38"></a><tt class="py-lineno"> 38</tt>  <tt class="py-line">        <tt class="py-name">atexit</tt><tt class="py-op">.</tt><tt class="py-name">register</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-6" class="py-name" targets="Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__cancel()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__cancel,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__cancel()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.html#__cancel"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__cancel
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__cancel" class="py-name" href="#" onclick="return doclink('link-6', '__cancel', 'link-6');">__cancel</a></tt><tt class="py-op">)</tt> </tt>
<a name="L39"></a><tt class="py-lineno"> 39</tt>  <tt class="py-line"> </tt>
<a name="L40"></a><tt class="py-lineno"> 40</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_CS</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> <tt class="py-comment"># Bad checksum count.</tt> </tt>
<a name="L41"></a><tt class="py-lineno"> 41</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_SM</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> <tt class="py-comment"># Short message count.</tt> </tt>
<a name="L42"></a><tt class="py-lineno"> 42</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_MM</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> <tt class="py-comment"># Missing message count.</tt> </tt>
<a name="L43"></a><tt class="py-lineno"> 43</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_SR</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> <tt class="py-comment"># Sensor reset count.</tt> </tt>
<a name="L44"></a><tt class="py-lineno"> 44</tt>  <tt class="py-line"> </tt>
<a name="L45"></a><tt class="py-lineno"> 45</tt>  <tt class="py-line">        <tt class="py-comment"># Power cycle if timeout &gt; MAX_TIMEOUTS.</tt> </tt>
<a name="L46"></a><tt class="py-lineno"> 46</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">no_response</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L47"></a><tt class="py-lineno"> 47</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">MAX_NO_RESPONSE</tt> <tt class="py-op">=</tt> <tt class="py-number">2</tt> </tt>
<a name="L48"></a><tt class="py-lineno"> 48</tt>  <tt class="py-line"> </tt>
<a name="L49"></a><tt class="py-lineno"> 49</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">rhum</tt> <tt class="py-op">=</tt> <tt class="py-op">-</tt><tt class="py-number">999</tt> </tt>
<a name="L50"></a><tt class="py-lineno"> 50</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">temp</tt> <tt class="py-op">=</tt> <tt class="py-op">-</tt><tt class="py-number">999</tt> </tt>
<a name="L51"></a><tt class="py-lineno"> 51</tt>  <tt class="py-line"> </tt>
<a name="L52"></a><tt class="py-lineno"> 52</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tov</tt> <tt class="py-op">=</tt> <tt class="py-name">None</tt> </tt>
<a name="L53"></a><tt class="py-lineno"> 53</tt>  <tt class="py-line"> </tt>
<a name="L54"></a><tt class="py-lineno"> 54</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">high_tick</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L55"></a><tt class="py-lineno"> 55</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">=</tt> <tt class="py-number">40</tt> </tt>
<a name="L56"></a><tt class="py-lineno"> 56</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt> <tt class="py-op">=</tt> <tt class="py-name">pigpio</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L57"></a><tt class="py-lineno"> 57</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">set_pull_up_down</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-name">pigpio</tt><tt class="py-op">.</tt><tt class="py-name">PUD_OFF</tt><tt class="py-op">)</tt> </tt>
<a name="L58"></a><tt class="py-lineno"> 58</tt>  <tt class="py-line"> </tt>
<a name="L59"></a><tt class="py-lineno"> 59</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">set_watchdog</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt> <tt class="py-comment"># Kill any watchdogs.</tt> </tt>
<a name="L60"></a><tt class="py-lineno"> 60</tt>  <tt class="py-line"> </tt>
<a name="L61"></a><tt class="py-lineno"> 61</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">cb</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">callback</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-name">pigpio</tt><tt class="py-op">.</tt><tt class="py-name">EITHER_EDGE</tt><tt class="py-op">,</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-7" class="py-name" targets="Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__cb()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__cb,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__cb()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.html#__cb"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__cb
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__cb" class="py-name" href="#" onclick="return doclink('link-7', '__cb', 'link-7');">__cb</a></tt><tt class="py-op">)</tt> </tt>
</div><a name="L62"></a><tt class="py-lineno"> 62</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity.changeSetup"></a><div id="DHT22Humidity.changeSetup-def"><a name="L63"></a><tt class="py-lineno"> 63</tt> <a class="py-toggle" href="#" id="DHT22Humidity.changeSetup-toggle" onclick="return toggle('DHT22Humidity.changeSetup');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#changeSetup">changeSetup</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">pin</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity.changeSetup-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT22Humidity.changeSetup-expanded"><a name="L64"></a><tt class="py-lineno"> 64</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L65"></a><tt class="py-lineno"> 65</tt>  <tt class="py-line"><tt class="py-docstring">        @param pin: the GPIO pin used to wire the sensor.</tt> </tt>
<a name="L66"></a><tt class="py-lineno"> 66</tt>  <tt class="py-line"><tt class="py-docstring">        @return: void</tt> </tt>
<a name="L67"></a><tt class="py-lineno"> 67</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L68"></a><tt class="py-lineno"> 68</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt> <tt class="py-op">=</tt> <tt class="py-name">pin</tt> </tt>
</div><a name="L69"></a><tt class="py-lineno"> 69</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity.__cb"></a><div id="DHT22Humidity.__cb-def"><a name="L70"></a><tt class="py-lineno"> 70</tt> <a class="py-toggle" href="#" id="DHT22Humidity.__cb-toggle" onclick="return toggle('DHT22Humidity.__cb');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__cb">__cb</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">pin</tt><tt class="py-op">,</tt> <tt class="py-param">level</tt><tt class="py-op">,</tt> <tt class="py-param">tick</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity.__cb-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT22Humidity.__cb-expanded"><a name="L71"></a><tt class="py-lineno"> 71</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L72"></a><tt class="py-lineno"> 72</tt>  <tt class="py-line"><tt class="py-docstring">        Accumulate the 40 data bits.  Format into 5 bytes, humidity high,</tt> </tt>
<a name="L73"></a><tt class="py-lineno"> 73</tt>  <tt class="py-line"><tt class="py-docstring">        humidity low, temperature high, temperature low, checksum.</tt> </tt>
<a name="L74"></a><tt class="py-lineno"> 74</tt>  <tt class="py-line"><tt class="py-docstring">        @param pin: the pin used to read data</tt> </tt>
<a name="L75"></a><tt class="py-lineno"> 75</tt>  <tt class="py-line"><tt class="py-docstring">        @type pin: int8</tt> </tt>
<a name="L76"></a><tt class="py-lineno"> 76</tt>  <tt class="py-line"><tt class="py-docstring">        @param level: the level</tt> </tt>
<a name="L77"></a><tt class="py-lineno"> 77</tt>  <tt class="py-line"><tt class="py-docstring">        @type level: int8</tt> </tt>
<a name="L78"></a><tt class="py-lineno"> 78</tt>  <tt class="py-line"><tt class="py-docstring">        @param tick: Tick used to diff</tt> </tt>
<a name="L79"></a><tt class="py-lineno"> 79</tt>  <tt class="py-line"><tt class="py-docstring">        @type tick: int8</tt> </tt>
<a name="L80"></a><tt class="py-lineno"> 80</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L81"></a><tt class="py-lineno"> 81</tt>  <tt class="py-line">       </tt>
<a name="L82"></a><tt class="py-lineno"> 82</tt>  <tt class="py-line">        <tt class="py-name">diff</tt> <tt class="py-op">=</tt> <tt class="py-name">pigpio</tt><tt class="py-op">.</tt><tt class="py-name">tickDiff</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">high_tick</tt><tt class="py-op">,</tt> <tt class="py-name">tick</tt><tt class="py-op">)</tt> </tt>
<a name="L83"></a><tt class="py-lineno"> 83</tt>  <tt class="py-line"> </tt>
<a name="L84"></a><tt class="py-lineno"> 84</tt>  <tt class="py-line">        <tt class="py-keyword">if</tt> <tt class="py-name">level</tt> <tt class="py-op">==</tt> <tt class="py-number">0</tt><tt class="py-op">:</tt> </tt>
<a name="L85"></a><tt class="py-lineno"> 85</tt>  <tt class="py-line">            <tt class="py-comment"># Edge length determines if bit is 1 or 0.</tt> </tt>
<a name="L86"></a><tt class="py-lineno"> 86</tt>  <tt class="py-line">            <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">diff</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">50</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L87"></a><tt class="py-lineno"> 87</tt>  <tt class="py-line">                <tt class="py-name">val</tt> <tt class="py-op">=</tt> <tt class="py-number">1</tt> </tt>
<a name="L88"></a><tt class="py-lineno"> 88</tt>  <tt class="py-line">                <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">diff</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">200</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># Bad bit?</tt> </tt>
<a name="L89"></a><tt class="py-lineno"> 89</tt>  <tt class="py-line">                    <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">CS</tt> <tt class="py-op">=</tt> <tt class="py-number">256</tt>  <tt class="py-comment"># Force bad checksum.</tt> </tt>
<a name="L90"></a><tt class="py-lineno"> 90</tt>  <tt class="py-line">            <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L91"></a><tt class="py-lineno"> 91</tt>  <tt class="py-line">                <tt class="py-name">val</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L92"></a><tt class="py-lineno"> 92</tt>  <tt class="py-line">            <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">40</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># Message complete.</tt> </tt>
<a name="L93"></a><tt class="py-lineno"> 93</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">=</tt> <tt class="py-number">40</tt> </tt>
<a name="L94"></a><tt class="py-lineno"> 94</tt>  <tt class="py-line">            <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">32</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># In checksum byte.</tt> </tt>
<a name="L95"></a><tt class="py-lineno"> 95</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">CS</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">CS</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">val</tt> </tt>
<a name="L96"></a><tt class="py-lineno"> 96</tt>  <tt class="py-line">                <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">==</tt> <tt class="py-number">39</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L97"></a><tt class="py-lineno"> 97</tt>  <tt class="py-line">                    <tt class="py-comment"># 40th bit received.</tt> </tt>
<a name="L98"></a><tt class="py-lineno"> 98</tt>  <tt class="py-line">                    <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">set_watchdog</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt> </tt>
<a name="L99"></a><tt class="py-lineno"> 99</tt>  <tt class="py-line">                    <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">no_response</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L100"></a><tt class="py-lineno">100</tt>  <tt class="py-line">                    <tt class="py-name">total</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hH</tt> <tt class="py-op">+</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hL</tt> <tt class="py-op">+</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">+</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tL</tt> </tt>
<a name="L101"></a><tt class="py-lineno">101</tt>  <tt class="py-line">                    <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-op">(</tt><tt class="py-name">total</tt> <tt class="py-op">&amp;</tt> <tt class="py-number">255</tt><tt class="py-op">)</tt> <tt class="py-op">==</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">CS</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># Is checksum ok?</tt> </tt>
<a name="L102"></a><tt class="py-lineno">102</tt>  <tt class="py-line">                        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">rhum</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hH</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hL</tt><tt class="py-op">)</tt> <tt class="py-op">*</tt> <tt class="py-number">0.1</tt> </tt>
<a name="L103"></a><tt class="py-lineno">103</tt>  <tt class="py-line">                        <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">&amp;</tt> <tt class="py-number">128</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># Negative temperature.</tt> </tt>
<a name="L104"></a><tt class="py-lineno">104</tt>  <tt class="py-line">                            <tt class="py-name">mult</tt> <tt class="py-op">=</tt> <tt class="py-op">-</tt><tt class="py-number">0.1</tt> </tt>
<a name="L105"></a><tt class="py-lineno">105</tt>  <tt class="py-line">                            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">&amp;</tt> <tt class="py-number">127</tt> </tt>
<a name="L106"></a><tt class="py-lineno">106</tt>  <tt class="py-line">                        <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L107"></a><tt class="py-lineno">107</tt>  <tt class="py-line">                            <tt class="py-name">mult</tt> <tt class="py-op">=</tt> <tt class="py-number">0.1</tt> </tt>
<a name="L108"></a><tt class="py-lineno">108</tt>  <tt class="py-line">                        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">temp</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tL</tt><tt class="py-op">)</tt> <tt class="py-op">*</tt> <tt class="py-name">mult</tt> </tt>
<a name="L109"></a><tt class="py-lineno">109</tt>  <tt class="py-line">                        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tov</tt> <tt class="py-op">=</tt> <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">time</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L110"></a><tt class="py-lineno">110</tt>  <tt class="py-line">                    <tt class="py-keyword">else</tt><tt class="py-op">:</tt> </tt>
<a name="L111"></a><tt class="py-lineno">111</tt>  <tt class="py-line">                        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_CS</tt> <tt class="py-op">+=</tt> <tt class="py-number">1</tt> </tt>
<a name="L112"></a><tt class="py-lineno">112</tt>  <tt class="py-line">            <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">24</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># in temp low byte</tt> </tt>
<a name="L113"></a><tt class="py-lineno">113</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tL</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tL</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">val</tt> </tt>
<a name="L114"></a><tt class="py-lineno">114</tt>  <tt class="py-line">            <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">16</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># in temp high byte</tt> </tt>
<a name="L115"></a><tt class="py-lineno">115</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">val</tt> </tt>
<a name="L116"></a><tt class="py-lineno">116</tt>  <tt class="py-line">            <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># in humidity low byte</tt> </tt>
<a name="L117"></a><tt class="py-lineno">117</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hL</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hL</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">val</tt> </tt>
<a name="L118"></a><tt class="py-lineno">118</tt>  <tt class="py-line">            <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&gt;=</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># in humidity high byte</tt> </tt>
<a name="L119"></a><tt class="py-lineno">119</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hH</tt> <tt class="py-op">=</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hH</tt> <tt class="py-op">&lt;&lt;</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt> <tt class="py-op">+</tt> <tt class="py-name">val</tt> </tt>
<a name="L120"></a><tt class="py-lineno">120</tt>  <tt class="py-line">            <tt class="py-keyword">else</tt><tt class="py-op">:</tt>  <tt class="py-comment"># header bits</tt> </tt>
<a name="L121"></a><tt class="py-lineno">121</tt>  <tt class="py-line">                <tt class="py-keyword">pass</tt> </tt>
<a name="L122"></a><tt class="py-lineno">122</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">+=</tt> <tt class="py-number">1</tt> </tt>
<a name="L123"></a><tt class="py-lineno">123</tt>  <tt class="py-line">        <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">level</tt> <tt class="py-op">==</tt> <tt class="py-number">1</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L124"></a><tt class="py-lineno">124</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">high_tick</tt> <tt class="py-op">=</tt> <tt class="py-name">tick</tt> </tt>
<a name="L125"></a><tt class="py-lineno">125</tt>  <tt class="py-line">            <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">diff</tt> <tt class="py-op">&gt;</tt> <tt class="py-number">250000</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L126"></a><tt class="py-lineno">126</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">=</tt> <tt class="py-op">-</tt><tt class="py-number">2</tt> </tt>
<a name="L127"></a><tt class="py-lineno">127</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hH</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L128"></a><tt class="py-lineno">128</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">hL</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L129"></a><tt class="py-lineno">129</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tH</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L130"></a><tt class="py-lineno">130</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">tL</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L131"></a><tt class="py-lineno">131</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">CS</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L132"></a><tt class="py-lineno">132</tt>  <tt class="py-line">        <tt class="py-keyword">else</tt><tt class="py-op">:</tt>  <tt class="py-comment"># level == pigpio.TIMEOUT:</tt> </tt>
<a name="L133"></a><tt class="py-lineno">133</tt>  <tt class="py-line">            <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">set_watchdog</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt> </tt>
<a name="L134"></a><tt class="py-lineno">134</tt>  <tt class="py-line">            <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&lt;</tt> <tt class="py-number">8</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># Too few data bits received.</tt> </tt>
<a name="L135"></a><tt class="py-lineno">135</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_MM</tt> <tt class="py-op">+=</tt> <tt class="py-number">1</tt>  <tt class="py-comment"># Bump missing message count.</tt> </tt>
<a name="L136"></a><tt class="py-lineno">136</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">no_response</tt> <tt class="py-op">+=</tt> <tt class="py-number">1</tt> </tt>
<a name="L137"></a><tt class="py-lineno">137</tt>  <tt class="py-line">                <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">no_response</tt> <tt class="py-op">&gt;</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">MAX_NO_RESPONSE</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L138"></a><tt class="py-lineno">138</tt>  <tt class="py-line">                    <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">no_response</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L139"></a><tt class="py-lineno">139</tt>  <tt class="py-line">                    <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_SR</tt> <tt class="py-op">+=</tt> <tt class="py-number">1</tt>  <tt class="py-comment"># Bump sensor reset count.</tt> </tt>
<a name="L140"></a><tt class="py-lineno">140</tt>  <tt class="py-line">            <tt class="py-keyword">elif</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bit</tt> <tt class="py-op">&lt;</tt> <tt class="py-number">39</tt><tt class="py-op">)</tt><tt class="py-op">:</tt>  <tt class="py-comment"># Short message receieved.</tt> </tt>
<a name="L141"></a><tt class="py-lineno">141</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">bad_SM</tt> <tt class="py-op">+=</tt> <tt class="py-number">1</tt>  <tt class="py-comment"># Bump short message count.</tt> </tt>
<a name="L142"></a><tt class="py-lineno">142</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">no_response</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
<a name="L143"></a><tt class="py-lineno">143</tt>  <tt class="py-line">            <tt class="py-keyword">else</tt><tt class="py-op">:</tt>  <tt class="py-comment"># Full message received.</tt> </tt>
<a name="L144"></a><tt class="py-lineno">144</tt>  <tt class="py-line">                <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">no_response</tt> <tt class="py-op">=</tt> <tt class="py-number">0</tt> </tt>
</div><a name="L145"></a><tt class="py-lineno">145</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity.getHumidity"></a><div id="DHT22Humidity.getHumidity-def"><a name="L146"></a><tt class="py-lineno">146</tt> <a class="py-toggle" href="#" id="DHT22Humidity.getHumidity-toggle" onclick="return toggle('DHT22Humidity.getHumidity');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#getHumidity">getHumidity</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity.getHumidity-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT22Humidity.getHumidity-expanded"><a name="L147"></a><tt class="py-lineno">147</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L148"></a><tt class="py-lineno">148</tt>  <tt class="py-line"><tt class="py-docstring">        Gets the humidity from the sensor</tt> </tt>
<a name="L149"></a><tt class="py-lineno">149</tt>  <tt class="py-line"><tt class="py-docstring">        @return: The humidity read</tt> </tt>
<a name="L150"></a><tt class="py-lineno">150</tt>  <tt class="py-line"><tt class="py-docstring">        @rtype: float</tt> </tt>
<a name="L151"></a><tt class="py-lineno">151</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L152"></a><tt class="py-lineno">152</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-8" class="py-name" targets="Method libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger()=libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__trigger,Method libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger()=libsensorPy.concretesensor.dht22Temperature.DHT22Temperature-class.html#__trigger"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__trigger
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__trigger" class="py-name" href="#" onclick="return doclink('link-8', '__trigger', 'link-8');">__trigger</a></tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L153"></a><tt class="py-lineno">153</tt>  <tt class="py-line">        <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">sleep</tt><tt class="py-op">(</tt><tt class="py-number">0.2</tt><tt class="py-op">)</tt> </tt>
<a name="L154"></a><tt class="py-lineno">154</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">cb</tt> <tt class="py-op">=</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">callback</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-name">pigpio</tt><tt class="py-op">.</tt><tt class="py-name">EITHER_EDGE</tt><tt class="py-op">,</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt id="link-9" class="py-name"><a title="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity.__cb
libsensorPy.concretesensor.dht22Temperature.DHT22Temperature.__cb" class="py-name" href="#" onclick="return doclink('link-9', '__cb', 'link-7');">__cb</a></tt><tt class="py-op">)</tt> </tt>
<a name="L155"></a><tt class="py-lineno">155</tt>  <tt class="py-line">        <tt class="py-keyword">return</tt> <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">rhum</tt> </tt>
</div><a name="L156"></a><tt class="py-lineno">156</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity.__trigger"></a><div id="DHT22Humidity.__trigger-def"><a name="L157"></a><tt class="py-lineno">157</tt> <a class="py-toggle" href="#" id="DHT22Humidity.__trigger-toggle" onclick="return toggle('DHT22Humidity.__trigger');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__trigger">__trigger</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity.__trigger-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT22Humidity.__trigger-expanded"><a name="L158"></a><tt class="py-lineno">158</tt>  <tt class="py-line">        <tt class="py-docstring">"""Trigger a new relative humidity and temperature reading."""</tt> </tt>
<a name="L159"></a><tt class="py-lineno">159</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">write</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-name">pigpio</tt><tt class="py-op">.</tt><tt class="py-name">LOW</tt><tt class="py-op">)</tt> </tt>
<a name="L160"></a><tt class="py-lineno">160</tt>  <tt class="py-line">        <tt class="py-name">time</tt><tt class="py-op">.</tt><tt class="py-name">sleep</tt><tt class="py-op">(</tt><tt class="py-number">0.017</tt><tt class="py-op">)</tt> <tt class="py-comment"># 17 ms</tt> </tt>
<a name="L161"></a><tt class="py-lineno">161</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">set_mode</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-name">pigpio</tt><tt class="py-op">.</tt><tt class="py-name">INPUT</tt><tt class="py-op">)</tt> </tt>
<a name="L162"></a><tt class="py-lineno">162</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">set_watchdog</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-number">200</tt><tt class="py-op">)</tt> </tt>
</div><a name="L163"></a><tt class="py-lineno">163</tt>  <tt class="py-line"> </tt>
<a name="DHT22Humidity.__cancel"></a><div id="DHT22Humidity.__cancel-def"><a name="L164"></a><tt class="py-lineno">164</tt> <a class="py-toggle" href="#" id="DHT22Humidity.__cancel-toggle" onclick="return toggle('DHT22Humidity.__cancel');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.concretesensor.dht22Humidity.DHT22Humidity-class.html#__cancel">__cancel</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="DHT22Humidity.__cancel-collapsed" style="display:none;" pad="+++" indent="++++++++"></div><div id="DHT22Humidity.__cancel-expanded"><a name="L165"></a><tt class="py-lineno">165</tt>  <tt class="py-line">      <tt class="py-docstring">"""Cancel the DHT22 sensor."""</tt> </tt>
<a name="L166"></a><tt class="py-lineno">166</tt>  <tt class="py-line"> </tt>
<a name="L167"></a><tt class="py-lineno">167</tt>  <tt class="py-line">      <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">set_watchdog</tt><tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">__pin</tt><tt class="py-op">,</tt> <tt class="py-number">0</tt><tt class="py-op">)</tt> </tt>
<a name="L168"></a><tt class="py-lineno">168</tt>  <tt class="py-line">      <tt class="py-keyword">if</tt> <tt class="py-op">(</tt><tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">cb</tt> <tt class="py-op">!=</tt> <tt class="py-name">None</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
<a name="L169"></a><tt class="py-lineno">169</tt>  <tt class="py-line">         <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">cb</tt><tt class="py-op">.</tt><tt class="py-name">cancel</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
<a name="L170"></a><tt class="py-lineno">170</tt>  <tt class="py-line">         <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">cb</tt> <tt class="py-op">=</tt> <tt class="py-name">None</tt> </tt>
<a name="L171"></a><tt class="py-lineno">171</tt>  <tt class="py-line">         <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">pi</tt><tt class="py-op">.</tt><tt class="py-name">stop</tt><tt class="py-op">(</tt><tt class="py-op">)</tt> </tt>
</div></div><a name="L172"></a><tt class="py-lineno">172</tt>  <tt class="py-line"> </tt><script type="text/javascript">
<!--
expandto(location.href);
// -->
</script>
</pre>
<br />
<!-- ==================== NAVIGATION BAR ==================== -->
<table class="navbar" border="0" width="100%" cellpadding="0"
       bgcolor="#a0c0ff" cellspacing="0">
  <tr valign="middle">
  <!-- Home link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="libsensorPy-module.html">Home</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Tree link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="module-tree.html">Trees</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Index link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="identifier-index.html">Indices</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Help link -->
      <th>&nbsp;&nbsp;&nbsp;<a
        href="help.html">Help</a>&nbsp;&nbsp;&nbsp;</th>

  <!-- Project homepage -->
      <th class="navbar" align="right" width="100%">
        <table border="0" cellpadding="0" cellspacing="0">
          <tr><th class="navbar" align="center"
            >libsensorPy</th>
          </tr></table></th>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%%">
  <tr>
    <td align="left" class="footer">
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:29 2015
    </td>
    <td align="right" class="footer">
      <a target="mainFrame" href="http://epydoc.sourceforge.net"
        >http://epydoc.sourceforge.net</a>
    </td>
  </tr>
</table>

<script type="text/javascript">
  <!--
  // Private objects are initially displayed (because if
  // javascript is turned off then we want them to be
  // visible); but by default, we want to hide them.  So hide
  // them unless we have a cookie that says to show them.
  checkCookie();
  // -->
</script>
</body>
</html>
