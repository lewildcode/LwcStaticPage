LwcStaticPage
=============

To install via composer, add the repository to your composer.json

    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "LwcStaticPage",
                "version": "1.0.0",
                "source": {
                    "url": "http://github.com/lewildcode/LwcStaticPage",
                    "type": "git",
                    "reference": "master"
                }
            }
        }
    ],

then add the package to the require block

    "require": {
        "LwcStaticPage": "1.*"
    }

Finally, add the "LwcStaticPage" module to the config/application.config.php.

To create a static page now, create a route, which uses "LwcStaticPage\Controller" as controller and provides the path to a view template with the route parameter "file".

    'imprint' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
            'route' => '/imprint',
            'defaults' => array(
                'controller' => 'LwcStaticPage\Controller',
                'action' => 'index',
                'file' => 'static/imprint'
            )
        )
    )
