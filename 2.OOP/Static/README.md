#Static methods and properties

- Declaring class properties or methods as static makes them accessible without needing an instantiation of the class.
  These can also be accessed statically within an instantiated class object.
  
- Because static methods are callable without an instance of the object created,
  the pseudo-variable $this is not available inside methods declared as static.