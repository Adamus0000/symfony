<?php

namespace App\Services;


use Psr\Log\LoggerInterface;

class GiftService{

        public  $gifts=['flowers','car','piano','money'];





        public function __construct(LoggerInterface $logger)
        {
            $logger->info('yeeeeeeeee');
            shuffle($this->gifts);
        }

}



?>