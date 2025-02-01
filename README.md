A simple, lightweight, and GDPR-compliant cookie banner plugin for WordPress. This plugin allows users to accept or deny cookies, stores their preference, and provides an easy way to reset their decision. It integrates with **ACF Pro** for customizable text and links.

Features
--------

*   **GDPR Compliance**: Ensures compliance with GDPR regulations by allowing users to accept or deny cookies.
    
*   **Customizable Content**: All text content, links, and the cookie icon are managed via **ACF Pro** fields.
    
*   **Cookie Storage**: Stores the user's decision in a cookie for one year.
    
*   **Reset Option**: Users can reset their cookie decision by clicking the cookie icon.
    
*   **Lightweight**: No unnecessary bloat—just the essential functionality.
    
*   **Open Source**: Free to use, modify, and distribute.
    

Installation
------------

1.  bashCopygit clone https://github.com/your-username/gdpr-cookie-banner.git
    
    *   Clone this repository or download the ZIP file.
        
2.  **Install the Plugin**:
    
    *   Upload the gdpr-cookie-banner folder to the wp-content/plugins directory of your WordPress installation.
        
    *   Alternatively, you can upload the ZIP file directly from the WordPress admin panel under **Plugins > Add New > Upload Plugin**.
        
3.  **Activate the Plugin**:
    
    *   Go to **Plugins** in your WordPress admin panel and activate the **GDPR Cookie Banner** plugin.
        
4.  **Set Up ACF Pro Fields**:
    
    *   Install and activate the **Advanced Custom Fields Pro** plugin.
        
    *   Create the following fields in ACF Pro:
        
        *   cookie\_banner\_text (Text Area) – The main text displayed in the banner.
            
        *   accept\_button\_text (Text) – Text for the "Accept" button.
            
        *   deny\_button\_text (Text) – Text for the "Deny" button.
            
        *   privacy\_policy\_link (URL) – Link to your privacy policy.
            
        *   cookie\_icon (Image) – An optional icon displayed after the user makes a decision.
            
    *   Assign these fields to an options page or a specific post type.
        

Usage
-----

1.  **Customize the Banner**:
    
    *   Go to the ACF Pro options page (or the assigned post type) and fill in the fields for the banner text, buttons, and links.
        
2.  **Test the Banner**:
    
    *   Visit your website to see the banner in action.
        
    *   Click **Accept** or **Deny** to store the user's decision.
        
    *   After making a decision, the cookie icon will appear. Click it to reset the decision and show the banner again.
        
3.  **Check Console Logs**:
    
    *   Open your browser's developer tools (press F12 or Ctrl + Shift + I) and go to the **Console** tab.
        
    *   The plugin logs the user's decision:
        
        *   Cookies accepted if the user accepts.
            
        *   Cookies denied if the user denies.
            
        *   No cookie decision made yet if no decision has been made.
            

Customization
-------------

*   **CSS**: You can customize the appearance of the banner and cookie icon by editing the css/style.css file.
    
*   **JavaScript**: Advanced users can modify the behavior of the plugin by editing the js/script.js file.
    

Contributing
------------

This plugin is open source, and contributions are welcome! If you have any suggestions, bug reports, or feature requests, please open an issue or submit a pull request.

License
-------

This plugin is released under the **MIT License**. Feel free to use, modify, and distribute it as you see fit.


Changelog
---------

### v1.0

*   Initial release of the GDPR Cookie Banner plugin.
    

About
-----

This plugin was created as a simple and lightweight solution for GDPR compliance. It is designed to be easy to use and highly customizable. If you find it useful, consider giving it a star on GitHub!
