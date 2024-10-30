<?php

/**
 * Plugin Name: Breakdance Fancy Buttons
 * Description: Fancy buttons for Breakdance
 * Author: Phox Elements
 * Author URI: https://phox-elements.com/
 * License: GPLv2
 * Text Domain: Breakdance Fancy Buttons
 * Domain Path: /languages/
 * Version: 1.2.0
 */

namespace BreakdancefancyLayoutsCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'BreakdancefancyLayoutsCustomElements',
        'element',
        'BreakdanceLayouts Fancy Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'BreakdancefancyLayoutsCustomElements',
        'macro',
        'BreakdanceLayouts Fancy Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'BreakdancefancyLayoutsCustomElements',
        'preset',
        'BreakdanceLayouts Fancy Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
