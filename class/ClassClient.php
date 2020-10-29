<?php 
    namespace Classes;
    class ClassClient{
        private $client, $http;

        protected function getClient(){
            $this->http=new \GuzzleHttp\Client(["verify"=>false]);
            $this->client=new \Google_Client();
            $this->client->setHttpClient($this->http);
            $this->client->setAuthConfig('../lib/credentials.json');
            $this->client->addScope(\Google_Service_Drive::DRIVE);
            $this->client->setAccessType('offline');
            return $this->client;
        }
    }
 ?>