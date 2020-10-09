# Personal Laravel Helper
My Personal Laravel Helper

* Adicione o seguinte código no arquivo composer.json

```
"files": [
    "app/Helpers/isActive.php",
    "app/Helpers/sanitize.php"
]'
```

* Ficando .:

```
"autoload": {
        "psr-4": {
            "App\\": "app/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "files": [
            "app/Helpers/isActive.php",
            "app/Helpers/sanitize.php"
        ]
    },
```

* Após executar o comando .:

```
composer dump-autoload
```

* Com isso os Helpers já estarão funcionando.
