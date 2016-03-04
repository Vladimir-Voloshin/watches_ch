Task description
=================

**For your task, assume that watches have following properties:** <br />
Brand - one from the list: Rolex, A. Lange & Söhne, IWC, Breitling<br />
Model - this is a free text entry, not longer than 64 symbols<br />
Case site - mm<br />
Case material - one from the list: steel, titan, ceramic<br />
Bracelet - free entry<br />
Year - year<br />
Functions - multiple or none from the list: chronograph, date, small second, moonphase, day date,
perpetual calendar<br />
Price - in Euro<br />
SKU - uniquely identifies every watch, alphanumeric with no fixed length
Condition - one from the list: new, aaa, aa, a, vintage<br />
Images - a list of urls<br />
Slugified url - is computed automatically like this: [brand]-[model]-[sku]
use the best practices to make an url which is correct and easy to read<br />

**Using your REST interface it should be possible to:** <br />
Get a list of watches<br />
Get a watch by SKU<br />
Create a new watch<br />
Update watch<br />
Delete watch<br />

**To make it a little more challenging let’s add some rules, which you should validate:** <br />
A vintage watch cannot cost more than 50000 Euro<br />
A watch which is older than 20 years can only be vintage or aaa<br />
A new watch cannot be older than 4 years<br />
SKU should be unique<br />
A watch should have at least one image, and at most six of them<br />

Comments
----------------

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