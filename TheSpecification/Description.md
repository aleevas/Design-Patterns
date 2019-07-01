###  The Specfication Pattern 

Though certainly not for everything, you may find situations where the specification pattern can prove to be exactly what you need. In this lesson, we'll review the core concept, while using TDD and PHPUnit to drive our code.

#### [Wiki](https://en.wikipedia.org/wiki/Specification_pattern)

In computer programming, the specification pattern is a particular software design pattern, whereby business rules can be recombined by chaining the business rules together using boolean logic. The pattern is frequently used in the context of domain-driven design.

A specification pattern outlines a business rule that is combinable with other business rules. In this pattern, a unit of business logic inherits its functionality from the abstract aggregate Composite Specification class. The Composite Specification class has one function called IsSatisfiedBy that returns a boolean value. After instantiation, the specification is "chained" with other specifications, making new specifications easily maintainable, yet highly customizable business logic. Furthermore, upon instantiation the business logic may, through method invocation or inversion of control, have its state altered in order to become a delegate of other classes such as a persistence repository.
