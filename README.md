# drupal8-field-formatters
## Example module for creating custom field formatters in Drupal 8

This is a simple module to show the basics of creating a custom field formatter.

The module includes two formatter plugins to customize the markup output of a simple text field.
For this example I'm just wrapping the field output in `<h1>` or `<h2>` tags.

The plugins are configured using annotations in the formatter class files.

The result looks like this:
<img width="895" alt="field formatter" src="https://user-images.githubusercontent.com/925526/37869277-e08ae1c8-2f71-11e8-9863-58343cbebf05.png">
