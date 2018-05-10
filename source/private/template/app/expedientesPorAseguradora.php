<?php
/*
 * Developed by: Andrés Sandoval Montoya
 * Developer contact: andresandoval992@gmail.com
 * ------------------------------------------------
 * File name: expedientesPorAseguradora.php
 * Encoding: UTF-8
 * Created: 04-ene-2017-2:48:41
 * ------------------------------------------------
 * Licensed under default license
 * ------------------------------------------------
 *
 */
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
            <meta name=ProgId content=Excel.Sheet>
                <meta name=Generator content="Microsoft Excel 15">
                    <link rel=File-List href="3_archivos/filelist.xml">
                        <style id="REPORTES - copia_3483_Styles">
                            <!--table
                            {mso-displayed-decimal-separator:"\,";
                             mso-displayed-thousand-separator:"\.";}
                            .xl153483
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
                            .xl643483
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
                            .xl653483
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl663483
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
                            .xl673483
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
                             white-space:normal;}
                            .xl683483
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
                             border:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl693483
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
                             mso-number-format:Percent;
                             text-align:right;
                             vertical-align:bottom;
                             border:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl703483
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
                             border-top:1.0pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl713483
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
                             vertical-align:bottom;
                             border-top:1.0pt solid windowtext;
                             border-right:.5pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl723483
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
                             mso-number-format:Percent;
                             text-align:right;
                             vertical-align:bottom;
                             border-top:1.0pt solid windowtext;
                             border-right:1.0pt solid windowtext;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl733483
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
                            .xl743483
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl753483
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
                            .xl763483
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
                            .xl773483
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
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl783483
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
                            .xl793483
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
                            .xl803483
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
                            .xl813483
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
                            .xl823483
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
                            .xl833483
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

                            <div id="REPORTES - copia_3483" align=center x:publishsource="Excel">

                                <table border=0 cellpadding=0 cellspacing=0 width=827 style='border-collapse:
                                       collapse;table-layout:fixed;width:620pt'>
                                    <col width=80 style='width:60pt'>
                                        <col width=188 style='mso-width-source:userset;mso-width-alt:6875;width:141pt'>
                                            <col width=239 style='mso-width-source:userset;mso-width-alt:8740;width:179pt'>
                                                <col width=80 span=4 style='width:60pt'>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl153483 width=80 style='height:15.0pt;width:60pt'></td>
                                                        <td class=xl153483 width=188 style='width:141pt'></td>
                                                        <td class=xl153483 width=239 style='width:179pt'></td>
                                                        <td class=xl153483 width=80 style='width:60pt'></td>
                                                        <td class=xl153483 width=80 style='width:60pt'></td>
                                                        <td class=xl153483 width=80 style='width:60pt'></td>
                                                        <td class=xl153483 width=80 style='width:60pt'></td>
                                                    </tr>
                                                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                        <td colspan=5 height=20 class=xl803483 width=667 style='height:15.0pt;
                                                            width:500pt'>MINISTERIO DE SALUD PUBLICA</td>
                                                        <td class=xl793483 width=80 style='width:60pt'></td>
                                                        <td class=xl793483 width=80 style='width:60pt'></td>
                                                    </tr>
                                                    <tr class=xl653483 height=20 style='height:15.0pt'>
                                                        <td colspan=5 height=20 class=xl803483 width=667 style='height:15.0pt;
                                                            width:500pt'>HOSPITAL “ DR. GUSTAVO DOMÍNGUEZ ”</td>
                                                        <td class=xl793483 width=80 style='width:60pt'></td>
                                                        <td class=xl793483 width=80 style='width:60pt'></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl813483 width=80 style='height:15.0pt;width:60pt'></td>
                                                        <td class=xl813483 width=188 style='width:141pt'></td>
                                                        <td class=xl823483 width=239 style='width:179pt'></td>
                                                        <td class=xl833483 width=80 style='width:60pt'></td>
                                                        <td class=xl813483 width=80 style='width:60pt'></td>
                                                        <td class=xl733483 width=80 style='width:60pt'></td>
                                                        <td class=xl753483 width=80 style='width:60pt'></td>
                                                    </tr>
                                                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                        <td colspan=5 height=20 class=xl803483 width=667 style='height:15.0pt;
                                                            width:500pt'>EXPEDIENTES POR ASEGURADORA</td>
                                                        <td class=xl793483 width=80 style='width:60pt'></td>
                                                        <td class=xl793483 width=80 style='width:60pt'></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl743483 width=80 style='height:15.0pt;width:60pt'></td>
                                                        <td class=xl743483 width=188 style='width:141pt'></td>
                                                        <td class=xl763483 width=239 style='width:179pt'></td>
                                                        <td class=xl783483 width=80 style='width:60pt'></td>
                                                        <td class=xl743483 width=80 style='width:60pt'></td>
                                                        <td class=xl743483 width=80 style='width:60pt'></td>
                                                        <td class=xl773483 width=80 style='width:60pt'></td>
                                                    </tr>
                                                    <tr height=21 style='height:15.75pt'>
                                                        <td height=21 class=xl153483 style='height:15.75pt'></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                    </tr>
                                                    <?php
                                                    if (count($records) > 0) {
                                                        $total = 0;
                                                        foreach ($records as $r) {
                                                            $total += $r["carpetas"];
                                                        }
                                                        ?>
                                                        <tr height=41 style='height:30.75pt'>
                                                            <td height=41 class=xl653483 style='height:30.75pt'></td>
                                                            <td class=xl663483>ASEGURADORA</td>
                                                            <td class=xl673483 width=239 style='border-left:none;width:179pt'>EXPEDIENTES
                                                                PROCESADOS PERIODO</td>
                                                            <td class=xl663483 style='border-left:none'>%</td>
                                                            <td class=xl653483></td>
                                                            <td class=xl653483></td>
                                                            <td class=xl653483></td>
                                                        </tr>
                                                        <?php foreach ($records as $r) { ?>

                                                            <tr height=21 style='height:15.75pt'>
                                                                <td height=21 class=xl153483 style='height:15.75pt'></td>
                                                                <td class=xl703483><?= $r["aseguradora"]?></td>
                                                                <td class=xl713483 style='border-left:none'><?= $r["carpetas"]?></td>
                                                                <td class=xl723483 style='border-left:none'><?= $r["carpetas"] * 100 / $total?> %</td>
                                                                <td class=xl153483></td>
                                                                <td class=xl153483></td>
                                                                <td class=xl153483></td>
                                                            </tr>
                                                        <?php } ?>
                                                        <tr height=21 style='height:15.75pt'>
                                                            <td height=21 class=xl153483 style='height:15.75pt'></td>
                                                            <td class=xl643483>Total general</td>
                                                            <td class=xl683483 style='border-left:none'><?= $total ?></td>
                                                            <td class=xl693483 style='border-left:none'>100 %</td>
                                                            <td class=xl153483></td>
                                                            <td class=xl153483></td>
                                                            <td class=xl153483></td>
                                                        </tr>
                                                    <?php } else { ?>
                                                        <tr height=41 style='height:30.75pt'>
                                                            <td height=41 class=xl653483 style='height:30.75pt' colspan="6">No hay datos para mostrar</td>
                                                        </tr>
                                                    <?php } ?>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl153483 style='height:15.0pt'></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                        <td class=xl153483></td>
                                                    </tr>
                                                    <![if supportMisalignedColumns]>
                                                    <tr height=0 style='display:none'>
                                                        <td width=80 style='width:60pt'></td>
                                                        <td width=188 style='width:141pt'></td>
                                                        <td width=239 style='width:179pt'></td>
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
