
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
    <!-- view port meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'Email CNTS')</title>
    <style type="text/css">
        /* hacks */
        * { -webkit-text-size-adjust:none; -ms-text-size-adjust:none; max-height:1000000px;}
        table {border-collapse: collapse !important;}
        #outlook a {padding:0;}
        .ReadMsgBody { width: 100%; }
        .ExternalClass { width: 100%; }
        .ExternalClass * { line-height: 100%; }
        .ios_geo a { color:#1c1c1c !important; text-decoration:none !important; }
        /* responsive styles */
        @media only screen and (max-width: 600px) {

            /* global styles */
            .hide{ display:none !important; display:none;}
            .blockwrap{ display:block !important; }
            .showme{ display:block !important; width: auto !important; overflow: visible !important; float: none !important; max-height:inherit !important; max-width:inherit !important; line-height: auto !important; margin-top:0px !important; visibility:inherit !important;}
            *[class].movedown{ display: table-footer-group !important;}
            *[class].moveup{ display: table-header-group !important; }

            /* font styles */
            *[class].textright{ text-align: right !important; }
            *[class].textleft{ text-align: left !important; }
            *[class].textcenter{ text-align: center !important; }
            *[class].font27{ font-size: 27px !important; font-weight:normal !important; line-height:27px !important; }

            /* width and heights */
            *[class].h150{ height:150px !important; }
            *[class].w320{ width:320px !important; }
            *[class].w380{ width: 340px !important; }
        }

    </style>
</head>

<body style="margin:0; padding:0;" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<!--[if gte mso 15]>
<style type="text/css" media="all">
    tr { font-size:1px; mso-line-height-alt:0; mso-margin-top-alt:1px; }
</style>
<![endif]-->


<table width="100%" border="0" cellspacing="0" cellpadding="0" bcolor="#fff">
    <tr>
        <td align="center" valign="top">
            <table width="640" border="0" align="center" cellpadding="0" cellspacing="0" class="w380">
                <tr>
                    <td width="640" class="w380">

                        <table>
                            <tr>
                                <td><img src="{{ storage('') }}" height="20"></td>
                            </tr>
                        </table>

                        <table width="640" border="0" align="center" cellpadding="0" cellspacing="0" class="w380">
                            <tr>
                                <td width="223" class="w380 textcenter"><img src="images/PROJEKTO-welcome-DESK_31.png" width="223" height="59"></td>
                                <td width="415" align="right" class="hide">

                                    <span style="font-family: arial; font-size:12px; color:#0d133d">Comienza tus projectos, aprende con nuestro tutorial</span><br>
                                    <span style="font-family: arial; font-size:12px; color:#0d133d"><a href="" style="color:#0d133d; text-decoration:underline;">Version online</a></span>

                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td><img src="images/spacer.gif" height="5"></td>
                            </tr>
                        </table>



                    </td>
                </tr>
            </table>
            @yield('content')
        </td>
    </tr>
</table>


</body>
</html>
