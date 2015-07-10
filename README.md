MDLWP
===

## A Material Design Lite WordPress Theme

MDLWP is a Material Design WordPress theme(probably the first!) that uses Sass, Gulp, Bower, and of course Material Design Lite. 

#### Tools Included

For customization, basic knowledge of the command line and the following dependencies are required to use MDLWP:

- MDL ([http://www.getmdl.io/](http://www.getmdl.io/)) 
- Node ([http://nodejs.org/](http://nodejs.org/)) -`npm install`
- Gulp ([http://gulpjs.com/](http://gulpjs.com/)) - `npm install --global gulp`
- Bower ([http://bower.io/](http://bower.io/)) -`npm install -g bower`

#### Usage
After you've downloaded MDLWP, and run `npm install` and `gulp` from the command line you can start using gulp.

#### Gulp

###### 1) Navigate to your new theme
`cd /your-project/wordpress/wp-content/themes/your-new-theme`

###### 2) Gulp tasks available:

`gulp` - Automatically handle changes to CSS, javascript, php, and image optimization. Also Livereload!

`gulp scripts` - Concatenate and minify javascript files

`gulp sass` - Compile, prefix, and minify CSS files

`gulp bower` - Install bower components