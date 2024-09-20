# Pinegrow External Build Process with Vite - A Community Template

This template was built by following Adam Lowe's amazing Wordpress course which he generously (thanks Adam) later made it free on youtube [here](https://youtube.com/playlist?list=PLbMkvFuaj0FSYt0flBccIJQ3CNWDSb3MZ&si=OrsYxYo6z-vJzB1r). When following this course, instead of using vanilla css, I used Tailwind CSS and blocks from Tailwind UI.

This vite-powered external build process outputs both `tailwind.css` and `tailwind_for_wp_editor.css`, allowing the latter to be used in WordPress blocks.

While the `tailwind.css` build includes Tailwind preflight, `tailwind_for_wp_editor.css` omits the preflight styles since they do not integrate well with WordPress blocks.

A custom Vite plugin, `vite-plugin-pg.js`, serves this purpose and utilizes environment variables (`LIB` and `WP`) passed from the package.json script commands (`watch` and `watch-wp`). The `WP` environment variable is then used in `tailwind.config.js` to conditionally enable or disable Tailwind preflight.

The external build process is node-based, so it only works with the Pinegrow Desktop app. It provides users the advantage of customizing the Tailwind config to any extent, using Tailwind plugins, and employing @apply directives, among other features.

Note that this external build workflow is useful when the primary method of Tailwind styling is through the Pinegrow Desktop app rather than the Pinegrow WP Plugin. Once the external build is selected, reverting to the internal compiler will fallback to using basic Tailwind directives, so it is not recommended.

## Usage

In your new/existing local-wp wordpress instance, create an application password for local development to the use live preview feature of Pinegrow Wordpress Builder. To learn more, [click here](https://pinegrow.com/docs/wordpress/live-preview/). 

<img width="1030" alt="image" src="https://github.com/user-attachments/assets/c0781009-38f4-4e09-be08-364d43d6a8ef">

Then, use your username and application password in Pinegrow Wordpress Builder via menu `Wordpress > Theme/Plugin Settings`.

<img width="864" alt="image" src="https://github.com/user-attachments/assets/34702516-56d0-4169-b7bc-3e884ca70c73">

Also, setup these variables via menu `Support > Settings`. To learn more about user variables, [click here](https://pinegrow.com/docs/wordpress/actions/theme-settings/#team-collaboration-with-user-variables). 

<img width="875" alt="image" src="https://github.com/user-attachments/assets/986557c6-5dd9-4c6e-8c46-7c0c2fc66896">

### Start the builds in watch mode

```bash
npm run dev # chains multiple watch commands
```

### Preview

```bash
npm run now # build & preview
```

### Build (for non-wordpress sites)

```bash
npm run build
```
