// Evento install: se activa cuando se instala el Service Worker
self.addEventListener('install', event => {
    event.waitUntil(
        // Abre una nueva caché llamada 'my-cache' y agrega los recursos a cachear
        caches.open('my-cache').then(cache => {
            return cache.addAll([
                // Lista de recursos a cachear
                '/',
                '/inicio.html',
                '/img/logo.jpeg',
                '/styles.css',
                // Agrega más recursos según sea necesario
            ]);
        })
    );
});

// Evento fetch: se activa cuando la página web solicita un recurso
self.addEventListener('fetch', event => {
    event.respondWith(
        // Busca la solicitud en la caché
        caches.match(event.request).then(response => {
            // Si el recurso está en caché, responde con él desde la caché
            if (response) {
                return response;
            }
            // Si el recurso no está en caché, realiza la solicitud a la red
            return fetch(event.request);
        })
    );
});
