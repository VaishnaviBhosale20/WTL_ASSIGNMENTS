<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    |
<xsl:method = "text"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Employee List</title>
                <style>
                    body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; }
                    table { border-collapse: collapse; width: 80%; background: white; }
                    th, td { border: 5px solid black; padding: 8px; text-align: left; }
                    th { background-color:rgb(255, 0, 102); color: white; }
                </style>
            </head>

            <body>
                <h1>Organization Members</h1>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Employee ID</th>
                        <th>Email</th>
                    </tr>
                    <xsl:for-each select="Organization/project/member">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="emp_id"/></td>
                            <td><xsl:value-of select="email"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
            
        </html>
    </xsl:template>
</xsl:stylesheet>
