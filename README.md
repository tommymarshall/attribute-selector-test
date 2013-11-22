# Attribute Selector Test
Attribute selectors have a bad rap for being notoriously slow. But just how are slow? Clone the repo and see for yourself.

## Examples of Selectors

### Single Class Names
Select a class that contains "button--blue":
    .button--blue {
        padding: 1em 2em;
        background: blue;
    }

### Multiple Class Names
Select a class that contains "button" and "button--blue":
    .button {
        padding: 1em 2em;
    }
    .button--blue {
        background: blue;
    }

### Attribute Selecot
Select a class that begins with "button" and contains the word "blue":
    [class^="button"][class*="blue"] {
        background: blue;
        padding: 1em 2em;
    }

### Without Attribute Selectors
![without](http://cl.ly/image/3v0u1V1h1f1p/Screen%20Shot%202013-11-22%20at%2011.59.43%20AM.png)

### With Attribute Selectors
![with](http://cl.ly/image/3p1w2k2b1310/Screen%20Shot%202013-11-22%20at%2012.02.54%20PM.png)

## Conclusions?
So for 200 elements getting selected via attribute selection, the difference is 25 milliseconds. That's about 0.125 milliseconds per element targeted. You know what's much slower than this? `* {box-sizing: border-box}`