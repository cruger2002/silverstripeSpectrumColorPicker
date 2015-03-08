<?php

/**
 * 
 * Silverstipe field for colorpicker
 * 
 * @author Robert Fontanski
 * @package SpectrumColorpickerField
 * @see http://bgrins.github.io/spectrum/
 */

class SpectrumColorpicker extends TextField {
    
    protected $allowEmpty = false;
    protected $showAlpha = false;
    protected $preferredFormat = 'rgb';
    protected $palette = array();
    protected $togglePaletteMoreText='more';
    protected $cancelText="cancle";
    protected $chooseText="choose";
    protected $togglePaletteLessText="less";
    
    /**
     * set toggle button text
     * @param String $text
     */
    public function setTogglePaletteLessText($text){
        $this->togglePaletteLessText = $text;
    }
    
    /**
     * get toggle button text
     * @return String
     */
    public function getTogglePaletteLessText(){
        return $this->togglePaletteLessText;
    }    
    
    /**
     * set cancle button text
     * @param String $text
     */
    public function setCancelText($text){
        $this->cancelText = $text;
    }
    
    /**
     * get cancle button text
     * @return String
     */
    public function getCancelText(){
        return $this->cancelText;
    }    
    
    /**
     * set choose button text
     * @param String $text
     */
    public function setChooseText($text){
        $this->chooseText = $text;
    }
    
    /**
     * get choose button text
     * @return String
     */
    public function getChooseText(){
        return $this->chooseText;
    }    
    
    /**
     * set button text for palette
     * @param String $text
     */
    public function setTogglePaletteMoreText($text){
        $this->togglePaletteMoreText = $text;
    }
    
    /**
     * get button text for palette
     * @return String
     */
    public function getTogglePaletteMoreText(){
        return $this->togglePaletteMoreText;
    }    

    /**
     * set color palette
     * 
     * array(
     *       array("#000", "#444", "#666", "#999", "#ccc", "#eee", "#f3f3f3", "#fff"),
     *       array("#f00", "#f90", "#ff0", "#0f0", "#0ff", "#00f", "#90f", "#f0f"),
     *       array("#f4cccc", "#fce5cd", "#fff2cc", "#d9ead3", "#d0e0e3", "#cfe2f3", "#d9d2e9", "#ead1dc"),
     *       array("#ea9999", "#f9cb9c", "#ffe599", "#b6d7a8", "#a2c4c9", "#9fc5e8", "#b4a7d6", "#d5a6bd"),
     *       array("#e06666", "#f6b26b", "#ffd966", "#93c47d", "#76a5af", "#6fa8dc", "#8e7cc3", "#c27ba0"),
     *       array("#c00", "#e69138", "#f1c232", "#6aa84f", "#45818e", "#3d85c6", "#674ea7", "#a64d79"),
     *       array("#900", "#b45f06", "#bf9000", "#38761d", "#134f5c", "#0b5394", "#351c75", "#741b47"),
     *       array("#600", "#783f04", "#7f6000", "#274e13", "#0c343d", "#073763", "#20124d", "#4c1130")
     *   )
     *  
     * @param array $pallete
     */
    public function setPalette($pallete){
        $this->palette = $pallete;
    }
    
    /**
     * return json_ecnode string with color palette.
     * @return String
     */
    public function getPalette(){
        return json_encode($this->palette);
    }

    /**
     * allow empty value
     */
    public function setAllowEmpty(){
        $this->allowEmpty = true;
    }
    
    /**
     * return true if the empty value is permitted
     * @return boolean
     */
    public function getAllowEmpty(){
        return $this->allowEmpty ? 'true' : 'false';
    }
    /**
     * set alpha properties  for the control
     */
    public function setShowAlpha(){
        $this->showAlpha = true;
    }
    
    /**
     * return true if the alpha properties is set
     * @return boolean
     */    
    public function getShowAlpha(){
        return $this->showAlpha ? 'true' : 'false';
    }
    
    /**
     * set format color encoding. 
     * acceptable value :
     * rgb -> default
     * see more on http://bgrins.github.io/spectrum/#options-preferredFormat 
     * @param String $name
     */
    public function setPreferredFormat($name){
        $this->preferredFormat = $name;
    }
    
    /**
     * return format color encoding. 
     * @return String
     */
    public function getPreferredFormat(){
        return $this->preferredFormat;
    }

    public function __construct($name, $title = null, $value = '', $maxLength = null, $form = null) {
        parent::__construct($name, $title, $value, $maxLength, $form);
    }

    public function Field($properties = array()) {

        Requirements::css(basename(dirname(dirname(__FILE__))) . '/specturm/spectrum.css');

        Requirements::javascript(basename(dirname(dirname(__FILE__))) . '/specturm/spectrum.js');
        Requirements::javascript(basename(dirname(dirname(__FILE__))) . '/js/main.js');

        return parent::Field($properties);
    }

    public function getAttributes() {
        return array_merge(
                parent::getAttributes(), array(
                    'data-empty'=>  $this->getAllowEmpty(),
                    'data-alpha'=>  $this->getShowAlpha(),
                    'data-format'=>  $this->getPreferredFormat(),
                    'data-palette'=>  $this->getPalette(),
                    'data-togglepalettemoretext'=>  $this->getTogglePaletteMoreText(),
                    'data-canceltext'=>  $this->getCancelText(),
                    'data-choosetext'=>  $this->getChooseText(),
                    'data-togglepalettelesstext'=>  $this->getTogglePaletteLessText()
                )
        );
    }

}
