<?php
namespace ThemeCheck;
?>
		<div class="container">
		<hr>
			<footer>
				<div class="row">
					<div class="col-xs-4" style="line-height:52px;">
						&copy; Peoleo <?php echo date("Y");?>
					</div>
					<div class="col-xs-4" style="text-align:center;">
						<a href="https://github.com/themecheck/themecheck"><img src="<?php echo TC_HTTPDOMAIN;?>/img/github48.png" alt="themecheck on github"><br/>Github</a>
						<br><br><a href="http://www.joomla.org" rel="nofollow">joomla.org</a>
						<br><a href="http://wordpress.org" rel="nofollow">wordpress.org</a>
						<br><a href="http://owasp.org" rel="nofollow">owasp.org</a>
					</div>
					<div class="col-xs-4" style="text-align:right;line-height:52px">
						<?php 
						if (!empty($controller->samepage_i18n[I18N::getCurLang()])){
							$langs="";
							foreach ($controller->samepage_i18n as $l=>$url) {
								if ($l == I18N::getCurLang()) $langs .= strtoupper($l).' | ';
								else $langs .= '<a href="'.$url.'">'.strtoupper($l).'</a> | '; 
							}
							echo trim($langs,' |');
						}?>
						<br/>
						<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fthemecheck.org&amp;width=65&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65&amp;appId=244478959009718" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:65px; float:right;" allowTransparency="true"></iframe>
					</div>
				</div>
				<p>
				</p>
			</footer>
		</div>
		<script src="<?php echo TC_HTTPDOMAIN;?>/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo TC_HTTPDOMAIN;?>/js/vendor/bootstrap-filestyle.min.js"></script>
		<script src="<?php echo TC_HTTPDOMAIN;?>/js/plugins.js"></script>
		<script src="<?php echo TC_HTTPDOMAIN;?>/js/main.js"></script>
	</body>
</html>