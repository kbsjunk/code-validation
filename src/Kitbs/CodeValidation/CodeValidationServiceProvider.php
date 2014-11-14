<?php namespace Kitbs\CodeValidation;

use Illuminate\Support\ServiceProvider;

class CodeValidationServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('kitbs/code-validation');

        $this->app['validator']->resolver(
            function ($translator, $data, $rules, $messages) {
                $customMessages = $this->app['translator']->get('code-validation::validation');
                $messages = array_merge($messages, array_except($customMessages, 'attributes'));

                $validator = new CodeValidator($translator, $data, $rules, $messages);

                $attributes = array_merge(
                    $this->app['translator']->get('code-validation::validation.attributes', array(), 'en'),
                    $customMessages['attributes']
                );

                $validator->setAttributeNames($attributes);

                return $validator;
            });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}
