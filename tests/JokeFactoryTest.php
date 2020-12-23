<?php

namespace Trapzpro\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Trapzpro\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_chuck_joke()
    {
        $chuckJokes = [
            'When Chuck Norris was born he drove his mom home from the hospital.',
            'Chuck Norris can put out a fire with a gallon of gasoline.',
            'Chuck Norris can cut a knife with butter.',
            'Chuck Norris can kill your imaginary friends.',
            'Chuck Norris can hear sign language.',
            'Chuck Norris can speak French… In Russian.',
            'Chuck Norris beat the sun in a staring contest.',
            'Chuck Norris once climbed Mt. Everest in 15 minutes, 14 of which he was building a snowman at the bottom.',

        ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();
        $this->assertContains($joke, $chuckJokes);
    }
}
