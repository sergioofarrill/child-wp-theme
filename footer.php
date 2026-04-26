<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>

		</div><!-- .site-content -->
            <!-- FOOTER  -->
        <footer class="bg-black py-12 border-t border-white/10">
            <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 text-center md:text-left">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="text-zinc-400 text-sm">
                © 2026 Sergio O'Farrill • Mexico City<br>
                <span class="text-blue-400">Kabah • 90's Pop Tour: El Antro • Happy Human</span>
                </div>
                <div>
                <p class="uppercase text-xs tracking-widest text-zinc-400 mb-2">SITE MAP</p>
                <div class="flex flex-wrap justify-center md:justify-start gap-x-6 text-sm text-zinc-400">
                    <a href="#home" class="hover:text-white">Home</a>
                    <a href="#photos" class="hover:text-white">Photos</a>
                    <a href="#about" class="hover:text-white">About</a>
                    <a href="#music" class="hover:text-white">Music</a>
                    <a href="#tour" class="hover:text-white">Tour Dates</a>
                    <a href="#adventures" class="hover:text-white">Adventures</a>
                    <a href="#contact" class="hover:text-white">Contact</a>
                </div>
                </div>
                <div class="text-xs text-zinc-500">Fully optimized for Google • Sitemap & robots.txt handled by WordPress</div>
            </div>
            </div>
        </footer>
		
		<!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
</div><!-- .tail-container -->

<?php wp_footer(); ?>
</body>
</html>
