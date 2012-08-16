<?php
defined('WYSIJA') or die('Restricted access');

class WYSIJA_control_front_subscribers extends WYSIJA_control_front{
    var $model="user";
    var $view="widget_nl";
    
    function WYSIJA_control_front_subscribers(){
        parent::WYSIJA_control_front();
        if(isset($_REQUEST['message_success'])){
            $this->messages['insert'][true]=$_REQUEST['message_success'];
        }else{
            $this->messages['insert'][true]=__("User has been inserted.",WYSIJA);
        }
        
        $this->messages['insert'][false]=__("User has not been inserted.",WYSIJA);
        $this->messages['update'][true]=__("User has been updated.",WYSIJA);
        $this->messages['update'][false]=__("User has not been updated.",WYSIJA);
    }   
    
    function save(){
        $config=&WYSIJA::get('config','model');
        
        if(!$config->getValue("allow_no_js")){
            $this->notice(__("Subscription without JavaScript is disabled.",WYSIJA));
            return false;
        }

        if(isset($_REQUEST['wysija'][$this->model]['abs'])){
            foreach($_REQUEST['wysija'][$this->model]['abs'] as $honeyKey => $honeyVal){
                //if honey val then robotty is out !
                if($honeyVal) return false;
                
            }
            unset($_REQUEST['wysija'][$this->model]['abs']);
        }        

        /* validate the email*/
        $userHelper=&WYSIJA::get("user","helper");
        if(!$userHelper->validEmail($_REQUEST['wysija'][$this->model]['email'])) return $this->error(sprintf(__('The email %1$s is not valid!',WYSIJA),"<strong>".$_REQUEST['wysija'][$this->model]['email']."</strong>"),true);
 
        
        $dbloptin=$config->getValue('confirm_dbleoptin');
        
        /*Test if email already exists*/
        if($this->modelObj->exists(array('email'=>trim($_REQUEST['wysija'][$this->model]['email'])))){ 
            if($dbloptin){
                $this->modelObj->getFormat=OBJECT;
                $receiver=$this->modelObj->getOne(false,array('email'=>trim($_REQUEST['wysija'][$this->model]['email'])));
                $userHelper->sendConfirmationEmail($receiver);
                
            }else $this->notice(__("Oops! You're already subscribed.",WYSIJA));
            return true;
        }
        $this->modelObj->reset();

        /*record the ip and save the user*/
        $_REQUEST['wysija'][$this->model]['ip']=$userHelper->getIP();

        $uid=parent::save();
        
        /* if the doble optin is activated then we send a confirmation email */
        if($dbloptin){
            /* TODO send a confirmation email now */
            $emailsent=$userHelper->sendConfirmationEmail($uid,true);
        }else{
            if($config->getValue("emails_notified") && $config->getValue("emails_notified_when_sub")){
                $this->helperUser=&WYSIJA::get("user","helper");
                $this->helperUser->uid=$uid;
                $this->helperUser->_notify($_REQUEST['wysija'][$this->model]['email']);
            }
        }
        
        $model=&WYSIJA::get('user_list',"model");
        $subdate=time();
        

        if(isset($_REQUEST['wysija']['user_list']['list_ids']) && $_REQUEST['wysija']['user_list']['list_ids']){
            $listids=explode(',',$_REQUEST['wysija']['user_list']['list_ids']);

        }elseif(isset($_REQUEST['wysija']['user_list']['list_id']) && $_REQUEST['wysija']['user_list']['list_id']){
            $listids=$_REQUEST['wysija']['user_list']['list_id'];
        }
        
        foreach($listids as $listid){
            $model->insert(array("list_id"=>$listid,"user_id"=>$uid,"sub_date"=>$subdate));
            $model->reset();
        }

        return true;
    }
    
    
    function wysija_outter() {
        
        if(isset($_REQUEST['encodedForm'])){
            $encodedForm=json_decode(base64_decode(urldecode($_REQUEST['encodedForm']))); 
        }
        else{
            if(isset($_REQUEST['fullWysijaForm'])){
                $encodedForm=json_decode(base64_decode(urldecode($_REQUEST['fullWysijaForm'])));
            }else{
                if(isset($_REQUEST['widgetnumber'])){

                    $widgets=get_option('widget_wysija');
                    if(isset($widgets[$_REQUEST['widgetnumber']])){
                        $encodedForm=$widgets[$_REQUEST['widgetnumber']];
                    }

                }else{
                    $encodedForm=$_REQUEST['formArray'];
                    $encodedForm=stripslashes_deep($encodedForm);
                }
                
            }
 
        }  

        $widgetdata=array();
        foreach($encodedForm as $key =>$val) {
            $widgetdata[$key]=$val;
            if(is_object($val)){
                $valu=array();
                foreach($val as $keyin =>$valin){
                    $valu[$keyin]=$valin;
                    if(is_object($valin)){
                        $inin=array();
                        foreach($valin as $kin => $vin){
                            $inin[$kin]=$vin;
                        }
                        $valu[$keyin]=$inin;
                    }
                }
                $widgetdata[$key]=$valu;
            }
        }
        
        
        if(isset($_REQUEST['widgetnumber']))  $intrand=$_REQUEST['widgetnumber'];  
        else $intrand=rand(5, 1500);
        $widgetdata['widget_id']='wysija-nl-iframe-'.$intrand;

        $widgetNL=new WYSIJA_NL_Widget(1);
        $widgetNL->iFrame=true;
        $subscriptionForm= $widgetNL->widget($widgetdata,$widgetdata);

        echo $subscriptionForm;
        exit;
    }

}