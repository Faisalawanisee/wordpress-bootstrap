			<footer role="contentinfo" id="footer">
				<div id="inner-footer" class="clearfix">		          
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
				<?php /* ?>	<nav class="clearfix">
						<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav> <?php  
					<p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>*/ ?>
				<p class="pull-right"><a href="<?php echo bloginfo('home'); ?>/wp-admin" id="" >login</a></p>			
				<p class="attribution">Desarrollado por <a href="http://sinetiks.com" id="" >sinetiks.com</a></p>
				</div> <!-- end #inner-footer -->
			</footer> <!-- end footer -->
		</div> <!-- end #container -->
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<!-- remove this for production -->
		<script src="//localhost:35729/livereload.js"></script>
	</body>
</html>