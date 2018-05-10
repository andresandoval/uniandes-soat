<?php
/*
 * Developed by: Andres Sandoval Montoya
 * Date: 08-jun-2016-15:20:09
 * Contact: andresandoval992@gmail.com
 *
 * expense-form-print-tmpl, part of soat
 */

/* @var $expenseForm app\data\entities\app\expenseFormEntity */
/* @var $patient app\data\entities\app\patientEntity */
/* @var $fur app\data\entities\app\furEntity */
?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
            <meta name=ProgId content=Excel.Sheet>
                <meta name=Generator content="Microsoft Excel 14">
                    <link rel=File-List href="Libro1_filelist.xml">
                        <!--[if !mso]>
                        <style>
                        v\:* {behavior:url(#default#VML);}
                        o\:* {behavior:url(#default#VML);}
                        x\:* {behavior:url(#default#VML);}
                        .shape {behavior:url(#default#VML);}
                        </style>
                        <![endif]-->
                        <style id="Libro1_19859_Styles"><!--table
                            {mso-displayed-decimal-separator:"\.";
                             mso-displayed-thousand-separator:"\,";}
                            .xl1519859
                            {padding:0px;
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
                            .xl6419859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:14.0pt;
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
                            .xl6519859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
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
                            .xl6619859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:11.0pt;
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
                            .xl6719859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:12.0pt;
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
                            .xl6819859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
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
                            .xl6919859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:0;
                             text-align:left;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7019859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:"Short Date";
                             text-align:left;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7119859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:"\@";
                             text-align:left;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl7219859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
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
                            .xl7319859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:top;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7419859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:top;
                             border-top:none;
                             border-right:none;
                             border-bottom:.5pt solid windowtext;
                             border-left:none;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;}
                            .xl7519859
                            {padding:0px;
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
                             border:.5pt solid windowtext;
                             background:#92CDDC;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl7619859
                            {padding:0px;
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
                             background:#92CDDC;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl7719859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:general;
                             vertical-align:bottom;
                             border:.5pt solid windowtext;
                             background:#DA9694;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl7819859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:center;
                             vertical-align:bottom;
                             border:.5pt solid windowtext;
                             background:#DA9694;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl7919859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
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
                             background:#DA9694;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl8019859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:right;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8119859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             background:white;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl8219859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:"_-* \#\,\#\#0\\ _€_-\;\\-* \#\,\#\#0\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
                             text-align:right;
                             vertical-align:middle;
                             border-top:.5pt solid windowtext;
                             border-right:none;
                             border-bottom:.5pt solid windowtext;
                             border-left:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8319859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:"_-* \#\,\#\#0\.00\\ _€_-\;\\-* \#\,\#\#0\.00\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
                             text-align:right;
                             vertical-align:middle;
                             border:.5pt solid windowtext;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8419859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:right;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8519859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:left;
                             vertical-align:top;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8619859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:10.0pt;
                             font-weight:400;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:"_-* \#\,\#\#0\\ _€_-\;\\-* \#\,\#\#0\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
                             text-align:right;
                             vertical-align:top;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;}
                            .xl8719859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:12.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:"_-* \#\,\#\#0\.00\\ _€_-\;\\-* \#\,\#\#0\.00\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
                             text-align:right;
                             vertical-align:top;
                             border:.5pt solid windowtext;
                             background:yellow;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl8819859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:12.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:"_-* \#\,\#\#0\.00\\ _€_-\;\\-* \#\,\#\#0\.00\\ _€_-\;_-* \0022-\0022??\\ _€_-\;_-\@_-";
                             text-align:right;
                             vertical-align:bottom;
                             border:.5pt solid windowtext;
                             background:yellow;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl8919859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:12.0pt;
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
                            .xl9019859
                            {padding:0px;
                             mso-ignore:padding;
                             color:windowtext;
                             font-size:11.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:right;
                             vertical-align:bottom;
                             border:.5pt solid windowtext;
                             background:yellow;
                             mso-pattern:black none;
                             white-space:nowrap;}
                            .xl9119859
                            {color:windowtext;
                             font-size:10.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:right;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:normal;
                             padding-right:9px;
                             mso-char-indent-count:1;}
                            .xl9219859
                            {color:windowtext;
                             font-size:10.0pt;
                             font-weight:700;
                             font-style:normal;
                             text-decoration:none;
                             font-family:Arial, sans-serif;
                             mso-font-charset:0;
                             mso-number-format:General;
                             text-align:right;
                             vertical-align:bottom;
                             mso-background-source:auto;
                             mso-pattern:auto;
                             white-space:nowrap;
                             padding-right:9px;
                             mso-char-indent-count:1;}
                            --></style>
                        <title>Planilla de gastos</title>
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

                            <div id="Libro1_19859" align=center x:publishsource="Excel">
                                <table border=0 cellpadding=0 cellspacing=0 width=877 style='border-collapse:
                                       collapse;table-layout:fixed;width:659pt'>
                                    <col width=80 style='width:60pt'>
                                        <col width=156 style='mso-width-source:userset;mso-width-alt:5705;width:117pt'>
                                            <col width=398 style='mso-width-source:userset;mso-width-alt:14555;width:299pt'>
                                                <col width=81 span=3 style='mso-width-source:userset;mso-width-alt:2962;
                                                     width:61pt'>
                                                    <tr height=24 style='height:18.0pt'>
                                                        <td height=24 class=xl1519859 width=80 style='height:18.0pt;width:60pt'></td>
                                                        <td colspan=5 height=24 width=797 style='height:18.0pt;width:599pt'
                                                            align=left valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
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
                                                            </v:shapetype><v:shape id="Text_x0020_Box_x0020_2" o:spid="_x0000_s1043"
                                                             type="#_x0000_t75" style='position:absolute;margin-left:117pt;margin-top:0;
                                                             width:8.25pt;height:15pt;z-index:1;visibility:visible;mso-wrap-style:square;
                                                             v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAaU4y
                                                          qiQCAABMBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVMtu2zAQvBfoPxC8O6IZK37AVGA7Vi9pGqDp
                                                          B7ASZRGhSIFkbAVF/71LSnKSQw+tb8vlamZ2dqn1bdcodBTWSaMZnl4RjIQuTCn1geEfT/lkgZHz
                                                          XJdcGS0YfhUO32afP6270q64LmpjEUBot4IEw7X37SpJXFGLhrsr0woNt5WxDfdwtIektPwE4I1K
                                                          KCE3iWut4KWrhfB3/Q3OIrY/mZ1QatNTiFL6jWMYNITsUFNZ0/TVhVEZXSdBVAgjAgTfqioj53Q4
                                                          xRtrTmM6hGPuXTWkY3VEfKPx5gz9N7opmc3n6T9xTpckJYPMD8QjnWtRwwtrGMbIi84rqZ8h7rXo
                                                          4/f20Q66Ho6PFsmSYYqR5g0M7Anq0dZ0iEI9X8Hp3vlhZPw/BtZwqUck9GIlw7/ynG7TfT6b5BBN
                                                          ZmQ7m2z3s+Ukp9eLPZ3nO3p98xsn2ToZ+SGMowpyz8pDG8h3oBUWMVK49t4Uz+5StUibXc31QWws
                                                          2FuHfQsMQdCgoncwnt7b6YKin6evpgQj+Ys3UVVX2eZSSWEUpqoQtErTlM4JvLtXhkkQFU1CRXAh
                                                          7hJGBVzBayE0HVwMEkJha53/IszFclAAYtiKwscW+RGWpB/YSBHotMmlUpf2HltU+lIYdGJ4mYIl
                                                          b8oiciO9sEjJhuEFeAbOxnQY+16XMfZcqj6GjVR62IMw7XM4bKWSQvs77jl8F9fjw29pyPW/wewP
                                                          AAAA//8DAFBLAwQUAAYACAAAACEATWnFWhMBAACRAQAADwAAAGRycy9kb3ducmV2LnhtbHyQTU/D
                                                          MAyG70j8h8hI3Fjaim20LJ0GGh+nSeuQuIbW/RBNUiXZ1vHrMYWpN46v7fexXy+WvWrZAa1rjBYQ
                                                          TgJgqHNTNLoS8LZ7urkD5rzUhWyNRgEndLBMLy8WMinMUW/xkPmKEUS7RAqove8Szl1eo5JuYjrU
                                                          1CuNVdKTtBUvrDwSXLU8CoIZV7LRtKGWHT7WmH9meyVgg9l6t5ZZ/BxVbTzb+z5+dw9CXF/1q3tg
                                                          Hns/Dv+5XwsBEbDy5fRhm2IrnUcrgOJQOAoGKV3ctyud18aycouu+aI4v/XSGsWsOQ7zuWkHEulN
                                                          WTr05+qo+A/Mm/8sYRxMA9pOtLMvDG7n8ymQmY+nDGL8ZPoNAAD//wMAUEsBAi0AFAAGAAgAAAAh
                                                          APD3irv9AAAA4gEAABMAAAAAAAAAAAAAAAAAAAAAAFtDb250ZW50X1R5cGVzXS54bWxQSwECLQAU
                                                          AAYACAAAACEAMd1fYdIAAACPAQAACwAAAAAAAAAAAAAAAAAuAQAAX3JlbHMvLnJlbHNQSwECLQAU
                                                          AAYACAAAACEAaU4yqiQCAABMBQAAEAAAAAAAAAAAAAAAAAApAgAAZHJzL3NoYXBleG1sLnhtbFBL
                                                          AQItABQABgAIAAAAIQBNacVaEwEAAJEBAAAPAAAAAAAAAAAAAAAAAHsEAABkcnMvZG93bnJldi54
                                                          bWxQSwUGAAAAAAQABAD1AAAAuwUAAAAA
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="Text_x0020_Box_x0020_38" o:spid="_x0000_s1044" type="#_x0000_t75"
                                                             style='position:absolute;margin-left:117pt;margin-top:0;width:8.25pt;
                                                             height:15pt;z-index:2;visibility:visible;mso-wrap-style:square;
                                                             v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEA6D9Z
                                                          9SUCAABNBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVMtu2zAQvBfoPxC8O6JlK37AVGAnVi9pGqDp
                                                          B7ASZRHhQyAZW0HRf++Skpzk0EPr23K5nJmdXWlz0ymJjtw6YTTF0yuCEdelqYQ+UPzjqZgsMXKe
                                                          6YpJoznFr9zhm/zzp01X2TXTZWMsAgjt1pCguPG+XSeJKxuumLsyLddwWxurmIejPSSVZScAVzJJ
                                                          CblOXGs5q1zDub/rb3Aesf3J3HIptz0Fr4TfOopBQ8gONbU1qq8ujczTTRJEhTAiQPCtrnNyTodT
                                                          vLHmNKZDOObeVUM6VkfENxpvztB/o5uS+WKR/RPndEUyMsj8QDzSuRYpVlpDMUaed14K/Qxxr0Uf
                                                          v7ePdtD1cHy0SFQUzzDSTMHAnqAe7UyHZkt4wNZwvHd+mBn7j4kpJvSIhF6soPhXUaS7bF/MJwVE
                                                          kznZzSe7/Xw1KdLZcp8uitt0dv0bJ/kmGfkhjLMKes/SQx/IdyAWNjFSuPbelM/uUrVIm9uG6QPf
                                                          WvC3CQsXGIKgQUVvYTy999MFRT9PX00FTrIXb6KqrrbqUklhFKauEbSaZlm6IPDhvVJMgqhoEiqD
                                                          C3GZMCrhCj4XkmaDi0FCKGyt81+4uVgOCkAUW1762CI7wpL0AxspAp02hZDy0t5ji1JfCoNOFK8y
                                                          sORNWURWwnOLpFAUL8EzcDamw9j3uoqxZ0L2MWyk1MMehGmfw2ErpeDa3zHP4F1cjw//pSHX/wfz
                                                          PwAAAP//AwBQSwMEFAAGAAgAAAAhANbTG3AUAQAAkQEAAA8AAABkcnMvZG93bnJldi54bWx8UMtO
                                                          wzAQvCPxD9YicaNOA21JqVMVVB6nSkmRuJpk8xCxHdluk/L1bAtVbhxndmdmZxfLXjVsj9bVRgsY
                                                          jwJgqDOT17oU8L59vrkH5rzUuWyMRgEHdLCMLy8Wcp6bTie4T33JyES7uRRQed/OOXdZhUq6kWlR
                                                          06wwVklP0JY8t7Ijc9XwMAimXMlaU0IlW3yqMPtKd0rABtP1di3T6CUsm2i683304R6FuL7qVw/A
                                                          PPZ+WP5Tv+UCboEVr4dPW+eJdB6tAKpD5agYxHRx36x0VhnLigRd/U11fvnCGsWs6U77mWkEhHDE
                                                          m6Jw6M/sgPjRzJv/JOMomASUTm5n3Ti4m80mQGI+nHICwyfjHwAAAP//AwBQSwECLQAUAAYACAAA
                                                          ACEA8PeKu/0AAADiAQAAEwAAAAAAAAAAAAAAAAAAAAAAW0NvbnRlbnRfVHlwZXNdLnhtbFBLAQIt
                                                          ABQABgAIAAAAIQAx3V9h0gAAAI8BAAALAAAAAAAAAAAAAAAAAC4BAABfcmVscy8ucmVsc1BLAQIt
                                                          ABQABgAIAAAAIQDoP1n1JQIAAE0FAAAQAAAAAAAAAAAAAAAAACkCAABkcnMvc2hhcGV4bWwueG1s
                                                          UEsBAi0AFAAGAAgAAAAhANbTG3AUAQAAkQEAAA8AAAAAAAAAAAAAAAAAfAQAAGRycy9kb3ducmV2
                                                          LnhtbFBLBQYAAAAABAAEAPUAAAC9BQAAAAA=
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="Text_x0020_Box_x0020_39" o:spid="_x0000_s1045" type="#_x0000_t75"
                                                             style='position:absolute;margin-left:117pt;margin-top:0;width:8.25pt;
                                                             height:15pt;z-index:3;visibility:visible;mso-wrap-style:square;
                                                             v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAkLBD
                                                          biUCAABNBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVMtu2zAQvBfoPxC8O6JlKX7AVGA7Vi9pGqDJ
                                                          B7ASZRGhSIFkbAVF/71LSnKSQw+Nb8vlcmZ2dqX1TddIdOTGCq0onl4RjLgqdCnUgeKnx3yywMg6
                                                          pkomteIUv3KLb7KvX9ZdaVZMFbU2CCCUXUGC4tq5dhVFtqh5w+yVbrmC20qbhjk4mkNUGnYC8EZG
                                                          MSHXkW0NZ6WtOXe3/Q3OArY76R2XctNT8FK4jaUYNPjsUFMZ3fTVhZZZvI68KB8GBAh+VFVGzml/
                                                          CjdGn8a0D8fcu2pIh+qA+Ebj9Bn6X3RTkszn6X9xTpckJYPMD8QjnW1RwwqjKcbI8c5JoZ4h7rWo
                                                          48/2wQy67o8PBomS4gQjxRoY2CPUo63u0GwJD9gKjnfWDTNjn5hYw4QakdCLERT/zvN4m+7zZJJD
                                                          NEnINpls98lyksezxT6e57t4dv0HR9k6GvkhDLPyes/SfR/IdSAWNjFQ2PZOF8/2UrVI6V3N1IFv
                                                          DPhb+4XzDF7QoKK3MJze+2m9ol+n77oEJ9mL00FVV5nmUkl+FLqqELQap2k8J/DhvVJMvKhgEiq8
                                                          C2GZMCrgCj4XEqeDi16CL2yNdd+4vlgO8kAUG1640CI7wpL0AxspPJ3SuZDy0t5Di1JdCoNOFC9T
                                                          sORNWUBuhOMGSdFQvADPwNmQ9mPfqzLEjgnZx7CRUg174Kd9DoetlIIrd8scg3dhPT78l4Zc/x/M
                                                          /gIAAP//AwBQSwMEFAAGAAgAAAAhABf2AqQTAQAAkQEAAA8AAABkcnMvZG93bnJldi54bWx8UMtO
                                                          wzAQvCPxD9YicaNOoz5IqFsVVB6nSkmRuJpk8xCxHdluk/L1bAtVbhxndmdmZxerXjXsgNbVRgsY
                                                          jwJgqDOT17oU8L57vrsH5rzUuWyMRgFHdLBaXl8tZJybTid4SH3JyES7WAqovG9jzl1WoZJuZFrU
                                                          NCuMVdITtCXPrezIXDU8DIIZV7LWlFDJFp8qzL7SvRKwxXSz28g0egnLJprtfR99uEchbm/69QMw
                                                          j70flv/Ub7mACbDi9fhp6zyRzqMVQHWoHBWDJV3cN2udVcayIkFXf1OdX76wRjFruvN+ZhoBIZzw
                                                          tigc+gs7IH4y8+Y/yTgKpgGlk9tFNw4m8/kUSMyHU85g+OTyBwAA//8DAFBLAQItABQABgAIAAAA
                                                          IQDw94q7/QAAAOIBAAATAAAAAAAAAAAAAAAAAAAAAABbQ29udGVudF9UeXBlc10ueG1sUEsBAi0A
                                                          FAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAAAAAAAAAAAAAAAALgEAAF9yZWxzLy5yZWxzUEsBAi0A
                                                          FAAGAAgAAAAhAJCwQ24lAgAATQUAABAAAAAAAAAAAAAAAAAAKQIAAGRycy9zaGFwZXhtbC54bWxQ
                                                          SwECLQAUAAYACAAAACEAF/YCpBMBAACRAQAADwAAAAAAAAAAAAAAAAB8BAAAZHJzL2Rvd25yZXYu
                                                          eG1sUEsFBgAAAAAEAAQA9QAAALwFAAAAAA==
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="_x0000_s1046" type="#_x0000_t75" style='position:absolute;
                                                             margin-left:117pt;margin-top:0;width:8.25pt;height:15pt;z-index:4;
                                                             visibility:visible;mso-wrap-style:square;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEA6awu
                                                          fCUCAABMBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVE1v2zAMvQ/YfxB0T624cfOByEXSxrt0W4F1
                                                          P0Cz5VioLBmSmqQY9t9HynbWHnbYkhNFEu89PjJe355aTQ7SeWUNp9MrRok0pa2U2XP6/amYLCjx
                                                          QZhKaGskp6/S09v844f1qXIrYcrGOgIQxq8gwWkTQrdKEl82shX+ynbSQLW2rhUBnm6fVE4cAbzV
                                                          ScrYTeI7J0XlGynDfV+hecQOR3sntd70FLJSYeM5BQ2YHXpqZ9u+u7Q6T9cJisIwIkDwta5zdk7j
                                                          K1acPY5pDMfcm25Ix+6I+Icm2DP03+imbDafZ//EOV2yjA0y3xGPdL4jrSid5ZSSIE9BK/MMca/F
                                                          HL51j27Q9eXw6IiqOM0oMaKFhT1BP9naE0mhX6zg9eDDsDLxHwtrhTIjEnlxitOfRZFus10xmxQQ
                                                          TWZsO5tsd7PlpEivF7t0Xtyl1ze/aJKvk5EfwrgqlHtWjmOQcAKtcIiRwncPtnz2l6olxt41wuzl
                                                          xoG9Dd4bMqCgQUXvYHy9tdOjoh/Hz7YCI8VLsFHVqXbtpZJwFbauCYyaZlk6Z/C/e+WUoahoEinR
                                                          hXhLlJRQStkyy2IdXEQJ2Ng5Hz5Je7EcgkCcOlmGOKI4wJH0CxspkM7YQml96exxRG0uhSFHTpdZ
                                                          mkXBvbKI3KogHdGq5XTB8Nd7imvfmSq2BKF0H4OX2gx3gNs+h8NVaiVNuBdBoBl4LO8+S0Ou/wzm
                                                          vwEAAP//AwBQSwMEFAAGAAgAAAAhAIxM3I4TAQAAkQEAAA8AAABkcnMvZG93bnJldi54bWx8UE1P
                                                          wkAQvZv4HzZj4k22EAFbWQgaVE4kLSZe13b6EfeD7C60+OsdUNKbx/dm3nvzZrbotGIHdL6xRsBw
                                                          EAFDk9uiMZWA9+3L3QMwH6QppLIGBRzRw2J+fTWTSWFbk+IhCxUjE+MTKaAOYZdw7vMatfQDu0ND
                                                          s9I6LQNBV/HCyZbMteKjKJpwLRtDCbXc4XON+Ve21wI2mK22K5nFr6NKxZN96OIP/yTE7U23fAQW
                                                          sAv98p96XQgYAyvfjp+uKVLpAzoBVIfKUTGY08WdWpq8to6VKfrmm+r88qWzmjnbnvdzqwSM4IQ3
                                                          ZekxXNge8ZNZsP9JhnE0jiid3C66YXQ/nY6BxLw/5Qz6T85/AAAA//8DAFBLAQItABQABgAIAAAA
                                                          IQDw94q7/QAAAOIBAAATAAAAAAAAAAAAAAAAAAAAAABbQ29udGVudF9UeXBlc10ueG1sUEsBAi0A
                                                          FAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAAAAAAAAAAAAAAAALgEAAF9yZWxzLy5yZWxzUEsBAi0A
                                                          FAAGAAgAAAAhAOmsLnwlAgAATAUAABAAAAAAAAAAAAAAAAAAKQIAAGRycy9zaGFwZXhtbC54bWxQ
                                                          SwECLQAUAAYACAAAACEAjEzcjhMBAACRAQAADwAAAAAAAAAAAAAAAAB8BAAAZHJzL2Rvd25yZXYu
                                                          eG1sUEsFBgAAAAAEAAQA9QAAALwFAAAAAA==
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="_x0035__x0020_Imagen" o:spid="_x0000_s1047" type="#_x0000_t75"
                                                             alt="LOGO MSP.jpg" style='position:absolute;margin-left:21pt;margin-top:7.5pt;
                                                             width:153pt;height:63.75pt;z-index:5;visibility:visible' o:gfxdata="UEsDBBQABgAIAAAAIQD0vmNdDgEAABoCAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
                                                          90jcwfIWJQ4sEEJJuiCwhAqVA1j2JDHEY8vjhvb2OEkrQVWQWNoz7//npFzt7MBGCGQcVvw6LzgD
                                                          VE4b7Cr+tnnK7jijKFHLwSFUfA/EV/XlRbnZeyCWaKSK9zH6eyFI9WAl5c4DpknrgpUxHUMnvFQf
                                                          sgNxUxS3QjmMgDGLUwavywZauR0ie9yl68Xk3UPH2cOyOHVV3NgpYB6Is0yAgU4Y6f1glIzpdWJE
                                                          fWKWHazyRM471BtPV0mdn2+YJj+lvhccuJf0OYPRwNYyxGdpk7rQgYQ3Km4DpK3875xJ1FLm2tYo
                                                          yJtA64U8iv1WoN0nBhj/m94k7BXGY7qY/2z9BQAA//8DAFBLAwQUAAYACAAAACEACMMYpNQAAACT
                                                          AQAACwAAAF9yZWxzLy5yZWxzpJDBasMwDIbvg76D0X1x2sMYo05vg15LC7saW0nMYstIbtq+/UzZ
                                                          YBm97ahf6PvEv91d46RmZAmUDKybFhQmRz6kwcDp+P78CkqKTd5OlNDADQV23eppe8DJlnokY8ii
                                                          KiWJgbGU/Ka1uBGjlYYyprrpiaMtdeRBZ+s+7YB607Yvmn8zoFsw1d4b4L3fgDrecjX/YcfgmIT6
                                                          0jiKmvo+uEdU7emSDjhXiuUBiwHPcg8Z56Y+B/qxd/1Pbw6unBk/qmGh/s6r+ceuF1V2XwAAAP//
                                                          AwBQSwMEFAAGAAgAAAAhABQHZWtsAgAAAwYAABIAAABkcnMvcGljdHVyZXhtbC54bWysVNtu2zAM
                                                          fR+wfxD0nlpWXCcxYhfpxUWBbg12+QBFlmNttmRIapqi2L+PspwE3dOw7I0mTZ7DQ1LLq33Xop0w
                                                          VmqV4/iCYCQU15VU2xx//1ZO5hhZx1TFWq1Ejl+FxVfFxw/LfWUypnijDYISymbgyHHjXJ9FkeWN
                                                          6Ji90L1QEK216ZiDT7ONKsNeoHjXRpSQNLK9EayyjRDuNkRwMdR2L/pGtO0qQIhKupXNMXDw3vGf
                                                          2ugu/M11W8TLyJPy5lABjKe6Lmiazgg5xrxrCBv9Uoxubx58Ph4TQuIkpEBsSBlqnwCdPoIU9Fj8
                                                          6PMps3iRxPNj7B3wqfgfwPSSnmIn4ANcL3lIULu15GszAn7erQ2SVY5TjBTrYE6X6KFjW6EwqoTl
                                                          MJnHp/sn9Onr+uJHvwX5WCb27tG6cXjsH0bXMakOldCzkTl+K0t6fXlXJpMSrElCrpPJ9V2ymJR0
                                                          Or+js/KGTtNfOCqW0QEfzGFovoNTM6E1lkG7j5r/tOeyRErfNExtxcr2gjtY9IHEATnADUTe6bpp
                                                          ZV/KFvaJZd4+m0a4lL+6E13XkotbzZ87oVw4FiNa5uBQbSN7i5HJRLcRMHXzUA0Nscwa/gUaPJto
                                                          m+MZoRQjr1UyTxaAlmO6mM4w2oARz0jqJQREZ4TjzbmIvlQNUnv2YT/GwuOCnEbhh2Z7vy0s29em
                                                          +x/IIDbaQ6eEzuGtwOjV2/4NCD3CqSDu44tkCn6MOPwwJzSNybjMnogn1Bvr7oU+mxTyhWCwoMZw
                                                          YmwHtxp0OUCMwgQpht09Pg68lbAzt8wxn+IFe/eajr7wehe/AQAA//8DAFBLAwQUAAYACAAAACEA
                                                          WGCzG7oAAAAiAQAAHQAAAGRycy9fcmVscy9waWN0dXJleG1sLnhtbC5yZWxzhI/LCsIwEEX3gv8Q
                                                          Zm/TuhCRpm5EcCv1A4ZkmkabB0kU+/cG3CgILude7jlMu3/aiT0oJuOdgKaqgZGTXhmnBVz642oL
                                                          LGV0CifvSMBMCfbdctGeacJcRmk0IbFCcUnAmHPYcZ7kSBZT5QO50gw+WszljJoHlDfUxNd1veHx
                                                          kwHdF5OdlIB4Ug2wfg7F/J/th8FIOnh5t+TyDwU3trgLEKOmLMCSMvgOm+oaSAPvWv71WfcCAAD/
                                                          /wMAUEsDBBQABgAIAAAAIQC0JaSCFAEAAIgBAAAPAAAAZHJzL2Rvd25yZXYueG1sVFBfS8MwHHwX
                                                          /A7hJ/jm0tW1dbXpGILgXoTNgfoW2rQp5k9JsrXz05uuG8XHu/vd5S7ZqpcCHZmxjVYE5rMAEFOF
                                                          LhtVE9h/vD48AbKOqpIKrRiBE7Owym9vMpqWulNbdty5GvkQZVNKgDvXphjbgjNJ7Uy3THmt0kZS
                                                          56GpcWlo58OlwGEQxFjSRvkXOG3ZC2fFz+4gCXx+if60EXvBFzxSOo425aH7JuT+rl8/A3Ksd9Px
                                                          xf1WEohhmOJnQO779WKtCq4NqrbMNr++/MhXRktkdEfAjy20GPgBv1eVZY7AMgqjUbkyYRwnQQB4
                                                          SHV69C4u3vCfdx4skiQ6S1dzEj4uRzOeOuWZB9MH5n8AAAD//wMAUEsDBAoAAAAAAAAAIQCFB0FH
                                                          oRYAAKEWAAAVAAAAZHJzL21lZGlhL2ltYWdlMS5qcGVn/9j/4AAQSkZJRgABAQAAAQABAAD/2wCE
                                                          AAkGBhQGDxQTBxMWFBQVGRoYGBYXFxoTGBgaGBUWGBgYGxcdHSYqGRkjGhMVIDsjIyopLCwsFx8x
                                                          NTEsNiYrLCkBCQoKDgwOGg8PGSwkHyQ0NTEsNTAsKi40KTAqNSw1LDUvLywxKS4sLCwqNTQvLCws
                                                          MCwpLCwsLCwsKSwsKSw1Lf/AABEIAJQBVQMBIgACEQEDEQH/xAAcAAEAAwADAQEAAAAAAAAAAAAA
                                                          BAUGAwcIAgH/xABDEAABAwIDBAQJCQcFAQAAAAABAAIDBBEFEiEGEzFBIjNRcQcUFTJhc4GRsyM1
                                                          QlJygqGxwRYXQ1Nik9FUkqLC4YP/xAAbAQEAAgMBAQAAAAAAAAAAAAAABQYBAwQHAv/EADcRAAIB
                                                          AwEDBwkJAQAAAAAAAAABAgMEEQUSIUEGExQxUWFxM1JTkaGxweHwFRYyNDVigaLRI//aAAwDAQAC
                                                          EQMRAD8A7xREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREA
                                                          REQBERAEREAREQBERAEREB+E24pnHaoON9Se8LOqvalrXQa3Nc3ndnrx29zOujbc7HaybDOO1M47
                                                          Vj0Ub96X6L+3yN3Qf3ew2GYdq/HShnnED2rKRyMpWyTVnVwsMj+ejQTa3Mm3BdG45ir8fqJKiu1c
                                                          83txyj6LB6Giw9naVbNDnU1Sm6so7Eepb859xGX042rUetnpwSh3Aj3pvm/WHvC6SxumGylFFQQg
                                                          CSUNnqiObj1cXc23/EHmVmN0Owe5arm7jSqOEd+OPV/pYrDRJXNCNWctnPDGd3rR6U3zfrD3hN83
                                                          6w94XmvdDsHuTdDsHuXP9oft9p2/dtel/r8z0pvm/WHvC+g7N5q807odg9y7u8GQthUFu2X48i32
                                                          91z0tnGCP1HSFZ0lU2878dWO3vfYalERdpBAG/BFCwjq3etm+PIpqAIiIAiIgCIiAIiIAiIgCIiA
                                                          IiIAiIgCIiAIiIAiIgCIiAIiID8e8MF3mwHNcPj8f12+8L5xHqX9xWXVe1bV52NSMIxTys7zroW6
                                                          qptsvcXqmTRERuBNxoDdUSIqXqF9K9q87JY3YJKlSVOOygiIuA2lL4Q6vxLB3AcZ5mR6djQZPd8k
                                                          R7V1xsZQjEsRpY38DK0n0hnTI9oZb2rsHwnxGbCYiz+HUgu7jHIPze1YfwdyiHFqUu+uR/uje0fi
                                                          4L27QFGOkw2PN9uCnahvvMPuJO1dYa+vqXv/AJrmjujO7b+DAqpTsdj3VZUB3KaX4jlBVPqPM34n
                                                          sNFJU4pdWEERF8G0LtvwfbR02H4bDHWVEUbwZLtdI1rheZ5FwTzBB9q6kRb6FZ0ZbSRxX1nG8pqn
                                                          J4359/8Ap39+2FF/q6f+6z/KtIZm1DWuhIc1wBa4G4IIuCDzBC82r0Bsp830nqIfhNUrbXLrNprq
                                                          KlqmmQs4RlGTeXxJGEdW71s3x5FNULCOrd62b48imrtIIIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCI
                                                          iAIiIAiIgCIiAIiICNiPUv7iszGzeEAcyB71psR6l/cVnKXrGfab+YVJ5RRUrqlF8V8STs3iEiVL
                                                          gskQvoeGgJvqbdi5RgDiNXC/Zr+auZ5tw0udyF1Bw3FDWuLZABpcW7//AFdk9J02jXjSnnMupZfw
                                                          NSr1pRclwKyHCnzOLbWtxJ4f+rmqMDfELxkOty4H2dqssTr/ABFoyAEnt9HH9FyUFV44wOIseBXx
                                                          T0jT+clattzxnwXDu6sGXcVcKfAx2P0PlfDKuFgu7JvWAcS6Mh9h35QPaulaGsOHyxyxi5je2QDt
                                                          LHBw/Jeg3SCiqT2Zte53H8/wXRu12Cfs9XTQAWa112dmR3SZbtsDl72lWjklcZoTtJPfTbX8EPrF
                                                          PE41lxNH4QqURV7pIdWVDGTMPIhzQ09+rL/eCzS0j5PL2CQyDWShfuX+qfbIbdg+Tb91yzaiL+i6
                                                          NxKDPS9Hulc2cJrgsP8Aj5YLbZrZ1+1E5hpXtY4ML7uBIsHNbbTn0x7lfzeCarjexsb4nB17v6TW
                                                          stbiOJJubAfVN7J4I/nF/qH/ABYV2DtrtKdl6XexNDnucGMB83MQTc25ANcfTay20KFKVLbmcF9f
                                                          3VO7VCjjfjrXFmMd4G5AOjVMv2GIge/P+iyOPbMz7NvDcSZYHzXtOZju2x019BAKuYPClXRPzSuj
                                                          e2+rCwNFuwEajvuV2NjEDNsMLJA0liErL8Wuy52cOYOnv7VlUqNaL5vc0Hd3tnUj0pqUZPG7h7Ed
                                                          Fr0Bsp830nqIfhNXn5rswuvQOynzfSeoh+E1Y0/8UjHKLyUPH4EjCOrd62b48imqFhHVu9bN8eRT
                                                          VLlNCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAjYj1L+4rOUvWM+038wtHiPUv
                                                          7is5S9Yz7TfzCpfKD83R+uJJWnk5GixTqX936hVOA9afsn82q2xTqX936hVOA9afsn82rr1H9Ut/
                                                          rizXR8hI59of4f3v+qkYF1X3j+QUfaH+H97/AKqRgXVfeP5BKP63U8PhES/LL67SpxTrn9/6BYrw
                                                          rYV45TwVkQ6UfyMp/pOsZJ7ASR3yLa4p1z+/9Ao76AY1BPTS8JmEAnWzxqx3sIB9i49HvuiaxLPV
                                                          KTT9bx9d5m7oc9a47jq/wb17Y6t1NWdTWMMLuXSIO7Pfclo9L1X1dI7D5HxVPnxuLHd7Ta49B49x
                                                          VOC+kfcXZIx3ta5p/MEfgtzt0G1r6esgFm1kIeR2SMDWvHsBYO8FXnlBb5Uay8GbeSN44zlbS471
                                                          4r5E7wR/OL/UP+LCuydqdnGbUUxhmOU3DmPAvlcL2NuYsSCOwldbeCP5xf6h/wAWFabwpYrLg7aa
                                                          TDpHRvzuFxzGTgQbhw0GhB4KKt5KNs3JbiU1CnOpqUY03iWFh+GWUsPgdmL/AJeojDOZaxxdb0Am
                                                          wPtK121GIx7IYaWQaER7mFt7knLlB9OUdIn0Lr796ddltmiv9bd69/nW/BZvEcTlxeTeYjI6R/C7
                                                          jwHYANGj0ABaekUacXzS3s7fs+7uakXdzWzHfhcfYiIBlFgvQOynzfSeoh+E1ef16A2U+b6T1EPw
                                                          mpp/4pHxyi8lDx+BIwjq3etm+PIoUG1DJsQko3Mc1zGhwebZXdFji0ekCQH2FTcI6t3rZvjyLH4t
                                                          CWVFdUU4JfSTU84A4lraYNlb6c0TpB32UuU03M87aZjnzGzWguJPAAC5PuCo8G2s8twslggkAdNu
                                                          i3iWC1y91uDRoPauPamcYtFBTUpuKxwBI/kNAkld3OYAz/6BVNBUOphaBxaHYpI02Nrt+U6J9Gg0
                                                          9CA3Si1lYaV0TY43PEj8hLeEYyPdnd/Tdob3uCzOA4U7aGKR+KTzlonnbG2OaSDKGVEjdXRuBebg
                                                          iziWgNaAOJPDS4jNG6lille7JXywOcTYyRtgnewPtxI6HeWXQG2UWbEWU80cL755Q8t00tHlzXPL
                                                          z2rFRTxS5v2irKimrM7wM00lPG0l7t2I2XEUrA3La4cTz1Uqqwl9RW0PlGV+9khmMjopXsZmayAE
                                                          xa9BrjrYcdEBtUWCpsUp8czy41WSRnePEcUc8kAjYx5awndkZ3ODc5zXHStbRfMeNz1ggio6jM5t
                                                          W6ATWFpYzSyPa9zbWc5ode2gL4hwBQG1fWFk7IhG4tcxzjIPMaWuYAw/1Ozkj7BUpYzEat2yU4Jl
                                                          mmYykqp3CR+YvfG6my9gHFwAAAGYqdTbKvqY2yYhVVHjJbcvjmfGxjiL2bADkLW3sA5ribakoDSo
                                                          qnZfE34rTB1ZbesdJFJbQF8Ujo3OA5All7crq2QBERAEREAREQBERAEREAREQBERARsR6l/cVmAc
                                                          pu3ktRXtL4nhoubHQLOeJSfUd/tKpPKSnOVaDgm93DxJKzaUXkPrHyCz3uIPK6+I5TCbxEg+jRfr
                                                          6Z0QvI1wHaQQuNVipOspJzbyurOcnclHG45JZ3T23ribcLm6/Y6p8ItG4geg2XEi+OeqKW3tPPbl
                                                          5GysYwfT3mQ3ebk8yvuml3L2u7CP/VxIsRqSjNTzvzky0msHVHhDw/ybilS1gsHP3g9O8aHn/k5w
                                                          9itqE+UdnjfjSVOn2ZbX/wCUx9y+fDB856fyY7993/pZNlfmXEt55uaC32t4P1yr3a+/6afl9hVt
                                                          Jk6eqQ2fO97KegxGXCn58PkdG4gtzN0NiQSO67R7ly4hjc+LADEZnyhpuA4g2JFrjRQUVD25Yxnc
                                                          euOnBy2tlZ7cb/WERWFJgFTXsD6Onlew3s5rC4GxIOveCFhRb6kZlOMFmTwV69AbKfN9J6iH4TV0
                                                          p+ydZ/pJ/wC2V3ds1C6moaZkwLXNhia5pFiCI2ggjkQQpOwi4yllFY5QVITpQ2ZJ7+D7jlwjq3et
                                                          m+PIouG4Y6nqqyScDJM6Mt1vcNhax1xy1BUrCOrd62b48imqVKiZfZbZmTCZnuriCyJu4prG5bDn
                                                          L9f6rbtvdEF8Q7PTMtcDTEH1Hnfw3Z7Hv6Q0V7UYoKephgLSTK2RwdpYbrd3B9J3g9xU5AVOzGHP
                                                          wuBzKoAOM079DfoyVEkjfbleFVDZ6bfRus2za6Sc9LXdup5IwR6czxotU5wYLu0A4lYeXwnb9zvI
                                                          tHNURtNjI0OA77BjrDn0rFAWkElXTQ7jEKYVRF2iXeRtZI36LpGusWuItcNa4XvZRqfAJ8FbQmBo
                                                          mNMyVj2tdk63IRkLuLWlmUA2NrKz2X2si2qjc6ku1zLZ2OtcXvY6cWmx19BV2gM3QRVGzgfFDAai
                                                          LO98TmSMa5okeXmN4eRo1ziAW30tpovgYPVVL6WTEHNc5tS+Z7QejFGaeWNsbDYF9i5tyeJc48LB
                                                          SqbattTiMlEI3B0bcxfcZT0Y3aDj/EHuKvUBQY1s+cYqmmYDcmmqIH62deZ0NrDujfry0XHTVddR
                                                          QiKSmbLK0ZWzCVrIX2FmveD02E6EhrXc7ErRqh2i2sbs7LTxyxueahxaCCAG2dG3W/rRw7CgJuz+
                                                          E+Radsb3Z33c977WzSSPL3uA5AucbDkLKxVfj+MDAaZ88rS4Mt0RYE5nNbz+0sqPCmCzP4lUZOOe
                                                          wy2HE5uHI80BukVZs/tBFtJDvaAm17Oa4Wc11gbEdxB0uNVw4VtA7GJ5WU8DhDGS3fOOUPI4hjbX
                                                          cL8+FteaAuUVFs/tY3aCeoiijcw07spJIId03tuLerPHtU3H8YGAUz55WlwZl6IsCczmt5/aQFgi
                                                          zeH7ZeUZqeOOmmyzxiTe2vGy7XnK5w0v0LfeC0iAIiIAiIgCIiAIiIAiIgIGN9Se8LOrTYnTmqjy
                                                          xcbj0Kn8iydg94VI1+zr1rlSpwbWF1LvZJ2tSMYYbIKKd5Fk7B7wnkWTsHvCgfsy89FL1M6uep+c
                                                          iCuakh8Yka3tP4c/wUjyLJ2D3hcOKYZU09LIMIaDUPGRpLg0Rg+c+5+lbh6beldtho9xVuIRqQcY
                                                          53trCwaq1xCMG08s6c28xUYziVRJGbtD8je6MBlx6CWl33ldxN8j4Cxj9H1s5ksdCI4rWPcSxh++
                                                          v3DfA7WSysbXhkcVxnc14cQ0cco7TwHZdXm0+xNdjdRmp4o2QxtEcLN4BkjboNLaE8fcOS9V1Wuu
                                                          jqjR3+HYRegUF0zn67UUt+94y+B18i1f7sK/+XH/AHR/hP3YV/8ALj/uj/CqHR6vms9H6fa+kj60
                                                          ZRd1+DH5qh+1L8aRdf8A7sK/+XH/AHR/hdm7EYTJgdBHDXAB7S8kA5h0pHOGvc4LtsqU4TbksbiE
                                                          1y6o1bdRpzTe0up9zL1ERSpTyFhHVu9bN8eRVE8TtoqyaKSSSOCnaxpbE90LpJJG5yTIwhwa1hZY
                                                          NIuXG/AK7w+A07CJOJfI72Ole4fg4KqqaWbCauSow+PfRzNaJIw5rHh8YIa9mYhrgWkNIJHmgjmg
                                                          KHGC7ZWsZJnfNHHTVUkbZHF72lohzR7w6uaSGEF1yCXa2sAjfA+MPnxOTxstvvBM4RB51sKe+7yA
                                                          6WLSbc76qbXYDPtJUZsUYIoXQTwZA8PewStZdziNMxIOjbgZAbm9hMirq+CIRPpmvmDcon3rGwOI
                                                          0DyL5xfiWhp7L81kE3Cav9o6Bj6oZDNF0wPolzbPA7jdYbDqHE9hA5lDEyohLi4lozXNgLgAhzSQ
                                                          1ulnAW0ut6cI8ZojTYhI6Uui3ckhsHOJbZz7DQEkk2WLwzDMW2QaYMLjhqIrktJIFr87F7CL8SNd
                                                          SdUBx4Vj8eIQ1XkaOKgrLZpHyOszLvOm/MW6OBdaxboXjiqXFsV8lRsfhmKTzVVxvGh7pIRcG5GY
                                                          WsHWFje/YrGq8G1Xicc09a5njMjg4Rg2ba5LgXWsHebYajoanW4l4rgWIY7Rsp/FYadseXotkF3k
                                                          DKLAXDWi5OpvwQFPV17/AChXTROLHmkDwWkggmGlOh5cVraHEZX7PumdI8y7mU7zMc9w59jm43Fg
                                                          qyPYaoqamd04axktKIg7MHWeIYG6gcg6N3sC46PA8UbRPoTHE2Kz/lC4Oc4El2RtnfScbXcBYH0I
                                                          CsosfqsbZRUdPUPY+XeOkmzEvI301hmvezWRHQEX0F1y7WYNLgtVQMqah9QwyXYZNXtO8hzgu5g9
                                                          Ai/DVS49hKvDoaSbDwwVVOXhzC4EOaZZHtseHCQgi40dxFtZGLYDiO0c9NNiEUTBE8fJteCWtzsc
                                                          5xNzcnKNB9VAaHwi/NdR9z4rFlNmtujhNDHDDSTSuaHAODeg4l7jxAJtrbhyW12xwx+MUMsNEAXv
                                                          y2BNhpI1x17gV+7H4a/B6GGGsAD2B1wDcavcRr3ELAOq6OmqtmDSZ3SQeMy6xgll2sdABmbyvvHC
                                                          x5Lb+EjEpcPdSeJyPjzSEOyuLcwuzQ248SpHhB2Zmx1sEmFWMsDiQ0kNuHZTcE6XDo26Gw4qmxrA
                                                          cS2mMEmIRxM3Tura7WxLS55OYj6IAAJ5rIK/ZnCZcZrsQZSVD6dm9cZHR6Pd8tNkaHfRHnk27AFG
                                                          xLEp6COvw/EpXTCNrHMe4ku0lgNrm5N2yA2JNiFd4dgGI7P1VVUYfHE8SyOO7c8Ava6SRzXA3GVz
                                                          bjQn6Z7FwHYarxGOrnxIM8ZnDWtjDhYDeRudc3IFmxNAFzoNTcoCvw/aCTCJ6L5R+5ZSbx0QcQ12
                                                          WGod5vC92N9wVlgeFVm2FO6rmrpY3uLt0yNxZH0SRq0EaZgR22FyTdfVLsHPJU0prWN3LKbcy2eL
                                                          gmOdhsOfWN1XLh+FYpszE+lw5kUsZJyTZg0szcTlLhrztY2JOrggPrFX10dPAzG6yGkGYiWTeZZZ
                                                          G3bYsyt84NLuFrm3JVeD454nikEWD1s9VTyENfvnF4ucwIBcBws03bbsudVz1GwlZQPppwRWyRj5
                                                          RkshcL5iQGukOrQCNdOk29tbCfJgFdieI01VXRRsbGWjdskDixoJOpIGZ13k6cgEBv0RFgBERAER
                                                          EAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAE
                                                          REAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERA
                                                          EREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBER
                                                          AEREAREQBERAf//ZUEsBAi0AFAAGAAgAAAAhAPS+Y10OAQAAGgIAABMAAAAAAAAAAAAAAAAAAAAA
                                                          AFtDb250ZW50X1R5cGVzXS54bWxQSwECLQAUAAYACAAAACEACMMYpNQAAACTAQAACwAAAAAAAAAA
                                                          AAAAAAA/AQAAX3JlbHMvLnJlbHNQSwECLQAUAAYACAAAACEAFAdla2wCAAADBgAAEgAAAAAAAAAA
                                                          AAAAAAA8AgAAZHJzL3BpY3R1cmV4bWwueG1sUEsBAi0AFAAGAAgAAAAhAFhgsxu6AAAAIgEAAB0A
                                                          AAAAAAAAAAAAAAAA2AQAAGRycy9fcmVscy9waWN0dXJleG1sLnhtbC5yZWxzUEsBAi0AFAAGAAgA
                                                          AAAhALQlpIIUAQAAiAEAAA8AAAAAAAAAAAAAAAAAzQUAAGRycy9kb3ducmV2LnhtbFBLAQItAAoA
                                                          AAAAAAAAIQCFB0FHoRYAAKEWAAAVAAAAAAAAAAAAAAAAAA4HAABkcnMvbWVkaWEvaW1hZ2UxLmpw
                                                          ZWdQSwUGAAAAAAYABgCFAQAA4h0AAAAA
                                                          ">
                                                             <v:imagedata src="Libro1_Libro1_19859_image002.png" o:title=""/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="_x0000_s1048" type="#_x0000_t75" style='position:absolute;
                                                             margin-left:117pt;margin-top:0;width:8.25pt;height:15pt;z-index:6;
                                                             visibility:visible;mso-wrap-style:square;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAZQgP
                                                          oiMCAABMBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVMtu2zAQvBfoPxC8O6IVK37AVGA7Vi9pGqDp
                                                          B7ASZRHhQyAZW0HRf++Skpzk0EPr23K5mpmdXWp92ymJjtw6YTTF0yuCEdelqYQ+UPzjqZgsMHKe
                                                          6YpJoznFr9zh2/zzp3VX2RXTZWMsAgjtVpCguPG+XSWJKxuumLsyLddwWxurmIejPSSVZScAVzJJ
                                                          CblJXGs5q1zDub/rb3Aesf3J7LiUm56CV8JvHMWgIWSHmtoa1VeXRubpOgmiQhgRIPhW1zk5p8Mp
                                                          3lhzGtMhHHPvqiEdqyPiG403Z+i/0U3JbD7P/olzuiQZGWR+IB7pXIsUK62hGCPPOy+Ffoa416KP
                                                          39tHO+h6OD5aJCqK5xhppmBgT1CPtqZDKdSzFZzunR9Gxv5jYIoJPSKhFyso/lUU6TbbF7NJAdFk
                                                          RrazyXY/W06K9HqxT+fFLr2++Y2TfJ2M/BDGUQW5Z+WhDeQ70AqLGClce2/KZ3epWqTNrmH6wDcW
                                                          7G3CvgWGIGhQ0TsYT+/tdEHRz9NXU4GR7MWbqKqrrbpUUhiFqWsEraZZls4JvLtXikkQFU1CZXAh
                                                          7hJGJVzBayFpNrgYJITC1jr/hZuL5aAARLHlpY8tsiMsST+wkSLQaVMIKS/tPbYo9aUw6ETxMgNL
                                                          3pRFZCU8t0gKRfECPANnYzqMfa+rGHsmZB/DRko97EGY9jkctlIKrv0d8wy+i+vx4bc05PrfYP4H
                                                          AAD//wMAUEsDBBQABgAIAAAAIQC6OWHbFAEAAJEBAAAPAAAAZHJzL2Rvd25yZXYueG1sfFDLTsMw
                                                          ELwj8Q/WInGjTiLaklCnKqhAT5WaInE1yeYhYjuy3Tbl69kWqtw4zuzOzM7O5r1q2R6ta4wWEI4C
                                                          YKhzUzS6EvC+fbl7AOa81IVsjUYBR3QwT6+vZjIpzEFvcJ/5ipGJdokUUHvfJZy7vEYl3ch0qGlW
                                                          GqukJ2grXlh5IHPV8igIJlzJRlNCLTt8rjH/ynZKwBqz5XYps/g1qtp4svN9/OGehLi96RePwDz2
                                                          flj+U68KAVNg5dvx0zbFRjqPVgDVoXJUDFK6uG8XOq+NZeUGXfNNdX750hrFrDmc93PTCojghNdl
                                                          6dBf2AHxk5k3/0nCOBgHlE5uF10Y3E+nYyAxH045g+GT6Q8AAAD//wMAUEsBAi0AFAAGAAgAAAAh
                                                          APD3irv9AAAA4gEAABMAAAAAAAAAAAAAAAAAAAAAAFtDb250ZW50X1R5cGVzXS54bWxQSwECLQAU
                                                          AAYACAAAACEAMd1fYdIAAACPAQAACwAAAAAAAAAAAAAAAAAuAQAAX3JlbHMvLnJlbHNQSwECLQAU
                                                          AAYACAAAACEAZQgPoiMCAABMBQAAEAAAAAAAAAAAAAAAAAApAgAAZHJzL3NoYXBleG1sLnhtbFBL
                                                          AQItABQABgAIAAAAIQC6OWHbFAEAAJEBAAAPAAAAAAAAAAAAAAAAAHoEAABkcnMvZG93bnJldi54
                                                          bWxQSwUGAAAAAAQABAD1AAAAuwUAAAAA
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="_x0000_s1049" type="#_x0000_t75" style='position:absolute;
                                                             margin-left:117pt;margin-top:0;width:8.25pt;height:15pt;z-index:7;
                                                             visibility:visible;mso-wrap-style:square;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAUZGc
                                                          PyUCAABNBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVMtu2zAQvBfoPxC8O6JlK37AVGAnVi9pGqDp
                                                          B7ASZRHhQyAZW0HRf++Skpzk0EPr23K5mpmdXWpz0ymJjtw6YTTF0yuCEdelqYQ+UPzjqZgsMXKe
                                                          6YpJoznFr9zhm/zzp01X2TXTZWMsAgjt1pCguPG+XSeJKxuumLsyLddwWxurmIejPSSVZScAVzJJ
                                                          CblOXGs5q1zDub/rb3Aesf3J3HIptz0Fr4TfOopBQ8gONbU1qq8ujczTTRJEhTAiQPCtrnNyTodT
                                                          vLHmNKZDOObeVUM6VkfENxpvztB/o5uS+WKR/RPndEUyMsj8QDzSuRYpVlpDMUaed14K/Qxxr0Uf
                                                          v7ePdtD1cHy0SFQUw9g0UzCwJ6hHO9Oh2RI+YGs43js/zIz9x8QUE3pEQi9WUPyrKNJdti/mkwKi
                                                          yZzs5pPdfr6aFOlsuU8XxW06u/6Nk3yTjPwQxlkFvWfpoQ/kOxALmxgpXHtvymd3qVqkzW3D9IFv
                                                          LfjbhIULDEHQoKK3MJ7e++mCop+nr6YCJ9mLN1FVV1t1qaQwClPXCFpNsyxdEHh4rxSTICqahMrg
                                                          QlwmjEq4gudC0mxwMUgIha11/gs3F8tBAYhiy0sfW2RHWJJ+YCNFoNOmEFJe2ntsUepLYdCJ4lUG
                                                          lrwpi8hKeG6RFApeAXgGzsZ0GPteVzH2TMg+ho2UetiDMO1zOGylFFz7O+YZfBfX48N/acj1/8H8
                                                          DwAAAP//AwBQSwMEFAAGAAgAAAAhAOLO/IITAQAAkQEAAA8AAABkcnMvZG93bnJldi54bWx8UE1P
                                                          wkAQvZv4HzZj4k22EAFbWQgaVE4kLSZe13b6EfeD7C60+OsdUNKbxzfz3pv3ZrbotGIHdL6xRsBw
                                                          EAFDk9uiMZWA9+3L3QMwH6QppLIGBRzRw2J+fTWTSWFbk+IhCxUjE+MTKaAOYZdw7vMatfQDu0ND
                                                          u9I6LQNBV/HCyZbMteKjKJpwLRtDF2q5w+ca869srwVsMFttVzKLX0eViif70MUf/kmI25tu+Qgs
                                                          YBd68p96XQigrOXb8dM1RSp9QCeA6lA5KgZzStyppclr61iZom++qc7vvHRWM2fbMz+3SsAITnhT
                                                          lh7DZdojfjIL9j/JMI7GEV0nt4tuGN1Pp2MgMe+jnEH/yfkPAAAA//8DAFBLAQItABQABgAIAAAA
                                                          IQDw94q7/QAAAOIBAAATAAAAAAAAAAAAAAAAAAAAAABbQ29udGVudF9UeXBlc10ueG1sUEsBAi0A
                                                          FAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAAAAAAAAAAAAAAAALgEAAF9yZWxzLy5yZWxzUEsBAi0A
                                                          FAAGAAgAAAAhAFGRnD8lAgAATQUAABAAAAAAAAAAAAAAAAAAKQIAAGRycy9zaGFwZXhtbC54bWxQ
                                                          SwECLQAUAAYACAAAACEA4s78ghMBAACRAQAADwAAAAAAAAAAAAAAAAB8BAAAZHJzL2Rvd25yZXYu
                                                          eG1sUEsFBgAAAAAEAAQA9QAAALwFAAAAAA==
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="_x0000_s1050" type="#_x0000_t75" style='position:absolute;
                                                             margin-left:117pt;margin-top:0;width:8.25pt;height:15pt;z-index:8;
                                                             visibility:visible;mso-wrap-style:square;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAoL2C
                                                          HCUCAABNBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVMtu2zAQvBfoPxC8O6JlK37AVGAnVi9pGqDp
                                                          B7ASZRHhQyAZW0HRf++Skpzk0EPr23K5nJmdXWlz0ymJjtw6YTTF0yuCEdelqYQ+UPzjqZgsMXKe
                                                          6YpJoznFr9zhm/zzp01X2TXTZWMsAgjt1pCguPG+XSeJKxuumLsyLddwWxurmIejPSSVZScAVzJJ
                                                          CblOXGs5q1zDub/rb3Aesf3J3HIptz0Fr4TfOopBQ8gONbU1qq8ujczTTRJEhTAiQPCtrnNyTodT
                                                          vLHmNKZDOObeVUM6VkfENxpvztB/o5uS+WKR/RPndEUyMsj8QDzSuRYpVlpDMUaed14K/Qxxr0Uf
                                                          v7ePdtD1cHy0SFQUrzDSTMHAnqAe7UyHZit4wNZwvHd+mBn7j4kpJvSIhF6soPhXUaS7bF/MJwVE
                                                          kznZzSe7/Xw1KdLZcp8uitt0dv0bJ/kmGfkhjLMKes/SQx/IdyAWNjFSuPbelM/uUrVIm9uG6QPf
                                                          WvC3CQsXGIKgQUVvYTy999MFRT9PX00FTrIXb6KqrrbqUklhFKauEbSaZlm6IPDhvVJMgqhoEiqD
                                                          C3GZMCrhCj4XkmaDi0FCKGyt81+4uVgOCkAUW1762CI7wpL0AxspAp02hZDy0t5ji1JfCoNOsOYZ
                                                          WPKmLCIr4blFUiiKl+AZOBvTYex7XcXYMyH7GDZS6mEPwrTP4bCVUnDt75hn8C6ux4f/0pDr/4P5
                                                          HwAAAP//AwBQSwMEFAAGAAgAAAAhAHl0IqgTAQAAkQEAAA8AAABkcnMvZG93bnJldi54bWx8UMFO
                                                          wkAQvZv4D5sx8SZbiICtLAQNKieSFhOvazvbNnZ3ye5Ci1/vgJLePL43896bN7NFpxt2QOdrawQM
                                                          BxEwNLktalMKeN++3D0A80GaQjbWoIAjeljMr69mMilsa1I8ZKFkZGJ8IgVUIewSzn1eoZZ+YHdo
                                                          aKas0zIQdCUvnGzJXDd8FEUTrmVtKKGSO3yuMP/K9lrABrPVdiWz+HVUNvFkH7r4wz8JcXvTLR+B
                                                          BexCv/ynXhcCYmDq7fjp6iKVPqATQHWoHBWDOV3cNUuTV9YxlaKvv6nOL6+c1czZ9ryf20bACE54
                                                          o5THcGF7xE9mwf4nGcbROKJ0crvohtH9dDoGEvP+lDPoPzn/AQAA//8DAFBLAQItABQABgAIAAAA
                                                          IQDw94q7/QAAAOIBAAATAAAAAAAAAAAAAAAAAAAAAABbQ29udGVudF9UeXBlc10ueG1sUEsBAi0A
                                                          FAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAAAAAAAAAAAAAAAALgEAAF9yZWxzLy5yZWxzUEsBAi0A
                                                          FAAGAAgAAAAhAKC9ghwlAgAATQUAABAAAAAAAAAAAAAAAAAAKQIAAGRycy9zaGFwZXhtbC54bWxQ
                                                          SwECLQAUAAYACAAAACEAeXQiqBMBAACRAQAADwAAAAAAAAAAAAAAAAB8BAAAZHJzL2Rvd25yZXYu
                                                          eG1sUEsFBgAAAAAEAAQA9QAAALwFAAAAAA==
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><v:shape id="_x0000_s1051" type="#_x0000_t75" style='position:absolute;
                                                             margin-left:117pt;margin-top:0;width:8.25pt;height:15pt;z-index:9;
                                                             visibility:visible;mso-wrap-style:square;v-text-anchor:top' o:gfxdata="UEsDBBQABgAIAAAAIQDw94q7/QAAAOIBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRzUrEMBDH
                                                          74LvEOYqbaoHEWm6B6tHFV0fYEimbdg2CZlYd9/edD8u4goeZ+b/8SOpV9tpFDNFtt4puC4rEOS0
                                                          N9b1Cj7WT8UdCE7oDI7ekYIdMayay4t6vQvEIrsdKxhSCvdSsh5oQi59IJcvnY8TpjzGXgbUG+xJ
                                                          3lTVrdTeJXKpSEsGNHVLHX6OSTxu8/pAEmlkEA8H4dKlAEMYrcaUSeXszI+W4thQZudew4MNfJUx
                                                          QP7asFzOFxx9L/lpojUkXjGmZ5wyhjSRJQ8YKGvKv1MWzIkL33VWU9lGfl98J6hz4cZ/uUjzf7Pb
                                                          bHuj+ZQu9z/UfAMAAP//AwBQSwMEFAAGAAgAAAAhADHdX2HSAAAAjwEAAAsAAABfcmVscy8ucmVs
                                                          c6SQwWrDMAyG74O9g9G9cdpDGaNOb4VeSwe7CltJTGPLWCZt376mMFhGbzvqF/o+8e/2tzCpmbJ4
                                                          jgbWTQuKomXn42Dg63xYfYCSgtHhxJEM3Elg372/7U40YalHMvokqlKiGBhLSZ9aix0poDScKNZN
                                                          zzlgqWMedEJ7wYH0pm23Ov9mQLdgqqMzkI9uA+p8T9X8hx28zSzcl8Zy0Nz33r6iasfXeKK5UjAP
                                                          VAy4LM8w09zU50C/9q7/6ZURE31X/kL8TKv1x6wXNXYPAAAA//8DAFBLAwQUAAYACAAAACEAS6vV
                                                          lSUCAABNBQAAEAAAAGRycy9zaGFwZXhtbC54bWykVMtu2zAQvBfIPxC8O6IVK37AUmA7Vi9pG6Dp
                                                          BzASZRGhSIFkbAVF/727lOQmhx5a67RcrmZmdxZc33WNIkdhnTQ6pdNrRonQhSmlPqT0x1M+WVDi
                                                          PNclV0aLlL4JR++yq0/rrrQrrovaWAIQ2q0gkdLa+3YVRa6oRcPdtWmFhtvK2IZ7ONpDVFp+AvBG
                                                          RTFjt5FrreClq4Xw9/0NzQK2P5mdUGrTU4hS+o1LKWjA7FBTWdP01YVRWbyOUBSGAQGCb1WVsXMa
                                                          T+HGmtOYxnDMvauGdKgOiH9ovDlD/41uymbzefJPnNMlS9gg8wPxSOda0vDCmpRS4kXnldQvEPda
                                                          9PF7+2gHXV+Pj5bIEpwEIzVvwLEn+IFsTUdi+IGv4PTg/OAZ/w/HGi71iERerUzpzzyPt8k+n01y
                                                          iCYztp1NtvvZcpLHN4t9PM938c3tLxpl62jkhzB4hXrP0rEP4jvQCvoDhWsfTPHiLlVLtNnVXB/E
                                                          xsJ8a1w4ZEBBg4p+hOH0fp4OFT2fvpgSBslfvQmquso2l0pCK0xVEWg1TpJ4zsCvt5QyFBWGRAqc
                                                          QlgmSgq4itkyScI9TBElYGFrnf8szMVyCAKl1IrChxb5EZakN2ykQDptcqnUpb2HFpW+FIacUrpM
                                                          4iQI7pUF5EZ6YYmSTUoXDL9+pmj7XpehxHOp+hhmqfSwB+j2ORy2Ukmh/T33HIeBy/LhXRpy/TuY
                                                          /QYAAP//AwBQSwMEFAAGAAgAAAAhACvCmZMSAQAAkgEAAA8AAABkcnMvZG93bnJldi54bWx8UE1P
                                                          wkAQvZv4HzZj4k22EAFbWQgaVE4kLSZe13b6EfeD7C60+OsdUNKbx/dm3pv3ZrbotGIHdL6xRsBw
                                                          EAFDk9uiMZWA9+3L3QMwH6QppLIGBRzRw2J+fTWTSWFbk+IhCxUjE+MTKaAOYZdw7vMatfQDu0ND
                                                          s9I6LQNBV/HCyZbMteKjKJpwLRtDF2q5w+ca869srwVsMFttVzKLX0eViif70MUf/kmI25tu+Qgs
                                                          YBf65T/1uqD4lL58O366pkilD+gEEEPtaARzityppclr61iZom++qc8vXzqrmbPteT+3SsAITnhT
                                                          lh7Dhe0RP5kF+59kGEfjiK6T20U3jO6n0zGQmPdRzqB/5fwHAAD//wMAUEsBAi0AFAAGAAgAAAAh
                                                          APD3irv9AAAA4gEAABMAAAAAAAAAAAAAAAAAAAAAAFtDb250ZW50X1R5cGVzXS54bWxQSwECLQAU
                                                          AAYACAAAACEAMd1fYdIAAACPAQAACwAAAAAAAAAAAAAAAAAuAQAAX3JlbHMvLnJlbHNQSwECLQAU
                                                          AAYACAAAACEAS6vVlSUCAABNBQAAEAAAAAAAAAAAAAAAAAApAgAAZHJzL3NoYXBleG1sLnhtbFBL
                                                          AQItABQABgAIAAAAIQArwpmTEgEAAJIBAAAPAAAAAAAAAAAAAAAAAHwEAABkcnMvZG93bnJldi54
                                                          bWxQSwUGAAAAAAQABAD1AAAAuwUAAAAA
                                                          " o:insetmode="auto">
                                                             <v:imagedata src="Libro1_Libro1_19859_image001.png" o:title=""/>
                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                             <x:ClientData ObjectType="Pict">
                                                              <x:SizeWithCells/>
                                                              <x:CF>Bitmap</x:CF>
                                                              <x:AutoPict/>
                                                             </x:ClientData>
                                                            </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
                                                                                                    position:absolute;z-index:1;margin-left:28px;margin-top:0px;width:204px;
                                                                                                    height:95px'><img width=204 height=95 src="data:image/png;base64,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"
                                                                   alt="LOGO MSP.jpg" v:shapes="Text_x0020_Box_x0020_2 Text_x0020_Box_x0020_38 Text_x0020_Box_x0020_39 _x0000_s1046 _x0035__x0020_Imagen _x0000_s1048 _x0000_s1049 _x0000_s1050 _x0000_s1051"></span><![endif]><span
                                                                style='mso-ignore:vglayout2'>
                                                                <table cellpadding=0 cellspacing=0>
                                                                    <tr>
                                                                        <td colspan=5 height=24 class=xl6419859 width=797 style='height:18.0pt;
                                                                            width:599pt'>MINISTERIO DE SALUD PUBLICA</td>
                                                                    </tr>
                                                                </table>
                                                            </span></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td colspan=5 class=xl6619859>HOSPITAL ¨DR. GUSTAVO DOMÍNGUEZ Z¨</td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td colspan=5 class=xl6619859>Av. Quito s/n y Las Delicias</td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td colspan=5 class=xl6619859>Telef. 02-3836260</td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl6619859></td>
                                                        <td class=xl6619859></td>
                                                        <td class=xl6619859></td>
                                                        <td class=xl6619859></td>
                                                        <td class=xl6519859></td>
                                                    </tr>
                                                    <tr height=21 style='height:15.75pt'>
                                                        <td height=21 class=xl1519859 style='height:15.75pt'></td>
                                                        <td colspan=5 class=xl8919859>PLANILLA DE GASTOS</td>
                                                    </tr>
                                                    <tr height=21 style='height:15.75pt'>
                                                        <td height=21 class=xl1519859 style='height:15.75pt'></td>
                                                        <td class=xl6719859></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl9119859 width=156 style='width:117pt'>Paciente:</td>
                                                        <td class=xl6519859><?= $patient->getFullName() ?></td>
                                                        <td class=xl6819859>Cedula Nº :</td>
                                                        <td colspan=2 class=xl6919859><?= $patient->getIdentificacion() ?></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl9219859>Fecha de ingreso:</td>
                                                        <td class=xl7019859><?= $fur->getHealthCenterAdmisionDate() ?></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859><span style='mso-spacerun:yes'> </span></td>
                                                        <td class=xl6519859></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl9219859>Fecha de egreso:</td>
                                                        <td class=xl7019859><?= $fur->getHealthCenterEgressDate() ?></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl9219859>Dirección:</td>
                                                        <td class=xl6519859><?= $patient->getDireccion() ?></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl9219859>Teléfono:</td>
                                                        <td class=xl7119859><?= $patient->getTelefono() ?></td>
                                                        <td class=xl7219859></td>
                                                        <td class=xl7219859></td>
                                                        <td class=xl6519859></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl9219859>Diagnóstico:</td>
                                                        <td colspan=4 rowspan=3 class=xl7319859 width=641 style='width:482pt'><?= $expenseForm->getDiagnostic() ?></td>
                                                    </tr>
                                                    <tr height=13 style='mso-height-source:userset;height:9.75pt'>
                                                        <td height=13 class=xl1519859 style='height:9.75pt'></td>
                                                        <td class=xl6819859></td>
                                                    </tr>
                                                    <tr height=13 style='mso-height-source:userset;height:9.75pt'>
                                                        <td height=13 class=xl1519859 style='height:9.75pt'></td>
                                                        <td class=xl6819859></td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl7419859 width=398 style='width:299pt'>&nbsp;</td>
                                                        <td class=xl7419859 width=81 style='width:61pt'>&nbsp;</td>
                                                        <td class=xl7419859 width=81 style='width:61pt'>&nbsp;</td>
                                                        <td class=xl7419859 width=81 style='width:61pt'>&nbsp;</td>
                                                    </tr>
                                                    <tr height=20 style='height:15.0pt'>
                                                        <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                        <td class=xl7519859>CODIGO<span style='mso-spacerun:yes'> </span></td>
                                                        <td class=xl7519859 style='border-top:none;border-left:none'>DETALLE</td>
                                                        <td class=xl7619859 style='border-top:none;border-left:none'>CANT.</td>
                                                        <td class=xl7519859 style='border-top:none'>C/U</td>
                                                        <td class=xl7519859 style='border-top:none;border-left:none'>C/T</td>
                                                    </tr>
                                                    <?php foreach ($__detailArray as $grouplabel => $__item) { ?>

                                                        <tr height=20 style='height:15.0pt'>
                                                            <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                            <td class=xl7719859 style='border-top:none;padding: 3px 0px 5px 10px; font-size: 15px;' colspan="5">
                                                                <span style=" ">
                                                                    <?= $grouplabel ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <?php foreach ($__item as $__i) { ?>
                                                            <tr height=20 style='height:15.0pt'>
                                                                <td height=20 class=xl1519859 style='height:15.0pt'></td>
                                                                <td class=xl8019859 style='border-top:none; padding:3px;'><?= $__i["item_code"] ?></td>
                                                                <td class=xl8119859 style='border-top:none;border-left:none; padding: 3px;'><?= $__i["item_description"] ?></td>
                                                                <td class=xl8219859 style='border-top:none;border-left:none; padding: 3px;'><span
                                                                        style='mso-spacerun:yes'> </span><?= $__i["quantity"] ?><span style='mso-spacerun:yes'> </span></td>
                                                                <td class=xl8319859 style='border-top:none; padding: 3px;'><span
                                                                        style='mso-spacerun:yes'> </span><?= $__i["unit_value"] ?><span style='mso-spacerun:yes'> </span></td>
                                                                <td class=xl8319859 style='border-top:none;border-left:none; padding: 3px;'><span
                                                                        style='mso-spacerun:yes'> </span><?= $__i["total_value"] ?><span style='mso-spacerun:yes'> </span></td>
                                                            </tr>
                                                        <?php }
                                                    }
                                                    ?>
                                                    <tr height=21 style='height:15.75pt'>
                                                        <td height=21 class=xl1519859 style='height:15.75pt'></td>
                                                        <td class=xl8419859></td>
                                                        <td class=xl8519859></td>
                                                        <td class=xl8619859></td>
                                                        <td class=xl9019859 style='border-top:none'>TOTAL<span
                                                                style='mso-spacerun:yes'> </span></td>
                                                        <td class=xl8719859 style='border-top:none;border-left:none'><span
                                                                style='mso-spacerun:yes'> </span><?= $expenseForm->getTotal() ?><span style='mso-spacerun:yes'> </span></td>
                                                    </tr>
                                                    <tr height=21 style='height:15.75pt'>
                                                        <td height=21 class=xl1519859 style='height:15.75pt'></td>
                                                        <td class=xl6519859><span style='mso-spacerun:yes'> </span></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl6519859></td>
                                                        <td class=xl9019859 style='border-top:none'><?= $form008->getInsurance()?></td>
                                                        <td class=xl8819859 style='border-top:none;border-left:none'><span
                                                                style='mso-spacerun:yes'> </span><?= $expenseForm->getSppat() ?><span style='mso-spacerun:yes'> </span></td>
                                                    </tr>
                                                    <tr height=21 style='height:15.75pt'>
                                                        <td height=21 class=xl1519859 style='height:15.75pt'></td>
                                                        <td class=xl1519859></td>
                                                        <td class=xl6519859 colspan=2><span
                                                                style='mso-spacerun:yes'>                                                                                                                      
                                                            </span><span style='display:none'><span
                                                                    style='mso-spacerun:yes'>                                                                                                                                                                                                                                                                                                                                    </span></span></td>
                                                        <td class=xl9019859 style='border-top:none'>SALDO</td>
                                                        <td class=xl8819859 style='border-top:none;border-left:none'><span
                                                                style='mso-spacerun:yes'> </span><?= $expenseForm->getBalance() ?><span style='mso-spacerun:yes'> </span></td>
                                                    </tr>
                                                    <![if supportMisalignedColumns]>
                                                    <tr height=0 style='display:none'>
                                                        <td width=80 style='width:60pt'></td>
                                                        <td width=156 style='width:117pt'></td>
                                                        <td width=398 style='width:299pt'></td>
                                                        <td width=81 style='width:61pt'></td>
                                                        <td width=81 style='width:61pt'></td>
                                                        <td width=81 style='width:61pt'></td>
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

