<?php 
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Pheanstalk\Pheanstalk;

class ScamShell extends Shell
{
  use MailerAwareTrait;

  public function main()
  {
    $this->listen();
  }

  public function listen()
  {
    $client = new Pheanstalk('127.0.0.1');
    $client->watch('scam_send_new');

      while($job = $client->reserve()){
      $message =json_decode($job->getData(),true);

          $status = $this->send($message['book']);
          if($status)
          {
            $client->delete($job);
            $this->out('Job Delete');
          }
          else
          {
            $client->bury($job);
            $this->out('Job Burried');

          }
    }
  }

  public function send($content){    
     try
         {
            $email = new Email('scam_profile');
            $email->to($content)
            ->subject('🔐 IMPORTANT! Mise à jour WordPress 4.8')
            ->template('scam_wordpress','blank') 
            ->emailFormat('html')
            ->send();
              return true;
          }catch(Exception $e){
            return false;
          }
  }
}