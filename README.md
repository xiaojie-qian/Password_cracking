# Password_cracking
This assignment is to build code to reverse an MD5 hash using a brute force technique where we simply 'forward hash' all possible combinations of characters in strings. This would be similar to a situation where an e-commerce site stored hashed passwords in its database and we somehow have gotten our hands on the database contents and we want to take the hashed password and determine the actual plaintext passwords.

This following is a list of people, and their hashed PIN values.
email                pin   hash_pin
-----                ---   --------
csev@umich.edu       ????  0bd65e799153554726820ca639514029
nabgilby@umich.edu   ????  aa36c88c27650af3b9868b723ae15dfc
pconway@umich.edu    ????  1ca906c1ad59db8f11643829560bab55
font@umich.edu       ????  1d8d70dddf147d2d92a634817f01b239
collemc@umich.edu    ????  acf06cdd9c744f969958e1f085554c8b
...
The application can easily crack all but one of these these PINs using your application.
