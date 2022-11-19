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
              <h3 class="mb-0"> บทที่ 5  การรับข้อมูลและแสดงข้อมูล ภาพ เสียง และวิดิโอ การแจ้งเตือนบนหน้าจอในรูปแบบต่างๆ </h3>
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
<link rel=File-List href="unit_5A_files/filelist.xml">
<link rel=Edit-Time-Data href="unit_5A_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Panudet Panumas</o:Author>
  <o:LastAuthor>Panudet Panumas</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>7</o:TotalTime>
  <o:Created>2022-10-14T15:09:00Z</o:Created>
  <o:LastSaved>2022-10-14T15:09:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>831</o:Words>
  <o:Characters>4743</o:Characters>
  <o:Lines>39</o:Lines>
  <o:Paragraphs>11</o:Paragraphs>
  <o:CharactersWithSpaces>5563</o:CharactersWithSpaces>
  <o:Version>16.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="unit_5A_files/themedata.thmx">
<link rel=colorSchemeMapping href="unit_5A_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
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
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
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
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:295373238;
	mso-list-template-ids:-1681253208;}
@list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l0:level2
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l0:level3
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
@list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l1
	{mso-list-id:320348841;
	mso-list-template-ids:-1231289912;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2
	{mso-list-id:369302297;
	mso-list-template-ids:-1817779818;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3
	{mso-list-id:541094855;
	mso-list-template-ids:-1788712060;}
@list l3:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l3:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l3:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level4
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
@list l3:level5
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
@list l3:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l3:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4
	{mso-list-id:579294657;
	mso-list-template-ids:1308373788;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l4:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l4:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l4:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l5
	{mso-list-id:1373731092;
	mso-list-template-ids:1760568518;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:25.1pt;
	mso-level-number-position:left;
	margin-left:25.1pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l5:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l5:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l5:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l5:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l5:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l5:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l5:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l5:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l6
	{mso-list-id:1527518204;
	mso-list-template-ids:-1390390112;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Symbol;}
@list l6:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l6:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l6:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l6:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l6:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l6:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l6:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l6:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:10.0pt;
	font-family:Wingdings;}
@list l7
	{mso-list-id:1691101354;
	mso-list-template-ids:-1671691310;}
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
 <o:shapedefaults v:ext="edit" spidmax="1033"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:36.0pt;word-wrap:break-word'>

<div class=WordSection1>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span lang=TH
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;mso-ansi-language:EN-IN'>&#3627;&#3609;&#3656;&#3623;&#3618;&#3607;&#3637;&#3656;
</span><span lang=EN-IN style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;mso-ansi-language:EN-IN'>5<o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi;mso-ansi-language:EN-IN'>&#3585;&#3634;&#3619;&#3619;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3621;&#3632;&#3649;&#3626;&#3604;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
&#3616;&#3634;&#3614; &#3648;&#3626;&#3637;&#3618;&#3591; &#3649;&#3621;&#3632;&#3623;&#3636;&#3604;&#3636;&#3650;&#3629;
&#3585;&#3634;&#3619;&#3649;&#3592;&#3657;&#3591;&#3648;&#3605;&#3639;&#3629;&#3609;&#3610;&#3609;&#3627;&#3609;&#3657;&#3634;&#3592;&#3629;&#3651;&#3609;&#3619;&#3641;&#3611;&#3649;&#3610;&#3610;&#3605;&#3656;&#3634;&#3591;&#3654;</span><span
lang=EN-IN style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;mso-ansi-language:EN-IN'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi;mso-ansi-language:EN-IN'>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3621;&#3632;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;
(</span><span lang=EN-IN style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;mso-ansi-language:EN-IN'>Input &amp; Output
Devices)<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'>&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3627;&#3619;&#3639;&#3629;&#3594;&#3640;&#3604;&#3588;&#3635;&#3626;&#3633;&#3656;&#3591;&#3592;&#3632;&#3617;&#3637;&#3627;&#3609;&#3656;&#3623;&#3618;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3648;&#3586;&#3657;&#3634;
&#3627;&#3619;&#3639;&#3629;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3626;&#3641;&#3656;&#3627;&#3609;&#3656;&#3623;&#3618;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;
&#3649;&#3621;&#3632;&#3617;&#3637;&#3627;&#3609;&#3656;&#3623;&#3618;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3621;&#3633;&#3614;&#3608;&#3660;&#3607;&#3637;&#3656;&#3652;&#3604;&#3657;&#3592;&#3634;&#3585;&#3585;&#3634;&#3619;&#3611;&#3619;&#3632;&#3617;&#3623;&#3621;&#3612;&#3621;&#3586;&#3629;&#3591;&#3627;&#3609;&#3656;&#3623;&#3618;&#3611;&#3619;&#3632;&#3617;&#3623;&#3621;&#3612;&#3621;&#3585;&#3621;&#3634;&#3591;
&#3585;&#3634;&#3619;&#3607;&#3637;&#3656;&#3617;&#3637;&#3627;&#3609;&#3656;&#3623;&#3618;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3621;&#3632;&#3627;&#3609;&#3656;&#3623;&#3618;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3609;&#3633;&#3657;&#3609;
&#3606;&#3639;&#3629;&#3623;&#3656;&#3634;&#3648;&#3611;&#3655;&#3609;&#3585;&#3634;&#3619;&#3626;&#3639;&#3656;&#3629;&#3626;&#3634;&#3619;&#3650;&#3604;&#3618;&#3605;&#3619;&#3591;&#3619;&#3632;&#3627;&#3623;&#3656;&#3634;&#3591;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;&#3585;&#3633;&#3610;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3626;&#3635;&#3627;&#3619;&#3633;&#3610;&#3627;&#3609;&#3656;&#3623;&#3618;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3592;&#3632;&#3607;&#3635;&#3627;&#3609;&#3657;&#3634;&#3607;&#3637;&#3656;&#3650;&#3604;&#3618;&#3612;&#3656;&#3634;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3651;&#3626;&#3656;&#3648;&#3586;&#3657;&#3634;&#3652;&#3611;&#3648;&#3614;&#3639;&#3656;&#3629;&#3651;&#3627;&#3657;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;&#3609;&#3635;&#3652;&#3611;&#3611;&#3619;&#3632;&#3617;&#3623;&#3621;&#3612;&#3621;
&#3650;&#3604;&#3618;&#3592;&#3632;&#3617;&#3637;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3607;&#3635;&#3627;&#3609;&#3657;&#3634;&#3607;&#3637;&#3656;&#3649;&#3611;&#3621;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3612;&#3656;&#3634;&#3609;&#3585;&#3634;&#3619;&#3611;&#3619;&#3632;&#3617;&#3623;&#3621;&#3612;&#3621;&#3586;&#3629;&#3591;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;&#3626;&#3656;&#3591;&#3652;&#3611;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3651;&#3627;&#3657;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3651;&#3609;&#3619;&#3641;&#3611;&#3649;&#3610;&#3610;&#3607;&#3637;&#3656;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3648;&#3586;&#3657;&#3634;&#3651;&#3592;&#3652;&#3604;&#3657;
&#3606;&#3639;&#3629;&#3623;&#3656;&#3634;&#3617;&#3637;&#3588;&#3623;&#3634;&#3617;&#3592;&#3635;&#3648;&#3611;&#3655;&#3609;&#3629;&#3618;&#3656;&#3634;&#3591;&#3618;&#3636;&#3656;&#3591;&#3607;&#3637;&#3656;&#3592;&#3632;&#3605;&#3657;&#3629;&#3591;&#3648;&#3586;&#3657;&#3634;&#3651;&#3592;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3648;&#3585;&#3637;&#3656;&#3618;&#3623;&#3586;&#3657;&#3629;&#3591;&#3651;&#3609;&#3585;&#3634;&#3619;&#3626;&#3639;&#3656;&#3629;&#3626;&#3634;&#3619;&#3619;&#3632;&#3627;&#3623;&#3656;&#3634;&#3591;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3585;&#3633;&#3610;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;&#3609;&#3633;&#3656;&#3609;&#3588;&#3639;&#3629;
&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;(</span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>Input Device) <span lang=TH>&#3649;&#3621;&#3632;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
(</span>Output Device)<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
(</span><span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>Input Device) <span lang=TH>&#3588;&#3639;&#3629;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3611;&#3657;&#3629;&#3609;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3621;&#3632;&#3588;&#3635;&#3626;&#3633;&#3656;&#3591;
&#3627;&#3619;&#3639;&#3629; &#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;
&#3648;&#3586;&#3657;&#3634;&#3626;&#3641;&#3657;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;
&#3650;&#3604;&#3618;&#3592;&#3632;&#3607;&#3635;&#3627;&#3609;&#3657;&#3634;&#3607;&#3637;&#3656;&#3649;&#3611;&#3621;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3652;&#3604;&#3657;&#3592;&#3634;&#3585;&#3585;&#3634;&#3619;&#3619;&#3633;&#3610;&#3648;&#3586;&#3657;&#3634;&#3648;&#3614;&#3639;&#3656;&#3629;&#3651;&#3627;&#3657;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;&#3604;&#3635;&#3648;&#3609;&#3636;&#3609;&#3585;&#3634;&#3619;&#3611;&#3619;&#3632;&#3617;&#3623;&#3621;&#3612;&#3621;&#3605;&#3634;&#3617;&#3607;&#3637;&#3656;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;
&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3649;&#3610;&#3656;&#3591;&#3629;&#3629;&#3585;&#3648;&#3611;&#3655;&#3609;
</span>4<span lang=TH> &#3611;&#3619;&#3632;&#3648;&#3616;&#3607;
&#3588;&#3639;&#3629;</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'> <span style='mso-tab-count:1'>               </span><span
lang=TH>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3649;&#3610;&#3610;&#3585;&#3604;
(</span>Kay Devices) <span lang=TH>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;&#3609;&#3637;&#3657;&#3652;&#3604;&#3657;&#3649;&#3585;&#3656;
&#3649;&#3611;&#3657;&#3609;&#3614;&#3636;&#3617;&#3614;&#3660;&#3627;&#3619;&#3639;&#3629;
&#3588;&#3637;&#3618;&#3660;&#3610;&#3629;&#3619;&#3660;&#3604; </span>Keyboard<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><!--[if gte vml 1]><o:wrapblock><v:shapetype id="_x0000_t75"
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
 </v:shapetype><v:shape id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_1"
  o:spid="_x0000_s1032" type="#_x0000_t75" style='position:absolute;
  margin-left:17.9pt;margin-top:-70.65pt;width:150pt;height:84.2pt;z-index:-251649024;
  visibility:visible;mso-wrap-style:square;mso-width-percent:0;
  mso-height-percent:0;mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
  mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
  mso-position-horizontal:absolute;mso-position-horizontal-relative:margin;
  mso-position-vertical:absolute;mso-position-vertical-relative:text;
  mso-width-percent:0;mso-height-percent:0;mso-width-relative:margin;
  mso-height-relative:margin'>
  <v:imagedata src="unit_5A_files/image001.jpg" o:title=""/>
  <w:wrap type="topAndBottom" anchorx="margin"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=24 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=200 height=112 src="unit_5A_files/image002.jpg" v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_1"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>                      </span>&#3649;&#3611;&#3657;&#3609;&#3614;&#3636;&#3617;&#3614;&#3660;</span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'>  &#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3594;&#3637;&#3657;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3649;&#3621;&#3632;&#3623;&#3634;&#3604;&#3619;&#3641;&#3611;
(</span><span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>Pointing and Drawing Devices) <span lang=TH>&#3588;&#3639;&#3629;
&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3607;&#3637;&#3656;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3594;&#3637;&#3657;&#3627;&#3619;&#3639;&#3629;&#3623;&#3634;&#3604;&#3619;&#3641;&#3611;&#3649;&#3607;&#3619;&#3585;&#3585;&#3634;&#3619;&#3588;&#3637;&#3618;&#3660;&#3627;&#3619;&#3639;&#3629;&#3614;&#3636;&#3617;&#3614;&#3660;
&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3609;&#3637;&#3657;&#3652;&#3604;&#3657;&#3629;&#3629;&#3585;&#3649;&#3610;&#3610;&#3617;&#3634;&#3648;&#3614;&#3639;&#3656;&#3629;&#3585;&#3634;&#3619;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3604;&#3657;&#3634;&#3609;&#3585;&#3619;&#3634;&#3615;&#3636;&#3585;&#3607;&#3637;&#3656;&#3652;&#3604;&#3657;&#3619;&#3633;&#3610;&#3588;&#3623;&#3634;&#3617;&#3609;&#3636;&#3618;&#3617;
&#3652;&#3604;&#3657;&#3649;&#3585;&#3656; &#3648;&#3617;&#3634;&#3626;&#3660;
(</span>mouse) <span lang=TH>&#3609;&#3629;&#3585;&#3592;&#3634;&#3585;&#3609;&#3637;&#3657;&#3618;&#3633;&#3591;&#3617;&#3637;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3594;&#3637;&#3657;&#3605;&#3635;&#3649;&#3627;&#3609;&#3656;&#3591;&#3627;&#3619;&#3639;&#3629;&#3623;&#3634;&#3604;
&#3619;&#3641;&#3611;&#3629;&#3639;&#3656;&#3609;&#3654;</span><o:p></o:p></span></p>

<p class=MsoNormal><!--[if gte vml 1]><o:wrapblock><v:shape id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_2"
  o:spid="_x0000_s1031" type="#_x0000_t75" alt="10 &#3629;&#3633;&#3609;&#3604;&#3633;&#3610; &#3648;&#3617;&#3634;&#3626;&#3660;&#3652;&#3619;&#3657;&#3648;&#3626;&#3637;&#3618;&#3591; &#3618;&#3637;&#3656;&#3627;&#3657;&#3629;&#3652;&#3627;&#3609;&#3604;&#3637; &#3611;&#3637; 2022 &#3607;&#3635;&#3591;&#3634;&#3609;&#3648;&#3591;&#3637;&#3618;&#3610; &#3592;&#3634;&#3585; Logitech, Nubwo  | mybest"
  style='position:absolute;margin-left:32.25pt;margin-top:-75.75pt;width:87.75pt;
  height:87.75pt;z-index:-251646976;visibility:visible;mso-wrap-style:square;
  mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
  mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
  mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
  mso-position-horizontal-relative:text;mso-position-vertical:absolute;
  mso-position-vertical-relative:text;mso-width-percent:0;mso-height-percent:0;
  mso-width-relative:margin;mso-height-relative:margin'>
  <v:imagedata src="unit_5A_files/image003.jpg" o:title="10 &#3629;&#3633;&#3609;&#3604;&#3633;&#3610; &#3648;&#3617;&#3634;&#3626;&#3660;&#3652;&#3619;&#3657;&#3648;&#3626;&#3637;&#3618;&#3591; &#3618;&#3637;&#3656;&#3627;&#3657;&#3629;&#3652;&#3627;&#3609;&#3604;&#3637; &#3611;&#3637; 2022 &#3607;&#3635;&#3591;&#3634;&#3609;&#3648;&#3591;&#3637;&#3618;&#3610; &#3592;&#3634;&#3585; Logitech, Nubwo  | mybest"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=43 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=117 height=117 src="unit_5A_files/image004.jpg"
   alt="10 &#3629;&#3633;&#3609;&#3604;&#3633;&#3610; &#3648;&#3617;&#3634;&#3626;&#3660;&#3652;&#3619;&#3657;&#3648;&#3626;&#3637;&#3618;&#3591; &#3618;&#3637;&#3656;&#3627;&#3657;&#3629;&#3652;&#3627;&#3609;&#3604;&#3637; &#3611;&#3637; 2022 &#3607;&#3635;&#3591;&#3634;&#3609;&#3648;&#3591;&#3637;&#3618;&#3610; &#3592;&#3634;&#3585; Logitech, Nubwo  | mybest"
   v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_2"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>                        </span>&#3648;&#3617;&#3634;&#3626;&#3660;
</span><span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'> <span style='mso-tab-count:1'>               </span>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3585;&#3623;&#3634;&#3604;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
(</span><span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>Scanning devices) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3648;&#3614;&#3639;&#3656;&#3629;&#3651;&#3594;&#3657;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3586;&#3657;&#3629;&#3588;&#3623;&#3634;&#3617;
&#3616;&#3634;&#3614;&#3623;&#3634;&#3604; &#3627;&#3619;&#3639;&#3629;
&#3626;&#3633;&#3597;&#3621;&#3633;&#3585;&#3625;&#3603;&#3660;&#3614;&#3636;&#3648;&#3624;&#3625;&#3629;&#3639;&#3656;&#3609;&#3654;
&#3648;&#3586;&#3657;&#3634;&#3626;&#3641;&#3656;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;
&#3650;&#3604;&#3618;&#3617;&#3637;&#3627;&#3621;&#3633;&#3585;&#3585;&#3634;&#3619;&#3607;&#3635;&#3591;&#3634;&#3609;&#3588;&#3639;&#3629;
&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3592;&#3632;&#3649;&#3611;&#3621;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3651;&#3627;&#3657;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3619;&#3641;&#3611;&#3586;&#3629;&#3591;&#3626;&#3633;&#3597;&#3621;&#3633;&#3585;&#3625;&#3603;&#3660;&#3604;&#3636;&#3592;&#3636;&#3605;&#3629;&#3621;&#3607;&#3637;&#3656;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3609;&#3635;&#3652;&#3611;&#3611;&#3619;&#3632;&#3617;&#3623;&#3621;&#3612;&#3621;&#3649;&#3621;&#3632;&#3649;&#3626;&#3604;&#3591;&#3610;&#3609;&#3592;&#3629;&#3616;&#3634;&#3614;&#3652;&#3604;&#3657;<span
style='mso-spacerun:yes'>   
</span>&#3649;&#3610;&#3656;&#3591;&#3629;&#3629;&#3585;&#3648;&#3611;&#3655;&#3609;
4 &#3611;&#3619;&#3632;&#3648;&#3616;&#3607; </span><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'><span
style='mso-spacerun:yes'>                 </span>&#3588;&#3639;&#3629;&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;
(</span><span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>Scanner) <span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3629;&#3656;&#3634;&#3609;&#3627;&#3619;&#3639;&#3629;
&#3626;&#3649;&#3585;&#3609; (</span>Scan) <span lang=TH>&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3610;&#3609;&#3648;&#3629;&#3585;&#3626;&#3634;&#3619;&#3648;&#3586;&#3657;&#3634;&#3626;&#3641;&#3657;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;
&#3650;&#3604;&#3618;
&#3648;&#3629;&#3585;&#3626;&#3634;&#3619;&#3607;&#3637;&#3656;&#3629;&#3656;&#3634;&#3609;&#3629;&#3634;&#3592;&#3592;&#3632;&#3611;&#3619;&#3632;&#3585;&#3629;&#3610;&#3604;&#3657;&#3623;&#3618;&#3586;&#3657;&#3629;&#3588;&#3623;&#3634;&#3617;&#3627;&#3619;&#3639;&#3629;&#3619;&#3641;&#3611;&#3616;&#3634;&#3614;&#3585;&#3619;&#3634;&#3615;&#3636;&#3585;&#3585;&#3655;&#3652;&#3604;&#3657;
&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;
&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3649;&#3610;&#3656;&#3591;&#3605;&#3634;&#3617;&#3623;&#3636;&#3608;&#3637;&#3585;&#3634;&#3619;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3652;&#3604;&#3657;
3 &#3611;&#3619;&#3632;&#3648;&#3616;&#3607; &#3588;&#3639;&#3629;</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'>1.&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3649;&#3610;&#3610;&#3617;&#3639;&#3629;&#3606;&#3639;&#3629;
(</span><span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>Hand-held scanner) <span lang=TH>&#3617;&#3637;&#3619;&#3634;&#3588;&#3634;&#3606;&#3641;&#3585;
&#3648;&#3614;&#3619;&#3634;&#3632;&#3585;&#3621;&#3652;&#3585;&#3621;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3652;&#3617;&#3656;&#3626;&#3621;&#3633;&#3610;&#3595;&#3633;&#3610;&#3595;&#3657;&#3629;&#3609;
&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3605;&#3657;&#3629;&#3591;&#3648;&#3621;&#3639;&#3656;&#3629;&#3609;&#3627;&#3633;&#3623;&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3652;&#3611;&#3610;&#3609;&#3627;&#3609;&#3633;&#3591;&#3626;&#3639;&#3629;&#3627;&#3619;&#3639;&#3629;&#3619;&#3641;&#3611;&#3616;&#3634;&#3614;&#3648;&#3629;&#3591;
&#3617;&#3637;&#3586;&#3609;&#3634;&#3604;&#3648;&#3621;&#3655;&#3585;&#3648;&#3627;&#3617;&#3634;&#3632;&#3585;&#3633;&#3610;&#3614;&#3585;&#3614;&#3634;</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><!--[if gte vml 1]><v:shape id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_3"
 o:spid="_x0000_s1030" type="#_x0000_t75" style='position:absolute;
 margin-left:-31.5pt;margin-top:-959.45pt;width:119.4pt;height:93.75pt;
 z-index:-251644928;visibility:visible;mso-wrap-style:square;
 mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
 mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text;mso-width-percent:0;mso-height-percent:0;
 mso-width-relative:margin;mso-height-relative:margin'>
 <v:imagedata src="unit_5A_files/image005.jpg" o:title=""/>
 <w:wrap type="tight"/>
</v:shape><![endif]--><![if !vml]><img width=159 height=125
src="unit_5A_files/image006.jpg" align=left hspace=12 v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_3"><![endif]><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><b><span style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi;color:black'>&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3649;&#3610;&#3610;&#3617;&#3639;&#3629;&#3606;&#3639;&#3629;</span></b><b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black'><o:p></o:p></span></b></p>

<p class=MsoNormal><b><span style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi;color:black'>2.<span lang=TH
style='background:white'>&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3649;&#3610;&#3610;&#3649;&#3607;&#3656;&#3609;&#3609;&#3629;&#3609;
(</span><span style='background:white'>Flatbed scanners)</span></span></b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black;background:white'>&nbsp;<span class=GramE><span lang=TH>&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3649;&#3610;&#3610;&#3649;&#3607;&#3656;&#3609;&#3648;&#3611;&#3655;&#3609;&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3607;&#3637;&#3656;&#3609;&#3636;&#3618;&#3617;&#3651;&#3594;&#3657;&#3585;&#3633;&#3609;&#3617;&#3634;&#3585;&#3607;&#3637;&#3656;&#3626;&#3640;&#3604;</span>&nbsp;&nbsp;<span
lang=TH>&#3611;&#3633;&#3592;&#3592;&#3640;&#3610;&#3633;&#3609;</span></span><span
lang=TH>
&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3648;&#3614;&#3637;&#3618;&#3591;&#3623;&#3634;&#3591;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;&#3605;&#3657;&#3609;&#3593;&#3610;&#3633;&#3610;&#3607;&#3637;&#3656;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;&#3652;&#3611;&#3610;&#3609;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;
&#3617;&#3637;&#3623;&#3636;&#3608;&#3637;&#3585;&#3634;&#3619;&#3607;&#3635;&#3591;&#3634;&#3609;&#3588;&#3621;&#3657;&#3634;&#3618;&#3585;&#3633;&#3610;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3606;&#3656;&#3634;&#3618;&#3648;&#3629;&#3585;&#3626;&#3634;&#3619;&#3607;&#3635;&#3651;&#3627;&#3657;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3649;&#3621;&#3632;&#3626;&#3632;&#3604;&#3623;&#3585;</span></span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=TH style='font-size:14.0pt;line-height:107%;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:
major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><!--[if gte vml 1]><v:shape
 id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_6" o:spid="_x0000_s1029"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:173.4pt;margin-top:14.35pt;width:102pt;height:102pt;z-index:-251654144;
 visibility:visible;mso-wrap-style:square;mso-wrap-distance-left:9pt;
 mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text'>
 <v:imagedata src="unit_5A_files/image007.png" o:title=""/>
 <w:wrap type="tight"/>
</v:shape><![endif]--><![if !vml]><img width=136 height=136
src="unit_5A_files/image008.png" align=left hspace=12 v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_6"><![endif]><span
lang=TH style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span lang=TH
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black;background:white'>&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3649;&#3610;&#3610;&#3649;&#3607;&#3656;&#3609;&#3609;&#3629;&#3609;</span></b><b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;tab-stops:297.75pt'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;tab-stops:297.75pt'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;tab-stops:297.75pt'><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black;
background:white'>3.<span lang=TH>&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3649;&#3610;&#3610;&#3626;&#3629;&#3604;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;
(</span>Sheet-fed scanner)</span></b><span style='font-size:14.0pt;line-height:
107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black;
background:white'>&nbsp;<span lang=TH>&#3648;&#3611;&#3655;&#3609;&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3607;&#3637;&#3656;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3605;&#3657;&#3629;&#3591;&#3626;&#3629;&#3604;&#3616;&#3634;&#3614;&#3627;&#3619;&#3639;&#3629;&#3648;&#3629;&#3585;&#3626;&#3634;&#3619;&#3648;&#3586;&#3657;&#3634;&#3652;&#3611;</span></span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black'><br>
<span style='background:white'>&nbsp;<span class=GramE><span lang=TH>&#3618;&#3633;&#3591;&#3594;&#3656;&#3629;&#3591;&#3626;&#3635;&#3627;&#3619;&#3633;&#3610;&#3629;&#3656;&#3634;&#3609;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;(</span></span>Scan
head) <span lang=TH>&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3594;&#3609;&#3636;&#3604;&#3609;&#3637;&#3657;&#3648;&#3627;&#3617;&#3634;&#3632;&#3626;&#3635;&#3627;&#3619;&#3633;&#3610;&#3585;&#3634;&#3619;&#3629;&#3656;&#3634;&#3609;&#3648;&#3629;&#3585;&#3626;&#3634;&#3619;&#3607;&#3637;&#3656;&#3648;&#3611;&#3655;&#3609;&#3649;&#3612;&#3656;&#3609;
&#3654; &#3649;&#3605;&#3656;&#3652;&#3617;&#3656;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3629;&#3656;&#3634;&#3609;&#3648;&#3629;&#3585;&#3626;&#3634;&#3619;&#3607;&#3637;&#3656;&#3648;&#3618;&#3655;&#3610;&#3648;&#3611;&#3655;&#3609;&#3648;&#3621;&#3656;&#3617;&#3652;&#3604;&#3657;</span></span></span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;mso-no-proof:
yes'><!--[if gte vml 1]><v:shape id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_7"
 o:spid="_x0000_i1026" type="#_x0000_t75" style='width:126.75pt;height:115.5pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="unit_5A_files/image009.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=169 height=154
src="unit_5A_files/image010.jpg" v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_7"><![endif]></span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span lang=TH
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black;background:white'>&#3626;&#3649;&#3585;&#3609;&#3648;&#3609;&#3629;&#3619;&#3660;&#3649;&#3610;&#3610;&#3626;&#3629;&#3604;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;</span></b><b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></b></p>

<ul type=disc>
 <li class=MsoNormal style='color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
     auto;line-height:normal;mso-list:l6 level1 lfo2;tab-stops:list 36.0pt;
     background:white'><b><span lang=TH style='font-size:14.0pt;font-family:
     "Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
     "Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
     major-bidi'>&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3629;&#3656;&#3634;&#3609;&#3610;&#3634;&#3619;&#3660;&#3650;&#3588;&#3657;&#3604;
     (</span></b><b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Barcode
     Reader)</span></b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&nbsp;<span
     lang=TH>&#3617;&#3637; </span>2 <span lang=TH>&#3649;&#3610;&#3610;
     &#3588;&#3639;&#3629;
     &#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3629;&#3656;&#3634;&#3609;&#3649;&#3610;&#3610;&#3617;&#3639;&#3629;&#3606;&#3639;&#3629;(</span>Wand
     reader) <span lang=TH>&#3649;&#3621;&#3632;
     &#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3629;&#3656;&#3634;&#3609;&#3649;&#3610;&#3610;&#3605;&#3636;&#3604;&#3605;&#3633;&#3657;&#3591;
     (</span>platform reader)<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;line-height:normal;background:white'><span style='font-size:
14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;mso-no-proof:
yes'><!--[if gte vml 1]><v:shape id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_8"
 o:spid="_x0000_i1025" type="#_x0000_t75" style='width:122.25pt;height:122.25pt;
 visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="unit_5A_files/image011.jpg" o:title=""/>
</v:shape><![endif]--><![if !vml]><img width=163 height=163
src="unit_5A_files/image012.jpg" v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_8"><![endif]></span></b><b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></b></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span lang=TH
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black;background:white'>&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3629;&#3656;&#3634;&#3609;&#3610;&#3634;&#3619;&#3660;&#3650;&#3588;&#3657;&#3604;</span></b><b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;tab-stops:297.75pt'><b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;tab-stops:297.75pt'><b><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     line-height:normal;mso-list:l7 level1 lfo3;tab-stops:list 36.0pt'><b><span
     lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3617;&#3633;&#3621;&#3605;&#3636;&#3617;&#3637;&#3648;&#3604;&#3637;&#3618;
     (</span></b><b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Multimedia
     Input Devices)</span></b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&nbsp;<span
     lang=TH>&#3649;&#3610;&#3656;&#3591;&#3648;&#3611;&#3655;&#3609; </span>2 <span
     lang=TH>&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;&#3588;&#3639;&#3629;</span>&nbsp;<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l2 level3 lfo4;
tab-stops:list 36.0pt'><![if !supportLists]><span style='font-size:10.0pt;
mso-bidi-font-size:14.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'> <span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><b><span
lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3619;&#3633;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3648;&#3626;&#3637;&#3618;&#3591;
(</span></b><b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Sound Input
Devices)</span></b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&nbsp;<span
lang=TH>&#3648;&#3626;&#3637;&#3618;&#3591;&#3607;&#3637;&#3656;&#3648;&#3586;&#3657;&#3634;&#3626;&#3641;&#3656;&#3619;&#3632;&#3610;&#3610;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;
&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3607;&#3637;&#3656;&#3592;&#3632;&#3609;&#3635;&#3617;&#3634;&#3649;&#3585;&#3657;&#3652;&#3586;
&#3648;&#3611;&#3621;&#3637;&#3656;&#3618;&#3609;&#3649;&#3611;&#3621;&#3591;&#3650;&#3604;&#3618;&#3651;&#3594;&#3657;&#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;&#3592;&#3633;&#3604;&#3585;&#3634;&#3619;&#3648;&#3626;&#3637;&#3618;&#3591;
&#3652;&#3617;&#3650;&#3588;&#3619;&#3650;&#3615;&#3609;
&#3648;&#3611;&#3655;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3619;&#3633;&#3610;&#3648;&#3626;&#3637;&#3618;&#3591;
&#3595;&#3638;&#3656;&#3591;&#3648;&#3626;&#3637;&#3618;&#3591;&#3648;&#3626;&#3637;&#3618;&#3591;&#3607;&#3637;&#3656;&#3652;&#3604;&#3657;&#3592;&#3634;&#3585;&#3652;&#3617;&#3650;&#3588;&#3619;&#3650;&#3615;&#3609;&#3592;&#3632;&#3606;&#3641;&#3585;&#3626;&#3656;&#3591;&#3652;&#3611;&#3649;&#3611;&#3621;&#3591;&#3626;&#3633;&#3597;&#3597;&#3634;&#3603;&#3651;&#3609;&#3595;&#3634;&#3623;&#3604;&#3660;&#3585;&#3634;&#3619;&#3660;&#3604;
&#3648;&#3614;&#3639;&#3656;&#3629;&#3648;&#3585;&#3655;&#3610;&#3621;&#3591;&#3651;&#3609;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;</span>&nbsp;<o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;text-indent:-18.0pt;line-height:normal;mso-list:l3 level3 lfo5;
tab-stops:list 36.0pt'><![if !supportLists]><span style='font-size:10.0pt;
mso-bidi-font-size:14.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
mso-bidi-font-family:Wingdings'><span style='mso-list:Ignore'> <span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><b><span
lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3616;&#3634;&#3614;
(</span></b><b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Recording
Devices)</span></b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&nbsp;<span
lang=TH>&#3648;&#3611;&#3655;&#3609;&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3651;&#3609;&#3585;&#3634;&#3619;&#3626;&#3619;&#3657;&#3634;&#3591;&#3616;&#3634;&#3614;&#3627;&#3619;&#3639;&#3629;&#3610;&#3633;&#3609;&#3607;&#3638;&#3585;&#3616;&#3634;&#3614;&#3592;&#3634;&#3585;&#3616;&#3634;&#3614;&#3592;&#3619;&#3636;&#3591;
&#3649;&#3621;&#3657;&#3623;&#3649;&#3611;&#3621;&#3591;&#3651;&#3627;&#3657;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3619;&#3641;&#3611;&#3604;&#3636;&#3592;&#3636;&#3607;&#3633;&#3621;
&#3648;&#3594;&#3656;&#3609;
&#3585;&#3621;&#3657;&#3629;&#3591;&#3606;&#3656;&#3634;&#3618;&#3616;&#3634;&#3614;
&#3585;&#3621;&#3657;&#3629;&#3591;&#3623;&#3637;&#3604;&#3637;&#3650;&#3629;&#3604;&#3636;&#3592;&#3636;&#3607;&#3633;&#3621;</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;line-height:normal'><b><span
lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black;background:white'>&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;
(</span></b><b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black;
background:white'>Output Devices)</span></b><span style='font-size:14.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black;background:white'>&nbsp;<span lang=TH>&#3588;&#3639;&#3629;
&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3651;&#3609;&#3585;&#3634;&#3619;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3621;&#3633;&#3614;&#3608;&#3660;&#3607;&#3637;&#3656;&#3652;&#3604;&#3657;&#3592;&#3634;&#3585;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;
&#3595;&#3638;&#3656;&#3591;&#3592;&#3632;&#3607;&#3635;&#3627;&#3609;&#3657;&#3634;&#3607;&#3637;&#3656;&#3649;&#3611;&#3621;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3612;&#3656;&#3634;&#3609;&#3585;&#3634;&#3619;&#3611;&#3619;&#3632;&#3617;&#3623;&#3621;&#3612;&#3621;&#3592;&#3634;&#3585;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;&#3651;&#3627;&#3657;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3619;&#3641;&#3611;&#3649;&#3610;&#3610;&#3607;&#3637;&#3656;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3648;&#3586;&#3657;&#3634;&#3651;&#3592;
&#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3607;&#3635;&#3627;&#3609;&#3657;&#3634;&#3607;&#3637;&#3656;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3621;&#3633;&#3614;&#3608;&#3660;&#3592;&#3634;&#3585;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660;
&#3649;&#3610;&#3656;&#3591;&#3629;&#3629;&#3585;&#3652;&#3604;&#3657; </span>2
<span lang=TH>&#3611;&#3619;&#3632;&#3648;&#3616;&#3607; &#3588;&#3639;&#3629;</span></span><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
     auto;line-height:normal;mso-list:l1 level1 lfo6;tab-stops:list 36.0pt;
     background:white'><span lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&#3627;&#3609;&#3656;&#3623;&#3618;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3594;&#3633;&#3656;&#3623;&#3588;&#3619;&#3634;&#3623;
     (</span><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Soft Copy)
     <span lang=TH>&#3627;&#3617;&#3634;&#3618;&#3606;&#3638;&#3591;
     &#3585;&#3634;&#3619;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3629;&#3629;&#3585;&#3617;&#3634;&#3651;&#3627;&#3657;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3652;&#3604;&#3657;&#3619;&#3633;&#3610;&#3607;&#3619;&#3634;&#3610;&#3651;&#3609;&#3586;&#3603;&#3632;&#3609;&#3633;&#3657;&#3609;
     &#3649;&#3605;&#3656;&#3648;&#3617;&#3639;&#3656;&#3629;&#3648;&#3621;&#3636;&#3585;&#3585;&#3634;&#3619;&#3607;&#3635;&#3591;&#3634;&#3609;&#3649;&#3621;&#3657;&#3623;&#3585;&#3655;&#3627;&#3634;&#3618;&#3652;&#3611;
     &#3652;&#3617;&#3656;&#3648;&#3627;&#3621;&#3639;&#3629;&#3648;&#3611;&#3655;&#3609;&#3623;&#3633;&#3605;&#3606;&#3640;&#3651;&#3627;&#3657;&#3648;&#3585;&#3655;&#3610;&#3652;&#3604;&#3657;
     &#3649;&#3605;&#3656;&#3606;&#3657;&#3634;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;&#3648;&#3585;&#3655;&#3610;&#3612;&#3621;&#3621;&#3633;&#3614;&#3608;&#3660;&#3609;&#3633;&#3657;&#3609;&#3585;&#3655;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3626;&#3656;&#3591;&#3606;&#3656;&#3634;&#3618;&#3652;&#3611;&#3648;&#3585;&#3655;&#3610;&#3651;&#3609;&#3619;&#3641;&#3611;&#3586;&#3629;&#3591;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3651;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3648;&#3585;&#3655;&#3610;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3626;&#3635;&#3619;&#3629;&#3591;
     &#3648;&#3614;&#3639;&#3656;&#3629;&#3651;&#3627;&#3657;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3609;&#3635;&#3617;&#3634;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3651;&#3609;&#3616;&#3634;&#3618;&#3627;&#3621;&#3633;&#3591;
     &#3627;&#3609;&#3656;&#3623;&#3618;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3607;&#3637;&#3656;&#3592;&#3633;&#3604;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3585;&#3621;&#3640;&#3656;&#3617;&#3609;&#3637;&#3657;
     &#3588;&#3639;&#3629; &#3592;&#3629;&#3616;&#3634;&#3614;
     &#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3593;&#3634;&#3618;&#3616;&#3634;&#3614;
     &#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3626;&#3656;&#3591;&#3629;&#3629;&#3585;&#3648;&#3626;&#3637;&#3618;&#3591;</span>&nbsp;<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
margin-left:36.0pt;line-height:normal;background:white'><span style='font-size:
14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><!--[if gte vml 1]><v:shape id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_10"
 o:spid="_x0000_s1028" type="#_x0000_t75" alt="5.&#3627;&#3609;&#3657;&#3634;&#3592;&#3629;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660; - cp5910122113044"
 style='position:absolute;margin-left:170.25pt;margin-top:12.3pt;width:107.65pt;
 height:84.75pt;z-index:-251653120;visibility:visible;mso-wrap-style:square;
 mso-width-percent:0;mso-height-percent:0;mso-wrap-distance-left:9pt;
 mso-wrap-distance-top:0;mso-wrap-distance-right:9pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text;mso-width-percent:0;mso-height-percent:0;
 mso-width-relative:margin;mso-height-relative:margin'>
 <v:imagedata src="unit_5A_files/image013.jpg" o:title="5"/>
 <w:wrap type="tight"/>
</v:shape><![endif]--><![if !vml]><img width=144 height=113
src="unit_5A_files/image014.jpg" align=left hspace=12
alt="5.&#3627;&#3609;&#3657;&#3634;&#3592;&#3629;&#3588;&#3629;&#3617;&#3614;&#3636;&#3623;&#3648;&#3605;&#3629;&#3619;&#3660; - cp5910122113044"
v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_10"><![endif]><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><b><span lang=TH style='font-size:14.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'><span
style='mso-spacerun:yes'> </span>&#3592;&#3629;&#3616;&#3634;&#3614;</span></b><b><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal;background:white'><!--[if gte vml 1]><v:shape
 id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_12" o:spid="_x0000_s1027"
 type="#_x0000_t75" alt="&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3593;&#3634;&#3618;&#3616;&#3634;&#3614;&#3650;&#3611;&#3619;&#3648;&#3592;&#3588;&#3648;&#3605;&#3629;&#3619;&#3660; Acer X1327Wi DLP Wireless Projector - &#3629;&#3633;&#3609;&#3604;&#3633;&#3610;1  &#3612;&#3641;&#3657;&#3609;&#3635;&#3648;&#3586;&#3657;&#3634;&#3586;&#3629;&#3591;&#3648;&#3621;&#3656;&#3609;&#3586;&#3634;&#3618;&#3626;&#3656;&#3591;, &#3650;&#3619;&#3591;&#3591;&#3634;&#3609;&#3612;&#3621;&#3636;&#3605;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3648;&#3621;&#3656;&#3609;&#3626;&#3609;&#3634;&#3617;(&#3616;&#3634;&#3588;&#3648;&#3627;&#3609;&#3639;&#3629;)  &#3626;&#3629;&#3610;&#3606;&#3634;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3604;&#3656;&#3623;&#3609; Line : @toysandgym"
 style='position:absolute;left:0;text-align:left;margin-left:172.35pt;
 margin-top:13.85pt;width:105.55pt;height:105.55pt;z-index:-251652096;
 visibility:visible;mso-wrap-style:square;mso-width-percent:0;
 mso-height-percent:0;mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
 mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
 mso-position-horizontal:absolute;mso-position-horizontal-relative:text;
 mso-position-vertical:absolute;mso-position-vertical-relative:text;
 mso-width-percent:0;mso-height-percent:0;mso-width-relative:margin;
 mso-height-relative:margin'>
 <v:imagedata src="unit_5A_files/image015.jpg" o:title=" @toysandgym"/>
 <w:wrap type="tight"/>
</v:shape><![endif]--><![if !vml]><img width=141 height=141
src="unit_5A_files/image016.jpg" align=left hspace=12
alt="&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3593;&#3634;&#3618;&#3616;&#3634;&#3614;&#3650;&#3611;&#3619;&#3648;&#3592;&#3588;&#3648;&#3605;&#3629;&#3619;&#3660; Acer X1327Wi DLP Wireless Projector - &#3629;&#3633;&#3609;&#3604;&#3633;&#3610;1  &#3612;&#3641;&#3657;&#3609;&#3635;&#3648;&#3586;&#3657;&#3634;&#3586;&#3629;&#3591;&#3648;&#3621;&#3656;&#3609;&#3586;&#3634;&#3618;&#3626;&#3656;&#3591;, &#3650;&#3619;&#3591;&#3591;&#3634;&#3609;&#3612;&#3621;&#3636;&#3605;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3648;&#3621;&#3656;&#3609;&#3626;&#3609;&#3634;&#3617;(&#3616;&#3634;&#3588;&#3648;&#3627;&#3609;&#3639;&#3629;)  &#3626;&#3629;&#3610;&#3606;&#3634;&#3617;&#3586;&#3657;&#3629;&#3617;&#3641;&#3621;&#3604;&#3656;&#3623;&#3609; Line : @toysandgym"
v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_12"><![endif]><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p></o:p></span></p>

<p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal;background:white'><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal;background:white'><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal;background:white'><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><b><span lang=TH style='font-size:14.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3593;&#3634;&#3618;&#3616;&#3634;&#3614;</span></b><b><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><b><span style='font-size:14.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal;background:white'><!--[if gte vml 1]><v:shape
 id="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_14" o:spid="_x0000_s1026"
 type="#_x0000_t75" alt="&#3619;&#3637;&#3623;&#3636;&#3623;&#3621;&#3635;&#3650;&#3614;&#3591; NHT C-3 Carbon Fiber &#3592;&#3634;&#3585; Primeaudio - conice"
 style='position:absolute;left:0;text-align:left;margin-left:170.2pt;
 margin-top:21.05pt;width:126.15pt;height:84.1pt;z-index:-251651072;
 visibility:visible;mso-wrap-style:square;mso-width-percent:0;
 mso-height-percent:0;mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
 mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
 mso-position-horizontal:absolute;mso-position-horizontal-relative:text;
 mso-position-vertical:absolute;mso-position-vertical-relative:text;
 mso-width-percent:0;mso-height-percent:0;mso-width-relative:margin;
 mso-height-relative:margin'>
 <v:imagedata src="unit_5A_files/image017.jpg" o:title="&#3619;&#3637;&#3623;&#3636;&#3623;&#3621;&#3635;&#3650;&#3614;&#3591; NHT C-3 Carbon Fiber &#3592;&#3634;&#3585; Primeaudio - conice"/>
 <w:wrap type="tight"/>
</v:shape><![endif]--><![if !vml]><img width=168 height=112
src="unit_5A_files/image018.jpg" align=left hspace=12
alt="&#3619;&#3637;&#3623;&#3636;&#3623;&#3621;&#3635;&#3650;&#3614;&#3591; NHT C-3 Carbon Fiber &#3592;&#3634;&#3585; Primeaudio - conice"
v:shapes="_x0e23__x0e39__x0e1b__x0e20__x0e32__x0e1e__x0020_14"><![endif]><span
lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p></o:p></span></p>

<p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal;background:white'><span lang=TH
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><span style='font-size:14.0pt;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white'><b><span lang=TH style='font-size:14.0pt;
font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
"Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
color:black'>&#3621;&#3635;&#3650;&#3614;&#3591;</span></b><b><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:black'><o:p></o:p></span></b></p>

<ul type=disc>
 <li class=MsoNormal style='color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
     auto;line-height:normal;mso-list:l4 level1 lfo7;tab-stops:list 36.0pt;
     background:white'><span lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&#3627;&#3609;&#3656;&#3623;&#3618;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3606;&#3634;&#3623;&#3634;&#3619;
     (</span><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Hard Copy)
     <span lang=TH>&#3627;&#3617;&#3634;&#3618;&#3606;&#3638;&#3591;
     &#3585;&#3634;&#3619;&#3649;&#3626;&#3604;&#3591;&#3612;&#3621;&#3607;&#3637;&#3656;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3592;&#3633;&#3610;&#3605;&#3657;&#3629;&#3591;
     &#3649;&#3621;&#3632;&#3648;&#3588;&#3621;&#3639;&#3656;&#3629;&#3609;&#3618;&#3657;&#3634;&#3618;&#3652;&#3604;&#3657;&#3605;&#3634;&#3617;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;
     &#3617;&#3633;&#3585;&#3592;&#3632;&#3629;&#3629;&#3585;&#3617;&#3634;&#3651;&#3609;&#3619;&#3641;&#3611;&#3586;&#3629;&#3591;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;
     &#3595;&#3638;&#3656;&#3591;&#3612;&#3641;&#3657;&#3651;&#3594;&#3657;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3609;&#3635;&#3652;&#3611;&#3651;&#3594;&#3657;&#3651;&#3609;&#3607;&#3637;&#3656;&#3605;&#3656;&#3634;&#3591;&#3654;
     &#3652;&#3604;&#3657;
     &#3629;&#3640;&#3611;&#3585;&#3619;&#3603;&#3660;&#3607;&#3637;&#3656;&#3651;&#3594;&#3657;&#3648;&#3594;&#3656;&#3609;
     &#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;
     &#3649;&#3621;&#3632;
     &#3614;&#3621;&#3629;&#3605;&#3648;&#3605;&#3629;&#3619;&#3660;</span><o:p></o:p></span></li>
 <ul type=circle>
  <ul type=square>
   <li class=MsoNormal style='color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
       auto;line-height:normal;mso-list:l4 level3 lfo7;tab-stops:list 108.0pt;
       background:white'><span lang=TH style='font-size:14.0pt;font-family:
       "Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-fareast-font-family:
       "Times New Roman";mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
       major-bidi'>&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;
       (</span><span style='font-size:14.0pt;font-family:"Angsana New",serif;
       mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
       mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Printer)
       <span lang=TH>&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3649;&#3610;&#3656;&#3591;&#3605;&#3634;&#3617;&#3623;&#3636;&#3608;&#3637;&#3585;&#3634;&#3619;&#3614;&#3636;&#3617;&#3614;&#3660;&#3652;&#3604;&#3657;
       </span>2 <span lang=TH>&#3594;&#3609;&#3636;&#3604;&#3588;&#3639;&#3629;
       &#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3649;&#3610;&#3610;&#3585;&#3619;&#3632;&#3607;&#3610;
       &#3649;&#3621;&#3632;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3594;&#3609;&#3636;&#3604;&#3652;&#3617;&#3656;&#3585;&#3619;&#3632;&#3607;&#3610;</span><o:p></o:p></span></li>
  </ul>
 </ul>
</ul>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black;
background:white'>1.<span lang=TH>&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3649;&#3610;&#3610;&#3585;&#3619;&#3632;&#3607;&#3610;
(</span>Impact printer)</span></b><span style='font-size:14.0pt;line-height:
107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:black;
background:white'>&nbsp;<span lang=TH>&#3651;&#3594;&#3657;&#3585;&#3634;&#3619;&#3605;&#3629;&#3585;&#3651;&#3627;&#3657;&#3588;&#3634;&#3619;&#3660;&#3610;&#3629;&#3609;&#3610;&#3609;&#3612;&#3657;&#3634;&#3627;&#3617;&#3638;&#3585;&#3605;&#3636;&#3604;&#3610;&#3609;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;&#3619;&#3641;&#3611;&#3649;&#3610;&#3610;&#3607;&#3637;&#3656;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;</span></span><span
lang=TH style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black'> <span style='background:white'>&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3614;&#3636;&#3617;&#3614;&#3660;&#3626;&#3635;&#3648;&#3609;&#3634;
&#3588;&#3619;&#3633;&#3657;&#3591;&#3621;&#3632;&#3627;&#3621;&#3634;&#3618;&#3594;&#3640;&#3604;&#3650;&#3604;&#3618;&#3651;&#3594;&#3657;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;&#3588;&#3634;&#3619;&#3660;&#3610;&#3629;&#3609;&#3623;&#3634;&#3591;&#3619;&#3632;&#3627;&#3623;&#3656;&#3634;&#3591;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;&#3649;&#3605;&#3656;&#3621;&#3632;&#3649;&#3612;&#3656;&#3609;&#3588;&#3623;&#3634;&#3617;&#3648;&#3619;&#3655;&#3623;&#3651;&#3609;&#3585;&#3634;&#3619;&#3614;&#3636;&#3617;&#3614;&#3660;&#3586;&#3629;&#3591;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;&#3609;&#3637;&#3657;&#3592;&#3632;&#3617;&#3637;&#3627;&#3609;&#3656;&#3623;&#3618;&#3610;&#3619;&#3619;&#3607;&#3633;&#3604;&#3605;&#3656;&#3629;&#3609;&#3634;&#3607;&#3637;
&#3617;&#3637;&#3648;&#3626;&#3637;&#3618;&#3591;&#3604;&#3633;&#3591;&#3649;&#3621;&#3632;&#3588;&#3640;&#3603;&#3616;&#3634;&#3614;&#3591;&#3634;&#3609;&#3614;&#3636;&#3617;&#3614;&#3660;&#3607;&#3637;&#3656;&#3652;&#3604;&#3657;&#3592;&#3632;&#3652;&#3617;&#3656;&#3604;&#3637;&#3609;&#3633;&#3585;
<span class=GramE>&#3609;&#3636;&#3618;&#3617;&#3651;&#3594;&#3657;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;
&nbsp;&#3605;&#3656;&#3629;&#3648;&#3609;&#3639;&#3656;&#3629;&#3591;</span>
&#3611;&#3633;&#3592;&#3592;&#3640;&#3610;&#3633;&#3609;&#3627;&#3609;&#3656;&#3623;&#3618;&#3591;&#3634;&#3609;&#3610;&#3634;&#3591;&#3649;&#3627;&#3656;&#3591;&#3618;&#3633;&#3591;&#3617;&#3637;&#3585;&#3634;&#3619;&#3651;&#3594;&#3657;&#3591;&#3634;&#3609;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3594;&#3609;&#3636;&#3604;&#3609;&#3637;&#3657;
&#3648;&#3594;&#3656;&#3609; &#3585;&#3634;&#3619;&#3614;&#3636;&#3617;&#3614;&#3660;&#3651;&#3610;&#3626;&#3656;&#3591;&#3626;&#3636;&#3609;&#3588;&#3657;&#3634;</span></span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi;color:black;background:white'>, <span lang=TH>&#3614;&#3636;&#3617;&#3614;&#3660;&#3651;&#3610;&#3648;&#3626;&#3619;&#3655;&#3592;&#3619;&#3633;&#3610;&#3648;&#3591;&#3636;&#3609;</span></span><span
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><br>
<span style='color:black;background:white'>&nbsp; &nbsp;&nbsp;<b>2.<span
lang=TH>&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3594;&#3609;&#3636;&#3604;&#3652;&#3617;&#3656;&#3585;&#3619;&#3632;&#3607;&#3610;
(</span>Non-impact printer)</b>&nbsp;<span lang=TH>&#3651;&#3594;&#3657;&#3648;&#3607;&#3588;&#3609;&#3636;&#3588;&#3585;&#3634;&#3619;&#3614;&#3636;&#3617;&#3614;&#3660;&#3592;&#3634;&#3585;&#3623;&#3636;&#3608;&#3637;&#3585;&#3634;&#3619;&#3607;&#3634;&#3591;&#3648;&#3588;&#3617;&#3637;
<span class=GramE>&#3595;&#3638;&#3656;&#3591;&#3607;&#3635;&#3651;&#3627;&#3657;&#3614;&#3636;&#3617;&#3614;&#3660;&#3652;&#3604;&#3657;&#3648;&#3619;&#3655;&#3623;<span
style='mso-spacerun:yes'> 
</span>&#3649;&#3621;&#3632;&#3588;&#3617;&#3594;&#3633;&#3604;&#3585;&#3623;&#3656;&#3634;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3649;&#3610;&#3610;&#3585;&#3619;&#3632;&#3607;&#3610;</span>
&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3614;&#3636;&#3617;&#3614;&#3660;&#3652;&#3604;&#3657;&#3607;&#3633;&#3657;&#3591;&#3605;&#3633;&#3623;&#3629;&#3633;&#3585;&#3625;&#3619;&#3649;&#3621;&#3632;&#3585;&#3619;&#3634;&#3615;&#3636;&#3585;
&#3619;&#3623;&#3617;&#3607;&#3633;&#3657;&#3591;&#3652;&#3617;&#3656;&#3617;&#3637;&#3648;&#3626;&#3637;&#3618;&#3591;&#3586;&#3603;&#3632;&#3614;&#3636;&#3617;&#3614;&#3660;&#3649;&#3605;&#3656;&#3617;&#3637;&#3586;&#3657;&#3629;&#3592;&#3635;&#3585;&#3633;&#3604;&#3588;&#3639;&#3629;&#3652;&#3617;&#3656;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3614;&#3636;&#3617;&#3614;&#3660;&#3585;&#3619;&#3632;&#3604;&#3634;&#3625;&#3626;&#3635;&#3648;&#3609;&#3634;&#3652;&#3604;&#3657;&#3588;&#3623;&#3634;&#3617;&#3648;&#3619;&#3655;&#3623;&#3651;&#3609;&#3585;&#3634;&#3619;&#3614;&#3636;&#3617;&#3614;&#3660;&#3586;&#3629;&#3591;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;&#3609;&#3637;&#3657;&#3592;&#3632;&#3617;&#3637;&#3627;&#3609;&#3656;&#3623;&#3618;&#3648;&#3611;&#3655;&#3609;&#3627;&#3609;&#3657;&#3634;&nbsp;&#3605;&#3656;&#3629;&#3609;&#3634;&#3607;&#3637;</span>&nbsp;<span
lang=TH>&#3649;&#3621;&#3632;&#3626;&#3634;&#3617;&#3634;&#3619;&#3606;&#3649;&#3610;&#3656;&#3591;&#3629;&#3629;&#3585;&#3648;&#3611;&#3655;&#3609;&#3611;&#3619;&#3632;&#3648;&#3616;&#3607;&#3605;&#3656;&#3634;&#3591;&#3654;
&#3588;&#3639;&#3629; &#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3648;&#3621;&#3648;&#3595;&#3629;&#3619;&#3660;
&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;<span
style='mso-spacerun:yes'>   </span>&#3629;&#3636;&#3591;&#3588;&#3648;&#3592;&#3655;&#3607;
&#3649;&#3621;&#3632;&#3648;&#3588;&#3619;&#3639;&#3656;&#3629;&#3591;&#3614;&#3636;&#3617;&#3614;&#3660;&#3648;&#3607;&#3629;&#3619;&#3660;&#3617;&#3629;&#3621;</span></span><o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span style='font-size:14.0pt;
line-height:107%;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='tab-stops:297.75pt'><b><span lang=TH
style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>&#3585;&#3634;&#3619;&#3649;&#3592;&#3657;&#3591;&#3648;&#3605;&#3639;&#3629;&#3609;&#3651;&#3609;&#3619;&#3641;&#3611;&#3649;&#3610;&#3610;
</span></b><b><span style='font-size:14.0pt;line-height:107%;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:
major-bidi'>Android <o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:0cm;line-height:normal;mso-outline-level:3;background:white'><b><span
lang=TH style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:#292B2C'>&#3626;&#3635;&#3627;&#3619;&#3633;&#3610;&#3617;&#3639;&#3629;&#3606;&#3639;&#3629;
</span></b><b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;color:#292B2C'>Android
<span lang=TH>&#3607;&#3637;&#3656;&#3652;&#3617;&#3656;&#3652;&#3604;&#3657;&#3619;&#3633;&#3610;&#3585;&#3634;&#3619;&#3611;&#3619;&#3633;&#3610;&#3649;&#3605;&#3656;&#3591;</span><o:p></o:p></span></b></p>

<ul type=disc>
 <li class=MsoNormal style='color:#292B2C;mso-margin-top-alt:auto;mso-margin-bottom-alt:
     auto;line-height:normal;mso-list:l0 level1 lfo8;tab-stops:list 36.0pt;
     background:white;vertical-align:baseline'><span lang=TH style='font-size:
     14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
     mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
     mso-bidi-theme-font:major-bidi'>&#3648;&#3586;&#3657;&#3634;&#3607;&#3637;&#3656;&#3648;&#3617;&#3609;&#3641;
     </span><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Setting (<span
     lang=TH>&#3605;&#3633;&#3657;&#3591;&#3588;&#3656;&#3634;)</span> &gt; <span
     lang=TH>&#3585;&#3634;&#3619;&#3649;&#3592;&#3657;&#3591;&#3648;&#3605;&#3639;&#3629;&#3609;</span>
     &gt; <span lang=TH>&#3585;&#3634;&#3619;&#3649;&#3592;&#3657;&#3591;&#3648;&#3605;&#3639;&#3629;&#3609;&#3586;&#3629;&#3591;
     </span>Apps &gt; <span lang=TH>&#3648;&#3621;&#3639;&#3629;&#3585;&#3652;&#3611;&#3607;&#3637;&#3656;
     </span>Apps <span lang=TH>&#3607;&#3637;&#3656;&#3648;&#3619;&#3634;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;</span>
     &gt; <span lang=TH>&#3648;&#3621;&#3639;&#3629;&#3585;&#3627;&#3633;&#3623;&#3586;&#3657;&#3629;
     </span>Bubble<o:p></o:p></span></li>
 <li class=MsoNormal style='color:#292B2C;mso-margin-top-alt:auto;mso-margin-bottom-alt:
     auto;line-height:normal;mso-list:l0 level1 lfo8;tab-stops:list 36.0pt;
     background:white;vertical-align:baseline'><span lang=TH style='font-size:
     14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:major-bidi;
     mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
     mso-bidi-theme-font:major-bidi'>&#3648;&#3586;&#3657;&#3634;&#3652;&#3611;&#3607;&#3637;&#3656;&#3585;&#3634;&#3619;&#3605;&#3633;&#3657;&#3591;&#3588;&#3656;&#3634;
     (</span><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>Setting)
     &gt; <span lang=TH>&#3585;&#3634;&#3619;&#3649;&#3592;&#3657;&#3591;&#3648;&#3605;&#3639;&#3629;&#3609;
     &#3649;&#3621;&#3632;
     &#3624;&#3641;&#3609;&#3618;&#3660;&#3588;&#3623;&#3610;&#3588;&#3640;&#3617;</span>&nbsp;<b>(Notifications
     &amp; Control Center)</b>&nbsp;&gt; <span lang=TH>&#3585;&#3634;&#3619;&#3649;&#3592;&#3657;&#3591;&#3648;&#3605;&#3639;&#3629;&#3609;</span>&nbsp;<b>(App
     Notification)</b>&nbsp;&gt; <span lang=TH>&#3585;&#3634;&#3619;&#3605;&#3633;&#3657;&#3591;&#3588;&#3656;&#3634;&#3648;&#3614;&#3636;&#3656;&#3617;&#3648;&#3605;&#3636;&#3617;&#3651;&#3609;</span></span><span
     style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
     major-bidi;mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi;
     color:black;mso-color-alt:windowtext'><a
     href="https://www.sanook.com/hitech/1397509/" target="_blank" title=&#3649;&#3629;&#3611;><span
     lang=TH style='mso-fareast-font-family:"Times New Roman";color:#333333'>&#3649;&#3629;&#3611;</span></a></span><b><span
     style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
     major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:
     major-bidi;mso-bidi-theme-font:major-bidi'>&nbsp;(Additional Settings in
     the app)</span></b><span style='font-size:14.0pt;font-family:"Angsana New",serif;
     mso-ascii-theme-font:major-bidi;mso-fareast-font-family:"Times New Roman";
     mso-hansi-theme-font:major-bidi;mso-bidi-theme-font:major-bidi'>&nbsp;<span
     lang=TH>&#3592;&#3634;&#3585;&#3609;&#3633;&#3657;&#3609;&#3648;&#3621;&#3639;&#3629;&#3585;&#3650;&#3611;&#3619;&#3649;&#3585;&#3619;&#3617;&#3607;&#3637;&#3656;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;&#3648;&#3594;&#3656;&#3609;</span>&nbsp;<b>Message</b>&nbsp;&gt;
     <span lang=TH>&#3585;&#3604;&#3627;&#3633;&#3623;&#3586;&#3657;&#3629;</span>&nbsp;<b>Bubble</b>&nbsp;<span
     lang=TH>&#3649;&#3621;&#3657;&#3623;&#3648;&#3611;&#3636;&#3604;&#3649;&#3626;&#3604;&#3591;&#3607;&#3633;&#3657;&#3591;&#3627;&#3617;&#3604;</span><o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white;vertical-align:baseline'><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:#292B2C'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;background:white;vertical-align:baseline'><span
style='font-size:14.0pt;font-family:"Angsana New",serif;mso-ascii-theme-font:
major-bidi;mso-fareast-font-family:"Times New Roman";mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi;color:#292B2C'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:107%;font-family:
"Angsana New",serif;mso-ascii-theme-font:major-bidi;mso-hansi-theme-font:major-bidi;
mso-bidi-theme-font:major-bidi'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>


            </div>
        </div>




        
  
        
    <!-- Page content -->

   
  </div>
  
  
<?php include("templates/scripts.php"); ?>
</body>

</html>