/* Font Awesome 6 — CDN loader (sem dependência de kit/token) */
(function () {
    if (document.getElementById('fa-main') || document.getElementById('fa-cdn')) return;
    var l = document.createElement('link');
    l.id = 'fa-cdn';
    l.rel = 'stylesheet';
    l.crossOrigin = 'anonymous';
    l.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css';
    document.head.appendChild(l);
}());
