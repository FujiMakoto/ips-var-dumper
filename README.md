# Var Dumper

**IMPORTANT: This is a development resource. Do not install this application on a production server.**

Adds support for Symfony's VarDumper class via Laravel's famous ```dd()``` and ```dump()``` functions.

If you're not familiar with what those are, it essentially is a much, much prettier and functional version of var_dump() and die(var_dump()) for debugging.

Output is syntax highlighted and arrays can be expanded/collapsed. If you use var_dump() a lot in your debugging routine, this will be your best friend.

## Installation

Literally just install it. That's it. The installed application runs eval() to force the functions ```dd()``` and ```dump()``` into the global namespace, so you can use them anywhere while debugging your code.