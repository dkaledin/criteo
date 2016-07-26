# criteo
Simple php library to generate code Criteo OneTag

# Example use

## Homepage
```php
$criteo = new Criteo();

$criteo->setAccount(array('account' => 'YOUR ACCOUNT ID'));
$criteo->setEmail(array('email' => 'example@example.com')); 
$criteo->setSiteType(array('type' => 'd'));
$criteo->viewHome();

echo $criteo->getCode(); // Show JS code
```

## Listing page
```php
$criteo = new Criteo();

$criteo->setAccount(array('account' => 'YOUR ACCOUNT ID'));
$criteo->setEmail(array('email' => 'example@example.com')); 
$criteo->setSiteType(array('type' => 'd'));
$criteo->viewList(array('item' => array(123, 124, 125))); // Add Your items

echo $criteo->getCode(); // Show JS code
```

## Product page
```php
$criteo = new Criteo();

$criteo->setAccount(array('account' => 'YOUR ACCOUNT ID'));
$criteo->setEmail(array('email' => 'example@example.com')); 
$criteo->setSiteType(array('type' => 'd'));
$criteo->viewItem(array('item' => 124)); // Add Your item

echo $criteo->getCode(); // Show JS code
```

## Basket page
```php
$criteo = new Criteo();

$criteo->setAccount(array('account' => 'YOUR ACCOUNT ID'));
$criteo->setEmail(array('email' => 'example@example.com')); 
$criteo->setSiteType(array('type' => 'd'));
$criteo->viewBasket(array( // Add Items in Customer basket
    'item' => array(
      array(
        'id' => 123,
        'price' => 29.90
        'quantity' => 1
      ),
      array(
        'id' => 234,
        'price' => 19.90,
        'quantity' => 3
      )
    )
  )
); 

echo $criteo->getCode(); // Show JS code
```

## Sales Confirmation page
```php
$criteo = new Criteo();

$criteo->setAccount(array('account' => 'YOUR ACCOUNT ID'));
$criteo->setEmail(array('email' => 'example@example.com')); 
$criteo->setSiteType(array('type' => 'd'));
$criteo->trackTransaction(array( // Add Items in Customer basket
    'id' => 'transaction_id' // Order Number
    'item' => array(
      array(
        'id' => 123,
        'price' => 29.90
        'quantity' => 1
      ),
      array(
        'id' => 234,
        'price' => 19.90,
        'quantity' => 3
      )
    )
  )
); 

echo $criteo->getCode(); // Show JS code
```
