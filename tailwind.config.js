/** Tailwind config for RPS home. Compiles to assets/css/tailwind.css.
 *  Build:  npx tailwindcss@3 -c tailwind.config.js -i ./assets/css/tailwind-input.css -o ./assets/css/tailwind.css --minify
 */
module.exports = {
  content: [
    './index.php',
    './partials/**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        rps: {
          pink:     '#EC008C',
          pinkdark: '#A1005E',
          green:    '#3DB54A',
          amber:    '#FBB040',
          amberdark:'#A16207',
          navy:     '#1B1464',
          blue:     '#2E3192',
          ink:      '#0a0a12',
          panel:    '#12121f',
        },
      },
      fontFamily: {
        display: ['"Clash Display"', 'sans-serif'],
        body: ['"Clash Grotesk"', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
