#Heyday silverstripe-publish-permissions

Provides the ability to have a permissions group which has editing rights but not publishing right.

##License

Publish permissions is licensed under an [MIT license](http://heyday.mit-license.org/)

##Installation

###Non-composer

To install just drop the silverstripe-publish-permissions directory into your SilverStripe root and run a /dev/build/?flush=1

###Composer

Add the following to your composer.json file:

```json

{
	"require": {
		"heyday/silverstripe-publish-permissions": "*"
	}
}