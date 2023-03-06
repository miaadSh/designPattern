###DecoratorDesignPattern:Decorator Design Pattern
ReadMe Format is used to explain the Decorator Design Pattern.

Main components:
Component Interface: This defines the interface of components which will be wrapped by the decorator patterns.
Concrete Component: This implements the component interface and is responsible for storing the state of the application.
Decorator: This abstract class implements the component interface, it has references to a base object and all classes that extend it are decorators.
Concrete Decorator: This extends the decorator class, overriding the methods of the base class to modify the output.

#Example:
class ComponentInterface:
This method should be implemented by concrete components

```py
def operation(self):
 raise NotImplementedError

class ConcreteComponent(ComponentInterface):

    # Implement the operation
    def operation(self):
        return "Base Operation"

class Decorator(ComponentInterface): # A reference to a base object
def **init**(self, obj):
self.obj = obj

    # Calling the method of the object being decorated
    def operation(self):
        return self.obj.operation()

class ConcreteDecoratorA(Decorator): # Extending the base functionality
def operation(self):
return "Extended-Operation A - " + super().operation()

class ConcreteDecoratorB(Decorator): # Extending more functionality
def operation(self):
return "Extended-Operation B - " + super().operation()

# Using the pattern

def main(): # Instantiate the components
obj = ConcreteComponent()
decA = ConcreteDecoratorA(obj)
decB = ConcreteDecoratorB(decA)

    # Make the calls
    print(decB.operation())

if **name** == '**main**':
main()
```
