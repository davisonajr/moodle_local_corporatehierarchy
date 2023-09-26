# Default local plugin to Run Vue in Moodle

This plugin is an example on how to use Vue to deal with front-end in Moodle plugins.

It uses Vue 2.7.4 version and build files using Moodle _Gruntfile.js_ properties.

The app runs with the `/build/app.min.js` file and the Vue components are declared in `/rc/components/*.vue.js`, using this termination to identify then, since we cannot use _.vue_ files here.

More information on how to declare components of Vue you can find in [components-registration]{https://br.vuejs.org/v2/guide/components-registration}.

## Instalation

before you build the Vue files, it is necessary to run `npm install` on the root of plugin.

Make sure you already run `npm install -g grunt-cli` and that you installed all Required node modules of moodle by running `npm install grunt` on the root of Moodle.

## Grunt building

To build the files and Vue components, run at the plugin root:

```grunt amd --force```

- this compiles your amd modules AND transpiles from es6 to es5

if npm says you don't have grunt installed in moodle package.json file, then run `npm install grunt`
