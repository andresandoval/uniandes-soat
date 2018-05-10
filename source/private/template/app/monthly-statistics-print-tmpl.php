<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 09-jun-2016-16:32:32
 * Contact: andresandoval992@gmail.com
 *
 * monthly-statistics-print-tmpl, part of soat
 */

/* @var $records \app\data\entities\app\monthlyStatisticsEntity[] */
?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
            <meta name=ProgId content=Excel.Sheet>
                <meta name=Generator content="Microsoft Excel 14">
                    <link rel=File-List href="ESTADISTICAS%20MENSUALES%20SOAT%202016_filelist.xml">
                        <!--[if !mso]>
                        <style>
                        v\:* {behavior:url(#default#VML);}
                        o\:* {behavior:url(#default#VML);}
                        x\:* {behavior:url(#default#VML);}
                        .shape {behavior:url(#default#VML);}
                        </style>
                        <![endif]-->
                        <style id="ESTADISTICAS MENSUALES SOAT 2016_27387_Styles">
                            <!--table
                            {mso-displayed-decimal-separator:"\.";
                             mso-displayed-thousand-separator:"\,";}
                            .xl6627387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6727387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:general;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6827387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6927387
                            {padding:0px;
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
                            .xl7027387
                            {padding:0px;
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
                            .xl7127387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7227387
                            {padding:0px;
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
                            .xl7327387
                            {padding:0px;
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
                            .xl7427387
                            {padding:0px;
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7527387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:general;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7627387
                            {padding:0px;
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7727387
                            {padding:0px;
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7827387
                            {padding:0px;
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
                            .xl7927387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:general;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8027387
                            {padding:0px;
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
                             white-space:normal;}
                            .xl8127387
                            {padding:0px;
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
                             white-space:normal;}
                            .xl8227387
                            {padding:0px;
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
                             white-space:normal;}
                            .xl8327387
                            {padding:0px;
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8427387
                            {padding:0px;
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
                            .xl8527387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:general;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8627387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:left;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8727387
                            {padding:0px;
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl8827387
                            {padding:0px;
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
                            .xl8927387
                            {padding:0px;
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
                            .xl9027387
                            {padding:0px;
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
                             border-top:none;
                             border-right:.5pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9127387
                            {padding:0px;
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
                             border-top:none;
                             border-right:.5pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:none;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9227387
                            {padding:0px;
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
                             border-top:none;
                             border-right:.5pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9327387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9427387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:middle;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9527387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9627387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
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
                            .xl9727387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"Short Date";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9827387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl9927387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10027387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:general;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl10127387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:general;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10227387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:right;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10327387
                            {padding:0px;
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
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:none;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10427387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:right;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:none;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10527387
                            {padding:0px;
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
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10627387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10727387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"Short Date";
                             text-align:center;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10827387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:center;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl10927387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl11027387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl11127387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:Standard;
                             text-align:general;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl11227387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl11327387
                            {padding:0px;
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
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl11427387
                            {padding:0px;
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
                             border-top:none;
                             border-right:.5pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl11527387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:middle;
                             border-top:none;
                             border-right:none;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl11627387
                            {padding:0px;
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
                             border-top:.5pt solid windowtext;
                             border-right:none;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl11727387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:right;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl11827387
                            {padding:0px;
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
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl11927387
                            {padding:0px;
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
                             border-top:.5pt solid windowtext;
                             border-right:none;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl12027387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:center;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl12127387
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:8.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:right;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl12227387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:10.0pt;
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
                            .xl12327387
                            {padding:0px;
                             mso-ignore:padding;
                             color:black;
                             font-size:8.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Cambria, serif;
                             mso-font-charset:0;
                             mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                             text-align:general;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            -->
                        </style>
                        <title>Reporte</title>
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

                            <div id="ESTADISTICAS MENSUALES SOAT 2016_27387" align=center
                                 x:publishsource="Excel">

                                <table border=0 cellpadding=0 cellspacing=0 width=2087 class=xl6627387
                                       style='border-collapse:collapse;table-layout:fixed;width:1566pt'>
                                    <col class=xl6627387 width=40 style='mso-width-source:userset;mso-width-alt:
                                         1462;width:30pt'>
                                        <col class=xl6627387 width=77 style='mso-width-source:userset;mso-width-alt:
                                             2816;width:58pt'>
                                            <col class=xl6927387 width=91 style='mso-width-source:userset;mso-width-alt:
                                                 3328;width:68pt'>
                                                <col class=xl6927387 width=0 style='display:none;mso-width-source:userset;
                                                     mso-width-alt:2816'>
                                                    <col class=xl6627387 width=69 style='mso-width-source:userset;mso-width-alt:
                                                         2523;width:52pt'>
                                                        <col class=xl6627387 width=87 style='mso-width-source:userset;mso-width-alt:
                                                             3181;width:65pt'>
                                                            <col class=xl6627387 width=88 style='mso-width-source:userset;mso-width-alt:
                                                                 3218;width:66pt'>
                                                                <col class=xl6827387 width=111 style='mso-width-source:userset;mso-width-alt:
                                                                     4059;width:83pt'>
                                                                    <col class=xl8627387 width=86 style='mso-width-source:userset;mso-width-alt:
                                                                         3145;width:65pt'>
                                                                        <col class=xl6627387 width=0 style='display:none;mso-width-source:userset;
                                                                             mso-width-alt:2925'>
                                                                            <col class=xl8527387 width=98 style='mso-width-source:userset;mso-width-alt:
                                                                                 3584;width:74pt'>
                                                                                <col class=xl9327387 width=216 style='mso-width-source:userset;mso-width-alt:
                                                                                     7899;width:162pt'>
                                                                                    <col class=xl6927387 width=0 style='display:none;mso-width-source:userset;
                                                                                         mso-width-alt:1645'>
                                                                                        <col class=xl6727387 width=68 style='mso-width-source:userset;mso-width-alt:
                                                                                             2486;width:51pt'>
                                                                                            <col class=xl6727387 width=139 style='mso-width-source:userset;mso-width-alt:
                                                                                                 5083;width:104pt'>
                                                                                                <col class=xl6727387 width=86 style='mso-width-source:userset;mso-width-alt:
                                                                                                     3145;width:65pt'>
                                                                                                    <col class=xl6727387 width=64 style='mso-width-source:userset;mso-width-alt:
                                                                                                         2340;width:48pt'>
                                                                                                        <col class=xl6727387 width=72 style='mso-width-source:userset;mso-width-alt:
                                                                                                             2633;width:54pt'>
                                                                                                            <col class=xl6627387 width=104 style='mso-width-source:userset;mso-width-alt:
                                                                                                                 3803;width:78pt'>
                                                                                                                <col class=xl7927387 width=367 style='mso-width-source:userset;mso-width-alt:
                                                                                                                     13421;width:275pt'>
                                                                                                                    <col class=xl6927387 width=123 style='mso-width-source:userset;mso-width-alt:
                                                                                                                         4498;width:92pt'>
                                                                                                                        <col class=xl6627387 width=101 style='mso-width-source:userset;mso-width-alt:
                                                                                                                             3693;width:76pt'>
                                                                                                                            <tr height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                                                                <td colspan=19 height=14 class=xl7727387 width=2087 style='height:10.5pt;
                                                                                                                                    width:1566pt'>MINISTERIO DE SALUD PUBLICA</td>
                                                                                                                            </tr>
                                                                                                                            <tr height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                                                                <td colspan=19 height=14 class=xl7727387 width=2087 style='height:10.5pt;
                                                                                                                                    width:1566pt'>HOSPITAL “ DR. GUSTAVO DOMÍNGUEZ ”</td>
                                                                                                                            </tr>
                                                                                                                            <tr height=14 style='height:10.5pt'>
                                                                                                                                <td height=14 class=xl6927387 style='height:10.5pt'></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl7227387 width=91 style='width:68pt'></td>
                                                                                                                                <td class=xl7227387 width=0></td>
                                                                                                                                <td class=xl7227387 width=69 style='width:52pt'></td>
                                                                                                                                <td class=xl7227387 width=87 style='width:65pt'></td>
                                                                                                                                <td class=xl7227387 width=88 style='width:66pt'></td>
                                                                                                                                <td class=xl8027387 width=111 style='width:83pt'></td>
                                                                                                                                <td class=xl8227387 width=86 style='width:65pt'></td>
                                                                                                                                <td class=xl7227387 width=0></td>
                                                                                                                                <td class=xl8127387 width=98 style='width:74pt'></td>
                                                                                                                                <td class=xl9327387 width=216 style='width:162pt'></td>
                                                                                                                                <td class=xl7227387 width=0></td>
                                                                                                                                <td class=xl7927387 width=68 style='width:51pt'></td>
                                                                                                                                <td class=xl7927387 width=139 style='width:104pt'></td>
                                                                                                                                <td class=xl7827387 width=86 style='width:65pt'></td>
                                                                                                                                <td class=xl7827387 width=64 style='width:48pt'></td>
                                                                                                                                <td class=xl7327387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl7827387 width=367 style='width:275pt'></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6627387></td>
                                                                                                                            </tr>
                                                                                                                            <tr height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                                                                <td colspan=19 height=14 class=xl7727387 width=2087 style='height:10.5pt;
                                                                                                                                    width:1566pt'>REPORTE MENSUAL<span style='mso-spacerun:yes'> </span></td>
                                                                                                                            </tr>
                                                                                                                            <tr height=14 style='height:10.5pt'>
                                                                                                                                <td height=14 class=xl6927387 style='height:10.5pt'></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl7727387 width=91 style='width:68pt'></td>
                                                                                                                                <td class=xl7727387 width=0></td>
                                                                                                                                <td class=xl7727387 width=69 style='width:52pt'></td>
                                                                                                                                <td class=xl7727387 width=87 style='width:65pt'></td>
                                                                                                                                <td class=xl7727387 width=88 style='width:66pt'></td>
                                                                                                                                <td class=xl7627387 width=111 style='width:83pt'></td>
                                                                                                                                <td class=xl8327387 width=86 style='width:65pt'></td>
                                                                                                                                <td class=xl7727387 width=0></td>
                                                                                                                                <td class=xl8727387 width=98 style='width:74pt'></td>
                                                                                                                                <td class=xl9427387 width=216 style='width:162pt'></td>
                                                                                                                                <td class=xl7727387 width=0></td>
                                                                                                                                <td class=xl7527387 width=68 style='width:51pt'></td>
                                                                                                                                <td class=xl7527387 width=139 style='width:104pt'></td>
                                                                                                                                <td class=xl7427387 width=86 style='width:65pt'></td>
                                                                                                                                <td class=xl7427387 width=64 style='width:48pt'></td>
                                                                                                                                <td class=xl7327387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl7827387 width=367 style='width:275pt'></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6627387></td>
                                                                                                                            </tr>
                                                                                                                            <tr height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                                                                <td colspan=19 height=14 class=xl7727387 width=2087 style='height:10.5pt;
                                                                                                                                    width:1566pt'>PLANILLADO, OBJETADO, FACTURADO Y CANCELADO<span
                                                                                                                                        style='mso-spacerun:yes'> </span></td>
                                                                                                                            </tr>
                                                                                                                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                                                                <td colspan=19 height=20 class=xl12227387 width=2087 style='height:15.0pt;
                                                                                                                                    width:1566pt'>REPORTE AL <?= $month ?>-<?= $year ?></td>
                                                                                                                            </tr>
                                                                                                                            <tr height=13 style='mso-height-source:userset;height:9.75pt'>
                                                                                                                                <td height=13 class=xl6627387 style='height:9.75pt'></td>
                                                                                                                                <td class=xl6627387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl8427387></td>
                                                                                                                                <td class=xl6627387></td>
                                                                                                                                <td class=xl8527387></td>
                                                                                                                                <td class=xl9327387 width=216 style='width:162pt'></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6727387></td>
                                                                                                                                <td class=xl6727387></td>
                                                                                                                                <td class=xl6727387></td>
                                                                                                                                <td class=xl6727387></td>
                                                                                                                                <td class=xl6727387></td>
                                                                                                                                <td class=xl6627387></td>
                                                                                                                                <td class=xl7927387 width=367 style='width:275pt'></td>
                                                                                                                                <td class=xl6927387></td>
                                                                                                                                <td class=xl6627387></td>
                                                                                                                            </tr>
                                                                                                                            <tr class=xl7127387 height=29 style='mso-height-source:userset;height:21.75pt'>
                                                                                                                                <td height=29 class=xl9127387 width=40 style='height:21.75pt;width:30pt;
                                                                                                                                    font-size:8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid #FABF8F;background:#F79646;mso-pattern:#F79646 none'>NRO</td>
                                                                                                                                <td class=xl9027387 width=77 style='border-left:none;width:58pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>MES</td>
                                                                                                                                <td class=xl9027387 width=91 style='border-left:none;width:68pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>TIPO DE SEGURO</td>

                                                                                                                                <td class=xl9027387 width=69 style='border-left:none;width:52pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>TRAMITE</td>
                                                                                                                                <td class=xl9027387 width=87 style='border-left:none;width:65pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>FECHA
                                                                                                                                    DE INGRESO</td>
                                                                                                                                <td class=xl9027387 width=88 style='border-left:none;width:66pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>FECHA
                                                                                                                                    DE EGRESO</td>
                                                                                                                                <td class=xl9027387 width=111 style='border-left:none;width:83pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>DIAS
                                                                                                                                    ESTADIA</td>
                                                                                                                                <td class=xl9027387 width=86 style='border-left:none;width:65pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>RECLAMO
                                                                                                                                    Nº</td>
                                                                                                                                <td class=xl11427387 width=98 style='border-left:none;width:74pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>CEDULA
                                                                                                                                    DE CIUDADANIA</td>
                                                                                                                                <td class=xl9027387 width=216 style='border-left:none;width:162pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>PACIENTE</td>
                                                                                                                                <td class=xl9027387 width=68 style='border-left:none;width:51pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>EDAD</td>
                                                                                                                                <td class=xl9027387 width=139 style='border-left:none;width:104pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>MEDICO</td>
                                                                                                                                <td class=xl9227387 width=86 style='border-left:none;width:65pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'><span
                                                                                                                                        style='mso-spacerun:yes'> </span>PLANILLADO<span
                                                                                                                                        style='mso-spacerun:yes'> </span></td>
                                                                                                                                <td class=xl9227387 width=64 style='border-left:none;width:48pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'><span
                                                                                                                                        style='mso-spacerun:yes'> </span>OBJETADO<span
                                                                                                                                        style='mso-spacerun:yes'> </span></td>
                                                                                                                                <td class=xl9227387 width=72 style='border-left:none;width:54pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'><span
                                                                                                                                        style='mso-spacerun:yes'> </span>FACTURADO<span
                                                                                                                                        style='mso-spacerun:yes'> </span></td>
                                                                                                                                <td class=xl9027387 width=104 style='border-left:none;width:78pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>FACTURA</td>
                                                                                                                                <td class=xl9227387 width=367 style='border-left:none;width:275pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'><span
                                                                                                                                        style='mso-spacerun:yes'> </span>DIAGNOSTICO<span
                                                                                                                                        style='mso-spacerun:yes'> </span></td>
                                                                                                                                <td class=xl9227387 width=123 style='border-left:none;width:92pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'><span
                                                                                                                                        style='mso-spacerun:yes'> </span>CONDICION AL ALTA<span
                                                                                                                                        style='mso-spacerun:yes'> </span></td>
                                                                                                                                <td class=xl11527387 width=101 style='border-left:none;width:76pt;font-size:
                                                                                                                                    8.0pt;color:black;font-weight:700;text-decoration:none;text-underline-style:
                                                                                                                                    none;text-line-through:none;font-family:Cambria;border-top:.5pt solid #FABF8F;
                                                                                                                                    border-right:.5pt solid #FABF8F;border-bottom:.5pt solid windowtext;
                                                                                                                                    border-left:.5pt solid windowtext;background:#F79646;mso-pattern:#F79646 none'>OBSERVACIONES<span
                                                                                                                                        style='mso-spacerun:yes'> </span></td>
                                                                                                                            </tr>
                                                                                                                            <?php
                                                                                                                            $T_planillado = 0;
                                                                                                                            $T_objetado = 0;
                                                                                                                            $T_facturado = 0;
                                                                                                                            if (!\is_null($records)) {
                                                                                                                                foreach ($records as $r) {
                                                                                                                                    $T_planillado = (float) $r->getPLANILLADO();
                                                                                                                                    $T_objetado = (float) $r->getOBJETADO();
                                                                                                                                    $T_facturado = (float) $r->getFACTURADO();
                                                                                                                                    ?>
                                                                                                                                    <tr class=xl7127387 height=14 style='height:10.5pt'>
                                                                                                                                        <td height=14 class=xl10327387 width=40 style='height:10.5pt;border-top:none;
                                                                                                                                            width:30pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                            text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                            border-bottom:.5pt solid windowtext;border-left:.5pt solid #FABF8F;
                                                                                                                                            background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getNRO() ?></td>
                                                                                                                                        <td class=xl8827387 width=77 style='border-top:none;border-left:none;
                                                                                                                                            width:58pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                            text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getMES() ?></td>
                                                                                                                                        <td class=xl8827387 width=91 style='border-top:none;border-left:none;
                                                                                                                                            width:68pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                            text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getASEGURADORA() ?></td>

                                                                                                                                        <td class=xl9627387 width=69 style='border-top:none;border-left:none;
                                                                                                                                            width:52pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getTRAMITE() ?></td>
                                                                                                                                        <td class=xl9727387 width=87 style='border-top:none;border-left:none;
                                                                                                                                            width:65pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getFECHA_DE_INGRESO() ?></td>
                                                                                                                                        <td class=xl9727387 width=88 style='border-top:none;border-left:none;
                                                                                                                                            width:66pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getFECHA_DE_EGRESO() ?></td>
                                                                                                                                        <td class=xl8827387 width=111 style='border-top:none;border-left:none;
                                                                                                                                            width:83pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                            text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getDIAS_ESTADIA() ?></td>
                                                                                                                                        <td class=xl9727387 width=86 style='border-top:none;border-left:none;
                                                                                                                                            width:65pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getRECLAMO_NO() ?></td>
                                                                                                                                        <td class=xl9827387 width=98 style='border-top:none;border-left:none;
                                                                                                                                            width:74pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getCEDULA_DE_CIUDADANIA() ?></td>
                                                                                                                                        <td class=xl9527387 width=216 style='border-top:none;border-left:none;
                                                                                                                                            width:162pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                            text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getPACIENTE() ?></td>
                                                                                                                                        <td class=xl9627387 width=68 style='border-top:none;border-left:none;
                                                                                                                                            width:51pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getEDAD() ?></td>
                                                                                                                                        <td class=xl9927387 width=139 style='border-top:none;border-left:none;
                                                                                                                                            width:104pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getMEDICO() ?></td>
                                                                                                                                        <td class=xl10227387 width=86 style='border-top:none;border-left:none;
                                                                                                                                            width:65pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><span
                                                                                                                                                style='mso-spacerun:yes'> </span><?= $r->getPLANILLADO() ?><span style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10027387 style='border-top:none;border-left:none;font-size:8.0pt;
                                                                                                                                            color:black;font-weight:400;text-decoration:none;text-underline-style:none;
                                                                                                                                            text-line-through:none;font-family:Cambria;border:.5pt solid windowtext;
                                                                                                                                            background:#FDE9D9;mso-pattern:#FDE9D9 none'><span
                                                                                                                                                style='mso-spacerun:yes'> </span><?= $r->getOBJETADO() ?><span style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10027387 style='border-top:none;border-left:none;font-size:8.0pt;
                                                                                                                                            color:black;font-weight:400;text-decoration:none;text-underline-style:none;
                                                                                                                                            text-line-through:none;font-family:Cambria;border:.5pt solid windowtext;
                                                                                                                                            background:#FDE9D9;mso-pattern:#FDE9D9 none'><span
                                                                                                                                                style='mso-spacerun:yes'> </span><?= $r->getFACTURADO() ?><span style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl10127387 width=104 style='border-top:none;border-left:none;
                                                                                                                                            width:78pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                            text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><span
                                                                                                                                                style='mso-spacerun:yes'> </span><?= $r->getFACTURA() ?><span style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl9927387 width=367 style='border-top:none;border-left:none;
                                                                                                                                            width:275pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                            none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getDIAGNOSTICO() ?></td>
                                                                                                                                        <td class=xl8927387 width=123 style='border-top:none;border-left:none;
                                                                                                                                            width:92pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                            text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                            border:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><span
                                                                                                                                                style='mso-spacerun:yes'> </span><?= $r->getCONDICION_DE_ALTA() ?><span style='mso-spacerun:yes'> </span></td>
                                                                                                                                        <td class=xl11627387 style='border-top:none;border-left:none;font-size:8.0pt;
                                                                                                                                            color:black;font-weight:400;text-decoration:none;text-underline-style:none;
                                                                                                                                            text-line-through:none;font-family:Cambria;border-top:.5pt solid windowtext;
                                                                                                                                            border-right:.5pt solid #FABF8F;border-bottom:.5pt solid windowtext;
                                                                                                                                            border-left:.5pt solid windowtext;background:#FDE9D9;mso-pattern:#FDE9D9 none'><?= $r->getOBSERVACIONES() ?></td>
                                                                                                                                    </tr>
                                                                                                                                    <?php
                                                                                                                                }
                                                                                                                            }
                                                                                                                            ?>
                                                                                                                            <tr height=14 style='height:10.5pt'>
                                                                                                                                <td height=14 class=xl10427387 width=40 style='height:10.5pt;border-top:none;
                                                                                                                                    width:30pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                    text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid #FABF8F'>&nbsp;</td>
                                                                                                                                <td class=xl11727387 width=77 style='border-top:none;border-left:none;
                                                                                                                                    width:58pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                    text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10527387 width=91 style='border-top:none;border-left:none;
                                                                                                                                    width:68pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                    text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>

                                                                                                                                <td class=xl10627387 width=69 style='border-top:none;border-left:none;
                                                                                                                                    width:52pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10727387 width=87 style='border-top:none;border-left:none;
                                                                                                                                    width:65pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10727387 width=88 style='border-top:none;border-left:none;
                                                                                                                                    width:66pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10527387 width=111 style='border-top:none;border-left:none;
                                                                                                                                    width:83pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                    text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10727387 width=86 style='border-top:none;border-left:none;
                                                                                                                                    width:65pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10827387 width=0 style='border-top:none;border-left:none;
                                                                                                                                    font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:none;
                                                                                                                                    text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10827387 width=98 style='border-top:none;border-left:none;
                                                                                                                                    width:74pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10927387 width=216 style='border-top:none;border-left:none;
                                                                                                                                    width:162pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl10627387 width=0 style='border-top:none;border-left:none;
                                                                                                                                    font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:none;
                                                                                                                                    text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'><b>TOTAL</b></td>
                                                                                                                                <td class=xl11027387 width=68 style='border-top:none;border-left:none;
                                                                                                                                    width:51pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'><?= $T_planillado ?></td>
                                                                                                                                <td class=xl12027387 width=139 style='border-top:none;border-left:none;
                                                                                                                                    width:104pt;font-size:8.0pt;color:windowtext;font-weight:700;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'><span
                                                                                                                                        style='mso-spacerun:yes'>   </span><?= $T_objetado ?><span
                                                                                                                                        style='mso-spacerun:yes'>   </span></td>
                                                                                                                                <td class=xl12027387 width=86 style='border-top:none;border-left:none;
                                                                                                                                    width:65pt;font-size:8.0pt;color:windowtext;font-weight:700;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'><span
                                                                                                                                        style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'><?= $T_facturado ?></span></td>
                                                                                                                                <td class=xl11027387 width=64 style='border-top:none;border-left:none;
                                                                                                                                    width:48pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'><span
                                                                                                                                        style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'> </span></td>
                                                                                                                                <td class=xl12327387 style='border-top:none;border-left:none;font-size:8.0pt;
                                                                                                                                    color:black;font-weight:400;text-decoration:none;text-underline-style:none;
                                                                                                                                    text-line-through:none;font-family:Cambria;border-top:.5pt solid windowtext;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid #FABF8F;
                                                                                                                                    border-left:.5pt solid windowtext'><span
                                                                                                                                        style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'> </span></td>
                                                                                                                                <td class=xl11127387 width=104 style='border-top:none;border-left:none;
                                                                                                                                    width:78pt;font-size:8.0pt;color:windowtext;font-weight:400;text-decoration:
                                                                                                                                    none;text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl11227387 width=367 style='border-top:none;border-left:none;
                                                                                                                                    width:275pt;font-size:8.0pt;color:black;font-weight:400;text-decoration:none;
                                                                                                                                    text-underline-style:none;text-line-through:none;font-family:Cambria;
                                                                                                                                    border-top:.5pt solid windowtext;border-right:.5pt solid windowtext;
                                                                                                                                    border-bottom:.5pt solid #FABF8F;border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl11327387 style='border-top:none;border-left:none;font-size:8.0pt;
                                                                                                                                    color:black;font-weight:400;text-decoration:none;text-underline-style:none;
                                                                                                                                    text-line-through:none;font-family:Cambria;border-top:.5pt solid windowtext;
                                                                                                                                    border-right:.5pt solid windowtext;border-bottom:.5pt solid #FABF8F;
                                                                                                                                    border-left:.5pt solid windowtext'>&nbsp;</td>
                                                                                                                                <td class=xl11927387 style='border-top:none;border-left:none;font-size:8.0pt;
                                                                                                                                    color:black;font-weight:400;text-decoration:none;text-underline-style:none;
                                                                                                                                    text-line-through:none;font-family:Cambria;border-top:.5pt solid windowtext;
                                                                                                                                    border-right:.5pt solid #FABF8F;border-bottom:.5pt solid #FABF8F;border-left:
                                                                                                                                    .5pt solid windowtext'>&nbsp;</td>
                                                                                                                            </tr>
                                                                                                                            <![if supportMisalignedColumns]>
                                                                                                                            <tr height=0 style='display:none'>
                                                                                                                                <td width=40 style='width:30pt'></td>
                                                                                                                                <td width=77 style='width:58pt'></td>
                                                                                                                                <td width=91 style='width:68pt'></td>
                                                                                                                                <td width=0></td>
                                                                                                                                <td width=69 style='width:52pt'></td>
                                                                                                                                <td width=87 style='width:65pt'></td>
                                                                                                                                <td width=88 style='width:66pt'></td>
                                                                                                                                <td width=111 style='width:83pt'></td>
                                                                                                                                <td width=86 style='width:65pt'></td>
                                                                                                                                <td width=0></td>
                                                                                                                                <td width=98 style='width:74pt'></td>
                                                                                                                                <td width=216 style='width:162pt'></td>
                                                                                                                                <td width=0></td>
                                                                                                                                <td width=68 style='width:51pt'></td>
                                                                                                                                <td width=139 style='width:104pt'></td>
                                                                                                                                <td width=86 style='width:65pt'></td>
                                                                                                                                <td width=64 style='width:48pt'></td>
                                                                                                                                <td width=72 style='width:54pt'></td>
                                                                                                                                <td width=104 style='width:78pt'></td>
                                                                                                                                <td width=367 style='width:275pt'></td>
                                                                                                                                <td width=123 style='width:92pt'></td>
                                                                                                                                <td width=101 style='width:76pt'></td>
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
