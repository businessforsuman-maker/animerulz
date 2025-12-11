<?php
// This file is the redesigned slider.php with Tailwind CSS and a black & white old TV aesthetic.
?>
<div class="sectload">
<div
class="animerulz-slider-container relative w-full max-w-full mx-auto bg-black shadow-2xl overflow-hidden
filter grayscale transition-opacity duration-300 ease-in-out

h-[75vh]               /* desktop = 750px */

max-[1024px]:h-[73vh]  /* laptop/tablet = 650px */

max-[768px]:h-[71vh]   /* tablets = 550px */

max-[550px]:h-[69vh]   /* medium phones = 500px */

max-[400px]:h-[67vh]   /* small phones */

max-[375px]:h-[65vh]   /* smallest phones = 450px */
"
>


        <!-- The Swiper container will act as the "screen" -->
        <div class="swiper w-full h-full">
            <div class="swiper-wrapper" id="swiper-wrapper">
                <!-- Slides will be dynamically inserted here -->
            </div>
            <!-- Custom pagination positioned at the bottom center -->
            
        </div>

        <!-- TV Bezel/Frame Effect (using a simple border and shadow) -->
        <div class="absolute inset-0 border-[3px] md:border-[6px] border-black pointer-events-none z-20 shadow-[0_0_50px_rgba(0,0,0,0.9)_inset]"></div>

        <!-- Old TV Static/Dust Overlay Effect (Custom class for subtle noise/scanlines) -->
        <!-- NOTE: This effect is complex to achieve with pure Tailwind. A custom CSS class is recommended for production.
             For this example, we'll use a simple overlay and rely on the grayscale filter.
             If a custom class is allowed, it would be: <div class="tv-static-overlay"></div>
             Since it's not, we'll use a simple semi-transparent white overlay for a "dusty" look. -->
        <div class="absolute inset-0 bg-white opacity-[0.03] pointer-events-none z-10"></div>
    </div>
</div>

<!-- Removed the entire <style> block and replaced it with Tailwind classes in the HTML/JS -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Utility function to apply the loading class to the container
    function setLoadingState(isLoading) {
        const container = document.querySelector(".animerulz-slider-container");
        if (container) {
            if (isLoading) {
                container.classList.add("opacity-0");
                container.classList.remove("opacity-100");
            } else {
                container.classList.remove("opacity-0");
                container.classList.add("opacity-100");
            }
        }
    }

    // Initial loading state
    setLoadingState(true);

    async function fetchAnimeData() {
        try {
            let e = await fetch("/data/anime_details.json");
            if (!e.ok) throw Error(`HTTP ${e.status}`);
            let a = await e.json();
            return a.slice(0, 10);
        } catch (i) {
            return console.error("Failed to fetch anime data:", i), document.querySelector(".animerulz-slider-container").innerHTML = `
                <div class="flex flex-col items-center justify-center h-full text-white p-10">
                    <i class="fas fa-exclamation-triangle text-4xl text-red-500 mb-4"></i>
                    <p class="text-lg">Failed to load anime data.</p>
                    <p class="text-sm text-gray-400">Check console for details.</p>
                </div>`, [];
        }
    }

    async function populateSlider() {
        let e = document.querySelector(".animerulz-slider-container"),
            a = document.getElementById("swiper-wrapper"),
            i = await fetchAnimeData();
        if (0 === i.length) return;

        let t = [];
        for (let s of i) {
            let n = s.title || "Untitled";
            n.length > 40 && (n = n.substring(0, 37) + "…");
            let l = s.overview || "No description available.",
                o = s.backdrop_path || "https://via.placeholder.com/1920x1080/111/fff?text=No+Image",
                r = s.poster_path || "https://via.placeholder.com/200x300/111/fff?text=No+Poster",
                c = (s.genres || []).slice(0, 3),
                d = s.first_air_date ? s.first_air_date.substring(0, 4) : "N/A",
                p = s.vote_average ? Number(s.vote_average).toFixed(1) : "N/A",
                f = "movie" === s.type ? "Movie" : "TV Series",
                v = s.watch_now_link ? s.watch_now_link.startsWith("http") ? s.watch_now_link : `/${s.watch_now_link}` : "#",
                h = s.more_info_link ? s.more_info_link.startsWith("http") ? s.more_info_link : `/${s.more_info_link}` : "#",
                w = c.map(e => `<span class="text-xs font-medium px-2 py-1 border border-white/30 rounded-full bg-white/10 backdrop-blur-sm
    max-[375px]:text-[10px] max-[375px]:px-1.5 max-[375px]:py-[2px]">
    ${e}
</span>`).join("");

            t.push(`
                <div class="swiper-slide w-full h-full">
                    <div class="movie-card relative w-full h-full text-white">
                        <!-- Background Image (Now the main screen content) -->
                        <div class="bg-image absolute inset-0 bg-cover bg-center transition-transform duration-[8000ms] ease-out" style="background-image: url('${o}');">
                            <!-- Overlay for text readability (B&W version) -->
                            <div class="overlay absolute inset-0 bg-black/70"></div>
                        </div>

<div class="slide-content-wrapper 
    absolute inset-0 
    flex 
    items-center 
    justify-center                /* center on mobile */

    md:items-end                 
    md:justify-start             /* restore left alignment on desktop */

    p-4 md:p-16 

pb-0            /* remove bottom padding on ≤768px */
pt-8            /* add top padding on ≤768px */

md:pb-20        /* desktop unchanged */
md:pt-0         /* desktop no top padding */

    z-10
">

<div class="flex 
    flex-col
    items-center
    justify-center

    md:flex-row
    md:items-end
    md:justify-start

    mt-10 md:mt-0       /* ↓↓↓ this creates the downward shift only on mobile */

    w-full max-w-6xl mx-auto px-4 md:px-0
">


        
        <!-- Poster Container -->
        <div class="poster-container 
    w-48 h-72                  /* desktop */
    md:w-40 md:h-60            /* <1024px */
    max-[768px]:w-32 max-[768px]:h-48   /* 768px */
    max-[480px]:w-28 max-[480px]:h-40   /* 480px */
    max-[375px]:w-24 max-[375px]:h-36 

    flex-shrink-0 
    border-2 border-white shadow-lg 
    mb-0 md:mb-0 md:mr-12
    max-[768px]:mb-2
">

            <div class="poster-image w-full h-full bg-cover bg-center" style="background-image: url('${r}')"></div>
        </div>
        
        <!-- Slide Content -->
        <div class="slide-content flex flex-col items-center text-center space-y-1 md:space-y-2 md:items-start md:text-left md:max-w-xl">
                                    
                                    <!-- Title -->
                                    <div class="title 
    text-2xl max-[480px]:text-xl 
    max-[375px]:text-lg  
    md:text-5xl 
    font-extrabold leading-tight text-white mb-2
">
${n}</div>
                                    
                                    <!-- Genres -->
                                    <div class="genres flex flex-wrap gap-2">${w}</div>
                                    
                                    <!-- Meta -->
                                   <div class="meta flex items-center text-sm md:text-base text-gray-300 font-medium space-x-3
    max-[375px]:text-xs max-[375px]:space-x-1">
                                        <span class="type after:content-['•'] after:ml-3">${f}</span>
                                        <span class="year after:content-['•'] after:ml-3">${d}</span>
                                        <span class="rating flex items-center space-x-1 bg-white/10 px-2 py-0.5 rounded-full
    max-[375px]:space-x-0.5 max-[375px]:px-1.5 max-[375px]:py-[2px] max-[375px]:text-xs">
                                            <i class="fa fa-star text-yellow-400 text-xs" aria-hidden="true"></i> 
                                            <span class="text-white">${p}</span>
                                        </span>
                                    </div>
                                    
<div class="overview text-sm md:text-base text-gray-200 leading-relaxed line-clamp-3
    max-[375px]:text-xs
    max-[768px]:!mb-2">
    ${l}
</div>

<!-- Buttons -->
<div class="buttons flex gap-4 pt-0 md:pt-2">
    <a href="${v}" 
       class="watch-now flex items-center space-x-2 px-3 py-1 text-sm md:text-base font-semibold 
              bg-white text-black border border-white hover:bg-gray-200 transition duration-300
              max-[375px]:px-2 max-[375px]:py-1 max-[375px]:text-xs">
        <i class="fas fa-play"></i>
        <span>Watch Now</span>
    </a>

    <a href="${h}" 
       class="more-info flex items-center space-x-2 px-3 py-1 text-sm md:text-base font-semibold 
              bg-transparent text-white border border-white hover:bg-white/10 transition duration-300
              max-[375px]:px-2 max-[375px]:py-1 max-[375px]:text-xs">
        <i class="fas fa-info-circle"></i>
        <span>More Info</span>
    </a>
</div>


                                    <!-- Mobile Navigation (Kept for functionality) -->
                                    <div class="cw-nav-mobile hidden md:flex gap-2 pt-4">
                                        <button class="btn cw-prev p-2 bg-white/10 text-white rounded-full hover:bg-white/20 transition" aria-label="Previous">
                                            <i class="fa-solid fa-circle-chevron-left text-xl"></i>
                                        </button>
                                        <button class="btn cw-next p-2 bg-white/10 text-white rounded-full hover:bg-white/20 transition" aria-label="Next">
                                            <i class="fa-solid fa-circle-chevron-right text-xl"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `);
        }

        a.innerHTML = t.join("");
        setLoadingState(false);

        new Swiper(".animerulz-slider-container .swiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: ".cw-next",
                prevEl: ".cw-prev"
            },
            on: {
                init: function () {
                    // Custom class for active bullet to make it stand out in B&W
                    document.querySelectorAll('.swiper-pagination-bullet-custom').forEach(bullet => {
                        if (bullet.classList.contains('swiper-pagination-bullet-active')) {
                            bullet.classList.add('!bg-white', '!border-white');
                        }
                    });
                },
                slideChangeTransitionEnd: function () {
                    // Update custom class on slide change
                    document.querySelectorAll('.swiper-pagination-bullet-custom').forEach(bullet => {
                        bullet.classList.remove('!bg-white', '!border-white');
                        if (bullet.classList.contains('swiper-pagination-bullet-active')) {
                            bullet.classList.add('!bg-white', '!border-white');
                        }
                    });
                }
            }
        });
    }
    populateSlider();
</script>
