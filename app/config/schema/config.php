<?php
############################################################################
# Debugging
############################################################################
$config['debug'] = 1;
$config['debugFlash'] = 0;

############################################################################
# Security
############################################################################
$config['Security']['salt'] = 'DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi';
$config['Security']['cipherSeed'] = '76859309657453542496749683645';

############################################################################
# Project
############################################################################
$config['Project']['name'] = 'The Fitzrovia Partnership';
$config['Project']['theme'] = 'fitzrovia';
$config['Project']['signature'] = 
	"The Fitzrovia Partnership" . PHP_EOL .
	"020 7637 1278" . PHP_EOL .
	"info@fitzroviapartnership.com" . PHP_EOL .
	"www.fitzroviapartnership.com" . PHP_EOL;

############################################################################
# Cookie
############################################################################
$config['Cookie']['name'] = 'fitzrovia-oicore';
$config['Cookie']['key'] = '23432434243242342345435435';

############################################################################
# Developer IP
############################################################################
$config['Developer']['ip'] = array('127.0.0.1');
$config['Developer']['email'] = array('info@fitzroviapartnership.com' => $config['Project']['name']);

############################################################################
# Time
############################################################################
$config['Time']['zone'] = 'Europe/London';

############################################################################
# Mailer
############################################################################
// SMTP
$config['ServerMailer']['backend'] = 'smtp';
$config['ServerMailer']['options']['host'] = "smtp.gmail.com";
$config['ServerMailer']['options']['port'] = 465;
$config['ServerMailer']['options']['encryption'] = "tls";
$config['ServerMailer']['options']['username'] = "remplik@gmail.com";
$config['ServerMailer']['options']['password'] = "g00gleflej";

// NATIVE MAIL
//$config['ServerMailer']['backend'] = 'mail';

// SENDMAIL
//$config['ServerMailer']['backend'] = 'sendmail';
// Optional
// 1.  "-bs" runs in SMTP mode so theoretically it will act like the SMTP Transport
// 2. "-t" runs in piped mode with no feedback, but theoretically faster, though not advised
//$config['ServerMailer']['path'] = '/usr/sbin/sendmail -bs';
//$config['ServerMailer']['path'] = '/usr/sbin/sendmail -t';
//$config['ServerMailer']['path'] = '/usr/sbin/exim -bs';

############################################################################
# ImageMagick
############################################################################
//$config['ImageMagick']['path'] = '/usr/bin/convert';

$config['Google']['map']['apiKey'] = 'ABQIAAAAMXcGh7ZhiBDnxjtdKV-IkxRirvOMr-tXXjQTSvQlNQ75gAAZzRRoAWvbOxkc_-Y9_KRmH4HqfSP15A';

############################################################################
# Facebook API
############################################################################
$config['Facebook']['app']['id'] = 'your-api-key-here';
$config['Facebook']['app']['apiKey'] = 'your-api-key-here';
$config['Facebook']['app']['secretKey'] = 'your-api-secret-key-here';

############################################################################
# Akismet API
############################################################################
$config['Akismet']['blog'] = 'http://' . env('SERVER_NAME');
$config['Akismet']['key'] = 'your-askimit-key-here';

############################################################################
# Contact email addresses
############################################################################
$config['Contact']['recipients'] = array(
    'remplik+admin@gmail.com' => "Lubos Remplik"
);

############################################################################
# Registration email addresses
############################################################################
$config['Registration']['email'] = array('info@fitzroviapartnership.com' => $config['Project']['name']);

############################################################################
# FFMPEG location
############################################################################
$config['FFMPEG']['path'] = '/usr/local/bin/ffmpeg';

############################################################################
# Google analytics
############################################################################
$config['Google']['analytics'] = <<<EOT
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6762093-49']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
EOT;
$config['Google']['ga_username'] = 'fitzroviaw1free@gmail.com';
$config['Google']['ga_password'] = 'Wonqdijp';
$config['Google']['ga_report_id'] = '35837562';