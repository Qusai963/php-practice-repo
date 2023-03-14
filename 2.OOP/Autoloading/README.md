# Auto loading

- Autoloading is PHP's way to automatically find classes and their corresponding files without having to require all of them manually.

## Uses

- By using autoloading, developers can avoid the time-consuming task of manually including every class and file in their code,
  which can save a lot of effort and reduce the potential for errors. Additionally,
  autoloading can improve the performance of a program by reducing the amount of time spent loading unnecessary classes or files.
  
## Defining

- spl_autoload_register('my_autoloader');