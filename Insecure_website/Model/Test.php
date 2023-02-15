<?php

class Test {
    public $level;
    public $title;
    public $score;
    public $question;
    private $answer;
    
    public function __construct($level, $title, $score, $question, $answer) {
        $this->level = $level;
        $this->title = $title;
        $this->question = $question;
        $this->score = $score;
        $this->answer = $answer;
        
    }
    
    function getAnswer() {
        return $this->answer;
    }

    function setAnswer($answer): void {
        $this->answer = $answer;
    }

}
