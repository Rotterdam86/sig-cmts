<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_base_title_correct_title()
    {
        //dd(page_title(''));
        $this->assertEquals('SIG@CMTS - Horizon', page_title(''));
    }

    /** @test */
    public function page_title_should_return_the_correct_title()
    {
        //dd(page_title(''));
        $this->assertEquals('SIG@CMTS - Horizon', page_title('cmts'));
    }
}
