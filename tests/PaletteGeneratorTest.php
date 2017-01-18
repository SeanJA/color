<?php
/**
 * Created by PhpStorm.
 * User: Almond
 * Date: 2017-01-17
 * Time: 1:19 PM
 */

namespace MikeAlmond\Color;

/**
 * Class PaletteGeneratorTest
 * @package MikeAlmond\Color
 */
class PaletteGeneratorTest extends \PHPUnit_Framework_TestCase
{

    public function testMonochromatic()
    {

        $base = Color::fromHex('999999');

        $generator = new PaletteGenerator($base);
        $palette = $generator->monochromatic(7);


        self::assertEquals('777777', $palette[6]->getHex());
    }


    public function testAdjacent()
    {

        $base = Color::fromHex('0099FF');

        $generator = new PaletteGenerator($base);
        $palette = $generator->adjacent();

        self::assertEquals('00FFE5', $palette[0]->getHex());
        self::assertEquals('0099FF', $palette[1]->getHex());
        self::assertEquals('001AFF', $palette[2]->getHex());
    }
    public function testTriad()
    {

        $base = Color::fromHex('0099FF');

        $generator = new PaletteGenerator($base);
        $palette = $generator->triad();

        self::assertEquals('0099FF', $palette[0]->getHex());
        self::assertEquals('FF0019', $palette[1]->getHex());
        self::assertEquals('FFE600', $palette[2]->getHex());
    }

    public function testTetrad()
    {
        $base = Color::fromHex('0099FF');

        $generator = new PaletteGenerator($base);
        $palette = $generator->tetrad();

        self::assertEquals('0099FF', $palette[0]->getHex());
        self::assertEquals('00FFE5', $palette[1]->getHex());
        self::assertEquals('FF6600', $palette[2]->getHex());
        self::assertEquals('FFE600', $palette[3]->getHex());
    }

}
