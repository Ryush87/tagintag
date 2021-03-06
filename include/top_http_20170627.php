<!-- 절대경로 : 추후 삭제 필요-->
<? $root = "http://".$_SERVER['SERVER_NAME']."/task/trunk/tagintag"; ?>
<? $d_root = $_SERVER['DOCUMENT_ROOT']."/task/trunk/tagintag"; ?>
<!-- 절대경로 : 추후 삭제 필요-->

<!DOCTYPE HTML>
<!--[if lt IE 7]> <html lang="ko" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="ko" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="ko" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang='ko'>
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="TagInTag">
	<meta property="og:description" content="세상에 없던 가격">
	<meta property="og:image" content="<?=$root?>/skin/images/common/favicon_tagintag.ico">
	<meta property="og:url" content="<?=$root?>/">
	<title>TagInTag</title>
	<link rel="shortcut icon" href="<?=$root?>/skin/images/common/favicon_tagintag.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?=$root?>/skin/plugin/animation/animate.css">
	<link rel="stylesheet" href="<?=$root?>/skin/plugin/select_or_die/selectordie.css">
	<!-- slickSlide s -->
	<link rel="stylesheet" href="<?=$root?>/skin/plugin/slick_slide/slick.css">
	<link rel="stylesheet" href="<?=$root?>/skin/plugin/slick_slide/slick-theme.css">
	<!-- slickSlide e -->
	<link rel="stylesheet" href="<?=$root?>/skin/css/wrap.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
		<script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="<?=$root?>/skin/plugin/select_or_die/selectordie.js"></script>
	<script type="text/javascript" src="<?=$root?>/skin/plugin/innerfade/jquery.innerfade.js"></script>
	<!-- slickSlide s -->
	<script src="<?=$root?>/skin/plugin/slick_slide/slick.js"></script>
	<!-- slickSlide e -->
	<script type="text/javascript" src="<?=$root?>/skin/js/common.js"></script>