const imagemin = require('imagemin');
const webp = require('imagemin-webp');

imagemin(['/public/pictures/*.{jpg, png}', {
    destination: 'public/images11',
    plugins: [
        webp({ quality: 60 })
    ]
}])