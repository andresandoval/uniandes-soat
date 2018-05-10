<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 05-jun-2016-9:44:58
 * Contact: andresandoval992@gmail.com
 *
 * fur-print-tmpl, part of soat
 */

/* @var $form008 app\data\entities\app\form008Entity */
/* @var $patient \app\data\entities\app\patientEntity */
/* @var $fur app\data\entities\app\furEntity */
/* @var $doctor1 \app\data\entities\app\doctorEntity */
/* @var $doctor2 \app\data\entities\app\doctorEntity */
?>


<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                    <link rel="shortcut icon" href="resource/src/images/favicon.ico " type="image/x-icon">
                        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
                            <meta name=ProgId content=Excel.Sheet>
                                <meta name=Generator content="Microsoft Excel 15">
                                    <link rel=File-List href="~$2016-078%20GARZON%20DIANA_archivos/filelist.xml">
                                        <style id="2016-078 GARZON DIANA_8564_Styles">
                                            <!--table
                                            {mso-displayed-decimal-separator:"\.";
                                             mso-displayed-thousand-separator:"\.";}
                                            .xl698564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:5.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl708564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:5.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl718564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:5.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl728564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl738564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl748564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl758564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl768564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl778564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl788564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl798564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:8.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:"Arial Black", sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:middle;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl808564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:8.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:"Arial Black", sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:middle;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl818564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:8.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:"Arial Black", sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:middle;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl828564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl838564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl848564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:8.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl858564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:8.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl868564
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
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl878564
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
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl888564
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
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl898564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl908564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl918564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl928564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl938564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl948564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl958564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl968564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl978564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl988564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl998564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1008564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1018564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:0;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1028564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:0;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1038564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:0;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1048564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:11.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1058564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:11.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1068564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:11.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1078564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:blue;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:underline;
                                             text-underline-style:single;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1088564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1098564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:left;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1108564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:left;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1118564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:left;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1128564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1138564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1148564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1158564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1168564
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
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1178564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:8.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1188564
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
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1198564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1208564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1218564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1228564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1238564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1248564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1258564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
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
                                             white-space:nowrap;}
                                            .xl1268564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"Short Date";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1278564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1288564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1298564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1308564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1318564
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
                                             mso-number-format:"yyyy\\-mm\\-dd\;\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1328564
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
                                             mso-number-format:"yyyy\\-mm\\-dd\;\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1338564
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
                                             mso-number-format:"yyyy\\-mm\\-dd\;\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1348564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1358564
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
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1368564
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
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1378564
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
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1388564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:6.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1398564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:6.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1408564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
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
                                             white-space:nowrap;}
                                            .xl1418564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1428564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1438564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1448564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1458564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1468564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1478564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1488564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"Short Time";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1498564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1508564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:left;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1518564
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
                                             white-space:nowrap;}
                                            .xl1528564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:6.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl1538564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1548564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1558564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1568564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl1578564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl1588564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl1598564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1608564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1618564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1628564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1638564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1648564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1658564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1668564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl1678564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl1688564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl1698564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1708564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1718564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1728564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1738564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1748564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1758564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1768564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1778564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1788564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1798564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1808564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"yyyy\\-mm\\-dd\;\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1818564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"yyyy\\-mm\\-dd\;\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1828564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:"yyyy\\-mm\\-dd\;\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1838564
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
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1848564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1858564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1868564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1878564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1888564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:8.0pt;
                                             font-weight:700;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:left;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1898564
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
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1908564
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
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1918564
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
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1928564
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
                                             mso-number-format:"Short Date";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:.5pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1938564
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
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:1.0pt solid windowtext;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1948564
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
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1958564
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
                                             mso-number-format:"\@";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:.5pt solid windowtext;
                                             border-right:.5pt solid windowtext;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1968564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1978564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1988564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl1998564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2008564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:left;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2018564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:none;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2028564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:1.0pt solid windowtext;
                                             border-right:1.0pt solid windowtext;
                                             border-bottom:none;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2038564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl2048564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:10.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial;
                                             mso-generic-font-family:auto;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:normal;}
                                            .xl2058564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:9.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2068564
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
                                             mso-number-format:"Short Date";
                                             text-align:center;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2078564
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
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:.5pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2088564
                                            {padding-top:1px;
                                             padding-right:1px;
                                             padding-left:1px;
                                             mso-ignore:padding;
                                             color:windowtext;
                                             font-size:7.0pt;
                                             font-weight:400;
                                             font-style:normal;
                                             text-decoration:none;
                                             font-family:Arial, sans-serif;
                                             mso-font-charset:0;
                                             mso-number-format:General;
                                             text-align:left;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
                                            .xl2098564
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
                                             text-align:general;
                                             vertical-align:bottom;
                                             border-top:none;
                                             border-right:none;
                                             border-bottom:1.0pt solid windowtext;
                                             border-left:none;
                                             mso-background-source:auto;
                                             mso-pattern:auto;
                                             white-space:nowrap;}
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

                                            <div id="2016-078 GARZON DIANA_8564" align=center x:publishsource="Excel">

                                                <table border=0 cellpadding=0 cellspacing=0 width=754 class=xl758564
                                                       style='border-collapse:collapse;table-layout:fixed;width:575pt'>
                                                    <col class=xl758564 width=11 style='mso-width-source:userset;mso-width-alt:
                                                         402;width:8pt'>
                                                        <col class=xl758564 width=15 style='mso-width-source:userset;mso-width-alt:
                                                             548;width:11pt'>
                                                            <col class=xl758564 width=17 span=38 style='mso-width-source:userset;
                                                                 mso-width-alt:621;width:13pt'>
                                                                <col class=xl758564 width=16 style='mso-width-source:userset;mso-width-alt:
                                                                     585;width:12pt'>
                                                                    <col class=xl758564 width=17 style='mso-width-source:userset;mso-width-alt:
                                                                         621;width:13pt'>
                                                                        <col class=xl758564 width=26 style='mso-width-source:userset;mso-width-alt:
                                                                             950;width:20pt'>
                                                                            <col class=xl758564 width=23 style='mso-width-source:userset;mso-width-alt:
                                                                                 841;width:17pt'>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td colspan=44 height=16 class=xl728564 width=754 style='border-right:1.0pt solid black;
                                                                                        height:12.0pt;width:575pt'>FORMULARIO UNICO DE RECLAMACION DE LOS SERVICIOS
                                                                                        DE SALUD</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td colspan=44 height=16 class=xl768564 style='border-right:1.0pt solid black;
                                                                                        height:12.0pt'>SEGURO OBLIGATORIO DE ACCIDENTES DE TRANSITO</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=18 style='height:13.5pt'>
                                                                                    <td colspan=44 height=18 class=xl798564 style='border-right:1.0pt solid black;
                                                                                        height:13.5pt'>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=8 style='mso-height-source:userset;height:6.0pt'>
                                                                                    <td height=8 class=xl828564 style='height:6.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                    <td height=14 class=xl848564 colspan=12 style='height:10.5pt'>1. DATOS DEL
                                                                                        SERVICIO DE SALUD</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl878564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl898564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl908564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=23 style='mso-height-source:userset;height:17.25pt'>
                                                                                    <td height=23 class=xl828564 style='height:17.25pt'>&nbsp;</td>
                                                                                    <td colspan=42 class=xl918564 style='border-right:.5pt solid black'>HOSPITAL
                                                                                        ¨DR. GUSTAVO DOMINGUEZ Z¨</td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=12 style='mso-height-source:userset;height:9.0pt'>
                                                                                    <td height=12 class=xl948564 style='height:9.0pt'>&nbsp;</td>
                                                                                    <td colspan=42 class=xl958564 style='border-right:.5pt solid black'>Nombre
                                                                                        del Servicio de Salud<span style='mso-spacerun:yes'> </span></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl948564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                    <td height=20 class=xl948564 style='height:15.0pt'>&nbsp;</td>
                                                                                    <td colspan=18 class=xl1018564 style='border-right:.5pt solid black'>1768034870001</td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl1008564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=14 class=xl1048564 style='border-right:.5pt solid black'><?= $form008->getCode() ?></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl828564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td colspan=18 class=xl958564 style='border-right:.5pt solid black'>Código
                                                                                        del Servicio de Salud</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=14 class=xl958564 style='border-right:.5pt solid black'>No.
                                                                                        Trámite</td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl828564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                    <td height=21 class=xl828564 style='height:15.75pt'>&nbsp;</td>
                                                                                    <td colspan=19 class=xl918564 style='border-right:.5pt solid black'>Santo
                                                                                        Domingo - Las Delicias s/n y Av. Quito</td>
                                                                                    <td colspan=10 class=xl1078564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><a href="mailto:marinshana.valarezo@hgdz.gob.ec"><span
                                                                                                style='font-size:7.0pt'>marinshana.valarezo@hgdz.gob.ec</span></a></td>
                                                                                    <td colspan=13 class=xl918564 style='border-right:.5pt solid black;
                                                                                        border-left:none'>3836260</td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=13 style='mso-height-source:userset;height:9.75pt'>
                                                                                    <td height=13 class=xl1088564 style='height:9.75pt'>&nbsp;</td>
                                                                                    <td colspan=19 class=xl1098564 style='border-right:.5pt solid black'>Dirección:<span
                                                                                            style='mso-spacerun:yes'>  </span>Ciudad - provincia, canton parroquia<span
                                                                                            style='mso-spacerun:yes'> </span></td>
                                                                                    <td colspan=10 class=xl1128564 style='border-right:.5pt solid black;
                                                                                        border-left:none'>Correo electrónico</td>
                                                                                    <td colspan=13 class=xl1138564 style='border-right:.5pt solid black'>Teléfonos</td>
                                                                                    <td class=xl1158564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=8 style='mso-height-source:userset;height:6.0pt'>
                                                                                    <td height=8 class=xl828564 style='height:6.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=17 style='mso-height-source:userset;height:12.75pt'>
                                                                                    <td height=17 class=xl848564 colspan=9 style='height:12.75pt'>2. DATOS DEL
                                                                                        ACCIDENTE</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl858564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl878564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=15 style='height:11.25pt'>
                                                                                    <td height=15 class=xl1168564 style='height:11.25pt'>&nbsp;</td>
                                                                                    <td class=xl1178564 colspan=2>2.1<span style='mso-spacerun:yes'> </span></td>
                                                                                    <td class=xl1178564 colspan=10>Información del Accidentado</td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl1188564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl828564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=28 style='mso-height-source:userset;height:21.0pt'>
                                                                                    <td height=28 class=xl828564 style='height:21.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=28 class=xl1198564 style='border-right:.5pt solid black'><?= $patient->getApellidoPaterno() ?> <?= $patient->getApellidoMaterno() ?> <?= $patient->getPrimerNombre() ?> <?= $patient->getSegundoNombre() ?></td>
                                                                                    <td colspan=10 class=xl1228564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><?= $patient->getIdentificacion() ?></td>
                                                                                    <td colspan=2 class=xl1198564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><?= strtoupper($patient->getGenero()) ?></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl828564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=8 class=xl1258564>Primer apellido</td>
                                                                                    <td colspan=8 class=xl1258564 style='border-left:none'>Segundo apellido</td>
                                                                                    <td colspan=12 class=xl958564 style='border-right:.5pt solid black;
                                                                                        border-left:none'>Nombres</td>
                                                                                    <td colspan=10 class=xl958564 style='border-right:.5pt solid black;
                                                                                        border-left:none'>C.C. o PASAPORTE</td>
                                                                                    <td colspan=2 class=xl958564 style='border-right:.5pt solid black;border-left:
                                                                                        none'>Sexo</td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl828564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=25 style='mso-height-source:userset;height:18.75pt'>
                                                                                    <td height=25 class=xl828564 style='height:18.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=20 class=xl1268564 style='border-right:.5pt solid black'><?= $patient->getDireccion() ?></td>
                                                                                    <td colspan=11 class=xl918564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><?= $patient->getProvincia() ?></td>
                                                                                    <td colspan=9 class=xl1278564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><?= $patient->getTelefono() ?></td>
                                                                                    <td class=xl1308564 style='border-left:none'>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=13 style='mso-height-source:userset;height:9.75pt'>
                                                                                    <td height=13 class=xl948564 style='height:9.75pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=20 class=xl1258564>Dirección</td>
                                                                                    <td colspan=11 class=xl1258564 style='border-left:none'>Ciudad</td>
                                                                                    <td colspan=9 class=xl1258564 style='border-left:none'>Teléfono</td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                    <td height=20 class=xl948564 style='height:15.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=6>Fecha de Nacimiento:</td>
                                                                                    <td colspan=8 class=xl1318564 style='border-right:1.0pt solid black'><?= $patient->getFechaNacimiento() ?></td>
                                                                                    <td class=xl1348564 colspan=2><span
                                                                                            style='mso-spacerun:yes'> </span>Edad<span style='mso-spacerun:yes'> </span></td>
                                                                                    <td colspan=4 class=xl1358564 style='border-right:.5pt solid black'><?= $patient->getEdad() ?></td>
                                                                                    <td class=xl998564 colspan=6>Condición del Accidenta<span style='display:
                                                                                                                                              none'>do:<span style='mso-spacerun:yes'>  </span></span></td>
                                                                                    <td class=xl1398564 style='border-top:none'>&nbsp;</td>
                                                                                    <td class=xl1398564 style='border-top:none'>&nbsp;</td>
                                                                                    <td class=xl998564 colspan=3>Ocupante</td>
                                                                                    <td class=xl1258564 style='border-top:none'><?= $fur->getPatientConditionOccupant() ? "X" : "" ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=3>Peatón</td>
                                                                                    <td class=xl1408564 style='border-top:none'><?= $fur->getPatientConditionWalker() ? "X" : "" ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl828564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                    <td height=14 class=xl1168564 style='height:10.5pt'>&nbsp;</td>
                                                                                    <td class=xl1178564 colspan=2>2.2</td>
                                                                                    <td class=xl1178564 colspan=10>Identificación del Accidente</td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl1188564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=4 style='mso-height-source:userset;height:3.0pt'>
                                                                                    <td height=4 class=xl828564 style='height:3.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=26 style='mso-height-source:userset;height:19.5pt'>
                                                                                    <td height=26 class=xl828564 style='height:19.5pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=22 class=xl1418564 style='border-right:.5pt solid black'><?= $fur->getAccidentAddress() ?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=8 class=xl1418564 style='border-right:1.0pt solid black'><?= $fur->getAccidentDate() ?></td>
                <!--                                                                    <td colspan=2 class=xl1458564 style='border-right:1.0pt solid black;
                                                                                        border-left:none'>xxx10</td>
                                                                                    <td colspan=2 class=xl1458564 style='border-right:.5pt solid black;
                                                                                        border-left:none'>xxx11</td>-->
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=4 class=xl1488564 style='border-right:.5pt solid black'><?= $fur->getAccidentHour() < 10 ? '0' . $fur->getAccidentHour() : $fur->getAccidentHour() ?>:<?= $fur->getAccidentMinute() < 10 ? '0' . $fur->getAccidentMinute() : $fur->getAccidentMinute() ?></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=17 style='mso-height-source:userset;height:12.75pt'>
                                                                                    <td height=17 class=xl948564 style='height:12.75pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=22 class=xl1498564>Calles en donde ocurrió el accidente</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=4 class=xl1498564>Año</td>
                                                                                    <td colspan=2 class=xl1498564>Mes</td>
                                                                                    <td colspan=2 class=xl1498564>Día</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=2 class=xl1498564>Hora</td>
                                                                                    <td colspan=2 class=xl1498564>&nbsp;</td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=4 style='mso-height-source:userset;height:3.0pt'>
                                                                                    <td height=4 class=xl828564 style='height:3.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=22 style='mso-height-source:userset;height:16.5pt'>
                                                                                    <td height=22 class=xl828564 style='height:16.5pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=11 class=xl1418564 style='border-right:.5pt solid black'><?= $fur->getAccidentProvince() ?></td>
                                                                                    <td colspan=10 class=xl1418564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><?= $fur->getAccidentCanton() ?></td>
                                                                                    <td colspan=9 class=xl1418564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><?= $fur->getAccidentParish() ?></td>
                                                                                    <td colspan=10 class=xl1418564 style='border-right:.5pt solid black;
                                                                                        border-left:none'><?= $fur->getAccidentNeighborhood() ?></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=17 style='mso-height-source:userset;height:12.75pt'>
                                                                                    <td height=17 class=xl948564 style='height:12.75pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=11 class=xl1498564>Provincia</td>
                                                                                    <td colspan=10 class=xl1498564>Cantón</td>
                                                                                    <td colspan=9 class=xl1498564>Parroquia</td>
                                                                                    <td colspan=10 class=xl1498564>Barrio</td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=6 style='mso-height-source:userset;height:4.5pt'>
                                                                                    <td height=6 class=xl828564 style='height:4.5pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=12 style='height:9.0pt'>
                                                                                    <td height=12 class=xl948564 style='height:9.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=13>Informe del Accidente (Relato breve de los
                                                                                        hechos)</td>
                                                                                    <td colspan=27 class=xl1508564>&nbsp;</td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=17 style='mso-height-source:userset;height:12.75pt'>
                                                                                    <td height=17 class=xl828564 style='height:12.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=40 class=xl1508564><?= $fur->getAccidentReport() ?></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=15 style='mso-height-source:userset;height:11.25pt'>
                                                                                    <td height=15 class=xl828564 style='height:11.25pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                    <td height=21 class=xl1168564 style='height:15.75pt'>&nbsp;</td>
                                                                                    <td class=xl1178564 colspan=2>2.3</td>
                                                                                    <td class=xl1178564 colspan=9>Información del Vehículo</td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564 colspan=7></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl1188564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl828564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                    <td height=20 class=xl828564 style='height:15.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl998564 colspan=7>Vehículo Identificado</td>
                                                                                    <td class=xl1408564><?= $fur->getVehicleInsured() ? "X" : "" ?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=10 class="xl1418564" style='border-right:.5pt solid black'><?= $fur->getVehicleInsured() ? $fur->getVehicleLicensePlate() : "S/N" ?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=6 class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=12 class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                    <td height=21 class=xl948564 style='height:15.75pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=7>Vehículo No Identificado</td>
                                                                                    <td class=xl1408564 style='border-top:none'><?= $fur->getVehicleNotIdentified() ? "X" : "" ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl1538564 colspan=10 style='border-right:.5pt solid black; text-align: center; vertical-align: middle'>Placa del Vehículo</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=6 class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=12 class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=6 style='mso-height-source:userset;height:4.5pt'>
                                                                                    <td height=6 class=xl828564 style='height:4.5pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=6 style='mso-height-source:userset;height:4.5pt'>
                                                                                    <td height=6 class=xl948564 style='height:4.5pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=9 style='mso-height-source:userset;height:6.75pt'>
                                                                                    <td height=9 class=xl1778564 style='height:6.75pt'>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1798564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl828564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                                                    <td height=14 class=xl848564 colspan=21 style='height:10.5pt'>3. DATOS SOBRE
                                                                                        LA ATENCIÓN MEDICA DEL ASEGURADO SOAT</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl868564>&nbsp;</td>
                                                                                    <td class=xl878564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=13 style='mso-height-source:userset;height:9.75pt'>
                                                                                    <td height=13 class=xl1168564 style='height:9.75pt'>&nbsp;</td>
                                                                                    <td class=xl1178564 colspan=2>3.1<span style='mso-spacerun:yes'> </span></td>
                                                                                    <td class=xl1178564 colspan=8>En el Servicio de Salud</td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564><span style='mso-spacerun:yes'> </span></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl1188564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=7 style='mso-height-source:userset;height:5.25pt'>
                                                                                    <td height=7 class=xl948564 style='height:5.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                    <td height=20 class=xl948564 style='height:15.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=5>Fecha de Ingreso</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=8 class=xl1808564 style='border-right:.5pt solid black'><?= $fur->getHealthCenterAdmisionDate() ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=4 class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=10 class=xl1838564 style='border-right:.5pt solid black'><?= $fur->getHealthCenterHistoryNumber() ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=12 style='height:9.0pt'>
                                                                                    <td height=12 class=xl948564 style='height:9.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=4 class=xl1258564>Año</td>
                                                                                    <td colspan=2 class=xl1258564 style='border-left:none'>Mes</td>
                                                                                    <td colspan=2 class=xl1258564 style='border-left:none'>Día</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=4 class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=10 class=xl958564 style='border-right:.5pt solid black'>Historia
                                                                                        Clínica No.<span style='mso-spacerun:yes'> </span></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=12 style='height:9.0pt'>
                                                                                    <td height=12 class=xl948564 style='height:9.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=15 style='mso-height-source:userset;height:11.25pt'>
                                                                                    <td height=15 class=xl948564 style='height:11.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=5>Fecha de Egreso</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=8 class=xl1808564 style='border-right:.5pt solid black'><?= $fur->getHealthCenterEgressDate() ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=5 style='border-right:.5pt solid black'>AMBULATORIO</td>
                                                                                    <td class=xl1408564 style='border-left:none'><?= $fur->getHealthCenterAmbulatoryCare() ? 'X' : '' ?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl1538564 colspan=5 style='border-right:.5pt solid black'>HOSPITALIZACIÓN</td>
                                                                                    <td class=xl1868564 style='border-left:none'><?= $fur->getHealthCenterHospCare() ? 'X' : '' ?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=16 style='mso-height-source:userset;height:12.0pt'>
                                                                                    <td height=16 class=xl948564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=4 class=xl1258564>Año</td>
                                                                                    <td colspan=2 class=xl1258564 style='border-left:none'>Mes</td>
                                                                                    <td colspan=2 class=xl1258564 style='border-left:none'>Día</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl1388564></td>
                                                                                    <td class=xl1388564></td>
                                                                                    <td class=xl1388564></td>
                                                                                    <td class=xl1388564></td>
                                                                                    <td class=xl1878564></td>
                                                                                    <td class=xl1528564 width=17 style='width:13pt'></td>
                                                                                    <td colspan=6 class=xl1348564 style='border-right:.5pt solid black'>No de
                                                                                        días estada</td>
                                                                                    <td colspan=3 class=xl1258564 style='border-left:none'><?= $fur->getHealthCenterHospCare() ? $fur->getHealthCenterHospCareDays() : 'S/N' ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=10 style='mso-height-source:userset;height:7.5pt'>
                                                                                    <td height=10 class=xl948564 style='height:7.5pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=6 style='mso-height-source:userset;height:4.5pt'>
                                                                                    <td height=6 class=xl948564 style='height:4.5pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=12 style='mso-height-source:userset;height:9.0pt'>
                                                                                    <td height=12 class=xl948564 style='height:9.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=7>Diagnóstico de Ingreso:</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=27 style='mso-height-source:userset;height:20.25pt'>
                                                                                    <td height=27 class=xl948564 style='height:20.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=40 class=xl1888564><?= $fur->getHealthCenterAdmisionReport() ?></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=18 style='mso-height-source:userset;height:13.5pt'>
                                                                                    <td height=18 class=xl948564 style='height:13.5pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=8>Diagnóstico de Egreso (CIE 10):</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=19 style='mso-height-source:userset;height:14.25pt'>
                                                                                    <td height=19 class=xl948564 style='height:14.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=40 class=xl1888564><?= $fur->getHealthCenterEgressReport() ?></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=7 style='mso-height-source:userset;height:5.25pt'>
                                                                                    <td height=7 class=xl948564 style='height:5.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl888564 height=13 style='mso-height-source:userset;height:9.75pt'>
                                                                                    <td height=13 class=xl1168564 style='height:9.75pt'>&nbsp;</td>
                                                                                    <td class=xl1178564 colspan=2>3.2</td>
                                                                                    <td class=xl1178564 colspan=4>Referencia</td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl888564></td>
                                                                                    <td class=xl1188564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl948564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564><span style='mso-spacerun:yes'> </span></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=23 style='mso-height-source:userset;height:17.25pt'>
                                                                                    <td height=23 class=xl948564 style='height:17.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=7>Asegurado Referido de:</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=13 class=xl1358564 style='border-right:.5pt solid black'><?= $fur->getHealthCenterReferredFr() ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=7 class=xl1358564 style='border-right:.5pt solid black'><?= $fur->getHealthCenterReferredFrCity() ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=8 class=xl1358564 style='border-right:1.0pt solid black'><?= $fur->getHealthCenterReferredFrDate() ?></td>
                <!--                                                                    <td colspan=2 class=xl1838564>xxx13</td>
                                                                                    <td colspan=2 class=xl1918564>xxx14</td>-->
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=12 style='height:9.0pt'>
                                                                                    <td height=12 class=xl948564 style='height:9.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=13 class=xl1498564>Nombre del Servicio de Salud</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=7 class=xl1498564>Ciudad</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=2 class=xl1498564>Año</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=2 class=xl1498564>Mes</td>
                                                                                    <td colspan=2 class=xl1498564>Día</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=3 style='mso-height-source:userset;height:2.25pt'>
                                                                                    <td height=3 class=xl948564 style='height:2.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=22 style='mso-height-source:userset;height:16.5pt'>
                                                                                    <td height=22 class=xl948564 style='height:16.5pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=6>Asegurado Referido a:</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=13 class=xl1358564 style='border-right:.5pt solid black'><?= $fur->getHealthCenterReferredTo() ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=7 class=xl1928564 style='border-right:.5pt solid black'><?= $fur->getHealthCenterReferredToCity() ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td colspan=8 class=xl1358564 style='border-right:1.0pt solid black'><?= $fur->getHealthCenterReferredToDate() ?></td>
                <!--                                                                    <td colspan=2 class=xl1938564 style='border-right:1.0pt solid black;
                                                                                        border-left:none'>xxx18</td>
                                                                                    <td colspan=2 class=xl1938564 style='border-right:.5pt solid black;
                                                                                        border-left:none'>xxx19</td>-->
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=13 style='height:9.75pt'>
                                                                                    <td height=13 class=xl1088564 style='height:9.75pt'>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td colspan=13 class=xl1138564>Nombre del Servicio de Salud</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td colspan=7 class=xl1138564>Ciudad</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td colspan=2 class=xl1978564>Año</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td colspan=2 class=xl1138564>Mes</td>
                                                                                    <td colspan=2 class=xl1138564>Día</td>
                                                                                    <td class=xl1968564>&nbsp;</td>
                                                                                    <td class=xl1158564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=6 style='mso-height-source:userset;height:4.5pt'>
                                                                                    <td height=6 class=xl948564 style='height:4.5pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=15 style='height:11.25pt'>
                                                                                    <td height=15 class=xl848564 colspan=18 style='height:11.25pt'>4. DATOS SOBRE
                                                                                        EL FALLECIMIENTO DEL ASEGURADO</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1988564>&nbsp;</td>
                                                                                    <td class=xl1998564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=16 style='mso-height-source:userset;height:12.0pt'>
                                                                                    <td height=16 class=xl948564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564 colspan=7>Causas de la Muerte: BÁSIC<span
                                                                                            style='display:none'>A</span></td>
                                                                                    <td class=xl1708564>&nbsp;</td>
                                                                                    <td colspan=11 class=xl1538564 style='border-right:.5pt solid black'><?= $fur->getInsuredDead() ? $fur->getInsuredDeadBasicReazon() : 'S/N' ?></td>
                                                                                    <td class=xl1708564 colspan=3>DIRECTA</td>
                                                                                    <td colspan=11 class=xl1538564 style='border-right:.5pt solid black'><?= $fur->getInsuredDead() ? $fur->getInsuredDeadDirectReazon() : 'S/N' ?></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl998564 height=11 style='mso-height-source:userset;height:8.25pt'>
                                                                                    <td height=11 class=xl948564 style='height:8.25pt'>&nbsp;</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl988564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl828564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl998564 colspan=5>Fecha de la Muerte</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=8 class=xl1838564 style='border-right:1.0pt solid black'><?= $fur->getInsuredDead() ? $fur->getInsuredDeadDate() : 'S/N' ?></td>
<!--                                                                                    <td colspan=2 class=xl1938564 style='border-right:1.0pt solid black;
                                                                                        border-left:none'>xxx23</td>
                                                                                    <td colspan=2 class=xl1938564 style='border-right:.5pt solid black;
                                                                                        border-left:none'>xxx24</td>-->
                                                                                    <td class=xl888564></td>
                                                                                    <td colspan=4 class=xl1358564 style='border-right:.5pt solid black'>
                                                                                        <?php
                                                                                            if($fur->getInsuredDead()){
                                                                                                echo ($fur->getInsuredDeadHour() < 10 ? '0' . $fur->getInsuredDeadHour() : $fur->getInsuredDeadHour()) . ':' . ($fur->getInsuredDeadMinute() < 10 ? '0' . $fur->getInsuredDeadMinute() : $fur->getInsuredDeadMinute());
                                                                                            }else{
                                                                                                echo 'S/N';
                                                                                            }
                                                                                        ?>

                                                                                    </td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl2008564 colspan=5>Médico</td>
                                                                                    <td colspan=10 class=xl698564 style='border-right:.5pt solid black'><?= !\is_null($doctor1) ? $doctor1->getFullName() : 'S/N'?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl828564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=4 class=xl968564>Año</td>
                                                                                    <td colspan=2 class=xl1498564>Mes</td>
                                                                                    <td colspan=2 class=xl1498564>Día</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=4 class=xl968564>Hora</td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl998564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=18 style='mso-height-source:userset;height:13.5pt'>
                                                                                    <td height=18 class=xl828564 style='height:13.5pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=32 class=xl1418564 style='border-right:.5pt solid black'><?= !\is_null($doctor2) ? $doctor2->getFullName() : 'S/N'?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=19 style='mso-height-source:userset;height:14.25pt'>
                                                                                    <td height=19 class=xl1778564 style='height:14.25pt'>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td colspan=32 class=xl1138564>Apellidos y Nombres del Médico que firmó el
                                                                                        Certificado de Defunción</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1798564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=5 style='mso-height-source:userset;height:3.75pt'>
                                                                                    <td height=5 class=xl828564 style='height:3.75pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl848564 colspan=14 style='height:12.0pt'>5. DECLARACIÓN
                                                                                        DEL SERVICIO DE SALUD</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2018564>&nbsp;</td>
                                                                                    <td class=xl2028564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl828564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td colspan=42 rowspan=2 class=xl2038564 width=720 style='width:550pt'>En
                                                                                        representación del Servicio de Salud de la referencia, declaro para fines
                                                                                        legales, que la información diligenciada en este documento es cierta y puede
                                                                                        ser verificada por la compañía de seguros y/o FONSAT.</td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl828564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=17 style='height:12.75pt'>
                                                                                    <td height=17 class=xl828564 style='height:12.75pt'>&nbsp;</td>
                                                                                    <td class=xl2048564 width=15 style='width:11pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=16 style='width:12pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=26 style='width:20pt'></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=17 style='height:12.75pt'>
                                                                                    <td height=17 class=xl828564 style='height:12.75pt'>&nbsp;</td>
                                                                                    <td class=xl2048564 width=15 style='width:11pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=16 style='width:12pt'></td>
                                                                                    <td class=xl2048564 width=17 style='width:13pt'></td>
                                                                                    <td class=xl2048564 width=26 style='width:20pt'></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=16 style='height:12.0pt'>
                                                                                    <td height=16 class=xl828564 style='height:12.0pt'>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=10 class=xl2058564>&nbsp;</td>
                                                                                    <td class=xl2058564>&nbsp;</td>
                                                                                    <td class=xl2058564>&nbsp;</td>
                                                                                    <td colspan=10 class=xl2058564>&nbsp;</td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td colspan=7 class=xl2068564><?= $fur->getLastUpdateDate()?></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl838564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=18 style='mso-height-source:userset;height:13.5pt'>
                                                                                    <td height=18 class=xl1778564 style='height:13.5pt'>&nbsp;</td>
                                                                                    <td class=xl2088564 colspan=28><span style='mso-spacerun:yes'> </span>Nombre,
                                                                                        firma y sello autorizados ( Director del Servicio de salud o Representante
                                                                                        Legal o delegado específico)</td>
                                                                                    <td class=xl2088564>&nbsp;</td>
                                                                                    <td class=xl2088564>&nbsp;</td>
                                                                                    <td class=xl2088564>&nbsp;</td>
                                                                                    <td class=xl2088564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl2098564 colspan=3>Fecha</td>
                                                                                    <td class=xl1788564>&nbsp;</td>
                                                                                    <td class=xl1798564>&nbsp;</td>
                                                                                </tr>
                                                                                <tr class=xl758564 height=3 style='mso-height-source:userset;height:2.25pt'>
                                                                                    <td height=3 class=xl1388564 style='height:2.25pt'></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                    <td class=xl758564></td>
                                                                                </tr>
                                                                                <![if supportMisalignedColumns]>
                                                                                <tr height=0 style='display:none'>
                                                                                    <td width=11 style='width:8pt'></td>
                                                                                    <td width=15 style='width:11pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=16 style='width:12pt'></td>
                                                                                    <td width=17 style='width:13pt'></td>
                                                                                    <td width=26 style='width:20pt'></td>
                                                                                    <td width=23 style='width:17pt'></td>
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
