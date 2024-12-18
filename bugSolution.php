To avoid this issue, always check if a key exists before accessing it.  Here are a few ways to do this:

**1. Using `isset()`:**
```php
$myArray = ['a' => 1, 'b' => 2];
if (isset($myArray['c'])) {
  echo $myArray['c'];
} else {
  echo 'Key "c" does not exist';
}
```

**2. Using `array_key_exists()`:**
```php
$myArray = ['a' => 1, 'b' => 2];
if (array_key_exists('c', $myArray)) {
  echo $myArray['c'];
} else {
  echo 'Key "c" does not exist';
}
```

**3. Using the null coalescing operator (`??`):** (PHP 7.0 and later)
```php
$myArray = ['a' => 1, 'b' => 2];
$value = $myArray['c'] ?? 'Key "c" does not exist';
echo $value;
```
This code will output a default value ('Key "c" does not exist' in this case) if the key is not found, preventing unexpected behavior.  Choose the method that best suits your coding style and the context of your application.