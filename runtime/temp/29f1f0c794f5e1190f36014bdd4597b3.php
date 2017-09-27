<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\Program Files\WWW\system\public/../application/index\view\h5email\email\6\17.html";i:1506497474;}*/ ?>
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
		color: #666;
		background: #cae4ff url("img/bgTile.gif") repeat;
	}
	* #BodyImposter {
		color: #666;
		background: #cae4ff url("img/bgTile.gif") repeat;
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
		border: 1px solid #d3d3d3;
		padding: 6px;
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
	* #Primary a:visited {
		color: #000;
		background: #fff;
	}
	* #Helpful a:link,
	* #Helpful a:visited,
	* #Legal a:link,
	* #Legal a:visited {
		color: #666;
		background: transparent;
	}
	* #BodyImposter a:hover {
		text-decoration: none;
	}
	* #BodyImposter a:active {
		color: #000;
		background: #fff;
		text-decoration: none;
	}
	
	/* heads
	--------------------------------------------------*/
	
	* #BodyImposter h1,
	* #BodyImposter h2 {
		color: #c33;
		background: #fff;
		font-family: Georgia, Palatino, serif;
		font-weight: normal;
		line-height: normal;
		margin: 0em 0em 0.5em 0em;
		padding: 0px;
		text-align: left;
	}
	* #Masthead h1 {
		font-size: 28px;
		color: #fff;
		background: #333;
		margin: 0px;
	}
	* #Primary h2 {
		font-size: 22px;
		background: url("img/ornament.gif") no-repeat center top;
		padding-top: 35px;
		text-align: center;
	}
	
	/* boxes
	--------------------------------------------------*/
	
	* #Box {
		color: #666;
		background: #fff;
		border: 1px solid #d3d3d3;
		margin: 0px auto;
	}
	* #Content {
		border: 1px solid #d3d3d3;
	}
	* #Helpful,
	* #Legal {
		margin: 0px auto;
	}
	* #Helpful p,
	* #Legal p {
		margin: 0px;
		padding: 0px;
		text-align: center;
	}
	* #Masthead {
		color: #fff;
		background: #333;
	}
	* #Masthead h1,
	* #Masthead p {
		text-align: left;
	}
	* #Masthead p {
		font-size: 14px;
		margin: 0px;
	}
	* #Masthead p #Date {
		float: right;
	}
	* #Masthead {
		width: 100%;
		text-align: center;
	}
	/*
	The asterisks preceding every selector ensure styles are rendered in Dot Mac.
	The inline styles in headlines are for Outlook 2007.
	*/
	
</style>
</head>

<body>
<div id="BodyImposter" style="color: #666; background-color: #cae4ff;">
	<table id="Helpful" cellspacing="0" cellpadding="15" width="610">
		<tr>
			<td style="font-family: Helvetica, Arial, sans-serif;">
				<p>You are receiving this email because the email address [email] was subscribed to our email list. Having trouble reading this email? View it on our <a href="#">website</a>.</p>
			</td>
		</tr>
	</table>
	<table id="Box" cellspacing="0" cellpadding="15" width="580" style="color: #666; background-color: #fff;">
		<tr>
			<td>
				<table id="Masthead" cellspacing="0" cellpadding="20" width="580">
					<tr>
						<td style="color: #fff; background: #333; font-family: Helvetica, Arial, sans-serif;">
							<h1 style="font-family: Georgia, Palatino, serif;"><?php echo $data['title']; ?></h1>
							<p><span id="Date"><?php echo $data['time']; ?></span> Brought to you by <?php echo $data['title']; ?></p>
						</td>
					</tr>
				</table>
				<table id="Content" cellspacing="0" cellpadding="20" width="580" style="color: #666; background-color: #fff;">
					<tr valign="top">
						<td id="Primary" style="font-family: Helvetica, Arial, sans-serif;">
							<h2 style="font-family: Georgia, Palatino, serif;">Happening this month</h2>
<p><?php echo $data['content']; ?></p>
<p><div style="display:none" >易游<?php echo $data['val']; ?></div> <?php echo $data['content']; ?></p>
<p><div style="display:none" >易游<?php echo $data['val']; ?></div></p>
<p><div style="display:none" >易游<?php echo $data['val']; ?></div> <?php echo $data['content']; ?></p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table id="Legal" cellspacing="0" cellpadding="15" width="610">
		<tr>
			<td style="font-family: Helvetica, Arial, sans-serif;">
				<p v-html="message"></p> from this newsletter.</p>
			</td>
		</tr>
	</table>
</div>
</body>
</html>