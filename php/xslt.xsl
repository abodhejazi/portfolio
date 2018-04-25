<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
<xsl:for-each select="pc/product">
  <div style="background-color:teal;color:white;padding:4px">
    <span style="font-weight:bold"> name:  <xsl:value-of select="name"/> - </span>
    <span style="font-weight:bold">color:  <xsl:value-of select="color"/></span>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
    <p>
    modle:  <xsl:value-of select="modle"/>
    <br/>
    <span style="font-style:italic">brand: <xsl:value-of select="brand"/> </span>
    </p>
  </div>
</xsl:for-each>
</body>
</html>