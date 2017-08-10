<?php 

class Model
{
    protected $placeholder=[];
    protected $name;
    protected $mail;
    protected $comment;
    protected $select;
        
   public function __construct()
      {
          $this->placeholder['%TITLE%'] = 'Contact Form';
          $this->placeholder['%SUCCESSFUL_SENT%'] = '';
          $this->placeholder['%ERROR_SENT%'] = '';
          $this->placeholder['%NAME%'] = '';
          $this->placeholder['%MAIL%'] = '';
          $this->placeholder['%COMMENT%'] = '';
          $this->placeholder['%COUNT%'] = '';
          $this->placeholder['%ENTER%'] = '';
          $this->placeholder['%CHECK%'] = '';
          $this->placeholder['%MAIL_EM%'] = '';
          $this->placeholder['%MAIL_CORR%'] = '';
          $this->placeholder['%COMMENTS_COUNT%'] = '';
      }
              
   public function getArray()
      {        
        return $this->placeholder;
      }
                          
    public function checkForm()
    {
            $this->name = $this->checkName($_POST['name']);
            $this->placeholder['%NAME%'] = $this->name;
            $this->select = $this->checkSelect($_POST['select']);
            $this->mail = $this->checkEmail($_POST['mail']);
            $this->placeholder['%MAIL%'] = $this->mail;
            $this->comment = $this->checkComment($_POST['comment']);
            $this->placeholder['%COMMENT%'] = $this->comment;
           if($this->name !== null && $this->select !== null && $this->mail !==null && $this->comment !== null)
           {
               return true;
           }

      }

    public function checkName($data)
    {
      if(isset($data) && !empty($data))
      {
          if(mb_strlen($data)< 4 )
          {
              $this->placeholder['%COUNT%'] = 'Name must be more than 4 characters';
          }
         return trim(strip_tags($data));
      }
        else
        {
            $this->placeholder['%ENTER%'] = 'No enter name';
        }
    }

    public function checkSelect($data)
    {
        if(isset($data) && strlen($data) > 0)
        {
            return trim(strip_tags(($data)));
        }
        else
        {
            $this->placeholder['%CHECK%'] = 'No check value';
        }
    }
    public function checkEmail($data)
    {
         if(isset($data) && !empty($data))
        {

            if (preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $data))
            {
                return $data;
            }
            else
            {
                $this->placeholder['%MAIL_CORR%'] = 'no correct mail';
            }

        }
        else
        {
            $this->placeholder['%MAIL_EM%'] = 'fill the field mail';
        }

    }
    public function checkComment($data)
    {
        if(isset($data) && !empty($data))
        {
            return trim(strip_tags($data));
        }
        else
        {
            $this->placeholder['%COMMENTS_CHECK%'] = 'fill the field comment';
        }
    }
                                       
    public function sendEmail()
     {
         //date_default_timezone_set('Europe/Kiev');
		$header = 'From: '.$this->mail . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n";
            $header .= "Reply-To: ".$this->mail."<". $this->mail.">\r\n" .
             $to = 'stoyatboy@gmail.com';
             $subject = $this->select;
             $comment = $this->comment;
             $message = "From ". $this->name .PHP_EOL.
            'Subject: ' .$this->select.PHP_EOL .
             'Ip: ' . $_SERVER['REMOTE_ADDR'] . PHP_EOL . $comment;

         /**
          *  $msg = 'From: '.$this->fullNameProp."\r\n";
         $msg .= 'Message: ' . $this->msgProp . "\r\n";
         $msg .= "\r\n".'IP-adress: '. $_SERVER['REMOTE_ADDR']. "\r\n";
         $msg .= 'Date and time: '.date("Y-m-d H:i:s");
         $header = 'From: '.$this->emailProp . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n"
         . 'Reply-To: '. $this->emailProp . "\r\n" ;
          */

             $mailResult = mail($to,$subject,$message,$header);
         if ($mailResult)
         {
             $this->placeholder['%NAME%'] = '';
             $this->placeholder['%MAIL%'] = '';
             $this->placeholder['%COMMENT%'] = '';
             $this->placeholder['%SUCCESSFUL_SENT%'] = 'Message successfully sent' ;
             return true;
         }
         else
         {
             return $this->placeholder['%ERROR_SENT%']= 'Message error sent'  ;
         }


     }       
}

