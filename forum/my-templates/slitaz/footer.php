		<?php do_action('bb_foot'); ?>
		</div>
		
	</div>

	<script type="text/javascript">
	function QRCodePNG(str, obj) {
		try {
			obj.height = obj.width += 300;
			return QRCode.generatePNG(str, {ecclevel: 'H'});
		}
		catch (any) {
			var element = document.createElement("script");
			element.src = "/my-templates/slitaz/qrcode.js";
			element.type ="text/javascript"; 
			element.onload = function() {
				obj.src = QRCode.generatePNG(str, {ecclevel: 'H'});
			};
			document.body.appendChild(element);
		}
	}
	</script>

	<div id="footer" role="contentinfo">
		Copyright &copy; <?php echo date('Y'); ?>
		<a href="http://www.slitaz.org/">SliTaz</a> Powered by 
		<a href="http://bbpress.org">bbPress</a> - Network:
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://pkgs.slitaz.org/">Packages</a>
		<a href="http://bugs.slitaz.org">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
		<p>
			<img src="/my-templates/slitaz/images/qr.png" alt="SliTaz @"
			 onmouseover="this.title = location.href"
			 onclick="this.src = QRCodePNG(location.href, this)" />
			<a href="http://twitter.com/slitaz">Twitter</a>
			<a href="http://www.facebook.com/slitaz">Facebook</a>
			<a href="http://distrowatch.com/slitaz">Distrowatch</a>
			<a href="http://en.wikipedia.org/wiki/SliTaz">Wikipedia</a>
			<a href="http://flattr.com/profile/slitaz">Flattr</a>
		</p>

		<!-- If you like showing off the fact that your server rocks -->
		<!-- <p class="showoff">
<?php
global $bbdb;
printf(
__( 'This page generated in %s seconds, using %d queries.' ),
bb_number_format_i18n( bb_timer_stop(), 2 ),
bb_number_format_i18n( $bbdb->num_queries )
);
?>
		</p> -->
	</div>

</body>
</html>
