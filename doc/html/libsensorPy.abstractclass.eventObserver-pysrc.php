<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.abstractclass.eventObserver</title>
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
        <a href="libsensorPy.abstractclass-module.html">Package&nbsp;abstractclass</a> ::
        Module&nbsp;eventObserver
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.abstractclass.eventObserver-pysrc.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<h1 class="epydoc">Source Code for <a href="libsensorPy.abstractclass.eventObserver-module.html">Module libsensorPy.abstractclass.eventObserver</a></h1>
<pre class="py-src">
<a name="L1"></a><tt class="py-lineno"> 1</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L2"></a><tt class="py-lineno"> 2</tt>  <tt class="py-line"><tt class="py-docstring">Created on 11/02/2015</tt> </tt>
<a name="L3"></a><tt class="py-lineno"> 3</tt>  <tt class="py-line"><tt class="py-docstring"></tt> </tt>
<a name="L4"></a><tt class="py-lineno"> 4</tt>  <tt class="py-line"><tt class="py-docstring">@author: Junior Mascarenhas</tt> </tt>
<a name="L5"></a><tt class="py-lineno"> 5</tt>  <tt class="py-line"><tt class="py-docstring">'''</tt> </tt>
<a name="L6"></a><tt class="py-lineno"> 6</tt>  <tt class="py-line"><tt class="py-keyword">import</tt> <tt class="py-name">abc</tt> </tt>
<a name="EventObserver"></a><div id="EventObserver-def"><a name="L7"></a><tt class="py-lineno"> 7</tt>  <tt class="py-line"> </tt>
<a name="L8"></a><tt class="py-lineno"> 8</tt> <a class="py-toggle" href="#" id="EventObserver-toggle" onclick="return toggle('EventObserver');">-</a><tt class="py-line"><tt class="py-keyword">class</tt> <a class="py-def-name" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html">EventObserver</a><tt class="py-op">(</tt><tt class="py-base-class">object</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="EventObserver-collapsed" style="display:none;" pad="++" indent="++++"></div><div id="EventObserver-expanded"><a name="L9"></a><tt class="py-lineno"> 9</tt>  <tt class="py-line">    <tt class="py-docstring">'''</tt> </tt>
<a name="L10"></a><tt class="py-lineno">10</tt>  <tt class="py-line"><tt class="py-docstring">    classdocs</tt> </tt>
<a name="L11"></a><tt class="py-lineno">11</tt>  <tt class="py-line"><tt class="py-docstring">    '''</tt> </tt>
<a name="L12"></a><tt class="py-lineno">12</tt>  <tt class="py-line">    <tt id="link-0" class="py-name" targets="Variable libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__=libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.actuator.Actuator.__metaclass__=libsensorPy.abstractclass.actuator.Actuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__metaclass__=libsensorPy.abstractclass.altitudeSensor.AltitudeSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__metaclass__=libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.humiditySensor.HumiditySensor.__metaclass__=libsensorPy.abstractclass.humiditySensor.HumiditySensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.lightSensor.LightSensor.__metaclass__=libsensorPy.abstractclass.lightSensor.LightSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__=libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.motionSensor.MotionSensor.__metaclass__=libsensorPy.abstractclass.motionSensor.MotionSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.motorActuator.MotorActuator.__metaclass__=libsensorPy.abstractclass.motorActuator.MotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.pressureSensor.PressureSensor.__metaclass__=libsensorPy.abstractclass.pressureSensor.PressureSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.sensor.Sensor.__metaclass__=libsensorPy.abstractclass.sensor.Sensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__metaclass__=libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__metaclass__=libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator-class.html#__metaclass__,Variable libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__=libsensorPy.abstractclass.temperatureSensor.TemperatureSensor-class.html#__metaclass__,Variable libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__=libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor-class.html#__metaclass__"><a title="libsensorPy.abstractclass.accelerometerSensor.AccelerometerSensor.__metaclass__
libsensorPy.abstractclass.actuator.Actuator.__metaclass__
libsensorPy.abstractclass.altitudeSensor.AltitudeSensor.__metaclass__
libsensorPy.abstractclass.dcMotorActuator.DCMotorActuator.__metaclass__
libsensorPy.abstractclass.humiditySensor.HumiditySensor.__metaclass__
libsensorPy.abstractclass.lightSensor.LightSensor.__metaclass__
libsensorPy.abstractclass.magnetometerSensor.MagnetometerSensor.__metaclass__
libsensorPy.abstractclass.motionSensor.MotionSensor.__metaclass__
libsensorPy.abstractclass.motorActuator.MotorActuator.__metaclass__
libsensorPy.abstractclass.pressureSensor.PressureSensor.__metaclass__
libsensorPy.abstractclass.sensor.Sensor.__metaclass__
libsensorPy.abstractclass.servoMotorActuator.ServoMotorActuator.__metaclass__
libsensorPy.abstractclass.stepperMotorActuator.StepperMotorActuator.__metaclass__
libsensorPy.abstractclass.temperatureSensor.TemperatureSensor.__metaclass__
libsensorPy.abstractclass.ultrasonicSensor.UltrasonicSensor.__metaclass__" class="py-name" href="#" onclick="return doclink('link-0', '__metaclass__', 'link-0');">__metaclass__</a></tt> <tt class="py-op">=</tt> <tt class="py-name">abc</tt><tt class="py-op">.</tt><tt id="link-1" class="py-name" targets="Class abc.ABCMeta=abc.ABCMeta-class.html"><a title="abc.ABCMeta" class="py-name" href="#" onclick="return doclink('link-1', 'ABCMeta', 'link-1');">ABCMeta</a></tt> </tt>
<a name="L13"></a><tt class="py-lineno">13</tt>  <tt class="py-line"> </tt>
<a name="EventObserver.__init__"></a><div id="EventObserver.__init__-def"><a name="L14"></a><tt class="py-lineno">14</tt> <a class="py-toggle" href="#" id="EventObserver.__init__-toggle" onclick="return toggle('EventObserver.__init__');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#__init__">__init__</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt><tt class="py-param">event</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="EventObserver.__init__-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="EventObserver.__init__-expanded"><a name="L15"></a><tt class="py-lineno">15</tt>  <tt class="py-line">        <tt class="py-docstring">'''</tt> </tt>
<a name="L16"></a><tt class="py-lineno">16</tt>  <tt class="py-line"><tt class="py-docstring">        Constructor</tt> </tt>
<a name="L17"></a><tt class="py-lineno">17</tt>  <tt class="py-line"><tt class="py-docstring">        @param event: The event to be observed</tt> </tt>
<a name="L18"></a><tt class="py-lineno">18</tt>  <tt class="py-line"><tt class="py-docstring">        @type event: AbstractEvent</tt> </tt>
<a name="L19"></a><tt class="py-lineno">19</tt>  <tt class="py-line"><tt class="py-docstring">        '''</tt> </tt>
<a name="L20"></a><tt class="py-lineno">20</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_event</tt> <tt class="py-op">=</tt> <tt class="py-name">event</tt> </tt>
</div><a name="L21"></a><tt class="py-lineno">21</tt>  <tt class="py-line"> </tt>
<a name="L22"></a><tt class="py-lineno">22</tt>  <tt class="py-line">    <tt class="py-decorator">@</tt><tt class="py-decorator">abc</tt><tt class="py-op">.</tt><tt class="py-name">abstractmethod</tt> </tt>
<a name="EventObserver.update"></a><div id="EventObserver.update-def"><a name="L23"></a><tt class="py-lineno">23</tt> <a class="py-toggle" href="#" id="EventObserver.update-toggle" onclick="return toggle('EventObserver.update');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#update">update</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="EventObserver.update-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="EventObserver.update-expanded"><a name="L24"></a><tt class="py-lineno">24</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L25"></a><tt class="py-lineno">25</tt>  <tt class="py-line"><tt class="py-docstring">        Updates the Observer</tt> </tt>
<a name="L26"></a><tt class="py-lineno">26</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
</div><a name="L27"></a><tt class="py-lineno">27</tt>  <tt class="py-line"> </tt>
<a name="EventObserver.register_event"></a><div id="EventObserver.register_event-def"><a name="L28"></a><tt class="py-lineno">28</tt> <a class="py-toggle" href="#" id="EventObserver.register_event-toggle" onclick="return toggle('EventObserver.register_event');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#register_event">register_event</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">,</tt> <tt class="py-param">event</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="EventObserver.register_event-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="EventObserver.register_event-expanded"><a name="L29"></a><tt class="py-lineno">29</tt>  <tt class="py-line">        <tt class="py-docstring">"""</tt> </tt>
<a name="L30"></a><tt class="py-lineno">30</tt>  <tt class="py-line"><tt class="py-docstring">        Observer saves reference to Subject.</tt> </tt>
<a name="L31"></a><tt class="py-lineno">31</tt>  <tt class="py-line"><tt class="py-docstring">        @param event: The event to be registered</tt> </tt>
<a name="L32"></a><tt class="py-lineno">32</tt>  <tt class="py-line"><tt class="py-docstring">        @type event: AbstractEvent </tt> </tt>
<a name="L33"></a><tt class="py-lineno">33</tt>  <tt class="py-line"><tt class="py-docstring">        """</tt> </tt>
<a name="L34"></a><tt class="py-lineno">34</tt>  <tt class="py-line"> </tt>
<a name="L35"></a><tt class="py-lineno">35</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_event</tt> <tt class="py-op">=</tt> <tt class="py-name">event</tt> </tt>
</div><a name="L36"></a><tt class="py-lineno">36</tt>  <tt class="py-line"> </tt>
<a name="EventObserver.remove_event"></a><div id="EventObserver.remove_event-def"><a name="L37"></a><tt class="py-lineno">37</tt> <a class="py-toggle" href="#" id="EventObserver.remove_event-toggle" onclick="return toggle('EventObserver.remove_event');">-</a><tt class="py-line">    <tt class="py-keyword">def</tt> <a class="py-def-name" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#remove_event">remove_event</a><tt class="py-op">(</tt><tt class="py-param">self</tt><tt class="py-op">)</tt><tt class="py-op">:</tt> </tt>
</div><div id="EventObserver.remove_event-collapsed" style="display:none;" pad="++" indent="++++++++"></div><div id="EventObserver.remove_event-expanded"><a name="L38"></a><tt class="py-lineno">38</tt>  <tt class="py-line">        <tt class="py-docstring">"""Observer replaces Subject reference to None."""</tt> </tt>
<a name="L39"></a><tt class="py-lineno">39</tt>  <tt class="py-line">        <tt class="py-name">self</tt><tt class="py-op">.</tt><tt class="py-name">_event</tt>  <tt class="py-op">=</tt> <tt class="py-name">None</tt> </tt>
</div></div><a name="L40"></a><tt class="py-lineno">40</tt>  <tt class="py-line"> </tt><script type="text/javascript">
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
