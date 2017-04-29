# yii2-aprico-asset
this project contine apricot admin panel for yii2
this version is contine:
 
 * Apricot Admin assets
 * Apricot Admin Views and Layouts
 * Apricot widgets:
    * SideBar Widget
    *  Chart Widget
    *   SideBar Items Widget
 * Multilingual Messages
 
 # install on yii2
 add this code to composer.json file:
 ````
 "amintado/yii2-aprico-asset": "2.*"
 ````
or Either run
 ````
 php composer.phar require amintado/yii2-aprico-asset "*"
 ````
 ![6dcf0187-d16a-4505-5c05-270e689bafee](https://cloud.githubusercontent.com/assets/11722893/25552669/2721a498-2cb5-11e7-858f-195ea733356f.png)
 
 ![apricot v 1 3](https://cloud.githubusercontent.com/assets/11722893/25552696/af14f9d6-2cb5-11e7-9aa4-66de11e42527.png)




# online demo

* Apricot Admin Panel Online [DEMO](http://preview.themeforest.net/item/apricot-navigation-admin-dashboard-template/full_screen_preview/7664475)

Usage
-----
add this code to config.php file in component array:
```php
 'components' => [
     'view' => [
                 'title' => Yii::t('backend','app-name'),
                 'theme' => [
                     'pathMap' => [
                         '@app/views' => '@vendor/amintado/yii2-aprico-asset/example-views/yiisoft/yii2-advanced-app'
                                    ],
                             ],
                ],
 ]
 ```
 
 go to:
  ````
 vendor/amintado/yii2-aprico-asset/example-views/yiisoft/yii2-app
 ````
 copy [layouts] and [site] folders to your view folder in your project.
 
 