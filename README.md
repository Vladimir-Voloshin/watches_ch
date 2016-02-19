Task description
=================


For your task, assume that watches have following properties:
Brand - one from the list: Rolex, A. Lange & Söhne, IWC, Breitling
Model - this is a free text entry, not longer than 64 symbols
Case site - mm
Case material - one from the list: steel, titan, ceramic
Bracelet - free entry
Year - year
Functions - multiple or none from the list: chronograph, date, small second, moonphase, day date,
perpetual calendar
Price - in Euro
SKU - uniquely identifies every watch, alphanumeric with no fixed length
Condition - one from the list: new, aaa, aa, a, vintage
Images - a list of urls
Slugified url - is computed automatically like this: [brand]-[model]-[sku]
use the best practices to make an url which is correct and easy to read
Using your REST interface it should be possible to:
Get a list of watches
Get a watch by SKU
Create a new watch
Update watch
Delete watch
To make it a little more challenging let’s add some rules, which you should validate:
A vintage watch cannot cost more than 50000 Euro
A watch which is older than 20 years can only be vintage or aaa
A new watch cannot be older than 4 years
SKU should be unique
A watch should have at least one image, and at most six of them

Comments
=================

It should take you no more 

than 2-3 hours.

As we are in the watch business, your task is to implement a simple REST interface, which 

provides CRUD functions for individual watches. 

You can use any PHP framework and PHP libraries you want, but please do not use a library, 

which does all the CRUD via configuration - we want to see some code :)

Feel free to use any DB you feel suits best for the task: MySQL, NoSQL, text files, etc.

It would be nice if we could execute your code in vagrant provisioned machine or docker container.

It’s up to you to design the URL structure for the REST interface.

To gain extra points, add unit tests to test the business logic