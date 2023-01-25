=== WPSSO Add Five Stars for Google Rich Snippets ===
Plugin Name: WPSSO Add Five Stars
Plugin Slug: wpsso-add-five-stars
Text Domain: wpsso-add-five-stars
Domain Path: /languages
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.txt
Assets URI: https://surniaulula.github.io/wpsso-add-five-stars/assets/
Tags: google, schema, rich snippet, stars, ratings, reviews, aggregate
Contributors: jsmoriss
Requires Plugins: wpsso
Requires PHP: 7.2
Requires At Least: 5.4
Tested Up To: 6.1.1
Stable Tag: 1.3.0

Add a 5 star rating and review from the site organization if the Schema markup does not already have an 'aggregateRating' property.

== Description ==

<!-- about -->

**Includes a 5 Star Rating in Schema markup:**

1. If the Schema markup does not have an 'aggregateRating' property.
2. If Google allows an 'aggregateRating' property for that Schema type.

Google allows an 'aggregateRating' property for these Schema types and their sub-types:

* Book
* Course
* Event
* HowTo (includes Recipe)
* LocalBusiness
* Movie
* Product
* SoftwareApplication

If the Schema type in the Document SSO metabox is not one of these types (or one of their sub-types), then a 5 star rating cannot be added, as doing so would trigger an error in the Google search console. [See Google's Review snippet documentation for additional information.](https://developers.google.com/search/docs/advanced/structured-data/review-snippet)

<!-- /about -->

<h3>WPSSO Add Five Stars is a Fallback Solution</h3>

The Google's Review Snippet technical guidelines reminds us to:

> [Make sure the reviews and ratings you mark up are readily available to users from the marked-up page. It must be immediately obvious to users that the page has review content.](https://developers.google.com/search/docs/advanced/structured-data/review-snippet#technical-guidelines)

The WPSSO Add Five Stars add-on includes a 5 star rating *if the document Schema markup does not already have an 'aggregateRating' property*. It is always preferable to include actual ratings and reviews from your visitors and/or customers in the webpage. The WPSSO Add Five Stars add-on can be used in combination with any of the following third-party plugins and service APIs, or the [WPSSO Ratings and Reviews](https://wordpress.org/plugins/wpsso-ratings-and-reviews/) add-on.

**Suggested Rating and Review Plugins and Services:**

The [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/) supports a selection of plugins that provide ratings and reviews:

* WP-PostRatings
* WP Product Review
* Yotpo Social Reviews for WooCommerce
* WooCommerce
* [WPSSO Ratings and Reviews](https://wordpress.org/plugins/wpsso-ratings-and-reviews/)

The [WPSSO Core Premium plugin](https://wpsso.com/) also supports a selection of remote service APIs that provide ratings and reviews:

* Shopper Approved (Ratings and Reviews)
* Stamped.io (Ratings and Reviews)

<h3>WPSSO Core Required</h3>

WPSSO Add Five Stars (WPSSO AFS) is an add-on for the [WPSSO Core plugin](https://wordpress.org/plugins/wpsso/), which provides complete structured data for WordPress to present your content at its best on social sites and in search results – no matter how URLs are shared, reshared, messaged, posted, embedded, or crawled.

== Installation ==

<h3 class="top">Install and Uninstall</h3>

* [Install the WPSSO Add Five Stars add-on](https://wpsso.com/docs/plugins/wpsso-add-five-stars/installation/install-the-plugin/).
* [Uninstall the WPSSO Add Five Stars add-on](https://wpsso.com/docs/plugins/wpsso-add-five-stars/installation/uninstall-the-plugin/).

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

<h3 class="top">Version Numbering</h3>

Version components: `{major}.{minor}.{bugfix}[-{stage}.{level}]`

* {major} = Major structural code changes and/or incompatible API changes (ie. breaking changes).
* {minor} = New functionality was added or improved in a backwards-compatible manner.
* {bugfix} = Backwards-compatible bug fixes or small improvements.
* {stage}.{level} = Pre-production release: dev &lt; a (alpha) &lt; b (beta) &lt; rc (release candidate).

<h3>Standard Edition Repositories</h3>

* [GitHub](https://surniaulula.github.io/wpsso-add-five-stars/)
* [WordPress.org](https://plugins.trac.wordpress.org/browser/wpsso-add-five-stars/)

<h3>Development Version Updates</h3>

<p><strong>WPSSO Core Premium customers have access to development, alpha, beta, and release candidate version updates:</strong></p>

<p>Under the SSO &gt; Update Manager settings page, select the "Development and Up" (for example) version filter for the WPSSO Core plugin and/or its add-ons. When new development versions are available, they will automatically appear under your WordPress Dashboard &gt; Updates page. You can reselect the "Stable / Production" version filter at any time to reinstall the latest stable version.</p>

<h3>Changelog / Release Notes</h3>

**Version 1.3.1-dev.5 (2023/01/25)**

* **New Features**
	* None.
* **Improvements**
	* Updated the minimum WordPress version from v5.2 to v5.4.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Updated the `WpssoAbstractAddOn` library class.
* **Requires At Least**
	* PHP v7.2.
	* WordPress v5.4.
	* WPSSO Core v14.6.1-dev.5.

**Version 1.3.0 (2023/01/20)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Updated the `SucomAbstractAddOn` common library class.
* **Requires At Least**
	* PHP v7.2.
	* WordPress v5.2.
	* WPSSO Core v14.5.0.

**Version 1.2.1 (2022/03/07)**

Maintenance release.

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* None.
* **Requires At Least**
	* PHP v7.2.
	* WordPress v5.2.
	* WPSSO Core v11.5.0.

**Version 1.2.0 (2022/01/19)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Renamed the lib/abstracts/ folder to lib/abstract/.
	* Renamed the `SucomAddOn` class to `SucomAbstractAddOn`.
	* Renamed the `WpssoAddOn` class to `WpssoAbstractAddOn`.
	* Renamed the `WpssoWpMeta` class to `WpssoAbstractWpMeta`.
* **Requires At Least**
	* PHP v7.2.
	* WordPress v5.2.
	* WPSSO Core v9.14.0.

**Version 1.1.1 (2021/11/16)**

* **New Features**
	* None.
* **Improvements**
	* None.
* **Bugfixes**
	* None.
* **Developer Notes**
	* Refactored the `SucomAddOn->get_missing_requirements()` method.
* **Requires At Least**
	* PHP v7.2.
	* WordPress v5.2.
	* WPSSO Core v9.8.0.

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

= 1.3.1-dev.5 =

(2023/01/25) Updated the minimum WordPress version from v5.2 to v5.4.

= 1.3.0 =

(2023/01/20) Updated the `SucomAbstractAddOn` common library class.

= 1.2.1 =

(2022/03/07) Maintenance release.

= 1.2.0 =

(2022/01/19) Renamed the lib/abstracts/ folder and its classes.

= 1.1.1 =

(2021/11/16) Refactored the `SucomAddOn->get_missing_requirements()` method.

= 1.1.0 =

(2021/10/19) Moved `allow_aggregate_rating()` and `allow_review()` filter methods to the `WpssoSchema` class.

= 1.0.0 =

(2021/10/18) Initial release.

