<?php

namespace PageSpeed;
use PageSpeed\Exception;

class Insight {
	private $api_key;
	private $target_url;
    const GOOGLE_API_V5_URL = "https://www.googleapis.com/pagespeedonline/v5/runPagespeed";

	public function __construct(string $target_url = "", string $api_key = "") {
        if(empty($target_url)) throw new EmptyArgumentException();

        $this->api_key = $api_key;
        $this->target_url = $target_url;
	}

	public function audit(): array {
        $url = $this->build_url();
        $response = file_get_contents($url);

        return json_decode($response, true);
    }

    private function build_url(): string {
        $query_data = [
            "url" => $this->target_url
        ];

        if(!empty($this->api_key)) {
            $query_data["key"] = $this->api_key;
        }

        return self::GOOGLE_API_V5_URL . "?" . http_build_query($query_data);
    }
}
