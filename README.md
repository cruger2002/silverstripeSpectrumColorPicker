# SpectrumColorPickerField for Silverstripe
This module adds a colorpicker field. It's based on - <http://bgrins.github.io/spectrum>

## Requirements

 * SilverStripe 3.1 or above

## Installation Instructions

 * Extract all files into the 'spectrumColorPicker' folder under your Silverstripe root, then http://your_site/?flush=all

## Usage

```php

        $colorPicker = new SpectrumColorpicker('FrmColor', 'Kolor tła formularza');
        $colorPicker->setAllowEmpty();
        $colorPicker->setShowAlpha();
        $colorPicker->setCancelText('anuluj');
        $colorPicker->setChooseText('wybierz');
        $colorPicker->setPalette(array(
            array("#000", "#444", "#666", "#999", "#ccc", "#eee", "#f3f3f3", "#fff"),
            array("#f00", "#f90", "#ff0", "#0f0", "#0ff", "#00f", "#90f", "#f0f"),
            array("#f4cccc", "#fce5cd", "#fff2cc", "#d9ead3", "#d0e0e3", "#cfe2f3", "#d9d2e9", "#ead1dc"),
            array("#ea9999", "#f9cb9c", "#ffe599", "#b6d7a8", "#a2c4c9", "#9fc5e8", "#b4a7d6", "#d5a6bd"),
            array("#e06666", "#f6b26b", "#ffd966", "#93c47d", "#76a5af", "#6fa8dc", "#8e7cc3", "#c27ba0"),
            array("#c00", "#e69138", "#f1c232", "#6aa84f", "#45818e", "#3d85c6", "#674ea7", "#a64d79"),
            array("#900", "#b45f06", "#bf9000", "#38761d", "#134f5c", "#0b5394", "#351c75", "#741b47"),
            array("#600", "#783f04", "#7f6000", "#274e13", "#0c343d", "#073763", "#20124d", "#4c1130")
        ));
        $colorPicker->setTogglePaletteMoreText('wiecej kolorow');
        $colorPicker->setTogglePaletteLessText('mniej kolorow');
        $fields->addFieldToTab('Root.Frm', $colorPicker);

```
