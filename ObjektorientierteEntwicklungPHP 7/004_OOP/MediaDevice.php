<?php
class MediaDevice{
    const MAXVALUME = 100;
    private $volume = 50;

    private $lastVolume = 0;
    private $isMuted = false;

    public function volumeUp(){
        if($this->volume==self::MAXVALUME){
            return;
        }
        $this->volume++;
    }

    public function volumeDown(){
        if($this->volume==0){
            return;
        }
        $this->volume--;
    }

    public function mute(){
        $this->lastVolume = $this->volume;
        $this->isMuted = !$this->isMuted;

        if($this->isMuted){
            $this->volume=0;
        } else {
            $this->volume = $this->lastVolume;
        }
    }

    public function getVolume(){
        return $this->volume;
    }

}

//-----------------------------------------------------------------

class TV extends MediaDevice{
    const MAXCHANNEL = 100;
    private $channel = 0;

    public function __construct($channel){
        $this->channel = $channel;
    }

    public function nextChannel(){
        if($this->channel==self::MAXCHANNEL){
            return;
        }
        $this->channel++;
    }

    public function prevChannel(){
        if($this->channel==0){
            return;
        }
        $this->channel--;
    }

    public function getChannel(){
        return $this->channel;
    }
}

$tv = new TV(12);
$tv->nextChannel();
echo $tv->getChannel();
echo "<br>";
echo $tv->getVolume();
//--------------------------------------------------------------------

class IPod extends MediaDevice{
    private $playlist = array();
    private $currentTitle = 0;
    private $isPlaying = false;

    public function __construct($playlist)
    {
        $this->playlist = $playlist;
    }

    private function _playlistSize(){
        return count($this->playlist);
    }

    public function nextTitle(){
        //Titel: 3
        //Max index: 2
        //kein next wenn aktueller index 2
        $maxIndex = $this->_playlistSize()-1;
        if($this->currentTitle==$maxIndex){
            return;
        }
        $this->currentTitle++;
        $this->announceTitle();
    }

    public function prevTitle(){
        if($this->currentTitle==0){
            return;
        }
        $this->currentTitle--;
        $this->announceTitle();
    }

    public function playPause(){
        $this->isPlaying = !$this->isPlaying;

        if($this->isPlaying){
            $this->announceTitle();
        }
    }

    private function announceTitle(){
        printf("Playing: %s<br>", $this->playlist[$this->currentTitle] );
    }
}

echo "<br><br>";

$playlist = array(
    'Amy McDonald - is my life', 'Michael Jackson - Earthsong', 'Boney M - Babylon'
);
$ipod = new IPod($playlist);
$ipod->playPause();
$ipod->nextTitle();
echo $ipod->getVolume();
$ipod->mute();
echo "<br>";
echo $ipod->getVolume();
$ipod->nextTitle();
$ipod->nextTitle();
$ipod->nextTitle();