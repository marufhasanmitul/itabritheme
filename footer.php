<footer class="site-footer clearfix">
			<p>All Rights Reserved, <a href="#">Maruf Hasan mitul</a> &copy;2006 - <?php echo date('Y'); ?></p>
			<nav id="footer_nav">
			<?php
				$args =array(
					'theme_location' => 'footermenu'
				);
				
				wp_nav_menu($args); ?>
			</nav>
		</footer>
	</div>
    <?php wp_footer() ;?>
</body>
</html>