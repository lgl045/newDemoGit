<?php
/**
 * @copyright Copyright (c) 2008 – 2019 www.qgnix.cn
 * @author 趣构项目开发团队
 * @package tp3.2
 * create date 2018年12月7日
 */
namespace Api\Controller;
use Think\Controller;
class OrderController extends Controller {
    //添加订单
    public function add()
    {
      

        $user_id = I('post.user_id');
        if(M('address')->where('user_id = '.$user_id)->select()){
            if(!$address = M('address')->where('user_id = '.$user_id.' and code = 1')->find()){
                $address = M('address')->where('user_id = '.$user_id)->select()[0];
            }
        }else{
            $this->ajaxReturn(['code'=>3,'msg'=>'暂无收货地址，赶紧添加吧！']);
        }

        $goods = M('goods')->field('danjia1,user_id')->where('id = '.I('post.goods_id'))->find();
          //  $this->ajaxReturn(array('code'=>1,'id'=>$goods),'json');

        $data = [
            'danhao' => time()+rand(10000000,99999999),
            'user_id' => $user_id,
            'zongjia' => $goods['danjia1'],
            'goods_id' => I('post.goods_id'),
            'merch_id' => $goods['user_id'],
            'time' => time(),
            'zhuangtai' => 1,
            'num' => 1,
            'address_id' => $address['id'],
        ];

        if($order_id = M('order')->add($data)){
            $this->ajaxReturn(array('code'=>1,'id'=>$order_id),'json');
        }else{
            $this->ajaxReturn(array('code'=>2),'json');
        }
    }
       //添加收货地址
       public function addaddress()
       {
            $code = I('post.code');
            $uid = I('post.uid');
            if($code == 1){
                M('address')->where('user_id = '.$uid)->setField('code',0);
            }
            $data = [
                'name' => I('post.name'),
                'user_id' => $uid,
                'phone' => I('post.phone'),
                'address' => I('post.address'),
                'details' => I('post.xq'),
                'code' => $code
            ];
            if(M('address')->add($data)){
                $this->ajaxReturn(array('code'=>1,'msg'=>'添加成功！'),'json');
            }else{
                $this->ajaxReturn(array('code'=>2,'msg'=>'添加失败！'),'json');
            }
       }

    //确定订单
    public function quedan()
    {
        $order_id = I('post.order_id');
        $data = M('order')->field('qm_order.id,qm_order.num,qm_order.zongjia,qm_goods.content,qm_goods.pic1,qm_goods.danjia1,qm_address.name,qm_address.phone,qm_address.address,qm_address.details,qm_address.id as add_id')->where('qm_order.id = '.$order_id)->join('qm_goods on qm_goods.id = qm_order.goods_id')->join('qm_address on qm_order.address_id = qm_address.id')->find();
        if($data){
            $this->ajaxReturn(array('code'=>1,'list'=>$data));
        }else{
            $this->ajaxReturn(array('code'=>2));
        }
    }
    //收货地址更新
    public function shdz_gx()
    {
        if(M('order')->where('id = '.I('post.order_id'))->setField('address_id',I('post.add_id'))){
            $this->ajaxReturn(['code'=>1,'msg'=>'收货地址更新成功！'],'json');
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'收货地址更新失败！'],'json');
        }
    }
    //数量加
    public function jia()
    {
        $order_id = I('post.order_id');
        $money = M('order')->field('qm_goods.danjia1 as money,qm_order.num')->where('qm_order.id = '.$order_id)->join('qm_goods on qm_goods.id = qm_order.goods_id')->find();
        //数量+1
        $data['num'] = $money['num'] + 1;
        //单价*数量
        $data['zongjia'] = $money['money'] * $data['num'];
        if(M('order')->where('id = '.$order_id)->save($data)){
            $this->ajaxReturn(['code'=>1,'num'=>$data['num'],'total'=>$data['zongjia']],'json');
        }else{
            $this->ajaxReturn(['code'=>2],'json');
        }
    }
    //数量减
    public function jian()
    {
        $order_id = I('post.order_id');
        $money = M('order')->field('qm_goods.danjia1 as money,qm_order.num')->where('qm_order.id = '.$order_id)->join('qm_goods on qm_goods.id = qm_order.goods_id')->find();
        //数量-1
        $data['num'] = $money['num'] - 1;
        //单价*数量
        $data['zongjia'] = $money['money'] * $data['num'];
        if(M('order')->where('id = '.$order_id)->save($data)){
            $this->ajaxReturn(['code'=>1,'num'=>$data['num'],'total'=>$data['zongjia']],'json');
        }else{
            $this->ajaxReturn(['code'=>2],'json');
        }
    }
    //余额支付
    public function yuepay()
    {
        $uid = I('post.uid');
        $zfjg = I('post.zfjg');
        if(M('users')->where('id = '.$uid)->getField('yue') <= 0){
            $this->ajaxReturn(['code'=>1,'msg'=>'余额不足，请及时充值！']);
        }else{
            if(M('users')->where('id = '.$uid)->setDec('yue',$zfjg)){
                $this->ajaxReturn(['code'=>2,'msg'=>'支付成功！'],'json');
            }else{
                $this->ajaxReturn(['code'=>3,'msg'=>'支付失败！'],'json');
            }
        }
    }
    
    //支付成功后
    public function pay()
    {
        //支付方式 0未支付 1支付宝 2微信 3余额
        $pay_type = I('post.code');
        $order_id = I('post.order_id');
        $data = [
            'pay_type' => $pay_type,
            'zhuangtai' => 2
        ];
        if(M('order')->where('id = '.$order_id)->save($data)){
            $order = M('order')->where('qm_order.id = '.$order_id)->field('qm_goods.content,qm_order.id,qm_order.merch_id,qm_order.zongjia,qm_order.user_id')->join('qm_goods on qm_goods.id = qm_order.goods_id')->find();
            $data = [
                'user_id' => $order['user_id'],
                'title' => $order['content'],
                'money' => $order['zongjia'],

                'order_id' => $order['id'],
                'time' => time()
            ];

            M('moneyjl')->add($data);
            $this->ajaxReturn(['code'=>1],'json');
        }else{
            $this->ajaxReturn(['code'=>2],'json');
        }
    }

    //待付款
    public function daifukuan()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_order.id,qm_goods.content,qm_goods.pic1,qm_order.zongjia,qm_order.num,qm_order.time')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 1 and qm_order.user_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //待发货
    public function daifahuo()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_order.id,qm_goods.content,qm_goods.pic1,qm_order.zongjia,qm_order.num,qm_order.time')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 2 and qm_order.user_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //待收货
    public function daishouhuo()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_order.id,qm_goods.content,qm_goods.pic1,qm_order.zongjia,qm_order.num,qm_order.time')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 4 and qm_order.user_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //待评论
    public function daiping()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_order.id,qm_goods.content,qm_goods.pic1,qm_order.zongjia,qm_order.num,qm_order.time,qm_order.zhuangtai')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 5 or qm_order.zhuangtai = 7 or qm_order.zhuangtai = 9 and qm_order.user_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //确定收货
    public function shouhuo()
    {
        $order_id = I('post.order_id');
        if(M('order')->where('id = '.$order_id)->setField('zhuangtai',5)){
            $order = M('order')->field('zongjia,merch_id')->where('id = '.$order_id)->find();
            if(M('users')->where('id = '.$order['merch_id'])->setInc('yue',$order['zongjia'])){
                $this->ajaxReturn(['code'=>1,'msg'=>'确定收货成功！'],'json');
            }else{
                M('order')->where('id = '.$order_id)->setField('zhuangtai',4);
                $this->ajaxReturn(['code'=>2,'msg'=>'确定收货失败！'],'json');
            }
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'确定收货失败！'],'json');
        }
    }

    //申请退款
    public function tuikuan()
    {
        if(M('order')->where('id = '.I('post.order_id'))->setField('zhuangtai',7)){
            $this->ajaxReturn(['code'=>1,'msg'=>'申请退款成功！']);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'申请退款失败！']);
        }
    }


    //商家查看发货
    public function shop_fahuo()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_goods.pic1,qm_order.id,qm_order.zongjia,qm_order.time,qm_goods.content')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 2 and qm_order.merch_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //商家处理发货
    public function shop_fh()
    {
        // $string = I('post.data');
        // $b=preg_match_all('/\d+/',$string,$arr);
        $data['kuai_dan'] = I('post.kuai_dan');
        $data['kuaidi'] = I('post.kuaidi');
        $data['zhuangtai'] = 4;
        if(M('order')->where('id = '.I('post.order_id'))->save($data)){
            $this->ajaxReturn(['code'=>1,'msg'=>'订单更新成功！']);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'订单更新失败！']);
        }
    }

    //商家查看待收货
    public function shop_shouhuo()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_goods.pic1,qm_order.id,qm_order.zongjia,qm_order.time,qm_goods.content')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 4 and qm_order.merch_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //商家查看待付款
    public function shop_fukuan()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_goods.pic1,qm_order.id,qm_order.zongjia,qm_order.time,qm_goods.content')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 1 and qm_order.merch_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //商家查看待评价
    public function shop_daiping()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_goods.pic1,qm_order.id,qm_order.zongjia,qm_order.time,qm_goods.content')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 5 and qm_order.merch_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //商家查看退款
    public function shop_tuikuan()
    {
        $uid = I('post.uid');
        $list = M('order')->field('qm_goods.pic1,qm_order.id,qm_order.zongjia,qm_order.time,qm_goods.content')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.zhuangtai = 7 and qm_order.merch_id = '.$uid)->select();
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr( $value['content'], 1, 15, 'utf-8' );
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无订单数据！']);
        }
    }

    //商家处理退款
    public function shop_tk()
    {
        $order_id = I('post.order_id');
        if(M('order')->where('id = '.$order_id)->setField('zhuangtai',8)){
            //获取订单支付金额、订单号、购买用户id和商家id
            $order = M('order')->field('danhao,user_id,merch_id,zongjia')->where('id = '.$order_id)->find();
            if(M('users')->where('id = '.$order['merch_id'])->getField('yue') < $order['zongjia']){
                M('order')->where('id = '.$order_id)->setField('zhuangtai',7);
                $this->ajaxReturn(['code'=>3,'msg'=>'帐户余额不足，请及时充值退款给用户！']);
            }else{
                if(M('users')->where('id = '.$order['merch_id'])->setDec('yue',$order['zongjia']) && M('users')->where('id = '.$order['user_id'])->setInc('yue',$order['zongjia'])){
                    $tui = array('user_id'=>$order['merch_id'],'title'=>$order['danhao'].'退款','money'=>$order['zongjia'],'time'=>time());
                    $shou = array('user_id'=>$order['user_id'],'title'=>$order['danhao'].'退款','money'=>$order['zongjia'],'time'=>time());
                    if(M('users')->where('id = '.$order['user_id'])->getField('qimaizhi') <= $order['zongjia']){
                        M('users')->where('id = '.$order['user_id'])->setField('qimaizhi',0);
                    }else{
                        M('users')->where('id = '.$order['user_id'])->setDec('qimaizhi',$order['zongjia']);
                    }
                    if(M('moneyjl')->add($tui) && M('moneyjl')->add($shou)){
                        $this->ajaxReturn(['code'=>1,'msg'=>'已从帐户转账到用户钱包'],'json');
                    }else{
                        $this->ajaxReturn(['code'=>2,'msg'=>'退款失败，请联系管理员！'],'json');
                    }
                }else{
                    $this->ajaxReturn(['code'=>2,'msg'=>'退款失败，请联系管理员！'],'json');
                }
            }
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'退款失败，请联系管理员！'],'json');
        }
    }

    //用户打开评论页面
    public function ping()
    {
        // $data = M('order')->field('qm_merch.pic,qm_merch.merch_name,qm_goods.content')->join('qm_goods on qm_goods.id = qm_order.goods_id')->join('qm_merch on qm_merch.user_id = qm_order.merch_id')->where('qm_order.id = '.I('post.order_id'))->find();
        $data = M('order')->field('qm_goods.pic1,qm_goods.content,qm_goods.danjia1')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.id = '.I('post.order_id'))->find();
        $data['content'] = mb_substr($data['content'],0,15,'utf-8');
        if($data){
            $this->ajaxReturn(['code'=>1,'data'=>$data]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'参数错误！']);
        }
    }

    //评论操作
    public function addping()
    {
        $order_id = I('post.order_id');
        $goods_id = M('order')->where('id = '.$order_id)->getField('goods_id');
        $data = [
            'content' => I('post.content'),
            'user_id' => I('post.uid'),
            'goods_id' => $goods_id,
            'addtime' => time()
        ];
        if(M('pingjia')->add($data) && M('order')->where('id = '.$order_id)->setField('zhuangtai',6)){
            $this->ajaxReturn(['code'=>1,'msg'=>'评价成功，感谢您的支持！']);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'评价失败，网络发生错误！']);
        }
    }

    //订单详情
    public function shop_details()
    {
        $data = M('order')->field('qm_order.kuaidi,qm_order.kuai_dan,qm_order.danhao,qm_order.zhuangtai,qm_goods.pic1,qm_goods.content,qm_order.zongjia,qm_order.num,qm_order.time,qm_address.name,qm_address.address,qm_address.details,qm_address.phone')->join('qm_address on qm_address.id = qm_order.address_id')->join('qm_goods on qm_goods.id = qm_order.goods_id')->where('qm_order.id = '.I('post.order_id'))->find();
        $code = array(1=>'待付款',2=>'待发货',3=>'发货中',4=>'待收货',5=>'待评价',6=>'已完成',7=>'申请退款',8=>'已退款',9=>'已取消');
        if($data){
            $data['content'] = mb_substr($data['content'],0,10,'utf-8');
            $data['zhuangtai'] = $code[$data['zhuangtai']];
            $data['time'] = date('m-d H:i',$data['time']);
            $this->ajaxReturn(['code'=>1,'data'=>$data]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'参数错误！']);
        }
    }

    //订单查询
    public function search_dan()
    {
        $ddbh = I('post.key');
        $uid = I('post.uid');
        $list = M('order')->field('qm_order.id,qm_users.pic,qm_users.nick,qm_order.zhuangtai,qm_goods.content,qm_order.zongjia,qm_order.time')->where('qm_order.danhao = '.$ddbh.' and qm_order.merch_id = '.$uid)->join('qm_goods on qm_goods.id = qm_order.goods_id')->join('qm_users on qm_users.id = qm_order.user_id')->select();
        $code = array(2=>'待发货',3=>'发货中',4=>'待收货',5=>'待评价',6=>'已完成',7=>'申请退款',8=>'已退款',9=>'已取消');
        foreach ($list as $key => $value) {
            $list[$key]['content'] = mb_substr($value['content'],0,10,'utf-8');
            $list[$key]['zhuangtai'] = $code[$value['zhuangtai']];
        }
        if($list){
            $this->ajaxReturn(['code'=>1,'list'=>$list]);
        }else{
            $this->ajaxReturn(['code'=>2,'msg'=>'暂无查找到您的订单！']);
        }
    }
}