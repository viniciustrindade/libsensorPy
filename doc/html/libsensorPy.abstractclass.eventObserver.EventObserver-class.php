<?xml version="1.0" encoding="ascii"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>libsensorPy.abstractclass.eventObserver.EventObserver</title>
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
        <a href="libsensorPy.abstractclass.eventObserver-module.html">Module&nbsp;eventObserver</a> ::
        Class&nbsp;EventObserver
      </span>
    </td>
    <td>
      <table cellpadding="0" cellspacing="0">
        <!-- hide/show private -->
        <tr><td align="right"><span class="options">[<a href="javascript:void(0);" class="privatelink"
    onclick="toggle_private();">hide&nbsp;private</a>]</span></td></tr>
        <tr><td align="right"><span class="options"
            >[<a href="frames.html" target="_top">frames</a
            >]&nbsp;|&nbsp;<a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html"
            target="_top">no&nbsp;frames</a>]</span></td></tr>
      </table>
    </td>
  </tr>
</table>
<!-- ==================== CLASS DESCRIPTION ==================== -->
<h1 class="epydoc">Class EventObserver</h1><p class="nomargin-top"><span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver">source&nbsp;code</a></span></p>
<center>
<center>  <map id="uml_class_diagram_for_libsenso_8" name="uml_class_diagram_for_libsenso_8">
<area shape="rect" id="node13" href="abc.ABCMeta-class.html" title="Metaclass for defining Abstract Base Classes (ABCs)." alt="" coords="17,31,176,49"/>
<area shape="rect" id="node13" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#__abstractmethods__" title="libsensorPy.abstractclass.eventObserver.EventObserver.__abstractmethods__" alt="" coords="17,49,176,68"/>
<area shape="rect" id="node13" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#__init__" title="Constructor" alt="" coords="17,71,176,89"/>
<area shape="rect" id="node13" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#update" title="Updates the Observer" alt="" coords="17,89,176,108"/>
<area shape="rect" id="node13" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#register_event" title="Observer saves reference to Subject." alt="" coords="17,108,176,127"/>
<area shape="rect" id="node13" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#remove_event" title="Observer replaces Subject reference to None." alt="" coords="17,127,176,145"/>
<area shape="rect" id="node1" href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html" title="classdocs" alt="" coords="5,6,187,151"/>
</map>
  <img src="<?=$siteUrl?>/img/uml/uml_class_diagram_for_libsenso_8.gif" alt='' usemap="#uml_class_diagram_for_libsenso_8" ismap="ismap" class="graph-without-title" />
</center>
</center>
<hr />
<p>classdocs</p>

<!-- ==================== NESTED CLASSES ==================== -->
<a name="section-NestedClasses"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Nested Classes</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-NestedClasses"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a href="abc.ABCMeta-class.html" class="summary-name">__metaclass__</a><br />
      Metaclass for defining Abstract Base Classes (ABCs).
    </td>
  </tr>
</table>
<!-- ==================== INSTANCE METHODS ==================== -->
<a name="section-InstanceMethods"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Instance Methods</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-InstanceMethods"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#__init__" class="summary-sig-name">__init__</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">event</span>)</span><br />
      Constructor</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver.__init__">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#update" class="summary-sig-name">update</a>(<span class="summary-sig-arg">self</span>)</span><br />
      Updates the Observer</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver.update">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a href="libsensorPy.abstractclass.eventObserver.EventObserver-class.html#register_event" class="summary-sig-name">register_event</a>(<span class="summary-sig-arg">self</span>,
        <span class="summary-sig-arg">event</span>)</span><br />
      Observer saves reference to Subject.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver.register_event">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><span class="summary-sig"><a name="remove_event"></a><span class="summary-sig-name">remove_event</span>(<span class="summary-sig-arg">self</span>)</span><br />
      Observer replaces Subject reference to None.</td>
          <td align="right" valign="top">
            <span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver.remove_event">source&nbsp;code</a></span>
            
          </td>
        </tr>
      </table>
      
    </td>
  </tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__delattr__</code>,
      <code>__format__</code>,
      <code>__getattribute__</code>,
      <code>__hash__</code>,
      <code>__new__</code>,
      <code>__reduce__</code>,
      <code>__reduce_ex__</code>,
      <code>__repr__</code>,
      <code>__setattr__</code>,
      <code>__sizeof__</code>,
      <code>__str__</code>,
      <code>__subclasshook__</code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== CLASS VARIABLES ==================== -->
<a name="section-ClassVariables"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Class Variables</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-ClassVariables"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
<tr>
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="__abstractmethods__"></a><span class="summary-name">__abstractmethods__</span> = <code title="frozenset(['update'])"><code class="variable-group">frozenset([</code><code class="variable-quote">'</code><code class="variable-string">update</code><code class="variable-quote">'</code><code class="variable-group">])</code></code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="_abc_cache"></a><span class="summary-name">_abc_cache</span> = <code title="&lt;_weakrefset.WeakSet object at 0x256d850&gt;">&lt;_weakrefset.WeakSet object at 0x256d850&gt;</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="_abc_negative_cache"></a><span class="summary-name">_abc_negative_cache</span> = <code title="&lt;_weakrefset.WeakSet object at 0x256d9d0&gt;">&lt;_weakrefset.WeakSet object at 0x256d9d0&gt;</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="_abc_negative_cache_version"></a><span class="summary-name">_abc_negative_cache_version</span> = <code title="14">14</code>
    </td>
  </tr>
<tr class="private">
    <td width="15%" align="right" valign="top" class="summary">
      <span class="summary-type">&nbsp;</span>
    </td><td class="summary">
        <a name="_abc_registry"></a><span class="summary-name">_abc_registry</span> = <code title="&lt;_weakrefset.WeakSet object at 0x256d990&gt;">&lt;_weakrefset.WeakSet object at 0x256d990&gt;</code>
    </td>
  </tr>
</table>
<!-- ==================== PROPERTIES ==================== -->
<a name="section-Properties"></a>
<table class="summary" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Properties</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-Properties"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
  <tr>
    <td colspan="2" class="summary">
    <p class="indent-wrapped-lines"><b>Inherited from <code>object</code></b>:
      <code>__class__</code>
      </p>
    </td>
  </tr>
</table>
<!-- ==================== METHOD DETAILS ==================== -->
<a name="section-MethodDetails"></a>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr bgcolor="#70b0f0" class="table-header">
  <td colspan="2" class="table-header">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr valign="top">
        <td align="left"><span class="table-header">Method Details</span></td>
        <td align="right" valign="top"
         ><span class="options">[<a href="#section-MethodDetails"
         class="privatelink" onclick="toggle_private();"
         >hide private</a>]</span></td>
      </tr>
    </table>
  </td>
</tr>
</table>
<a name="__init__"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">__init__</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">event</span>)</span>
    <br /><em class="fname">(Constructor)</em>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver.__init__">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Constructor</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>event</code></strong> (AbstractEvent) - The event to be observed</li>
    </ul></dd>
    <dt>Overrides:
        object.__init__
    </dt>
  </dl>
</td></tr></table>
</div>
<a name="update"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">update</span>(<span class="sig-arg">self</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver.update">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Updates the Observer</p>
  <dl class="fields">
    <dt>Decorators:</dt>
    <dd><ul class="nomargin-top">
        <li><code>@abc.abstractmethod</code></li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
<a name="register_event"></a>
<div>
<table class="details" border="1" cellpadding="3"
       cellspacing="0" width="100%" bgcolor="white">
<tr><td>
  <table width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr valign="top"><td>
  <h3 class="epydoc"><span class="sig"><span class="sig-name">register_event</span>(<span class="sig-arg">self</span>,
        <span class="sig-arg">event</span>)</span>
  </h3>
  </td><td align="right" valign="top"
    ><span class="codelink"><a href="libsensorPy.abstractclass.eventObserver-pysrc.html#EventObserver.register_event">source&nbsp;code</a></span>&nbsp;
    </td>
  </tr></table>
  
  <p>Observer saves reference to Subject.</p>
  <dl class="fields">
    <dt>Parameters:</dt>
    <dd><ul class="nomargin-top">
        <li><strong class="pname"><code>event</code></strong> (AbstractEvent) - The event to be registered</li>
    </ul></dd>
  </dl>
</td></tr></table>
</div>
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
    Generated by Epydoc 3.0.1 on Mon Apr 13 18:16:27 2015
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
