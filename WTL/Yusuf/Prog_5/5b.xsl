<?xml version = "1.0"?> 
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match = "RU">
<html>
	<head>
		<title> Style sheet for 5b.xml </title>
	</head>

<body>
<h2> Shopping </h2>
<hr/>
<span style = "font-style: italic; color: blue;"> Books: </span> <xsl:value-of select = "a" /> <br />
<span style = "font-style: italic; color: blue;"> Stationary:</span> <xsl:value-of select = "b" /> <br />
<span style = "font-style: italic; color: blue;"> Tables,stands:</span> <xsl:value-of select = "c" /> <br />
<span style = "font-style: italic; color: blue;"> Laptops:</span> <xsl:value-of select = "d" /> <br />
<span style = "font-style: italic; color: blue;"> Smartphones/Tablets:</span> <xsl:value-of select = "e" /> <br />
<span style = "font-style: italic; color: blue;"> Clothing:</span> <xsl:value-of select = "f" /> <br />
<span style = "font-style: italic; color: blue;"> Bags:</span> <xsl:value-of select = "g" /> <br />
<span style = "font-style: italic; color: blue;"> Shoes:</span> <xsl:value-of select = "s" /> <br />
<span style = "font-style: italic; color: blue;"> Watches/Clocks:</span> <xsl:value-of select = "i" /> <br />
<span style = "font-style: italic; color: blue;"> Home Appliances:</span> <xsl:value-of select = "o" /> <br />

</body>
</html>
</xsl:template>
</xsl:stylesheet>


