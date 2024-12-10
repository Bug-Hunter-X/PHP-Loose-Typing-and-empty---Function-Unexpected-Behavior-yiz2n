```php
function myFunc($param) {
  if ($param === null) {
    return 'null';
  } elseif ($param === false) {
    return 'false';
  } elseif (empty($param)) {
    return 'empty';
  } else {
    return $param;
  }
}

$result1 = myFunc(null); // Output: null
$result2 = myFunc(false); // Output: false
$result3 = myFunc(0); // Output: 0 
$result4 = myFunc(''); // Output: empty
$result5 = myFunc([]); // Output: empty
$result6 = myFunc('hello'); // Output: hello

// The unexpected behavior
$result7 = myFunc(0); // Output: 0 (this is expected)
$result8 = myFunc('0'); // Output: 0  (this is unexpected, should be '0')
```