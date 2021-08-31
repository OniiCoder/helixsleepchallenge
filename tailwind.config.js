
module.exports = {
  purge: [
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      center: true,
      padding: '1rem'
    },
    extend: {
      fontFamily: {
        cursive: ['Bungee', 'cursive'],
        sans_serif: ['Noto Sans', 'sans-serif']
      },
      colors: {
        'custom-gray': '#F2F2F2'
      },
    }
  },
  variants: {
    extend: {},
  },
  plugins: [
    function ({addUtilities}) {
        const extendUnderline = {
            '.blue-underline': {
                'text-decoration': 'underline',
                'text-decoration-color': '#0D6EF0',
                'text-decoration-thickness': '4px'
            },
            
        }
        addUtilities(extendUnderline)
    }
]
}
