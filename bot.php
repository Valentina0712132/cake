<?php
require './vendor/autoload.php';
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\ElementButton;
use BotMan\Drivers\Facebook\Extensions\Element;
use BotMan\Drivers\Facebook\Extensions\GenericTemplate;
use BotMan\Drivers\Facebook\Extensions\MediaTemplate;
use BotMan\Drivers\Facebook\Extensions\MediaUrlElement;


$config = [
    'facebook' => [
    'token' => 'EAADARchkZBaoBAH1ZAsBQdvK9tESc55ZCW3mCLRYFf86pkHsLEcOrOVzY85u4MMPHorD2tT3vLwq3VkJG3T1quOsVJjYHFZBth5SlgWv0xi155VodZA91mRvPJK2XRI9XmZB3bivbxnjj9PyxDe32uS9G3t36wm4ajFtT0B009okYZBok3TgX91',
    'app_secret' => 'a7b68e76d3ddb4467b92930af6e034cd',
    'verification'=>'meow123',
]
];
// Load the driver(s) you want to use
DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);
// Create an instance
$botman = BotManFactory::create($config);
$botman->fallback(function($bot){
    $bot->reply("您好~Cheesecake Factory營業時間為平日8:00-17:00, 請使用messenger與我們聯絡, 或撥打0954-452358, 將有專人為您服務, 感謝!");
});

//訂購
$botman->hears(".*訂購.*", function (BotMan $bot){
    $bot->reply(Question::create("請問您是否要訂購蛋糕?")->addButtons([
                    Button::create('是')->value('yes')->image('https://ef78cf71f4f8.ngrok.io/new/images/label.png'),
                    Button::create('否')->value('no')->image('https://ef78cf71f4f8.ngrok.io/new/images/label.png'),
    ]));
});

$botman->hears("yes", function (BotMan $bot){
        $bot->reply(ButtonTemplate::create('感謝您對Cheesecake Factory的愛戴,訂購詳請請參考官網說明,感謝您~')        
            ->addButton(ElementButton::create('官網底家')       
                   ->type('web_url')
                   ->url('https://ef78cf71f4f8.ngrok.io/new/index.php'))
                );
});

$botman->hears("no|否", function (BotMan $bot){
    $bot->reply("哭哭喔~那請讓小編向您介紹菜單吧");
    $bot->reply(MediaTemplate::create()
    ->element(MediaUrlElement::create('image')
        ->url('https://www.facebook.com/102124831985974/photos/a.123160023215788/123159899882467/')
        ->addButtons([
            ElementButton::create('放大看菜單')->url('https://www.facebook.com/102124831985974/photos/a.123160023215788/123159899882467/'),
            ElementButton::create('推薦蛋糕')->type('postback')->payload('推薦蛋糕'),
        ])
    )
);
});

//推薦
$botman->hears(".*推薦.*", function (BotMan $bot){
    $bot->reply(Question::create("請問您是否向您推薦蛋糕?")->addButtons([
                    Button::create('是')->value('是')->image('https://ef78cf71f4f8.ngrok.io/new/images/label.png'),
                    Button::create('否')->value('否')->image('https://ef78cf71f4f8.ngrok.io/new/images/label.png'),
    ]));
});

$botman->hears("是", function (BotMan $bot){
    $bot->reply(Question::create("請問您個人偏好較甜還是較不甜的蛋糕?")->addButtons([
                    Button::create('我是螞蟻人')->value('螞蟻'),
                    Button::create('不用太甜')->value('不甜'),
    ]));
});


$botman->hears("螞蟻", function (BotMan $bot){
    $bot->reply(Question::create("請問您喜歡帶有水果酸甜口味的蛋糕?")->addButtons([
                    Button::create('喜歡~')->value('喜歡'),
                    Button::create('還好')->value('還好'),
    ]));
});
$botman->hears("不甜", function (BotMan $bot){
    $bot->reply(Question::create("請問您喜歡有酒香的蛋糕?")->addButtons([
                    Button::create('酒香讚讚')->value('酒香'),
                    Button::create('滴酒不沾')->value('不沾'),
    ]));
});
$botman->hears("喜歡", function (BotMan $bot){
    $bot->reply(Question::create("為您推薦--紐約起士蛋糕")->addButtons([
                    Button::create('紐約起士蛋糕')->value('紐約起士蛋糕')->image('https://ef78cf71f4f8.ngrok.io/new/images/newyork.jpg'),
    ]));
});
$botman->hears("還好", function (BotMan $bot){
    $bot->reply(Question::create("請問您喜歡起士蛋糕?")->addButtons([
                    Button::create('就是要起士')->value('起士'),
                    Button::create('還好')->value('不起士'),
    ]));
});
$botman->hears("酒香", function (BotMan $bot){
    $bot->reply(Question::create("為您推薦--貝里斯起士蛋糕")->addButtons([
                    Button::create('貝里斯起士蛋糕')->value('貝里斯起士蛋糕')->image('https://ef78cf71f4f8.ngrok.io/new/images/berry1.jpg'),
    ]));
});
$botman->hears("不沾", function (BotMan $bot){
    $bot->reply(Question::create("請問您較喜歡鬆軟的蛋糕,還是有口感的幕斯蛋糕?")->addButtons([
                    Button::create('要鬆軟')->value('鬆軟'),
                    Button::create('要幕斯')->value('幕斯'),
    ]));
});
$botman->hears("起士", function (BotMan $bot){
    $bot->reply(Question::create("為您推薦--Oreo起士蛋糕")->addButtons([
                    Button::create('Oreo起士蛋糕')->value('Oreo起士蛋糕')->image('https://ef78cf71f4f8.ngrok.io/new/images/oreo.jpg'),
    ]));
});
$botman->hears("不起士", function (BotMan $bot){
    $bot->reply(Question::create("為您推薦--黑森林蛋糕")->addButtons([
                    Button::create('黑森林蛋糕')->value('黑森林蛋糕')->image('https://ef78cf71f4f8.ngrok.io/new/images/cake3.jpg'),
    ]));
});
$botman->hears("鬆軟", function (BotMan $bot){
    $bot->reply(Question::create("為您推薦--水果戚風蛋糕")->addButtons([
                    Button::create('水果戚風蛋糕')->value('水果戚風蛋糕')->image('https://ef78cf71f4f8.ngrok.io/new/images/cake1.jpg'),
    ]));
});
$botman->hears("幕斯", function (BotMan $bot){
    $bot->reply(Question::create("為您推薦--藍莓優格蛋糕")->addButtons([
                    Button::create('藍莓優格蛋糕')->value('藍莓優格蛋糕')->image('https://ef78cf71f4f8.ngrok.io/new/images/cake2.jpg'),
    ]));
});

//食物
$botman->hears('.*食物.*', function(BotMan $bot){
    $bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
            ->addElements([
                //第一個陣列元素
                Element::create('起士蛋糕')//連結(chain)調用addElement()
                    ->subtitle('歡慶母親節~所有蛋糕特惠中!!')
                    ->addButton(ElementButton::create('紐約起士蛋糕')
                            ->type('postback')
                            ->payload('紐約起士蛋糕'))
                    ->addButton(ElementButton::create('Oreo起士蛋糕')
                            ->type('postback')
                            ->payload('Oreo起士蛋糕'))
                    ->addButton(ElementButton::create('貝里斯起士蛋糕')
                            ->type('postback')
                            ->payload('貝里斯起士蛋糕'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/newyork.jpg'),
                
                //第二個陣列元素
                Element::create('生日蛋糕')//連結(chain)調用addElement()
                    ->subtitle('歡慶母親節~所有蛋糕特惠中!!')
                    ->addButton(ElementButton::create('水果戚風蛋糕')
                            ->type('postback')
                            ->payload('水果戚風蛋糕'))
                    ->addButton(ElementButton::create('藍莓優格蛋糕')
                            ->type('postback')
                            ->payload('藍莓優格蛋糕'))
                    ->addButton(ElementButton::create('黑森林蛋糕')
                            ->type('postback')
                            ->payload('黑森林蛋糕'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/cake1.jpg'),
                    ])
            );
});

$botman->hears('紐約起士蛋糕', function(BotMan $bot){
    $bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
            ->addElements([
                Element::create('紐約起士蛋糕')//連結(chain)調用addElement()
                    ->subtitle('莓果的香氣+起士的濃郁=絕妙好滋味')
                    ->addButton(ElementButton::create('官網訂購')
                            ->url('https://ef78cf71f4f8.ngrok.io/new/index.php'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/newyork1.jpg'),
                    ])
            );
});

$botman->hears('Oreo起士蛋糕', function(BotMan $bot){
    $bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
            ->addElements([
                Element::create('Oreo起士蛋糕')//連結(chain)調用addElement()
                    ->subtitle('喜歡Oreo的你不能錯過')
                    ->addButton(ElementButton::create('官網訂購')
                            ->url('https://ef78cf71f4f8.ngrok.io/new/index.php'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/oreo.jpg'),
                    ])
            );
});

$botman->hears('貝里斯起士蛋糕', function(BotMan $bot){
    $bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
            ->addElements([
                Element::create('貝里斯起士蛋糕')//連結(chain)調用addElement()
                    ->subtitle('貝里斯酒香和奶油起士的完美搭配')
                    ->addButton(ElementButton::create('官網訂購')
                            ->url('https://ef78cf71f4f8.ngrok.io/new/index.php'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/berry1.jpg'),
                    ])
            );
});

$botman->hears('水果戚風蛋糕', function(BotMan $bot){
    $bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
            ->addElements([
                Element::create('水果戚風蛋糕')//連結(chain)調用addElement()
                    ->subtitle('自製鮮奶油甜度降低,零負擔的好選擇')
                    ->addButton(ElementButton::create('官網訂購')
                            ->url('https://ef78cf71f4f8.ngrok.io/new/index.php'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/cake1.jpg'),
                    ])
            );
});

$botman->hears('藍莓優格蛋糕', function(BotMan $bot){
    $bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
            ->addElements([
                Element::create('藍莓優格蛋糕')//連結(chain)調用addElement()
                    ->subtitle('藍莓控看過來~夏天必吃的酸甜好滋味')
                    ->addButton(ElementButton::create('官網訂購')
                            ->url('https://ef78cf71f4f8.ngrok.io/new/index.php'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/cake2.jpg'),
                    ])
            );
});

$botman->hears('黑森林蛋糕', function(BotMan $bot){
    $bot->reply(GenericTemplate::create()
            ->addImageAspectRatio(GenericTemplate::RATIO_HORIZONTAL)
            ->addElements([
                Element::create('黑森林蛋糕')//連結(chain)調用addElement()
                    ->subtitle('經典口味,每日限量製作')
                    ->addButton(ElementButton::create('官網訂購')
                            ->url('https://ef78cf71f4f8.ngrok.io/new/index.php'))
                    ->image('https://ef78cf71f4f8.ngrok.io/new/images/cake3.jpg'),
                    ])
            );
});

//菜單
$botman->hears('.*菜單.*',function(BotMan $bot){
$bot->reply(MediaTemplate::create()
    ->element(MediaUrlElement::create('image')
        ->url('https://www.facebook.com/102124831985974/photos/a.123160023215788/123159899882467/')
        ->addButtons([
            ElementButton::create('放大看菜單')->url('https://www.facebook.com/102124831985974/photos/a.123160023215788/123159899882467/'),
            ElementButton::create('推薦蛋糕')->type('postback')->payload('推薦蛋糕'),
        ])
    )
);
});

// Start listening
$botman->listen();
