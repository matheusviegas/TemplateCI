# TemplateCI
Biblioteca simples para trabalhar com templates no codeigniter.

## Como Configurar

Baixe o arquivo Template.php e coloque ele em **application/libraries/**

Acrescente a seguinte linha no seu **config.php**
```php
$config['template_padrao'] = 'temapadrao';
```
onde 'temapadrao' é o arquivo temapadrao.php que você deverá criar em **applications/views** que será o seu template em si.

Neste arquivo temapadrao.php você irá desenvolver seu template e após

