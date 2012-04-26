# Simple Media Queries Debugging

## The Content

**Deutsch**

Media Queries sind dabei sich zu etablieren, Vor- und Nachteile seien hier kein Thema. Definitiv ist das „Debuggen” nicht immer einfach und die Layouterstellung kann schnell komplex werden. Diese Lösung stellt die Umsetzung einer Idee dar, um den jeweiligen Viewport zu kennen, da im obersten Bereich der Seite dargestellt wird. Durch diese Werte kann auf die verschiedenen Weiten (width) eingegangen werden.

**English**

Media Queries are going to establish, the pros and cons are not an issue here. "Debugging" is not easy and creating layouts can be quickly complex. This solution is an idea to know the viewport, since it shows in the upper area of the page. Via these values you can use it for different width.

## How it works
The viewport width and height was add as `a :before` pseudo element on the body to help with obtaining values for responsive breakpoints. Also add on this pseudo element small formating values in the stylesheet.

You can include the `script.js` and/or `debug.css` for debugging in your custom project. It is possible to debugging the viewport easy with the scritp and also with the stylesheet. The difference is the values. The stylesheet has only defined values and the script get all values from the viewport and the stylesheet get also strings about portrait or landscape mode.

Also it is possible you use this solution as an bookmark inside your browser; see on the project [Media query bookmarklet](http://fhemberger.github.com/mediaquery-bookmarklet/) by Frederic Hemberger.

## Other Notes

### Contact & Feedback
The project is designed and developed by me ([Frank Bültge](http://bueltge.de))

Please let me know if you like the small project or you hate it or whatever ... Please fork it, add an issue for ideas and bugs.

### Disclaimer
I'm German and my English might be gruesome here and there. So please be patient with me and let me know of typos or grammatical farts. Thanks

### Licence
Good news, this plugin is free for everyone!

(The MIT-License)

Copyright (c) 2011-2012 Frank Bültge

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.