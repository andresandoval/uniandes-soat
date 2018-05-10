<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 09-jun-2016-11:14:40
 * Contact: andresandoval992@gmail.com
 *
 * objection-print-tmpl, part of soat
 */

/* @var $objection app\data\entities\app\objectionEntity */
/* @var $detail app\data\entities\app\expenseFormDetailEntity */
/* @var $patient app\data\entities\app\patientEntity */
/* @var $fur app\data\entities\app\furEntity */
/* @var $expenseForm app\data\entities\app\expenseFormEntity */
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
            <meta name=ProgId content=Excel.Sheet>
                <meta name=Generator content="Microsoft Excel 15">
                    <link rel=File-List href="REPORTES_archivos/filelist.xml">
                        <style id="REPORTES_11278_Styles">
                            <!--table
                            {mso-displayed-decimal-separator:"\,";
                             mso-displayed-thousand-separator:"\.";}
                            .xl1511278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6411278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6511278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:bottom;
                             border:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6611278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl6711278
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
                            .xl6811278
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl6911278
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7011278
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
                            .xl7111278
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
                            .xl7211278
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
                            .xl7311278
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
                            .xl7411278
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
                            .xl7511278
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7611278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border-top:1.0pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7711278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border-top:1.0pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7811278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
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
                            .xl7911278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
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
                            .xl8011278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
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
                            .xl8111278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
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
                            .xl8211278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
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
                            .xl8311278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
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
                            .xl8411278
                            {padding-top:1px;
                             padding-right:1px;
                             padding-left:1px;
                             mso-ignore:padding;
                             color:black;
                             font-size:11.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border-top:1.0pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:none;
                             border-left:.5pt solid windowtext;
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

                            <div id="REPORTES_11278" align=center x:publishsource="Excel">

                                <table border=0 cellpadding=0 cellspacing=0 width=1581 style='border-collapse:
                                       collapse;table-layout:fixed;width:1188pt'>
                                    <col width=128 style='mso-width-source:userset;mso-width-alt:4681;width:96pt'>
                                        <col width=165 style='mso-width-source:userset;mso-width-alt:6034;width:124pt'>
                                            <col width=122 span=3 style='mso-width-source:userset;mso-width-alt:4461;
                                                 width:92pt'>
                                                <col class=xl1511278 width=122 style='mso-width-source:userset;mso-width-alt:
                                                     4461;width:92pt'>
                                                    <col width=80 span=10 style='width:60pt'>
                                                        <tr class=xl6711278 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                            <td colspan=6 height=14 class=xl7811278 width=781 style='height:10.5pt;
                                                                width:588pt'>MINISTERIO DE SALUD PUBLICA</td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl6811278 width=80 style='width:60pt'></td>
                                                            <td class=xl6811278 width=80 style='width:60pt'></td>
                                                            <td class=xl6911278 width=80 style='width:60pt'></td>
                                                            <td class=xl7011278 width=80 style='width:60pt'></td>
                                                        </tr>
                                                        <tr class=xl6711278 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                            <td colspan=6 height=14 class=xl7811278 width=781 style='height:10.5pt;
                                                                width:588pt'>HOSPITAL “ DR. GUSTAVO DOMÍNGUEZ ”</td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl6811278 width=80 style='width:60pt'></td>
                                                            <td class=xl6811278 width=80 style='width:60pt'></td>
                                                            <td class=xl6911278 width=80 style='width:60pt'></td>
                                                            <td class=xl7011278></td>
                                                        </tr>
                                                        <tr class=xl6711278 height=19 style='height:14.25pt'>
                                                            <td height=19 class=xl7911278 width=128 style='height:14.25pt;width:96pt'></td>
                                                            <td class=xl7911278 width=165 style='width:124pt'></td>
                                                            <td class=xl8011278 width=122 style='width:92pt'></td>
                                                            <td class=xl8111278 width=122 style='width:92pt'></td>
                                                            <td class=xl7911278 width=122 style='width:92pt'></td>
                                                            <td class=xl7911278 width=122 style='width:92pt'></td>
                                                            <td class=xl7111278 width=80 style='width:60pt'></td>
                                                            <td class=xl7111278 width=80 style='width:60pt'></td>
                                                            <td class=xl7111278 width=80 style='width:60pt'></td>
                                                            <td class=xl7211278></td>
                                                            <td class=xl6711278></td>
                                                            <td class=xl7111278 width=80 style='width:60pt'></td>
                                                            <td class=xl7311278></td>
                                                            <td class=xl7311278></td>
                                                            <td class=xl7411278></td>
                                                            <td class=xl7011278></td>
                                                        </tr>
                                                        <tr class=xl6711278 height=14 style='mso-height-source:userset;height:10.5pt'>
                                                            <td colspan=6 height=14 class=xl7811278 width=781 style='height:10.5pt;
                                                                width:588pt'>REPORTE DE OBJECIÓN</td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl7511278 width=80 style='width:60pt'></td>
                                                            <td class=xl6811278 width=80 style='width:60pt'></td>
                                                            <td class=xl6811278 width=80 style='width:60pt'></td>
                                                            <td class=xl6911278 width=80 style='width:60pt'></td>
                                                            <td class=xl7011278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl1511278 style='height:15.0pt'></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'>Nº DE OBJECION:</td>
                                                            <td class=xl1511278><?= $objection->getNumber() ?></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'>PACIENTE:</td>
                                                            <td class=xl1511278><?= $patient->getFullName() ?></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'>FECHA DE INGRESO:</td>
                                                            <td class=xl1511278><?= $objection->getLastUpdateDate(true) ?></td>
                                                            <!--<td class=xl1511278><?= $objection->getNumber() ?></td>-->
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'>DIAGNOSTICO:</td>
                                                            <td class=xl1511278><?= $fur->getHealthCenterEgressReport() ?></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'>CINETICA:</td>
                                                            <td class=xl1511278><?= $fur->getHealthCenterAdmisionReport() ?></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        
                                                        <tr height=21 style='height:15.75pt'>
                                                            <td height=21 class=xl1511278 style='height:15.75pt'></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=21 style='height:15.75pt'>
                                                            <td height=21 class=xl6511278 style='height:15.75pt'>CODIGO DEL ITEM</td>
                                                            <td class=xl6511278 style='border-left:none'>ITEM O MEDICAMENTO</td>
                                                            <td class=xl6511278 style='border-left:none'>CANTIDAD</td>
                                                            <td class=xl6511278 style='border-left:none'>V. UNITARIO</td>
                                                            <td class=xl6511278 style='border-left:none'>TOTAL</td>
                                                            <td class=xl6511278 style='border-left:none'>VALOR OBJETADO</td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <?php foreach ($detail as $d) { ?>
                                                            <tr height=20 style='mso-height-source:userset;height:15.0pt; border-bottom: 1px solid #000'>
                                                                <td height=20 class=xl7611278 width=128 style='height:15.0pt;border-top:none;
                                                                    width:96pt'><?= $d->getItemCode() ?></td>
                                                                    <td class=xl7711278 width=165 style='border-top:none;width:124pt'><?= $d->getItemDescription() ?></td>
                                                                    <td class=xl7711278 width=122 style='border-top:none;width:92pt'><?= $d->getQuantity() ?></td>
                                                                    <td class=xl8411278 style='border-top:none'><?= $d->getUnitValue() ?></td>
                                                                    <td class=xl8411278 style='border-top:none'><?= $d->getTotalValue() ?></td>
                                                                    <td class=xl7711278 width=122 style='border-top:none;width:92pt'><?= $d->getObjecionValue() ?></td>
                                                                
                                                            </tr>
                                                        <?php } ?>
                                                        <tr height=21 style='height:15.75pt'>
                                                            <td colspan=4 height=21 class=xl8211278 style='border-right:1.0pt solid black;
                                                                height:15.75pt'>TOTAL</td>
                                                            <td class=xl6611278 style='border-left:none'><?= $expenseForm->getTotal() ?></td>
                                                            <td class=xl6611278 style='border-left:none'><?= $objection->getValue() ?></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl6411278 style='height:15.0pt'>DESCRIPCION:</td>
                                                            <td class=xl1511278><?= $objection->getDescription() ?></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                            <td class=xl1511278></td>
                                                        </tr>
                                                        <![if supportMisalignedColumns]>
                                                        <tr height=0 style='display:none'>
                                                            <td width=128 style='width:96pt'></td>
                                                            <td width=165 style='width:124pt'></td>
                                                            <td width=122 style='width:92pt'></td>
                                                            <td width=122 style='width:92pt'></td>
                                                            <td width=122 style='width:92pt'></td>
                                                            <td width=122 style='width:92pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
                                                            <td width=80 style='width:60pt'></td>
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
