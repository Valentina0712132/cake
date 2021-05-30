<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

$channelAccessToken = '8euMVy4NJyFdoKCAcfhUJaFObNF2pITX45ym/6wC3AUzNYhbc4NewJqlV5d/zp4dvkpeXYZbmHv6hlGNTXCEerxYhYTzFJKLnxDeBBOs1Zop+fXhZ3GJyfzM9cWtX71iu9vlhWFzi9VI8OyrQk6CiQdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'dd1b1bbf7acea5b5048fa9663fb310bd';

$message=null;
$client=null;
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    if(strtolower($message['text']=='hello' || strtolower($message['text']=='hi'))){
                        $client->replyMessage([
                        'replyToken'=>$event['replyToken'],
                        'messages'=>array(
                            [
                                'type'=>'text',
                                'text'=>'Hello你好~IM FINE THANK YOUUU'
                            ]
                        )
                    ]);
                    }
                    
                    case 'image':
                    if($message['text']=='圖片' || strtolower($message['text']=='cakepic')){
                        $client->replyMessage([
                        'replyToken'=>$event['replyToken'],
                        'messages'=>array(
                            [
                                'type'=>'image',
                                'originalContentUrl'=>'https://66653e41c716.ngrok.io/NetBeansProjects/images/lemon1.jpg',
                                'previewImageUrl'=>'https://66653e41c716.ngrok.io/NetBeansProjects/images/lemon1.jpg'
                            ]
                        )
                    ]);
                    }
                    
                    case 'video':
                    if($message['text']=='影片' || strtolower($message['text']=='cakemp4')){
                        $client->replyMessage([
                        'replyToken'=>$event['replyToken'],
                        'messages'=>array(
                            [
                                'type'=>'video',
                                'originalContentUrl'=>'https://66653e41c716.ngrok.io/NetBeansProjects/videos/cake1.mp4',
                                'previewImageUrl'=>'https://66653e41c716.ngrok.io/NetBeansProjects/images/cake10.jpg'
                            ]
                        )
                    ]);
                    }
                    
                    case 'location':
                    if($message['text']=='門市地點' || strtolower($message['text']=='location')){
                        $client->replyMessage([
                        'replyToken'=>$event['replyToken'],
                        'messages'=>array(
                            [
                                "type"=> "location",
                                "title"=> "風和家Say Cheese Cake",
                                "address"=> "802高雄市苓雅區忠孝二路110號", 
                                "latitude"=> 22.62068273747214,
                                "longitude"=> 120.30809231285781,
                            ]
                        )
                    ]);
                    }
                    
                    case 'sticker':
                    if($message['text']=='貼圖' || strtolower($message['text']=='fun')){
                        $client->replyMessage([
                        'replyToken'=>$event['replyToken'],
                        'messages'=>array(
                            [
                                "type"=>"sticker",
                                "packageId"=> "446",
                                "stickerId"=> "1991"
                            ]
                        )
                    ]);
                    }
                    
                    case 'imagemap':
                    if($message['text']=='圖片包' || strtolower($message['text']=='lot')){
                        $client->replyMessage([
                        'replyToken'=>$event['replyToken'],
                        'messages'=>array(
                            [
                                
                                "type"=> "imagemap",
                                "baseUrl"=> "https://66653e41c716.ngrok.io/NetBeansProjects/images/cake3/500.jpg",
                                "altText"=> "母親節促銷",
                                "baseSize"=> [
                                "width"=> 1040,
                                "height"=> 1040
                                ],
                                "video"=> [
                                'originalContentUrl'=>'https://66653e41c716.ngrok.io/NetBeansProjects/videos/cake1.mp4',
                                'previewImageUrl'=>'https://66653e41c716.ngrok.io/NetBeansProjects/images/cake10.jpg',
                                "area"=> [
                                    "x"=> 0,
                                    "y"=>0,
                                    "width"=> 1040,
                                    "height" =>585
                                ],
                                ],
                                 "externalLink"=> [
                                "linkUri"=>"https://66653e41c716.ngrok.io//NetBeansProjects/index_1.php",
                                "label"=> "See More",
                                    ],
                                
                                 "actions"=> [
                                [
                                    "type"=> "uri",
                                    "linkUri"=> "https://66653e41c716.ngrok.io//NetBeansProjects/index_1.php",
                                    "area"=> [
                                        "x"=> 0,
                                        "y"=> 586,
                                        "width"=> 520,
                                        "height"=> 454
                                    ],
                                ],
                                [
                                    "type"=> "message",
                                    "text"=>"Hello",
                                    "area"=> [
                                        "x"=> 520,
                                        "y"=> 586,
                                        "width"=> 520,
                                        "height"=> 454
                                    ],
                                ],
                            ]
                            ]
                        )
                    ]);
                    }
                    
                    
                    case 'template':
                    if($message['text']=='按鈕' || strtolower($message['text']=='button')){
                        $client->replyMessage([
                        'replyToken'=>$event['replyToken'],
                        'messages'=>array(
                            [
                                    'type' => 'template', 
                                    'altText' => '母親節蛋糕', 
                                    'template' => array(
                                        'type' => 'buttons', 
                                        'thumbnailImageUrl' => 'https://66653e41c716.ngrok.io/NetBeansProjects/images/cake10.jpg', //圖片網址 <不一定需要>
                                        'title' => '好呷ㄟCheeseCake', 
                                        'text' => '~母親節優惠~', 
                                        'actions' => array(
                                            array(
                                                'type' => 'postback', //回傳
                                                'label' => '紐約起士蛋糕', 
                                                'data' => 'action=zong&itemid=123' //資料
                                            ),
                                            array(
                                                'type' => 'message', 
                                                'label' => 'Oreo起士蛋糕', 
                                                'text' => 'Oreo起士蛋糕' 
                                            ),
                                            array(
                                                'type' => 'uri', 
                                                'label' => '蛋糕哪裡買',
                                                'uri' => 'https://66653e41c716.ngrok.io//NetBeansProjects/index_1.php' 
                                            )
                                        )
                                    )
                            ]
                        )
                    ]);
                    }
                    /*$client->replyMessage([
                        'replyToken' => $event['replyToken'],
                        'messages' => [
                            [
                                'type' => 'text',
                                //'text' => $message['text']
                                'text' =>'不管您打什麼~~我都會說hiiiii'
                                
                            ]
                        ]
                    ]);*/
                break;
                default:
                    error_log('Unsupported message type: ' . $message['type']);
                    break;
            }
            break;
        default:
            error_log('Unsupported event type: ' . $event['type']);
            break;
    }
};
