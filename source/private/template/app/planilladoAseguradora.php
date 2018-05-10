<?php
/*
 * Developed by: Andrés Sandoval Montoya
 * Developer contact: andresandoval992@gmail.com
 * ------------------------------------------------
 * File name: planilladoAseguradora.php
 * Encoding: UTF-8
 * Created: 04-ene-2017-3:17:10
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
                    <link rel=File-List href="PLANI_archivos/filelist.xml">
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
                            .xl683483
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
                            .xl693483
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
                            .xl703483
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
                            .xl713483
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
                            .xl723483
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
                            .xl733483
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
                            .xl743483
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
                            .xl753483
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
                            .xl763483
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
                            .xl773483
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
                            .xl783483
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
                             border-top:1.0pt solid windowtext;
                             border-right:1.0pt solid windowtext;
                             border-bottom:none;
                             border-left:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl793483
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
                             border-top:1.0pt solid windowtext;
                             border-right:1.0pt solid windowtext;
                             border-bottom:none;
                             border-left:none;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
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
                             font-family:Calibri, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:middle;
                             border-top:1.0pt solid windowtext;
                             border-right:none;
                             border-bottom:1.0pt solid windowtext;
                             border-left:1.0pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl813483
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
                             border-top:1.0pt solid windowtext;
                             border-right:1.0pt solid windowtext;
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

                            <div id="REPORTES - copia_3483" align=center x:publishsource="Excel">

                                <table border=0 cellpadding=0 cellspacing=0 width=929 style='border-collapse:
                                       collapse;table-layout:fixed;width:697pt'>
                                    <col width=80 style='width:60pt'>
                                        <col width=188 style='mso-width-source:userset;mso-width-alt:6875;width:141pt'>
                                            <col width=229 style='mso-width-source:userset;mso-width-alt:8374;width:172pt'>
                                                <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>
                                                    <col width=141 style='mso-width-source:userset;mso-width-alt:5156;width:106pt'>
                                                        <col width=80 span=2 style='width:60pt'>
                                                            <tr height=20 style='height:15.0pt'>
                                                                <td height=20 class=xl153483 width=80 style='height:15.0pt;width:60pt'></td>
                                                                <td class=xl153483 width=188 style='width:141pt'></td>
                                                                <td class=xl153483 width=229 style='width:172pt'></td>
                                                                <td class=xl153483 width=131 style='width:98pt'></td>
                                                                <td class=xl153483 width=141 style='width:106pt'></td>
                                                                <td class=xl153483 width=80 style='width:60pt'></td>
                                                                <td class=xl153483 width=80 style='width:60pt'></td>
                                                            </tr>
                                                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                <td colspan=6 height=20 class=xl743483 width=849 style='height:15.0pt;
                                                                    width:637pt'>MINISTERIO DE SALUD PUBLICA</td>
                                                                <td class=xl733483 width=80 style='width:60pt'></td>
                                                            </tr>
                                                            <tr class=xl653483 height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                <td colspan=6 height=20 class=xl743483 width=849 style='height:15.0pt;
                                                                    width:637pt'>HOSPITAL “ DR. GUSTAVO DOMÍNGUEZ ”</td>
                                                                <td class=xl733483 width=80 style='width:60pt'></td>
                                                            </tr>
                                                            <tr height=20 style='height:15.0pt'>
                                                                <td height=20 class=xl753483 width=80 style='height:15.0pt;width:60pt'></td>
                                                                <td class=xl753483 width=188 style='width:141pt'></td>
                                                                <td class=xl763483 width=229 style='width:172pt'></td>
                                                                <td class=xl773483 width=131 style='width:98pt'></td>
                                                                <td class=xl753483 width=141 style='width:106pt'></td>
                                                                <td class=xl673483 width=80 style='width:60pt'></td>
                                                                <td class=xl693483 width=80 style='width:60pt'></td>
                                                            </tr>
                                                            <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                <td colspan=6 height=20 class=xl743483 width=849 style='height:15.0pt;
                                                                    width:637pt'>PLANILLADO POR ASEGURADORA</td>
                                                                <td class=xl733483 width=80 style='width:60pt'></td>
                                                            </tr>
                                                            <tr height=20 style='height:15.0pt'>
                                                                <td height=20 class=xl683483 width=80 style='height:15.0pt;width:60pt'></td>
                                                                <td class=xl683483 width=188 style='width:141pt'></td>
                                                                <td class=xl703483 width=229 style='width:172pt'></td>
                                                                <td class=xl723483 width=131 style='width:98pt'></td>
                                                                <td class=xl683483 width=141 style='width:106pt'></td>
                                                                <td class=xl683483 width=80 style='width:60pt'></td>
                                                                <td class=xl713483 width=80 style='width:60pt'></td>
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
                                                                $t1 = 0;
                                                                $t2 = 0;
                                                                ?>
                                                                <tr height=21 style='height:15.75pt'>
                                                                    <td height=21 class=xl153483 style='height:15.75pt'></td>
                                                                    <td class=xl783483>MES<span style='mso-spacerun:yes'> </span></td>
                                                                    <td class=xl793483>ASEGURADORA</td>
                                                                    <td class=xl643483 style='border-left:none'>Cuenta de NRO</td>
                                                                    <td class=xl643483 style='border-left:none'>Suma de PLANILLADO</td>
                                                                    <td class=xl153483></td>
                                                                    <td class=xl153483></td>
                                                                </tr>
                                                            <?php foreach ($records as $r) {
                                                                $t1 += $r["carpetas"];
                                                                $t2 += $r["planillado"];
                                                                ?>
                                                                <tr height=21 style='height:15.75pt'>
                                                                    <td height=21 class=xl153483 style='height:15.75pt'></td>
                                                                    <td class=xl663483><?= $r["mes"]?></td>
                                                                    <td class=xl663483 style='border-left:none'><?= $r["aseguradora"]?></td>
                                                                    <td class=xl663483 style='border-top:none;border-left:none'><?= $r["carpetas"]?></td>
                                                                    <td class=xl663483 style='border-top:none;border-left:none'><?= $r["planillado"]?></td>
                                                                    <td class=xl153483></td>
                                                                    <td class=xl153483></td>
                                                                </tr>
                                                            <?php } ?>
                                                                <tr height=21 style='height:15.75pt'>
                                                                    <td height=21 class=xl153483 style='height:15.75pt'></td>
                                                                    <td colspan=2 class=xl803483 style='border-right:1.0pt solid black'>Total
                                                                        general</td>
                                                                    <td class=xl663483 style='border-top:none;border-left:none'><?= $t1 ?></td>
                                                                    <td class=xl663483 style='border-top:none;border-left:none'><?= $t2 ?></td>
                                                                    <td class=xl153483></td>
                                                                    <td class=xl153483></td>
                                                                </tr>
                                                            <?php } else { ?>
                                                                <tr height=21 style='height:15.75pt'>
                                                                    <td height=21 class=xl153483 style='height:15.75pt' colspan="5">No hay datos para mostrar</td>
                                                                </tr>
                                                            <?php } ?>
                                                            <![if supportMisalignedColumns]>
                                                            <tr height=0 style='display:none'>
                                                                <td width=80 style='width:60pt'></td>
                                                                <td width=188 style='width:141pt'></td>
                                                                <td width=229 style='width:172pt'></td>
                                                                <td width=131 style='width:98pt'></td>
                                                                <td width=141 style='width:106pt'></td>
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
