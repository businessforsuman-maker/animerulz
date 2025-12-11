<?php
session_start();
require_once __DIR__ . '/config.php';
$title = "9anime Website (Official) >> Watch Free Anime 2025 in Multi Languages";
$description = "9Anime is a popular anime streaming website that is widely used by most of the anime lovers. Here you can watch all your favorite anime videos like Movies, TV Series, OVA, ONA, and AMVs for free with English SUBBED and DUBBED.";
$keywords = "9anime, 9anime website, 9anime official, 9anime 2025, 9anime watch anime, 9anime free anime, watch anime online, anime streaming site, best anime website 2025, free anime streaming, anime online HD, watch anime in multi languages, english sub anime, english dubbed anime, anime dub 2025, anime sub 2025, latest anime episodes, anime movies online, anime tv series, watch ova online, watch ona online, anime amv streaming, high quality anime streaming, fast anime streaming, anime without ads, new anime releases 2025, trending anime 2025, anime website alternative, anime streaming free 2025, best anime platform, anime site multi audio, anime in hindi, anime in tamil, anime in telugu, anime multi language streaming, anime app alternative, 9anime apk alternative, 9anime replacement, official anime streaming free, anime watch platform, unlimited anime online, anime episodes free, hd anime 1080p, 4k anime online";
include('header.php');
include('slider.php');
?>
<style>
.sectload{position:relative;min-height:150px;overflow:hidden}.sectload::before{content:'';position:absolute;top:50%;left:50%;width:60px;height:60px;margin:-30px 0 0 -30px;border-radius:50%;background:radial-gradient(farthest-side,#fff 94%,#0000) top/6px 6px no-repeat,conic-gradient(#0000 30%,#fff);-webkit-mask:radial-gradient(farthest-side,#0000 calc(100% - 6px),#000 0);mask:radial-gradient(farthest-side,#0000 calc(100% - 6px),#000 0);animation:.8s linear infinite loading;z-index:999}@keyframes loading{to{transform:rotate(1turn)}}.sectload::after{content:'';position:absolute;inset:0;background:#141414;z-index:998}.sectload>*{opacity:0!important;transform:translateY(15px);transition:opacity .7s .2s,transform .7s .2s}.sectload.loaded::after,.sectload.loaded::before{opacity:0;pointer-events:none}.sectload.loaded>*{opacity:1!important;transform:translateY(0)!important}.section-loading::before{display:none!important}.section-loading{min-height:auto!important}.sharethis-inline-share-buttons{flex:2;display:flex;justify-content:center;gap:.5rem;flex-wrap:wrap;margin-top:20px}.view-more-link{display:flex;align-items:center;margin-top:35px;gap:6px;color:#b755d1;text-decoration:none;font-size:14px;font-weight:500;transition:color .2s}.view-more-link:hover{color:#b755d1}.view-more-link i{font-size:12px}@media (max-width:768px){.sharethis-inline-share-buttons{justify-content:center}.view-more-link{font-size:12px}.view-more-link i{font-size:10px}.desktop-icon,.desktop-text{display:none!important}.mobile-icon{display:inline-block!important;font-size:18px!important;color:#b755d1;line-height:1}}@media (min-width:769px){.mobile-icon{display:none!important}}.two-column-section{width:100%;margin:0 auto;padding:0 1rem;box-sizing:border-box}.section-header{margin-top:0!important;padding-top:0!important;height:35px!important}.two-column-wrapper{display:flex;justify-content:space-between;align-items:flex-start;width:100%;gap:0;flex-wrap:nowrap}.left-column{flex:1 1 65%;min-width:300px;max-width:100%}.right-column{flex:1 1 30%;min-width:260px;max-width:100%}@media (max-width:1070px){.two-column-wrapper{flex-wrap:wrap;gap:0}.left-column,.right-column{flex:1 1 100%!important;min-width:100%!important}.right-column{order:-1;margin-bottom:1.5rem}}@media (max-width:768px){.two-column-section{padding:0 .75rem}}.share-container{background:#111;border-radius:12px;padding:20px;margin:20px auto 5px;display:flex;max-width:1000px;width:95%;box-sizing:border-box;box-shadow:0 4px 15px rgba(0,0,0,.3)}.share-content{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:40px}.share-info{display:flex;align-items:center;gap:15px}.share-icon{width:50px;height:50px;border-radius:50%;object-fit:cover;background-color:#f5e0a9;padding:2px}.share-text{display:flex;flex-direction:column;justify-content:center}.share-title{margin:0;font-size:18px;font-weight:600;color:#69e68e}.share-subtitle{margin:0;font-size:13px;color:#a9a9a9}@media (max-width:1200px){.share-container{display:flex;justify-content:center;align-items:center}.share-content{flex-direction:column;justify-content:center;align-items:center;width:100%;text-align:center;gap:0}}
</style>
<div class=sectload>
<div class=share-container>
<div class=share-content>
<div class=share-info>
<img class=share-icon src=/images/share-it.gif alt="Share Icon">
<div class=share-text>
<h3 class=share-title>Love this site?</h3>
<p class=share-subtitle>Share it with your friends!</p>
</div>
</div>
<div class=sharethis-inline-share-buttons></div>
</div>
</div>
<?php include('continue_watching_section.php'); ?>
<div id=js-trending-animes class=section-loading>
<div class=language-block>
<div class=section-header style=display:flex;justify-content:space-between;align-items:center>
<h3 class=language-title><i class="fa-solid fa-arrow-trend-up"></i>Trending</h3>
</div>
<div class="content-scroll-container swiper swiper-trending">
<div class="content-scroll-wrapper swiper-wrapper"></div>
<div class=swiper-button-prev></div>
<div class=swiper-button-next></div>
</div>
</div>
</div>
</div>
<div class=sectload>
<section class=latest-episode-a>
<div id=js-latest-episodes class=section-loading>
<div class=language-block>
<div class=section-header>
<h3 class=language-title><i class="fas fa-clock"></i>Latest Episodes</h3>
<a href=latest-episodes class=view-more-link>
<span class=desktop-text>View More</span>
<i class="fa-solid fa-chevron-right desktop-icon"></i>
<i class="fa-solid fa-caret-right mobile-icon"></i>
</a>
</div>
<div class="content-scroll-container swiper swiper-latest-episodes">
<div class="content-scroll-wrapper swiper-wrapper"></div>
<div class=swiper-button-prev></div>
<div class=swiper-button-next></div>
</div>
</div>
</div>
</section>
</div>
<div class=sectload>
<section class=most-popular-a>
<div id=js-most-popular class=section-loading>
<div class=language-block>
<div class=section-header>
<h3 class=language-title><i class="fas fa-fire"></i>Most Popular</h3>
<a href=most-popular class=view-more-link>
<span class=desktop-text>View More</span>
<i class="fa-solid fa-chevron-right desktop-icon"></i>
<i class="fa-solid fa-caret-right mobile-icon"></i>
</a>
</div>
<div class="content-scroll-container swiper swiper-most-popular">
<div class="content-scroll-wrapper swiper-wrapper"></div>
<div class=swiper-button-prev></div>
<div class=swiper-button-next></div>
</div>
</div>
</div>
</section>
</div>
<div class=sectload>
<section class=most-favorite-a>
<div id=js-most-favorite class=section-loading>
<div class=language-block>
<div class=section-header>
<h3 class=language-title><i class="fas fa-heartbeat"></i>Most Favorite</h3>
<a href=most-favorite class=view-more-link>
<span class=desktop-text>View More</span>
<i class="fa-solid fa-chevron-right desktop-icon"></i>
<i class="fa-solid fa-caret-right mobile-icon"></i>
</a>
</div>
<div class="content-scroll-container swiper swiper-most-favorite">
<div class="content-scroll-wrapper swiper-wrapper"></div>
<div class=swiper-button-prev></div>
<div class=swiper-button-next></div>
</div>
</div>
</div>
</section>
</div>
<div class=sectload>
<section class=top-airing-a>
<div id=js-top-airing class=section-loading>
<div class=language-block>
<div class=section-header>
<h3 class=language-title><i class="fas fa-tv"></i>Top Airing</h3>
<a href=top-airing class=view-more-link>
<span class=desktop-text>View More</span>
<i class="fa-solid fa-chevron-right desktop-icon"></i>
<i class="fa-solid fa-caret-right mobile-icon"></i>
</a>
</div>
<div class="content-scroll-container swiper swiper-top-airing">
<div class="content-scroll-wrapper swiper-wrapper"></div>
<div class=swiper-button-prev></div>
<div class=swiper-button-next></div>
</div>
</div>
</div>
</section>
</div>
<div class=sectload>
<section class=latest-completed-a>
<div id=js-latest-completed class=section-loading>
<div class=language-block>
<div class=section-header>
<h3 class=language-title><i class="fas fa-check-circle"></i>Latest Completed</h3>
<a href=latest-completed class=view-more-link>
<span class=desktop-text>View More</span>
<i class="fa-solid fa-chevron-right desktop-icon"></i>
<i class="fa-solid fa-caret-right mobile-icon"></i>
</a>
</div>
<div class="content-scroll-container swiper swiper-latest-completed">
<div class="content-scroll-wrapper swiper-wrapper"></div>
<div class=swiper-button-prev></div>
<div class=swiper-button-next></div>
</div>
</div>
</div>
</section>
</div>
<div class=sectload>
<section class=upcoming-animes style=margin-bottom:20px>
<div id=js-upcoming-animes class=section-loading>
<div class=language-block>
<div class=section-header>
<h3 class=language-title><i class="fas fa-calendar-check"></i>Top Upcoming Animes</h3>
<a href=top-upcoming-animes class=view-more-link>
<span class=desktop-text>View More</span>
<i class="fa-solid fa-chevron-right desktop-icon"></i>
<i class="fa-solid fa-caret-right mobile-icon"></i>
</a>
</div>
<div class="content-scroll-container swiper swiper-upcoming-animes">
<div class="content-scroll-wrapper swiper-wrapper"></div>
<div class=swiper-button-prev></div>
<div class=swiper-button-next></div>
</div>
</div>
</div>
</section>
</div>
<section class=two-column-section style=margin-bottom:40px>
<div class=two-column-wrapper>
<div class=left-column>
<?php include('schedule.php'); ?>
</div>
<div class=right-column>
<?php include('trending.php'); ?>
</div>
</div>
</section>
<script>
document.addEventListener("DOMContentLoaded",function(){var e;let a="<?=htmlspecialchars(BASE_MAIN_API_URL, ENT_QUOTES)?>/api/v2/hianime/";async function t(){let e=null;try{let t=await fetch("../data/footer-data.json?t="+Date.now(),{cache:"no-cache"});if(t.ok){let i=await t.json();if(i?.generatedAtReadable){let n=i.generatedAtReadable.split(",")[0].trim(),[l,c,d]=n.split("/").map(Number),o=new Date(d,c-1,l),r=new Date,p=new Date(r.getFullYear(),r.getMonth(),r.getDate()),u=new Date(o.getFullYear(),o.getMonth(),o.getDate());u.getTime()===p.getTime()&&(e=i)}}}catch(v){}await s(e,a)}async function s(e,a){if(e&&e.sections){let t=e.sections;f("js-trending-animes",t.trending||[],!0),f("js-latest-episodes",t.latestEpisodes||[]),f("js-upcoming-animes",t.topUpcoming||[]),f("js-most-popular",t.mostPopular||[]),f("js-most-favorite",t.mostFavorite||[]),f("js-top-airing",t.topAiring||[]),f("js-latest-completed",t.latestCompleted||[]),i(86400),document.querySelectorAll(".anime-card, .content-card").forEach(e=>{e.style.transitionDelay=`${.2*Math.random()}s`});return}let s=!0,l=n(`${a}home`),c=n(`${a}category/most-popular`),d=n(`${a}category/most-favorite`),o=n(`${a}category/top-airing`),r=n(`${a}category/recently-added`);async function p(e,a,t=!1,i=!1){try{let n=await a;if(200!==n.status){s=!1;return}let l=[];i?"js-trending-animes"===e?l=n.data.trendingAnimes||[]:"js-latest-episodes"===e?l=n.data.latestEpisodeAnimes||[]:"js-upcoming-animes"===e&&(l=n.data.topUpcomingAnimes||[]):l=n.data?.animes||[];let c=l.map(e=>({...e,type:e.type||"TV"})),d="js-most-popular"===e||"js-most-favorite"===e||"js-top-airing"===e||"js-latest-completed"===e?c.slice(0,10):c;f(e,d,t)}catch(o){s=!1;let r=document.getElementById(e);r&&r.insertAdjacentHTML("beforeend",'<p style="color:#fff;text-align:center;">Failed to load.</p>')}}await p("js-trending-animes",l,!0,!0),await p("js-latest-episodes",l,!1,!0),await p("js-upcoming-animes",l,!1,!0),await p("js-most-popular",c),await p("js-most-favorite",d),await p("js-top-airing",o),await p("js-latest-completed",r),s?i(3600):i(0),document.querySelectorAll(".anime-card, .content-card").forEach(e=>{e.style.transitionDelay=`${.2*Math.random()}s`})}function i(e=0){let a=[{name:"Cache-Control",value:e>0?`max-age=${e}, public`:"no-cache, no-store, must-revalidate"},{name:"Pragma",value:e>0?"public":"no-cache"},{name:"Expires",value:e>0?new Date(Date.now()+1e3*e).toUTCString():"0"}];a.forEach(({name:e,value:a})=>{let t=document.querySelector(`meta[http-equiv="${e}"]`);t||((t=document.createElement("meta")).setAttribute("http-equiv",e),document.head.appendChild(t)),t.setAttribute("content",a)})}async function n(e,a=3,t=1e3){for(let s=0;s<a;s++)try{let i=await fetch(e,{cache:"no-store"});if(!i.ok)throw Error(`HTTP ${i.status}`);return await i.json()}catch(n){if(s<a-1){await new Promise(e=>setTimeout(e,t));continue}throw n}}t();let l=null,c=null,d=new Map,o=window.innerWidth<=1400;function r(e,a){let t=e.querySelector(".preview-add-button");if(t){t.classList.toggle("added",a);let s=t.querySelector("i");s.className=a?"fas fa-check":"fas fa-plus"}}async function p(e,a){if(e&&"undefined"!==e){if(d.has(e)){r(a,d.get(e));return}try{let t=await fetch(`/add-watchlist.php?action=check&anime_id=${encodeURIComponent(e)}`),s=await t.json();s.success?(d.set(e,s.inWatchlist),r(a,s.inWatchlist)):(d.set(e,!1),r(a,!1))}catch(i){d.set(e,!1),r(a,!1)}}}async function u(e,a,t,s){if(!e||"undefined"===e)return;let i=d.get(e)||!1,n=i?"remove":"add";try{let l=new URLSearchParams({action:n,anime_id:e});"add"===n&&(t&&l.append("anime_title",t),s&&l.append("anime_poster",s));let c=await fetch("/add-watchlist.php",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:l}),o=await c.json();if("showLoginLink"===o.action){openLoginModal?.();return}o.success?(d.set(e,o.inWatchlist),r(a,o.inWatchlist),function e(a,t="success"){let s=document.getElementById("toastContainer");for(;s.children.length>3;)s.children[0].remove();let i=document.createElement("div");i.className=`toast ${t}`,i.innerHTML=`<i class="toast-icon fas ${"success"===t?"fa-check-circle":"fa-exclamation-circle"}"></i><span class="toast-text">${a}</span><button class="toast-close" aria-label="Close">&times;</button>`,s.appendChild(i),requestAnimationFrame(()=>i.classList.add("show"));let n=setTimeout(()=>{i.classList.remove("show"),i.addEventListener("transitionend",()=>i.remove(),{once:!0})},5e3);i.querySelector(".toast-close").onclick=()=>{clearTimeout(n),i.classList.remove("show"),i.addEventListener("transitionend",()=>i.remove(),{once:!0})}}(o.message,"success")):(d.set(e,o.inWatchlist||!1),r(a,o.inWatchlist||!1))}catch(p){console.error(p)}}let v={root:null,rootMargin:"200px",threshold:.1};function m(e){return`<a href="/${e.id}">
        <div class="anime-card" data-anime-id="${e.id}">
        <img class="anime-poster" data-src="${e.poster}" alt="${e.name}" loading="lazy">
        <div class="loader"><span></span></div>
        <div class="anime-info">
        <span class="anime-name">${e.name}</span>
        <div class="anime-details">
        ${e.episodes?.sub?`<span class="anime-detail"><i class="fas fa-closed-captioning"></i> ${e.episodes.sub}</span>`:""}
        ${e.episodes?.dub?`<span class="anime-detail"><i class="fas fa-microphone"></i> ${e.episodes.dub}</span>`:""}
        <span class="anime-detail"><i class="fas fa-tv"></i> ${e.type||"TV"}</span>
        </div>
        </div>
        </div>
        </a>`}function f(e,a,t=!1){let s=document.getElementById(e),i=s?.querySelector(".content-scroll-wrapper");if(!i)return;s.classList.add("section-loading");let n=new Set,d=a.filter(e=>!(!e.id||"undefined"===e.id||n.has(e.id))&&(n.add(e.id),!0));i.innerHTML=d.map((a,s)=>{if("js-upcoming-animes"===e){let i=(a.type||"TV").replace(/\(.*?\)/g,"").trim(),n=a.moreInfo?.aired||a.releaseDate||"TBA",l="TBA";if(n&&"N/A"!==n&&"TBA"!==n){let c=new Date(n);isNaN(c.getTime())||(l=c.toLocaleDateString("en-US",{month:"short",day:"numeric",year:"numeric"}).replace(/,/g,""))}return`<div class='content-card swiper-slide' 
             data-anime-id='${a.id}'
             data-anime-title='${a.name.replace(/'/g,"\\'")}'
             data-anime-poster='${a.poster}'>
                <div class='card-img'>
                    <a href='/${a.id}' class='card-link'>
                        <img data-src='${a.poster}' alt='${a.name}' loading='lazy'>
                        <div class='loader'><span></span></div>
                    </a>
                    <div class="upcoming-badge">Upcoming</div>
                    <div class="release-date-tag">${l}</div>
                    <div class="show-type">${i}</div>
                    <div class="views-count">Eye ${Math.floor(1e6*Math.random()).toLocaleString()}</div>
                </div>
                <div class='card-content'>
                    <p class='card-title'><a href='/${a.id}'>${a.name}</a></p>
                    <div class="info"><span><b>${i}</b></span></div>
                </div>
                <div class='preview-modal'>
                    <div class='preview-content'>
                        <h3 class='preview-title'>${a.name}</h3>
                        <div class='preview-sub-dub' style="color:#8b5cf6;font-weight:bold;">UPCOMING ANIME</div>
                        <div class='preview-details'></div>
                        <div class='preview-additional-info'></div>
                        <div class='preview-genres'>
                            <span class='icon'><i class="fas fa-tags"></i></span>
                            <span class='genres-list'></span>
                        </div>
                        <div class='preview-buttons'>
                            <a href='/${a.id}' class='preview-play-button'><i class="fa-solid fa-circle-info"></i> View Details</a>
                            <a href='javascript:void(0)' class='preview-add-button' 
       onclick="event.preventDefault();
                const c = this.closest('.content-card');
                handleWatchlistAction(c.dataset.animeId, c, c.dataset.animeTitle, c.dataset.animePoster)">
       <i class="fas fa-plus"></i>
    </a>
                        </div>
                    </div>
                </div>
            </div>`}return function e(a,t=!1,s=!1,i=null,n=""){let l=(a.type||"TV").replace(/\(.*?\)/g,"").trim(),c=["HD","WEB-DL","CAM","Pre-DVD","BluRay","TS","4K"],d=c[Math.floor(Math.random()*c.length)],o=a.episodes?.sub??null,r=a.episodes?.dub??null,p=o??r,u=null!==p?`<div class="episode-tag">${p}</div>`:"",v="";return"js-trending-animes"!==n&&(null!==o||null!==r)&&(v='<div class="info">',null!==o&&(v+=`<span class="sub"><img src="/images/info-cc.svg" alt="Sub"> ${o}</span>`),null!==r&&(v+=`<span class="dub"><img src="/images/info-mic.svg" alt="Dub"> ${r}</span>`),v+=`<span><b>${l}</b></span>`,v+="</div>"),`<div class='content-card swiper-slide${s?" trending-card":""}' 
             data-anime-id='${a.id}'
             data-anime-title='${a.name.replace(/'/g,"\\'")}'
             data-anime-poster='${a.poster}'>
            <div class='card-img'>
                <a href='/${a.id}' class='card-link'>
                    <img data-src='${a.poster}' alt='${a.name}' loading='lazy'>
                    <div class='loader'><span></span></div>
                </a>
                <div class="show-type">${l}</div>
                <div class="views-count">Eye ${Math.floor(1e6*Math.random()).toLocaleString()}</div>
                ${s?`<div class="trending-number-large">${i}</div>`:""}
                <div class="quality-tag">${d}</div>
                ${u}
            </div>
            <div class='card-content'>
                <p class='card-title'><a href='/${a.id}'>${a.name}${t?" [Full]":""}</a></p>
                ${v}
            </div>
            <div class='preview-modal'>
                <div class='preview-content'>
                    <h3 class='preview-title'>${a.name}</h3>
                    <div class='preview-sub-dub'></div>
                    <div class='preview-details'></div>
                    <div class='preview-additional-info'></div>
                    <div class='preview-genres'>
                        <span class='icon'><i class="fas fa-tags"></i></span>
                        <span class='genres-list'></span>
                    </div>
                    ${t?"":`
                    <div class='preview-buttons'>
                        <a href='/watch/${a.id}' class='preview-play-button'><i class="fas fa-play"></i>Watch Now</a>
                        <a href='javascript:void(0)' class='preview-add-button' 
       onclick="event.preventDefault();
                const c = this.closest('.content-card');
                handleWatchlistAction(c.dataset.animeId, c, c.dataset.animeTitle, c.dataset.animePoster)">
       <i class="fas fa-plus"></i>
    </a>
                    </div>
                    `}
                </div>
            </div>
        </div>`}({...a,isSwiper:!0},!1,t,t?s+1:null,e)}).join(""),document.querySelectorAll(".content-scroll-container").forEach(e=>{new Swiper(e,{slidesPerView:"auto",spaceBetween:10,freeMode:{enabled:!0,momentumRatio:.8,momentumVelocityRatio:.6},navigation:{nextEl:e.querySelector(".swiper-button-next"),prevEl:e.querySelector(".swiper-button-prev")},breakpoints:{0:{slidesPerView:3,spaceBetween:10},480:{slidesPerView:4,spaceBetween:10},768:{slidesPerView:5,spaceBetween:10},1024:{slidesPerView:6,spaceBetween:10},1280:{slidesPerView:7,spaceBetween:10},1600:{slidesPerView:8,spaceBetween:10}}})}),function e(a){let t=new IntersectionObserver(e=>{e.forEach((e,a)=>{e.isIntersecting&&(setTimeout(()=>{let a=e.target;a.classList.add("loaded");let t=a.querySelector("img[data-src]");if(t&&(t.src=t.dataset.src,t.removeAttribute("data-src")),!o){let s=null;a.addEventListener("mouseenter",()=>{if(c!==a){c&&(c.classList.remove("active"),l===c&&(c.classList.remove("loading"),l=null)),c=a,a.classList.add("active");let e=a.getAttribute("data-anime-id");e&&"undefined"!==e&&(s=$(a,e))}}),a.addEventListener("mouseleave",()=>{c===a&&(a.classList.remove("active"),c=null,a.dataset.cancelLoad&&(a.dataset.cancelLoad(),delete a.dataset.cancelLoad),a.classList.contains("loading")&&(a.classList.remove("loading"),l===a&&(l=null)))})}},50*a),t.unobserve(e.target))})},v);a.forEach(e=>t.observe(e))}(i.querySelectorAll(".content-card")),s.classList.remove("section-loading")}function g(e,a){let t=a.info,s=a.moreInfo,i=t.stats.episodes?.sub||null,n=t.stats.episodes?.dub||null,l=(s.genres||["N/A"]).slice(0,2),c=(t.stats.type||"TV").replace(/\(.*?\)/g,"").trim(),d=t.stats.duration||"N/A",o=s.malscore||"N/A",r=s.aired||"N/A",v=(s.studios||"N/A").split(", ")[0],m=s.producers?.[0]||"N/A",f=e.closest(".content-card");if(!f)return;let g=f.getAttribute("data-anime-id");if(!g||"undefined"===g)return;let w=f.querySelector(".preview-modal");w.querySelector(".preview-title").textContent=t.name,w.querySelector(".preview-sub-dub").innerHTML=`
    ${i?`<span class='sub-dub-tag'>Sub: ${i}</span>`:""}
    ${n?`<span class='sub-dub-tag'>Dub: ${n}</span>`:""}
    `,w.querySelector(".preview-details").innerHTML=`
    <div class='preview-detail-item'><span class='icon'><i class='fas fa-clock'></i></span><span>${d}</span></div>
    <div class='preview-detail-item'><span class='icon'><i class='fas fa-tv'></i></span><span>${c}</span></div>
    `,w.querySelector(".preview-additional-info").innerHTML=`
    <div class='preview-additional-item'><span class='icon'><i class='fas fa-star'></i></span><span>${o}</span></div>
    <div class='preview-additional-item'><span class='icon'><i class='fas fa-calendar-alt'></i></span><span>${r}</span></div>
    <div class='preview-additional-item'><span class='icon'><i class='fas fa-video'></i></span><span>${v}</span></div>
    <div class='preview-additional-item'><span class='icon'><i class='fas fa-users'></i></span><span>${m}</span></div>
    `,w.querySelector(".genres-list").textContent=l.join(", ");let h=f.querySelector(".preview-add-button");if(h&&g&&"undefined"!==g){let $=t.name,y=a.poster||f.querySelector(".card-img img")?.src;h.replaceWith(h.cloneNode(!0));let b=f.querySelector(".preview-add-button");b.addEventListener("click",e=>{e.preventDefault(),u(g,f,$,y)}),s?.status?.includes("Not yet aired")||p(g,f)}}let w=new Map,h,$=(e=(e,t)=>{if(o||!t||"undefined"===t||l===e)return;if(l&&l!==e&&l.classList.remove("loading"),l=e,e.classList.add("loading"),w.has(t)){g(e,w.get(t)),e.classList.remove("loading"),l=null;return}let s=!1;return fetch(`${a}anime/${t}`,{cache:"no-store"}).then(e=>e.json()).then(a=>{s||200!==a.status||(w.set(t,a.data.anime),g(e,a.data.anime))}).catch(e=>{s||console.warn("Failed to load preview:",e)}).finally(()=>{e===l&&(e.classList.remove("loading"),l=null)}),e.dataset.cancelLoad=()=>{s=!0},e.dataset.cancelLoad},function(...a){h||(e.apply(this,a),h=!0,setTimeout(()=>h=!1,300))})}),function(){}();
 document.addEventListener("DOMContentLoaded",function(){
    const wraps=document.querySelectorAll(".sectload");
    new MutationObserver((m,obs)=>{for(let e of wraps)if(e.querySelector(".swiper-wrapper").children.length>0){e.classList.add("loaded")}}).observe(document.body,{childList:true,subtree:true});
});
function initializeFAQ(){document.querySelectorAll(".faq-question").forEach(e=>{e.addEventListener("click",function(){let e=this.nextElementSibling,t=e.classList.contains("open");document.querySelectorAll(".faq-answer").forEach(e=>{e.classList.remove("open")}),document.querySelectorAll(".faq-question").forEach(e=>{e.classList.remove("active")}),t||(e.classList.add("open"),this.classList.add("active"))})})}function decodeEmails(){document.querySelectorAll(".email").forEach(e=>{let t=e.getAttribute("data-user"),a=e.getAttribute("data-domain"),i=e.getAttribute("data-tld"),n=`${t}@${a}.${i}`;e.innerHTML=`<a href="mailto:${n}" style="color:#a855f7;text-decoration:underline">${n}</a>`})}window.addEventListener("load",function(){setTimeout(function(){let e=document.createElement("div");e.className="sectload",e.innerHTML='<div style="text-align:center;padding:40px;color:#fff">Loading...</div>';let t=document.querySelector("footer");t?document.body.insertBefore(e,t):document.body.appendChild(e),fetch("data/seo-content.php").then(e=>e.text()).then(t=>{e.innerHTML=t,e.classList.add("loaded"),initializeFAQ(),decodeEmails()}).catch(t=>{e.innerHTML='<div style="text-align:center;padding:40px;color:#fff">Content loaded</div>',e.classList.add("loaded")})},500)});
</script>
<script>
window.addEventListener("load",function(){setTimeout(function(){let e=document.querySelector(".share-container");if(!e)return;let t=document.createElement("div");t.className="sectload",t.innerHTML='<div style="text-align:center;padding:70px 20px;color:#fff">Loading Networks...</div>',e.parentNode.insertBefore(t,e.nextSibling),fetch("/data/lang-network.php?t="+Date.now(),{cache:"no-cache"}).then(e=>e.text()).then(e=>{let n=document.createElement("div");n.innerHTML=e;let l=n.querySelector("style");l&&!document.getElementById("lang-network-style")&&(l.id="lang-network-style",document.head.appendChild(l));let a=n.querySelector(".language-icons-section");if(a&&!document.querySelector(".language-icons-section")){if(document.body.appendChild(a),window.innerWidth>=1401){a.classList.remove("lang-hidden");let i=a.querySelector(".lang-toggle i");i&&(i.className="fa-solid fa-xmark")}a.addEventListener("click",function(e){if(!e.target.closest(".lang-toggle"))return;e.preventDefault(),this.classList.toggle("lang-hidden");let t=this.querySelector(".lang-toggle i");t&&(t.classList.toggle("fa-xmark"),t.classList.toggle("fa-ellipsis-vertical"))})}let o=n.querySelector(".networks-row-section");o&&(t.innerHTML=o.outerHTML,t.classList.add("loaded"),t.querySelectorAll(".network-icon-item").forEach((e,t)=>{e.style.opacity="0",e.style.animation="none",setTimeout(()=>{e.style.animation=`fadeInUp 0.5s forwards ${.1+.05*t}s`},50)}))}).catch(()=>{t.innerHTML='<div style="color:#f66;text-align:center;padding:50px">Failed to load networks</div>',t.classList.add("loaded")})},800)});
</script>
<?php include('footer.php'); ?>
