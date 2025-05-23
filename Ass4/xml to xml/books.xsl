<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes" />
    
    <xsl:template match="/">
        <bookstore>
            <catalog>
                <xsl:for-each select="library/book">
                    <bookDetails>
                        <bookTitle>
                            <xsl:value-of select="title"/>
                        </bookTitle>
                        <writer>
                            <xsl:value-of select="author"/>
                        </writer>
                        <publicationYear>
                            <xsl:value-of select="year"/>
                        </publicationYear>
                        <cost>
                            <xsl:value-of select="price"/>
                        </cost>
                    </bookDetails>
                </xsl:for-each>
            </catalog>
        </bookstore>
    </xsl:template>
</xsl:stylesheet>
