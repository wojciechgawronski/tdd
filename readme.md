# TDD

The tests are driving the development - we write code to make the tests pass, no more. 

We testing the behaviour of the code, not how it's implemented.

# Item

class Item has public API. 
Private and protected methods are internal parts of the class.

Protected methods can be inheritants, so, unless declare is finall class protected methods shoud be tested. Because technicli they are still use outside of the class.