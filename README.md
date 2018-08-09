Boostrap Site Template
======================

### Requirements

- [Node.js](http://nodejs.org/download/)
- [Npm](https://www.npmjs.com/)

### Uses

- [GulpJS](https://gulpjs.com/) for building Sass styles and uglifying javascript files

Installation
------------


$ npm install


Developing
------------

livereload is handled by Browser Sync

Watch the change of .scss files and build the .css

```bash
$ gulp watch
```

Any vendor package installed with npm must be declared in gruntfile.js


------------

Build the project to minify assets, live reload and watch changes

```bash
$ gulp
```
