=== WP Terms Popup ===
Contributors: tentenbiz, dalv8
Donate link: http://termsplugin.com
Tags: terms and conditions, privacy policy, terms of service, age verification, popup, age verify, conditions, policy, privacy, terms, agree, disclaimer, page, require, lightbox, legal, admin, message
Requires at least: 3.0.1
Tested up to: 4.9.1
Stable tag: 1.1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Make your visitors agree to your terms and conditions before entering your website.

== Description ==

**NOTE:** Bug relating to shortcode has been fixed!!

**What the plugin does**

1. The plugin presents your visitors with a professional looking 'terms and conditions' popup that will make them agree to it before they can continue browsing your website. This is the easiest way to get your visitors to agree to your terms, privacy policy, etc. before entering your website.

2. Visitors will only see the terms once. If they agree to your terms, they will never see it again for the duration of time specified in your setting. If they don't agree to your terms, they have a choice to go to a URL of your choice. If visitors decide to access your website with a different URL, they will still see the terms until they agree to it. You have the choice whether to enable or disable popup to logged in users.

3. Assure you that no visitors could use your website before agreeing to your terms. This makes sure you won't be liable for what your visitors do on your website. Saves you from legal suits, among others.

4. Since version 1.0.2, you can create as many different "terms" as you want for different purposes (eg. Terms of use, Age verification, Privacy policy, Disclaimer, etc) and show them on any posts or pages.

**HOW TO USE**

After installing and activating the plugin, go to *Terms Popup->Add New* to create your first terms popup. Go to *Settings->WP Terms Popup* to set the desired configuration for all terms popups. You can override these settings by editing each individual terms popup. 

* If you want to have one single popup for the whole site (site-wide), follow these steps:

1. Go to *Terms Popup->Add New* to create your first terms popup.

2. Go to *Settings->WP Terms Popup* and choose the terms popup you created in the step above from the dropdown you see. 

3. Make sure to tick where it says "Enable only one popup across the site (sitewide)".

* If you want to have different terms popup to be shown on different/selective POSTS or PAGES, follow these steps:

1. Go to *Terms Popup->Add New* to create as many terms popups as you want.

2. Go to the edit screen of post or page you want to show a popup, *Posts>All Posts* or *Pages>All Pages* and then click Edit on your desired posts/pages.

3. On the right hand side of the edit screen, you will see the WP Terms Popup option on the right side of the screen, like seen in this screeenshot: [see screenshot](https://ps.w.org/wp-terms-popup/assets/screenshot-5.gif). Configure according to your needs.

* If you want to show terms popups on **custom post types**, you have to use shortcode. 

* This is how to use shortcode: `[wpterms id="8"]` where "8" is the ID of the terms to be shown.

**To use shortcode or not to use shortcode?**

1. If you do not plan on showing popups on custom post types, it is best not to use shortcode. Follow instructions in no.1 and no.2 in the "How to use" section above. The feature was built for this purpose.

2. If you plan on showing popups on custom post types but also want to show popups on posts/pages at the same time, it is best to use shortcode only.

3. If you plan on showing popups on custom post types only, you have to use shortcode.

**Shortcode vs Non-shortcode**

Shortcode:

* Shortcode uses Javascript.

* As long as visitor doesn't clear their cookie or use private browsing, once they click the "agree" button, the popup will remain hidden.

Non-shortcode (traditional option as seen in this [screenshot](https://ps.w.org/wp-terms-popup/assets/screenshot-5.gif) and sitewide popup configured through *Settings->WP Terms Popup*):

* Uses pure PHP. This means your popup will always be shown to visitors even if they have Javascript disabled on their browser.

* You can configure how long the popup will be hidden until it is shown again (expiry time).

**IMPORTANT!**

* The FREE version of the plugin is handled by the plugin's original developer, Tentenbiz Solutions & Media. To report bugs or seek support, please do so on [the developer's website](http://tentenbiz.com). If you seek for support on the PRO plugin's website, the developer wouldn't see it!

* The PRO version of the plugin is handled by Dalv8. Problems with payment, PRO download links, and everything to do with the PRO version should be forwarded to Dalv8 via the [official PRO plugin's website](http://termsplugin.com). DO NOT seek for support relating to the free version on the PRO website!

* Need plugin customization just for your site? Head [over here](http://tentenbiz.com/contact/).

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wp-terms-popup` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Go to *Terms Popup->Add New* to create your first terms popup
4. Use the *Settings->WP Terms Popup* screen to configure the plugin
5. Style it if you know CSS and wish to do so. If you want easier styling options in the settings, our PRO version provides that.


== Frequently Asked Questions ==

= Is the popup responsive and viewable on mobile devices? =

Yes, the popup is responsive and will resize according to your browser size.

= Will my visitors be able to see the popup if they have Javascript disabled on their browser? =

Yes, if you don't use shortcode. Our traditional feature uses pure PHP, only our shortcode uses Javascript. Read "Shortcode vs Non-shortcode" section in the description above.

= Why should I use your plugin? =

Our traditional feature uses pure PHP (which means popup will show even with Javascript disabled), only our shortcode uses Javascript. Even so, we use plain Javascript with no reliance on frameworks or library such as jQuery. Which altogether means our plugin loads much faster.

= What is the difference between free and PRO version? =

The free version provides basic functionality of what the plugin does. The PRO version provides styling options for those who need it.

= How can I style the popup? =

If you have knowledge in CSS, you can style it however you want whether by changing your theme's CSS file (preferred and advised method) or by editing the plugin's CSS file popup-style.css and terms.php file. However, we do not recommend the latter since your changes will be lost once you update the plugin. For a better and easier option, you can upgrade to our PRO version.

== Screenshots ==

1. Popup example
2. Another example of usage
3. Create as many as you want
4. Plugin settings
5. Enable popup on individual page
6. PRO version

== Changelog ==

= 1.1.3 =
* Users can now use shortcode again like before. Bug has been fixed. Shortcode is now making use of HTML5 localStorage. Shortcode requires Javascript to be enabled on visitor's browser.

= 1.1.2 =
* Shortcode warning issued while we are fixing the bug.

= 1.1.1 =
* Tidying up the options page in the backend. Now warning shows if no terms popup has been created.

= 1.1.0 =
* Shortcode usage is now possible. Shortcode can now be used to show popups on custom post types.
* Backend GUI improvement.
* Easier to understand instructions in the readme file.

= 1.0.2 =
* New icon for terms popup custom post type.

= 1.0.1 =
* Terms is now converted into a custom post type.
* User can now create as many different terms as they want and choose to display the terms on any post or page that they desire.
* User friendly option on post and page screen.

= 0.1.0 =
* Initial release.

== Upgrade Notice ==

= 1.1.3 =
* Users can now use shortcode again like before. Bug has been fixed. Please read 'how to use' so that you understand the usage of the plugin's shortcode.

= 1.1.2 =
* Shortcode warning is issued while we are fixing the bug. Please do not use shortcode for now until it is fixed.

= 1.1.1 =
Minor update. Tidying up of the options page.

= 1.1.0 =
Big update. More user friendly interface. You can now use shortcode to show popup on custom post types.

= 1.0.2 =
Minor change only. New icon for terms popup custom post type.

= 1.0.1 =
User who wants to create as many different terms as they want and choose to display the terms on any post or page that they desire should upgrade to this version.

= 0.1.0 =
Initial release.
