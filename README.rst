Mediawiki2HTML machine
===========================
A pure-PHP Mediawiki to HTML converter. 

This is a project from 2006. Here is the original description:
Whats special about this project?

* I don’t want to run the Mediawiki engine. This is intended to be a true alternative parser.
* It’s in PHP, without mysql, perl or some other strange stuff...

This project should convert Mediawiki markup to html without the use of the Mediawiki engine.

How it works:
--------------

convert.php illustrates how to use the code, if $html contains the wikimedia source code (e.g. from a data dump).

The simpleText and convertTables functions are in parseRaw.php and table-converter.inc.php respectively.

TODO
----------
* Improve table handling


LICENSE
------------
AGPL3+



