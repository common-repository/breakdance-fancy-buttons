<?php

namespace BreakdancefancyLayoutsCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakdancefancyLayoutsCustomElements\\FancyButton",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class FancyButton extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-index" viewBox="0 0 16 16">   <path d="M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 1 0 1 0V6.435l.106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 0 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.035a.5.5 0 0 1-.416-.223l-1.433-2.15a1.5 1.5 0 0 1-.243-.666l-.345-3.105a.5.5 0 0 1 .399-.546L5 8.11V9a.5.5 0 0 0 1 0V1.75A.75.75 0 0 1 6.75 1M8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5 5 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.6 2.6 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046zm2.094 2.025"/> </svg>';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Fancy Button';
    }

    static function className()
    {
        return 'fancybutton';
    }

    static function category()
    {
        return 'basic';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return ['content' => ['fancy_button' => ['select_effect' => 'slideover', 'marquee_speed' => '3', 'marquee_speed_2' => '4', 'typing_speed' => '4', 'rotate_amount' => -5]], 'design' => ['design' => ['border' => null, 'text_color' => null, 'text_color_hover' => null, 'typography' => ['typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 18, 'unit' => 'px', 'style' => '18px']]]]]]]]];
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "design",
        "Design",
        [c(
        "background_color",
        "Background Color",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidOnly']],
        true,
        true,
        [],
      ), c(
        "padding",
        "Padding",
        [],
        ['type' => 'spacing_complex', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "border",
        "Border",
        [],
        ['type' => 'border_complex', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "border_radius",
        "Border Radius",
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "shadow",
        "Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical'],
        false,
        true,
        [],
      ), c(
        "text_color",
        "Text Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_nothing",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\spacing_margin_all",
      "Margin",
      "margin",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "fancy_button",
        "Fancy Button",
        [c(
        "button_text",
        "Button Text",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'placeholder' => 'Fancy Button'],
        false,
        false,
        [],
      ), c(
        "select_effect",
        "Select Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'slideover', 'text' => 'Slide Over'], '1' => ['text' => 'Slide Down', 'value' => 'slidedown'], '2' => ['text' => 'Diaganol Slide', 'value' => 'diagslide'], '3' => ['text' => 'Slide Up', 'value' => 'slideup'], '4' => ['text' => 'Expand', 'value' => 'borderexpand'], '5' => ['text' => 'Lift Door', 'value' => 'liftdoor'], '6' => ['text' => 'Zoom In', 'value' => 'zoomin'], '7' => ['text' => 'Fade', 'value' => 'fade'], '8' => ['text' => 'Ripple', 'value' => 'ripple'], '9' => ['text' => 'Rotate', 'value' => 'rotate'], '10' => ['text' => 'Glow', 'value' => 'glow'], '11' => ['text' => 'Angle In', 'value' => 'anglein'], '12' => ['text' => 'Curtain Down', 'value' => 'curtaindown'], '13' => ['text' => 'Bounce Down', 'value' => 'bouncedown'], '14' => ['text' => 'Bounce Left', 'value' => 'bounceleft'], '15' => ['text' => 'Arrow In', 'value' => 'angleindouble'], '16' => ['text' => 'Double Take', 'value' => 'doubletake'], '17' => ['text' => 'Radial', 'value' => 'radialexpand'], '18' => ['text' => 'Double Slide', 'value' => 'slideovertopbottom'], '19' => ['text' => 'Inset', 'value' => 'insetshadow'], '20' => ['text' => 'Marquee', 'value' => 'marquee'], '21' => ['text' => 'Marquee 2', 'value' => 'marquee2'], '22' => ['text' => 'Typing', 'value' => 'typing'], '23' => ['text' => 'Wobble', 'value' => 'wobble']]],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'url', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "rotate_amount",
        "Rotate Amount",
        [],
        ['type' => 'number', 'layout' => 'vertical', 'condition' => ['0' => ['0' => ['path' => 'content.fancy_button.select_effect', 'operand' => 'equals', 'value' => 'rotate']]]],
        false,
        false,
        [],
      ), c(
        "marquee_speed",
        "Marquee Speed",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'condition' => ['0' => ['0' => ['path' => 'content.fancy_button.select_effect', 'operand' => 'equals', 'value' => 'marquee']]], 'items' => ['0' => ['value' => '1', 'text' => '1'], '1' => ['text' => '2', 'value' => '2'], '2' => ['text' => '3', 'value' => '3'], '3' => ['text' => '4', 'value' => '4'], '4' => ['text' => '5', 'value' => '5'], '5' => ['text' => '6', 'value' => '6'], '6' => ['text' => '7', 'value' => '7'], '7' => ['text' => '8', 'value' => '8'], '8' => ['text' => '9', 'value' => '9'], '9' => ['text' => '10', 'value' => '10']]],
        false,
        false,
        [],
      ), c(
        "typing_speed",
        "Typing Speed",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'rangeOptions' => ['min' => -1, 'step' => 1], 'items' => ['0' => ['value' => '1', 'text' => '1'], '1' => ['text' => '2', 'value' => '2'], '2' => ['text' => '3', 'value' => '3'], '3' => ['text' => '4', 'value' => '4'], '4' => ['text' => '5', 'value' => '5'], '5' => ['text' => '6', 'value' => '6'], '6' => ['text' => '7', 'value' => '7'], '7' => ['text' => '8', 'value' => '8'], '8' => ['text' => '9', 'value' => '9'], '9' => ['text' => '10', 'value' => '10']], 'condition' => ['0' => ['0' => ['path' => 'content.fancy_button.select_effect', 'operand' => 'equals', 'value' => 'typing']]]],
        false,
        false,
        [],
      ), c(
        "marquee_speed_2",
        "Marquee Speed 2",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => ['0' => ['value' => '1', 'text' => '1'], '1' => ['text' => '2', 'value' => '2'], '2' => ['text' => '3', 'value' => '3'], '3' => ['text' => '4', 'value' => '4'], '4' => ['text' => '5', 'value' => '5'], '5' => ['text' => '6', 'value' => '6'], '6' => ['text' => '7', 'value' => '7'], '7' => ['text' => '8', 'value' => '8'], '8' => ['text' => '9', 'value' => '9'], '9' => ['text' => '10', 'value' => '10']], 'condition' => ['0' => ['0' => ['path' => 'content.fancy_button.select_effect', 'operand' => 'equals', 'value' => 'marquee2']]]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'string', 'path' => 'content.fancy_button.button_text'], '1' => ['accepts' => 'string', 'path' => 'content.fancy_button.link'], '2' => ['accepts' => 'string', 'path' => 'content.fancy_button.content.text'], '3' => ['accepts' => 'string', 'path' => 'content.fancy_button.content.link.url'], '4' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.design.typography', 'content.fancy_button.button.custom.size.full_width_at', 'content.fancy_button.styles.styles.size.full_width_at', 'content.fancy_button.styles.styles'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
