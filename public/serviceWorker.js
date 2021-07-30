const BRERACLUB = "brera-club-v1";

var CURRENT_CACHES = {
  prefetch: 'prefetch-cache-v' + BRERACLUB
};


const assets = [
  "/",
  "/about",
  "/contact",
  "/course",
  "/checkout",
  "/login",
  "/legal",  
]

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(BRERACLUB).then(cache => {
      return cache.addAll(assets)
    })
  )
});

self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
      caches.match(fetchEvent.request).then(res => {
        return res || fetch(fetchEvent.request)
      })
    )
});

