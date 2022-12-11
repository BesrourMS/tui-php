# TUI PHP

PHP implementation for [TUI.js](https://github.com/McZen-Technologies/TUI) (Tunisia’s Unique Identifier)

## Installation
Use the dependancy mananger [composer] to install `tui-php`.

```bash
composer require besrourms/tui-php
```

## Usage
```php
use besrourms\Matricule\TUI;

$matricule = new TUI("1234567A");

if($matricule->isValid()){
	echo "Matricule valide";
}else{
	echo "Il y a un problème avec la matricule";
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
