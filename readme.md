## Simple Media Queries Debugging

### The Content

**Deutsch**

Media Queries sind dabei sich zu etablieren, Vor- und Nachteile seien hier kein Thema. Definitiv ist das „Debuggen” nicht immer einfach und die Layouterstellung kann schnell komplex werden. Diese Lösung stellt die Umsetzung einer Idee dar, um den jeweiligen Viewport zu kennen, da im obersten Bereich der Seite dargestellt wird. Durch diese Werte kann auf die verschiedenen Weiten (width) eingegangen werden.

**English**

Media Queries are going to establish, the pros and cons are not an issue here. "Debugging" is not easy and creating layouts can be quickly complex. This solution is an idea to know the viewport, since it shows in the upper area of the page. Via these values you can use it for different width.

### How it works
Tthe viewport width and height was add as a :before pseudo element on the body to help with obtaining values for responsive breakpoints. Also add on this pseudo element small formating values in the stylesheet.