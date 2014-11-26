<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : student.xsl
    Created on : November 20, 2014, 12:14 PM
    Author     : yehancha
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    
    <!--Default template-->
<!--    <xsl:template match="/">
        <html>
            <head>
                <title>student.xsl</title>
            </head>
            <body>
            </body>
        </html>
    </xsl:template> -->
    
    <!--First template set-->
    <xsl:template match="class/student/firstname">First name: <xsl:value-of select="text()"></xsl:value-of></xsl:template> 
    <xsl:template match="class/student/lastname">Last name: <xsl:value-of select="text()"></xsl:value-of></xsl:template>
 
    <!--Second template set ForEach-->
    <xsl:template match="/"> 
        <table border="1">
            <xsl:for-each select="//student">
            <tr>
            <td>
                <xsl:value-of select="firstname" />
            </td>
            <td>
                <xsl:value-of select="lastname" />
            </td>
            </tr>
            </xsl:for-each>
        </table>
    </xsl:template>
</xsl:stylesheet>