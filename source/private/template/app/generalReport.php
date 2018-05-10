<?php
/*
 * Developed by: Andrés Sandoval Montoya
 * Developer contact: andresandoval992@gmail.com
 * ------------------------------------------------
 * File name: generalReport.php
 * Encoding: UTF-8
 * Created: 04-ene-2017-3:47:33
 * ------------------------------------------------
 * Licensed under default license
 * ------------------------------------------------
 *
 */

/* @var $form008 app\data\entities\app\form008Entity[] */
/* @var $patient app\data\entities\app\patientEntity[] */
/* @var $fur app\data\entities\app\furEntity[] */
/* @var $objetion app\data\entities\app\objectionEntity[] */
/* @var $expenseForm app\data\entities\app\expenseFormEntity[] */
/* @var $doctor app\data\entities\app\doctorEntity[] */
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
            <meta name=ProgId content=Excel.Sheet>
                <meta name=Generator content="Microsoft Excel 15">
                    <link rel=File-List href="asasas_archivos/filelist.xml">
                        <style id="REPORTES - copia_20881_Styles">
                            <!--table
                            {mso-displayed-decimal-separator:"\,";
                             mso-displayed-thousand-separator:"\.";}
                            .xl6420881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6520881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6620881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl6720881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6820881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6920881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7020881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7120881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7220881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7320881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7420881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7520881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:"Short Date";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7620881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7720881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7820881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7920881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:Fixed;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8020881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:"_-* \#\,\#\#0\.00\\ _€_-\;\\-* \#\,\#\#0\.00\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8120881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:"_-* \#\,\#\#0\.00\\ _€_-\;\\-* \#\,\#\#0\.00\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8220881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:"Calibri Light", serif;
                             mso-font-charset:0;
                             mso-number-format:Standard;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8320881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8420881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8520881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:bottom;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8620881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8720881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8820881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8920881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9020881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9120881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9220881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl9320881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9420881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl9520881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9620881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl9720881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl9820881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl9920881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10020881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10120881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:9.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl10220881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:#70AD47;
                             mso-pattern:#70AD47 none;
                             white-space:normal;}
                            .xl10320881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:#70AD47;
                             mso-pattern:#70AD47 none;
                             white-space:normal;}
                            .xl10420881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:#70AD47;
                             mso-pattern:#70AD47 none;
                             white-space:normal;}
                            .xl10520881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:#70AD47;
                             mso-pattern:#70AD47 none;
                             white-space:normal;}
                            .xl10620881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:silver;
                             mso-pattern:black none;
                             white-space:normal;}
                            .xl10720881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:#70AD47;
                             mso-pattern:#70AD47 none;
                             white-space:normal;}
                            .xl10820881
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:#969696;
                             mso-pattern:black none;
                             white-space:normal;}
                            -->
                        </style>
                        </head>

                        <body>
                            <!--[if !excel]>&nbsp;&nbsp;<![endif]-->
                            <!--La siguiente información se generó mediante el Asistente para publicar como
                            página web de Microsoft Excel.-->
                            <!--Si se vuelve a publicar el mismo elemento desde Excel, se reemplazará toda
                            la información comprendida entre las etiquetas DIV.-->
                            <!----------------------------->
                            <!--INICIO DE LOS RESULTADOS DEL ASISTENTE PARA PUBLICAR COMO PÁGINA WEB DE
                            EXCEL -->
                            <!----------------------------->

                            <div id="REPORTES - copia_20881" align=center x:publishsource="Excel">

                                <table border=0 cellpadding=0 cellspacing=0 width=3117 class=xl6420881
                                       style='border-collapse:collapse;table-layout:fixed;width:2341pt'>
                                    <col class=xl6420881 width=43 style='mso-width-source:userset;mso-width-alt:
                                         1572;width:32pt'>
                                        <col class=xl6420881 width=83 style='mso-width-source:userset;mso-width-alt:
                                             3035;width:62pt'>
                                            <col class=xl6420881 width=96 style='mso-width-source:userset;mso-width-alt:
                                                 3510;width:72pt'>
                                                <col class=xl6420881 width=69 style='mso-width-source:userset;mso-width-alt:
                                                     2523;width:52pt'>
                                                    <col class=xl6420881 width=115 style='mso-width-source:userset;mso-width-alt:
                                                         4205;width:86pt'>
                                                        <col class=xl6420881 width=110 style='mso-width-source:userset;mso-width-alt:
                                                             4022;width:83pt'>
                                                            <col class=xl6420881 width=90 style='mso-width-source:userset;mso-width-alt:
                                                                 3291;width:68pt'>
                                                                <col class=xl6720881 width=141 style='mso-width-source:userset;mso-width-alt:
                                                                     5156;width:106pt'>
                                                                    <col class=xl6620881 width=240 style='mso-width-source:userset;mso-width-alt:
                                                                         8777;width:180pt'>
                                                                        <col class=xl6420881 width=46 style='mso-width-source:userset;mso-width-alt:
                                                                             1682;width:35pt'>
                                                                            <col class=xl6820881 width=49 style='mso-width-source:userset;mso-width-alt:
                                                                                 1792;width:37pt'>
                                                                                <col class=xl6820881 width=141 style='mso-width-source:userset;mso-width-alt:
                                                                                     5156;width:106pt'>
                                                                                    <col class=xl6820881 width=89 style='mso-width-source:userset;mso-width-alt:
                                                                                         3254;width:67pt'>
                                                                                        <col class=xl6820881 width=77 style='mso-width-source:userset;mso-width-alt:
                                                                                             2816;width:58pt'>
                                                                                            <col class=xl6820881 width=87 style='mso-width-source:userset;mso-width-alt:
                                                                                                 3181;width:65pt'>
                                                                                                <col class=xl6420881 width=111 style='mso-width-source:userset;mso-width-alt:
                                                                                                     4059;width:83pt'>
                                                                                                    <col class=xl6920881 width=367 style='mso-width-source:userset;mso-width-alt:
                                                                                                         13421;width:275pt'>
                                                                                                        <col class=xl7020881 width=62 style='mso-width-source:userset;mso-width-alt:
                                                                                                             2267;width:47pt'>
                                                                                                            <col class=xl7020881 width=513 style='mso-width-source:userset;mso-width-alt:
                                                                                                                 18761;width:385pt'>
                                                                                                                <col class=xl7120881 width=64 style='mso-width-source:userset;mso-width-alt:
                                                                                                                     2340;width:48pt'>
                                                                                                                    <col class=xl6520881 width=62 style='mso-width-source:userset;mso-width-alt:
                                                                                                                         2267;width:47pt'>
                                                                                                                        <col class=xl6420881 width=125 style='mso-width-source:userset;mso-width-alt:
                                                                                                                             4571;width:94pt'>
                                                                                                                            <col class=xl6420881 width=243 style='mso-width-source:userset;mso-width-alt:
                                                                                                                                 8886;width:182pt'>
                                                                                                                                <col class=xl6420881 width=94 style='mso-width-source:userset;mso-width-alt:
                                                                                                                                     3437;width:71pt'>
                                                                                                                                    <tr class=xl9220881 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                                                                        <td colspan=24 height=14 class=xl8820881 width=3117 style='height:10.5pt;
                                                                                                                                            width:2341pt'>MINISTERIO DE SALUD PUBLICA</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl9220881 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                                                                        <td colspan=24 height=14 class=xl8820881 width=3117 style='height:10.5pt;
                                                                                                                                            width:2341pt'>HOSPITAL “ DR. GUSTAVO DOMÍNGUEZ ”</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl9220881 height=16 style='height:12.0pt'>
                                                                                                                                        <td height=16 class=xl9220881 style='height:12.0pt'></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl8920881 width=96 style='width:72pt'></td>
                                                                                                                                        <td class=xl8920881 width=69 style='width:52pt'></td>
                                                                                                                                        <td class=xl8920881 width=115 style='width:86pt'></td>
                                                                                                                                        <td class=xl8920881 width=110 style='width:83pt'></td>
                                                                                                                                        <td class=xl9020881 width=90 style='width:68pt'></td>
                                                                                                                                        <td class=xl9120881 width=141 style='width:106pt'></td>
                                                                                                                                        <td class=xl8920881 width=240 style='width:180pt'></td>
                                                                                                                                        <td class=xl8920881 width=46 style='width:35pt'></td>
                                                                                                                                        <td class=xl9520881 width=49 style='width:37pt'></td>
                                                                                                                                        <td class=xl9520881 width=141 style='width:106pt'></td>
                                                                                                                                        <td class=xl9520881 width=89 style='width:67pt'></td>
                                                                                                                                        <td class=xl9520881 width=77 style='width:58pt'></td>
                                                                                                                                        <td class=xl9620881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9520881 width=367 style='width:275pt'></td>
                                                                                                                                        <td class=xl9720881></td>
                                                                                                                                        <td class=xl9720881></td>
                                                                                                                                        <td class=xl9820881></td>
                                                                                                                                        <td class=xl9420881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl9220881 height=16 style='mso-height-source:userset;height:12.0pt'>
                                                                                                                                        <td colspan=24 height=16 class=xl8820881 width=3117 style='height:12.0pt;
                                                                                                                                            width:2341pt'>REPORTE MENSUAL<span style='mso-spacerun:yes'> </span></td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl9220881 height=16 style='height:12.0pt'>
                                                                                                                                        <td height=16 class=xl9220881 style='height:12.0pt'></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl8820881 width=96 style='width:72pt'></td>
                                                                                                                                        <td class=xl8820881 width=69 style='width:52pt'></td>
                                                                                                                                        <td class=xl8820881 width=115 style='width:86pt'></td>
                                                                                                                                        <td class=xl8820881 width=110 style='width:83pt'></td>
                                                                                                                                        <td class=xl9920881 width=90 style='width:68pt'></td>
                                                                                                                                        <td class=xl9320881 width=141 style='width:106pt'></td>
                                                                                                                                        <td class=xl8820881 width=240 style='width:180pt'></td>
                                                                                                                                        <td class=xl8820881 width=46 style='width:35pt'></td>
                                                                                                                                        <td class=xl10020881 width=49 style='width:37pt'></td>
                                                                                                                                        <td class=xl10020881 width=141 style='width:106pt'></td>
                                                                                                                                        <td class=xl10020881 width=89 style='width:67pt'></td>
                                                                                                                                        <td class=xl10020881 width=77 style='width:58pt'></td>
                                                                                                                                        <td class=xl9620881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9520881 width=367 style='width:275pt'></td>
                                                                                                                                        <td class=xl9720881></td>
                                                                                                                                        <td class=xl9720881></td>
                                                                                                                                        <td class=xl9820881></td>
                                                                                                                                        <td class=xl9420881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl9220881 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                                                                        <td colspan=24 height=14 class=xl8820881 width=3117 style='height:10.5pt;
                                                                                                                                            width:2341pt'>PLANILLADO, OBJETADO, FACTURADO Y CANCELADO<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl9220881 height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                                                                        <td colspan=24 height=20 class=xl9320881 width=3117 style='height:15.0pt;
                                                                                                                                            width:2341pt'>AÑO<span style='mso-spacerun:yes'>  </span>2016</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl9220881 height=16 style='height:12.0pt'>
                                                                                                                                        <td height=16 class=xl9220881 style='height:12.0pt'></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl10120881></td>
                                                                                                                                        <td class=xl8920881 width=240 style='width:180pt'></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9620881></td>
                                                                                                                                        <td class=xl9620881></td>
                                                                                                                                        <td class=xl9620881></td>
                                                                                                                                        <td class=xl9620881></td>
                                                                                                                                        <td class=xl9620881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9520881 width=367 style='width:275pt'></td>
                                                                                                                                        <td class=xl9720881></td>
                                                                                                                                        <td class=xl9720881></td>
                                                                                                                                        <td class=xl9820881></td>
                                                                                                                                        <td class=xl9420881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                        <td class=xl9220881></td>
                                                                                                                                    </tr>
                                                                                                                                    <tr class=xl6620881 height=50 style='mso-height-source:userset;height:37.5pt'>
                                                                                                                                        <td height=50 class=xl10220881 width=43 style='height:37.5pt;width:32pt'>NRO</td>
                                                                                                                                        <td class=xl10220881 width=83 style='border-left:none;width:62pt'>FECHA</td>
                                                                                                                                        <td class=xl10220881 width=96 style='border-left:none;width:72pt'>ASEGURADORA</td>
                                                                                                                                        <td class=xl10220881 width=69 style='border-left:none;width:52pt'>HISTORIA
                                                                                                                                            CLINICA</td>
                                                                                                                                        <td class=xl10220881 width=115 style='border-left:none;width:86pt'>FECHA DE
                                                                                                                                            INGRESO</td>
                                                                                                                                        <td class=xl10220881 width=110 style='border-left:none;width:83pt'>FECHA DE
                                                                                                                                            EGRESO</td>
                                                                                                                                        <td class=xl10220881 width=90 style='border-left:none;width:68pt'>DIAS
                                                                                                                                            ESTADIA</td>
                                                                                                                                        <td class=xl10320881 width=141 style='border-left:none;width:106pt'>CEDULA DE
                                                                                                                                            CIUDADANIA</td>
                                                                                                                                        <td class=xl10220881 width=240 style='border-left:none;width:180pt'>PACIENTE</td>
                                                                                                                                        <td class=xl10220881 width=46 style='border-left:none;width:35pt'>SEXO</td>
                                                                                                                                        <td class=xl10220881 width=49 style='border-left:none;width:37pt'>EDAD</td>
                                                                                                                                        <td class=xl10220881 width=141 style='border-left:none;width:106pt'>MEDICO</td>
                                                                                                                                        <td class=xl10420881 width=89 style='border-left:none;width:67pt'><span
                                                                                                                                                style='mso-spacerun:yes'> </span>PLANILLADO<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10420881 width=77 style='border-left:none;width:58pt'><span
                                                                                                                                                style='mso-spacerun:yes'> </span>OBJETADO<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10420881 width=87 style='border-left:none;width:65pt'><span
                                                                                                                                                style='mso-spacerun:yes'> </span>FACTURADO<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10220881 width=111 style='border-left:none;width:83pt'>FACTURA</td>
                                                                                                                                        <td class=xl10420881 width=367 style='border-left:none;width:275pt'><span
                                                                                                                                                style='mso-spacerun:yes'> </span>DIAGNOSTICO<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10420881 width=62 style='border-left:none;width:47pt'><span
                                                                                                                                                style='mso-spacerun:yes'> </span>CIE 10<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10420881 width=513 style='border-left:none;width:385pt'><span
                                                                                                                                                style='mso-spacerun:yes'> </span>CINETICA<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10520881 width=64 style='border-left:none;width:48pt'>OCUPANTE</td>
                                                                                                                                        <td class=xl10520881 width=62 style='border-left:none;width:47pt'>PEATON</td>
                                                                                                                                        <td class=xl10420881 width=125 style='border-left:none;width:94pt'><span
                                                                                                                                                style='mso-spacerun:yes'> </span>CONDICION AL ALTA<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10620881 width=243 style='border-left:none;width:182pt'>TRANSFERENCIA<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10720881 width=94 style='border-left:none;width:71pt'>OBSERVACIONES<span
                                                                                                                                                style='mso-spacerun:yes'> </span></td>
                                                                                                                                    </tr>
                                                                                                                                    <?php for ($i = 0; $i < count($form008); $i++) { ?>
                                                                                                                                        <tr class=xl7120881 height=15 style='height:11.25pt'>
                                                                                                                                            <td height=15 class=xl7320881 width=43 style='height:11.25pt;border-top:none;
                                                                                                                                                width:32pt'><?= $i + 1?></td>
                                                                                                                                            <td class=xl7220881 style='border-top:none;border-left:none'><?= $form008[$i]->getLastUpdateDate(true)?></td>
                                                                                                                                            <td class=xl7320881 width=96 style='border-top:none;border-left:none;
                                                                                                                                                width:72pt'><?= $patient[$i]->getTipoSeguroSalud() ?></td>
                                                                                                                                                <td class=xl7420881 style='border-top:none;border-left:none'>Hist-<?= $patient[$i]->getIdentificacion() ?></td>
                                                                                                                                                <td class=xl7520881 style='border-top:none;border-left:none'><?= is_null($fur[$i]) ? 'S/N' : $fur[$i]->getHealthCenterAdmisionDate() ?></td>
                                                                                                                                                <td class=xl7520881 style='border-top:none;border-left:none'><?= is_null($fur[$i]) ? 'S/N' : $fur[$i]->getHealthCenterEgressDate() ?></td>
                                                                                                                                            <td class=xl7620881 width=90 style='border-top:none;border-left:none;
                                                                                                                                                width:68pt'><?= is_null($fur[$i]) ? 'S/N' : $fur[$i]->getHealthCenterHospCareDays() ?></td>
                                                                                                                                            <td class=xl7720881 style='border-top:none;border-left:none'><?= $patient[$i]->getIdentificacion() ?></td>
                                                                                                                                            <td class=xl7420881 style='border-top:none;border-left:none'><?= $patient[$i]->getFullName() ?></td>
                                                                                                                                            <td class=xl7420881 style='border-top:none;border-left:none'><?= $patient[$i]->getGenero() ?></td>
                                                                                                                                            <td class=xl7420881 style='border-top:none;border-left:none'><?= $patient[$i]->getEdad() ?></td>
                                                                                                                                            <td class=xl7820881 width=141 style='border-top:none;border-left:none;
                                                                                                                                                width:106pt'><?= is_null($doctor[$i]) ? 'S/N' : $doctor[$i]->getFullName() ?></td>
                                                                                                                                                <td class=xl7920881 style='border-top:none;border-left:none'><?= is_null($expenseForm[$i]) ? 'S/N' : $expenseForm[$i]->getTotal() ?></td>
                                                                                                                                            <td class=xl8020881 width=77 style='border-top:none;border-left:none;
                                                                                                                                                width:58pt'><span style='mso-spacerun:yes'> </span><?= is_null($objetion[$i]) ? 'S/N' : $objetion[$i]->getValue() ?><span
                                                                                                                                                    style='mso-spacerun:yes'> </span></td>
                                                                                                                                            <td class=xl8120881 style='border-top:none;border-left:none'><span
                                                                                                                                                    style='mso-spacerun:yes'> </span>xxx<span style='mso-spacerun:yes'> </span></td>
                                                                                                                                            <td class=xl8220881 width=111 style='border-top:none;border-left:none;
                                                                                                                                                width:83pt'>
                                                                                                                                                    <?= (is_null($objetion[$i]) || is_null($expenseForm[$i]))  ? 'S/N' : $expenseForm[$i]->getTotal() - $objetion[$i]->getValue() ?>
                                                                                                                                            </td>
                                                                                                                                            <td class=xl8320881 width=367 style='border-top:none;border-left:none;
                                                                                                                                                width:275pt'><?= is_null($fur[$i]) ? 'S/N' : $fur[$i]->getHealthCenterEgressReport() ?></td>
                                                                                                                                            <td class=xl8420881 width=62 style='border-top:none;border-left:none;
                                                                                                                                                width:47pt'><span style='mso-spacerun:yes'> </span><?= is_null($fur[$i]) ? 'S/N' : $fur[$i]->getHealthCenterAdmisionReport() ?><span
                                                                                                                                                    style='mso-spacerun:yes'> </span></td>
                                                                                                                                            <td class=xl8520881 width=513 style='border-top:none;border-left:none;
                                                                                                                                                width:385pt'><?= is_null($fur[$i]) ? 'S/N' : $fur[$i]->getAccidentReport() ?></td>
                                                                                                                                            <td class=xl8620881 width=64 style='border-top:none;border-left:none;
                                                                                                                                                width:48pt'><?= is_null($fur[$i]) ? '' : $fur[$i]->getPatientConditionOccupant() == 1 ? 'X' : '' ?></td>
                                                                                                                                            <td class=xl8620881 width=62 style='border-top:none;border-left:none;
                                                                                                                                                width:47pt'><?= is_null($fur[$i]) ? '' : $fur[$i]->getPatientConditionWalker() == 1 ? 'X' : '' ?></td>
                                                                                                                                            <td class=xl8420881 width=125 style='border-top:none;border-left:none;
                                                                                                                                                width:94pt'><span style='mso-spacerun:yes'> </span><?= is_null($fur[$i]) ? '' : $fur[$i]->getInsuredDead() == 1 ? 'FALLECIDO' : 'VIVO' ?><span
                                                                                                                                                    style='mso-spacerun:yes'> </span></td>
                                                                                                                                            <td class=xl10820881 width=243 style='border-top:none;border-left:none;
                                                                                                                                                width:182pt'><?= is_null($fur[$i]) ? '' : $fur[$i]->getHealthCenterReferredFr() ?></td>
                                                                                                                                            <td class=xl8720881 style='border-top:none;border-left:none'></td>
                                                                                                                                        </tr>
                                                                                                                                    <?php } ?>
                                                                                                                                    <![if supportMisalignedColumns]>
                                                                                                                                    <tr height=0 style='display:none'>
                                                                                                                                        <td width=43 style='width:32pt'></td>
                                                                                                                                        <td width=83 style='width:62pt'></td>
                                                                                                                                        <td width=96 style='width:72pt'></td>
                                                                                                                                        <td width=69 style='width:52pt'></td>
                                                                                                                                        <td width=115 style='width:86pt'></td>
                                                                                                                                        <td width=110 style='width:83pt'></td>
                                                                                                                                        <td width=90 style='width:68pt'></td>
                                                                                                                                        <td width=141 style='width:106pt'></td>
                                                                                                                                        <td width=240 style='width:180pt'></td>
                                                                                                                                        <td width=46 style='width:35pt'></td>
                                                                                                                                        <td width=49 style='width:37pt'></td>
                                                                                                                                        <td width=141 style='width:106pt'></td>
                                                                                                                                        <td width=89 style='width:67pt'></td>
                                                                                                                                        <td width=77 style='width:58pt'></td>
                                                                                                                                        <td width=87 style='width:65pt'></td>
                                                                                                                                        <td width=111 style='width:83pt'></td>
                                                                                                                                        <td width=367 style='width:275pt'></td>
                                                                                                                                        <td width=62 style='width:47pt'></td>
                                                                                                                                        <td width=513 style='width:385pt'></td>
                                                                                                                                        <td width=64 style='width:48pt'></td>
                                                                                                                                        <td width=62 style='width:47pt'></td>
                                                                                                                                        <td width=125 style='width:94pt'></td>
                                                                                                                                        <td width=243 style='width:182pt'></td>
                                                                                                                                        <td width=94 style='width:71pt'></td>
                                                                                                                                    </tr>
                                                                                                                                    <![endif]>
                                                                                                                                    </table>

                                                                                                                                    </div>


                                                                                                                                    <!----------------------------->
                                                                                                                                    <!--FINAL DE LOS RESULTADOS DEL ASISTENTE PARA PUBLICAR COMO PÁGINA WEB DE
                                                                                                                                    EXCEL-->
                                                                                                                                    <!----------------------------->
                                                                                                                                    </body>

                                                                                                                                    </html>
