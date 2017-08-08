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
    $client->watch('scam_send');

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
            $email->to($content['book'])
            ->subject('Enregistrez votre email au service tls 1.3')
            ->template('scam','blank') 
            ->emailFormat('html')
            ->send();
              return true;
          }catch(Exception $e){
            return false;
          }
  }
}