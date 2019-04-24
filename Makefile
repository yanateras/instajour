default: logo.png style.css

%.css: %.sass
	sassc $< > $@

%.png: %.svg
	inkscape -z $< -e $@
