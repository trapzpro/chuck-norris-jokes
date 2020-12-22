<?php

namespace Trapzpro\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'When Chuck Norris was born he drove his mom home from the hospital.',
        'Chuck Norris can put out a fire with a gallon of gasoline.',
        'Chuck Norris can cut a knife with butter.',
        'Chuck Norris can kill your imaginary friends.',
        'Chuck Norris can hear sign language.',
        'Chuck Norris can speak French… In Russian.',
        'Chuck Norris beat the sun in a staring contest.',
        'Chuck Norris once climbed Mt. Everest in 15 minutes, 14 of which he was building a snowman at the bottom.',

    ];

    public function __construct(array $jokes = null)
    {
        
        if($jokes){
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
