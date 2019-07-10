# firma-xades-cr

Adaptación del proyecto [hacienda-firmador-php](https://github.com/enzojimenez/hacienda-firmador-php) de [enzojimenez](https://github.com/enzojimenez) para instalarse mediante composer

### Instalación

```bash
composer require stibenamm/firma-xades-cr:dev-master
```

### Ejemplo rápido laravel
```php
//routes/web.php
Route::get('/', function(){
	$firmador = new Stibenamm\FirmaXadesCR\Firmador();
  	$xml = '/ruta/archivoXml';
  	$pfx = '/ruta/llaveCriptografica';
  	$pin = '0000';
  	$archivo = $firmador->firmarXml($pfx,$pin,$xml,$firmador::TO_XML_STRING);
  	return response($archivo, '200')->header('Content-Type', 'text/xml');
});
```
