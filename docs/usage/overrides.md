### Overrides

- [Introduction](#introduction)
- [Route Overrides](#route-overrides)
- [Model Overrides](#model-overrides)
- [Service Overrides](#service-overrides)

<a name="introduction"></a>
#### Introduction

Overrides in Platform 2 give you the ability to easily swap core functionality with your own custom functionality. You can register these overrides in the `app/overrides.php` file.

<a name="route-overrides"></a>
#### Route Overrides

Because we use an internal REST API, you have the ability to override any route for an API call to your own logic. This makes extending Platform 2 extremely easy and can be done from anywhere.

For example, overriding the page slug route.

	Route::group(array('prefix' => '{api}/v1'), function() use ($app)
	{
		Route::get('page/{slug}', 'My\Custom\PagesController@show')->where('slug', '.*?');
	});

<a name="route-overrides"></a>
#### Model Overrides

The default Platform extensions use the IoC to resolve model instances. You can override these here by simply returning your own model which extends ours.

For example, overriding the default Platform 2 Content model.

	$app['Platform\Content\Models\Content'] = new My\Custom\Models\Content;

<a name="route-overrides"></a>
#### Service Overrides

Each Service Provider and Extension registers a number of application services. This is a great spot to easily override these to customize the behavior of your Platform application.

	$app['foo.bar'] = $app->share(function($app)
	{
		return new My\Foo\Bar;
	});