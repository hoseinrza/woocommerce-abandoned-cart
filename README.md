# Abandoned Cart Lite for WooCommerce

A powerful, easy-to-use WordPress plugin that recovers lost sales by sending automated reminder emails to customers who abandon their shopping carts.

[![Version](https://img.shields.io/badge/version-6.8.3-blue.svg)](https://github.com/TycheSoftwares/woocommerce-abandoned-cart)
[![License](https://img.shields.io/badge/license-GPL%202.0-green.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)
[![WordPress](https://img.shields.io/badge/WordPress-5.0+-blue.svg)](https://wordpress.org)
[![WooCommerce](https://img.shields.io/badge/WooCommerce-3.0+-blue.svg)](https://woocommerce.com)

## Overview

Abandoned Cart Lite is the solution for capturing and recovering lost sales. When a customer adds items to their cart but leaves without checking out, you can automatically send them reminder emails to encourage them to complete their purchase.

### Why Use This Plugin?

- **Recover Lost Revenue** - Turn abandoned carts into completed sales
- **Professional Email Templates** - Customizable, engaging email designs
- **Smart Automation** - Schedule reminders at optimal intervals
- **Full Analytics** - Track recovery rates and performance metrics
- **GDPR Compliant** - Built-in privacy controls and user consent management
- **Easy Configuration** - Intuitive settings interface, no coding required

## Key Features

### 🎯 Core Functionality

- **Automatic Cart Tracking** - Seamlessly capture abandoned carts from both guests and registered users
- **Multiple Reminder Emails** - Send up to 3 automated reminder emails at customizable intervals
- **Email Customization** - Create professional email templates with dynamic placeholders
- **Discount Coupons** - Automatically generate and attach discount codes to reminder emails
- **Cart Recovery Analytics** - Monitor abandoned carts, recovery rates, and revenue impact

### 🌍 Multi-Language Support

- **Persian/Farsi Translation** - Complete UI and email translations in Farsi
- **Translation Ready** - Full i18n support for any language
- **RTL Compatible** - Works perfectly with right-to-left languages

### 🎨 Modern Admin Interface

- **Beautiful Dashboard** - At-a-glance view of key metrics and recent activity
- **Responsive Design** - Works perfectly on desktop, tablet, and mobile devices
- **Dark Mode Support** - Automatically adapts to system preferences
- **Professional Components** - Modern UI framework with consistent styling
- **Intuitive Navigation** - Organized tabs and sidebar menus

### 🔒 Security & Privacy

- **GDPR Compliance** - Built-in GDPR consent notices and data handling
- **Data Privacy Controls** - Options to delete data after specified periods
- **Secure Input Sanitization** - Protection against injection attacks
- **WP Standard Security** - Follows WordPress security best practices

### ⚙️ Advanced Settings

- **Exclusion Rules** - Exclude specific users, domains, or IP addresses from tracking
- **Guest & Registered Users** - Separate handling for different user types
- **Auto-Deletion** - Automatically clean up old abandoned cart records
- **Admin Notifications** - Get notified when carts are recovered
- **UTM Tracking** - Track email campaigns with Google Analytics

## Installation

### From WordPress Plugin Directory

1. Go to **Plugins** → **Add New** in your WordPress admin
2. Search for "Abandoned Cart Lite for WooCommerce"
3. Click **Install Now** and then **Activate**

### Manual Installation

1. Download the plugin from GitHub or WordPress plugin repository
2. Extract the ZIP file
3. Upload the `woocommerce-abandoned-cart` folder to `/wp-content/plugins/`
4. Activate the plugin from **Plugins** menu

### Requirements

- WordPress 5.0 or higher
- WooCommerce 3.0 or higher
- PHP 7.2 or higher
- HTTPS enabled (recommended for security)

## Quick Start

### 1. Enable the Plugin

After activation, go to **WooCommerce** → **Abandoned Carts** in your admin menu.

### 2. Configure Basic Settings

1. Navigate to **Settings** tab
2. Set cart abandonment timeout (default: 10 minutes)
3. Configure email sender name and address
4. Enable admin notifications if desired

### 3. Create Email Templates

1. Go to **Email Templates** section
2. Click **Add New Template**
3. Set delay interval (1 hour, 6 hours, 24 hours, etc.)
4. Compose your reminder message with dynamic placeholders
5. Save and activate the template

### 4. Review Dashboard

Your **Dashboard** shows:
- Total abandoned carts
- Recovery rate percentage
- Emails sent count
- Revenue recovered
- 30-day recovery trends

## Configuration Options

### General Settings

| Setting | Description | Default |
|---------|-------------|---------|
| Enable Abandoned Carts | Master on/off switch | Enabled |
| Cutoff Time (minutes) | Time before cart is marked abandoned | 10 |
| Auto-Delete After (days) | Days before records are deleted | 30 |
| Admin Notifications | Notify admin on recovery | Enabled |
| Track from Cart Page | Track from cart page visits | Disabled |

### Email Settings

- **From Name** - Sender name displayed in emails
- **From Address** - Sender email address (should match domain)
- **Reply-To Address** - Where customer replies are sent
- **UTM Parameters** - Track links in Google Analytics
- **Auto-Login** - Auto-login customers (security warning: use with caution)

### GDPR & Privacy

- **GDPR Notice** - Display consent notice on checkout
- **Opt-Out Option** - Allow customers to opt out of tracking
- **Data Retention** - Automatic deletion of old records
- **Custom Messages** - Customize privacy notices

### Exclusion Rules

Exclude tracking for:
- IP addresses (supports wildcards)
- Email addresses
- Email domains
- Countries

## Dynamic Email Placeholders

Use these placeholders in your email templates:

| Placeholder | Description |
|------------|-------------|
| `[[CUSTOMER_NAME]]` | Customer's first name |
| `[[CUSTOMER_EMAIL]]` | Customer's email address |
| `[[CART_LINK]]` | Direct link to abandoned cart |
| `[[CART_TOTAL]]` | Total value of abandoned cart |
| `[[SITE_NAME]]` | Your store name |
| `[[COUPON_CODE]]` | Discount coupon code (if enabled) |

## Database Structure

The plugin creates the following tables:

- `wp_woocommerce_abandoned_cart` - Stores abandoned cart records
- `wp_woocommerce_abandoned_orders` - Tracks recovered orders
- `wp_woocommerce_ac_email_templates` - Custom email templates

## Admin Interface Structure

### Dashboard
Real-time overview of abandoned carts and recovery performance.

### Abandoned Carts
Complete list of abandoned carts with:
- Customer name
- Billing phone number
- Cart items and total
- Time abandoned
- Recovery status
- Action buttons for manual recovery emails

### Email Templates
Manage all reminder email templates:
- Create new templates
- Edit existing templates
- Preview and test emails
- Activate/deactivate templates

### Recovered Orders
View all orders recovered through the plugin with:
- Original cart value
- Customer details
- Recovery method
- Recovery date
- Revenue tracked

### Reports
Analytics dashboard showing:
- Recovery rate trends
- Revenue impact
- Email performance metrics
- Top abandoned products

### Settings
Configure all plugin options:
- General settings
- Email configuration
- GDPR compliance
- Coupon management
- Exclusion rules

## Modern Admin UI

The plugin features a completely redesigned modern admin interface with:

- **Responsive Grid System** - Adapts to any screen size
- **Custom Design System** - Consistent colors and spacing
- **Dark Mode Support** - Automatic dark theme detection
- **Accessible Components** - WCAG AA compliant
- **Performance Optimized** - 9.5 KB minified CSS

For detailed UI documentation, see [MODERN_UI_GUIDE.md](docs/MODERN_UI_GUIDE.md).

## Recent Updates (v6.8.3)

### New Features
- ✨ Complete modern admin interface redesign
- ✨ Persian/Farsi language translation
- ✨ Responsive dashboard with analytics
- ✨ Email template management system
- ✨ Dark mode support

### Improvements
- 🔄 Enhanced abandoned carts table with billing phone display
- 🔄 Improved form layout and UX
- 🔄 Better mobile responsiveness
- 🔄 Faster admin page loading

### Security
- 🔒 Fixed input sanitization vulnerabilities
- 🔒 Improved CSRF protection
- 🔒 Enhanced data validation
- 🔒 Better XSS prevention

## File Structure

```
woocommerce-abandoned-cart/
├── woocommerce-ac.php           # Main plugin file
├── includes/
│   ├── classes/                 # Core plugin classes
│   │   ├── class-wcal-abandoned-orders-table.php
│   │   └── ...
│   └── functions/               # Utility functions
├── assets/
│   ├── css/
│   │   ├── admin/
│   │   │   ├── wcal-modern-admin.css
│   │   │   └── wcal-modern-admin.min.css
│   │   └── ...
│   └── js/                      # JavaScript files
├── views/                       # Admin page templates
│   ├── wcal-modern-dashboard.php
│   ├── wcal-modern-settings.php
│   ├── wcal-modern-email-templates.php
│   └── ...
├── i18n/
│   └── languages/              # Translation files
│       ├── woocommerce-abandoned-cart-fa_IR.po
│       ├── woocommerce-abandoned-cart-fa_IR.mo
│       └── ...
├── docs/                        # Documentation
│   └── MODERN_UI_GUIDE.md
├── README.md                    # This file
└── LICENSE                      # GPL 2.0 License
```

## Troubleshooting

### Emails Not Sending

**Problem:** Reminder emails are not being sent to customers.

**Solutions:**
1. Check that plugin is enabled in Settings
2. Verify email sender address is configured
3. Ensure WP Mail SMTP or similar plugin is configured (if using external SMTP)
4. Check WordPress email settings: **Tools** → **Site Health** → **Mail** tab

### Carts Not Being Tracked

**Problem:** Abandoned carts are not being recorded.

**Solutions:**
1. Verify "Enable abandoned cart emails" is checked in Settings
2. Check if customer's IP/email is in exclusion rules
3. Ensure cookie tracking is not blocked
4. Wait for cart abandonment timeout to pass (default 10 minutes)

### Dark Mode Issues

**Problem:** Colors look wrong in dark mode.

**Solutions:**
1. Clear browser cache
2. Check system dark mode preference
3. Use browser DevTools to debug CSS variables
4. Report issue with screenshot to support

### Performance Issues

**Problem:** Admin pages are slow or unresponsive.

**Solutions:**
1. Check abandoned cart records count in database
2. Use "Auto-Delete After" setting to prune old records
3. Optimize database: run `REPAIR TABLE` and `OPTIMIZE TABLE`
4. Ensure sufficient server memory allocated to PHP

## Advanced Usage

### Custom Email Styling

Edit email templates to include custom HTML and CSS. The plugin supports:
- WooCommerce email template styling
- Inline CSS styles
- Dynamic content placeholders
- HTML formatting

### Filtering Abandoned Carts Programmatically

```php
// Get abandoned carts for a specific user
do_action( 'wcal_get_user_abandoned_carts', $user_id );

// Manually trigger recovery email
do_action( 'wcal_send_recovery_email', $cart_id );

// Exclude from tracking
apply_filters( 'wcal_exclude_cart_tracking', false, $user_id );
```

### Customizing UI

The CSS framework uses CSS variables for easy theming:

```css
:root {
  --wcal-primary: #0073aa;
  --wcal-success: #46b450;
  --wcal-warning: #ffb81c;
  --wcal-danger: #dc3545;
}
```

Override in your theme's `functions.php`:

```php
add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'wcal-custom', get_stylesheet_uri() );
});
```

## API & Hooks

### Actions

- `wcal_send_recovery_email` - Before sending recovery email
- `wcal_cart_recovered` - When abandoned cart is recovered
- `wcal_cart_abandoned` - When new cart is marked as abandoned

### Filters

- `wcal_email_content` - Modify email body before sending
- `wcal_email_subject` - Modify email subject
- `wcal_excluded_users` - Customize user exclusion logic
- `wcal_cart_timeout` - Adjust cart abandonment timeout

## Languages

The plugin includes translations for:

- **English** (en_US) - Default
- **Persian/Farsi** (fa_IR) - Complete translation

### Adding More Languages

1. Use [Poedit](https://poedit.net/) to open `.pot` file
2. Create new `.po` file for your language
3. Translate all strings
4. Save as `.mo` compiled file
5. Place in `i18n/languages/` directory

See [WordPress Translation Guide](https://developer.wordpress.org/plugins/internationalization/how-to-internationalize-your-plugin/) for details.

## Support & Documentation

### Documentation
- [Modern UI Guide](docs/MODERN_UI_GUIDE.md) - CSS framework reference
- [Troubleshooting Guide](#troubleshooting) - Common issues and solutions

### Getting Help

1. **Check FAQ** - Common questions are answered in documentation
2. **Report Issues** - Open issue on [GitHub Issues](https://github.com/TycheSoftwares/woocommerce-abandoned-cart/issues)
3. **Contact Support** - Email support or use plugin support forum

### Submit Feedback

Have an idea for improvement? We'd love to hear it!
- Suggest features on GitHub Discussions
- Report bugs with detailed reproduction steps
- Share your use case and suggestions

## Contributing

We welcome contributions! Please:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This plugin is licensed under [GPL v2.0](LICENSE). You are free to use, modify, and distribute it under the terms of the GPL license.

## Changelog

### Version 6.8.3 (Current)
- Modern admin interface redesign
- Persian/Farsi translation
- Enhanced abandoned carts table with billing phone
- Security vulnerability fixes
- Dark mode support
- Responsive dashboard

### Version 6.8.2
- Previous release

### Earlier Versions
See [CHANGELOG](CHANGELOG.md) for full history.

## Roadmap

- [ ] Advanced reporting dashboard
- [ ] AI-powered email recommendations
- [ ] SMS reminder support
- [ ] Integration with email marketing platforms
- [ ] Mobile app for cart management
- [ ] Customer behavior analytics

## Credits

**Developer:** AmirHossein Rezazadeh  
**Email:** amir1382re@gmail.com  
**Company:** Tyche Softwares

## Legal

### Privacy

This plugin respects user privacy and complies with GDPR requirements. See our [Privacy Policy](https://www.tychesoftwares.com/privacy/) for details.

### Support

For WordPress support, refer to the official [WordPress Codex](https://codex.wordpress.org/).  
For WooCommerce support, visit [WooCommerce Docs](https://docs.woocommerce.com/).

---

**Made with ❤️ by Tyche Softwares**

© 2024 Tyche Softwares. All rights reserved.
