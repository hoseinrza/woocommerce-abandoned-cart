# Modern Admin UI Guide

This document explains the new modern admin interface for Abandoned Cart Lite for WooCommerce.

## Overview

The plugin now features a completely redesigned admin interface with:
- **Modern CSS framework** with custom design system
- **Responsive layouts** that work on all screen sizes
- **Dark mode support** using `prefers-color-scheme`
- **Accessible components** following WordPress standards
- **Reusable CSS classes** for consistent styling

## CSS Framework

### Location
```
assets/css/admin/wcal-modern-admin.css
```

### Including the CSS
```php
wp_enqueue_style( 
    'wcal-modern-admin',
    plugin_dir_url( __FILE__ ) . 'assets/css/admin/wcal-modern-admin.css',
    array(),
    WCAL_VERSION
);
```

## Color System

CSS variables are defined at the root level:

```css
--wcal-primary: #0073aa           /* Primary action color */
--wcal-primary-dark: #005a87      /* Darker primary variant */
--wcal-primary-light: #0084d4     /* Lighter primary variant */
--wcal-success: #46b450           /* Success state */
--wcal-warning: #ffb81c           /* Warning state */
--wcal-danger: #dc3545            /* Error/Danger state */
--wcal-info: #0071a9              /* Info state */
--wcal-bg-light: #f8f9fa          /* Light background */
--wcal-bg-white: #ffffff          /* White background */
--wcal-text-primary: #2c3338      /* Main text color */
--wcal-text-secondary: #646970    /* Secondary text color */
--wcal-border: #ddd               /* Border color */
--wcal-border-light: #e5e5e5      /* Light border */
--wcal-shadow: 0 1px 3px ...      /* Small shadow */
--wcal-shadow-md: 0 4px 6px ...   /* Medium shadow */
--wcal-radius: 4px                /* Border radius */
```

## Layout Classes

### Container
```html
<div class="wcal-container">
    <!-- Max-width 1400px centered container -->
</div>
```

### Grid System
```html
<!-- Responsive auto-fit grid -->
<div class="wcal-grid">
    <div>Item 1</div>
    <div>Item 2</div>
</div>

<!-- 2-column grid -->
<div class="wcal-grid wcal-grid-2">
    <div>Left</div>
    <div>Right</div>
</div>

<!-- 3-column grid -->
<div class="wcal-grid wcal-grid-3">
    <div>Col 1</div>
    <div>Col 2</div>
    <div>Col 3</div>
</div>
```

### Header
```html
<div class="wcal-header">
    <div>
        <h1>Page Title</h1>
    </div>
    <div class="wcal-header-actions">
        <button class="wcal-btn wcal-btn-primary">Action</button>
    </div>
</div>
```

## Card Component

```html
<div class="wcal-card">
    <div class="wcal-card-header">
        <h3 class="wcal-card-title">
            <span class="wcal-card-icon">📊</span>
            Card Title
        </h3>
    </div>
    <div>Card content here</div>
</div>
```

## Button Styles

### Basic Buttons
```html
<!-- Primary -->
<button class="wcal-btn wcal-btn-primary">Primary Button</button>

<!-- Secondary -->
<button class="wcal-btn wcal-btn-secondary">Secondary Button</button>

<!-- Success -->
<button class="wcal-btn wcal-btn-success">Success Button</button>

<!-- Danger -->
<button class="wcal-btn wcal-btn-danger">Delete Button</button>

<!-- Small Button -->
<button class="wcal-btn wcal-btn-sm wcal-btn-primary">Small</button>

<!-- Icon Button -->
<button class="wcal-btn wcal-btn-icon">🔍</button>
```

## Form Components

### Basic Form
```html
<form class="wcal-form">
    <div class="wcal-form-group">
        <label for="input1">Label</label>
        <input type="text" id="input1" name="field">
        <p class="wcal-form-description">Helper text</p>
    </div>
    
    <div class="wcal-form-group">
        <label for="select1">Select</label>
        <select id="select1" name="field">
            <option>Option 1</option>
        </select>
    </div>
    
    <div class="wcal-form-group">
        <label for="textarea1">Textarea</label>
        <textarea id="textarea1" name="field"></textarea>
    </div>
</form>
```

### Checkboxes & Radio
```html
<div class="wcal-form-checkbox">
    <input type="checkbox" id="check1" name="field">
    <label for="check1">Checkbox label</label>
</div>

<div class="wcal-form-radio">
    <input type="radio" id="radio1" name="field">
    <label for="radio1">Radio label</label>
</div>
```

## Table Component

```html
<div class="wcal-table-wrapper">
    <table class="wcal-table">
        <thead>
            <tr>
                <th>Header 1</th>
                <th>Header 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
            </tr>
        </tbody>
    </table>
</div>
```

### Table Actions
```html
<div class="wcal-table-actions">
    <a href="#" class="wcal-table-action-link">View</a>
    <a href="#" class="wcal-table-action-link">Edit</a>
    <a href="#" class="wcal-table-action-link">Delete</a>
</div>
```

## Alert Components

```html
<!-- Success Alert -->
<div class="wcal-alert wcal-alert-success">
    <div class="wcal-alert-icon">✓</div>
    <div>Success message</div>
</div>

<!-- Error Alert -->
<div class="wcal-alert wcal-alert-danger">
    <div class="wcal-alert-icon">✗</div>
    <div>Error message</div>
</div>

<!-- Warning Alert -->
<div class="wcal-alert wcal-alert-warning">
    <div class="wcal-alert-icon">⚠️</div>
    <div>Warning message</div>
</div>

<!-- Info Alert -->
<div class="wcal-alert wcal-alert-info">
    <div class="wcal-alert-icon">ℹ️</div>
    <div>Info message</div>
</div>
```

## Badge Component

```html
<!-- Primary Badge -->
<span class="wcal-badge wcal-badge-primary">Primary</span>

<!-- Success Badge -->
<span class="wcal-badge wcal-badge-success">Success</span>

<!-- Danger Badge -->
<span class="wcal-badge wcal-badge-danger">Danger</span>

<!-- Warning Badge -->
<span class="wcal-badge wcal-badge-warning">Warning</span>
```

## Tabs Component

```html
<div class="wcal-tabs">
    <button class="wcal-tab active" data-tab="tab1">Tab 1</button>
    <button class="wcal-tab" data-tab="tab2">Tab 2</button>
    <button class="wcal-tab" data-tab="tab3">Tab 3</button>
</div>

<div class="wcal-tab-content active" id="tab1">Content 1</div>
<div class="wcal-tab-content" id="tab2">Content 2</div>
<div class="wcal-tab-content" id="tab3">Content 3</div>
```

## Modal Component

```html
<div class="wcal-modal" id="my-modal">
    <div class="wcal-modal-content">
        <div class="wcal-modal-header">
            <h2 class="wcal-modal-title">Modal Title</h2>
            <button class="wcal-modal-close">×</button>
        </div>
        <div class="wcal-modal-body">
            Modal content here
        </div>
        <div class="wcal-modal-footer">
            <button class="wcal-btn wcal-btn-secondary">Cancel</button>
            <button class="wcal-btn wcal-btn-primary">Save</button>
        </div>
    </div>
</div>
```

### JavaScript
```javascript
const modal = document.getElementById('my-modal');
modal.classList.add('active');    // Show modal
modal.classList.remove('active'); // Hide modal
```

## Stats Component

```html
<!-- Stat Box -->
<div class="wcal-stat-box">
    <div class="wcal-stat-label">Label</div>
    <div class="wcal-stat-number">1,234</div>
    <div class="wcal-stat-change up">↑ 12%</div>
</div>
```

## Sidebar Navigation

```html
<div class="wcal-sidebar">
    <a href="#" class="wcal-sidebar-item active">
        <span>🏠</span> Home
    </a>
    <a href="#" class="wcal-sidebar-item">
        <span>⚙️</span> Settings
    </a>
    <a href="#" class="wcal-sidebar-item">
        <span>📊</span> Reports
    </a>
</div>
```

## Utility Classes

```html
<!-- Text Alignment -->
<div class="wcal-text-center">Centered</div>
<div class="wcal-text-right">Right-aligned</div>

<!-- Spacing -->
<div class="wcal-mb-0">No margin-bottom</div>
<div class="wcal-mb-1">Small margin-bottom</div>
<div class="wcal-mb-2">Large margin-bottom</div>
<div class="wcal-mt-2">Top margin</div>

<!-- Padding -->
<div class="wcal-p-0">No padding</div>

<!-- Visibility -->
<div class="wcal-hidden">Hidden element</div>

<!-- Flexbox -->
<div class="wcal-flex">
    <div>Item 1</div>
    <div>Item 2</div>
</div>

<div class="wcal-flex wcal-gap-sm">Small gap</div>
```

## Responsive Design

### Breakpoints
The framework is mobile-first responsive:
- **Mobile**: Default styling
- **Tablet (768px+)**: Grid adjusts
- **Desktop**: Full grid layout

### Dark Mode
The framework automatically supports dark mode:

```css
@media (prefers-color-scheme: dark) {
    /* Automatically adjusted for dark mode */
}
```

## Best Practices

1. **Always use CSS variables** instead of hardcoding colors
2. **Use semantic grid layouts** instead of custom dimensions
3. **Keep forms organized** with form-group wrapper
4. **Use badges for status** instead of colored text
5. **Use alerts for messaging** instead of inline notices
6. **Leverage the card component** for consistent spacing
7. **Test responsive behavior** on mobile devices
8. **Support dark mode** by using CSS variables

## Example: Complete Settings Page

```php
<div class="wcal-admin-wrapper">
    <div class="wcal-container">
        <div class="wcal-header">
            <h1><?php _e( 'Settings', 'woocommerce-abandoned-cart' ); ?></h1>
        </div>

        <div class="wcal-card">
            <div class="wcal-card-header">
                <h3 class="wcal-card-title">
                    <span class="wcal-card-icon">⚙️</span>
                    General Settings
                </h3>
            </div>

            <form class="wcal-form">
                <div class="wcal-form-group">
                    <label for="setting1">Setting Label</label>
                    <input type="text" id="setting1" name="setting">
                    <p class="wcal-form-description">Helper text</p>
                </div>

                <div style="display: flex; gap: 10px;">
                    <button type="submit" class="wcal-btn wcal-btn-primary">
                        Save
                    </button>
                    <button type="reset" class="wcal-btn wcal-btn-secondary">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
```

## File Structure

```
assets/css/admin/
├── wcal-modern-admin.css          # Main CSS framework

views/
├── wcal-modern-dashboard.php      # Dashboard template
├── wcal-modern-settings.php       # Settings template
├── wcal-modern-email-templates.php # Email templates
└── ...other templates
```

## Migration Guide

To migrate existing pages to the modern UI:

1. Replace old HTML with new semantic structure
2. Use provided CSS classes instead of inline styles
3. Enqueue `wcal-modern-admin.css`
4. Test on mobile and dark mode
5. Replace old form HTML with `.wcal-form` structure

## Support

For issues or questions about the modern UI, please refer to the plugin documentation or open an issue on GitHub.
