Minimal
=======

A minimalist theme for people that like text and not much else.


Customizing
-----------

=minimal= works out of the box, but can be customized to suit your needs. The
stylesheet is built with [SASS](http://sass-lang.com). 

Fonts and colours can be changed in the first section of the stylesheet.

New icons can be added by dropping the icon file into the "=icons=" folder and
adding the following to the stylesheet (where extension is the file extension to
use, such as =doc= or =htm=:

    @include icon-link('extension');

Icon files should be png files, the lowercase extension name and prefixed with
=icn_=.


Credits
-------

The file type icons come from [silk](http://www.famfamfam.com/lab/icons/silk/).
