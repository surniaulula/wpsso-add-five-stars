=== WPSSO Add Five Stars ===
Plugin Name: WPSSO Add Five Stars
Plugin Slug: wpsso-add-five-stars
Text Domain: wpsso-add-five-stars
Domain Path: /languages
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.txt
Assets URI: https://surniaulula.github.io/wpsso-add-five-stars/assets/
Tags: schema, shortcode
Contributors: jsmoriss
Requires PHP: 7.0
Requires At Least: 5.0
Tested Up To: 5.8.2
WC Tested Up To: 5.8.0
Stable Tag: 1.1.0

Add a 5 star rating and review from the site organization if the Schema markup does not already have an 'aggregateRating' property.

== Description ==

<!-- about -->

**The WPSSO Add Five Stars add-on includes a 5 star rating and review from the site organization:**

1. If the Schema markup does not already have an 'aggregateRating' property.
2. If Google allows an 'aggregateRating' property for that Schema type.

**Note that Google allows an 'aggregateRating' property only for these Schema types and sub-types:**

* Book
* Course
* Event
* HowTo (includes Recipe)
* LocalBusiness
* Movie
* Product
* SoftwareApplication

If the Schema type in the Document SSO metabox is not one of these types or sub-types, then a 5 star rating and review will not be added.

<!-- /about -->

<h3>WPSSO Core Required</h3>

WPSSO Add Five Stars (WPSSO AFS) is an add-on for the [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/).

== Installation ==

<h3 class="top">Install and Uninstall</h3>

* [Install the WPSSO Add Five Stars add-on](https://wpsso.com/docs/plugins/wpsso-add-five-stars/installation/install-the-plugin/).
* [Uninstall the WPSSO Add Five Stars add-on](https://wpsso.com/docs/plugins/wpsso-add-five-stars/installation/uninstall-the-plugin/).

== Frequently Asked Questions ==

<h3 class="top">Frequently Asked Questions</h3>

* None.

<h3>Notes and Documentation</h3>

* None.

== Screenshots ==

== Changelog ==

<h3 class="top">Version Numbering</h3>

Version components: `{major}.{minor}.{bugfix}[-{stage}.{level}]`

* {major} = Major structural code changes / re-writes or incompatible API changes.
* {minor} = New functionality was added or improved in a backwards-compatible manner.
* {bugfix} = Backwards-compatible bug fixes or small improvements.
* {stage}.{level} = Pre-production release: dev &lt; a (alpha) &lt; b (beta) &lt; rc (release candidate).

<h3>Standard Version Repositories</h3>

* [GitHub](https://surniaulula.github.io/wpsso-add-five-stars/)

<h3>Development Version Updates</h3>

<p><strong>WPSSO Core Premium customers have access to development, alpha, beta, and release candidate version updates:</strong></p>

<p>Under the SSO &gt; Update Manager settings page, select the "Development and Up" (for example) version filter for the WPSSO Core plugin and/or its add-ons. Save the plugin settings and click the "Check for Plugin Updates" button to fetch the latest version information. When new development versions are available, they will automatically appear under your WordPress Dashboard &gt; Updates page. You can always reselect the "Stable / Production" version filter at any time to reinstall the latest stable version.</p>

<h3>Changelog / Release Notes</h3>

**Version 1.1.0 (2021/10/19)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Moved `allow_aggregate_rating()` and `allow_review()` filter methods to the `WpssoSchema` class.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v5.0.
	* WPSSO Core v9.2.1.

**Version 1.0.0 (2021/10/18)**

* **New Features**
	* Initial release.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.0.
	* WordPress v5.0.
	* WPSSO Core v9.2.0.

== Upgrade Notice ==

= 1.1.0 =

(2021/10/19) Moved `allow_aggregate_rating()` and `allow_review()` filter methods to the `WpssoSchema` class.

= 1.0.0 =

(2021/10/18) Initial release.

