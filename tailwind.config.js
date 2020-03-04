module.exports = {
  theme: {
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1440px',
      // => @media (min-width: 1280px) { ... }
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
        lightgray: '#6B6A68',
        midgray: '#707070',
        darkgray: '#241F20'
      }
    },
    fontFamily: {
      sans: ['Roboto'],
      display: ['Raleway', 'sans-serif'],
      body: ['Roboto', 'sans-serif'],
    },
  },
  variants: {},
  plugins: [],
}
