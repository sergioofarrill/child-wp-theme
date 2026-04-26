<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?> 

  <!-- Popup de Region-->
<!-- Contenedor Principal (Overlay) -->
<div id="region-popup" class="hidden fixed bg-black/80 z-9999 backdrop-blur-md inset-0 items-center justify-center">
    
    <!-- Tarjeta del Popup -->
    <div class="bg-gray-950 p-7.5 rounded-xl text-center max-w-400px font-sans shadow-2xl mx-4 border">
        <h2 id="popup-title" class="text-xl font-bold mb-2">Selecciona tu idioma</h2>
        <p id="popup-text" class="text-gray-600">
            Detectamos que nos visitas desde <span id="user-country" class="font-bold text-blue-800">...</span>
        </p>
        
        <!-- Botones -->
        <div class="mt-12 flex flex-wrap gap-2.5 backdrop-blur-md inset-0 items-center justify-center">
            <button class="text-white font-bold py-2 px-4 rounded bg-linear-to-b from-indigo-900 to-indigo-700 hover:bg-blue-700" onclick="setLanguage('es'); return false;" class="px-5 py-2.5 cursor-pointer bg-[#007bff] text-white border-none rounded-[5px] hover:bg-blue-700 transition-colors">
                Español
            </button>
            <button class="text-white font-bold py-2 px-4 rounded bg-linear-to-b from-indigo-900 to-indigo-700 hover:bg-blue-700" onclick="setLanguage('en'); return false;" class="px-5 py-2.5 cursor-pointer bg-[#6c757d] text-white border-none rounded-[5px] hover:bg-gray-700 transition-colors">
                English
            </button>
        </div>
    </div>
</div>

  <!-- HERO (unchanged) -->
  <section id="home" class="min-h-screen relative flex items-center">
    <div class="absolute inset-0 z-0 parallax-bg bg-position-[center_top_10%]" style="background-image: url('https://sergioofarrill.com/wp-content/uploads/2026/04/hero-img-scaled.jpg');"></div>
    <div class="absolute inset-0 bg-linear-to-b from-black/20 via-black/70 to-black"></div>

    <div class="relative z-10 max-w-screen-2xl mx-auto px-6 lg:px-12">
      <div class="max-w-3xl">
        <div class="inline text-blue-400 text-sm font-medium tracking-[3px] uppercase mb-4">Mexico City • Singer • 90s Icon</div>
        <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold leading-none tracking-tighter">SERGIO<br>O'FARRILL</h1>
        <p class="mt-6 text-3xl text-blue-300">Kabah • Actor • 8× World Record Skydiver • Currently lighting up stages with 90's Pop Tour: El Antro</p>
        
        <div class="mt-12 flex flex-wrap gap-5">
          <a href="#music" class="px-10 py-5 bg-blue-400 hover:bg-blue-300 text-black font-semibold rounded-3xl text-lg flex items-center gap-3">
            SEE 90'S POP TOUR: EL ANTRO
          </a>
          <a href="#tour" class="px-10 py-5 border-2 border-white/80 hover:bg-white hover:text-black rounded-3xl text-lg font-medium">
            VIEW TOUR DATES
          </a>
        </div>
      </div>
    </div>

    <div class="absolute bottom-12 left-1/2 text-center text-xs tracking-widest text-blue-300">
      SCROLL TO DISCOVER<br>
      <span class="block animate-bounce mt-2 text-2xl">↓</span>
    </div>
  </section>

  <!-- ABOUT ME (unchanged) -->
  <section id="about" class="py-24 bg-gray-950">
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 grid md:grid-cols-12 gap-16">
        <div class="md:col-span-5 relative">
        <div class="z-0 parallax-layer rounded-3xl overflow-hidden" data-speed="0.3">
          <img src="https://sergioofarrill.com/wp-content/uploads/2026/04/Copy-of-kabah-01-scaled.jpg" alt="Sergio O'Farrill portrait" class="w-full">
        </div>
      </div>
      <div class="md:col-span-7">
        <span class="uppercase text-blue-400 text-sm tracking-widest">MY STORY</span>
        <h2 class="text-5xl font-semibold tracking-tighter mt-3 mb-8">About Me</h2>
        <div class="prose prose-invert text-lg text-gray-300">
          <p>Born in Mexico City, I started my musical journey at 14 as a member of the iconic pop group <strong>Kabah</strong>. We created unforgettable 90s hits and reunited for a massive tour with OV7 in 2015.</p>
          <p>Today, I proudly keep the 90s spirit alive as a key artist in the <strong>90's Pop Tour: El Antro</strong> — the special nightclub edition that turns arenas into the biggest 90s party in Latin America. Performing Kabah classics for new generations who are discovering our music.</p>
          <p>I'm also an <a href="https://www.imdb.com/name/nm2118602/" class="font-semibold hover:bg-blue-300" target="_blank">actor & TV host</a>, dedicated yogi, 8-time world record skydiver, motorcycle rider, world traveler, and I <a href="/blog" class="font-semibold hover:bg-blue-300" target="_blank">write sometimes</a>. Above all, I'm a very happy human living life to the fullest.</p>
        </div>
      </div>
      
    </div>
  </section>

  <!-- PHOTOS SECTION (unchanged) -->
  <section id="photos" class="py-24 bg-gray-900">
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12">
      <div class="text-center relative z-10 mb-12">
        <span class="uppercase text-blue-400 text-sm tracking-widest">VISUAL JOURNAL</span>
        <h2 class="text-5xl font-semibold tracking-tighter mt-2 pb-20">Moments I Capture</h2>
        <div class="flex justify-center">
        <p class="text-lg text-gray-300 text-center max-w-2xl leading-relaxed">
          I like using photography as a visual journal, a way to make sure I never forget this amazing world in which we live in.
        </p>
      </div>
      </div>
      
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="photo-card rounded-3xl overflow-hidden z-0 mt-20" data-speed="0.15"><img src="https://sergioofarrill.com/wp-content/uploads/2026/04/95FD1F8E-9C71-49A9-9EA4-A551294E1A17-scaled.jpg" alt="Stage performance" class="w-full aspect-4/5 object-cover"></div>
        <div class="photo-card rounded-3xl overflow-hidden z-0 " data-speed="0.25"><img src="https://sergioofarrill.com/wp-content/uploads/2026/04/IMG_0231-scaled.jpg" alt="Skydiving" class="w-full aspect-4/5 object-cover"></div>
        <div class="photo-card rounded-3xl overflow-hidden z-0 mt-20 " data-speed="0.1"><img src="https://sergioofarrill.com/wp-content/uploads/2026/04/GPTempDownload-scaled.jpg" alt="Motorcycle ride" class="w-full aspect-4/5 object-cover"></div>
        <div class="photo-card rounded-3xl overflow-hidden z-0 " data-speed="0.3"><img src="https://sergioofarrill.com/wp-content/uploads/2026/04/DSF2885-scaled.jpg" alt="Travel portrait" class="w-full aspect-4/5 object-cover"></div>
      </div>
    </div>
  </section>

  <!-- MUSIC SECTION (unchanged) -->
  <section id="music" class="py-24 bg-gray-900">
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12">
      <div class="text-center mb-16">
        <div>
          <span class="uppercase text-blue-400 text-sm tracking-widest">CHAPTER 01 • CURRENT PROJECT</span>
          <h2 class="text-5xl font-semibold tracking-tighter">90's Pop Tour: El Antro</h2>
        </div>
      </div>
      
      <div class="bg-black/60 rounded-3xl p-10 md:p-14 text-center">
        <p class="text-2xl mb-6 leading-relaxed">
          As a core member of Kabah, I’m currently performing across Latin America with the <strong>90's Pop Tour: El Antro</strong> — the ultimate nightclub experience that transforms stages into the biggest 90s party in Latin America.
        </p>
        <p class="max-w-2xl mx-auto text-gray-300 mb-10">
          From Auditorio Nacional to Guadalajara, Puebla, Monterrey, Guatemala and beyond, we’re bringing the nostalgia with Kabah hits that always get everyone dancing. It’s an honor to see new generations falling in love with our music.
        </p>
        
        <a href="https://www.instagram.com/90spoptour/" target="_blank" 
           class="inline-flex items-center gap-4 bg-blue-400 text-black px-12 py-6 rounded-3xl text-xl font-semibold hover:bg-blue-300">
          <span class="text-3xl">🎟️</span> FOLLOW THE TOUR &amp; GET TICKETS
        </a>
      </div>
    </div>
  </section>

  <!-- NEW TOUR DATES SECTION -->
  <section id="tour" class="py-24 bg-gray-950">
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 ">
      <div class="text-center mb-16">
        <span class="uppercase text-blue-400 text-sm tracking-widest">CHAPTER 02 • ON THE ROAD</span>
        <h2 class="text-5xl font-semibold tracking-tighter"> – 2026 Dates – </h2>
        <p class="max-w-md mx-auto mt-4 text-gray-400">Catch Kabah classics live. New generations + timeless nostalgia.</p>
      </div>

      <div id="tour-dates-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Dynamic cards will be populated by JS below -->
      </div>

      <div class="text-center mt-12 text-sm text-gray-400">
        More dates being added weekly. Follow <a href="https://www.instagram.com/90spoptour/" target="_blank" class="text-blue-400 hover:underline">@90spoptour</a> for updates.
      </div>
    </div>
  </section>

  <!-- ADVENTURES / HOBBIES (unchanged) -->
  <section id="adventures" class="py-24 bg-gray-900">
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12">
      <div class="text-center mb-16">
        <span class="uppercase text-blue-400 text-sm tracking-widest">CHAPTER 03 • PASSIONS</span>
        <h2 class="text-5xl font-semibold tracking-tighter">Adventures & Hobbies</h2>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-gray-900 rounded-3xl p-8 photo-card">
          <a href="https://www.youtube.com/playlist?list=PLGWF2QBhKCYRAjMhpM4V9YgHaDs4vtDtX" class="" target="_blank">
          <div class="text-6xl mb-6">🪂</div>
          <h3 class="text-2xl font-semibold">Skydiving</h3>
          <p class="mt-3 text-gray-400">8-time world record holder and freefly coach. Always with my head in the clouds.</p>
        </a>
        </div>
        <div class="bg-gray-900 rounded-3xl p-8 photo-card">
          <a href="https://www.youtube.com/playlist?list=PLGWF2QBhKCYTyoiNClR6JeNhIZaBAZcC8" class="" target="_blank">
          <div class="text-6xl mb-6">🏍️</div>
          <h3 class="text-2xl font-semibold">Motorcycle Rider</h3>
          <p class="mt-3 text-gray-400">Exploring the world on two wheels one mountain at a time.</p>
          </a>
        </div>
        <div class="bg-gray-900 rounded-3xl p-8 photo-card">
          <a href="https://www.youtube.com/playlist?list=PLGWF2QBhKCYRW27oivMUNF9hWkpsiWRpg" class="" target="_blank">
          <div class="text-6xl mb-6">🧘</div>
          <h3 class="text-2xl font-semibold">Yogi & Traveler</h3>
          <p class="mt-3 text-gray-400">Mindfulness, photography, and chasing sunsets across continents.</p>
          </a>
        </div>
        <div class="bg-gray-900 rounded-3xl p-8 photo-card">
          <a href="https://www.youtube.com/playlist?list=PLGWF2QBhKCYTNTCzHAJTkzV97HCLMwRPr" class="" target="_blank">
          <div class="text-6xl mb-6">🏂</div>
          <h3 class="text-2xl font-semibold">Snowboard</h3>
          <p class="mt-3 text-gray-400">Looking for powder, peaks and treelines around the world</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT (unchanged) -->
  <section id="contact" class="py-24 bg-black">
    <div class="max-w-screen-2xl mx-auto px-6 lg:px-12 grid md:grid-cols-2 gap-16">
      <div>
        <h2 class="text-5xl font-semibold tracking-tighter">Let's Connect</h2>
        <p class="mt-6 text-gray-400 text-lg">Booking • Collaborations • 90's Pop Tour inquiries</p>
        <div class="mt-12 space-y-8">
          <a href="#" id="email-link" class="flex gap-6 items-center group  hover:bg-blue-300 inline-flex items-center gap-4 bg-blue-400 text-black px-12 py-6 rounded-3xl  font-semibold">
          </a>
          <div class="flex gap-6 text-3xl">
            <a href="https://www.instagram.com/sergioofarrill" target="_blank" class="hover:text-blue-400">📷</a>
            <a href="https://www.instagram.com/kabah_oficial/" target="_blank" class="hover:text-blue-400">🎟️</a>
            <a href="mailto:carlos@jerryml.com" target="_blank" class="hover:text-blue-400">🎬</a>
            
          </div>
        </div>
      </div>
      
      <div class="bg-white/5 rounded-3xl p-8">
         <img src="https://sergioofarrill.com/wp-content/uploads/2026/04/contact-img.jpg" 
                class="aspect-video w-full rounded-2xl object-cover shadow-2xl" alt="fallback">
         <!--  
        <form action="https://formspree.io/f/your-id" method="POST">
          <input type="text" name="name" placeholder="Your name" class="w-full bg-transparent border border-white/30 rounded-2xl px-6 py-4 mb-4 focus:border-blue-400">
          <input type="email" name="email" placeholder="Email" class="w-full bg-transparent border border-white/30 rounded-2xl px-6 py-4 mb-4 focus:border-blue-400">
          <textarea name="message" rows="5" placeholder="Your message..." class="w-full bg-transparent border border-white/30 rounded-3xl px-6 py-4 focus:border-blue-400"></textarea>
          <button type="submit" class="mt-6 w-full py-5 bg-blue-400 text-black font-semibold rounded-3xl">SEND MESSAGE</button>
        </form>
        -->
      </div>
      
    </div>
  </section>

<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

<?php get_footer(); ?>