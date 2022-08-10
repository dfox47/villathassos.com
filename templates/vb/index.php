<?php header('Content-Type: text/html;charset=utf-8'); ?>

<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php $lang         = JFactory::getLanguage();
$languages          = JLanguageHelper::getLanguages('lang_code');
$languageTag        = $lang->getTag();
$languageCode       = $languages[ $lang->getTag() ]->sef;
$languageName       = $lang->getName(); ?>

<!DOCTYPE html>

<html class="no-js preload lang_<?php echo $languageCode; ?>" lang="<?php echo $languageCode; ?>">

<head>
	<?php $this->setGenerator(null);

	$this->_scripts = array();
	unset($this->_script['text/javascript']); ?>

	<meta content="width=device-width, user-scalable=yes, maximum-scale=5" name="viewport" />

	<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />

	<link rel="icon" type="image/png" href="/images/favicon/16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="/images/favicon/32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="/images/favicon/96.png" sizes="96x96" />

	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/57.png" />
	<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/60.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/180.png" />

	<meta property="og:type" content="website">
	<meta property="og:site_name" content="VillaThassos">
<!--	<meta property="og:title" content="">-->
<!--	<meta property="og:description" content="Описание.">-->
	<meta property="og:url" content="https://villathassos.com/">
	<meta property="og:locale" content="<?php echo $languageCode; ?>">
	<meta property="og:image" content="https://villathassos.com/images/preview.jpg">
	<meta property="og:image:height" content="504">
	<meta property="og:image:width" content="968">

	<!--	<script src="/templates/--><?php //echo $this->template; ?><!--/js/jquery-3.6.0.min.js"></script>-->

	<!-- all scripts in one document with GULP -->
<!--	<script src="/templates/--><?php //echo $this->template; ?><!--/all.min.js?v--><?php //echo(date("YmdHis")); ?><!--"></script>-->

	<jdoc:include type="head" />

	<link rel="stylesheet" href="/templates/<?php echo $this->template; ?>/styles.min.css?v<?php echo(date("YmdHis")); ?>" />
</head>

<?php $menu = 0;
$app = JFactory::getApplication();
$menu = $app->getMenu()->getActive()->id; ?>

<body class="menu_id_<?php echo $menu ?>_<?php echo JRequest::getInt('id'); ?>">
<div class="popup">
	<div class="popup_bg"></div>

	<div class="popup_content">
		<img class="popup_close" src="/images/close.png" alt="" />

		<div class="popup_content_ajax"></div>
	</div>
</div>

<div class="popup2">
	<div class="popup_bg"></div>

	<div class="popup_content">
		<img class="popup_close" src="/images/close.png" alt="" />

		<div class="popup_content_ajax"></div>
	</div>
</div>

<jdoc:include type="message" />

<div class="header_wrap">
	<div class="header">
		<?php if($this->countModules('topmenu')) : ?>
			<jdoc:include type="modules" name="topmenu" style="none" />
		<?php endif; ?>

		<?php if($this->countModules('header')) : ?><jdoc:include type="modules" name="header" style="none" /><?php endif; ?>
	</div>
</div>

<?php if($this->countModules('breadcrumbs')) : ?><jdoc:include type="modules" name="breadcrumbs" style="none" /><?php endif; ?>

<?php if($this->countModules('blocks_home')) : ?><jdoc:include type="modules" name="blocks_home" style="none" /><?php endif; ?>

<jdoc:include type="component" />
<jdoc:include type="modules" name="content" style="xhtml" />

<?php if($this->countModules('footer')) : ?><jdoc:include type="modules" name="footer" style="none" /><?php endif; ?>

<?php if($this->countModules('counters')) : ?><jdoc:include type="modules" name="counters" style="none" /><?php endif; ?>

<div class="powered_by">{source}<?php echo JText::_('POWERED_BY'); ?>{/source} <a href="//foxartbox.com" target="_blank">FOXARTBOX</a></div>



<!--<script src="//www.google.com/recaptcha/api.js" async defer></script>-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(75080506, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true,
		webvisor:true
	});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/75080506" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- all scripts in one document with GULP -->
<script src="/templates/<?php echo $this->template; ?>/all.min.js?v<?php echo(date("YmdHis")); ?>"></script>

<!--<script src="//code-ya.jivosite.com/widget/VbnP1QHB7S" async></script>-->
</body>

</html>
