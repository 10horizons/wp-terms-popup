=== WP Terms Popup ===
Contributors: tentenbiz
Donate link: https://termsplugin.com
Tags: terms and conditions, privacy policy, terms of service, age verification, popup, age verify, conditions, policy, privacy, terms, agree, disclaimer, page, require, lightbox, legal, admin, message
Requires at least: 3.0.1
Tested up to: 4.9.6
Stable tag: 1.2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Make your visitors agree to your terms and conditions before entering your website.

== Description ==

**What the plugin does**

1. The plugin presents your visitors with a professional looking 'terms and conditions' popup that will make them agree to it before they can continue browsing your website. This is the easiest way to get your visitors to agree to your terms, privacy policy, etc. before entering your website.

2. Visitors will only see the terms once. If they agree to your terms, they will never see it again for the duration of time specified in your setting. If they don't agree to your terms, they have a choice to go to a URL of your choice. If visitors decide to access your website with a different URL, they will still see the terms until they agree to it. You have the choice whether to enable or disable popup to logged in users.

3. Assures you that no visitors could use your website before agreeing to your terms. This ensures that you won't be liable for what your visitors do on your website, and saves you from legal suits, among others.

4. Since version 1.0.2, you can create as many different "terms" as you want for different purposes (eg. Terms of use, Age verification, Privacy policy, Disclaimer, etc) and show them on any posts or pages.

**HOW TO USE**

After installing and activating the plugin, go to *Terms Popup->Add New* to create your first "terms". Go to *Settings->WP Terms Popup* to set the global settings. These settings apply to all terms popups. You can override these settings by editing each individual terms popup. 

* If you want to have one single popup for the whole site (site-wide), follow these steps:

1. Go to *Terms Popup->Add New* to create your first terms popup.

2. Go to *Settings->WP Terms Popup* and choose the terms popup you created in the step above from the dropdown you see. 

3. Make sure to tick where it says "Enable only one popup across the site (sitewide)".

4. Done.

* If you want to have different terms popup to be shown on different/selective POSTS or PAGES, follow these steps:

1. Go to *Terms Popup->Add New* to create as many terms popups as you want.

2. Go to the edit screen of post or page you want to show a popup, *Posts>All Posts* or *Pages>All Pages* and then click Edit on your desired posts/pages.

3. On the right hand side of the edit screen, you will see the WP Terms Popup option on the right side of the screen, like seen in this screeenshot: [see screenshot](https://ps.w.org/wp-terms-popup/assets/screenshot-5.gif). Configure according to your needs.

4. Done.

* If you want to show terms popups on **custom post types**, you have to use shortcode. 

* This is how to use shortcode: `[wpterms id="8"]` where "8" is the ID of the terms to be shown.

**To use shortcode or not to use shortcode?**

1. If you do not plan on showing popups on custom post types, it is best NOT to use shortcode. Follow instructions in the "How to use" section above. It is easier and more convenient.

2. If you plan on showing popups on custom post types and also want to show popups on posts/pages at the same time, it is best to only use shortcode.

3. If you plan on showing popups on custom post types only, the only option is to use shortcode.

**Shortcode vs Non-shortcode**

Shortcode:

* Shortcode uses Javascript.

* As long as visitor doesn't clear their cookie or use private browsing, once they click the "agree" button, the popup will remain hidden.

Non-shortcode (edit screen option as seen in this [screenshot](https://ps.w.org/wp-terms-popup/assets/screenshot-5.gif) and sitewide popup configured through *Settings->WP Terms Popup*):

* Uses pure PHP. This means your popup will always be shown to visitors even if they have Javascript disabled on their browser.

* You can configure how long the popup will be hidden until it is shown again (has expiry time).

**IMPORTANT!**

* To report bugs or seek support for the free version of the plugin, please do so on Wordpress.org forum.

* To seek support for the PRO version, please do so on the [plugin's website](https://termsplugin.com).

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

Yes, as long as you use the option available on post/page edit screen. Only our shortcode uses Javascript. Read "Shortcode vs Non-shortcode" section in the description above.

= Why should I use your plugin? =

1. For popups that are generated by shortcodes, we use vanilla JS! No jQuery, no frameworks, just plain javascript. It means our plugin doesn't rely on frameworks or library such as jQuery. We don't call external scripts, so the plugin loads a whole lot faster.

2. For popups that are generated by the options found on post/page edit screen (non-shortcode), we use pure PHP with no javascript! Which means if you use this option, your visitors won't be able to bypass the popup even if they turn off javascript on their browser. If you're worried about your visitors trying to game the system, use our plugin!

= What is the difference between free and PRO version? =

The PRO version is the same as the free version, except that the PRO version provides styling options for those who aren't well-versed in CSS.

= How can I style the popup? =

If you have knowledge in CSS, you can style it however you want whether by changing your theme's CSS file (preferred and advised method) or by editing the plugin's CSS file popup-style.css and terms.php file. However, we do not recommend the latter since your changes will be lost once you update the plugin. For a better and easier option, you can upgrade to our PRO version.

== Screenshots ==

1. Popup example
2. Another example of usage
3. Create as many as you want
4. Plugin settings (new feature added since v1.2.0)
5. Enable popup on individual page
6. PRO version

== Changelog ==

= 1.2.0 =
* Function prefix and name standardization.
* Improvement of file structure.
* Change in the structure of free version and PRO version of the plugin. PRO version now requires free version to be installed and active at the same time, to eliminate redundant updates. Easier for developers to update both free and pro versions, avoid user confusion.
* Removed fatal error produced by conflict with PRO version.
* Users now have the ability to set the opacity level behind popup.

= 1.1.4 =
* Added a wrapping container class called 'termscontentwrapper' to the popup body content so that users can apply custom styling to it, like giving the content a fixed height so that visitors don't have to scroll to see the buttons.

= 1.1.3 =
* Shortcode bug fixed. Shortcode is now making use of HTML5 localStorage. 

= 1.1.2 =
* Shortcode warning issued while we are fixing the bug.

= 1.1.1 =
* Tidying up the options page in the backend. Now warning shows if no terms popup has been created.

= 1.1.0 =
* Shortcode addition. Shortcode can now be used to show popups on custom post types.
* Backend GUI improvement.
* Easier to understand instructions in the readme file.

= 1.0.2 =
* New icon added for terms popup custom post type.

= 1.0.1 =
* Terms is converted into custom post type.
* Added user friendly option on post and page edit screen.
* User can now create as many different terms as they want and choose to display the terms on any post or page that they desire.

= 0.1.0 =
* Initial release.

== Upgrade Notice ==

= 1.2.0 =
Users can now change the opacity level behind popup as they like. PRO version now requires free version to be installed and active at the same time, to avoid confusion and conflicts. No more fatal error upon running the free version with the PRO version.

= 1.1.4 =
By request, the content of popup now has a wrapping container class called 'termscontentwrapper' so that users can apply custom styling to it, like giving the content a fixed height so that visitors don't have to scroll to see the buttons.

= 1.1.3 =
Users can now use shortcode again. Bug has been fixed. Shortcode requires Javascript to be enabled on visitor's browser.

= 1.1.2 =
Shortcode warning is issued while we are fixing the bug. Please do not use shortcode for now until it is fixed.

= 1.1.1 =
Minor update. Tidying up of the options page.

= 1.1.0 =
Big update. More user friendly interface. Users can now use shortcode to show popup on custom post types.

= 1.0.2 =
Minor change. New icon for terms popup as custom post type.

= 1.0.1 =
User can now create as many different terms as they want and choose to display the terms on any post or page that they desire.

= 0.1.0 =
Initial release.
