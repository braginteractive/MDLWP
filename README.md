## MDLWP - A Material Design Lite WordPress Theme

MDLWP is a Material Design WordPress theme(probably the first!) that uses Sass, Gulp, Bower, and of course Material Design Lite. 

[Live Demo](http://mdlwp.com/demo/)

[Setup Video](https://www.youtube.com/watch?v=1wVJn-Y2-CU)

#### MDLWP Plugins
Download free and premium plugins that add extra features and extend the functionality of MDLWP. 

- [Material Design Icons](http://mdlwp.com/downloads/material-design-icons/) - thousands of community-led icons
- [Material Design Login](http://mdlwp.com/downloads/material-design-login-form/) - take over the default WP login screens and turns them into Material Design forms
- [Material Design Portfolio](http://mdlwp.com/downloads/material-design-portfolio/) - Filterable portfolio layout for MDLWP
- [Material Design Social Sharing](http://mdlwp.com/downloads/material-design-social-sharing/) - Enables social sharing icons on indiviual posts
- [Material Design Masonry Layout](http://mdlwp.com/downloads/material-design-masonry-page-layout/) - Turn a page on your MDLWP powered site into a Pinterest style layout


#### Future Plans
- ~~WordPress customizer options~~ (v1.0.1)
- ~~add theme hooks~~ (v1.1.3)
- different page layouts (v1.1.0 - ribbon layout)
- integrate other MDL components

Do you have an idea? PRs welcome. 

#### For the Nerds
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

`gulp zip` - Creates a zipped file in the root of the theme. Ignores the bower_components and node_modules directories.

#### Contributors 
- [Mark Constable](https://github.com/markc) - github updater