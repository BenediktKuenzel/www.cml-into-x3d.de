<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:n="http://www.xml-cml.org/schema">

  
	
		
	
	<xsl:template match="/">
	
	 
				<x3d width="1000px" height="800px" >
				<scene>
				 
					
				
				<xsl:apply-templates/>
				</scene>
				</x3d>

		
	</xsl:template>
	
	<xsl:template match="n:molecule">
	
	
	<xsl:if test="//n:atomArray[count(*) &lt; 1000]"> 
	<Viewpoint position="0.19867 -0.05885 1.17673" orientation="0.93292 -0.02881 -0.35892 0.06899" zNear="0.34729" zFar="1.83487" description="defaultX3DViewpointNode"></Viewpoint>
	 </xsl:if>
	 
	<xsl:if test="//n:atomArray[count(*) &gt; 1000 ]">
	<xsl:if test="//n:atomArray[count(*) &lt; 2000]"> 
	<Viewpoint position="0.30885 0.17548 1.52075" orientation="0.00000 0.00000 0.00000 0.00000" zNear="0.52576" zFar="2.47326" description="kleinerzweiK"></Viewpoint>
	</xsl:if>
	</xsl:if>
	
	 <xsl:if test="//n:atomArray[count(*) &gt; 2000]">
	 <Viewpoint position="1.03426 -0.12756 2.01965" orientation="0.43617 0.60321 0.66775 0.58910" zNear="0.92856" zFar="3.45475" description="gößer2K" ></Viewpoint>
	 </xsl:if>
	 
		<xsl:for-each select="//n:atom">
			<xsl:if test="@elementType='C'">
			<xsl:variable name="elemXC" select=" @xFract"/>
			<xsl:variable name="elemYC" select=" @yFract"/>
            <xsl:variable name="elemZC" select=" @zFract"/>
            <xsl:variable name="elemPosC" select="concat ($elemXC,' ',$elemYC,' ',$elemZC)"/>
			<Transform translation="{$elemPosC}">
				<Shape>
					<Sphere radius=".007"/>
                <Appearance>
                    <Material diffuseColor="0 0 0"/>
                </Appearance>
				</Shape>
			</Transform>
			
		</xsl:if>	 
		
		<xsl:if test="@elementType='O'">
			<xsl:variable name="elemXC" select=" @xFract"/>
			<xsl:variable name="elemYC" select=" @yFract"/>
            <xsl:variable name="elemZC" select=" @zFract"/>
            <xsl:variable name="elemPosC" select="concat ($elemXC,' ',$elemYC,' ',$elemZC)"/>
			<Transform translation="{$elemPosC}">
				<Shape>
					<Sphere radius=".006"/>
                <Appearance>
                    <Material diffuseColor="1 0 0"/>
                </Appearance>
				</Shape>
			</Transform>
			
		</xsl:if>	 
		
		<xsl:if test="@elementType='N'">
			<xsl:variable name="elemXC" select=" @xFract"/>
			<xsl:variable name="elemYC" select=" @yFract"/>
            <xsl:variable name="elemZC" select=" @zFract"/>
            <xsl:variable name="elemPosC" select="concat ($elemXC,' ',$elemYC,' ',$elemZC)"/>
			<Transform translation="{$elemPosC}">
				<Shape>
					<Sphere radius=".0065"/>
                <Appearance>
                    <Material diffuseColor="0 0 1"/>
                </Appearance>
				</Shape>
			</Transform>
			
		</xsl:if>	
<xsl:if test="@elementType='S'">
			<xsl:variable name="elemXC" select=" @xFract"/>
			<xsl:variable name="elemYC" select=" @yFract"/>
            <xsl:variable name="elemZC" select=" @zFract"/>
            <xsl:variable name="elemPosC" select="concat ($elemXC,' ',$elemYC,' ',$elemZC)"/>
			<Transform translation="{$elemPosC}">
				<Shape>
					<Sphere radius=".01"/>
                <Appearance>
                    <Material diffuseColor="1 1 0"/>
                </Appearance>
				</Shape>
			</Transform>
			
		</xsl:if>	 		
		</xsl:for-each>
		
	
        
    </xsl:template>
		
		
	
	
	



	
		
	
	
		
</xsl:stylesheet>