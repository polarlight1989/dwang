<?php if (!defined('THINK_PATH')) exit(); $title = I('GET.title'); $title = str_replace("*","/",$title); $file = I('GET.file'); $file = str_replace("*","/",$file); $img = I('GET.img'); $img = str_replace("*","/",$img); ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/public/css/style_cn.css" rel="stylesheet">
    <script src="/public/js/jquery.js"></script>
	<script src="/public/js/common.js"></script>
    <style>
    .job-hot {
    	position: absolute;
    	color: #d9534f;
    	right: 0;
    	top: 15px;
    }
    </style>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style='background-image:url("")'>
	 
	<script src="/public/videojs/video.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
    VideoJS.setupAllWhenReady();
  </script>
  <link rel="stylesheet" href="/public/videojs/video-js.css" type="text/css" media="screen" title="Video JS">
<div class='vlShow' id='itemThumb'  >
					<!--<div class='vltitle'><div id='itemTitle'></div></div>
					<a class='videoplay' id="videoplay" video="" href='javascript:startVideo()'></a>
					<div class='vlbar'></div>-->
				<div style='position:absolute;top:0px;left:0px;width:850px;height:640px;'>
					<div class='vltitle'><div id='itemTitle'><?php echo ($title); ?></div></div>
					<video id="videoTag" class="video-js" width="850" height="640" controls="controls" preload="auto" >
						<source src="<?php echo ($file); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
						<!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
						<object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
						<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
						<param name="allowfullscreen" value="true" />
						<param name="flashvars" value='config={"playlist":["{$img}", {"url": "{$file}","autoPlay":false,"autoBuffering":true}]}' />
						<!-- Image Fallback. Typically the same as the poster image. -->
						<img src="<?php echo ($img); ?>" width="640" height="264" alt="Poster Image" title="No video playback capabilities." />
					</object>
					</video>
				</div>
				</div>