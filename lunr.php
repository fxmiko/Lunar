<?php

/**
 * @category  Lunar Crush Refferal
 * @package   WARIFP
 * @author    Wahyu Arif Purnomo <hi@warifp.co>
 */
require __DIR__ . '/vendor/autoload.php';
include 'config.php';

use Curl\Curl;

$curl = new Curl();

class Lunr
{
    function __construct()
    {
        $this->curl = new Curl();
    }

    public function generateToken()
    {
        $this->curl->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36');
        $this->curl->setHeader('Host', 'api.lunarcrush.com');
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Google Chrome";v="95", "Chromium";v="95", ";Not A Brand";v="99"');
        $this->curl->setHeader('sec-ch-ua-mobile', '?0');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Accept', '*/*');
        $this->curl->setHeader('Origin', 'https://lunarcrush.com');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-site');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->get('https://api.lunarcrush.com/v2?requestAccess=lunar&platform=web&device=Chrome&deviceId=LDID-85ddc30b-ed53-4439-a403-5cd78ffe8e69&validator=Z5rrST0utr5TnnTp0n0T5SrOZhhtZtwp&clientVersion=lunar-20211013&userAgent=Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20Win64%3B%20x64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F95.0.4638.54%20Safari%2F537.36&viewportSize=1536x763&screenSize=1536x864&locale=id-ID&token=null');

        if ($this->curl->error) {
            echo 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
        } else {
            return $this->curl->response;
        }
    }

    public function traceValue($token, $refferal)
    {
        $this->curl->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36');
        $this->curl->setHeader('Host', 'api.lunarcrush.com');
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Google Chrome";v="95", "Chromium";v="95", ";Not A Brand";v="99"');
        $this->curl->setHeader('sec-ch-ua-mobile', '?0');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Accept', '*/*');
        $this->curl->setHeader('Origin', 'https://lunarcrush.com');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-site');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->post('https://api.lunarcrush.com/v2?data=track&key=' . $token, '{"items":[{"type":"referrer","area":"web","value":"https://lunarcrush.com/s/' . $refferal . '"}]}');

        if ($this->curl->error) {
            echo 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
        } else {
            return $this->curl->response;
        }
    }

    public function getOtp($email, $token)
    {
        $this->curl->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36');
        $this->curl->setHeader('Host', 'api.lunarcrush.com');
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Google Chrome";v="95", "Chromium";v="95", ";Not A Brand";v="99"');
        $this->curl->setHeader('sec-ch-ua-mobile', '?0');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Accept', '*/*');
        $this->curl->setHeader('Origin', 'https://lunarcrush.com');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-site');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->get('https://api.lunarcrush.com/v2?data=auth&action=get-code&email=' . $email . '&key=' . $token);

        if ($this->curl->error) {
            echo 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
        } else {
            return $this->curl->response;
        }
    }

    public function verifyOtp($id, $otp, $token, $refferal)
    {
        $this->curl->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36');
        $this->curl->setHeader('Host', 'api.lunarcrush.com');
        $this->curl->setHeader('Connection', 'keep-alive');
        $this->curl->setHeader('sec-ch-ua', '"Google Chrome";v="95", "Chromium";v="95", ";Not A Brand";v="99"');
        $this->curl->setHeader('sec-ch-ua-mobile', '?0');
        $this->curl->setHeader('sec-ch-ua-platform', '"Windows"');
        $this->curl->setHeader('Accept', '*/*');
        $this->curl->setHeader('Origin', 'https://lunarcrush.com');
        $this->curl->setHeader('Sec-Fetch-Site', 'same-site');
        $this->curl->setHeader('Sec-Fetch-Mode', 'cors');
        $this->curl->setHeader('Sec-Fetch-Dest', 'empty');
        $this->curl->get('https://api.lunarcrush.com/v2?data=auth&action=login&challenge=' . $id . '&code=' . $otp . '&share=' . $refferal . '&referral=&key=' . $token);

        if ($this->curl->error) {
            echo 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
        } else {
            return $this->curl->response;
        }
    }
}

function dot($str)
{
    if ((strlen($str) > 1) && (strlen($str) < 31)) {
        $ca = preg_split("//", $str);
        array_shift($ca);
        array_pop($ca);
        $head = array_shift($ca);
        $res = dot(join('', $ca));
        $result = array();
        foreach ($res as $val) {
            $result[] = $head . $val;
            $result[] = $head . '.' . $val;
        }
        return $result;
    }
    return array($str);
}

$file = file_get_contents($emailList);
$lists = explode("\r\n", $file);

foreach ($lists as $key => $email) {

    echo '[+] ' . $email . "\n";

    // init
    $lunr = new Lunr();
    $generateToken = $lunr->generateToken();
    $imapHost = "{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX";

    if ($generateToken->token) {
        $traceValue = $lunr->traceValue($generateToken->token, $refferal);

        if ($traceValue->data->success) {
            $getOtp = $lunr->getOtp($email, $generateToken->token);

            if ($getOtp->data->challenge_code) {

                $challenge_code = $getOtp->data->challenge_code;
                echo '[+] Your code on mail: ' . $challenge_code . "\n";

                otp:
                $imapRead = imap_open($imapHost, $imapEmail, $imapPassword);
                $imapFind = imap_search($imapRead, 'SUBJECT "LunarCrush Login Verification: ' . $challenge_code . '"');
                $matchFind = $imapFind[0] ?? null;

                if ($matchFind) {
                    $header = imap_header($imapRead, $matchFind);
                    $html = imap_qprint(imap_fetchbody($imapRead, $matchFind, 1));
                    $input_lines = trim(preg_replace('/\s+/', ' ', $html));
                    preg_match_all('/<span style="font-size: 20px;letter-spacing:8px;font-weight:bold"> (.*) <\/span> <\/p> <div style="padding:18px"><\/div>/', $input_lines, $output_array);
                    $otp = $output_array[1][0];

                    echo '[+] OTP: ' . $otp . "\n";

                    $verifyOtp = $lunr->verifyOtp($getOtp->data->id, $otp, $generateToken->token, $refferal);
                    echo '[+] Success [' . $verifyOtp->data->email . ' | ' . $verifyOtp->data->token . ' | ' . $verifyOtp->data->role . ' | Level ' . $verifyOtp->data->level . "]\n\n";
                } else {
                    goto otp;
                }
            }
        }
    }
}
