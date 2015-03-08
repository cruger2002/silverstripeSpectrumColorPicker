(function ($) {
    $.entwine('ss', function ($) {
        $('input.spectrumcolorpicker').entwine({
            getEmpty: function () {
                return this.data('empty');
            },
            getAlpha: function () {
                return this.data('alpha');
            },
            getFormat: function () {
                return this.data('format');
            },
            getPalette: function () { 
                return this.data('palette');
            },
            showPalette: function () { 
                if(this.data('palette').length)
                    return true;
                return false;
            },
            getTogglePaletteMoreText: function() {
                return this.data('togglepalettemoretext');               
            },
            getCancelText: function() {
                return this.data('canceltext');              
            },
            getChooseText: function() { 
                return this.data('choosetext');                
            },
            getTogglePaletteLessText: function() { 
                return this.data('togglepalettelesstext');                
            },
            onmatch: function () {
                var self = this;
                this.spectrum({
                    allowEmpty: self.getEmpty(),
                    showAlpha: self.getAlpha(),
                    preferredFormat: self.getFormat(),
                    showPaletteOnly: self.showPalette(),
                    togglePaletteOnly: self.showPalette(),
                    palette: self.getPalette(),
                    togglePaletteMoreText: self.getTogglePaletteMoreText(),
                    togglePaletteLessText: self.getTogglePaletteLessText(),
                    cancelText: self.getCancelText(),
                    chooseText: self.getChooseText()
                });
            }
        });
    });
})(jQuery);
