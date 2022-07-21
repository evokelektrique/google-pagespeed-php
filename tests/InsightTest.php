<?php

use PHPUnit\Framework\TestCase;
use PageSpeed\Insight;

final class InsightTest extends TestCase {

    public function testExample(): void {
        $api_key = "";
        $url = "https://google.com";
        $insight = new Insight($url, $api_key);
        $result = $insight->audit();

        var_dump($result);
    }

}
