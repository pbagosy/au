<?php if (!defined('IN_PHPBB')) exit; if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>

</div>

<div id="wrapfooter">
	<?php if ($this->_rootref['U_ACP']) {  ?><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]</span><br /><br /><?php } ?>

	<span class="copyright"><?php echo (isset($this->_rootref['CREDIT_LINE'])) ? $this->_rootref['CREDIT_LINE'] : ''; ?>

	<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?></span>
</div>
			</div>
			<!-- /right panel -->
		</div>
	</div>
</div>
<!-- footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-5">
				<section class="contact">
					<div class="clearfix"><span>Holmes</span> <span>610-583-9960</span></div>
					<div class="clearfix"><span>Blue Bell</span> <span>610-277-7251</span></div>
					<div class="clearfix"><span>Wilmington, DE</span> <span>302-482-3480</span></div>
				</section>
			</div>
			<div class="col-lg-9 col-sm-7 text-right">
				<section class="links">
<a href="http://au.aycdev.com/">Home</a> |
<a href="http://au.aycdev.com/store-hours-directions/">Store Hours/Directions</a> |
<a href="http://au.aycdev.com/contact-us/">Contact Us</a> |
<a href="http://au.aycdev.com/about-us/">About Us</a><br class="hidden-xs" />
<a href="http://au.aycdev.com/new-releases/">New Releases</a> |
<a href="http://au.aycdev.com/games/">Games</a> |
<a href="http://au.aycdev.com/special-events/">Special Events</a> |
<a href="http://au.aycdev.com/calendar/">Calendar</a> |
<a href="http://au.aycdev.com/links/">Links</a> |
<a href="/forums">Forums</a> |
<a href="http://store.alternateu.com">Online Store</a>				</section>
				<section class="copyright">&copy; 2014 Alternate Universes. All Rights Reserved. | Site design by <a href="http://paul.bagosy.com" target="_blank">Paul Bagosy</a></section>
			</div>
		</div>
	</div>
</footer>
</body>
</html>