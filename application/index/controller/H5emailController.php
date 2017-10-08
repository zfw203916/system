<?php
/**
 * Created by PhpStorm.
 * User: FrankZhang
 * Date: 9/21/2017
 * Time: 12:46 PM
 */

namespace app\index\controller;


class H5emailController extends MonBaseController
{
    public function index(){


        $this->assign('data',$data = [
            'title'=>'易游邮件发送处理'
        ]);
        return view();
    }

    /**
     * @modify value
     * @return int
     */
    public function setValue(){

        $color = [
            '#FFB6C1'=>'LightPink',
            '#FFC0CB'=>'Pink',
            '#DC143C'=>'Crimson',
            '#FFF0F5'=>'LavenderBlush',
            '#FF69B4 '=>'HotPink',
            '#FF1493'=>'DeepPink',
            '#FFF0F5'=>'3',
            '#C71585'=>'1',
            '#DA70D6'=>'2',
            '#D8BFD8'=>'4',
            '#DDA0DD'=>'5',
            '#EE82EE'=>'6',
            '#FF00FF'=>'7',
            '#FF00FF'=>'8',
            '#8B008B '=>'9',
            '#800080'=>'10',
            '#BA55D3 '=>'11',
            '#9400D3'=>'12',
            '#9932CC '=>'13',
            '#4B0082'=>'14',
            '#8A2BE2'=>'15',
            '#9370DB'=>'16',
            '#7B68EE'=>'17',
            '#6A5ACD'=>'18',
            '#483D8B'=>'19',
            '#E6E6FA'=>'20',
            '#F8F8FF'=>'21',
            '#0000FF'=>'22',
            '#0000CD'=>'23',
            '#191970'=>'24',
            '#00008B'=>'25',
            '#000080'=>'26',
            '#4169E1'=>'27',
            '#6495ED'=>'28',
            '#B0C4DE'=>'29',
            '#778899'=>'30',
            '#708090'=>'31',
            '#1E90FF'=>'32',
            '#F0F8FF'=>'33',
            '#4682B4'=>'34',
            '#87CEFA'=>'35',
            '#87CEEB'=>'36',
            '#00BFFF'=>'37',
            '#ADD8E6'=>'38',
            '#B0E0E6'=>'39',
            '#5F9EA0'=>'40',
            '#F0FFFF'=>'41',
            '#E1FFFF'=>'42',
            '#AFEEEE'=>'43',
            '#00FFFF'=>'44',
            '#00CED1'=>'46',
            '#2F4F4F'=>'47',
            '#008B8B'=>'48',
            '#008080'=>'49',
            '#48D1CC '=>'50',
            '#20B2AA'=>'51',
            '#40E0D0'=>'52',
            '#7FFFAA '=>'53',
            '#00FA9A'=>'54',
            '#00FF7F'=>'55',
            '#F5FFFA'=>'56',
            '#3CB371'=>'57',
            '#2E8B57'=>'58',
            '#F0FFF0'=>'60',
            '#90EE90'=>'61',
            '#98FB98'=>'62',
            '#8FBC8F'=>'63',
            '#32CD32'=>'64',
            '#00FF00'=>'65',
            '#228B22'=>'66',
            '#008000'=>'67',
            '#006400 '=>'68',
            '#7FFF00'=>'69',
            '#7CFC00'=>'70',
            '#ADFF2F'=>'71',
            '#556B2F'=>'72',
            '#F5F5DC'=>'73',
            '#FAFAD2'=>'74',
            '#FFFFF0'=>'75',
            '#FFFFE0'=>'76',
            '#FFFF00'=>'77',
            '#808000'=>'78',
            '#BDB76B'=>'79',
            '#FFFACD'=>'80',
            '#EEE8AA'=>'81',
            '#F0E68C'=>'82',
            '#FFD700'=>'83',
            '#FFF8DC'=>'84',
            '#DAA520'=>'85',
            '#FFFAF0'=>'86',
            '#FDF5E6'=>'87',
            '#F5DEB3'=>'88',
            '#FFE4B5'=>'89',
            '#FFA500'=>'90',
            '#FFEFD5'=>'91',
            '#FFEBCD '=>'92',
            '#FFDEAD '=>'93',
            '#FAEBD7'=>'94',
            '#D2B48C'=>'95',
            '#DEB887'=>'96',
            '#FFE4C4'=>'97',
            '#FF8C00'=>'98',
            '#FAF0E6'=>'99',
            '#CD853F'=>'100',
            '#FFDAB9'=>'101',
            '#F4A460'=>'102',
            '#D2691E'=>'103',
            '#8B4513'=>'104',
            '#FFF5EE'=>'105',
            '#A0522D'=>'106',
            '#FFA07A'=>'107',
            '#FF7F50'=>'108',
            '#FF4500'=>'109',
            '#E9967A'=>'110',
            '#FF6347'=>'111',
            '#FFE4E1'=>'112',
            '#FA8072'=>'113',
            '#FFFAFA'=>'114',
            '#F08080'=>'115',
            '#BC8F8F'=>'116',
            '#CD5C5C'=>'117',
            '#FF0000'=>'118',
            '#A52A2A'=>'119',
            '#B22222'=>'120',
            '#8B0000'=>'121',
            '#800000'=>'122',
            '#FFFFFF'=>'123',
            '#F5F5F5'=>'124',
            '#DCDCDC'=>'125',
            '#D3D3D3'=>'126',
            '#C0C0C0'=>'127',
            '#A9A9A9'=>'128',
            '#808080'=>'129',
            '#696969'=>'130',

        ];

        $randColor = array_rand($color,1);
        $emailTitle = trim(input('title'))?trim(input('title')):"易游游戏";
        $verticalLine = trim(input('verticalLine'))?trim(input('verticalLine')):2;//竖线条数
        $frontColor = trim(input('frontColor'))?trim(input('frontColor')):'#000000';//字体颜色
        $bgColor = trim(input('bgColor'))?trim(input('bgColor')):$randColor;//背景颜色
        $select = (int)input('select');
        $select2 = (int)input('select2');

        $merge =[
            'title'=>$emailTitle,
            'line'=>input('line'),
            'verticalLine'=>$verticalLine,
            'other'=>input('other'),
            'bgColor'=>$bgColor,
            'jpg'=>rand(1,27),
            'val'=>rand(1,1000000),
            'time'=>date('Y-m-d H:i:s',time())
        ];
        switch($select){
            case 0 :
                //追加数据
                $dataAdd = [
                    'content'=>'{内容变量}',
                    'frontColor'=>'{字体颜色}',
                ];
                //$this->error("未开启防反垃圾邮件机制");
                $merge = array_merge($dataAdd, $merge);
                $template  = 'h5view';
                break;

            case 1:
                //追加数据
                $dataAdd = [
                    'content'=>input('content'),
                    'frontColor'=>$frontColor,
                ];

                if($select2 == 0){
                    $template  = 'h5view';
                }
                if($select2 == 1){
                    $emailFiles = rand(1,10);
                    $emailTemplate = rand($emailFiles*3-2,$emailFiles*3-0);//计算模板位置随机值
                    $template = 'email/'.$emailFiles.'/'.$emailTemplate;//模板url
                }
                $merge = array_merge($dataAdd,$merge);
                break;
        }

        $this->assign('data', $merge);
        //return view('h5email/cicada');
        return view('h5email/'.$template);

    }

    public function vueTest(){
        $data =[
            'title'=>'易游游戏',
            'line'=>input('line'),
            'bgColor'=>input('bgColor'),
            'other'=>input('other')
        ];

        $this->assign('data', $data);
        return view();
    }

}