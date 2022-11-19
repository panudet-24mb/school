<?php
include("templates/header.php");
?>
<body>
   <?php include("templates/menu.php") ?>
  <div class="main-content" id="panel">
    <?php include("templates/topnav.php") ?>
    <?php include("templates/content_header.php") ?>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-12 card-wrapper">

        <div class="card">
            <div class="card-header">
              <h3 class="mb-0"> บทที่ 6  การจัดการแฟ้มข้อมูลและหน่วยความจำ </h3>
            </div>
            <div class="card-body" style=" overflow-y: scroll;">
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="unit_6_files/filelist.xml">
<link rel=Edit-Time-Data href="unit_6_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>ACER</o:Author>
  <o:LastAuthor>Panudet Panumas</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>49</o:TotalTime>
  <o:Created>2022-10-14T15:21:00Z</o:Created>
  <o:LastSaved>2022-10-14T15:21:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>904</o:Words>
  <o:Characters>5153</o:Characters>
  <o:Lines>42</o:Lines>
  <o:Paragraphs>12</o:Paragraphs>
  <o:CharactersWithSpaces>6045</o:CharactersWithSpaces>
  <o:Version>16.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=dataStoreItem href="unit_6_files/item0001.xml"
target="unit_6_files/props002.xml">
<link rel=themeData href="unit_6_files/themedata.thmx">
<link rel=colorSchemeMapping href="unit_6_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>TH</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:ApplyBreakingRules/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"Angsana New";
	panose-1:2 2 6 3 5 4 5 2 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-2130706429 0 0 0 65537 0;}
@font-face
	{font-family:"Cordia New";
	panose-1:2 11 3 4 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-2130706429 0 0 0 65537 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
	{font-family:"Browallia New";
	panose-1:2 11 6 4 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-2130706429 0 0 0 65537 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"Header Char";
	margin:0cm;
	mso-pagination:widow-orphan;
	tab-stops:center 225.65pt right 451.3pt;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:"Footer Char";
	margin:0cm;
	mso-pagination:widow-orphan;
	tab-stops:center 225.65pt right 451.3pt;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
p
	{mso-style-priority:99;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:14.0pt;
	font-family:"Angsana New",serif;
	mso-fareast-font-family:"Times New Roman";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:34;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Header;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Footer;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("unit_6_files/header.htm") fs;
	mso-footnote-continuation-separator:url("unit_6_files/header.htm") fcs;
	mso-endnote-separator:url("unit_6_files/header.htm") es;
	mso-endnote-continuation-separator:url("unit_6_files/header.htm") ecs;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:8258180;
	mso-list-type:hybrid;
	mso-list-template-ids:-1085131498 328259150 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l0:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l0:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l0:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l0:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l0:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l0:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l0:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l0:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l0:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1
	{mso-list-id:25255768;
	mso-list-type:hybrid;
	mso-list-template-ids:2118961760 1886918614 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l1:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l1:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l1:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2
	{mso-list-id:97335461;
	mso-list-type:hybrid;
	mso-list-template-ids:-1092058724 -1055127934 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l2:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:Arial;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Arial;
	mso-bidi-font-family:"Browallia New";}
@list l2:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l2:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l3
	{mso-list-id:129441884;
	mso-list-type:hybrid;
	mso-list-template-ids:1724812580 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l3:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l3:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l3:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l4
	{mso-list-id:129523612;
	mso-list-type:hybrid;
	mso-list-template-ids:1162507760 -581670710 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l4:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l4:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l4:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l4:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l4:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l4:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l4:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l4:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l4:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5
	{mso-list-id:240067811;
	mso-list-type:hybrid;
	mso-list-template-ids:-206543306 -1039107970 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l5:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l5:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l5:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l6
	{mso-list-id:295373238;
	mso-list-template-ids:-1681253208;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l6:level2
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l6:level3
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-ascii-theme-font:major-bidi;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:"Angsana New";
	mso-hansi-theme-font:major-bidi;
	mso-bidi-font-family:"Angsana New";
	mso-bidi-theme-font:major-bidi;}
@list l6:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l6:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l6:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l6:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l6:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l6:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l7
	{mso-list-id:320348841;
	mso-list-template-ids:-1231289912;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l7:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l7:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l7:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l7:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l7:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l7:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l7:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l7:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l8
	{mso-list-id:356856537;
	mso-list-type:hybrid;
	mso-list-template-ids:-1423250596 -741860678 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l8:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l8:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l8:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l8:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l8:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l8:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l8:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l8:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l8:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l9
	{mso-list-id:369302297;
	mso-list-template-ids:-1817779818;}
@list l9:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l9:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l9:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l9:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l9:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l9:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l9:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l9:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l9:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10
	{mso-list-id:541094855;
	mso-list-template-ids:-1788712060;}
@list l10:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l10:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l10:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-ascii-theme-font:major-bidi;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:"Angsana New";
	mso-hansi-theme-font:major-bidi;
	mso-bidi-font-family:"Angsana New";
	mso-bidi-theme-font:major-bidi;}
@list l10:level5
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-ascii-theme-font:major-bidi;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:"Angsana New";
	mso-hansi-theme-font:major-bidi;
	mso-bidi-font-family:"Angsana New";
	mso-bidi-theme-font:major-bidi;}
@list l10:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l10:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l11
	{mso-list-id:570697334;
	mso-list-type:hybrid;
	mso-list-template-ids:-153733352 1099069132 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l11:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	color:#333333;}
@list l11:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;}
@list l11:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;}
@list l11:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l11:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;}
@list l11:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;}
@list l11:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;}
@list l11:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;}
@list l11:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;}
@list l12
	{mso-list-id:579294657;
	mso-list-template-ids:1308373788;}
@list l12:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l12:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l12:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l12:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l12:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l12:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l12:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l12:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l12:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l13
	{mso-list-id:587274747;
	mso-list-type:hybrid;
	mso-list-template-ids:-394264110 377750396 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l13:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l13:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l14
	{mso-list-id:653486862;
	mso-list-template-ids:-1565239890;}
@list l14:level1
	{mso-level-text:%1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.75pt;
	text-indent:-18.75pt;
	mso-ansi-font-weight:bold;}
@list l14:level2
	{mso-level-text:"%1\.%2";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.75pt;
	text-indent:-18.75pt;
	mso-ansi-font-weight:bold;}
@list l14:level3
	{mso-level-text:"%1\.%2\.%3";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:36.0pt;
	text-indent:-36.0pt;
	mso-ansi-font-weight:bold;}
@list l14:level4
	{mso-level-text:"%1\.%2\.%3\.%4";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:36.0pt;
	text-indent:-36.0pt;
	mso-ansi-font-weight:bold;}
@list l14:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-54.0pt;
	mso-ansi-font-weight:bold;}
@list l14:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-54.0pt;
	mso-ansi-font-weight:bold;}
@list l14:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-72.0pt;
	mso-ansi-font-weight:bold;}
@list l14:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-72.0pt;
	mso-ansi-font-weight:bold;}
@list l14:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-90.0pt;
	mso-ansi-font-weight:bold;}
@list l15
	{mso-list-id:710299802;
	mso-list-type:hybrid;
	mso-list-template-ids:-829501380 248798380 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l15:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:40.5pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l15:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:76.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l15:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:112.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l15:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l15:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:184.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l15:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:220.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l15:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:256.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l15:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:292.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l15:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:328.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16
	{mso-list-id:757942185;
	mso-list-type:hybrid;
	mso-list-template-ids:-1265591742 2107308440 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l16:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l16:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l16:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l17
	{mso-list-id:788354272;
	mso-list-template-ids:742000484;}
@list l17:level1
	{mso-level-text:%1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l17:level2
	{mso-level-text:"%1\.%2";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l17:level3
	{mso-level-text:"%1\.%2\.%3";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-36.0pt;}
@list l17:level4
	{mso-level-text:"%1\.%2\.%3\.%4";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-54.0pt;}
@list l17:level5
	{mso-level-text:"%1\.%2\.%3\.%4\.%5";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-54.0pt;}
@list l17:level6
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:252.0pt;
	text-indent:-72.0pt;}
@list l17:level7
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:288.0pt;
	text-indent:-72.0pt;}
@list l17:level8
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:342.0pt;
	text-indent:-90.0pt;}
@list l17:level9
	{mso-level-text:"%1\.%2\.%3\.%4\.%5\.%6\.%7\.%8\.%9";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:378.0pt;
	text-indent:-90.0pt;}
@list l18
	{mso-list-id:942297043;
	mso-list-type:hybrid;
	mso-list-template-ids:-1851777588 2117789342 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l18:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:40.5pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l18:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:76.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l18:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:112.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l18:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l18:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:184.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l18:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:220.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l18:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:256.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l18:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:292.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l18:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:328.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l19
	{mso-list-id:1014647694;
	mso-list-type:hybrid;
	mso-list-template-ids:636930732 -936109872 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l19:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l19:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l19:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l19:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l20
	{mso-list-id:1095595126;
	mso-list-template-ids:1315459226;}
@list l21
	{mso-list-id:1165512349;
	mso-list-template-ids:922543010;}
@list l22
	{mso-list-id:1170759226;
	mso-list-template-ids:1748246118;}
@list l23
	{mso-list-id:1176387129;
	mso-list-type:hybrid;
	mso-list-template-ids:-2080103208 -816156786 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l23:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l23:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l23:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l23:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l23:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l23:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l23:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l23:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l23:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l24
	{mso-list-id:1214317147;
	mso-list-type:hybrid;
	mso-list-template-ids:1579333468 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l24:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l24:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l24:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l24:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l24:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l24:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l24:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l24:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l24:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l25
	{mso-list-id:1336036258;
	mso-list-type:hybrid;
	mso-list-template-ids:459158712 -569632502 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l25:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	color:#2B1E1B;}
@list l25:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l25:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l25:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l25:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l25:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l25:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l25:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l25:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l26
	{mso-list-id:1366641903;
	mso-list-type:hybrid;
	mso-list-template-ids:-1 7646020 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l26:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:22.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:58.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:94.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:130.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:166.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:202.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:238.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:274.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l26:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:310.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l27
	{mso-list-id:1373731092;
	mso-list-template-ids:1760568518;}
@list l27:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:25.1pt;
	mso-level-number-position:left;
	margin-left:25.1pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l27:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l27:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l27:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l27:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l27:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l27:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l27:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l27:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l28
	{mso-list-id:1475677522;
	mso-list-type:hybrid;
	mso-list-template-ids:-252811630 -1683328452 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l28:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l28:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l28:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l28:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l28:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l28:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l28:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l28:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l28:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l29
	{mso-list-id:1527518204;
	mso-list-template-ids:-1390390112;}
@list l29:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l29:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l29:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l29:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l29:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l29:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l29:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l29:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l29:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l30
	{mso-list-id:1538659705;
	mso-list-type:hybrid;
	mso-list-template-ids:-911687926 -1969725706 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l30:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:40.5pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l30:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:76.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l30:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:112.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l30:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l30:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:184.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l30:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:220.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l30:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:256.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l30:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:292.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l30:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:328.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31
	{mso-list-id:1546793792;
	mso-list-type:hybrid;
	mso-list-template-ids:-1 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l31:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l31:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32
	{mso-list-id:1566254393;
	mso-list-type:hybrid;
	mso-list-template-ids:-1788185910 896704518 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l32:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:40.5pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l32:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:76.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:112.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:184.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:220.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:256.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:292.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l32:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:328.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33
	{mso-list-id:1566719171;
	mso-list-type:hybrid;
	mso-list-template-ids:-1601635594 1897566298 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l33:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";
	color:black;}
@list l33:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l33:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34
	{mso-list-id:1581983160;
	mso-list-type:hybrid;
	mso-list-template-ids:-1455392106 1648405766 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l34:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:40.5pt;
	text-indent:-18.0pt;
	mso-ascii-font-family:"Angsana New";
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:"Angsana New";
	mso-bidi-font-family:"Angsana New";}
@list l34:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:76.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:112.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:148.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:184.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:220.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:256.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:292.5pt;
	text-indent:-18.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l34:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:328.5pt;
	text-indent:-9.0pt;
	mso-bidi-font-family:"Times New Roman";}
@list l35
	{mso-list-id:1691101354;
	mso-list-template-ids:-1671691310;}
@list l35:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l35:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l35:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l35:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l35:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l35:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l35:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l35:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l35:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l36
	{mso-list-id:1849245447;
	mso-list-type:hybrid;
	mso-list-template-ids:-209029952 -738062428 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l36:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l36:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l36:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l36:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l36:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l36:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l36:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l36:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l36:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l37
	{mso-list-id:1899782556;
	mso-list-type:hybrid;
	mso-list-template-ids:-1396117908 1740294520 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l37:level1
	{mso-level-number-format:thai-1;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l37:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;}
@list l37:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;}
@list l37:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l37:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;}
@list l37:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;}
@list l37:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;}
@list l37:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;}
@list l37:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;}
@list l38
	{mso-list-id:2080402419;
	mso-list-type:hybrid;
	mso-list-template-ids:-1500861646 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l38:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l38:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l38:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l38:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l38:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l38:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l38:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l38:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l38:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l39
	{mso-list-id:2102601913;
	mso-list-type:hybrid;
	mso-list-template-ids:-1085213124 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l39:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l39:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l39:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l39:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l39:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l39:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l39:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l39:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l39:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin-top:0cm;
	mso-para-margin-right:0cm;
	mso-para-margin-bottom:8.0pt;
	mso-para-margin-left:0cm;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Cordia New";
	mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:36.0pt;word-wrap:break-word'>

<div class=WordSection1>

<p class=MsoNormal style='margin-bottom:0cm;mso-line-height-alt:.5pt;
background:white'><span lang=EN-IN style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:#2B1E1B;
mso-ansi-language:EN-IN'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
lang=TH style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>&#3627;&#3609;&#3656;&#3623;&#3618;&#3607;&#3637;&#3656;
</span></b><b><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black'>6 <o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
lang=TH style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3585;&#3634;&#3619;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3621;&#3632;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;</span></b><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&nbsp;&nbsp;&nbsp; &nbsp;<span lang=TH>&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3648;&#3611;&#3655;&#3609;&#3585;&#3634;&#3619;&#3585;&#3635;&#3627;&#3609;&#3604;&#3623;&#3636;&#3608;&#3637;&#3585;&#3634;&#3619;&#3607;&#3637;&#3656;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3606;&#3641;&#3585;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3610;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3595;&#3638;&#3656;&#3591;&#3621;&#3633;&#3585;&#3625;&#3603;&#3632;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3586;&#3629;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3592;&#3632;&#3606;&#3641;&#3585;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3652;&#3623;&#3657;&#3648;&#3611;&#3655;&#3609;&#3619;&#3632;&#3610;&#3610;
&#3650;&#3604;&#3618;&#3617;&#3637;&#3623;&#3633;&#3605;&#3606;&#3640;&#3611;&#3619;&#3632;&#3626;&#3591;&#3588;&#3660;&#3648;&#3614;&#3639;&#3656;&#3629;&#3651;&#3627;&#3657;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3621;&#3632;&#3585;&#3634;&#3619;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3617;&#3637;&#3588;&#3623;&#3634;&#3617;&#3626;&#3632;&#3604;&#3623;&#3585;&#3619;&#3623;&#3604;&#3648;&#3619;&#3655;&#3623;
&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3586;&#3629;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3629;&#3634;&#3592;&#3649;&#3610;&#3656;&#3591;&#3652;&#3604;&#3657;&#3648;&#3611;&#3655;&#3609;
</span>3 <span lang=TH>&#3621;&#3633;&#3585;&#3625;&#3603;&#3632;&#3588;&#3639;&#3629;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=TH>1. &#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3586;&#3629;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3621;&#3635;&#3604;&#3633;&#3610;
(</span>sequential file) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3595;&#3638;&#3656;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3616;&#3634;&#3618;&#3651;&#3609;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3632;&#3606;&#3641;&#3585;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3650;&#3604;&#3618;&#3648;&#3619;&#3637;&#3618;&#3591;&#3605;&#3634;&#3617;&#3621;&#3635;&#3604;&#3633;&#3610;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;
&#3627;&#3619;&#3639;&#3629;&#3629;&#3634;&#3592;&#3592;&#3632;&#3652;&#3617;&#3656;&#3648;&#3619;&#3637;&#3618;&#3591;&#3621;&#3635;&#3604;&#3633;&#3610;&#3605;&#3634;&#3617;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3585;&#3655;&#3652;&#3604;&#3657;
&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3632;&#3606;&#3641;&#3585;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3621;&#3591;&#3651;&#3609;&#3626;&#3639;&#3656;&#3629;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3650;&#3604;&#3618;&#3592;&#3632;&#3606;&#3641;&#3585;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3652;&#3623;&#3657;&#3651;&#3609;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3607;&#3637;&#3656;&#3629;&#3618;&#3641;&#3656;&#3605;&#3636;&#3604;
&#3654; &#3585;&#3633;&#3609;
&#3585;&#3634;&#3619;&#3609;&#3635;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3617;&#3634;&#3651;&#3594;&#3657;&#3586;&#3629;&#3591;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3621;&#3635;&#3604;&#3633;&#3610;&#3592;&#3632;&#3605;&#3657;&#3629;&#3591;&#3629;&#3656;&#3634;&#3609;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3611;&#3605;&#3634;&#3617;&#3621;&#3635;&#3604;&#3633;&#3610;&#3592;&#3632;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3650;&#3604;&#3618;&#3605;&#3619;&#3591;&#3652;&#3617;&#3656;&#3652;&#3604;&#3657;
&#3626;&#3656;&#3623;&#3609;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3621;&#3635;&#3604;&#3633;&#3610;&#3605;&#3634;&#3617;&#3604;&#3633;&#3594;&#3609;&#3637;
&#3648;&#3611;&#3655;&#3609;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3656;&#3591;&#3605;&#3634;&#3617;&#3627;&#3617;&#3623;&#3604;&#3627;&#3617;&#3641;&#3656;
&#3626;&#3619;&#3640;&#3611;&#3648;&#3611;&#3655;&#3609;&#3605;&#3634;&#3619;&#3634;&#3591;&#3595;&#3638;&#3656;&#3591;&#3617;&#3637;&#3621;&#3633;&#3585;&#3625;&#3603;&#3632;&#3588;&#3621;&#3657;&#3634;&#3618;&#3626;&#3634;&#3619;&#3610;&#3634;&#3597;&#3586;&#3629;&#3591;&#3627;&#3609;&#3633;&#3591;&#3626;&#3639;&#3629;
&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3609;&#3637;&#3657;&#3607;&#3635;&#3651;&#3627;&#3657;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;&#3591;&#3656;&#3634;&#3618;</span>&nbsp;</span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=TH>&#3651;&#3609;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3621;&#3635;&#3604;&#3633;&#3610;&#3611;&#3619;&#3632;&#3585;&#3629;&#3610;&#3604;&#3657;&#3623;&#3618;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3607;&#3637;&#3656;&#3592;&#3633;&#3604;&#3648;&#3619;&#3637;&#3618;&#3591;&#3652;&#3611;&#3605;&#3634;&#3617;&#3621;&#3635;&#3604;&#3633;&#3610;&#3629;&#3618;&#3656;&#3634;&#3591;&#3605;&#3656;&#3629;&#3648;&#3609;&#3639;&#3656;&#3629;&#3591;&#3648;&#3617;&#3639;&#3656;&#3629;&#3592;&#3633;&#3604;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3650;&#3604;&#3618;&#3592;&#3632;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3648;&#3619;&#3637;&#3618;&#3591;&#3605;&#3634;&#3617;&#3621;&#3635;&#3604;&#3633;&#3610;&#3585;&#3634;&#3619;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3592;&#3632;&#3606;&#3641;&#3585;&#3648;&#3586;&#3637;&#3618;&#3609;&#3605;&#3656;&#3629;&#3648;&#3609;&#3639;&#3656;&#3629;&#3591;&#3652;&#3611;&#3605;&#3634;&#3617;&#3621;&#3635;&#3604;&#3633;&#3610;&#3592;&#3634;&#3585;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3607;&#3637;&#3656;
</span>1 <span lang=TH>&#3606;&#3638;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;
</span>n <span lang=TH>&#3649;&#3621;&#3632;&#3585;&#3634;&#3619;&#3629;&#3656;&#3634;&#3609;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3616;&#3634;&#3618;&#3651;&#3609;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3585;&#3655;&#3605;&#3657;&#3629;&#3591;&#3651;&#3594;&#3657;&#3623;&#3636;&#3608;&#3637;&#3585;&#3634;&#3619;&#3629;&#3656;&#3634;&#3609;&#3649;&#3610;&#3610;&#3605;&#3656;&#3629;&#3648;&#3609;&#3639;&#3656;&#3629;&#3591;&#3605;&#3634;&#3617;&#3621;&#3635;&#3604;&#3633;&#3610;
&#3588;&#3639;&#3629;
&#3629;&#3656;&#3634;&#3609;&#3605;&#3633;&#3657;&#3591;&#3649;&#3605;&#3656;&#3605;&#3657;&#3609;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3611;&#3618;&#3633;&#3591;&#3607;&#3657;&#3634;&#3618;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3650;&#3604;&#3618;&#3629;&#3656;&#3634;&#3609;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3607;&#3637;&#3656;
</span>1,2,3 <span lang=TH>&#3649;&#3621;&#3632; </span>4 <span lang=TH>&#3617;&#3634;&#3585;&#3656;&#3629;&#3609;
&#3605;&#3633;&#3623;&#3629;&#3618;&#3656;&#3634;&#3591;&#3648;&#3594;&#3656;&#3609;
&#3606;&#3657;&#3634;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;&#3629;&#3656;&#3634;&#3609;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3607;&#3637;&#3656;
</span>8 <span lang=TH>&#3585;&#3655;&#3605;&#3657;&#3629;&#3591;&#3629;&#3656;&#3634;&#3609;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3621;&#3635;&#3604;&#3633;&#3610;&#3607;&#3637;&#3656;
</span>1,2,3,4,5,6,7 <span lang=TH>&#3585;&#3656;&#3629;&#3609;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=TH>2. &#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3586;&#3629;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3621;&#3635;&#3604;&#3633;&#3610;&#3605;&#3634;&#3617;&#3604;&#3633;&#3594;&#3609;&#3637;
(</span>index sequential file) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3623;&#3636;&#3608;&#3637;&#3585;&#3634;&#3619;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3650;&#3604;&#3618;&#3649;&#3605;&#3656;&#3621;&#3632;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3651;&#3609;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3632;&#3617;&#3637;&#3588;&#3656;&#3634;&#3586;&#3629;&#3591;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3648;&#3611;&#3655;&#3609;&#3605;&#3633;&#3623;&#3619;&#3632;&#3610;&#3640;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3609;&#3633;&#3657;&#3609;
&#3588;&#3656;&#3634;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3629;&#3591;&#3649;&#3605;&#3656;&#3621;&#3632;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3592;&#3632;&#3605;&#3657;&#3629;&#3591;&#3652;&#3617;&#3656;&#3595;&#3657;&#3635;&#3585;&#3633;&#3610;&#3588;&#3656;&#3634;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3651;&#3609;&#3619;&#3632;&#3610;&#3610;&#3629;&#3639;&#3656;&#3609;
&#3654;
&#3651;&#3609;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3648;&#3604;&#3637;&#3618;&#3623;&#3585;&#3633;&#3609;
&#3648;&#3614;&#3619;&#3634;&#3632;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3609;&#3637;&#3657;&#3592;&#3632;&#3651;&#3594;&#3657;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3648;&#3611;&#3655;&#3609;&#3605;&#3633;&#3623;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3585;&#3634;&#3619;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3619;&#3639;&#3629;&#3585;&#3634;&#3619;&#3629;&#3656;&#3634;&#3609;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3651;&#3604;
&#3654;
&#3592;&#3632;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3652;&#3604;&#3657;&#3629;&#3618;&#3656;&#3634;&#3591;&#3626;&#3640;&#3656;&#3617;
&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3605;&#3657;&#3629;&#3591;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3621;&#3591;&#3626;&#3639;&#3656;&#3629;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;&#3650;&#3604;&#3618;&#3605;&#3619;&#3591;
&#3648;&#3594;&#3656;&#3609;
&#3592;&#3634;&#3609;&#3649;&#3617;&#3656;&#3648;&#3627;&#3621;&#3655;&#3585;
&#3585;&#3634;&#3619;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;&#3609;&#3637;&#3657;&#3652;&#3617;&#3656;&#3623;&#3656;&#3634;&#3592;&#3632;&#3626;&#3619;&#3657;&#3634;&#3591;&#3588;&#3619;&#3633;&#3657;&#3591;&#3649;&#3619;&#3585;&#3627;&#3619;&#3639;&#3629;&#3626;&#3619;&#3657;&#3634;&#3591;&#3651;&#3627;&#3617;&#3656;
&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3605;&#3656;&#3621;&#3632;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3605;&#3657;&#3629;&#3591;&#3617;&#3637;&#3615;&#3636;&#3621;&#3604;&#3660;&#3627;&#3609;&#3638;&#3656;&#3591;&#3651;&#3594;&#3657;&#3648;&#3611;&#3655;&#3609;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3629;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3619;&#3632;&#3610;&#3610;&#3611;&#3599;&#3636;&#3610;&#3633;&#3605;&#3636;&#3585;&#3634;&#3619;&#3592;&#3632;&#3609;&#3635;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3629;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3611;&#3626;&#3619;&#3657;&#3634;&#3591;&#3648;&#3611;&#3655;&#3609;&#3605;&#3634;&#3619;&#3634;&#3591;&#3604;&#3633;&#3594;&#3609;&#3637;&#3607;&#3635;&#3651;&#3627;&#3657;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3652;&#3604;&#3657;&#3648;&#3619;&#3655;&#3623;
&#3609;&#3629;&#3585;&#3592;&#3634;&#3585;&#3592;&#3632;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3651;&#3604;
&#3654;
&#3652;&#3604;&#3657;&#3648;&#3619;&#3655;&#3623;&#3586;&#3638;&#3657;&#3609;&#3649;&#3621;&#3657;&#3623;&#3618;&#3633;&#3591;&#3617;&#3637;&#3611;&#3619;&#3632;&#3650;&#3618;&#3594;&#3609;&#3660;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3614;&#3636;&#3656;&#3617;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3648;&#3586;&#3657;&#3634;&#3651;&#3609;&#3626;&#3656;&#3623;&#3609;&#3651;&#3604;
&#3654; &#3586;&#3629;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;
&#3651;&#3609;&#3649;&#3605;&#3656;&#3621;&#3632;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3606;&#3641;&#3585;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3621;&#3591;&#3626;&#3639;&#3656;&#3629;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3632;&#3617;&#3637;&#3605;&#3634;&#3619;&#3634;&#3591;&#3604;&#3633;&#3594;&#3609;&#3637;&#3607;&#3635;&#3651;&#3627;&#3657;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3651;&#3604;
&#3654;
&#3652;&#3604;&#3657;&#3619;&#3623;&#3604;&#3648;&#3619;&#3655;&#3623;&#3586;&#3638;&#3657;&#3609;
&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3621;&#3635;&#3604;&#3633;&#3610;&#3605;&#3634;&#3617;&#3604;&#3633;&#3594;&#3609;&#3637;&#3611;&#3619;&#3632;&#3585;&#3629;&#3610;&#3604;&#3657;&#3623;&#3618;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:34.5pt;text-indent:-18.0pt;line-height:normal;mso-list:l20 level1 lfo40;
tab-stops:list 36.0pt;vertical-align:baseline'><![if !supportLists]><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Angsana New";mso-fareast-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:#F5E2EE'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=TH style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&#3604;&#3633;&#3594;&#3609;&#3637; (</span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>index) <span lang=TH>&#3586;&#3629;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3632;&#3648;&#3585;&#3655;&#3610;&#3588;&#3656;&#3634;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3629;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3649;&#3621;&#3632;&#3607;&#3637;&#3656;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;
(</span>address) <span lang=TH>&#3607;&#3637;&#3656;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3609;&#3633;&#3657;&#3609;&#3606;&#3641;&#3585;&#3609;&#3635;&#3652;&#3611;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3652;&#3623;&#3657;
&#3595;&#3638;&#3656;&#3591;&#3604;&#3633;&#3594;&#3609;&#3637;&#3609;&#3637;&#3657;&#3592;&#3632;&#3605;&#3657;&#3629;&#3591;&#3648;&#3619;&#3637;&#3618;&#3591;&#3621;&#3635;&#3604;&#3633;&#3610;&#3592;&#3634;&#3585;&#3609;&#3657;&#3629;&#3618;&#3652;&#3611;&#3617;&#3634;&#3585;
&#3627;&#3619;&#3639;&#3629;&#3592;&#3634;&#3585;&#3617;&#3634;&#3585;&#3652;&#3611;&#3609;&#3657;&#3629;&#3618;&#3650;&#3604;&#3618;&#3607;&#3637;&#3656;&#3626;&#3656;&#3623;&#3609;&#3586;&#3629;&#3591;&#3604;&#3633;&#3594;&#3609;&#3637;&#3592;&#3632;&#3617;&#3637;&#3605;&#3633;&#3623;&#3610;&#3656;&#3591;&#3594;&#3637;&#3657;&#3652;&#3611;&#3618;&#3633;&#3591;&#3607;&#3637;&#3656;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;
&#3648;&#3614;&#3639;&#3656;&#3629;&#3592;&#3632;&#3652;&#3604;&#3657;&#3609;&#3635;&#3652;&#3611;&#3606;&#3638;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3651;&#3609;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3621;&#3633;&#3585;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:#F5E2EE'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:34.5pt;text-indent:-18.0pt;line-height:
normal;mso-list:l20 level1 lfo40;tab-stops:list 36.0pt;vertical-align:baseline'><![if !supportLists]><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Angsana New";mso-fareast-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:#F5E2EE'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=TH style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3621;&#3633;&#3585;
(</span><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black'>data
area) <span lang=TH>&#3592;&#3632;&#3648;&#3585;&#3655;&#3610;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3595;&#3638;&#3656;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3609;&#3633;&#3657;&#3609;&#3629;&#3634;&#3592;&#3592;&#3632;&#3648;&#3619;&#3637;&#3618;&#3591;&#3605;&#3634;&#3617;&#3621;&#3635;&#3604;&#3633;&#3610;&#3592;&#3634;&#3585;&#3609;&#3657;&#3629;&#3618;&#3652;&#3611;&#3617;&#3634;&#3585;&#3627;&#3619;&#3639;&#3629;&#3592;&#3634;&#3585;&#3617;&#3634;&#3585;&#3652;&#3611;&#3609;&#3657;&#3629;&#3618;
&#3651;&#3609;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3621;&#3635;&#3604;&#3633;&#3610;&#3586;&#3629;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3621;&#3633;&#3585;&#3629;&#3634;&#3592;&#3592;&#3632;&#3592;&#3633;&#3604;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3629;&#3629;&#3585;&#3652;&#3611;&#3585;&#3621;&#3640;&#3656;&#3617;
&#3654;
&#3650;&#3604;&#3618;&#3592;&#3632;&#3648;&#3623;&#3657;&#3609;&#3607;&#3637;&#3656;&#3652;&#3623;&#3657;&#3648;&#3614;&#3639;&#3656;&#3629;&#3651;&#3627;&#3657;&#3617;&#3637;&#3585;&#3634;&#3619;&#3611;&#3619;&#3633;&#3610;&#3611;&#3619;&#3640;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:#F5E2EE'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=TH>3. &#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3586;&#3629;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3626;&#3633;&#3617;&#3614;&#3633;&#3607;&#3608;&#3660;
(</span>relative file) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3607;&#3637;&#3656;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3619;&#3639;&#3629;&#3629;&#3656;&#3634;&#3609;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3651;&#3604;
&#3654; &#3652;&#3604;&#3657;&#3650;&#3604;&#3618;&#3605;&#3619;&#3591;
&#3623;&#3636;&#3608;&#3637;&#3609;&#3637;&#3657;&#3648;&#3611;&#3655;&#3609;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3648;&#3619;&#3637;&#3618;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3648;&#3586;&#3657;&#3634;&#3652;&#3611;&#3651;&#3609;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3650;&#3604;&#3618;&#3629;&#3634;&#3624;&#3633;&#3618;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3648;&#3611;&#3655;&#3609;&#3605;&#3633;&#3623;&#3585;&#3635;&#3627;&#3609;&#3604;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3586;&#3629;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3609;&#3633;&#3657;&#3609;
&#3654;
&#3650;&#3604;&#3618;&#3588;&#3656;&#3634;&#3586;&#3629;&#3591;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3651;&#3609;&#3649;&#3605;&#3656;&#3621;&#3632;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3586;&#3629;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3632;&#3617;&#3637;&#3588;&#3623;&#3634;&#3617;&#3626;&#3633;&#3617;&#3614;&#3633;&#3607;&#3608;&#3660;&#3585;&#3633;&#3610;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3607;&#3637;&#3656;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3609;&#3633;&#3657;&#3609;&#3606;&#3641;&#3585;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3652;&#3623;&#3657;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;
&#3588;&#3656;&#3634;&#3588;&#3623;&#3634;&#3617;&#3626;&#3633;&#3617;&#3614;&#3633;&#3607;&#3608;&#3660;&#3609;&#3637;&#3657;
&#3648;&#3611;&#3655;&#3609;&#3585;&#3634;&#3619;&#3585;&#3635;&#3627;&#3609;&#3604;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;
(</span>mapping function) <span lang=TH>&#3595;&#3638;&#3656;&#3591;&#3648;&#3611;&#3655;&#3609;&#3615;&#3633;&#3591;&#3585;&#3660;&#3594;&#3633;&#3656;&#3609;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3651;&#3609;&#3585;&#3634;&#3619;&#3648;&#3611;&#3621;&#3637;&#3656;&#3618;&#3609;&#3649;&#3611;&#3621;&#3591;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3629;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3651;&#3627;&#3657;&#3648;&#3611;&#3655;&#3609;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;
&#3650;&#3604;&#3618;&#3607;&#3637;&#3656;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3648;&#3619;&#3637;&#3618;&#3591;&#3621;&#3635;&#3604;&#3633;&#3610;&#3607;&#3637;&#3656;&#3586;&#3629;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3652;&#3617;&#3656;&#3592;&#3635;&#3611;&#3655;&#3609;&#3605;&#3657;&#3629;&#3591;&#3617;&#3637;&#3588;&#3623;&#3634;&#3617;&#3626;&#3633;&#3617;&#3614;&#3633;&#3609;&#3608;&#3660;&#3585;&#3633;&#3610;&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3621;&#3635;&#3604;&#3633;&#3610;&#3607;&#3637;&#3656;&#3586;&#3629;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3607;&#3637;&#3656;&#3606;&#3641;&#3585;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3652;&#3623;&#3657;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span lang=TH>&#3585;&#3634;&#3619;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3621;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3626;&#3633;&#3617;&#3614;&#3633;&#3607;&#3608;&#3660;
(</span>relative file) <span lang=TH>&#3592;&#3632;&#3606;&#3641;&#3585;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3629;&#3618;&#3641;&#3656;&#3610;&#3609;&#3626;&#3639;&#3656;&#3629;&#3607;&#3637;&#3656;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3586;&#3657;&#3634;&#3606;&#3638;&#3591;&#3652;&#3604;&#3657;&#3650;&#3604;&#3618;&#3605;&#3619;&#3591;
&#3648;&#3594;&#3656;&#3609;
&#3649;&#3612;&#3656;&#3609;&#3592;&#3634;&#3609;&#3649;&#3617;&#3656;&#3648;&#3627;&#3621;&#3655;&#3585;
&#3621;&#3633;&#3585;&#3625;&#3603;&#3632;&#3650;&#3588;&#3619;&#3591;&#3626;&#3619;&#3657;&#3634;&#3591;&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3626;&#3633;&#3617;&#3614;&#3633;&#3607;&#3608;&#3660;&#3592;&#3632;&#3611;&#3619;&#3632;&#3585;&#3629;&#3610;&#3604;&#3657;&#3623;&#3618;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;
&#3595;&#3638;&#3656;&#3591;&#3648;&#3585;&#3636;&#3604;&#3592;&#3634;&#3585;&#3609;&#3635;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3629;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3617;&#3634;&#3607;&#3635;&#3585;&#3634;&#3619;&#3585;&#3635;&#3627;&#3609;&#3604;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;
&#3595;&#3638;&#3656;&#3591;&#3585;&#3634;&#3619;&#3585;&#3635;&#3627;&#3609;&#3604;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3609;&#3637;&#3657;&#3592;&#3632;&#3607;&#3635;&#3585;&#3634;&#3619;&#3611;&#3619;&#3633;&#3610;&#3648;&#3611;&#3621;&#3637;&#3656;&#3618;&#3609;&#3588;&#3656;&#3634;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;&#3586;&#3629;&#3591;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3651;&#3627;&#3657;&#3648;&#3611;&#3655;&#3609;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3607;&#3637;&#3656;&#3588;&#3635;&#3609;&#3623;&#3603;&#3652;&#3604;&#3657;
&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3621;&#3633;&#3585;
&#3649;&#3615;&#3657;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3609;&#3637;&#3657;&#3611;&#3619;&#3632;&#3585;&#3629;&#3610;&#3604;&#3657;&#3623;&#3618;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3607;&#3637;&#3656;&#3592;&#3633;&#3604;&#3648;&#3619;&#3637;&#3618;&#3591;&#3605;&#3634;&#3617;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3650;&#3604;&#3618;&#3592;&#3632;&#3648;&#3619;&#3637;&#3618;&#3591;&#3592;&#3634;&#3585;&#3619;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3607;&#3637;&#3656;
</span>1 <span lang=TH>&#3592;&#3609;&#3606;&#3638;&#3591; </span>N <span
lang=TH>&#3649;&#3605;&#3656;&#3592;&#3632;&#3652;&#3617;&#3656;&#3648;&#3619;&#3637;&#3618;&#3591;&#3621;&#3635;&#3604;&#3633;&#3610;&#3605;&#3634;&#3617;&#3588;&#3656;&#3634;&#3586;&#3629;&#3591;&#3588;&#3637;&#3618;&#3660;&#3615;&#3636;&#3621;&#3604;&#3660;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><b><span lang=TH
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;
(</span></b><b><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black'>Memory
Unit)</span></b><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span lang=TH style='font-size:
16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>&#3648;&#3611;&#3655;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3592;&#3633;&#3604;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3607;&#3635;&#3591;&#3634;&#3609;&#3652;&#3604;&#3657;&#3619;&#3623;&#3604;&#3648;&#3619;&#3655;&#3623;&#3607;&#3637;&#3656;&#3626;&#3640;&#3604;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3592;&#3635;&#3649;&#3609;&#3585;&#3605;&#3634;&#3617;&#3621;&#3633;&#3585;&#3625;&#3603;&#3632;&#3585;&#3634;&#3619;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3652;&#3604;&#3657;
</span><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black'>2 <span
lang=TH>&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;
&#3604;&#3633;&#3591;&#3609;&#3637;&#3657;</span></span><span style='font-size:
16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>1.)<span lang=TH>&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3627;&#3621;&#3633;&#3585;(</span>Main
Memory) <span lang=TH>&#3627;&#3619;&#3639;&#3629;&#3648;&#3618;&#3585;&#3623;&#3656;&#3634;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3616;&#3634;&#3618;&#3651;&#3609;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3649;&#3610;&#3656;&#3591;&#3629;&#3629;&#3585;&#3648;&#3611;&#3655;&#3609;
</span>2 <span lang=TH>&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;
&#3652;&#3604;&#3657;&#3649;&#3585;&#3656;</span></span><span style='font-size:
16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:15.75pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>1.1<span lang=TH>&#3619;&#3629;&#3617;(</span>Read
Only Memory-ROM) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3607;&#3637;&#3656;&#3617;&#3637;&#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3629;&#3618;&#3641;&#3656;&#3649;&#3621;&#3657;&#3623;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3619;&#3637;&#3618;&#3585;&#3629;&#3629;&#3585;&#3617;&#3634;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3652;&#3604;&#3657;&#3649;&#3605;&#3656;&#3592;&#3632;&#3652;&#3617;&#3656;&#3648;&#3586;&#3637;&#3618;&#3609;&#3648;&#3614;&#3636;&#3656;&#3617;&#3648;&#3605;&#3636;&#3617;&#3652;&#3604;&#3657;
&#3649;&#3617;&#3657;&#3623;&#3656;&#3634;&#3592;&#3632;&#3652;&#3617;&#3656;&#3617;&#3637;&#3585;&#3619;&#3632;&#3649;&#3626;&#3652;&#3615;&#3615;&#3657;&#3634;&#3648;&#3621;&#3637;&#3657;&#3618;&#3591;&#3649;&#3585;&#3656;&#3619;&#3632;&#3610;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3585;&#3655;&#3626;&#3641;&#3597;&#3627;&#3634;&#3618;&#3652;&#3611;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><br>
<span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
 coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
 filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="Picture_x0020_36" o:spid="_x0000_i1029" type="#_x0000_t75"
 style='width:152.25pt;height:96pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="unit_6_files/image001.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=203 height=128
src="unit_6_files/image002.jpg" v:shapes="Picture_x0020_36"><![endif]></span><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&nbsp;&nbsp;&nbsp;&nbsp;</span><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:12.0pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-indent:15.75pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>1.2<span lang=TH>&#3649;&#3619;&#3617;(</span>Random
Access Memory) <span lang=TH>&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3616;&#3634;&#3618;&#3609;&#3629;&#3585;&#3648;&#3611;&#3655;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3629;&#3634;&#3624;&#3633;&#3618;&#3626;&#3639;&#3656;&#3629;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3621;&#3632;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;-&#3626;&#3656;&#3591;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:12.0pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><br>
<span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="Picture_x0020_37"
 o:spid="_x0000_i1028" type="#_x0000_t75" style='width:162pt;height:108pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="unit_6_files/image003.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=216 height=144
src="unit_6_files/image004.jpg" v:shapes="Picture_x0020_37"><![endif]></span><br
style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='line-height:normal'><span style='font-size:16.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>2.) <span lang=TH>&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3619;&#3629;&#3591;(</span>Second
Memory) <span lang=TH>&#3627;&#3619;&#3639;&#3629;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3616;&#3634;&#3618;&#3609;&#3629;&#3585;&#3648;&#3611;&#3655;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3607;&#3637;&#3656;&#3605;&#3657;&#3629;&#3591;&#3629;&#3634;&#3624;&#3633;&#3618;&#3626;&#3639;&#3656;&#3629;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:13.5pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>2.1<span lang=TH>&#3630;&#3634;&#3619;&#3660;&#3604;&#3604;&#3636;&#3626;&#3585;&#3660;(</span>Hard
Disk) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3630;&#3634;&#3619;&#3660;&#3604;&#3649;&#3623;&#3619;&#3660;&#3607;&#3637;&#3656;&#3607;&#3635;&#3627;&#3609;&#3657;&#3634;&#3607;&#3637;&#3656;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3651;&#3609;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;&#3607;&#3633;&#3657;&#3591;&#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3605;&#3656;&#3634;&#3591;&#3654;
&#3652;&#3615;&#3621;&#3660;&#3648;&#3629;&#3585;&#3626;&#3634;&#3619;</span>&nbsp;
<span lang=TH>&#3619;&#3623;&#3617;&#3607;&#3633;&#3657;&#3591;&#3648;&#3611;&#3655;&#3609;&#3607;&#3637;&#3656;&#3648;&#3585;&#3655;&#3610;&#3619;&#3632;&#3610;&#3610;&#3611;&#3599;&#3636;&#3610;&#3633;&#3605;&#3636;&#3585;&#3634;&#3619;&#3607;&#3637;&#3656;&#3648;&#3611;&#3655;&#3609;&#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;&#3588;&#3623;&#3610;&#3588;&#3640;&#3617;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:12.0pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><br>
<span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="Picture_x0020_38"
 o:spid="_x0000_i1027" type="#_x0000_t75" style='width:139.5pt;height:124.5pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="unit_6_files/image005.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=186 height=166
src="unit_6_files/image006.jpg" v:shapes="Picture_x0020_38"><![endif]></span><br>
<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:13.5pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>2.2<span lang=TH>&#3615;&#3621;&#3655;&#3629;&#3610;&#3611;&#3637;&#3657;&#3604;&#3636;&#3626;&#3585;&#3660;(</span>Floppy
Disk) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3617;&#3637;&#3586;&#3609;&#3634;&#3604;
</span>3.5 <span lang=TH>&#3609;&#3636;&#3657;&#3623;&#3617;&#3637;&#3621;&#3633;&#3585;&#3625;&#3603;&#3632;&#3648;&#3611;&#3655;&#3609;&#3649;&#3612;&#3656;&#3609;&#3585;&#3621;&#3617;&#3607;&#3635;&#3592;&#3634;&#3585;&#3652;&#3617;&#3621;&#3634;&#3619;&#3660;(</span>Mylar)<span
lang=TH>&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3610;&#3619;&#3619;&#3592;&#3640;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;&#3648;&#3614;&#3637;&#3618;&#3591;
</span>1.44 <span lang=TH>&#3648;&#3617;&#3585;&#3632;&#3652;&#3610;&#3605;&#3660;
&#3648;&#3607;&#3656;&#3634;&#3609;&#3633;&#3657;&#3609;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:12.0pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><br>
<span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="Picture_x0020_39"
 o:spid="_x0000_i1026" type="#_x0000_t75" style='width:145.5pt;height:96.75pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="unit_6_files/image007.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=194 height=129
src="unit_6_files/image008.jpg" v:shapes="Picture_x0020_39"><![endif]></span><br
style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:13.5pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'>2.3<span lang=TH>&#3595;&#3637;&#3604;&#3637;(</span>Compact
Disk-CD) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3604;&#3636;&#3592;&#3636;&#3607;&#3633;&#3621;
&#3648;&#3611;&#3655;&#3609;&#3626;&#3639;&#3656;&#3629;&#3607;&#3637;&#3656;&#3617;&#3637;&#3588;&#3623;&#3634;&#3617;&#3592;&#3640;&#3626;&#3641;&#3591;&#3648;&#3627;&#3617;&#3634;&#3632;&#3626;&#3635;&#3627;&#3619;&#3633;&#3610;&#3585;&#3634;&#3619;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3617;&#3633;&#3621;&#3605;&#3636;&#3617;&#3636;&#3648;&#3604;&#3637;&#3618;</span>&nbsp;</span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:12.0pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><br>
<span style='mso-no-proof:yes'><!--[if gte vml 1]><v:shape id="Picture_x0020_40"
 o:spid="_x0000_i1025" type="#_x0000_t75" style='width:130.5pt;height:116.25pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="unit_6_files/image009.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=174 height=155
src="unit_6_files/image010.jpg" v:shapes="Picture_x0020_40"><![endif]></span><br>
<br>
<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify;text-indent:
36.0pt;line-height:normal'><span lang=TH style='font-size:16.0pt;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&#3623;&#3636;&#3623;&#3633;&#3602;&#3609;&#3634;&#3585;&#3634;&#3619;&#3586;&#3629;&#3591;&#3585;&#3634;&#3619;&#3651;&#3594;&#3657;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3619;&#3629;&#3591;&#3652;&#3604;&#3657;&#3585;&#3657;&#3634;&#3623;&#3627;&#3609;&#3657;&#3634;&#3586;&#3638;&#3657;&#3609;&#3648;&#3611;&#3655;&#3609;&#3621;&#3635;&#3604;&#3633;&#3610;
&#3611;&#3633;&#3592;&#3592;&#3640;&#3610;&#3633;&#3609;&#3652;&#3604;&#3657;&#3617;&#3637;&#3585;&#3634;&#3619;&#3611;&#3619;&#3632;&#3604;&#3636;&#3625;&#3600;&#3660;&#3649;&#3612;&#3656;&#3609;&#3595;&#3637;&#3604;&#3637;
&#3651;&#3594;&#3657;&#3651;&#3609;&#3585;&#3634;&#3619;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3635;&#3609;&#3623;&#3609;&#3617;&#3634;&#3585;
&#3585;&#3634;&#3619;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3610;&#3609;&#3649;&#3612;&#3656;&#3609;&#3595;&#3637;&#3604;&#3637;&#3651;&#3594;&#3657;&#3627;&#3621;&#3633;&#3585;&#3585;&#3634;&#3619;&#3607;&#3634;&#3591;&#3649;&#3626;&#3591;
&#3649;&#3612;&#3656;&#3609;&#3595;&#3637;&#3604;&#3637;&#3607;&#3637;&#3656;&#3629;&#3656;&#3634;&#3609;&#3652;&#3604;&#3657;&#3629;&#3618;&#3656;&#3634;&#3591;&#3648;&#3604;&#3637;&#3618;&#3623;
&#3648;&#3619;&#3637;&#3618;&#3585;&#3585;&#3633;&#3609;&#3623;&#3656;&#3634;&#3595;&#3637;&#3604;&#3637;&#3619;&#3629;&#3617;
(</span><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black'>CD-
ROM) <span lang=TH>&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3592;&#3632;&#3606;&#3641;&#3585;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3617;&#3634;&#3592;&#3634;&#3585;&#3650;&#3619;&#3591;&#3591;&#3634;&#3609;&#3612;&#3641;&#3657;&#3612;&#3621;&#3636;&#3605;&#3648;&#3627;&#3617;&#3639;&#3629;&#3609;&#3585;&#3634;&#3619;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3648;&#3614;&#3621;&#3591;&#3627;&#3619;&#3639;&#3629;&#3616;&#3634;&#3614;&#3618;&#3609;&#3605;&#3619;&#3660;
&#3586;&#3657;&#3629;&#3648;&#3604;&#3656;&#3609;&#3586;&#3629;&#3591;&#3649;&#3612;&#3656;&#3609;&#3595;&#3637;&#3604;&#3637;
&#3588;&#3639;&#3629; &#3619;&#3634;&#3588;&#3634;&#3606;&#3641;&#3585;
&#3592;&#3640;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;&#3617;&#3634;&#3585;
&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3619;&#3639;&#3629;&#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;&#3652;&#3604;&#3657;&#3617;&#3634;&#3585;&#3585;&#3623;&#3656;&#3634;
</span>750 <span lang=TH>&#3648;&#3617;&#3585;&#3632;&#3652;&#3610;&#3605;&#3660;&#3605;&#3656;&#3629;&#3649;&#3612;&#3656;&#3609;
&#3649;&#3612;&#3656;&#3609;&#3595;&#3637;&#3604;&#3637;&#3617;&#3637;&#3648;&#3626;&#3657;&#3609;&#3612;&#3656;&#3634;&#3609;&#3624;&#3641;&#3609;&#3618;&#3660;&#3585;&#3621;&#3634;&#3591;&#3611;&#3619;&#3632;&#3617;&#3634;&#3603;
</span>5 <span lang=TH>&#3609;&#3636;&#3657;&#3623;
&#3651;&#3609;&#3611;&#3633;&#3592;&#3592;&#3640;&#3610;&#3633;&#3609;&#3648;&#3607;&#3588;&#3650;&#3609;&#3650;&#3621;&#3618;&#3637;&#3585;&#3634;&#3619;&#3612;&#3621;&#3636;&#3605;&#3649;&#3612;&#3656;&#3609;&#3595;&#3637;&#3604;&#3637;&#3652;&#3604;&#3657;&#3585;&#3657;&#3634;&#3623;&#3627;&#3609;&#3657;&#3634;&#3586;&#3638;&#3657;&#3609;
&#3592;&#3609;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3586;&#3637;&#3618;&#3609;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3610;&#3609;&#3649;&#3612;&#3656;&#3609;&#3595;&#3637;&#3604;&#3637;&#3652;&#3604;&#3657;&#3648;&#3627;&#3617;&#3639;&#3629;&#3609;&#3630;&#3634;&#3619;&#3660;&#3604;&#3604;&#3636;&#3626;&#3585;&#3660;
&#3648;&#3619;&#3637;&#3618;&#3585;&#3623;&#3656;&#3634; &#3629;&#3629;&#3611;&#3605;&#3636;&#3588;&#3633;&#3621;&#3604;&#3636;&#3626;&#3585;&#3660;
(</span>optical disk)</span><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-indent:36.0pt;line-height:
normal'><b><span lang=TH style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:blue'>&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3649;&#3610;&#3610;&#3648;&#3615;&#3621;&#3594;
(</span></b><b><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:blue'>Flash
memory)</span></b><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;text-align:justify;text-indent:
36.0pt;line-height:normal'><span lang=TH style='font-size:16.0pt;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3649;&#3610;&#3610;&#3648;&#3615;&#3621;&#3594;
(</span><span style='font-size:16.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black'>Flash
memory) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;
&#3619;&#3629;&#3617;&#3607;&#3637;&#3656;&#3648;&#3619;&#3637;&#3618;&#3585;&#3623;&#3656;&#3634;
&#3629;&#3637;&#3629;&#3637;&#3614;&#3619;&#3655;&#3629;&#3617; (</span>Electrically
Erasable Programnable Read Only Memory : EEPROM) <span lang=TH>&#3595;&#3638;&#3656;&#3591;&#3648;&#3611;&#3655;&#3609;&#3648;&#3607;&#3588;&#3650;&#3609;&#3650;&#3621;&#3618;&#3637;
&#3607;&#3637;&#3656;&#3609;&#3635;&#3586;&#3657;&#3629;&#3604;&#3637;&#3586;&#3629;&#3591;&#3619;&#3629;&#3617;
&#3649;&#3621;&#3632;&#3649;&#3619;&#3617;
&#3617;&#3634;&#3619;&#3623;&#3617;&#3585;&#3633;&#3609;
&#3607;&#3635;&#3651;&#3627;&#3657;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3594;&#3609;&#3636;&#3604;&#3609;&#3637;&#3657;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3652;&#3604;&#3657;&#3648;&#3627;&#3617;&#3639;&#3629;&#3609;&#3630;&#3634;&#3619;&#3660;&#3604;&#3604;&#3636;&#3626;&#3585;&#3660;
&#3588;&#3639;&#3629;
&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3648;&#3586;&#3637;&#3618;&#3609;&#3649;&#3621;&#3632;&#3621;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;&#3605;&#3634;&#3617;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;&#3649;&#3621;&#3632;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3652;&#3604;&#3657;
&#3649;&#3617;&#3657;&#3652;&#3617;&#3656;&#3652;&#3604;&#3657;&#3605;&#3656;&#3629;&#3648;&#3586;&#3657;&#3634;&#3585;&#3633;&#3610;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;
&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3594;&#3609;&#3636;&#3604;&#3609;&#3637;&#3657;&#3617;&#3637;&#3586;&#3609;&#3634;&#3604;&#3648;&#3621;&#3655;&#3585;
&#3609;&#3657;&#3635;&#3627;&#3609;&#3633;&#3585;&#3648;&#3610;&#3634;
&#3614;&#3585;&#3614;&#3634;&#3652;&#3604;&#3657;&#3626;&#3632;&#3604;&#3623;&#3585;
&#3617;&#3633;&#3585;&#3651;&#3594;&#3657;&#3648;&#3611;&#3655;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3651;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3609;&#3635;&#3648;&#3586;&#3657;&#3634;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3648;&#3594;&#3656;&#3609;
&#3585;&#3621;&#3657;&#3629;&#3591;&#3604;&#3636;&#3592;&#3636;&#3605;&#3629;&#3621;
&#3585;&#3621;&#3657;&#3629;&#3591;&#3623;&#3637;&#3604;&#3636;&#3607;&#3633;&#3624;&#3609;&#3660;
&#3607;&#3637;&#3656;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3610;&#3604;&#3636;&#3592;&#3636;&#3605;&#3629;&#3621;</span></span><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:12.0pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><br>
<br>
<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:12.0pt;line-height:normal'><span
style='font-size:16.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
  <!-- html here -->

            </div>
        </div>




        
  
        
    <!-- Page content -->

   
  </div>
  
  
<?php include("templates/scripts.php"); ?>
</body>

</html>