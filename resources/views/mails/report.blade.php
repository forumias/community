<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">   
<title>:: Emailer ::</title>

<style>
	body{ background:#f5f5f5; padding:0; margin:0; font-size:16px; line-height:24px; color:#333; font-family:arial;}
	img{ max-width:100%;}
	a{ color:#ff7e4e; text-decoration:none;}
</style>
</head>
<body>
	<table style="margin:50px auto 0; border:1px solid #eee; background-color:#fff;" align="center" cellpadding="0" cellspacing="0" width="650">
		<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:25px; padding-bottom:25px; margin:0;" align="left" valign="top"><img src="{{ asset('public/images/forumIAS.jpg')}}" alt="" title=""></td>
		</tr>
		<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:15px; padding-bottom:15px; margin:0; background-color:#fcded2;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:0; margin:0; font-size:35px; line-height:45px; color:#333; font-family:arial;">Welcome to <span style="font-size:35px; line-height:45px; color:#ff7e4e; font-weight:bold;">Everent</span></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:25px; padding-bottom:15px; margin:0;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:0; margin:0; font-size:20px; line-height:30px; color:#333; font-family:arial;">Hello <span style="font-size:20px; line-height:30px; color:#ff7e4e; font-weight:bold;">Admin</span>,</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:0; padding-bottom:0; margin:0;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:18px; margin:0; font-size:16px; line-height:24px; color:#333; font-family:arial;">Congratulations! Your everent account has been successfully created. To access your account, simply confirm your email. @if($user['role'] == "renter") After you confirm your email address you will be able to book vendor’s in no time. @endif</p>
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:0; margin:0; font-size:16px; line-height:30px; color:#333; font-family:arial;"><a href="{{ $mailLink }}" style="padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:10px; font-size:16px; line-height:24px; color:#fff; background-color:#ff7e4e; float:left;">Yes, this is my email</a></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:25px; padding-bottom:0; margin:0;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:18px; margin:0; font-size:16px; line-height:24px; color:#333; font-family:arial;">Verify Link: <a href="#">abcd efg</a></p>
			</td>
		</tr>
		<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:25px; padding-bottom:0; margin:0;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:18px; margin:0; font-size:16px; line-height:24px; color:#333; font-family:arial;">Please don't reply to this email. To get in touch with us, email us at Support@everent.com</p>
			</td>
		</tr>
		<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:0; padding-bottom:0; margin:0;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:18px; margin:0; font-size:16px; line-height:24px; color:#333; font-family:arial;">Your email address and password are used to breeze through checkout when you book vendor’s online.</p>
			</td>
		</tr>
		<?php /*<tr>
			<td style="padding-left:25px; padding-right:25px; padding-top:35px; padding-bottom:25px; margin:0;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:0px; margin:0; font-size:17px; line-height:26px; color:#333; font-family:arial; font-weight:bold;">Good Luck!</p>
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:0; margin:0; font-size:18px; line-height:26px; color:#333; font-family:arial;">The Everent Team</p>
			</td>
		</tr>*/?>
		<tr>
			<td style="border-top:1px solid #eee;  padding-left:25px; padding-right:25px; padding-top:25px; padding-bottom:25px; margin:0;" align="left" valign="top">
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:5px; margin:0; font-size:12px; line-height:20px; color:#666; font-family:arial;">You can <a href="#" style="font-size:12px; line-height:20px; color:#ff7e4e;">manage your communications preference</a> from your profile.</p>
				<p style="padding-left:0; padding-right:0; padding-top:0; padding-bottom:5px; margin:0; font-size:12px; line-height:20px; color:#666; font-family:arial;">© {{ date('Y')}} forumIAS. All rights reserved.</p>
			</td>
		</tr>
	</table>
</body>
</html>