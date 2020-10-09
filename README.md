# Personal Laravel Helper
Meus Helpers Pessoais
My Personal Laravel Helper

* Adicione o seguinte código no arquivo composer.json
* Add the following code to the composer.json file

```
"files": [
    "app/Helpers/isActive.php",
    "app/Helpers/sanitize.php"
]'
```

* Resultado .:
* Result .:

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
* After execute the command .:

```
composer dump-autoload
```

* Os Helpers já estarão funcionando.
* The Helpers will already be working
