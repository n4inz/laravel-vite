<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css?family=Yantramanav:300,400,500,700" rel="stylesheet" />
    <!--<![endif]-->
	<title>*|MC:SUBJECT|*</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
  
</head>
<body style="--tw-bg-opacity: 1; background-color: rgb(252 252 252 / var(--tw-bg-opacity)); font-family: Roboto, font-sans;">
   
    <div style="width: 100%;">
        <div style=" margin-top: 61px; padding-left: 58px; margin-left: auto; margin-right: auto;">
            <span style="font-style: normal; font-weight: 700; font-size: 34px; line-height: 41px; letter-spacing: 0.41px; --tw-text-opacity: 1; color: rgb(79 79 79 / var(--tw-text-opacity)); line-height: 1.75rem/* 28px */;" class="overview-send-title ">{{ $result->title }}</span>
            <div  style="display: flex; border-radius: 0.375rem; align-items: center; justify-content: flex-start; margin-top: 1rem;">
                <div style=" padding: 0.5rem; --tw-bg-opacity: 1; background-color: rgb(218 242 241 / var(--tw-bg-opacity)); border-radius: 0.375rem;">
                    <span  style=" font-style: normal; font-weight: 700; font-size: 20px; line-height: 25px;  text-align: center; letter-spacing: 0.38px; --tw-text-opacity: 1; color: rgb(44 166 160 / var(--tw-text-opacity));" >${{ $result->rate }} per Hour</span>
                </div>
            </div>
            <div style="font-weight: 400; font-size: 13px; line-height: 18px; letter-spacing: -0.08px; --tw-text-opacity: 1; color: rgb(130 124 124 / var(--tw-text-opacity)); margin-top: 27px;">
                {!! $result->description !!}
            </div>
			<a href="{{ $result->url_calendly }}">Confirm Job</a>
        </div>
    </div>

</body>
</html>