<?php
    /**
     *
     */
    class StopWatch
    {
        private $startTime;
        private $endTime;
        function __construct()
        {
            $this->startTime = microtime(true);
        }
        public function get_startTime(){
            return $this->startTime;
        }
        public function get_endTime(){
            return $this->endTime;
        }
        public function start(){
            return $this->startTime  = microtime(true);
        }
        public function stop(){
            return $this->endTime  = microtime(true);
        }
        public function getElapsedTime(){
            return ($this->endTime - $this->startTime);
        }
    }
    $stopwatch = new StopWatch();
    
    echo $stopwatch->get_startTime();
    echo "<br>";
    echo $stopwatch->stop();
    echo "<br>";
    echo $stopwatch->getElapsedTime();
?>