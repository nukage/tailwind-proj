module.exports = {
    plugins: [
      require('postcss-import'),
      require('tailwindcss'),
      require('autoprefixer'),
      require('precss')

      // ALSO LOOK INTO CSSNANO TO MINIFY FOR PRODUCTION, IF I EVER COME BACK HERE....!!! https://flaviocopes.com/tailwind-setup/

      // require('@fullhuman/postcss-purgecss')(
      //   {
      //     content: [
      //       './public/index.html'
      //     ],
      //     defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
      //   })
    ]
  }