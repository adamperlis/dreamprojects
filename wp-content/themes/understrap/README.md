# UnderStrap WordPress Theme Framework

Website: [https://understrap.com](https://understrap.com)

Child Theme Project: [https://github.com/understrap/understrap-child](https://github.com/understrap/understrap-child)

## Development Environment
- Start MAMP
- Go to ~/code/dreamprojects/wp-content/themes/understrap
- Run `gulp watch -bs`
- Load `localhost` in browser.
- If you encounter a "Primordials Error" its likely because of an incompatability with the latest version of node. Try switching node versions to `nvm use 11.0.0`

## Deployment
- Go to ~/code/dreamprojects/wp-content/themes/understrap
- Run `gulp dist`
- Take `zip` and upload through Wordpress Themes.
- Click `customize` and add the logo, and change the layout settings to be `full-width` `no-sidebar`.
- Go to WP-Engine > Settings and change the Post Processing rule to match your filepath i.e. `#https://dreamprojects\.co/wp-content/themes/dp-theme-1/img/DreamProjects_Template.sketch# => https://h3jar3vt2hpca9tb3tsy7fir-wpengine.netdna-ssl.com/wp-content/themes/dp-theme-1/img/DreamProjects_Template.sketch`this ensures the .sketch files goes through the CDN.

## Hosting
- WPEngine

## Domain
- Porkbun

## Update Plugin for Email Links to work correctly
Go to Plugins>Editor and select advanced-forms/core/core-entries.php

Look for this section and add a +1 to entry_id:

`function resolve_entry_id_tag( $output, $tag ) {
		if ( ! empty( $output ) || 'entry_id' != $tag ) {
			return $output;
		}

		$entry_id = isset( AF()->submission['entry'] ) ? AF()->submission['entry'] : '';
		return $entry_id+1;
	}
`
