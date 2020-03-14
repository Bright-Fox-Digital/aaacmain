module.exports = {
  theme: {
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }
      
      'xxl': '1440px',
      
      'xxxl': '1680px',
      
      'hd': '1920px'
    },
    extend: {
      borderRadius: {
        'xl':'1em'
      },
      colors: {
        yellow: {
          default: '#FBA52C',
          darker: '#E18F00'
        },
        almostwhite: '#E5E4E0',
        lightgray: '#6B6A68',
        midgray: '#707070',
        darkgray: '#241F20',
        bggray: '#FCFBFB',
        headinggray: '#F5F5F5'
      }
    },
    fontFamily: {
      sans: ['Roboto'],
      display: ['Raleway', 'sans-serif'],
      body: ['Roboto', 'sans-serif'],
    },
  },
  variants: {},
  corePlugins: {
    container: false
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '491px',
          },
          '@screen md': {
            maxWidth: '617px',
          },
          '@screen lg': {
            maxWidth: '872px',
          },
          '@screen xl': {
            maxWidth: '969px',
          },
          '@screen xxl': {
            maxWidth: '1032px',
          },
          '@screen xxxl': {
            maxWidth: '1260px',
          },
          '@screen hd': {
            maxWidth: '1260px',
          },
        }
      })
    }
  ],
}
