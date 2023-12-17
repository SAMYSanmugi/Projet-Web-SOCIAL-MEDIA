<!-- cv.xsl -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
   <html>
      <head>
         <title>Curriculum Vitae</title>
      </head>
      <body>
         <h1>Curriculum Vitae</h1>
         <!-- Extraction des données du fichier XML -->
         <p>Nom: <xsl:value-of select="cv/nom"/></p>
         <p>Prénom: <xsl:value-of select="cv/prenom"/></p>
         <p>Date de naissance : <xsl:value-of select="cv/naissance"/></p>
         <p>Adresse: <xsl:value-of select="cv/adresse"/></p>
         <p>Téléphone: <xsl:value-of select="cv/telephone"/></p>
         <p>Adresse email: <xsl:value-of select="cv/mail"/></p>
         <p>Profil: <xsl:value-of select="cv/profil"/></p>

         <!-- Traitement des compétences -->
         <p>Compétences:</p>
         <ul>
            <xsl:for-each select="cv/competences/competence">
               <li><xsl:value-of select="."/></li>
            </xsl:for-each>
         </ul>

         <p>Centres d'intérêt: <xsl:value-of select="interet/profil"/></p>

         <!-- Traitement des langues -->
         <p>Langues:</p>
         <ul>
            <xsl:for-each select="cv/langues/langue">
               <li><xsl:value-of select="."/></li>
            </xsl:for-each>
         </ul>

         <!-- Traitement des expériences -->
         <p>Expériences:</p>
         <ul>
            <xsl:for-each select="cv/experiences/experience">
               <li><xsl:value-of select="."/></li>
            </xsl:for-each>
         </ul>

         <!-- Traitement des formations -->
         <p>Formations:</p>
         <ul>
            <xsl:for-each select="cv/formations/formation">
               <li><xsl:value-of select="."/></li>
            </xsl:for-each>
         </ul>

      </body>
   </html>
</xsl:template>

</xsl:stylesheet>
