<?php /* Template Name: Link Page */ ?>

<?php get_header(); ?> 

 <div
      class="min-h-screen text-white flex items-center justify-center py-12 px-4"
    >
      <div class="max-w-md w-full mx-auto text-center">
        <!-- Profile Section -->
        <div class="mb-10">
          <img
            src="https://sergioofarrill.com/wp-content/uploads/2026/04/hero-img-scaled.jpg"
            alt="Sergio Profile Photo"
            class="w-32 h-32 mx-auto rounded-full border-4 border-white/30 object-cover shadow-xl"
          />
          <h1 class="text-3xl font-bold mt-6">Sergio O'Farrill</h1>
          <p class="text-gray-300 mt-2 max-w-xs mx-auto">
            Singer / Actor / Creator
          </p>
        </div>

        <!-- Social Media Icons -->
        <div class="flex justify-center gap-6 mb-12">
          <a
            href="https://instagram.com/sergioofarrill"
            target="_blank"
            class="text-3xl hover:scale-110 transition-transform"
            aria-label="Instagram"
          >
            <i class="fab fa-solid fa-instagram">&nbsp;</i>
          </a>
          <a
            href="https://www.tiktok.com/@sergioofarrill"
            target="_blank"
            class="text-3xl hover:scale-110 transition-transform"
            aria-label="Tiktok"
          >
            <i class="fab fa-solid fa-tiktok">&nbsp;</i>
          </a>
          <a
            href="https://www.youtube.com/@SergioOFarrillplus"
            target="_blank"
            class="text-3xl hover:scale-110 transition-transform"
            aria-label="Youtube"
          >
            <i class="fab fa-solid fa-youtube">&nbsp;</i>
          </a>
          <a
            href="https://www.imdb.com/es/name/nm2118602/"
            target="_blank"
            class="text-3xl hover:scale-110 transition-transform"
            aria-label="IMDB"
          >
            <i class="fab fa-solid fa-imdb">&nbsp;</i>
          </a>
          <a
            href="https://twitter.com/sergioofarrill"
            target="_blank"
            class="text-3xl hover:scale-110 transition-transform"
            aria-label="Twitter/X"
          >
            <i class="fab fa-solid fa-x-twitter">&nbsp;</i>
          </a>
          <a
            href="https://www.facebook.com/sergioofarrll/?locale=es_LA"
            target="_blank"
            class="text-3xl hover:scale-110 transition-transform"
            aria-label="Facebook"
          >
            <i class="fab fa-solid fa-facebook">&nbsp;</i>
          </a>

          <!-- Add more icons as needed: fa-youtube, fa-tiktok, fa-facebook, etc. -->
        </div>

        <!-- Main Links (Optional big buttons) -->
        <div class="space-y-4 mb-12">
          <a
            href="https://sergioofarrill.com"
            target="_blank"
            class="link-card bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 rounded-2xl py-4 px-6 text-left flex items-center gap-4"
          >
            <i class="fas fa-globe text-2xl"></i>
            <div>
              <div class="font-semibold">Visita mi Pagina</div>
            </div>
          </a>
          <!-- Add more big link cards here if you want -->
        </div>

        <!-- Latest Blog Posts Section -->
        <div class="text-left">
          <h2 class="text-xl font-semibold mb-6 flex items-center gap-2">
            <i class="fas fa-pen-nib"></i> Latest
          </h2>

          <div class="space-y-6">
            <!-- Blog Post 1 -->
             <?php
            // 1. Configurar los argumentos (cuántos posts quieres ver)
            $args = array(
                'posts_per_page' => 1, // Cambia el número según necesites
                'post_status'    => 'publish',
                'category__in' => array( 38, 40, 10, 20, 39, 7 )
            );
            // nueva consulta
            $latest_posts = new WP_Query($args);

            // Loop
            if ($latest_posts->have_posts()) : 
                while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
            <a href="<?php the_permalink(); ?> target="_blank" class="link-card block bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 rounded-2xl p-5"> 
                <div class="font-medium">
                    <?php the_title(); ?>
                </div>
                <div class="text-sm text-gray-400 mt-1">
                  • <?php echo get_the_date(); ?> •
                </div>
                <div class="text-gray-300 text-sm mt-3 line-clamp-2">
                   <?php the_excerpt(); ?>
                </div>
            </a>
                <?php endwhile;
                // Restaurar los datos originales de la página principal
                wp_reset_postdata(); 
            else : ?>
                <p>No hay publicaciones recientes.</p>
            <?php endif; ?>

            <!-- Blog Post 2 
          <a
            href="https://yourblog.com/post2"
            target="_blank"
            class="link-card block bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 rounded-2xl p-5"
          >
            <div class="font-medium">Another Recent Post Title</div>
            <div class="text-sm text-gray-400 mt-1">
              April 10, 2026 • 8 min read
            </div>
            <div class="text-gray-300 text-sm mt-3 line-clamp-2">
              Brief description of the post...
            </div>
          </a>

          -->

            <!-- Add more posts as needed (keep 3-5 for mobile cleanliness) -->
          </div>

          <a
            href="https://sergio-ofarrill.local/blog"
            target="_blank"
            class="mt-8 inline-block text-sm text-white/70 hover:text-white underline"
          >
            Ir al Blog →
          </a>
        </div>

        <!-- Footer -->
        <div class="mt-16 text-xs text-gray-500">
          Made with 💙 in Mexico City
        </div>
      </div>
    </div>

<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

<?php get_footer(); ?>