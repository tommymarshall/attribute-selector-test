# Attribute Selector Test
Attribute selectors have a bad rap for being notoriously slow. But just how are slow? Clone the repo and see for yourself.

## Examples of Selectors

### Selecting Single Class Names
Ie. Select a class that contains "button--blue":

    .button--blue {
        padding: 1em 2em;
        background: blue;
    }

![Selecting Single Class Names](http://cl.ly/image/3K3r1S1O1u0q/Screen%20Shot%202013-11-22%20at%202.22.44%20PM.png)

### Selecting Multiple Class Names
Ie. Select a class that contains "button" and "button--blue":

    .button {
        padding: 1em 2em;
    }

    .button--blue {
        background: blue;
    }

![Selecting Multiple Class Names](http://cl.ly/image/2f3D2F3h2p0P/Screen%20Shot%202013-11-22%20at%202.22.33%20PM.png)

### Begins with and Contains Attribute Selector
Ie. Select a class that begins with "button" and contains the word "blue":

    [class^="button"][class*="blue"] {
        background: blue;
        padding: 1em 2em;
    }

![Begins with and Contains Attribute Selector](http://cl.ly/image/2t2G2O1z3b0N/Screen%20Shot%202013-11-22%20at%202.22.57%20PM.png)

## Conclusion
When targeting 600 different elements, the difference in