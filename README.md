# Wordpress Plugin based on the Project "Data Honeycombs (Datenwaben)"
This plugin was developed for the [offical Open Data portal of Vienna](https://open.wien.gv.at/site/open-data-combs/) and is heavily stripped from the original project.
There is no admin dashboard, and there is only a small set of datacombs for the city is Vienna.
If you need another city, you can use the orginal code from Thomas to create the JSON Files.

##Original Code from Thomas Tursics
[Data honeycombs (Datenwaben)](https://github.com/tursics/data-dashboard)

## Current state
This code is as it is, it hast to be implemented in a rush, but it was security checked, so there should be not exploits.

## Requisites
Wordpress 3.8 and higher, FF, Chrome, Chromium, oder Opera, IE has some troubles, spinning the honeycombs.

##Configuration
Wordpress themes are using a lot of jQuery, CSS and JS, therefore we need to define on which page our JS and CSS will be loaded.
With this solution we interfere as less as possible with the theme.

Set the slug of your page in the **wp-config.php**.

*Example:*

**define( 'ADV_ODC_SLUG', 'open-data-combs' );**

## Contact
If you have question, ideas: [mail me](mailto:christian.buchhas@wien.gv.at) or [follow me](https://github.com/advbus).

If you find some Bugs, please don't sqash them, let 'em live :stuck_out_tongue_winking_eye:

## License
Copyright 2016 Thomas Tursics. Licensed under the [MIT License](../master/LICENSE).

Copyright 2017 Magistrat der Stadt Wien. Licensed under the [MIT License](../master/LICENSE).
