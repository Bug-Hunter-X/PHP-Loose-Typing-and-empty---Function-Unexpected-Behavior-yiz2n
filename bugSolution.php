```php
function myFunc($param) {
  if ($param === null) {
    return 'null';
  } elseif ($param === false) {
    return 'false';
  } elseif ($param === "") {
    return 'empty string';
  } elseif ($param === 0) {
    return '0';
  } elseif (is_array($param) && empty($param)) {
    return 'empty array';
  } else {
    return $param;
  }
}

$result1 = myFunc(null); // Output: null
$result2 = myFunc(false); // Output: false
$result3 = myFunc(0); // Output: 0
$result4 = myFunc(''); // Output: empty string
$result5 = myFunc([]); // Output: empty array
$result6 = myFunc('hello'); // Output: hello
$result7 = myFunc('0'); // Output: 0
```