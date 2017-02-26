# AFNtoAFD
Simple project for my class, using graphviz package and dotScript langage to draw automata.

# How to use it
this project is based on an existing project on Github called "Automata.js".
I installed LAMP server on Linux then graphviz package (google it and click first link), related documentation on the same website.
I added a section, that embedded graphviz package in a web server; Just create a script file on your home directory, ex: /home/user/EXAMPLE/demoDot.sh or anywhere except /var/www for security reasons, and set permissions: chmod 777 demoDot.sh.
Then write this line into your scipt:
```
#!/bin/bash
/usr/bin/dot -Tsvg demo.dot -o demo.svg
```
demo.svg is the output file.
for png output:
```
#!/bin/bash
/usr/bin/dot -Tpng demo.dot -o demo.png
```
```demot.dot:``` contains the dotscript langage, ex:
```

digraph G{
	a -> b;
	b -> c;
	c -> a;

}
```
