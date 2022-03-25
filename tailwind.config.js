module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    theme: {
        extend: {
            fontFamily: {
                'inter': ['Inter', 'sans-serif'],
                'roboto-slab': ['Roboto Slab', 'serif']
            },
            backgroundImage: {
                'map-pattern': "url('/images/map-pattern.webp')",
                'line-pattern': "url('https://img.freepik.com/free-vector/topographic-contour-lines-map-seamless-pattern_1284-52862.jpg')"
            }
        },
    },
    plugins: [
    ],
}
