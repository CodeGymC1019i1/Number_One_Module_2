<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */
const BOTH0 = "Love-All";
const BOTH1 = "Fifteen-All";
const BOTH2 = "Thirty-All";
const BOTH3 = "Forty-All";
const BOTH4 = "Deuce";
class TennisGame
{
    public $score = '';

    public function getScore($player1Score, $player2Score)
    {

        if ($player1Score == $player2Score) {
            return $this->isEqual($player1Score);
        } else if ($player1Score >= 4 || $player2Score >= 4) {
            return $this->isAdvantageOrWin($player1Score, $player2Score);
        } else {
            return $this->checkPoint($player1Score, $player2Score);
        }
    }

    public function isEqual($player1Score)
    {
        switch ($player1Score) {
            case 0:
                $this->score = BOTH0;
                break;
            case 1:
                $this->score = BOTH1;
                break;
            case 2:
                $this->score = BOTH2;
                break;
            case 3:
                $this->score = BOTH3;
                break;
            default:
                $this->score = BOTH4;
                break;
        }
        return $this->score;
    }

    public function isAdvantageOrWin($player1Score, $player2Score)
    {
        $minusResult = $player1Score - $player2Score;
        if ($minusResult == 1) $this->score = "Advantage player1";
        else if ($minusResult == -1) $this->score = "Advantage player2";
        else if ($minusResult >= 2) $this->score = "Win for player1";
        else $this->score = "Win for player2";
        return $this->score;
    }

    public function checkPoint($player1Score, $player2Score)
    {
        for ($i = 1; $i < 3; $i++) {
            if ($i == 1) $tempScore = $player1Score;
            else {
                $this->score .= "-";
                $tempScore = $player2Score;
            }
            switch ($tempScore) {
                case 0:
                    $this->score .= "Love";
                    break;
                case 1:
                    $this->score .= "Fifteen";
                    break;
                case 2:
                    $this->score .= "Thirty";
                    break;
                case 3:
                    $this->score .= "Forty";
                    break;
            }
        }
        return $this->score;
    }

    public function __toString()
    {
        return $this->score;
    }
}