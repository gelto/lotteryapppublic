@extends('emails.emaillayout')
@section('content')

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
    <tr>
        <td align="center" valign="top">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
                <tr>
                    <td width="600" height="30" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:12px;line-height:14px;color:#7e7e7e;">Si no puedes visualizar este correo, <a title="Visualiza el mensaje original" href="{{ URL::to('/original2'); }}/{{$token}}/{{$jugada}}" target="_blank" style="color:#7e7e7e;">da clic aqu&iacute;</a>.</td>
                </tr>
            </table>
            <!-- inicia contenido principal del mensaje -->
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr><!-- INICIA CABECERA -->
                    <td width="600" height="40" style="line-height:0px;font-size:0px;">
                        <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                    </td>
                </tr>
                <tr>
                    <td width="600" style="line-height:0px;font-size:0px;">
                        <!-- inicia cabecera del mensaje -->
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                            <tr>
                                <td width="125" height="150" style="line-height:0px;font-size:0px;">
                                    <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                </td>
                                <td width="350" style="line-height:0px;font-size:0px;">
                                    <a title="Sitio Lottery Popcorn" href="{{ URL::to('/'); }}" target="_blank"><img alt="Logotipo Lottery Popcorn" src="http://lotterypopcorn.com/public/statics/img/logos/loguito.png" width="350" height="150" border="0" /></a>
                                </td>
                                <td width="125" height="150" style="line-height:0px;font-size:0px;">
                                    <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                </td>
                            </tr>
                        </table><!-- termina cabecera del mensaje -->e
                    </td>
                </tr>
                <tr>
                    <td width="600" height="20" style="line-height:0px;font-size:0px;">
                        <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                    </td>
                </tr><!-- TERMINA CABECERA -->
            </table><!-- termina contenido principal del mensaje -->
        </td>
    </tr>


    <tr><!-- INICIAN CONTENIDO PRINCIPAL -->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                <tr>
                    <td width="600" style="line-height:0px;font-size:0px;">
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                            <tr>
                                <td width="39" style="line-height:0px;font-size:0px;">
                                    <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                </td>
                                <td width="528" style="line-height:0px;font-size:0px;">
                                    <table width="528" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="528" height="40" align="left" style="font-family:Helvetica,Arial,Sans-serif;font-size:16px;line-height:18px;color:#0dbff2;"><strong>Bienvenido de vuelta</strong></td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="10" style="line-height:0px;font-size:0px;">
                                                <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="40" style="font-family:Helvetica,Arial,Sans-serif;font-size:12px;line-height:16px;color:#000000;text-align:justify;">Gracias por comprar y jugar Lottery Popcorn.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="40" style="font-family:Helvetica,Arial,Sans-serif;font-size:12px;line-height:16px;color:#000000;text-align:justify;">Los n&uacute;meros que jugaste fueron: <a href="{{ URL::to('/siguiente'); }}" target="blank" style="color:#0dbff2;">{{ $numeros }}</a></td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="60" style="font-family:Helvetica,Arial,Sans-serif;font-size:12px;line-height:16px;color:#000000;text-align:justify;">En caso de no desear participar con este correo electr&oacute;nico o que considere que el envi&oacute; de este comunicado es err&oacute;neo, <a title="cancela tu suscripci&oacute;n aqu&iacute;" href="mailto:contacto@lotterypopcorn.com?subject=Solicitud%20de%20cancelaci%C3%B3n&body=No%20deseo%20recibir%20informaci%C3%B3n%20ni%20participar%20en%20los%20sorteos%20de%20Lottery%20Popcorn" style="color:#0dbff2;">cancela tu suscripci&oacute;n aqu&iacute;</a>.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="45" style="line-height:0px;font-size:0px;">
                                                <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="33" style="line-height:0px;font-size:0px;">
                                    <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- TERMINAN CONTENIDO PRINCIPAL -->


    <tr><!-- INICIA MENU INFERIOR -->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#242424">
                <tr>
                    <td width="10" style="line-height:0px;font-size:0px;">
                        <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                    </td>
                    <td width="70" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="LEGALES" href="{{ URL::to('/legales'); }}" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">LEGALES</a></td>
                    <td width="" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="HISTORIAL DE SORTEOS" href="{{ URL::to('/historial'); }}" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">HISTORIAL DE SORTEOS</a></td>
                    <td width="" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="SIGUIENTE SORTEO" href="{{ URL::to('/siguiente'); }}" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">SIGUIENTE SORTEO</a></td>
                    <td width="" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="PREGUNTAS FRECUENTES" href="{{ URL::to('/preguntasfrecuentes'); }}" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">PREGUNTAS FRECUENTES</a></td>
                    <td width="" height="35" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:10px;line-height:14px;color:#666666;"><a title="CONT&Aacute;CTANOS" href="{{ URL::to('/contacto'); }}" target="_blank" style="color:#0dbff2;font-weight:bold;text-decoration:none!important;">CONT&Aacute;CTANOS</a></td>
                    <td width="10" style="line-height:0px;font-size:0px;">
                        <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- TERMINA MENU INFERIOR -->


    <tr><!-- INICIAN LEGALES -->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                <tr>
                    <td width="600" height="15" style="line-height:0px;font-size:0px;">
                        <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                    </td>
                </tr>
                <tr>
                    <td width="600" height="18" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:9px;font-weight:bold;line-height:12px;color:#666666;">Este mensaje fue enviado a {{ $email }} por Lottery Popcorn.</td>
                </tr>
                <tr>
                    <td width="600" height="18" align="center" style="font-family:Helvetica,Arial,Sans-serif;font-size:9px;line-height:12px;color:#666666;">Agrega esta direcci&oacute;n a tu lista de contactos para evitar que nuestros correos sean guardados en la bandeja de correo no deseado.</td>
                </tr>
                <tr><!-- INICIA AVISO DE PRIVACIDAD -->
                    <td width="600" style="line-height:0px;font-size:0px;">
                        <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                            <tr>
                                <td width="39" style="line-height:0px;font-size:0px;">
                                    <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                </td>
                                <td width="528" style="line-height:0px;font-size:0px;">
                                    <table width="528" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="528" height="10" style="line-height:0px;font-size:0px;">
                                                <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="30" align="left" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;">Aviso de privacidad</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="35" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Lottery Popcorn, S. A. DE C. V., <b></b> le informa que es el responsable de sus datos personales los cuales pudieron haber sido obtenidos en su car&aacute;cter de <b>(i)</b> cliente o <b>(ii)</b> cliente potencial.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="25" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">De no manifestar su oposici&oacute;n se entender&aacute; que autoriza a Lottery Popcorn al tratamiento de sus datos personales para las siguientes finalidades:</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="55" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;"><strong>CLIENTES.</strong> (i) Para hacer efectiva la participaci&oacute;n en los sorteos, (ii) proveerle de un bien o servicio, (iii) informarle de futuros sorteos y resultados, (iv) realizar actividades de mercadeo, (v) ofrecerle productos e informaci&oacute;n, (vi) realizar an&aacute;lisis estad&iacute;sticos y de mercado, (vii) invitarle a eventos, (viii) informarle de promociones y lanzamientos, (ix) mantener actualizados nuestros registros; todo ello en relaci&oacute;n a los productos o servicios  de  Lottery Popcorn y sus socios de negocios</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="40" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Las finalidades primordiales para las cuales se usar&aacute; su informaci&oacute;n y las cuales dan origen a nuestra relaci&oacute;n son las mencionadas en los puntos (i)(ii)(iii)(iv), siendo que la (v)(vi)(vii)(viii)(ix) no son necesarias para mantener nuestra relaci&oacute;n jur&iacute;dica.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="45" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;"><strong>CLIENTES POTENCIALES.</strong> (i) Realizar actividades de mercadeo y prospecci&oacute;n, (ii) ofrecerle productos e informaci&oacute;n, (iii) realizar an&aacute;lisis estad&iacute;sticos y de mercado, (iv) invitarle a eventos, (v) informarle de promociones, (vi) mantener actualizados nuestros registros; todo ello en relaci&oacute;n a los productos o servicios  de  Lottery Popcorn y sus socios de negocios.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="30" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Las finalidades para las cuales se usar&aacute; su informaci&oacute;n en car&aacute;cter de cliente potencial, son la mercadotecnia, publicidad y prospecci&oacute;n de las formas en el p&aacute;rrafo que antecede.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="65" style="font-family:Helvetica,Arial,Sans-serif;font-size:8px;line-height:12px;color:#666666;text-align:justify;">Como cliente, usted podr&aacute; manifestar su negativa al uso de su informaci&oacute;n para los puntos <b>(v)(vi)(vii)(viii)(ix)</b> del apartado de <b>CLIENTES</b>; por otra parte, como cliente potencial, usted podr&aacute; manifestar su negativa al uso de su informaci&oacute;n para los puntos <b>(i)(ii)(iii)(iv)(v)(vi)</b> del apartado de <b>CLIENTE POTENCIAL</b>. Ya sea como cliente o cliente potencial deber&aacute; enviar un correo electr&oacute;nico dirigido a <a href="mailto:protecciondatos@lotterypopcorn.com" target="_blank">protecciondatos@lotterypopcorn.com</a>  manifestando su negativa y conforme a lo se&ntilde;alado en el aviso de privacidad integral ubicado en la p&aacute;gina <a href="http://www.lotterypopcorn.com/legales" target="_blank">http://www.lotterypopcorn.com/legales</a>.</td>
                                        </tr>
                                        <tr>
                                            <td width="528" height="25" style="line-height:0px;font-size:0px;">
                                                <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="33" style="line-height:0px;font-size:0px;">
                                    <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- TERMINA AVISO DE PRIVACIDAD -->
            </table>
        </td>
    </tr><!-- TERMINAN LEGALES -->


    <tr><!-- INICIA FOOTER -->
        <td width="600" style="line-height:0px;font-size:0px;">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0000000">
                <tr>
                    <td width="600" height="25" style="line-height:0px;font-size:0px;">
                        <img src="http://lotterypopcorn.com/public/statics/img/assets/pixel.gif" width="1" height="1" alt="" border="0" />
                    </td>
                </tr>
            </table>
        </td>
    </tr><!-- TERMINA FOOTER -->
</table>

@stop