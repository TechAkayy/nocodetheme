# Pinegrow External Build Process with Vite - A Community Template

This template was built by following Adam Lowe's amazing Wordpress course which he generously (thanks Adam) later made it free on youtube [here](https://youtube.com/playlist?list=PLbMkvFuaj0FSYt0flBccIJQ3CNWDSb3MZ&si=OrsYxYo6z-vJzB1r). When following this course, instead of using vanilla css, I used Tailwind CSS and blocks from Tailwind UI.

This vite-powered external build process outputs both `tailwind.css` and `tailwind_for_wp_editor.css`, allowing the latter to be used in WordPress blocks.

While the `tailwind.css` build includes Tailwind preflight, `tailwind_for_wp_editor.css` omits the preflight styles since they do not integrate well with WordPress blocks.

A custom Vite plugin, `vite-plugin-pg.js`, serves this purpose and utilizes environment variables (`LIB` and `WP`) passed from the package.json script commands (`watch` and `watch-wp`). The `WP` environment variable is then used in `tailwind.config.js` to conditionally enable or disable Tailwind preflight.

The external build process is node-based, so it only works with the Pinegrow Desktop app. It provides users the advantage of customizing the Tailwind config to any extent, using Tailwind plugins, and employing @apply directives, among other features.

Note that this external build workflow is useful when the primary method of Tailwind styling is through the Pinegrow Desktop app rather than the Pinegrow WP Plugin. Once the external build is selected, reverting to the internal compiler will fallback to using basic Tailwind directives, so it is not recommended.

## Usage

1. Firstly, fork/download this repo to your local system. Along with Pinegrow Web Editor, you require two Pinegrow addons - Wordpress Builder & Tailwind Visual Editor. 

2. Create a new local-wp instance (the below screenshots are from my local wordpress site called `nocodetheme`), or you already have an existing wordpress instance running locally. 

3. Create a new `nocodetheme` themes folder, for eg, `/Users/techakayy/Local Sites/nocodetheme/app/public/wp-content/themes/nocodetheme`.

4. In Pinegrow, setup these variables via menu `Support > Settings`. To learn more about user variables, [click here](https://pinegrow.com/docs/wordpress/actions/theme-settings/#team-collaboration-with-user-variables).

<img width="875" alt="image" src="https://github.com/user-attachments/assets/986557c6-5dd9-4c6e-8c46-7c0c2fc66896">

5. In your new/existing local-wp wordpress instance, create an application password for local development to use the live preview feature of Pinegrow Wordpress Builder. To learn more, [click here](https://pinegrow.com/docs/wordpress/live-preview/). 

<img width="1030" alt="image" src="https://github.com/user-attachments/assets/c0781009-38f4-4e09-be08-364d43d6a8ef">

6. Then, use your username and application password in Pinegrow via menu `Wordpress > Theme/Plugin Settings`. Test API access to ensure it works. 

<img width="864" alt="image" src="https://github.com/user-attachments/assets/34702516-56d0-4169-b7bc-3e884ca70c73">

7. To export theme, use menu `Wordpress > Export the theme`. In your wordpress admin panel, activate the new theme. 

<img width="957" alt="image" src="https://github.com/user-attachments/assets/6b4802e2-e289-469f-b3b5-e4e0723974f2">

8. Visit your site now (screenshot with the default hello-world post below)!

9. Follow Adam Lowe's free [youtube course](https://www.youtube.com/playlist?list=PLbMkvFuaj0FSYt0flBccIJQ3CNWDSb3MZ) to learn how to build a classic wordpress theme with Pinegrow & Wordpress Builder. 

10. Use the free tailwindcss blocks that comes with Pinegrow Tailwind addon or any external ones (for eg, https://flowbite.com/blocks/ or https://daisyui.com/components/hero/) and use tailwindcss instead of vanilla css when following Adam's course.

<img width="1132" alt="image" src="https://github.com/user-attachments/assets/2a59a320-567d-4549-9b9e-40b73702614f">

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
