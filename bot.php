<?php
date_default_timezone_set('Asia/Baghdad');
if(!file_exists('config.json')){
	$token = readline('-Hi HUNTER Enter Token: ');
	$id = readline('-Enter Id: ');
	file_put_contents('config.json', json_encode(['id'=>$id,'token'=>$token]));
	
} else {
		  $config = json_decode(file_get_contents('config.json'),1);
	$token = $config['token'];
	$id = $config['id'];
}

if(!file_exists('accounts.json')){
    file_put_contents('accounts.json',json_encode([]));
}

$fackfor = "\n";
    echo $fackfor;

include 'index.php';
try {
	$callback = function ($update, $bot) {
		global $id;
		if($update != null){
		  $config = json_decode(file_get_contents('config.json'),1);
		  $config['filter'] = $config['filter'] != null ? $config['filter'] : 1;
          $accounts = json_decode(file_get_contents('accounts.json'),1);
			if(isset($update->message)){
				$message = $update->message;
				$chatId = $message->chat->id;
				$text = $message->text;
				if($chatId == $id){
					if($text == '/start'){
              $bot->sendvideo([ 'chat_id'=>$chatId,
              'video'=>"https://t.me/G_D_W/11",
                   'caption'=>'๐๐๐๐๐๐๐ ๐๐จ๐๐๐๐ ๐ขผ ~ @Y_4_V ๐',
                  'inline_keyboard'=>true,
                  'reply_markup'=>json_encode([
                         'keyboard'=>[
                          [['text'=>'- English ๐บ๐ธ']],
                          [['text'=>'- ุนุฑุจู ๐ช๐ฌ']],
                          [['text'=>'- ููุฏูู ุดุฑุญ ููุจูุช โป๏ธ']],
                          [['text'=>'- ุทุฑู ุงูุตูุฏ ๐ฑ']],
                          [['text'=>'- ๐๐๐๐ ๐๐จ๐๐๐๐โก เฟ ']],
                          [['text'=>'๏ธูุง ููุง ุจูุช ุตูุฏ ูุงููุชุงุญุงุช ๐ค']],
                          [['text'=>'๏ธ- ููุฏูู ุชุฎุทู ุญุธุฑ ูููู โ']],
                          [['text'=>'๏ธ- ููุฏูู ุทุฑููู ุชูุตูู ุงูุฑูุณุช ๐ฌ']],
                      ]
                  ])
              ]);   
            } if($text == '- English ๐บ๐ธ'){ 
        	$config['filter'] = $text;
		    $bot->sendMessage([
		       'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"๐ท๐ธ ๐ฑ๐๐พ ๐ธ๐ฝ ๐๐ท๐ด ๐ฒ๐พ๐ฝ๐๐๐พ๐ป ๐ฑ๐ ~ @Y_4_V",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'โจโ Add Accounts๐','callback_data'=>'login']],
                          [['text'=>'๐ต๏ธโ Geting users','callback_data'=>'grabber']],
                          [['text'=>'๐ณโ Start Checking','callback_data'=>'run'],['text'=>' ๐ดโStop Checking','callback_data'=>'stop']],
                          [['text'=>'๐ชโAccounts Status','callback_data'=>'status']],
                      ]
                  ])
               ]);
           } if($text == '- ุนุฑุจู ๐ช๐ฌ'){
            $config['filter'] = $text;
		    $bot->sendMessage([
		       'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"๐ท๐ธ ๐ฑ๐๐พ ๐ธ๐ฝ ๐๐ท๐ด ๐ฒ๐พ๐ฝ๐๐๐พ๐ป ๐ฑ๐ ~ @Y_4_V",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'ุชุณุฌูู ุญุณุงุจ โจโ','callback_data'=>'login']],
                          [['text'=>'ุทุฑู ุงูุตูุฏ ๐ต๏ธโ','callback_data'=>'grabber']],
                          [['text'=>'ุจุฏุก ุงูุตูุฏ ๐ณโ','callback_data'=>'run'],['text'=>'ุงููุงู ุงูุตูุฏ ๐ดโ','callback_data'=>'stop']],
                          [['text'=>' ุญุงูู ุงูุญุณุงุจุงุช ๐ชโ','callback_data'=>'status']],
                      ]
                  ])
               ]);
               
               } if($text == '- ููุฏูู ุดุฑุญ ููุจูุช โป๏ธ'){
                  $bot->sendvideo([ 
                  'chat_id'=>$chatId,
                  'video'=>"https://t.me/SUPERX1/50",

              ]);   
                
               } if($text == '- ุทุฑู ุงูุตูุฏ ๐ฑ'){
                 $bot->sendvoice([
                  'chat_id'=>$chatId,
                  'voice'=>"https://t.me/FOLLOW_NAFSEA/147",
                  
              ]);   
                
              } if($text == '- ุทุฑู ุงูุตูุฏ ๐ฑ'){
                $bot->sendvoice([ 
                 'chat_id'=>$chatId,
                 'voice'=>"https://t.me/FOLLOW_NAFSEA/160",

              ]);   
                
           } if($text == '- ๐๐๐๐ ๐๐จ๐๐๐๐โก เฟ '){ 
            $bot->sendMessage([
		       'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>".๐ก. ๐๐ก :- l @TTTPTTTTT
๐๐๐ฅ๐ : @Y_4_V |",

              ]);   
              
           } if($text == '๏ธูุง ููุง ุจูุช ุตูุฏ ูุงููุชุงุญุงุช ๐ค'){ 
            $bot->sendMessage([
         'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"ูุจู ุงู ุงุนููู ููู ุชููู ุจุตูุฏ ุงููุชุงุญุงุช ูุฌุจ ุนููู ุงู ุชุนุฑู ูุง ูู ุงููุชุงุญุงุช
*
*
*
- ุงููุชุงุญุงุช ูู : ุญุณุงุจุงุช ุงูุณุชูุฑุงู ุงู ููุณ ุจูู ุงู ุชููุชุฑ ุงู .......  ูุฐู ุงูุญุณุงุจุงุช ุชููู ูุฑุจูุท ุจุงููููุงุช ููู ูุฐู ุงูุงููููุงุช ุบูุฑ ููุฌูุฏ
*
*
*
ููู ุชุฑุจุท ุงูุงููููุงุช ุจูุฐู ุงูุญุณุงุจุงุช ุงุฐ ูู ุชูู ููุฌูุฏุฉ ุงุตูู . ุชุฑุจุท ูุฐู ุงูุงููููุงุช ุจุงูุญุณุงุจุงุช ูุงูู ุนูุฏ ุฑุจุทูุง ูุง ุชููู ุจุทูุจ ููุฏ ููุชุญูู ูู ุงูุจุฑูุฏ

*
*
*
- ุทุฑููุฉ ุนูู ุจูุช ุงูุตูุฏ

ุทุฑููุฉ ุนูู ุจูุช ุงูุตูุฏ ููู ุงูู ุชููู ุจุฌูุน ููุฒุฑุงุช ูู ุงูุงูุณุชูุฑุงู ููุถุนูุง ุจุงูุจูุช ููููู ุจุงูุชุฎููู ุนูู ุงููุชุงุจุนูู ุงู ุงูุฐูู ูููู ุจูุชุงุจุนุชูู ุญุณุจ ุงุฎุชูุงุฑ ุจุงูุทุจุน ููุงู ุทุฑู ุงุฎุฑู ููุณุญุจ ุนุจุฑ ูุงุดุชุงู ูุชูุง ุงู ูููุงุช ุจุงูุจุญุซ
",

              ]);
              
           } if($text == '๏ธ- ููุฏูู ุชุฎุทู ุญุธุฑ ูููู โ'){
                  $bot->sendvideo([ 
                  'chat_id'=>$chatId,                  'video'=>"https://t.me/SUPERX1/8",

              ]);
              
              } if($text == '๏ธ- ููุฏูู ุทุฑููู ุชูุตูู ุงูุฑูุณุช ๐ฌ'){
                  $bot->sendvideo([ 
                  'chat_id'=>$chatId,                  'video'=>"https://t.me/HH7H9/7146",
				  'caption'=> 'ุชุทุจูู ุชูุตูู ุงูุฑูุณุช๐
https://t.me/TTTPTTTTT/36',
              ]);
              
          } elseif($text != null){
          	if($config['mode'] != null){
          		$mode = $config['mode'];
          		if($mode == 'addL'){
          			$ig = new ig(['file'=>'','account'=>['useragent'=>'Instagram 27.0.0.7.97 Android (23/6.0.1; 640dpi; 1440x2392; LGE/lge; RS988; h1; h1; en_US)']]);
          			list($user,$pass) = explode(':',$text);
          			list($headers,$body) = $ig->login($user,$pass);
          			// echo $body;
          			$body = json_decode($body);
          			if(isset($body->message)){
          				if($body->message == 'challenge_required'){
          					$bot->sendMessage([
          							'chat_id'=>$chatId,
          							'parse_mode'=>'markdown',
          							'text'=>"*Error*. \n - Challenge Required"
          					]);
          				} else {
          					$bot->sendMessage([
          							'chat_id'=>$chatId,
          							'parse_mode'=>'markdown',
          							'text'=>"*Error*.\n - Incorrect Username Or Password"
          					]);
          				}
          			} elseif(isset($body->logged_in_user)) {
          				$body = $body->logged_in_user;
          				preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $headers, $matches);
								  $CookieStr = "";
								  foreach($matches[1] as $item) {
								      $CookieStr .= $item."; ";
								  }
          				$account = ['cookies'=>$CookieStr,'useragent'=>'Instagram 27.0.0.7.97 Android (23/6.0.1; 640dpi; 1440x2392; LGE/lge; RS988; h1; h1; en_US)'];
          				
          				$accounts[$text] = $account;
          				file_put_contents('accounts.json', json_encode($accounts));
          				$mid = $config['mid'];
          				$bot->sendMessage([
          				      'parse_mode'=>'markdown',
          							'chat_id'=>$chatId,
          							'text'=>"*Done Add New Accounts To Your Tool.*\n _Username_ : [$user])(instagram.com/$user)\n_Account Name_ : _{$body->full_name}_",
												'reply_to_message_id'=>$mid		
          					]);
          				$keyboard = ['inline_keyboard'=>[
										[['text'=>"Add New Accounts",'callback_data'=>'addL']]
									]];
		              foreach ($accounts as $account => $v) {
		                  $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'ddd'],['text'=>"Logout",'callback_data'=>'del&'.$account]];
		              }
		              $keyboard['inline_keyboard'][] = [['text'=>'๐ ุฑุฌูุน','callback_data'=>'back']];
		              $bot->editMessageText([
		                  'chat_id'=>$chatId,
		                  'message_id'=>$mid,
		                  'text'=>"Accounts Control Page.",
		                  'reply_markup'=>json_encode($keyboard)
		              ]);
		              $config['mode'] = null;
		              $config['mid'] = null;
		              file_put_contents('config.json', json_encode($config));
          			}
          		}  elseif($mode == 'selectFollowers'){
          		  if(is_numeric($text)){
          		    bot('sendMessage',[
          		        'chat_id'=>$chatId,
          		        'text'=>"ุชู ุงูุชุนุฏูู.",
          		        'reply_to_message_id'=>$config['mid']
          		    ]);
          		    $config['filter'] = $text;
          		    $bot->editMessageText([
                      'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"๐ท๐ธ ๐ฑ๐๐พ ๐ธ๐ฝ ๐๐ท๐ด ๐ฒ๐พ๐ฝ๐๐๐พ๐ป ๐ฑ๐ ~ @Y_4_V",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'ุชุณุฌูู ุญุณุงุจ โจโ','callback_data'=>'login']],
                          [['text'=>'ุทุฑู ุงูุตูุฏ ๐ต๏ธโ','callback_data'=>'grabber']],
                          [['text'=>'ุจุฏุก ุงูุตูุฏ ๐ณโ','callback_data'=>'run'],['text'=>'ุงููุงู ุงูุตูุฏ ๐ดโ','callback_data'=>'stop']],
                          [['text'=>' ุญุงูู ุงูุญุณุงุจุงุช ๐ชโ','callback_data'=>'status']],
                      ]
                  ])
               ]);
          		    $config['mode'] = null;
		              $config['mid'] = null;
		              file_put_contents('config.json', json_encode($config));
          		  } else {
          		    bot('sendMessage',[
          		        'chat_id'=>$chatId,
          		        'text'=>'- ูุฑุฌู ุงุฑุณุงู ุฑูู ููุท .'
          		    ]);
          		  }
          		} else {
          		  switch($config['mode']){
          		    case 'search': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php search.php');
          		      break;
          		      case 'followers': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php followers.php');
          		      break;
          		      case 'following': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php following.php');
          		      break;
          		      case 'hashtag': 
          		      $config['mode'] = null; 
          		      $config['words'] = $text;
          		      file_put_contents('config.json', json_encode($config));
          		      exec('screen -dmS gr php hashtag.php');
          		      break;
          		  }
          		}
          	}
          }
				} else {
					$bot->sendvideo([
       'chat_id'=>$chatId,
       'video'=> "https://t.me/G_D_W/11",
        'caption'=>'ุงูุจูุช ูุฏููุน ๐ฒ ู ููุณ ูุฌุงูู ๐โ๐จ
ูุดุฑุงุก ูุณุฎู ูุฑุงุณูุฉ ุงููุทูุฑ ๐โ๐จ',
                  'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'โซ๏ธ| ูุทูุฑ ุงูุจูุช','url'=>'t.me/Y_4_V']],
                       [['text'=>"โช๏ธ| ููุงู ุตูุฏ ุงููุดุชุฑููู", 'url'=>"t.me/TTTPTTTTT"]],
                  ]
							])
					]);
				}
			} elseif(isset($update->callback_query)) {
          $chatId = $update->callback_query->message->chat->id;
          $mid = $update->callback_query->message->message_id;
          $data = $update->callback_query->data;
          echo $data;
          if($data == 'login'){
              
        		$keyboard = ['inline_keyboard'=>[
										[['text'=>"Add New Accounts",'callback_data'=>'addL']]
									]];
		              foreach ($accounts as $account => $v) {
		                  $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'ddd'],['text'=>"Logout",'callback_data'=>'del&'.$account]];
		              }
		              $keyboard['inline_keyboard'][] = [['text'=>'๐ ุฑุฌูุน','callback_data'=>'back']];
		              $bot->editMessageText([
		                  'chat_id'=>$chatId,
		                  'message_id'=>$mid,
		                  'text'=>"Accounts Control Page.",
		                  'reply_markup'=>json_encode($keyboard)
		              ]);
          } elseif($data == 'addL'){
          	
          	$config['mode'] = 'addL';
          	$config['mid'] = $mid;
          	file_put_contents('config.json', json_encode($config));
          	$bot->sendMessage([
          			'chat_id'=>$chatId,
          			'text'=>"Send Account Like : \n `user:pass`",
          			'parse_mode'=>'markdown'
          	]);
          } elseif($data == 'grabber'){
            
            $for = $config['for'] != null ? $config['for'] : 'ุญุฏุฏ ุงูุญุณุงุจ';
            $count = count(explode("\n", file_get_contents($for)));
            $bot->editMessageText([
                'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"Users collection page. \n - Users : $count \n - For Account : $for",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>'๐ ุณุญุจ ูู ุงูุจุญุซ','callback_data'=>'search']],
                        [['text'=>'#โฃ ุณุญุจ ูู ุงููุดุชุงูุงุช','callback_data'=>'hashtag'],['text'=>'๐ฎ ุณุญุจ ูู ุงูุงูุณุจููุฑ','callback_data'=>'explore']],
                        [['text'=>'๐ค ุณุญุจ ูู ุงููุชุงุจุนูู','callback_data'=>'followers'],['text'=>"๐น ุณุญุจ ูู ุงููุชุงุจุนูู",'callback_data'=>'following']],
                        [['text'=>"ุชุญุฏูุฏ ุญุณุงุจ โพ : $for",'callback_data'=>'for']],
                        [['text'=>'๐ ูุณุชู ุฌุฏูุฏู','callback_data'=>'newList'],['text'=>'๐ ูุณุชู ูุฏููุฉ','callback_data'=>'append']],
                        [['text'=>'โ ุฑุฌูุน','callback_data'=>'back']],
                    ]
                ])
            ]);
          } elseif($data == 'search'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"ุงูุงู ุงุฑุณู ูููุงุช ุงูุจุญุซ ูุชู ูุญุตูู \n ููููู ุงุฑุณุงู ุงูุซุฑ ูู ูููู ูู ุฎูุงู ูุถุน ูุณุงูู ุจูููู"
            ]);
            $config['mode'] = 'search';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'followers'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"ุงูุงู ุงุฑุณู ุงูููุฒุฑ ูุชู ูุญุต ุงููุชุงุจุนูู \n ููููู ุงุฑุณุงู ุงูุซุฑ ูู ููุฒุฑ ูู ุฎูุงู ูุถุน ูุณุงูู ุจูููู"
            ]);
            $config['mode'] = 'followers';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'following'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"ุงูุงู ุงุฑุณู ุงูููุฒุฑ ูุชู ูุญุต ุงููุชุงุจุนูู \n ููููู ุงุฑุณุงู ุงูุซุฑ ูู ููุฒุฑ ูู ุฎูุงู ูุถุน ูุณุงูู ุจูููู"
            ]);
            $config['mode'] = 'following';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'hashtag'){
            $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"ุงูุงู ุงุฑุณู ุงููุดุชุงูุงุช ุจุฏูู ุงูุนูุงูู # \nููููู ุงุฑุณุงู ูุดุชุงู ูุงุญุฏ"
            ]);
            $config['mode'] = 'hashtag';
            file_put_contents('config.json', json_encode($config));
          } elseif($data == 'newList'){
            file_put_contents('a','new');
            $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Done Select New List.",
							'show_alert'=>1
						]);
          } elseif($data == 'append'){ 
            file_put_contents('a', 'ap');
            $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Done Select Exsist list.",
							'show_alert'=>1
						]);
						
          } elseif($data == 'for'){
            if(!empty($accounts)){
            $keyboard = [];
             foreach ($accounts as $account => $v) {
                $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'forg&'.$account]];
              }
              $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"Select Account.",
                  'reply_markup'=>json_encode($keyboard)
              ]);
            } else {
              $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Add Account First.",
							'show_alert'=>1
						]);
            }
          } elseif($data == 'selectFollowers'){
            bot('sendMessage',[
                'chat_id'=>$chatId,
                'text'=>'ูู ุจุฃุฑุณุงู ุนุฏุฏ ูุชุงุจุนูู .'  
            ]);
            $config['mode'] = 'selectFollowers';
          	$config['mid'] = $mid;
          	file_put_contents('config.json', json_encode($config));
          } elseif($data == 'run'){
            if(!empty($accounts)){
            $keyboard = [];
             foreach ($accounts as $account => $v) {
                $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'start&'.$account]];
              }
              $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"Select Account.",
                  'reply_markup'=>json_encode($keyboard)
              ]);
            } else {
              $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Add Account First.",
							'show_alert'=>1
						]);
            }
          }elseif($data == 'stop'){
            if(!empty($accounts)){
            $keyboard = [];
             foreach ($accounts as $account => $v) {
                $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'stop&'.$account]];
              }
              $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"Select Account.",
                  'reply_markup'=>json_encode($keyboard)
              ]);
            } else {
              $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Add Account First.",
							'show_alert'=>1
						]);
            }
          }elseif($data == 'stopgr'){
            shell_exec('screen -S gr -X quit');
            $bot->answerCallbackQuery([
							'callback_query_id'=>$update->callback_query->id,
							'text'=>"Done Stop Collecting.",
						// 	'show_alert'=>1
						]);
						$for = $config['for'] != null ? $config['for'] : 'Select Account';
                        $count = count(explode("\n", file_get_contents($for)));
						$bot->editMessageText([
                'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"Users collection page. \n - Users : $count \n - For Account : $for",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>'๐ ุณุญุจ ูู ุงูุจุญุซ','callback_data'=>'search']],
                        [['text'=>'#โฃ ุณุญุจ ูู ุงููุดุชุงูุงุช','callback_data'=>'hashtag'],['text'=>'๐ฎ ุณุญุจ ูู ุงูุงูุณุจููุฑ','callback_data'=>'explore']],
                        [['text'=>'๐ค ุณุญุจ ูู ุงููุชุงุจุนูู','callback_data'=>'followers'],['text'=>"๐น ุณุญุจ ูู ุงููุชุงุจุนูู",'callback_data'=>'following']],
                        [['text'=>"ุชุญุฏูุฏ ุญุณุงุจ โพ : $for",'callback_data'=>'for']],
                        [['text'=>'๐ ูุณุชู ุฌุฏูุฏู','callback_data'=>'newList'],['text'=>'๐ ูุณุชู ูุฏููุฉ','callback_data'=>'append']],
                        [['text'=>'โ ุฑุฌูุน','callback_data'=>'back']],
                    ]
                ])
            ]);
          } elseif($data == 'explore'){
            exec('screen -dmS gr php explore.php');
          } elseif($data == 'status'){
					$status = '';
					foreach($accounts as $account => $ac){
						$c = explode(':', $account)[0];
						$x = exec('screen -S '.$c.' -Q select . ; echo $?');
						if($x == '0'){
				        $status .= "*$account* ~> _Working_\n";
				    } else {
				        $status .= "*$account* ~> _Stop_\n";
				    }
					}
					$bot->sendMessage([
							'chat_id'=>$chatId,
							'text'=>"Accounts Status: \n\n $status",
							'parse_mode'=>'markdown'
						]);
				} elseif($data == 'back'){
          	$bot->editMessageText([
                      'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"๐ท๐ธ ๐ฑ๐๐พ ๐ธ๐ฝ ๐๐ท๐ด ๐ฒ๐พ๐ฝ๐๐๐พ๐ป ๐ฑ๐ ~ @Y_4_V",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'ุชุณุฌูู ุญุณุงุจ โจโ','callback_data'=>'login']],
                          [['text'=>'ุทุฑู ุงูุตูุฏ ๐ต๏ธโ','callback_data'=>'grabber']],
                          [['text'=>'ุจุฏุก ุงูุตูุฏ ๐ณโ','callback_data'=>'run'],['text'=>'ุงููุงู ุงูุตูุฏ ๐ดโ','callback_data'=>'stop']],
                          [['text'=>' ุญุงูู ุงูุญุณุงุจุงุช ๐ชโ','callback_data'=>'status']],
                      ]
                  ])
               ]);
          } else {
          	$data = explode('&',$data);
          	if($data[0] == 'del'){
          		
          		unset($accounts[$data[1]]);
          		file_put_contents('accounts.json', json_encode($accounts));
              $keyboard = ['inline_keyboard'=>[
							[['text'=>"Add New Accounts",'callback_data'=>'addL']]
									]];
		              foreach ($accounts as $account => $v) {
		                  $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'ddd'],['text'=>"Logout",'callback_data'=>'del&'.$account]];
		              }
		              $keyboard['inline_keyboard'][] = [['text'=>'๐ ุฑุฌูุน','callback_data'=>'back']];
		              $bot->editMessageText([
		                  'chat_id'=>$chatId,
		                  'message_id'=>$mid,
		                  'text'=>"Accounts Control Page.",
		                  'reply_markup'=>json_encode($keyboard)
		              ]);
		} elseif($data[0] == 'moveList'){
          	  file_put_contents('list', $data[1]);
          	  $keyboard = [];
          	  foreach ($accounts as $account => $v) {
                  $keyboard['inline_keyboard'][] = [['text'=>$account,'callback_data'=>'moveListTo&'.$account]];
              }
              $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"ุงุฎุชุฑ ุงูุญุณุงุจ ุงูุฐู ุชุฑูุฏ ููู ุงููุณุชู ุงููู",
                  'reply_markup'=>json_encode($keyboard)
	              ]);
          	} elseif($data[0] == 'moveListTo'){
          	  $keyboard = [];
          	  file_put_contents($data[1], file_get_contents(file_get_contents('list')));
          	  unlink(file_get_contents('list'));
          	  $keyboard['inline_keyboard'][] = [['text'=>'ุงููุงุฆูู ุงูุฑุฆูุณูุฉ โ','callback_data'=>'back']];
          	  $bot->editMessageText([
                  'chat_id'=>$chatId,
                  'message_id'=>$mid,
                  'text'=>"ุชู ููู ุงููุณุชู ุงูู ุงูุญุณุงุจ  โ".$data[1],
                  'reply_markup'=>json_encode($keyboard)
	              ]);
          	} elseif($data[0] == 'forg'){
          	  $config['for'] = $data[1];
          	  file_put_contents('config.json',json_encode($config));
              $for = $config['for'] != null ? $config['for'] : 'Select';
              $count = count(explode("\n", file_get_contents($for)));
              $bot->editMessageText([
                'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"Users collection page. \n - Users : $count \n - For Account : $for",
                'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                        [['text'=>'๐ ุณุญุจ ูู ุงูุจุญุซ','callback_data'=>'search']],
                        [['text'=>'๐ ุณุญุจ ูู ุงููุดุชุงูุงุช','callback_data'=>'hashtag'],['text'=>'๐ฎ ุณุญุจ ูู ุงูุงูุณุจููุฑ','callback_data'=>'explore']],
                        [['text'=>'๐ค ุณุญุจ ูู ุงููุชุงุจุนูู','callback_data'=>'followers'],['text'=>"๐น ุณุญุจ ูู ุงููุชุงุจุนูู",'callback_data'=>'following']],
                        [['text'=>"ุชุญุฏูุฏ ุญุณุงุจ โพ : $for",'callback_data'=>'for']],
                        [['text'=>'๐ ูุณุชู ูุฏููุฉ','callback_data'=>'newList'],['text'=>'๐ ูุณุชู ุฌุฏูุฏู','callback_data'=>'append']],
                        [['text'=>'โ ุฑุฌูุน','callback_data'=>'back']],
                    ]
                ])
            ]);
          	} elseif($data[0] == 'start'){
          	  file_put_contents('screen', $data[1]);
          	  $bot->editMessageText([
                      'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"๐ท๐ธ ๐ฑ๐๐พ ๐ธ๐ฝ ๐๐ท๐ด ๐ฒ๐พ๐ฝ๐๐๐พ๐ป ๐ฑ๐ ~ @Y_4_V",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'ุชุณุฌูู ุญุณุงุจ โจโ','callback_data'=>'login']],
                          [['text'=>'ุทุฑู ุงูุตูุฏ ๐ต๏ธโ','callback_data'=>'grabber']],
                          [['text'=>'ุจุฏุก ุงูุตูุฏ ๐ณโ','callback_data'=>'run'],['text'=>'ุงููุงู ุงูุตูุฏ ๐ดโ','callback_data'=>'stop']],
                          [['text'=>' ุญุงูู ุงูุญุณุงุจุงุช ๐ชโ','callback_data'=>'status']],
                      ]
                  ])
               ]);
              exec('screen -dmS '.explode(':',$data[1])[0].' php start.php');
              $bot->sendMessage([
                'chat_id'=>$chatId,
                'text'=>"๐ฃ - ุชู ุจุฏุฃ ุงูุตูุฏ ๐กฆ-โบ 

ุงูููุช โฒ๏ธ : " . date('g:i') . "\n" . "
ุงูุญุณุงุจ ุงููููู ๐ฆ : ".explode(':',$data[1])[0].'
 โโโโโโโโโโโโโโโโโโโโโ',
                'parse_mode'=>'markdown'
              ]);
          	} elseif($data[0] == 'stop'){
          	  $bot->editMessageText([
                      'chat_id'=>$chatId,
                'message_id'=>$mid,
                'text'=>"๐ท๐ธ ๐ฑ๐๐พ ๐ธ๐ฝ ๐๐ท๐ด ๐ฒ๐พ๐ฝ๐๐๐พ๐ป ๐ฑ๐ ~ @Y_4_V",
                'reply_markup'=>json_encode([
                      'inline_keyboard'=>[
                          [['text'=>'ุชุณุฌูู ุญุณุงุจ โจโ','callback_data'=>'login']],
                          [['text'=>'ุทุฑู ุงูุตูุฏ ๐ต๏ธโ','callback_data'=>'grabber']],
                          [['text'=>'ุจุฏุก ุงูุตูุฏ ๐ณโ','callback_data'=>'run'],['text'=>'ุงููุงู ุงูุตูุฏ ๐ดโ','callback_data'=>'stop']],
                          [['text'=>' ุญุงูู ุงูุญุณุงุจุงุช ๐ชโ','callback_data'=>'status']],
                      ]
                  ])
               ]);
              exec('screen -S '.explode(':',$data[1])[0].' -X quit');
          	}
          }
			}
		}
	};
	$bot = new EzTG(array('throw_telegram_errors'=>false,'token' => $token, 'callback' => $callback));
} catch(Exception $e){
	echo $e->getMessage().PHP_EOL;
	sleep(1);
}
