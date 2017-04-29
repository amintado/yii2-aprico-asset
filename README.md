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
 
 
 # header sample code:
 here is a sample of Apricot header code.
 this code is written in layouts/header.php
 ````php
 <?php
 
 use amintado\widgets\Navbar;
 use amintado\widgets\NavbarItems;
 use Behat\Gherkin\Loader\YamlFileLoader;
 use common\models\User;
 use common\models\Userinfo;
 
 if (!Yii::$app->user->isGuest){
     $uid=Yii::$app->user->id;
     $username=User::findOne($uid);
     try {
         $username=$username->fullname;
     } catch ( Exception $exception) {
         $username='';
     }
 }
 
 
 Navbar::begin();
 
 echo NavbarItems::widget([
 
     'right' =>
         [
             [
                 'user' =>
                     [
                         'name' => $username
 
                     ],
                 'weather' =>
                     [
 
                     ]
             ]
         ],
 
 
 ]);
 
 Navbar::end();
 ````
 # sidebar sample code
 
here is a sample code of sidebar widget that is written in layouts/left.php file

````php
<?php use amintado\widgets\SideBar;
use amintado\widgets\SideBarItems;

SideBar::begin() ?>


<?php echo SideBarItems::widget([
    'items' => [
        ['panel' =>
            [
                'label' => 'داده های شما',
                'items' =>
                    [
                        [
                            'type' => 'single',
                            'icon' => 'fa fa-map-marker',
                            'label' => 'مکان ها',
                            'url' => '#',
                            'id' => ''
                        ],
                        [
                            'type' => 'single',
                            'icon' => 'fa fa-user',
                            'label' => 'پروفایل',
                            'url' => '#',
                            'id' => ''
                        ],
                        [
                            'type' => 'multiple',
                            'label' => 'محصولات',
                            'icon' => 'fa fa-inbox',
                            'badge' => [
                                'color' => '',
                                'label' => ''
                            ],
                            'items' => [
                                [
                                    'type' => 'single',
                                    'icon' => 'icon-feed',
                                    'label' => 'social',
                                    'url' => '#',
                                    'id' => ''
                                ],
                                [
                                    'type' => 'single',
                                    'icon' => 'icon-feed',
                                    'label' => 'social',
                                    'url' => '#',
                                    'id' => ''
                                ],
                            ]
                        ]

                    ]
            ]
        ],
        ['panel' =>
            [
                'label' => 'تنظیمات شما',
                'items' =>
                    [

                    ]
            ]
        ]
    ]

])
?>


<?php SideBar::end() ?>
````

# content code sample
 here is a sample for content code.
 this code is written in layouts/content.php file
 
 ````php
 <div class="wrap-fluid" style="width: auto; margin-right: 250px;">
     <div class="container-fluid paper-wrap bevel tlbr">
 
 
         <!-- CONTENT -->
         <!--TITLE -->
         <div class="row">
             <div id="paper-top">
                 <div class="col-sm-2">
                     <div class="devider-vertical visible-lg"></div>
                     <div class="btn-group btn-wigdet pull-right visible-lg">
                         <div class="btn">
                             ابزار
                         </div>
                         <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                             <span class="caret"></span>
                             <span class="sr-only">Toggle Dropdown</span>
                         </button>
                         <ul role="menu" class="dropdown-menu">
                             <li>
                                 <a href="#">
                                     <span class="entypo-plus-circled margin-iconic"></span>Add New</a>
                             </li>
                             <li>
                                 <a href="#">
                                     <span class="entypo-heart margin-iconic"></span>Favorite</a>
                             </li>
                             <li>
                                 <a href="#">
                                     <span class="entypo-cog margin-iconic"></span>Setting</a>
                             </li>
                         </ul>
                     </div>
 
 
                 </div>
                 <div class="col-sm-7">
                     <div class="devider-vertical visible-lg"></div>
                     <div class="tittle-middle-header">
 
                         <div class="alert text-right">
                             <button type="button" class="close pull-left" data-dismiss="alert">×</button>
 
                             خوش اومدید ُ&nbsp;
                             <strong>غلامرضا بهشتیا عزیز</strong>&nbsp;&nbsp;آخرین بازدید شما از این صفحه دیروز بوده است
                             <span class="tittle-alert entypo-info-circled "></span>
                         </div>
 
 
                     </div>
 
                 </div>
                 <div class="col-sm-3">
                     <h2 class="tittle-content-header">
                         داشبرد
                         <span>
                             <i class="icon-window"></i>
 
                             </span>
                     </h2>
 
                 </div>
             </div>
         </div>
         <!--/ TITLE -->
 
         <!-- BREADCRUMB -->
         <ul id="breadcrumb">
             <li class="pull-left">
                 <div class="input-group input-widget">
 
                     <input style="border-radius:15px" placeholder="جست و جو" class="form-control text-right" type="text">
                 </div>
             </li>
             <li>
                 <span class="entypo-home"></span>
             </li>
             <li><i class="fa fa-lg fa-angle-right"></i>
             </li>
             <li><a href="#" title="Sample page 1">پروفایل</a>
             </li>
             <li><i class="fa fa-lg fa-angle-right"></i>
             </li>
             <li><a href="#" title="Sample page 1">میز کار</a>
             </li>
 
         </ul>
 
         <!-- END OF BREADCRUMB -->
 
         <div class="col-sm-12">
 
             <div class="nest text-right" id="FootableClose">
                 <div class="title-alt text-right">
 
                     <div class="titleClose">
                         <a class="gone" href="#FootableClose">
                             <span class="entypo-cancel"></span>
                         </a>
                     </div>
                     <div class="titleToggle">
                         <a class="nav-toggle-alt" href="#Footable">
                             <span class="entypo-up-open"></span>
                         </a>
                     </div>
                     <h6>
                         <?= $this->title?>
                     </h6>
                 </div>
 
                 <div class="body-nest">
 
 
 
                     <?= $content ?>
 
                 </div>
 
             </div>
 
 
         </div>
 
 
 
 
         <div class="content-wrap">
 
             <!-- /END OF CONTENT -->
 
 
             <!-- FOOTER -->
             <div class="footer-space"></div>
             <div id="footer">
                 <div class="devider-footer-left"></div>
                 <div class="time">
                     <p id="spanDate"></p>
                     <p id="clock"></p>
                 </div>
                 <div class="copyright">
                     تقدیم با عشق
                     <span class="entypo-heart"></span> سال 1396 <a href="http://shahrmap.ir"> سایت شهرمپ </a>
                    همه ی حقوق محفوظ است
                 </div>
                 <div class="devider-footer"></div>
 
 
             </div>
             <!-- / END OF FOOTER -->
 
 
         </div>
     </div>
 </div>
 ````
 
 
