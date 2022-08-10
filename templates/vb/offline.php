<?php defined('_JEXEC') or die;

$app = JFactory::getApplication();

$twofactormethods = JAuthenticationHelper::getTwoFactorMethods(); ?>

<!DOCTYPE html>

<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
	<title>One of the best villas in Bansko</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<jdoc:include type="head" />

	<link rel="stylesheet" href="/templates/<?php echo $this->template; ?>/styles.min.css" />
</head>

<body>
	<!-- <jdoc:include type="message" /> -->

	<div class="page">
		<div class="bg">
			<img src="images/bg.jpg" alt="" />
		</div>

		<!-- <div class="content">
			<ul class="links">
				<li>
					<a href="//www.airbnb.com/rooms/10076468?guests=1&s=41&user_id=37486863&ref_device_id=6d0c466b2ac2dc4c" target="_blank">VIlla deluxe Pirin Golf Bansko</a>
				</li>

				<li>
					<a href="//www.airbnb.com/rooms/15171487?guests=1&s=41&user_id=37486863&ref_device_id=6d0c466b2ac2dc4c" target="_blank">Shalet deluxe Pirin Golf Bansko</a>
				</li>

				<li>
					<a href="//www.airbnb.com/rooms/15710960?guests=1&s=41&user_id=37486863&ref_device_id=6d0c466b2ac2dc4c" target="_blank">Chalet luxery Pirin Golf Bansko</a>
				</li>

				<li>
					<a href="//www.booking.com/hotel/bg/villa-ivn-pirin-golf.ru.html?label=gen173nr-1BCAsoF0IUdmlsbGEtaXZuLXBpcmluLWdvbGZIM2IFbm9yZWZoF4gBA5gBIcIBA2FibsgBEdgBAegBAagCBA;sid=b918bdf771410d23f43fc142b55a8605;dist=0&sb_price_type=total&type=total&amp" target="_blank">Villa Ivn Pirin Golf</a>
				</li>
			</ul>
		</div> -->

		<div class="powered">
			powered by <a href="//foxartbox.com" target="_blank">foxartbox.com</a>
		</div>
	</div>

	<form class="offline_login" action="<?php echo JRoute::_('index.php', true); ?>" method="post">
		<fieldset>
			<input name="username" type="text" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" autocomplete="off" autocapitalize="none" />

			<input type="password" name="password" class="inputbox" alt="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" />

			<?php if (count($twofactormethods) > 1) : ?>
				<input type="text" name="secretkey" class="inputbox" alt="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" />
			<?php endif; ?>

			<input type="submit" name="Submit" class="button login" value="<?php echo JText::_('JLOGIN'); ?>" />

			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="user.login" />
			<input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()); ?>" />

			<?php echo JHtml::_('form.token'); ?>
		</fieldset>
	</form>

	<!-- all scripts in one document -->
	<script src="/templates/<?php echo $this->template; ?>/all.min.js"></script>
</body>

</html>
