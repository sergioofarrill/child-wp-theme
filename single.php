<?php get_header(); ?>

    <main class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-3xl px-6 lg:px-8">
        <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Metadata y Título -->
        <div class="text-center">
            <time datetime="<?php echo get_the_date('c'); ?>" class="text-sm text-gray-400">
            <?php echo get_the_date(); ?>
            </time>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">
            <?php the_title(); ?>
            </h1>
            
            <div class="mt-6 flex items-center justify-center gap-x-4">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', '', ['class' => 'h-8 w-8 rounded-full bg-gray-800'] ); ?>
            <span class="text-sm font-medium text-indigo-400"><?php the_author(); ?></span>
            </div>
        </div>

        <!-- Imagen Destacada (o Paisaje Aleatorio) -->
        <div class="mt-16 relative w-full">
            <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('full', ['class' => 'aspect-video w-full rounded-2xl object-cover shadow-2xl']); ?>
            <?php else: ?>
            <img src="https://picsum.photos/seed/wp-post-<?php the_ID(); ?>/1200/675" 
                class="aspect-video w-full rounded-2xl object-cover shadow-2xl" alt="Landscape fallback">
            <?php endif; ?>
        </div>

        <!-- Contenido del Post -->
        <div class="mt-16 prose prose-invert prose-indigo lg:prose-xl mx-auto">
            <?php the_content(); ?>
        </div>

        <!-- Etiquetas/Categorías al final -->
        <div class="mt-16 pt-8 border-t border-gray-800">
            <?php the_tags('<ul class="flex gap-2 text-xs text-gray-400"><li>', '</li><li>', '</li></ul>'); ?>
        </div>

        <!-- Navegación entre Posts -->
        <div class="mt-20 py-10 border-t border-gray-800">
            <div class="flex flex-col sm:flex-row justify-between gap-y-6 sm:gap-y-0">
                
                <!-- Post Anterior -->
                <div class="flex-1 text-left">
                <?php 
                    $prev_post = get_previous_post();
                    if (!empty($prev_post)): ?>
                    <p class="text-xs font-semibold text-indigo-400 uppercase tracking-widest">Anterior</p>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="mt-2 block text-lg font-medium text-white hover:text-indigo-300 transition-colors">
                        <span class="inline-block transition-transform group-hover:-translate-x-1">←</span> 
                        <?php echo esc_html($prev_post->post_title); ?>
                    </a>
                <?php endif; ?>
                </div>

                <!-- Post Siguiente -->
                <div class="flex-1 text-right">
                <?php 
                    $next_post = get_next_post();
                    if (!empty($next_post)): ?>
                    <p class="text-xs font-semibold text-indigo-400 uppercase tracking-widest">Siguiente</p>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="mt-2 block text-lg font-medium text-white hover:text-indigo-300 transition-colors">
                        <?php echo esc_html($next_post->post_title); ?> 
                        <span class="inline-block transition-transform group-hover:translate-x-1">→</span>
                    </a>
                <?php endif; ?>
                </div>

            </div>
        </div>


        <?php endwhile; ?>
    </div>
    </main>
</div>

<?php get_footer(); ?>
