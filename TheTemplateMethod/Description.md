###  The Template Method Pattern 

A decorator allows us to dynamically extend the behavior of a particular object at runtime, without needing to resort to unnecessary inheritance. Let me give you a demonstration.

#### [Wiki](https://en.wikipedia.org/wiki/Decorator_pattern)

In object-oriented programming, the template method is one of the behavioral design patterns identified by Gamma et al.[1] in the book Design Patterns. The template method is a method in a superclass, usually an abstract superclass, and defines the skeleton of an operation in terms of a number of high-level steps. These steps are themselves implemented by additional helper methods in the same class as the template method.

The helper methods may be either abstract methods, for which case subclasses are required to provide concrete implementations, or hook methods, which have empty bodies in the superclass. Subclasses can (but are not required to) customize the operation by overriding the hook methods. The intent of the template method is to define the overall structure of the operation, while allowing subclasses to refine, or redefine, certain steps.[2] 