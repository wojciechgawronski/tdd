### TDD

The tests driving the development - write code to make the tests pass, no more. 

Testing the behaviour of the code, not how it's implemented.

### ItemClass

Class Item has public API. 
Private and protected methods are internal parts of the class.

Protected methods can be inheritants, so, unless declare is finall class protected methods shoud be tested. Because technicly they are still use outside of the class.

### Commits: 

- test protected property by Reflection API
- using Reflection API we can also can test private methods
- test private method by Reflection;)
- test protected method by Inheritance
- try to test protected method
- why protected methods should be tested
- refactor Item class
- new Item class with private and protected methods
- refactor test method - make it clearer
- refactor test using dataProviders to make it readable
- refactor method to realize the test
- new test, it can be code documentation
- refactor a slug method to trim start and end whitespaces
- test for start and end spaces
- refactor getSlug method to pass the test
- create white space test
- refactor slug method to pass the test
- new slug test and refactor slug class
- add function that pass/realize test
- write test for empty slug