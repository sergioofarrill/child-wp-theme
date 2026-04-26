<?php /* Template Name: Blog */ ?>

<?php get_header(); ?> 

<div class="bg-gray-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <!-- Encabezado de la sección -->
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">From the blog - Se Habla Español</h2>
      <p class="mt-2 text-lg leading-8 text-gray-300">Cosas de mi cabeza</p>
    </div>

    <!-- Grid de Posts -->
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
         <!-- Query para los posts -->
       <?php 
        //Determina en qué página estamos
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        // posts por página y exclusión de palabra "code"
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'paged'          => $paged,
            's'              => '-code', // El prefijo "-" excluye la palabra en la búsqueda
        );

        $blog_query = new WP_Query($args);

        if ( $blog_query->have_posts() ) : 
            while ( $blog_query->have_posts() ) : $blog_query->the_post(); 
      ?> 
        <article class="flex flex-col items-start justify-between">
        <!-- Imagen Destacada -->
            <div class="relative w-full">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('medium_large', ['class' => 'aspect-video w-full rounded-2xl bg-gray-100 object-cover sm:aspect-2/1 lg:aspect-3/2']); ?>
                <?php else: ?>
                    <!-- Imagen aleatoria de Unsplash usando el ID del post para que no cambie al refrescar -->
                    <img 
                    src="https://picsum.photos/seed/wp-post-<?php the_ID(); ?>/800/450.jpg" 
                    alt="Placeholder" 
                    class="aspect-video w-full rounded-2xl bg-gray-800 object-cover sm:aspect-2/1 lg:aspect-3/2"
                    >
                <?php endif; ?>
                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
            </div>

          <div class="max-w-xl">
            <!-- Metadata: Fecha y Categoría -->
            <div class="mt-8 flex items-center gap-x-4 text-xs">
              <time datetime="<?php echo get_the_date('c'); ?>" class="text-gray-400">
                <?php echo get_the_date(); ?>
              </time>
              <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="relative z-10 rounded-full bg-gray-800 px-3 py-1.5 font-medium text-indigo-400 hover:bg-gray-700">' . esc_html( $categories[0]->name ) . '</a>';
                }
              ?>
            </div>

            <!-- Título y Extracto -->
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-white group-hover:text-gray-300">
                <a href="<?php the_permalink(); ?>">
                  <span class="absolute inset-0"></span>
                  <?php the_title(); ?>
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-400">
                <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
              </p>
            </div>

            <!-- Autor -->
            <div class="relative mt-8 flex items-center gap-x-4">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 40, '', '', ['class' => 'h-10 w-10 rounded-full bg-gray-800'] ); ?>
              <div class="text-sm leading-6">
                <p class="font-semibold text-white">
                  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                    <span class="absolute inset-0"></span>
                    <?php the_author(); ?>
                  </a>
                </p>
                <p class="text-gray-400"><?php echo get_the_author_meta('description'); // O un campo personalizado para el cargo ?></p>
              </div>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
        <!-- 3. Paginación Simple con Clases Tailwind -->
      <div class="col-span-full mt-12 flex justify-center gap-x-4">
        <?php 
          echo paginate_links(array(
              'total'        => $blog_query->max_num_pages,
              'current'      => $paged,
              'format'       => '?paged=%#%',
              'prev_text'    => '<span class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">« Anterior</span>',
              'next_text'    => '<span class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">Siguiente »</span>',
              'type'         => 'plain',
          ));
        ?>
      </div>

      <?php wp_reset_postdata(); else : ?>
          <p class="text-white">No se encontraron artículos.</p>
      <?php endif; ?>
    </div>
  </div>
</div>
  
<?php get_footer(); ?>