<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4" class="gwfw">
    <tr>
        <td align="center" valign="top">
            <!-- Main -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" style="padding-bottom: 40px;" class="pb0">
                        <!-- Shell -->
                        <table width="650" border="0" cellspacing="0" cellpadding="0" class="m-shell">
                            <tr>
                                <td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                    <!-- Header -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="border-radius: 6px 6px 0px 0px;">
                                        <tr>
                                            <td style="padding: 20px; background-color: white;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" cellspacing="0" cellpadding="0" class="center" style="text-align:center;">
                                                                            <tr>
                                                                                <td class="img"  style="font-size:0pt; line-height:0pt; text-align:left;"><img style="width: 80px" src="{{ asset('images/logo/dummy-logo.png') }}"  mc:edit="image_2" border="0" alt="Logo" /></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td align="right">
                                                                        <table border="0" cellspacing="0" cellpadding="0" class="center" style="text-align:center;">
                                                                            <tr>
                                                                                <td class="nav" style="color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; text-align:right; min-width:auto !important; font-weight:500;">
                                                                                    <a href="#" target="_blank" class="link-black" style="padding: 8px 24px; background: #3BD7CF; border-radius: 5px;">
                                                                                        <span class="link-black" style="color:white; text-decoration:none;">Login</span>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                </table>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END Header -->
                                    
                                    <!-- Article Image On The Left -->
                                    <div mc:repeatable="Select" mc:variant="Article Image On The Left">
                                        <table style="padding-top: 40px; background: #E5E5E5;" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tr>
                                                <td style="padding: 0px 0px 40px 0px; background: #E5E5E5;" class="p0-15-30">
                                                    <table width="100%"  cellspacing="0" cellpadding="0">
                                                        <tr >
                                                            <th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="65"></th>
                                                            <th class="column" style="background: white; ">
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <tr mc:hideable>
                                                                        <td class="text">
                                                                            <img style="width: 521px;" src="{{ asset('images/image1.png') }}" alt="">
                                                                        </td>
                                                                    </tr>
                                                                    <tr mc:hideable>
                                                                        <td class="text" style="background: #3BD7CF; padding: 40px 32px 40px 32px; color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; min-width:auto !important;">
                                                                           <table>
                                                                                <tr >
                                                                                    <td align="left" style="font-size: 30px; line-height: 36px; font-style: normal; font-weight: 500; color: white;">Hi, {{ $client }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left" style="font-size: 16px; line-height: 24px; font-weight: 400; font-style: normal; color:white;">We’re found right talent for your services, please check the list below</td>
                                                                                </tr>
                                                                           </table>
                                                                        </td>
                                                                    </tr>

                                                                    @foreach ($value as $val )
                                                                        <tr mc:hideable>
                                                                            <td class="text" style="border-bottom: 1px solid #d1d5db; background: white; padding: 5px 32px 20px 32px; color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; min-width:auto !important;">
                                                                            <table width="100%">
                                                                                    <tr>
                                                                                        <td width="10%" rowspan="2" >
                                                                                            @if ($val->avatar)
                                                                                                <div>
                                                                                                    <img style="width:48px; height: 48px; border-radius: 999px;" src="{{ asset('storage/avatar/'.$val->avatar) }}" alt="avatar">
                                                                                                </div>
                                                                                            @else
                                                                                                
                                                                                                <div style="text-align: center; padding: 12px 0;  border-radius: 99px; background: {{ $val->color }}; color: white; font-size:11px;">
                                                                                                    
                                                                                                        {{ strtoupper(substr($val->first_name, 0, 1)) }}{{ strtoupper(substr($val->last_name, 0, 1)) }}

                                                                                                   
                                                                                                </div>
                                                                                               
                                                                                            @endif
                                                                                        </td>
                                                                                        <td align="left" style=" font-size: 20px; line-height: 28px; font-weight: 500; font-style: normal;">{{ $val->first_name }} {{ $val->last_name }}</td>
                                                                                        <td width="25%" rowspan="2" style="font-size: 12px; line-height: 16px; font-weight: 600; font-style: normal;">
                                                                                            5 Days / Week
                                                                                        </td>
                                                                                        <td width="15%" rowspan="2" style="font-size: 12px; line-height: 16px; font-weight: 600; font-style: normal;">
                                                                                            $25 / hour
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" style="font-size: 12px; line-height: 16px font-weight: 300; font-style: normal">{{ $val->address }}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="left" colspan="4" style="padding: 8px 24px; font-size: 14px; line-height: 20px; font-weight: 300; font-style: normal; color: #404040;">
                                                                                            {{ $val->about_talent }}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="padding: 0px 20px 0px 20px;" align="left" colspan="4">
                                                                                            <table  width="100%">
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <a href="#" style=" display: flex; align-items: center; width:150px; padding: 4px 8px; border: 1px solid #F57733; border-radius: 5px;">
                                                                                                            <img style="width: 32px; margin-right: 2px;" src="{{ asset('images/icon/chat.png') }}" alt="">
                                                                                                            <span style="line-height: 20px; font-size: 14px; font-weight: 500; font-style: normal; color: #404040;">Contact Admin</span>
                                                                                                        </a>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a style="padding: 8px 16px; background: #FA9D6B; border-radius: 5px; color:white; font-size: 16px; line-height: 24px; font-weight: 500; font-style: normal;" href="">Reject</a>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a style="padding: 8px 16px; background: #3BD7CF; border-radius: 5px; color:white; font-size: 16px; line-height: 24px; font-weight: 500; font-style: normal;" href="">Set Interview</a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        
                                                                                        </td>
                                                                                    </tr>
                                                                            </table>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                    
                                                                </table>
                                                            </th>
                                                            <th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="65"></th>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="" mc:repeatable="Select" mc:variant="Article Image On The Left">
                                        <table style="padding-top: 0px; background: #F5F5F5; " width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tr>
                                                <td style="padding: 0px 0px 10px 0px; background: #E5E5E5;" class="p0-15-30">
                                                    <table width="100%"  cellspacing="0" cellpadding="0">
                                                        <tr >
                                                            <th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="65"></th>
                                                            <th class="column" style="background: white; ">
                                                                <table style="padding: 32px;" width="100%"  cellspacing="0" cellpadding="0">
                                                                    <tr mc:hideable>
                                                                        <td align="left" class="text" style=" background: white; padding: 5px 32px 20px 32px; color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; min-width:auto !important;">
                                                                            <span style="font-size: 16px; font-weight: 300; line-height: 24px; font-style: normal;">See the recomendation and manage helper in one page</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr mc:hideable>
                                                                        <td align="left" class="text" style="background: white; padding: 5px 32px 20px 32px; color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; min-width:auto !important;">
                                                                            <a style="padding: 8px 16px; background: #3BD7CF; border-radius: 5px; font-size: 16px; line-height: 20px; font-weight: 500; color: #FFFFFF;" href="#">
                                                                                Login to Dashboard
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </th>
                                                            <th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="65"></th>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="" mc:repeatable="Select" mc:variant="Article Image On The Left">
                                        <table style="padding-top:0px; background: #E5E5E5; " width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tr>
                                                <td style="padding: 0px 0px 40px 0px; background: #E5E5E5;" class="p0-15-30">
                                                    <table width="100%"  cellspacing="0" cellpadding="0">
                                                        <tr >
                                                            <th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="65"></th>
                                                            <th class="column">
                                                                <table style="padding: 32px;" width="100%"  cellspacing="0" cellpadding="0">
                                                                    <tr mc:hideable>
                                                                        <td class="text" style=" padding: 5px 32px 20px 32px; color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; min-width:auto !important;">
                                                                            <span style="font-size: 16px; font-weight: 300; line-height: 24px; font-style: normal;">For any questions, do feel free to reach out to Agency Support</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr mc:hideable>
                                                                        <td class="text" style="padding: 5px 32px 20px 32px; color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; min-width:auto !important;">
                                                                            <a style="padding: 8px 16px; background: #FA9D6B; border-radius: 5px; font-size: 16px; line-height: 20px; font-weight: 500; color: #FFFFFF;" href="#">
                                                                                Contact Us
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr mc:hideable>
                                                                        <td class="text" style="padding: 5px 32px 20px 32px; color:#000000; font-family:'Yantramanav', Arial, sans-serif; font-size:16px; line-height:20px; min-width:auto !important;">
                                                                            <table style="padding-top: 25px;" width="100%">
                                                                                <tr>
                                                                                    <td align="center"><img style="width: 60px;" src="{{ asset('images/logo/copyright.png') }}" alt=""></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <span style="font-size: 14px; line-height: 20px; font-weight: 300; font-style: normal;">Powered by hirefact</span>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </th>
                                                            <th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="65"></th>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- END Article Image On The Left -->

                                </td>
                            </tr>
                        </table>
                        <!-- END Shell -->
                    </td>
                </tr>
            </table>
            <!-- END Main -->
        </td>
    </tr>
</table>