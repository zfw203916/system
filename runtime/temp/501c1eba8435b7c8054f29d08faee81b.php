<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\Program Files\WWW\system\public/../application/index\view\h5email\email\10\30.html";i:1506497455;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<style type="text/css" media="screen">
	
	/* common
	--------------------------------------------------*/
	
	body {
		margin: 0px;
		padding: 0px;
		color: #fff;
		background: #333 url("img/bgBody.gif") repeat-x 0px 150px;
	}
	* #BodyImposter {
		color: #fff;
		background: #333 url("img/bgBody.gif") repeat-x 0px 150px;
		width: 100%;
		margin: 0px;
		padding: 0px;
		text-align: center;
	}
	* #BodyImposter li,
	* #BodyImposter p,
	* #BodyImposter td {
		font-size: 12px;
		line-height: 1.5em;
		font-family: Helvetica, Arial, sans-serif;
		text-align: justify;
	}
	* #BodyImposter p,
	* #BodyImposter ol,
	* #BodyImposter ul {
		margin: 0em 0em 1em 0em;
	}
	* #BodyImposter img {
		border: 0px;
	}
	* #Primary img {
		float: right;
		margin: 5px 0px 15px 15px;
		border: 1px solid #999;
		padding: 2px;
	}
	* #BodyImposter small {
		font-size: 10px;
		line-height: 1.3em;
	}
	* #BodyImposter ol {
		padding-left: 1em;
	}
	* #Primary ul {
		padding-left: 1em;
		padding-right: 1em;
	}
	* #Secondary ul {
		padding: 0px;
	}
	* #BodyImposter ol li {
		margin: 0px;
		padding: 0px;
	}
	* #BodyImposter ul li {
		background: url("img/bullet.gif") no-repeat 0em 0.5em;
		padding: 0px 0px 0px 8px;
		margin: 0px;
		list-style: none;
	}
	
	/* links
	--------------------------------------------------*/
	
	* #BodyImposter a {
		text-decoration: underline;
	}
	* #Primary a:link,
	* #Primary a:visited,
	* #Secondary a:link,
	* #Secondary a:visited {
		color: #000;
		background: #fff;
	}
	* #Helpful a:link,
	* #Helpful a:visited {
		color: #bdbcbc;
		background: #fff;
	}
	* #Legal a:link,
	* #Legal a:visited {
		color: #7d822b;
		background: #d3dd2e;
	}
	}
	* #BodyImposter a:hover {
		text-decoration: none;
	}
	* #BodyImposter a:active {
		color: #668d3c;
		background: #fff;
		text-decoration: none;
	}
	
	/* heads
	--------------------------------------------------*/
	
	* #BodyImposter h1,
	* #BodyImposter h2,
	* #BodyImposter h3 {
		font-family: Helvetica, Arial, sans-serif;
		font-weight: normal;
		line-height: normal;
		margin: 0em 0em 0.5em 0em;
		padding: 0px;
		text-align: left;
	}
	* #Masthead h1 {
		font-size: 28px;
		color: #fff;
		background: transparent;
		margin-bottom: 0.1em;
		padding-top: 5px;
		text-align: center;
	}
	* #Primary h2 {
		font-size: 22px;
		background: url("img/ornament.gif") no-repeat center top;
		color: #4f7282;
		background: #fff;
	}
	* #Primary h3 {
		font-size: 18px;
		color: #4f7282;
		background: #fff;
	}
	* #Secondary h3 {
		font-size: 16px;
		text-align: left;
		color: #4f7282;
		background: #fff;
	}
	* #Secondary h3#First {
		padding-top: 10px;
	}
	
	/* boxes
	--------------------------------------------------*/
	
	* #Box {
		color: #666;
		background: #fff url("img/bgContent.gif") repeat-y;
		margin: 0px auto;
	}
	* #Content td#Primary,
	* #Content td#Secondary {
		padding-bottom: 30px;
	}
	* #Content td#Secondary ul {
		padding-bottom: 30px;
		background: url("img/divider.gif") no-repeat left bottom;
	}
	* #Helpful {
		color: #bdbcbc;
		background: #fff;
	}
	* #Helpful p {
		margin: 0px;
		padding: 15px 0px;
	}
	* #Legal {
		color: #7d822b;
		background: #5dc7db;
	}
	* #Legal p {
		margin: 0px;
		padding: 0px;
		font-size: 11px;
		text-align: center;
	}
	* #Masthead {
		color: #fff;
		background: #5dc7db url("img/bgMasthead.gif") no-repeat center 11px;
	}
	* #Masthead p {
		text-align: center;
		font-size: 14px;
		margin: 0px;
	}
	* #Top {
		padding-top: 0px;
		padding-bottom: 8px;
		background: url("img/bgBottom.gif") no-repeat center bottom;
	}
	/*
	The asterisks preceding every selector ensure styles are rendered in Dot Mac.
	The inline styles in headlines are for Outlook 2007.
	*/
	
</style>
</head>

<body>
<div id="BodyImposter" style="color: #fff; background: #333 url(img/bgBody.gif) repeat-x 0px 150px;">
	<table id="Box" cellspacing="0" cellpadding="28" width="561" style="color: #666; background-color: #fff;">
		<tr>
			<td id="Top">
				<table id="Masthead" cellspacing="0" cellpadding="11" width="505" style="color: #fff; background-color: #5dc7db;">
					<tr>
						<td style="color: #fff; font-family: Helvetica, Arial, sans-serif;">
							<h1><?php echo $data['title']; ?></h1>
							<p>eNewsletter: <?php echo $data['time']; ?></p>
						</td>
					</tr>
				</table>
				<table id="Helpful" cellspacing="0" cellpadding="0" style="color: #bdbcbc; background: #fff;">
					<tr>
						<td style="font-family: Helvetica, Arial, sans-serif;">
							<p>You are receiving this email because the email address [email] was subscribed to our email list. Having trouble reading this email? View it on our <a href="#">website</a>.</p>
						</td>
					</tr>
				</table>
				<table id="Content" cellspacing="0" cellpadding="10" width="505" style="color: #666; background-color: #fff;">
					<tr valign="top">
						<td id="Secondary" width="160" style="font-family: Helvetica, Arial, sans-serif;">
							<h3>In this issue</h3>
							<ul>
																<li><a href="#">Happening this month</a></li>
								<li><a href="#">Latest Events</a></li>
								<li><a href="#"><?php echo $data['title']; ?></a></li>
							</ul>
							<h3 id="First">Also this month</h3>
							<p>Lorem ipsum dolor sit amet, lipsum consectetuer adipiscing elit. Proin molestie est in augue. Proin accumsan eleifend odio.</p>
							<h3>Pass it on</h3>
							<p>If you know someone who may be interested in receiving this newsletter, you can easily <forwardtoafriend>forward up to five copies</forwardtoafriend> at once.</p>
						</td>
						<td id="Primary" width="345" style="font-family: Helvetica, Arial, sans-serif;">
							<h2>Happening this month</h2>
<img src="img/blank.gif" width="159" height="100" alt="" />

<p>Integer nonummy augue in lectus. Aliquam tristique nibh at dolor venenatis aliquet.</p>

<h2>Latest Events</h2>
<p><?php echo $data['content']; ?> </p>
						</td>
					</tr>
				</table>
				<table id="Legal" cellspacing="0" cellpadding="15" width="505" style="color: #7d822b; background-color: #d3dd2e;">
					<tr>
						<td style="color: #7d822b; font-family: Helvetica, Arial, sans-serif;">
							<p v-html="message"></p> from this newsletter.</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
</body>
</html>