# Font Awesome Iconpicker

Integrates the [Font Awesome Iconpicker](https://itsjavi.com/fontawesome-iconpicker/) with Drupal.

## Composer-based Installation

This is being worked on currently in the following issue: [Explore including fontawesome library with Composer](https://www.drupal.org/node/2839720).

## Manual Installation

  1. Download the [Font Awesome](http://fontawesome.io) library, and place it in a `libraries` folder in your site's docroot.
  2. Download the [Font Awesome Iconpicker](https://itsjavi.com/fontawesome-iconpicker/) library, and place it in a `libraries` folder in your site's docroot.
  3. After downloading and moving the files, you should see files in the following paths:
    - Font Awesome CSS: `docroot/libraries/fontawesome/css/font-awesome.min.css`
    - Iconpicker CSS: `docroot/libraries/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css`

## Usage
Font Awesome Iconpicker can be used on `Text (formatted)` field or `Text (plain)` fields.
After attaching either of the above fields to an entity, you would be able to use `Fontawesome Icon Picker` widget for those fields under *Manage form display* section.
You would also have to visit *Manage display* and configure the field to use field formatter `Fontawesome Icon Picker`.
